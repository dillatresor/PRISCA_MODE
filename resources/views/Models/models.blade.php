
@include('layouts.main')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class=""><strong>MODELES GALLERIES </strong> <i class="fa fa-image"></i></h4>

                        <table class="table table-striped table-bordered zero-configuration">
                            <h2 class="text-center"></h2>

                            <div class="d-grid gap-2 col-3 mx-auto mb-3 mt-3">
                                <a href="{{route('ajout_models')}}">
                                <button class="btn btn-secondary" type="button">AJOUTER MODELE </button>
                            </a>

                            </div>
                            @foreach ($models as $mod)

                            <div class="card col-xxl-3 col-md-2 card rounded float-start mt-4" style="">
                                <img src="{{asset('storage'). '/' .$mod->image}}" class="" alt="...">
                                <div class="card-body">
                                  <h4 class="text-center">{{ $mod->nom_modele }}</h4>
                                </div>
                              </div>

                              @endforeach

