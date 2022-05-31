@extends('layouts.adminLH')
@section('title')
{{ __("Administration  | Jews Trading")}}
@endsection
@section('body')
<div class="container">
    <h2 class="text-center text-white fw-bolder">{{__("Ajout d'un produit")}}</h2>
    <form action="" method="post">
        <div class="col-md-10 col-lg-10 mx-auto add menuAdmin p-md-4 p-4">
            <p class="h4 border-bottom border-1 border-secondary py-2">
                {{__("Information sur le produit")}}
            </p>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3 ">
                        <label for="marque " class="form-label">Marque</label>
                        <select class="form-select bg-select" name="marque" id="">
                            <option selected>Select one</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" mb-3">
                        <label for="model" class="form-label">Model</label>
                        <select class="form-select bg-select" name="model" id="">
                            <option selected>Select one</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" mb-3">
                        <label for="emplacementvehicule" class="form-label">{{__("Emplacement")}}</label>
                        <input type="text" class="form-control bg-select" placeholder="{{__('Entrez l\'emplacement du vehicule')}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class=" mb-3">
                        <label for="kilometrage" class="form-labbel">{{__("Kilometrage")}}</label>
                        <input type="number" name="kilometrage" id="" class="form-control bg-select">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" mb-3">
                        <label for="anneeFabrication" class="form-label">Annee de Fab:</label>
                        <input type="date" name="anneeFabrication" class="form-control bg-select" id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" mb-3">
                        <label for="moteur" class="form-label">Moteur</label>
                        <select class="form-select bg-select" name="moteur" id="">
                            <option selected>Select one</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3 ">
                        <label for="typeTransmission" class="form-label">Transmission</label>
                        <select class="form-control bg-select" name="typeTransmission" id="">
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3 ">
                        <label for="typeCarburateur" class="form-label">{{__("Carburateur")}}</label>
                        <select class="form-control bg-select" name="typeCarburateur" id="">
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" mb-3">
                        <label for="numChassis" class="form-label">{{__("Num Chassis")}}</label>
                        <input type="number" name="numChassis" id="" class="form-control bg-select">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class=" mb-3">
                        <label for="couleur" class="form-label">{{__("Prix")}}</label>
                        <input type="number" name="prix" id="" class="form-control bg-select">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" mb-3">
                        <label for="couleur" class="form-label">{{__("Couleur")}}</label>
                        <input type="color" name="couleur" class="form-control bg-select" id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" mb-3">
                        <label for="declaration" class="form-label">{{__("Declaration")}}</label>
                        <input type="text" class="form-control bg-select" name="declaration">
                    </div>
                </div>
            </div>
            <div class="row  border-top border-bottom boder-1 border-secondary py-3">
                <div class="row">
                    <h6>{{__("Ajouter une pu plusieurs images")}}</h6>
                    <div class="col-md-6 input-add">
                        <input type="file" class="my-1 form-control" id="file1" required />
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn buttonAddPic" onclick="ajouter()">{{__("ajouter")}} <span class="bi-images"></span><span class="bi-plus"></span></button>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center my-3">
                <button class="btn buttonAdd">Ajouter</button>
            </div>
        </div>
    </form>
</div>
<script>
    let numFile = 0;

    function ajouter() {
        $('.input-add').append('<input type = "file"\
            class = "form-control my-1" name ="file' + numFile + '"/>');
        numFile++;
    }
</script>
@endsection
