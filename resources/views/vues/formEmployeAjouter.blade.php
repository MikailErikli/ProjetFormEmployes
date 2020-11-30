@extends('layouts.master')
@section('content')
    {!! Form::open(['url' => 'postEmploye']) !!}
<div class="col-md-12 col-sm-12 well well-md">
    <center><h1></h1></center>
    <div class="form-horizontal">
        <div class="form-group">
            <label class="col-md-3 col-sm-3 control-label">Civilité : </label>
            <div class="col-md-2 col-sm-2">
                <p>
                    <input type="radio" name="civilite" value="Mme"/> Madame
                    <input type="radio" name="civilite" value="Mlle"/> Mademoiselle
                    <input type="radio" name="civilite" value="Mr"/> Monsieur
                </p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-sm-3 control-label">Nom : </label>
            <div class="col-md-2 col-sm-2">
                <input type="text" name="nom" value=" " class="form-control" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-sm-3 control-label">Prenom : </label>
            <div class="col-md-2 col-sm-2">
                <input type="text" name="prenom" value=" " class="form-control" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-sm-3 control-label">Mot de passe : </label>
            <div class="col-md-2 col-sm-2">
                <input type="password" name="passe" value="" class="form-control" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-sm-3 control-label">Profil : </label>
            <div class="col-md-2 col-sm-2">
                <p>Vous êtes <br />
                    <select name="profil">
                        <option value="parti">Un particulier</option>
                        <option value="profe" selected="selected">Un professionnel</option>
                        <option value="insti">Une institutionnel</option>
                    </select>
                </p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-sm-3 control-label">Quel type de presentation recherchez-vous ?</label>
            <div class="col-md-2 col-sm-2">
                <p>
                    <input type="checkbox" name="interet" value="loc" /> Location de mobilier
                    <input type="checkbox" name="interet" value="achat" /> Achat de mobilier
                </p>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                <button type="submit" class="btn btn-default btn-primary">
                    <span class="glyphicon-align-justify glyphicon-ok"></span> Valider
                </button>
                &nbsp;
                <button type="button" class="btn btn-default btn-primary"
                        onclick="javascript:if(confirm('Vous êtes sûr ?')) window.location = '{{ url('/') }}';">
                <span class="glyphicon glyphicon-remove"></span> Annuler</button>
            </div>
        </div>

    </div>
</div>
