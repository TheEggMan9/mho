<?php

namespace Tests\Feature;

use App\Mail\WelcomeEmail;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class CreerCompteControllerTest extends TestCase
{
    use RefreshDatabase;

    private function validPayload(array $overrides = []): array
    {
        return array_merge([
            'nom' => 'Dupont',
            'prenom' => 'Jean',
            'email' => 'jean.dupont@example.com',
            'pseudo' => 'jean_dupont',
            'password' => 'MotDePasse1!',
            'password_confirmation' => 'MotDePasse1!',
        ], $overrides);
    }

    /** @test */
    public function le_formulaire_dinscription_saffiche(): void
    {
        $response = $this->get('/onglet/creerCompte');

        $response->assertOk();
        $response->assertViewIs('onglet.creerCompte');
    }

    /** @test */
    public function un_utilisateur_peut_sinscrire_avec_des_donnees_valides(): void
    {
        Mail::fake();

        $response = $this->post('/onglet/creerCompte', $this->validPayload());

        $response->assertRedirect('/');
        $this->assertDatabaseHas('users', [
            'email' => 'jean.dupont@example.com',
            'pseudo' => 'jean_dupont',
            'is_admin' => 0,
        ]);

        $user = User::where('email', 'jean.dupont@example.com')->first();
        $this->assertAuthenticatedAs($user);
        $this->assertTrue(Hash::check('MotDePasse1!', $user->password));

        Mail::assertSent(WelcomeEmail::class, function ($mail) use ($user) {
            return $mail->hasTo($user->email);
        });
    }

    /** @test */
    public function linscription_echoue_si_lemail_est_deja_pris(): void
    {
        User::factory()->create(['email' => 'jean.dupont@example.com']);

        $response = $this->from('/onglet/creerCompte')->post(
            '/onglet/creerCompte',
            $this->validPayload()
        );

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    /** @test */
    public function linscription_echoue_si_le_pseudo_est_deja_pris(): void
    {
        User::factory()->create(['pseudo' => 'jean_dupont']);

        $response = $this->from('/onglet/creerCompte')->post(
            '/onglet/creerCompte',
            $this->validPayload(['email' => 'autre@example.com'])
        );

        $response->assertSessionHasErrors('pseudo');
        $this->assertGuest();
    }

    /** @test */
    public function linscription_echoue_si_le_mot_de_passe_ne_respecte_pas_le_format(): void
    {
        $response = $this->from('/onglet/creerCompte')->post(
            '/onglet/creerCompte',
            $this->validPayload([
                'password' => 'motdepassefaible',
                'password_confirmation' => 'motdepassefaible',
            ])
        );

        $response->assertSessionHasErrors('password');
        $this->assertGuest();
    }

    /** @test */
    public function linscription_echoue_si_la_confirmation_du_mot_de_passe_ne_correspond_pas(): void
    {
        $response = $this->from('/onglet/creerCompte')->post(
            '/onglet/creerCompte',
            $this->validPayload([
                'password' => 'MotDePasse1!',
                'password_confirmation' => 'AutreMotDePasse1!',
            ])
        );

        $response->assertSessionHasErrors('password');
        $this->assertGuest();
    }

    /** @test */
    public function linscription_echoue_si_des_champs_obligatoires_sont_manquants(): void
    {
        $response = $this->post('/onglet/creerCompte', []);

        $response->assertSessionHasErrors(['nom', 'prenom', 'email', 'pseudo', 'password']);
    }
}