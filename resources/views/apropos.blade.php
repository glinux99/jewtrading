@extends('layouts.layoutHF')
@section('title') {{ __("Q propos de Jew Trading")}} @endsection
@section('body')
@include('layouts.menuP')
<div class="position-relative">
    <div class="position-absolute" style="z-index: 1000; bottom: 50%;">
        <h1 class="fw-bold text-white mx-5">{{__("Apropos")}}</h1>
    </div>
    <div class="d-flex align-items-center aproposBg">
    </div>
</div>
<div class="container-fluid">
    <div class="col-md-11 mx-auto my-md-5">
        <div class="w-100 row">
            <div class="col-md-6">
                <h3 class="text-uppercase fw-bolder">{{ __("Bienvenu chez")}} <span class="text-danger">Jews Trading</span></h3>
                <h6 class="mb-3">{{__("A propos")}}</h6>
                <p class="text-muted text-justify">
                    {{ $apropos}}
                </p>
            </div>
            <div class="col-md-6 card border-0">
                <img src="{{asset('assets/imgs/aproposcard.png')}}" alt="" class="card-img-top">
            </div>
        </div>
    </div>
    <div class="col-md-11 mx-auto my-md-5">
        <div class="w-100 row">
            <div class="col-md-6 card border-0">
                <img src="{{asset('assets/imgs/aproposcard2.png')}}" alt="" class="card-img-top">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bolder">{{__("Pourquoi choisir ")}}jews traiding?</h3>
                <p class="text-muted text-justify">
                    {{$missions}}
                </p>
                <p>
                <ul class="list-unstyled">
                    <li><span class="bi-check-circle-fill mx-1"></span> {{__("Rapide et facile")}}</li>
                    <li><span class="bi-check-circle-fill mx-1"></span>{{__("Une inspection Transparente")}}</li>
                    <li><span class="bi-check-circle-fill mx-1"></span>{{__("Offert immédiatement")}}</li>
                    <li><span class="bi-check-circle-fill mx-1"></span>{{__("Formalités administratives sans tracas")}}</li>
                    <li><span class="bi-check-circle-fill mx-1"></span>{{__("Transactions de paiement sécurisées")}}</li>
                </ul>
                </p>
            </div>
        </div>
        <div class="equipe my-5">
            <h2 class="fw-bolder text-uppercase">{{__("Notre équipe")}}</h2>
            <div class="row">
                @foreach ($agents as $agent)
                <div class="col-md-3 m-2 card position-relative border-0">
                    <img src="{{asset($agent[2])}}" alt="{{ $agent[2]}}" class="img-fluid ">
                    <div class="my-3">
                        <h6 class="text-center fw-bold">{{ $agent[0]}}</h6>
                        <h6 class=" text-center">{{ $agent[1]}}</h6>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@include('layouts.beforword')
@endsection
