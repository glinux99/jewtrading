@extends('layouts.adminLH')
@section('title')
{{ __("Administration  | Jews Trading")}}
@endsection
@section('body')
<div class="container-fluid">
    <h2 class="text-center">{{__("Ajout d'un produit")}}</h2>
    <div class="col-md-10 mx-auto">
        <form action="" method="post">
            <div class="mb-3 input-group">
                <label for="marque" class="form-label">Marque</label>
                <select class="form-select" name="marque" id="">
                    <option selected>Select one</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
            <div class="input-group mb-3">
                <label for="model" class="form-label">Model</label>
                <select class="form-select" name="model" id="">
                    <option selected>Select one</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
            <div class="input-group mb-3">
                <label for="emplacementvehicule" class="form-label">{{__("Emplacement")}}</label>
                <input type="text" class="form-control" placeholder="{{__('Entrez l\'emplacement du vehicule')}}">
            </div>
            <div class="input-group mb-3">
                <label for="kilometrage" class="form-labbel">{{__("Kilometrage")}}</label>
                <input type="number" name="kilometrage" id="" class="form-control">
            </div>
            <div class="input-group mb-3">
                <label for="anneeFabrication" class="form-label">Annee de Fab:</label>
                <input type="date" name="anneeFabrication" class="form-control" id="">
            </div>
            <div class="input-group mb-3">
                <label for="moteur" class="form-label">Moteur</label>
                <select class="form-select" name="moteur" id="">
                    <option selected>Select one</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
            <div class="mb-3 input-group">
                <label for="typeTransmission" class="form-label">Transmission</label>
                <select class="form-control" name="typeTransmission" id="">
                    <option></option>
                    <option></option>
                    <option></option>
                </select>
            </div>
            <div class="mb-3 input-group">
                <label for="typeCarburateur" class="form-label">{{__("Carburateur")}}</label>
                <select class="form-control" name="typeCarburateur" id="">
                    <option></option>
                    <option></option>
                    <option></option>
                </select>
            </div>
            <div class="input-group mb-3">
                <label for="numChassis" class="form-label">{{__("Num Chassis")}}</label>
                <input type="number" name="numChassis" id="" class="form-control">
            </div>
            <div class="input-group mb-3">
                <label for="couleur" class="form-label">{{__("Couleur")}}</label>
                <input type="color" name="couleur" class="form-control" id="">
            </div>
            <div class="input-group mb-3">
                <label for="declaration" class="form-label">{{__("Declaration")}}</label>
                <input type="text" class="form-control" name="declaration">
            </div>
        </form>
    </div>
</div>
@endsection
