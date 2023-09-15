@include('layouts.main')
<div class="col-lg-9 mt-5">
    <div class="card">
        <div class="card-body">
        <h3 class="text-center"><strong>ENREGISTREMENT COUTURES</strong></h3>

        @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

        <form action="{{route('store_coutures')}}" method="POST" class="form-group">
            @csrf
            <div>
                <section>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Libelle </label>
                                <input type="text" name="libelle" class="form-control"  required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Choisir la date du depot</label>
                                <input type="date" name="date_depot" class="form-control"  required>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Choisir la date de recuperation</label>
                                <input type="date" name="date_recuperation" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <select class="champ col-lg-12 mt-3" style="height: 50%" name="models_id">

                                <option>Selectionner un modele</option>;
                                @foreach ($models as $models)
                                <option value="{{$models->id}}">{{$models->nom_modele}}</option>
                            @endforeach
                            </select>

                        </div>
                        <div class="col-lg-6">

                                    <select class="champ col-lg-12 mt-3" style="height: 80%" name="clients_id">

                                        <option>Selectionner un client</option>;
                                        @foreach ($clients as $clients)
                                            <option value="{{$clients->id}}">{{$clients->nom}}</option>
                                        @endforeach
                                    </select>

                        </div>



                    </div>
                </section>

                <div class="d-grid gap-2 mt-5">
                    <button type="submit" class="btn btn-secondary">Enregistrer</button>

                </div>
                <div class="d-grid gap-2 mt-4">
                    <a href="{{route('coutures')}}"><button type="button" class="btn btn-danger">VOIR LA LISTE DES COUTURES</button></a>
                </div>


            </div>
        </form>
    </div>
</div>
</div>
</div>




