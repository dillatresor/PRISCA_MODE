
@include('layouts.main')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class=""><strong>LISTE DES COUTURES </strong> <i class="fa fa-users"></i></h4>

                        <table class="table table-striped table-bordered zero-configuration">
                            <h2 class="text-center"></h2>

                            <div class="d-grid gap-2 col-3 mx-auto mb-3 mt-3">
                                <a href="{{route('ajout_coutures')}}">
                                <button class="btn btn-secondary" type="button">AJOUTER COUTURE </button>
                            </a>
                            </div>


                            <table class="table table-striped table-bordered zero-configuration">
                                <h2 class="text-center"></h2>

                                <thead>
                                 <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">libelle</th>
                                    <th scope="col">Date_depot</th>
                                    <th scope="col">Date_recuperation</th>
                                    <th scope="col">Nom_modele</th>
                                    <th scope="col">Nom_client</th>
                                 </tr>
                                </thead>
                                @foreach ($coutures as $coutures)

                                <tr class="text-center">
                                     <td>{{ $coutures->id}}</td>
                                            <td>{{ $coutures->libelle}}</td>
                                            <td>{{ $coutures->date_depot}}</td>
                                            <td>{{ $coutures->date_recuperation}}</td>
                                            <td>{{ $coutures->nom_modele}}</td>
                                            <td>{{ $coutures->clients->nom}}</td>
                                        <a href="">
                                            <i class="fa fa-pencil" title="modifier"></i>
                                        </a>
                                        <a href="">
                                                <i class="fa fa-trash" title="supprimer"></i>
                                        </a>
                                </td>
                                </tr>

                                @endforeach

                             </table>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>


