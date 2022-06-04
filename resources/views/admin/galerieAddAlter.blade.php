@extends('layouts.adminLH')
@section('title')
{{ __("Administration  | Jews Trading")}}
@endsection
@section('body')
<div class="container">
    <h2 class="text-center text-white fw-bolder">{{__("Galerie Photo")}}</h2>
    <div class="mt-4 mx-1">
        <div class="my-2 text-white">
            <button class="btn buttonAdd" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGalerie" aria-expanded="false" aria-controls="collapseGalerie">Ajouter image</button>
            <div class="collapse col-md-6 my-2 card p-2 bg-card-none" id="collapseGalerie">
                <form action="/galerie-photo" method="post" id="dataform">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            {{__("Categorie")}}
                        </div>
                        <div class="col-md-9">
                            <div class="mb-3">
                                <select class="form-control bg-select" name="categories" id="">
                                    <option value="client">Client</option>
                                    <option class="produit">Produit</option>
                                    <option class="equipe">Equipe</option>
                                    <option value="partenaire">Partenaire</option>
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
                                <input type="file" name="file1" id="" class="form-control bg-select" required>
                                <span class="ms-2 bi-plus-circle-fill bi--xl" onclick="ajouter()"></span>
                            </div>
                            <input type="number" name="count" id="count">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <button class="btn buttonAdd" type="submit">Enregistrer <span class="bi-card-image"></span></button>
                    </div>
                </form>
            </div>
        </div>
        @php
        $y=0;
        $x=0;
        $galeries = ['assets/imgs/gal1.jpg','assets/imgs/gal2.jpg','assets/imgs/gal3.jpg','assets/imgs/gal4.jpg','assets/imgs/gal5.jpg','assets/imgs/gal6.jpg','assets/imgs/gal7.jpg',
        'assets/imgs/gal8.jpg','assets/imgs/gal9.jpg','assets/imgs/gal10.jpg','assets/imgs/gal11.jpg','assets/imgs/gal12.jpg','assets/imgs/gal13.jpg',
        'assets/imgs/gal14.jpg','assets/imgs/gal15.jpg','assets/imgs/gal16.jpg','assets/imgs/gal17.jpg','assets/imgs/gal18.jpg','assets/imgs/gal19.jpg',
        'assets/imgs/gal20.jpg','assets/imgs/gal21.jpg','assets/imgs/gal22.jpg'];
        @endphp
        <div class="">
            @while ($y<count($galeries)+2) <div class="card-group p-0 m-0">
                @while ($x<=$y) <div class="card p-0 m-1">
                    <img src="{{asset($galeries[$x])}}" alt="" class="img-responsive">
        </div>
        @php
        $x++;
        @endphp
        @endwhile
    </div>
    @php
    $y+=3;
    @endphp
    @endwhile
</div>
</div>
</div>
@endsection
