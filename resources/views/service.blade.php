@extends('layouts.layoutHF')
@section('title') {{ __("Nos services avec Jew Trading")}} @endsection
@section('body')
@include('layouts.menuP')
<div class="position-relative">
    <div class="position-absolute" style="z-index: 1000; bottom: 50%;">
        <h1 class="fw-bold text-white px-5">{{__("Nous fournissons les meilleurs services")}}</h1>
    </div>
    <div class="d-flex align-items-center serviceBg">
    </div>
</div>
<div class="corp mt-md-5 pt-md-5" style="background: rgb(245, 246, 246);">
    <div class="services">
        @php
        $services = array(
        array('title'=>'Importation des vehicules',
        'corps'=>"Nous important des vehicules de toutes marques et de vos reves"),
        array('title'=>"Ventes de pieces de rechanges en ligne",
        'corps'=>"L'entreprise Jews Trading facilite le client de faire l'achat en ligne de toutes pièces, huile
        moteur, huile de boite de
        toutes marques des véhicules tous d'origine japonaise."),
        array('title'=>"Location véhicule",
        'corps'=>"Nous prenons en locations des véhicules des bonne qualités et en bon état au public."),
        array('title'=>"Echange de vehicule",
        'corps'=>"Nous échangeons des véhicules à la demande de nos clients et selon des modalité bien respecter.
        "),
        );
        @endphp
        <div class="row w-100 d-flex justify-content-center">
            @foreach ($services as $service )
            <div class="col-md-4 m-1 border-bottom border-danger border-5 bg-white shadow">
                <div class="card-header h5 text-center fw-bold bg-white">
                    {{ $service['title']}}
                </div>
                <div class="card-body">
                    <p class=" mb-3">
                        {{ $service['corps']}}
                    </p>
                    <button class="btn btn-danger d-block mx-auto">Lire plus</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="produit bg-white mt-md-5 pt-md-5">
        <h2 class="text-center fw-bolder py-md-3 display-6">
            Nos produits
        </h2>
        <div id="produitCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="d-flex">
                        <img src="{{ asset('assets/imgs/gal17.jpg')}}" alt="Groupe One" class="card-img-top border">
                        <img src="{{ asset('assets/imgs/gal18.jpg')}}" alt="Groupe One" class="card-img-top border">
                        <img src="{{ asset('assets/imgs/gal19.jpg')}}" alt="Groupe One" class="card-img-top border">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex">
                        <img src="{{ asset('assets/imgs/gal20.jpg')}}" alt="Groupe One" class="card-img-top">
                        <img src="{{ asset('assets/imgs/gal21.jpg')}}" alt="Groupe One" class="card-img-top">
                        <img src="{{ asset('assets/imgs/gal22.jpg')}}" alt="Groupe One" class="card-img-top">
                        {{-- <img src="{{ asset('assets/imgs/car7.jpg')}}" alt="Groupe One" class="card-img-top">
                        --}}
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#produitCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#produitCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
@endsection
