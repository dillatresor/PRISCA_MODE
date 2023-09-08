@include('layouts.main')

<div class="row">
    <h1>Ajouter un client</h1>
<form action="{{route('Client/ajout_client')}}" id="step-form-horizontal" class="step-form-horizontal">

    <div class="form-group">
        <label for="Nom">Nom</label>
        <input type="text" class="form-control" id="Nom" name="nom">
    </div>


    <div class="form-group">
        <label for="Nom">Prenoms</label>
        <input type="text" class="form-control" id="Prenoms" name="prenoms">
    </div>

    <div class="form-group">
        <label for="Nom">Telephone</label>
        <input type="text" class="form-control" id="Telephone" name="telephone">
    </div>

    <div class="form-group">
        <label for="Nom">Sexe</label>
        <input type="text" class="form-control" id="Sexe" name="sexe">
    </div>

</form>
</div>
