<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Tests\TestCase;

class ConnexionControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // RefreshDatabase ne vide pas le cache : on nettoie le RateLimiter
        // pour éviter que des tentatives d'un test précédent polluent le suivant.
        RateLimiter::clear('test@example.com|127.0.0.1');
    }

    /** @test */
    public function le_formulaire_de_connexion_saffiche(): void
    {
        $response = $this->get('/onglet/seConnecter');

        $response->assertOk();
        $response->assertViewIs('onglet.seConnecter');
    }

    /** @test */
    public function un_utilisateur_peut_se_connecter_avec_les_bons_identifiants(): void
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('MonSuperMotDePasse1!'),
        ]);

        $response = $this->post('/onglet/seConnecter', [
            'email' => 'test@example.com',
            'password' => 'MonSuperMotDePasse1!',
        ]);

        $response->assertRedirect('/');
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function la_connexion_echoue_avec_un_mauvais_mot_de_passe(): void
    {
        User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('BonMotDePasse1!'),
        ]);

        $response = $this->from('/onglet/seConnecter')->post('/onglet/seConnecter', [
            'email' => 'test@example.com',
            'password' => 'MauvaisMotDePasse',
        ]);

        $response->assertRedirect('/onglet/seConnecter');
        $response->assertSessionHasErrors('login_error');
        $this->assertGuest();
    }

    /** @test */
    public function la_connexion_echoue_si_lemail_nexiste_pas(): void
    {
        $response = $this->from('/onglet/seConnecter')->post('/onglet/seConnecter', [
            'email' => 'inconnu@example.com',
            'password' => 'PeuImporte1!',
        ]);

        $response->assertRedirect('/onglet/seConnecter');
        $response->assertSessionHasErrors('login_error');
        $this->assertGuest();
    }

    /** @test */
    public function la_validation_echoue_si_email_ou_password_manquant(): void
    {
        $response = $this->post('/onglet/seConnecter', [
            'email' => '',
            'password' => '',
        ]);

        $response->assertSessionHasErrors(['email', 'password']);
    }

    /** @test */
    public function la_connexion_est_bloquee_apres_trop_de_tentatives(): void
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('BonMotDePasse1!'),
        ]);

        for ($i = 0; $i < 5; $i++) {
            $this->post('/onglet/seConnecter', [
                'email' => 'test@example.com',
                'password' => 'MauvaisMotDePasse',
            ]);
        }

        $response = $this->from('/onglet/seConnecter')->post('/onglet/seConnecter', [
            'email' => 'test@example.com',
            'password' => 'BonMotDePasse1!', // même avec le bon mot de passe, doit être bloqué
        ]);

        $response->assertSessionHasErrors('login_error');
        $this->assertGuest();
    }

    /** @test */
    public function un_utilisateur_connecte_peut_se_deconnecter(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/logout');

        $response->assertRedirect('/');
        $this->assertGuest();
    }
}