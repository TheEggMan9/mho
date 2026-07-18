<?php

namespace Tests\Feature;

use App\Models\Espece;
use App\Models\Fiche;
use App\Models\Organisation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SearchControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function la_recherche_retourne_les_fiches_correspondantes(): void
    {
        Fiche::factory()->create(['nomFiche' => 'Spider-Man']);
        Fiche::factory()->create(['nomFiche' => 'Iron Man']);
        Fiche::factory()->create(['nomFiche' => 'Batman']);

        $response = $this->getJson('/search?q=Man');

        $response->assertOk();
        $response->assertJsonCount(3);
    }

    /** @test */
    public function la_recherche_filtre_bien_par_terme(): void
    {
        Fiche::factory()->create(['nomFiche' => 'Spider-Man']);

        $response = $this->getJson('/search?q=Spider');

        $response->assertOk();
        $response->assertJsonCount(1);
        $response->assertJsonFragment(['nomFiche' => 'Spider-Man']);
    }

    /** @test */
    public function la_recherche_sans_terme_retourne_toutes_les_fiches(): void
    {
        Fiche::factory()->count(3)->create();

        $response = $this->getJson('/search');

        $response->assertOk();
        $response->assertJsonCount(3);
    }

    /** @test */
    public function la_page_dune_fiche_saffiche_via_son_slug(): void
    {
        $fiche = Fiche::factory()->create(['slug' => 'spider-man']);

        $response = $this->get('/heros/spider-man');

        $response->assertOk();
        $response->assertViewIs('heros.show');
        $response->assertViewHas('fiche', function ($viewFiche) use ($fiche) {
            return $viewFiche->id === $fiche->id;
        });
    }

    /** @test */
    public function une_fiche_inexistante_retourne_404(): void
    {
        $response = $this->get('/heros/fiche-inexistante');

        $response->assertStatus(404);
    }

    /** @test */
    public function les_resultats_peuvent_etre_filtres_par_espece(): void
    {
        $espece = Espece::factory()->create();
        $autreEspece = Espece::factory()->create();

        Fiche::factory()->create(['espece_id' => $espece->id]);
        Fiche::factory()->create(['espece_id' => $autreEspece->id]);

        $response = $this->getJson("/fiches/resultats?espece_id={$espece->id}");

        $response->assertOk();
        $response->assertJsonCount(1);
    }

    /** @test */
    public function les_resultats_peuvent_etre_filtres_par_organisation(): void
    {
        $organisation = Organisation::factory()->create();
        $autreOrganisation = Organisation::factory()->create();

        Fiche::factory()->create(['organisation_id' => $organisation->id]);
        Fiche::factory()->create(['organisation_id' => $autreOrganisation->id]);

        $response = $this->getJson("/fiches/resultats?organisation_id={$organisation->id}");

        $response->assertOk();
        $response->assertJsonCount(1);
    }

    /** @test */
    public function les_resultats_saffichent_en_vue_hors_ajax(): void
    {
        Fiche::factory()->count(2)->create();

        $response = $this->get('/fiches/resultats');

        $response->assertOk();
        $response->assertViewIs('fiches.resultats');
    }
}