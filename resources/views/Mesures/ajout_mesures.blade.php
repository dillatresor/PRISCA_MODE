@include('layouts.main')
<div class="col-lg-9 mt-5">
    <div class="card">
        <div class="card-body">
        <h3 class="text-center"><strong>NOUVELLE MESURE</strong></h3>


<div class="col-lg-10 mt-3">

@if (session('status'))
     <div class="alert-succès">
        {{session('status') }}

     </div>
      @endif

    <h1 class="text-center">FORMULAIRE MESURES</h1>
    <hr>
    <div class="container p-2 bg-danger m-1">

        <form action="{{ route('store_mesures') }}" method="POST" class="form-group row g-3">

            @csrf
                <section class="contenair p-2 bg-danger mt-3 m-3 text-light">
                    <div class="row mt-3">

                        <div class="col-md-3">
                            <label for="inputTete" class="form-label">Tete</label>
                            <input type="number" class="form-control" name="tete">
                          </div>
                          <div class="col-md-3">
                            <label for="inputCou" class="form-label">Cou</label>
                            <input type="number" class="form-control" name="cou">
                          </div>

                          <div class="col-md-3">
                            <label for="inputEpaule" class="form-label">Epaule</label>
                            <input type="number" class="form-control" name="epaule">
                          </div>
                          <div class="col-md-3">
                            <label for="inputLongueur_de_bras" class="form-label">Longueur_de_bras</label>
                            <input type="number" class="form-control" name="longueur_de_bras">
                          </div>

                          <div class="col-md-3">
                            <label for="inputPoitrine" class="form-label">Poitrine</label>
                            <input type="number" class="form-control" name="poitrine">
                          </div>
                          <div class="col-md-3">
                            <label for="inputTour_de_taille" class="form-label">Tour_de_taille</label>
                            <input type="number" class="form-control" name="tour_de_taille">
                          </div>

                          <div class="col-md-3">
                            <label for="inputcouture_exterieure" class="form-label">Couture_exterieure</label>
                            <input type="number" class="form-control" name="couture_exterieure">
                          </div>
                          <div class="col-md-3">
                            <label for="inputLongueur_du_corps" class="form-label">Longueur_du_corps</label>
                            <input type="number" class="form-control" name="longueur_du_corps">
                          </div>

                          <div class="col-md-3">
                            <label for="inputHanches" class="form-label">Hanches</label>
                            <input type="number" class="form-control" name="hanches">
                          </div>
                          <div class="col-md-3">
                            <label for="inputCuisse" class="form-label">Cuisse</label>
                            <input type="number" class="form-control" name="cuisse">
                          </div>

                          <div class="col-md-3">
                            <label for="Genou" class="form-label">Genou</label>
                            <input type="number" class="form-control" name="genou">
                          </div>
                          <div class="col-md-3">
                            <label for="inputMollet" class="form-label">Mollet</label>
                            <input type="number" class="form-control" name="mollet">
                          </div>

                          <div class="col-md-3">
                            <label for="inputCheville" class="form-label">Cheville</label>
                            <input type="number" class="form-control" name="cheville">
                          </div>
                          <div class="col-md-3">
                            <label for="inputBiceps" class="form-label">Biceps</label>
                            <input type="number" class="form-control" name="biceps">
                          </div>

                          <div class="col-md-3">
                            <label for="inputCoude" class="form-label">Coude</label>
                            <input type="number" class="form-control" name="coude">
                          </div>
                          <div class="col-md-3">
                            <label for="inputAvant_bras" class="form-label">Avant_bras</label>
                            <input type="number" class="form-control" name="avant_bras">
                          </div>

                          <div class="col-md-3">
                            <label for="inputPoignet" class="form-label">Poignet</label>
                            <input type="number" class="form-control" name="poignet">
                          </div>

                          <div class="col-md-3">
                            <label for="inputPoignet" class="form-label">poignet_coude</label>
                            <input type="number" class="form-control" name="poignet_coude">
                          </div>
                          <div class="col-md-3">
                            <label for="inputEntrejambe" class="form-label">Entrejambe</label>
                            <input type="number" class="form-control" name="entrejambe">
                          </div>

                          <div class="col-md-3">
                            <label for="inputEntrejambe" class="form-label">genou_cheville</label>
                            <input type="number" class="form-control" name="genou_cheville">
                          </div>
                          <div class="row mt-3">
                          <div class="col-md-3">
                            <label for="inputGenou_cheville" class="form-label">couture_exterieure</label>
                            <input type="number" class="form-control" name="couture_exterieure">
                          </div>
                          <div class="col-md-3 ">
                            <label for="inputHauteur_totale" class="form-label">Hauteur_totale</label>
                            <input type="number" class="form-control" name="Hauteur_totale">
                          </div>

                                    <div class="col-md-3 mt-2">
                                        <select class="champ col-lg-12" style="height: 60%" name="models_id">
                                            <option>Selectionner un modele</option>
                                            @foreach ($models as $models)
                                                <option value="{{$models->id}}">{{$models->nom_modele}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3 mt-2">

                                        <select class="champ col-lg-12" style="height: 60%" name="clients_id">

                                            <option>Selectionner un client</option>;
                                            @foreach ($clients as $clients)
                                                <option value="{{$clients->id}}">{{$clients->nom_prenom}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                        </div>
                </section>
                <div class="row m-3">
                    <div class="col-6">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-dark text-light mb-2">Ajouter</button>
                        </div>
                    </div>
                </div>
    </form>
    </div>

</section>
</body>
</html>
