@extends('layouts.layoutHF')
@section('title') {{ __("Notre galerie avec Jew Trading")}} @endsection
@section('body')
@include('layouts.menuP')
<div class="position-relative">
    <div class="position-absolute" style="z-index: 1000; bottom: 50%;">
        <h1 class="fw-bold text-white mx-5">{{__("Nos produits")}}</h1>
    </div>
    <div class="d-flex align-items-center produitBg">
    </div>
</div>
<div class="galerie text-white pt-md-5 galerie-image" style="background: url({{asset('assets/imgs/bg1.jpg')}}">
    <h2 class="text-center fw-bolder py-md-3">
        {{__("Prouits en stocks")}}
    </h2>
    @php
    $y=0;
    $galeries = ['assets/imgs/gal1.jpg','assets/imgs/gal2.jpg','assets/imgs/gal3.jpg','assets/imgs/gal4.jpg','assets/imgs/gal5.jpg','assets/imgs/gal7.jpg',
    'assets/imgs/gal8.jpg','assets/imgs/gal9.jpg','assets/imgs/gal10.jpg','assets/imgs/gal11.jpg','assets/imgs/gal12.jpg','assets/imgs/gal13.jpg',
    'assets/imgs/gal14.jpg','assets/imgs/gal15.jpg','assets/imgs/gal16.jpg','assets/imgs/gal17.jpg','assets/imgs/gal18.jpg','assets/imgs/gal19.jpg',
    'assets/imgs/gal20.jpg','assets/imgs/gal21.jpg','assets/imgs/gal22.jpg'];
    @endphp
    <div class="col-md-10 mx-auto">
        <div class="row">
            @foreach ($produits as $produit )
            <div class="col-md-4 my-2 position-relative">
                <img src="{{asset($produit[3])}}" alt="" class="img-fluid h-100" style="filter: contrast(50%)">
                <div class="card-img-overlay mx-4">
                    <h4 class="card-title fw-bolder">{{ $produit[0]}}</h4>
                    <h4 class="card-title fw-bolder">{{ $produit[1]}}</h4>
                    <div class="position-absolute bottom-0 pb-2">
                        <a href="/detail/produit/{{ $produit[2]}}" class="btn btn-danger">{{__("Voir details")}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
@endsection
