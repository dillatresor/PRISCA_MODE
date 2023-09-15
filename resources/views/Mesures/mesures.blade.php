
@include('layouts.main')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class=""><strong>LISTE DES MESURES </strong> <i class="fa fa-users"></i></h4>

                        <table class="table table-striped table-bordered zero-configuration">
                            <h2 class="text-center"></h2>

                            <div class="d-grid gap-2 col-3 mx-auto mb-3 mt-3">
                                <a href="{{route('ajout_mesures')}}">
                                <button class="btn btn-secondary" type="button">AJOUTER MESURES </button>
                            </a>
                            </div>
          <div table-responsive>


          <table class="table mt-3">
            <thead>
              <tr>
                <th>N° enregistrement</th>
                <th>Nom_modele</th>
                <th>Nom_client</th>
                <th>Details</th>
              </tr>

            </thead>
            @foreach ($mesures as $mesures )
            <tr class="">
                <td>{{ $mesures->id}}</td>
                <td>{{ $mesures->nom_modele}}</td>
                <td>{{ $mesures->clients->nom}}</td>


           </tr>
            @endforeach
          </table>
        </div>

     </div>
    </div>
    <div class="mt-6">


    </div>

    </section>
</body>
</html>
