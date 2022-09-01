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
            <h2>@lang("Produits")</h2>
        </div>
    </div>
</div>
<section class="pt-5 advertisement-apropos center-bg-effect">
    <div class="mx-3 containerd">
        <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
            <div class="produits">
                @if ($produits->count())
                <div class="row">
                    <!-- Nos produits -->
                    @foreach ($produits as $produit)
                    <div class="col-md-3 col-lg-3 col-6 carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="{{ route('produit.details',[$produit->produit_id])}}" class="d-block">
                                    <img class="img-fit lazyload h-xxl-310px h-xl-260px h-340px" src="{{ asset('storage/'.$produit->images)}}" data-src="{{ asset('storage/'.$produit->images)}}" alt="" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                                <span class="absolute-bottom-left fs-11 text-white fw-600 px-2 lh-1-8" style="background-color: #455a64">
                                    @lang("En vente")
                                </span>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(2)" data-toggle="tooltip" data-title="J'aime" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(2)" data-toggle="tooltip" data-title="Ajouter pour comparer" data-placement="left">
                                        <i class="las la-comment"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(2)" data-toggle="tooltip" class="charriot" data-id="{{$produit->produit_id}}" data-title="Acheter" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-danger">{{ $produit->prix}}$</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="#" class="d-block text-reset">{{$produit->model}}/{{$produit->marque}}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="aiz-pagination mt-3 d-flex justify-content-center">
                    <nav>
                        {{ $produits->links()}}
                    </nav>
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
