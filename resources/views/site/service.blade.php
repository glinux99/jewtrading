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
            <h2>@lang("SERVICE")</h2>
        </div>
    </div>
</div>
<h1 class="fs-40 fw-700 text-center my-4">
    @lang("Nous fournissons les meilleurs services")
</h1>
<section class="pt-5 advertisement-apropos center-bg-effect">
    <div class="mx-3 containerd">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="produits">
                @if ($services->count())
                <div class="row">
                    <!-- Nos produits -->
                    <div class="row w-100 d-flex justify-content-center">
                        @php
                        if((session()->get('lang_code')=='en')){
                        $titre="titreUs";
                        $desc ="descriptionUs";
                        }else{
                        $titre="titreFr";
                        $desc ="descriptionFr";
                        }
                        @endphp
                        <div class="row" data-items="6">
                            @foreach ($services as $service)
                            <div class="col-md-4 ">
                                <div class="carousel-box py-2">
                                    <div class="aiz-card-box h-md-290px  border @if ($categorie->visible ?? '1') border-light @else border-success  @endif rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                        <div class="p-md-3 p-2 text-left border-bottom border-2 border-danger">
                                            <h3 class="fw-600 fs-15 text-truncate-2 mb-0 text-center">
                                                <a href="#" class="d-block text-reset">{{ $service->$titre}}</a>
                                            </h3>
                                        </div>
                                        <div class="position-relative">
                                            <a href="#" class="d-block text-justify p-2">
                                                {{ $service->$desc}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @else
                <div class="d-flex justify-content-center">
                    @lang("Aucune donnee a afficher")
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
