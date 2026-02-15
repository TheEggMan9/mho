<div class="container text-center py-4">
    <form id="searchForm"
          data-baseurl="{{ url('heros') }}"
          data-searchurl="{{ url('/search') }}"
          data-resultatsurl="{{ url('/fiches/resultats') }}">

        <div class="input-group mb-2">
            <input type="text" class="form-control" id="input"
                   placeholder="Rechercher un personnage...">
            <button class="btn btn-primary" type="submit">Rechercher</button>
        </div>

        <div class="row mb-2">
            <div class="col">
                <select id="especeFilter" class="form-select">
                    <option value="">Toutes les espèces</option>
                    @foreach(App\Models\Espece::all() as $espece)
                        <option value="{{ $espece->id }}">
                            {{ $espece->nomEspece }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col">
                <select id="orgFilter" class="form-select">
                    <option value="">Toutes les organisations</option>
                    @foreach(App\Models\Organisation::all() as $org)
                        <option value="{{ $org->id }}">
                            {{ $org->nomOrganisation }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <ul class="list list-group"></ul>
    </form>
</div>
