@extends('layouts.adminLH')
@section('title')
{{ __("Administration-Ajout image  | Jews Trading")}}
@endsection
@section('body')
<div class="container card my-4 py-4 shadow">
    <h5 class="text-dark fw-bolder  border-bottom border-2 py-2">{{__("Galerie Photo")}} @if (!$galeries) <span class="text-muted">({{__("Aucun image pour l'instant")}})</span>

        @endif</h5>
    <div class=" mx-1">
        <div class="my-2">
            <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGalerie" aria-expanded="false" aria-controls="collapseGalerie">{{__('Ajouter image')}} <span class="bi-images"></span></button>
            @if ($galeries)<p><small>*{{__("Doublez cliquer pour supprimer sur l'image pour la supprimer")}}</small></p>@endif
            <div class="row">
                <form action="{{ url('/galerie/photo')}}" method="post" id="dataform" enctype="multipart/form-data">
                    @csrf
                    <div class="collapse row" id="collapseGalerie">
                        <div class="col-6 card p-2">

                            <div class="row">
                                <div class="col-md-3">
                                    {{__("Catégorie")}}
                                </div>
                                <div class=" col-md-9">
                                    <div class="mb-3">
                                        <select class="form-control" name="categories" id="">
                                            <option value="client">{{__("Client")}}</option>
                                            <option class="produit">{{__("Produit")}}</option>
                                            <option class="equipe">{{__("Equipe")}}</option>
                                            <option value="partenaire">{{__("Partenaire")}}</option>
                                            <option value="autres">{{__("Autres")}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    {{__("Image")}}
                                </div>
                                <div class="col-md-9 input-add">
                                    <div class="d-flex">
                                        <input type="file" name="file1[]" id="" class="form-control " required multiple>
                                        <span class="ms-2 bi-plus-circle-fill bi--xl text-dark" onclick="ajouter()"></span>
                                    </div>
                                    <input type="number" name="count" id="count" hidden>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center my-3">
                                <button class="btn btn-danger" type="submit">{{__("Enregistrer")}} <span class="bi-card-image"></span></button>
                            </div>
                        </div>
                        <div class="col-6 card">
                            <div class="mb-3">
                                <label for="" class="form-label">
                                    <span id="commentaire-image">{{__("Commentaire sur l'image")}}</span>
                                    <small id="helpId" class="form-text text-muted d-block">* {{__("Optionnelle (max 100 caractères)")}}</small></label>
                                <textarea class="form-control" name="comments" id="" rows="3"></textarea>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    @php
    $y=0;
    $x=0;
    @endphp
    <div class="row">
        @foreach($galeries as $galerie)
        <div class="col-md-4 my-2">
            <a href="/delete/{{$galerie}}" title="{{ __('Doublez cliquer pour supprimer')}}" onclick="return false" ondblclick="location=this.href">
                @php
                $img = '/storage/images/galeries/'.$galerie;
                @endphp
                <img src="{{asset($img)}}" alt="image de la galerie" class="img-fluid h-100">
            </a>
        </div>
        @endforeach
    </div>
    <div class="d-flex">
        <div class="mx-auto mt-3">
            @if ($galeries)
            {{ $galeries->links()}}
            @endif
        </div>
    </div>
</div>
</div>
@endsection
