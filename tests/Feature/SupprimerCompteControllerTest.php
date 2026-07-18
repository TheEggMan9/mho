<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class SupprimerCompteControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function un_utilisateur_peut_supprimer_son_compte_avec_le_bon_mot_de_passe(): void
    {
        $user = User::factory()->create([
            'password' => Hash::make('MonMotDePasse1!'),
        ]);

        $response = $this->actingAs($user)->delete('/supprimer-compte', [
            'password' => 'MonMotDePasse1!',
        ]);

        $response->assertRedirect('/');
        $this->assertGuest();
        $this->assertDatabaseMissing('users', ['id' => $user->id]);
    }

    /** @test */
    public function la_suppression_echoue_avec_un_mauvais_mot_de_passe(): void
    {
        $user = User::factory()->create([
            'password' => Hash::make('MonMotDePasse1!'),
        ]);

        $response = $this->actingAs($user)
            ->from('/onglet/monCompte')
            ->delete('/supprimer-compte', [
                'password' => 'MauvaisMotDePasse',
            ]);

        $response->assertRedirect('/onglet/monCompte');
        $response->assertSessionHasErrors('password');
        $this->assertAuthenticatedAs($user);
        $this->assertDatabaseHas('users', ['id' => $user->id]);
    }

    /** @test */
    public function la_suppression_echoue_si_le_mot_de_passe_est_manquant(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->from('/onglet/monCompte')
            ->delete('/supprimer-compte', []);

        $response->assertSessionHasErrors('password');
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function un_invite_ne_peut_pas_supprimer_de_compte(): void
    {
        $user = User::factory()->create();

        $response = $this->delete('/supprimer-compte', [
            'password' => 'PeuImporte',
        ]);

        // Bloqué par le middleware 'auth' avant le contrôleur
        $response->assertRedirect('/onglet/seConnecter');
        $this->assertDatabaseHas('users', ['id' => $user->id]);
    }
}