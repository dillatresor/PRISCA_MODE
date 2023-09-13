@include('layouts.main')
<div class="col-lg-9 mt-5">
    <div class="card">
        <div class="card-body">
        <h3 class="text-center"><strong>ENREGISTREMENT D'UN CLIENT</strong></h3>

        @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

        <form action="{{route('store_client')}}" method="POST" class="form-group">
            @csrf

            <div>
                <section>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Entrer le nom </label>
                                <input type="text" name="nom" class="form-control"  required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Entrer le prenoms </label>
                                <input type="text" name="prenoms" class="form-control"  required>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Entrer le numero</label>
                                <input type="text" name="telephone" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Choisir le sexe</label>
                                <select name="sexe" class="form-control" required>
                                    <option value="">-----------</option>
                                    <option value="Femme">Femme</option>
                                    <option value="Homme">Homme</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </section>

                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-secondary">Enregistrer</button>

                </div>
                <div class="d-grid gap-2 mt-4">
                    <a href="{{route('clients')}}"><button type="button" class="btn btn-danger">VOIR LA LISTE DES CLIENTS</button></a>
                </div>


            </div>
        </form>
    </div>
</div>
</div>
</div>



