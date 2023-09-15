
@include('layouts.main')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class=""><strong>LISTE DES PAIEMENTS </strong> <i class="fa fa-users"></i></h4>

                        <table class="table table-striped table-bordered zero-configuration">
                            <h2 class="text-center"></h2>

                            <div class="d-grid gap-2 col-3 mx-auto mb-3 mt-3">
                                <a href="{{route('ajout_paiement')}}">
                                <button class="btn btn-secondary" type="button">AJOUTER PAIEMENT </button>
                            </a>
                            </div>


                                                    <table class="table table-striped table-bordered zero-configuration">
                                                        <h2 class="text-center"></h2>

                                                        <thead>
                                                         <tr>
                                                            <th>ID</th>
                                                             <th>Montant</th>
                                                             <th>Avance</th>
                                                             <th>Reste</th>
                                                             <th>Date paiement</th>
                                                             <th>Libelle</th>
                                                             <th>Action</th>

                                                         </tr>
                                                        </thead>
                                                        @foreach($paiement as $paiement)
                                                        <tr>
                                                            <td>{{ $paiement->id}}</td>
                                                            <td>{{ $paiement->montant_payer}}</td>
                                                            <td>{{ $paiement->avance}}</td>
                                                            <td>{{ $paiement->reste}}</td>
                                                            <td>{{ $paiement->date_paiement}}</td>
                                                            <td>{{ $paiement->coutures->libelle}}</td>

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


