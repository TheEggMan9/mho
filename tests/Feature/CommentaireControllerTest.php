<?php

namespace Tests\Feature;

use App\Models\Commentaire;
use App\Models\CommentaireLike;
use App\Models\Fiche;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CommentaireControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function un_utilisateur_authentifie_peut_poster_un_commentaire(): void
    {
        $user = User::factory()->create();
        $fiche = Fiche::factory()->create();

        $response = $this->actingAs($user)->postJson("/commentaires/{$fiche->id}", [
            'contenu' => 'Ceci est un super commentaire.',
        ]);

        $response->assertOk();
        $response->assertJson([
            'success' => true,
        ]);
        $response->assertJsonPath('commentaire.contenu', 'Ceci est un super commentaire.');

        $this->assertDatabaseHas('commentaires', [
            'contenu' => 'Ceci est un super commentaire.',
            'user_id' => $user->id,
            'fiche_id' => $fiche->id,
        ]);
    }

    /** @test */
    public function un_invite_ne_peut_pas_poster_de_commentaire(): void
    {
        $fiche = Fiche::factory()->create();

        $response = $this->postJson("/commentaires/{$fiche->id}", [
            'contenu' => 'Commentaire invité',
        ]);

        // Middleware auth : redirection (ou 401 en JSON selon config d'exception handler)
        $response->assertStatus(401);

        $this->assertDatabaseMissing('commentaires', [
            'contenu' => 'Commentaire invité',
        ]);
    }

    /** @test */
    public function le_commentaire_est_refuse_si_trop_court(): void
    {
        $user = User::factory()->create();
        $fiche = Fiche::factory()->create();

        $response = $this->actingAs($user)->postJson("/commentaires/{$fiche->id}", [
            'contenu' => 'Hi',
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors('contenu');
    }

    /** @test */
    public function le_commentaire_est_refuse_si_vide(): void
    {
        $user = User::factory()->create();
        $fiche = Fiche::factory()->create();

        $response = $this->actingAs($user)->postJson("/commentaires/{$fiche->id}", [
            'contenu' => '',
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors('contenu');
    }

    /** @test */
    public function le_commentaire_est_refuse_si_trop_long(): void
    {
        $user = User::factory()->create();
        $fiche = Fiche::factory()->create();

        $response = $this->actingAs($user)->postJson("/commentaires/{$fiche->id}", [
            'contenu' => str_repeat('a', 501),
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors('contenu');
    }

    /** @test */
    public function poster_sur_une_fiche_inexistante_retourne_404(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->postJson('/commentaires/999999', [
            'contenu' => 'Commentaire orphelin',
        ]);

        $response->assertStatus(404);
    }

    /** @test */
    public function le_proprietaire_peut_supprimer_son_commentaire(): void
    {
        $user = User::factory()->create();
        $fiche = Fiche::factory()->create();
        $commentaire = Commentaire::create([
            'contenu' => 'A supprimer',
            'user_id' => $user->id,
            'fiche_id' => $fiche->id,
        ]);

        $response = $this->actingAs($user)->deleteJson("/commentaires/{$commentaire->id}");

        $response->assertOk();
        $response->assertJson(['success' => true]);
        $this->assertDatabaseMissing('commentaires', ['id' => $commentaire->id]);
    }

    /** @test */
    public function un_utilisateur_ne_peut_pas_supprimer_le_commentaire_dun_autre(): void
    {
        $auteur = User::factory()->create();
        $autreUtilisateur = User::factory()->create();
        $fiche = Fiche::factory()->create();
        $commentaire = Commentaire::create([
            'contenu' => 'Commentaire protégé',
            'user_id' => $auteur->id,
            'fiche_id' => $fiche->id,
        ]);

        $response = $this->actingAs($autreUtilisateur)->deleteJson("/commentaires/{$commentaire->id}");

        $response->assertStatus(403);
        $this->assertDatabaseHas('commentaires', ['id' => $commentaire->id]);
    }

    /** @test */
    public function un_utilisateur_peut_liker_un_commentaire(): void
    {
        $user = User::factory()->create();
        $fiche = Fiche::factory()->create();
        $commentaire = Commentaire::create([
            'contenu' => 'Commentaire à liker',
            'user_id' => $user->id,
            'fiche_id' => $fiche->id,
        ]);

        $response = $this->actingAs($user)->postJson("/commentaires/{$commentaire->id}/like");

        $response->assertOk();
        $response->assertJson([
            'success' => true,
            'liked' => true,
            'count' => 1,
        ]);

        $this->assertDatabaseHas('commentaire_likes', [
            'user_id' => $user->id,
            'commentaire_id' => $commentaire->id,
        ]);
    }

    /** @test */
    public function un_utilisateur_peut_retirer_son_like_sur_un_commentaire(): void
    {
        $user = User::factory()->create();
        $fiche = Fiche::factory()->create();
        $commentaire = Commentaire::create([
            'contenu' => 'Commentaire déjà liké',
            'user_id' => $user->id,
            'fiche_id' => $fiche->id,
        ]);
        CommentaireLike::create([
            'user_id' => $user->id,
            'commentaire_id' => $commentaire->id,
        ]);

        $response = $this->actingAs($user)->postJson("/commentaires/{$commentaire->id}/like");

        $response->assertOk();
        $response->assertJson([
            'success' => true,
            'liked' => false,
            'count' => 0,
        ]);

        $this->assertDatabaseMissing('commentaire_likes', [
            'user_id' => $user->id,
            'commentaire_id' => $commentaire->id,
        ]);
    }
}