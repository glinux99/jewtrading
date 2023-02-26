@extends('layouts.admin')
@section('content')
<div class="py-4">
    <form action="{{ route('admin.produit.update', [$produit_get->produit_id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row gutters-5 mx-auto">
            <div class="col-md-7 card">
                <div class="card-header">
                    <h5 class="mb-0 h6">@lang("Detatils du ") {{ $produit_get->marque." / ".$produit_get->model }}</h5>
                </div>
                <div class="card-body">
                    <!-- images -->
                    <div class="col-lg-12 mb-4">
                        <p class="fs-10"> @lang("* doublez cliquer sur l'image courante dans la liste d'images ci-dessous pour la supprimer")</p>
                        <div class="sticky-top z-3 row gutters-10">
                            <div class="col order-1 order-md-2">
                                <div class="aiz-carousel product-gallery" data-nav-for='.product-gallery-thumb' data-fade='true' data-auto-height='true'>
                                    @foreach ($images as $image)
                                    <div class="carousel-box img-zoom rounded">
                                        <img class="img-fit lazyload w-100 image-delete" src="" data-link="{{ $image->images}}" data-src=" {{ asset('storage/'.$image->images)}}" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-12 col-md-auto w-md-80px order-2 order-md-1 mt-3 mt-md-0">
                                <div class="aiz-carousel product-gallery-thumb" data-items='5' data-nav-for='.product-gallery' data-vertical='true' data-vertical-sm='false' data-focus-select='true' data-arrows='true'>
                                    @foreach ($images as $image)
                                    <div class="carousel-box c-pointer border p-1 rounded">
                                        <img class="lazyload mw-100 size-50px mx-auto image-delete" data-link="{{ $image->images}}" src="{{ asset('storage/'.$image->images)}}" data-src="{{ asset('storage/'.$image->images)}}" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 ">
                <div class="card mb-1">
                    <div class="card-header">
                        <h5 class="mb-0 h6">@lang("Images du produit")</h5>
                    </div>
                    <div class="card-body ">
                        <div class="form-group row bg-danger">
                            <label class="col-md-12 col-form-label" for="signinSrEmail">@lang("Image de la galerie") <small>(600x600)</small></label>
                            <div class="col-md-12">
                                <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                    <input type="file" name="images[]" id="" class="form-control" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-0">
                    <div class="card-header">
                        <h5 class="mb-0 h6">@lang("Information supplementaires")</h5>
                    </div>
                    <div class="card-body m-0 p-0">
                        <div class="col-md-12 row m-0 p-0">
                            <div class="col-md-6 ">
                                <div class="mb-3 ">
                                    <label for="marque " class="form-label">Marque</label>
                                    <!-- <input type="text" class="form-control" value="Toyota" name="marque"> -->
                                    <select name="marque" id="" class="form-control selectMarque">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" mb-3">
                                    <label for="model" class="form-label">Model</label>
                                    <!-- <input type="text" class="form-control" value="Toyota" name="model"> -->
                                    <select class="form-control SelectModel" name="model" id="">
                                        <option value="">creer un element</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" mb-3">
                                    <label for="kilometrage" class="form-labbel">{{__("Kilometrage")}}</label>
                                    <input type="number" name="kilometrage" id="" class="form-control " value="{{ $produit_get->kilometrage}}">
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
                                    <select class="form-control " name="transmission" id="">
                                        <option value="Manuelle">Manuelle</option>
                                        <option value="Automatique">Automatique</option>
                                        <option value="Semi-manuel">Semi-manuel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 ">
                                    <label for="marque " class="form-label">{{__("Carburateur")}}</label>
                                    <select class="form-select SelectCarburateur" name="carburateur" id=""></select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" mb-3">
                                    <label for="numChassis" class="form-label">{{__("Num Chassis")}}</label>
                                    <input type="text" name="numchassis" id="" class="form-control " value="{{ $produit_get->numchassis}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" mb-3">
                                    <label for="couleur" class="form-label">{{__("Couleur")}}</label>
                                    <input type="text" name="couleur" class="form-control " id="" value="{{ $produit_get->couleur}}">
                                    <small class="form-text text-muted">{{__("Ex. rouge, noire, grise, etc")}}</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" mb-3">
                                    <label for="declaration" class="form-label">{{__("Déclaration")}}</label>
                                    <input type="text" class="form-control " name="declaration" value="{{ $produit_get->declaration}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="btn-toolbar float-right mb-3 mr-md-5" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group" role="group" aria-label="Second group">
                        <button type="submit" name="button" value="publish" class="btn bg-danger action-btn">@lang("Enregistrer et publier")</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
