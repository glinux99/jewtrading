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
            <h2>@lang("Details du") {{$produit->marque}}/{{$produit->model}}</h2>
        </div>
    </div>
</div>
<section class="mb-4 pt-3">
    <div class="container">
        <div class="bg-white shadow-sm rounded p-3">
            <div class="row">
                <div class="col-lg-7 mb-4">
                    <div class="sticky-top z-3 row gutters-10">
                        <div class="col order-1 order-md-2">
                            <div class="aiz-carousel product-gallery" data-nav-for='.product-gallery-thumb' data-fade='true' data-auto-height='true'>
                                @foreach ($images as $image)
                                <div class="carousel-box img-zoom rounded">
                                    <img class="img-fit lazyload w-100" src="" data-src="{{ asset('storage/'.$image->images)}}" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12 col-md-auto w-md-80px order-2 order-md-1 mt-3 mt-md-0">
                            <div class="aiz-carousel product-gallery-thumb" data-items='5' data-nav-for='.product-gallery' data-vertical='true' data-vertical-sm='false' data-focus-select='true' data-arrows='true'>
                                @foreach ($images as $image)
                                <div class="carousel-box c-pointer border p-1 rounded">
                                    <img class="lazyload mw-100 size-50px mx-auto" src="{{ asset('storage/'.$image->images)}}" data-src="{{ asset('storage/'.$image->images)}}" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="text-left">
                        <h1 class="mb-2 fs-30 fw-600">
                            {{$produit->marque}}/{{$produit->model}}
                        </h1>
                        <div class="d-flex mt-2">
                            <div class="me-5">@lang("Prix")</div>
                            <div class="h3 me-5 fs-30 fw-700 text-danger">{{ $produit->prix}} $</div>

                            <div class="">
                                <button type="button" class="btn btn-danger buy-now fw-600" data-toggle="modal" data-target="#commande-client">
                                    <i class="la la-shopping-cart"></i> @lang("Commandez")
                                </button>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-12">
                                <span class="rating">
                                    <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star'></i>
                                </span>
                                <span class="ml-1 opacity-50">(100 vues)</span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="row">
                                <div class="col-4 fs-18 fw-700">
                                    {{__("Caractéristiques")}}
                                </div>
                                <div class="col-8 fs-18 fw-700 d-flex justify-content-end">
                                    <span class="opacity-60">{{__("Emplacement")}} :</span> <span class="text-uppercase">{{$produit->emplacement}}</span>
                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>{{__("Kilometrage")}}</th>
                                        <th>{{__("Annee")}}</th>
                                        <th>{{__("Moteur")}}</th>
                                        <th>{{__("Trans.")}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$produit->kilometrage}}</td>
                                        <td>{{$produit->annee_fab}}</td>
                                        <td>{{$produit->moteur}}</td>
                                        <td>{{$produit->transmission}}</td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table table-bordered table-reflow table-hover">
                                <tr>
                                    <th>{{__("Marque")}}</th>
                                    <td>{{$produit->marque}}</td>
                                </tr>
                                <tr>
                                    <th>{{__("Model")}}</th>
                                    <td>{{$produit->model}}</td>
                                </tr>
                                <tr>
                                    <th>{{__("Carburant")}}</th>
                                    <td>{{$produit->carburateur}}</td>
                                </tr>
                                <tr>
                                    <th>{{__("Couleur")}}</th>
                                    <td>{{$produit->couleur}}</td>
                                </tr>
                                <tr>
                                    <th>{{__("Num. Chassis")}}</th>
                                    <td>{{$produit->numchassis}}</td>
                                </tr>
                                <tr>
                                    <th>{{__("Declaration")}}</th>
                                    <td>{{$produit->declaration}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-4">
    <div class="container">
        <div class="row gutters-10">
            <div class="col-xl-3 order-1 order-xl-0">
                <div class="bg-white shadow-sm mb-3">
                    <div class="position-relative p-3 text-left">
                        <div class="absolute-top-right p-2 bg-white z-1">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" viewBox="0 0 287.5 442.2" width="22" height="34">
                                <polygon style="fill:#F8B517;" points="223.4,442.2 143.8,376.7 64.1,442.2 64.1,215.3 223.4,215.3 " />
                                <circle style="fill:#FBD303;" cx="143.8" cy="143.8" r="143.8" />
                                <circle style="fill:#F8B517;" cx="143.8" cy="143.8" r="93.6" />
                                <polygon style="fill:#FCFCFD;" points="143.8,55.9 163.4,116.6 227.5,116.6 175.6,154.3 195.6,215.3 143.8,177.7 91.9,215.3 111.9,154.3
                                            60,116.6 124.1,116.6 " />
                            </svg>
                        </div>
                        <div class="opacity-50 fs-12 border-bottom">@lang("Mis en vente par:")</div>
                        <a href="#" class="text-reset d-block fw-600">
                            {{ Config('app.name')}}
                            <span class="ml-2"><i class="fa fa-check-circle" style="color:green"></i></span>
                        </a>
                        <!-- <div class="location opacity-70">{{ $vendeur->details ?? ''}}</div> -->
                        <div class="text-center border rounded p-2 mt-3">
                            <div class="rating">
                                <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i>
                            </div>
                            <div class="opacity-60 fs-12">(100 vues)</div>
                        </div>
                    </div>
                    <div class="row no-gutters align-items-center border-top">
                        <div class="col">
                            <a href="/" class="d-block btn btn-soft-primary rounded-0">@lang("Marche")</a>
                        </div>
                        <div class="col">
                            <ul class="social list-inline mb-0">
                                <li class="list-inline-item mr-0">
                                    <a href="" class="facebook" target="_blank">
                                        <i class="lab la-facebook-f opacity-60"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <a href="" class="twitter" target="_blank">
                                        <i class="lab la-twitter opacity-60"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="" class="youtube" target="_blank">
                                        <i class="lab la-youtube opacity-60"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded shadow-sm mb-3">
                    <div class="p-3 border-bottom fs-16 fw-600">
                        @lang("Produits les plus vendus")
                    </div>
                    <div class="p-3">
                        <ul class="list-group list-group-flush">
                            @foreach ($produitsV as $produit)
                            <li class="py-3 px-0 list-group-item border-light">
                                <div class="row gutters-10 align-items-center">
                                    <div class="col-5">
                                        <a href="{{ route('produit.details',[$produit->produit_id])}}" class="d-block text-reset">
                                            <img class="img-fit lazyload h-xxl-110px h-xl-80px h-120px" src="" data-src="{{ asset('storage/'.$produit->images)}}" alt="kkkk" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="col-7 text-left">
                                        <h4 class="fs-13 text-truncate-2">
                                            <a href="" class="d-block text-reset">{{ $produit->model.'/'.$produit->marque}}</a>
                                        </h4>
                                        <div class="fs-15">
                                            <span class="fw-700 text-danger">{{ $produit->prix}}$</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star'></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 order-0 order-xl-1">
                <div class="bg-white rounded shadow-sm">
                    <div class="border-bottom p-3">
                        <h3 class="fs-16 fw-600 mb-0">
                            <span class="mr-4">@lang("Produits connexes")</span>
                        </h3>
                    </div>
                    <div class="p-3">
                        <div class="aiz-carousel gutters-5 half-outside-arrow" data-items="5" data-xl-items="3" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true' data-infinite='true'>
                            @foreach ($produits as $produit)
                            <div class="carousel-box">
                                <div class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="">
                                        <a href="{{ route('produit.details',[$produit->produit_id])}}" class="d-block">
                                            <img class="img-fit lazyload mx-auto h-140px h-md-210px" src="" data-src="{{ asset('storage/'.$produit->images)}}" alt="rien" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                        </a>
                                    </div>
                                    <div class="p-md-3 p-2 text-left">
                                        <div class="fs-15">
                                            <span class="fw-700 text-primary">{{ $produit->marque}}/{{ $produit->model}}</span>
                                        </div>
                                        <div class="fs-15">
                                            <span class="fw-700 text-danger">{{ $produit->prix}}$</span>
                                        </div>
                                        <div class="rating rating-sm mt-1">
                                            <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded shadow-sm mt-3">
                    <div class="border-bottom p-3">
                        <h3 class="fs-18 fw-600 mb-0">
                            <span>@lang("Envoyez-nous un feed-back sur ce produit")</span>
                        </h3>
                    </div>

                    <div class="query form p-3">
                        <form action="#" method="POST">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" rows="3" cols="40" name="question" placeholder="@lang('Tapez votre question, commentaire ou suggestion sur ce produit ici')" style="resize: none;"></textarea>

                            </div>
                            <button type="submit" class="btn btn-primary">@lang("Envoyer")</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
