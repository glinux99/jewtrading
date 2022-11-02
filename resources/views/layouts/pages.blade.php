<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="app-url" content="/">
    <meta name="file-base-url" content="public/">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
            @yield('contenu' ?? 'NOT FOUND')
        </div>
    </div>
    @include('layouts.modal')
    @include('layouts.footer')
    @include('layouts.script')
    @include('layouts.alert-script')
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
