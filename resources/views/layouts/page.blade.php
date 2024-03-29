<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="author" content="linux99">
    <meta itemprop="image" content="{{ asset('assets/img/logojw.png')}}">
    <meta name="description" content="{{ Config('app.name')}} E-commerce est un site E-commerce qui vend et vous livre vos vehicules dans le plus bref delai. Passer vos commandes chez nous" />
    <meta name="keywords" content="Jews trading, cars, e-commerce, ventes, voitures, produits e-commerce, jewstrading.com, e-commerce jewstrading, goma, vente voiture goma, jewstrading rdc , cars goma, goma cars, ventes en lignes vehicule">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ Config('app.name')}} E-commerce ">
    <meta itemprop="description" content="{{ Config('app.name')}} E-commerce, Faites vos commandes et recevoir tous nos produits dans un bref delai...">
    <meta itemprop="image" content="{{ asset('assets/img/logojw.png')}}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="www.jewstrading.com">
    <meta name="twitter:title" content="{{ Config('app.name')}}">
    <meta name="twitter:description" content="{{ Config('app.name')}} E-commerce">
    <meta name="twitter:creator" content="linux99">
    <meta name="twitter:image" content="{{ asset('assets/img/logojw.png')}}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ Config('app.name')}} E-commerce" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/" />
    <meta property="og:image" content="{{ asset('assets/img/logojw.png')}}" />
    <meta property="og:description" content="{{ Config('app.name')}} E-commerce" />
    <meta property="og:site_name" content="{{ Config('app.name')}} E-commerce" />
    <meta property="fb:app_id" content="">
    @include('layouts.header')
    <title>@yield('title' ?? 'Acceuil')</title>
</head>

<body>
    <div class="position-relative">
        <div class="">
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
                        <h2>@yield('titre')</h2>
                    </div>
                </div>
            </div>
            <div style="background: url('/assets/img/bg1.jpg');" class="text-white">
                @yield('contenu')
            </div>
        </div>
    </div>
    @include('layouts.footer')
    @include('layouts.script')
    @include('layouts.light')
</body>

<!-- END ADMIN SCRIPT -->
<script>
    var nav = document.getElementById('nav');
    if (window.scrollY == 0) {
        nav.classList.remove('bg-danger');
    }
</script>
<!-- END SCRIPT LAYER -->

</html>
