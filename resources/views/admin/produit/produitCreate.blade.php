@extends('layouts.admin')
@section('content')
<div class="py-4">
    <form action="{{ route('produit.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row gutters-5 mx-auto">
            <div class="col-md-8">
                <div class="card mx-auto ">
                    <div class="card-header">
                        <h5 class="mb-0 h6">@lang("Information sur le produit")</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label for="marque " class="form-label">Marque</label>
                                    <input type="text" class="form-control" value="Toyota" name="marque">
                                    <!-- <select name="marque" id="" class="form-control selectMarque" required></select> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" mb-3">
                                    <label for="model" class="form-label">Model</label>
                                    <input type="text" class="form-control" value="Toyota" name="model">
                                    <!-- <select class="form-control SelectModel" name="model" id="" required>
                                        <option value="">creer un element</option>
                                    </select> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" mb-3">
                                    <label for="kilometrage" class="form-labbel">{{__("Kilometrage")}}</label>
                                    <input type="number" name="kilometrage" id="" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" mb-3">
                                    <label for="anneeFabrication" class="form-label">Année de Fab:</label>
                                    <input type="date" name="annee_fab" class="form-control " id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" mb-3">
                                    <label for="moteur" class="form-label">Cylindre Moteur</label>
                                    <input type="text" class="form-control " placeholder="{{__('Entrez le type de cylindre')}}" name="moteur">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label for="transmission" class="form-label">Transmission</label>
                                    <select class="form-control " name="transmission" id="" required>
                                        <option value="Manuelle">Manuelle</option>
                                        <option value="Automatique">Automatique</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label for="marque " class="form-label">{{__("Carburateur")}}</label>
                                    <input type="text" name="carburateur" id="" class="form-control">
                                    <!-- <select name="carburateur" id="" class="form-control selectMarque" required></select> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" mb-3">
                                    <label for="numChassis" class="form-label">{{__("Num Chassis")}}</label>
                                    <input type="text" name="numchassis" id="" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" mb-3">
                                    <label for="couleur" class="form-label">{{__("Couleur")}}</label>
                                    <input type="text" name="couleur" class="form-control " id="">
                                    <small class="form-text text-muted">{{__("Ex. rouge, noire, grise, etc")}}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" mb-3">
                                    <label for="declaration" class="form-label">{{__("Déclaration")}}</label>
                                    <input type="text" class="form-control " name="declaration">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="btn-toolbar float-right mb-3" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group" role="group" aria-label="Second group">
                            <button type="submit" name="button" value="publish" class="btn bg-danger action-btn">@lang("Enregistrer et publier")</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">@lang("Information supplementaires")</h5>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class=" mb-3">
                                <label for="couleur" class="form-label">{{__("Prix (en dollars)")}}</label>
                                <input type="number" name="prix" id="" class="form-control " required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class=" mb-3">
                                <label for="emplacement" class="form-label">{{__("Emplacement")}}</label>
                                <input type="text" class="form-control " placeholder="{{__('Entrez l\'emplacement du vehicule')}}" name="emplacement">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">@lang("Images du produit")</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-12 col-form-label" for="signinSrEmail">@lang("Image de la galerie") <small>(600x600)</small></label>
                            <div class="col-md-12">
                                <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                    <input type="file" name="images[]" id="" class="form-control" multiple>
                                </div>
                                <div class="file-preview box sm">
                                </div>
                                <small class="text-muted">@lang("Ces images sont visibles dans la galerie de la page de détails du produit. Utilisez des images de taille 600x600.")</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
