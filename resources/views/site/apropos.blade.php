@extends('layouts.pages')
@section('contenu')
<div class="bg-danger">
    @include('layouts.navbarHome')
</div>
<style>
    .breadcrumb .breadcrumb-item {
        margin: 0;
    }

    .breadcrumb {
        margin: -20px;
        background-color: #fff;
        padding: 1.5rem 20px;
        border-bottom: 1px solid #4329a333;
        border-radius: 0;
        margin-bottom: 20px;
    }

    .breadcrumb .breadcrumb-item a {
        color: #131313;
        font-weight: 600;
    }

    .breadcrumb-item.active {
        color: #141433;
    }

    .breadcrumb-area {
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        min-height: 225px;
        position: relative;
    }

    .breadcrumb-area .breadcrumb-content {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .breadcrumb-area .breadcrumb-content>h2 {
        font-weight: 700;
        color: #ffffff;
        text-transform: uppercase;
        text-align: center;
        font-size: 36px;
        margin-bottom: 0;
        padding-bottom: 20px;
    }

    .breadcrumb-area .breadcrumb-content ul>li:first-child {
        padding-left: 0;
    }

    .breadcrumb-area .breadcrumb-content ul>li {
        color: #000000;
        display: inline-block;
        padding-left: 20px;
        position: relative;
    }

    .breadcrumb-area .breadcrumb-content ul>li:before {
        content: "\f054";
        font-family: 'Font Awesome 5 Free';
        font-weight: 600;
        position: absolute;
        right: -15px;
        top: 2px;
        font-size: 10px;
        color: #ffffff;
    }

    .breadcrumb-area .breadcrumb-content ul>li:last-child:before {
        display: none;
        content: none;
    }

    .breadcrumb-area .breadcrumb-content ul>li>a {
        color: #ffffff;
    }

    .breadcrumb-area .breadcrumb-content ul>li {
        color: #ffffff;
        display: inline-block;
        padding-left: 20px;
        position: relative;
    }

    .breadcrumb-area .breadcrumb-content ul>li.active {
        color: #ba1c24;
        font-weight: 600;
    }
</style>
<div class="breadcrumb-area " style="background-image: url('/assets/img/produitbg.jpg')">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="breadcrumb-content">
            <h2>@lang("APROPOS")</h2>
        </div>
    </div>
</div>
<section>
    <div class="container-fluid">
        <div class="col-md-11 mx-auto my-md-5">
            <div class="w-100 row">
                <div class="col-md-6">
                    <h3 class="text-uppercase fw-bolder">{{ __("Bienvenu chez")}} <span class="text-danger">Jews Trading</span></h3>
                    <h6 class="mb-3">{{__("A propos")}}</h6>
                    <p class="text-muted text-justify">
                        {{ $apropos ?? ''}}
                    </p>
                </div>
                <div class="col-md-6 border-0">
                    <img src="{{asset('assets/img/aproposcard.png')}}" alt="" class="card-img-top">
                </div>
            </div>
        </div>
        <div class="col-md-11 mx-auto my-md-5">
            <div class="w-100 row">
                <div class="col-md-6 border-0">
                    <img src="{{asset('assets/img/aproposcard2.png')}}" alt="" class="card-img-top">
                </div>
                <div class="col-md-6">
                    <h3 class="fw-bolder">{{__("Pourquoi choisir ")}}jews traiding?</h3>
                    <p class="text-muted text-justify">
                        {{$missions ?? ''}}
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
            @if($agents ?? 0)
            <div class="equipe my-5">
                <h2 class="fw-bolder text-uppercase">{{__("Notre équipe")}}</h2>
                <div class="row">
                    @foreach ($agents as $agent)
                    <div class="col-md-3 m-2 card position-relative border-0">
                        <img src="{{asset($agent[2])}}" alt="{{ $agent[2]}}" class="img-fluid h-100">
                        <div class="my-3">
                            <h6 class="text-center fw-bold">{{ $agent[0]}}</h6>
                            <h6 class=" text-center">{{ $agent[1]}}</h6>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection
