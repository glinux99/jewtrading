@extends('layouts.adminLH')
@section('title')
{{ __("Administration  | Jews Trading")}}
@endsection
@section('body')
<div class="container">
    <h2 class="text-center text-white fw-bolder">{{__("Modifier un produit")}}</h2>
    <div class="container mt-4">
        <table id="dataTable" class="table table-striped table-hover ">
            <thead>
                <tr>
                    <th>Nom produit</th>
                    <th>Marque</th>
                    <th>Couleur</th>
                    <th>Prix</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Mercedes
                    </td>
                    <td>
                        Mercedes
                    </td>
                    <td>
                        Rouge
                    </td>
                    <td>
                        5000
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#modifModal">Modifier<span class="ms-1 bi-trash float-end"></span></button>
                        <button type="button" class="btn btn-danger mx-1">Supprimer<span class="ms-1 bi-pencil-square float-end"></span>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Modal pour la modification -->
<!-- Modal -->
<div class="modal fade" id="modifModal" tabindex="-1" aria-labelledby="modifModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  text-white">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modifModalLabel">Modifier un vehicule</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card bg-card">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{asset('assets/imgs/carIndex.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-6 my-2">
                            <div class="row m-2">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Prix")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="number" name="prix" class="form-control bg-select">
                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Marque")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="marque" class="form-control bg-select">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Modele")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="modele" class="form-control bg-select">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Couleur")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="color" name="couleur" class="form-control bg-select">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col-6 row">
                            <div class="col-4">
                                <label for="" class="form-label">
                                    {{__("Emplacement")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="emplencement" class="form-control bg-select">
                            </div>
                        </div>
                        <div class="col-6 row">
                            <div class="col-4">
                                <label for="" class="form-label">
                                    {{__("Kilometrage")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <input type="number" name="kilometrage" class="form-control bg-select">
                            </div>
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col-6 row">
                            <div class="col-4">
                                <label for="" class="form-label">
                                    {{__("Annee Fab")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <input type="date" name="anneeFab" class="form-control bg-select">
                            </div>
                        </div>
                        <div class="row col-6">
                            <div class="col-4">
                                <label for="" class="form-label">
                                    {{__("Moteur")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="moteur" class="form-control bg-select">
                            </div>
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="row col-6">
                            <div class="col-4">
                                <label for="" class="form-label">
                                    {{__("Transmission")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <select class="form-control bg-select" name="typeTransmission" id="">
                                    <option>Manuelle</option>
                                    <option>Automatique</option>
                                </select>
                            </div>
                        </div>
                        <div class="row col-6">
                            <div class="col-4">
                                <label for="" class="form-label">
                                    {{__("Carburateur")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <select class="form-control bg-select" name="typeCarburateur" id="">
                                    <option value="OTHER">{{__("Autres")}}</option>
                                    <option value="DIES">{{__("Diesel")}}</option>
                                    <option value="ELEC">{{__("Électrique")}}</option>
                                    <option value="GASO">{{__("Essence")}}</option>
                                    <option value="NGAS">{{__("Gaz naturel")}}</option>
                                    <option value="LPG">{{__("GPL")}}</option>
                                    <option value="HYBD">{{__("Hybride Diesel")}}</option>
                                    <option value="HYBDP">{{__("Hybride Diesel Plug-in")}}</option>
                                    <option value="HYBG">{{__("Hybride essence")}}</option>
                                    <option value="HYBGP">{{__("Hybride essence Plug-in")}}</option>
                                    <option value="HYDR">{{__("Hydrogène")}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="row col-6">
                            <div class="col-4">
                                <label for="" class="form-label">
                                    {{__("Num Chassis")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <input type="number" name="numChassis" class="form-control bg-select">
                            </div>
                        </div>
                        <div class="row col-6">
                            <div class="col-4">
                                <label for="" class="form-label">
                                    {{__("Declaration")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="declaration" class="form-control bg-select">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{__("Fermer")}}</button>
                <button type="button" class="btn buttonAdd">{{__("Enregistrer")}}</button>
            </div>
        </div>
    </div>
</div>

@endsection
