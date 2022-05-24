@extends('layouts.layoutHF')
@section('title') {{ __("Bienvenu sur Jews Tradding")}} @endsection
@php
$parentIndex = true;
@endphp
@section('body')
<div class="bg-danger ">
    <div class="cool" style="background-image: url('/assets/imgs/carIndex.png'),url('/assets/imgs/bgIndex.png'); background-repeat: no-repeat,no-repeat; background-position: center,center;
    background-size: 50% 70%, cover;
        height: 100vh; ">
        @include('layouts.menuP')
        <div class="container row">
            <div class="col-md-6 ms-md-4">
                <h1 class="fw-bolder" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                    <span class="fw-bold display-1 title" style="font-size: 8vw;">
                        Jews
                    </span>
                </h1>
                <h2 class="fw-bold" style="font-size: 6vw;
	font-family: Roboto;
	 -webkit-background-clip: text;
	background-clip: text;
	-webkit-text-fill-color: transparent;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	-webkit-text-stroke: 2px #ee3131;">
                    Trading
                </h2>
                <div class="">
                    <ul class="list-unstyled">
                        <li class="mt-2">
                            <h6 class="text-uppercase fw-bold">
                                <span class="bi-people-fill"></span>
                                {{__("top paterners")}}
                            </h6>
                            <p class="text-danger h5 fw-bolder">
                                {{__("Be Forward, SBT")}}
                            </p>
                        </li>
                        <li class="mt-4">
                            <h6 class="text-uppercase fw-bold">
                                <span class="bi-geo-fill"></span>
                                {{__("Bureau")}}
                            </h6>
                            <p class="text-danger h5 fw-bolder">
                                {{__("Goma Office")}}
                            </p>
                        </li>
                        <li class="mt-4">
                            <h6 class="text-uppercase fw-bold">
                                <span class="bi-telephone-inbound"></span>
                                {{__("contact")}}
                            </h6>
                            <p class="text-danger h5 fw-bolder">
                                <a href="mailto:kwiratuwe@yahoo.fr" class="nav-link text-danger m-0 p-0">kwiratuwe@yahoo.fr</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="corp " style="background: rgb(245, 246, 246);">
        <div class="services">
            <h2 class="text-center fw-bolder py-md-5">
                Nous fournissons les meilleurs services
            </h2>
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
        <div class="galerie bg-white mt-md-5 pt-md-5">
            <h2 class="text-center fw-bolder py-md-3 display-6">
                Notre Galerie Photo
            </h2>
            <div class="text-muted col-md-6 mx-auto text-center mb-md-3">
                Autour d'une galerie photographique en ligne, vous avez une vue générale de Jews trading votre plus
                grand partenaire dans le domaine d'automobile.
            </div>
            <div id="galerieCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="d-flex">
                            <img src="{{ asset('assets/imgs/gal20.jpg')}}" alt="Groupe One" class="card-img-top border">
                            <img src="{{ asset('assets/imgs/gal21.jpg')}}" alt="Groupe One" class="card-img-top border">
                            <img src="{{ asset('assets/imgs/gal17.jpg')}}" alt="Groupe One" class="card-img-top border">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex">
                            <!-- <img src="{{ asset('assets/imgs/gal23.jpg')}}" alt="Groupe One" class="card-img-top border "> -->
                            <img src="{{ asset('assets/imgs/gal18.jpg')}}" alt="Groupe One" class="card-img-top border">
                            <img src="{{ asset('assets/imgs/gal19.jpg')}}" alt="Groupe One" class="card-img-top border">
                            <!-- <img src="{{ asset('assets/imgs/gal20.jpg')}}" alt="Groupe One" class="card-img-top border">
                            <img src="{{ asset('assets/imgs/gal21.jpg')}}" alt="Groupe One" class="card-img-top border"> -->
                            <img src="{{ asset('assets/imgs/gal17.jpg')}}" alt="Groupe One" class="card-img-top border">
                            {{-- <img src="{{ asset('assets/imgs/gal17.jpg')}}" alt="Groupe One" class="card-img-top">
                            --}}
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#galerieCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#galerieCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        {{-- Nous sommes les meilleurs --}}
        <div class="container mx-auto mb-md-4">
            <div class="row pt-md-5">
                <div class="col-6">
                    <img src="{{asset('assets/imgs/img2.jpg')}}" alt="" srcset="" class="d-inline-block w-100">
                </div>
                <div class="col-6">
                    <h2>
                        {{__("Nous sommes les meilleurs")}}
                    </h2>
                    <p class="text-muted mb-md-4">
                        {{__("Nos services sont (ont) : ")}}
                    </p>
                    <ul class="list-unstyled">
                        <li class="border-bottom border-2 p-2">
                            <span class="bi-check-circle-fill bi--xl"></span><span class="ps-md-3 h5">{{__("Rapide et
                                facile")}}</span>
                        </li>
                        <li class="border-bottom border-2 p-2">
                            <span class="bi-check-circle-fill bi--xl"></span><span class="ps-md-3 h5">{{__("Une
                                inspection Transparente")}}</span>
                        </li>
                        <li class="border-bottom border-2 p-2">
                            <span class="bi-check-circle-fill bi--xl"></span><span class="ps-md-3 h5">{{__("Offert
                                immédiatement")}}</span>
                        </li>
                        <li class="border-bottom border-2 p-2">
                            <span class="bi-check-circle-fill bi--xl"></span><span class="ps-md-3 h5">{{__("Formalités
                                administratives sans tracas")}}</span>
                        </li>
                        <li class="border-bottom border-2 p-2">
                            <span class="bi-check-circle-fill bi--xl"></span><span class="ps-md-3 h5">{{__("Transactions
                                de paiement sécurisées")}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-danger py-md-5 ">
            <h2 class="display-5 text-center text-white">
                {{__("Ce que disent People")}}
            </h2>
            <div class="d-flex justify-content-center col-md-8 mx-auto">
                <div id="direPeople" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="card d-flex justify-content-center pt-md-3">
                                <img src="{{asset('assets/imgs/pic1.jpg')}}" alt="image one" class="d-inline-block rounded-circle mx-auto shadow" height="100" width="100">
                                <div class="card-body text-center col-md-10 mx-auto">
                                    Si vous n’êtes pas un spécialiste dans l’importation des véhicules, le mieux c’est
                                    de
                                    vous renseigner chez jews Trading
                                    car ils ont les moyens de passer et traiter avec des agences fiables et spécialisées
                                    pour vous satisfaire.
                                    <p class="my-3">
                                        <strong class="fw-bolder">Kalema Daniel Jonathan</strong><br>
                                        <i class="text-danger">Goma, Nord-Kivu</i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="card d-flex justify-content-center pt-md-3 pb-4">
                                <img src="{{asset('assets/imgs/pic2.jpg')}}" alt="image one" class="d-inline-block rounded-circle mx-auto shadow" height="100" width="100">
                                <div class="card-body text-center col-md-10 mx-auto">
                                    J'ai fait confiance à l'expertise de Jews Trading pour me ramener mon véhicule de
                                    rêve et je peux confirmer cette
                                    expertise car j'ai été bien servis, ils sont meilleurs.
                                    <p class="my-3">
                                        <strong class="fw-bolder">Ir Tonny Kayayalo</strong><br>
                                        <i class="text-danger">Goma, Congo Technologie</i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card d-flex justify-content-center pt-md-3">
                                <img src="{{asset('assets/imgs/pic3.jpg')}}" alt="image one" class="d-inline-block rounded-circle mx-auto shadow" height="100" width="100">
                                <div class="card-body text-center col-md-10 mx-auto">
                                    Les meilleurs services d’importation des automobiles viennent de jews trading !
                                    L’expérience montre que proposer une
                                    action de qualité dans le temps s’apprécie car peu de personnes ont cette expertise
                                    en RDC. Il faut donc mieux proposer
                                    vos services chez jews trading.
                                    <p class="my-3">
                                        <strong class="fw-bolder">Gracieux Sikuly</strong><br>
                                        <i class="text-danger">Goma, Nord-Kivu</i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#direPeople" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#direPeople" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        @include('layouts.beforword')
    </div>
</div>
@endsection
