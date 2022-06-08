@extends('layouts.adminLH')
@section('title')
{{ __("Administration  | Jews Trading")}}
@endsection
@section('body')
<div class="container card my-4 py-4 shadow">
    <h5 class="text-dark fw-bolder  border-bottom border-2 py-2">{{__("Galerie Photo")}}</h5>
    <div class=" mx-1">
        <div class="my-2">
            <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGalerie" aria-expanded="false" aria-controls="collapseGalerie">Ajouter image</button>
            <p><small>*{{__("Doublez cliquer pour supprimer sur l'image pour la supprimer")}}</small></p>
            <div class="collapse col-md-6 my-2 card p-2 " id="collapseGalerie">
                <form action="/galerie-photo" method="post" id="dataform" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            {{__("Categorie")}}
                        </div>
                        <div class="col-md-9">
                            <div class="mb-3">
                                <select class="form-control" name="categories" id="">
                                    <option value="client">Client</option>
                                    <option class="produit">Produit</option>
                                    <option class="equipe">Equipe</option>
                                    <option value="partenaire">Partenaire</option>
                                    <option value="autres">Autres</option>
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
                                <input type="file" name="file1" id="" class="form-control " required>
                                <span class="ms-2 bi-plus-circle-fill bi--xl text-dark" onclick="ajouter()"></span>
                            </div>
                            <input type="number" name="count" id="count" hidden>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <button class="btn btn-danger" type="submit">Enregistrer <span class="bi-card-image"></span></button>
                    </div>
                </form>
            </div>
        </div>
        @php
        $y=0;
        $x=0;
        @endphp
        <div class="row">
            @while ($y<count($galeries)) <div class="p-0 m-0 col-md-4">
                <a href="/delete/{{$galeries[$y]}}" title="{{ __("Doublez cliquer pour supprimer")}}" onclick="return false" ondblclick="location=this.href">
                    <div class="card p-0 m-1">
                        @php
                        $img = '/storage/images/galeries/'.$galeries[$y];
                        @endphp
                        <img src="{{asset($img)}}" alt="image de la galerie" class="img-responsive">
                    </div>
                </a>
        </div>
        @php
        $y++;
        @endphp
        @endwhile
    </div>
</div>
</div>
@endsection
