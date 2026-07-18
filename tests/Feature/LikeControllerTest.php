<?php

namespace Tests\Feature;

use App\Models\Fiche;
use App\Models\Like;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LikeControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function un_utilisateur_authentifie_peut_liker_une_fiche(): void
    {
        $user = User::factory()->create();
        $fiche = Fiche::factory()->create();

        $response = $this->actingAs($user)->postJson("/like/{$fiche->id}");

        $response->assertOk();
        $response->assertJson([
            'liked' => true,
            'count' => 1,
        ]);

        $this->assertDatabaseHas('likes', [
            'user_id' => $user->id,
            'fiche_id' => $fiche->id,
        ]);
    }

    /** @test */
    public function un_utilisateur_authentifie_peut_retirer_son_like(): void
    {
        $user = User::factory()->create();
        $fiche = Fiche::factory()->create();
        Like::create(['user_id' => $user->id, 'fiche_id' => $fiche->id]);

        $response = $this->actingAs($user)->postJson("/like/{$fiche->id}");

        $response->assertOk();
        $response->assertJson([
            'liked' => false,
            'count' => 0,
        ]);

        $this->assertDatabaseMissing('likes', [
            'user_id' => $user->id,
            'fiche_id' => $fiche->id,
        ]);
    }

    /** @test */
    public function un_invite_ne_peut_pas_liker_une_fiche(): void
    {
        $fiche = Fiche::factory()->create();

        $response = $this->postJson("/like/{$fiche->id}");

        // Bloqué par le middleware 'auth' avant même d'atteindre le contrôleur
        $response->assertStatus(401);

        $this->assertDatabaseMissing('likes', ['fiche_id' => $fiche->id]);
    }

    /** @test */
    public function liker_une_fiche_inexistante_retourne_404(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->postJson('/like/999999');

        $response->assertStatus(404);
    }
}