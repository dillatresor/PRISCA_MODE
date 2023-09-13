@include('layouts.main')
<div class="col-lg-9 mt-5">
    <div class="card">
        <div class="card-body">
        <h3 class="text-center"><strong>ENREGISTREMENT MODELE</strong></h3>

        @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

        <form action="{{route('store_models')}}" method="POST" class="form-group">
            @csrf
            <div>
                <section>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Entrer nom modele </label>
                                <input type="text" name="nom" class="form-control"  required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Choisir image </label>
                                <input type="file" name="image" class="form-control"  required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Choisir le type</label>
                                <select name="sexe" class="form-control" required>
                                    <option value="">-----------</option>
                                    <option value="Femme">Femme</option>
                                    <option value="Homme">Homme</option>
                                    <option value="Homme">Enfant</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </section>

                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-secondary">Enregistrer</button>

                </div>
                <div class="d-grid gap-2 mt-4">
                    <a href="{{route('models')}}"><button type="button" class="btn btn-danger">VOIR LA LISTE DES MODELES</button></a>
                </div>


            </div>
        </form>
    </div>
</div>
</div>
</div>



