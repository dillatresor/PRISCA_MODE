@include('layouts.main')
<div class="col-lg-9 mt-5">
    <div class="card">
        <div class="card-body">
        <h3 class="text-center"><strong>NOUVEAU PAIEMENT</strong></h3>

        @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

        <form action="{{route('store_paiement')}}" method="POST" class="form-group">
            @csrf

            <div>
                <section>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Entrer le montant </label>
                                <input type="text" name="montant_payer" class="form-control"  required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Avance </label>
                                <input type="text" name="avance" class="form-control"  required>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Reste à payer</label>
                                <input type="text" name="reste" class="form-control" required>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Date de paiement</label>
                                <input type="date" name="date_paiement" class="form-control" required>
                            </div>
                        </div>


                        <div class="col-lg-6 mt-3">

                            <select class="form-control" style="width: 100%" name="coutures_id">
                               <option>Selectionner couture</option>;

                               @foreach ($coutures as  $coutures )
                               <option value="{{  $coutures->id }}">{{  $coutures->libelle }}</option>;

                               @endforeach



                               </select>
                           </div>



                    </div>
                </section>

                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-secondary">Enregistrer</button>

                </div>
                <div class="d-grid gap-2 mt-4">
                    <a href="{{route('paiement')}}"><button type="button" class="btn btn-danger">VOIR LA LISTE DES PAIEMENTS</button></a>
                </div>


            </div>
        </form>
    </div>
</div>
</div>
</div>



