
@include('layouts.main')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class=""><strong>LISTE DES PERSONNELS </strong> <i class="fa fa-users"></i></h4>

                        <table class="table table-striped table-bordered zero-configuration">
                            <h2 class="text-center"></h2>

                            <div class="d-grid gap-2 col-3 mx-auto mb-3 mt-3">
                                <a href="{{route('ajout_personnels')}}">
                                <button class="btn btn-secondary" type="button">AJOUTER PERSONNEL </button>
                            </a>
                            </div>


                                                    <table class="table table-striped table-bordered zero-configuration">
                                                        <h2 class="text-center"></h2>

                                                        <thead>
                                                         <tr>
                                                            <th>ID</th>
                                                             <th>Nom</th>
                                                             <th>Prenom</th>
                                                             <th>Adesse</th>
                                                             <th>Téléphone</th>
                                                             <th>Type personnel</th>
                                                             <th>Action</th>

                                                         </tr>
                                                        </thead>
                                                        @foreach($personnels as $personnels)
                                                        <tr>
                                                            <td>{{ $personnel->id}}</td>
                                                            <td>{{ $personnel->nom}}</td>
                                                            <td>{{ $personnel->prenom}}</td>
                                                            <td>{{ $personnel->adresse}}</td>
                                                            <td>{{ $personnel->telephone}}</td>
                                                            <td>{{ $personnel->type_personnel}}</td>


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


