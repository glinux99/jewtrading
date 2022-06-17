@extends('layouts.adminLH')
@section('title')
{{ __("Admnistration  | Jews Trading")}}
@endsection
@section('body')
<div class="py-4">
    <form action="/ajouterProduit" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-11 col-lg-11 mx-auto add card shadow p-md-4 p-4">
            <p class="h4 border-bottom border-1 border-secondary py-2">
                <span class="bi-info-circle me-1"></span>{{__("Information sur le produit")}}
            </p>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3 ">
                        <label for="marque " class="form-label">Marque</label>
                        <select name="marque" id="" class="form-control selectMarque" required></select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" mb-3">
                        <label for="model" class="form-label">Model</label>
                        <select class="form-control SelectModel" name="model" id="" required>
                            <option value="">creer un element</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" mb-3">
                        <label for="emplacement" class="form-label">{{__("Emplacement")}}</label>
                        <input type="text" class="form-control " placeholder="{{__('Entrez l\'emplacement du vehicule')}}" name="emplacement">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class=" mb-3">
                        <label for="kilometrage" class="form-labbel">{{__("Kilometrage")}}</label>
                        <input type="number" name="kilometrage" id="" class="form-control ">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" mb-3">
                        <label for="anneeFabrication" class="form-label">Année de Fab:</label>
                        <input type="date" name="annee_fab" class="form-control " id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" mb-3">
                        <label for="moteur" class="form-label">Cylindre Moteur</label>
                        <input type="text" class="form-control " placeholder="{{__('Entrez le type de cylindre')}}" name="moteur" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3 ">
                        <label for="transmission" class="form-label">Transmission</label>
                        <select class="form-control " name="transmission" id="" required>
                            <option value="Manuelle">Manuelle</option>
                            <option value="Automatique">Automatique</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3 ">
                        <label for="carburateur" class="form-label">{{__("Carburateur")}}</label>
                        <select class="form-select SelectCarburateur" name="carburateur" id="" required></select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" mb-3">
                        <label for="numChassis" class="form-label">{{__("Num Chassis")}}</label>
                        <input type="number" name="numchassis" id="" class="form-control ">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class=" mb-3">
                        <label for="couleur" class="form-label">{{__("Prix")}}</label>
                        <input type="number" name="prix" id="" class="form-control " required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" mb-3">
                        <label for="couleur" class="form-label">{{__("Couleur")}}</label>
                        <input type="color" name="couleur" class="form-control " id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" mb-3">
                        <label for="declaration" class="form-label">{{__("Déclaration")}}</label>
                        <input type="text" class="form-control " name="declaration">
                    </div>
                </div>
            </div>
            <input type="number" name="count" id="count" hidden>
            <div class="row  border-top border-bottom boder-1 border-secondary py-3">
                <div class="row">
                    <h6>{{__("Ajouter une ou plusieurs images")}}</h6>
                    <div class="col-md-6 input-add">
                        <input type="file" class="my-1 form-control" name="file1" id="file" required />
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn bg-danger" onclick="ajouter()">{{__("ajouter")}} <span class="bi-images"></span><span class="bi-plus"></span></button>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center my-3">
                <button class="btn bg-danger text-white col-md-2">{{__("Ajouter")}}</button>
            </div>
        </div>
    </form>
</div>
@endsection
