
@include('layouts.main')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class=""><strong>LISTE DES CLIENTS </strong> <i class="fa fa-users"></i></h4>

                        <table class="table table-striped table-bordered zero-configuration">
                            <h2 class="text-center"></h2>

                            <div class="d-grid gap-2 col-3 mx-auto mb-3 mt-3">
                                <a href="{{route('ajout_client')}}">
                                <button class="btn btn-secondary" type="button">AJOUTER CLIENT </button>
                            </a>
                            </div>


                                                    <table class="table table-striped table-bordered zero-configuration">
                                                        <h2 class="text-center"></h2>

                                                        <thead>
                                                         <tr>
                                                            <th>ID</th>
                                                             <th>Nom</th>
                                                             <th>Prenom</th>
                                                             <th>Téléphone</th>
                                                             <th>Sexe</th>
                                                             <th>Action</th>

                                                         </tr>
                                                        </thead>
                                                        @foreach($clients as $clients)
                                                        <tr>
                                                            <td>{{ $clients->id}}</td>
                                                            <td>{{ $clients->nom}}</td>
                                                            <td>{{ $clients->prenoms}}</td>
                                                            <td>{{ $clients->telephone}}</td>
                                                            <td>{{ $clients->sexe}}</td>

                                                            <td>
                                                                <a href="">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="">
                                                                    <i class="fa fa-trash "></i>
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


