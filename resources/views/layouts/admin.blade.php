<!doctype html>
<html lang="en">

<head>
    <meta name="app-url" content="/">
    <meta name="file-base-url" content="public/">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/ico.png')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    @include('layouts.header')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <style>
        body {
            font-size: 12px;
        }
    </style>
    <script>
        var AIZ = AIZ || {};
        AIZ.local = {

        }
    </script>

</head>

<body class="">
    <div class="aiz-main-wrapper">
        <div class="aiz-sidebar-wrap">
            <div class="aiz-sidebar left c-scrollbar bg-danger2">
                <div class="aiz-side-nav-logo-wrap bg-white opacity-70 ">
                    <a href="{{ route('admin')}}" class="d-block text-left d-flex align-content-center">
                        <img class="" src="{{asset('assets/img/logojw.png')}}" class="brand-icon" alt="">
                        <h5 class="text-dark text-capitalise fs-15 " style="font-family: Garamond, serif;">@lang("JEWS TRADING")</h5>
                    </a>
                </div>
                <div class="aiz-side-nav-wrap"></div>
                <div class="aiz-side-nav-wrap">
                    <div class="px-20px mb-3">
                        <input class="form-control bg-soft-secondary border-0 form-control-sm text-white" type="text" name="" placeholder="@lang('Rechercher dans le menu')" id="menu-search" onkeyup="menuSearch()">
                    </div>
                    <ul class="aiz-side-nav-list" id="search-menu">
                    </ul>
                    <ul class="aiz-side-nav-list" id="main-menu" data-toggle="aiz-side-menu">
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('admin')}}" class="aiz-side-nav-link">
                                <i class="las la-home aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">@lang('Tableau de board')</span>
                            </a>
                        </li>
                        <!-- Product -->
                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link">
                                <i class="las la-user-tie aiz-side-nav-icon"></i>
                                <span class="aiz-side-nav-text">@lang("Produits")</span>
                                <span class="aiz-side-nav-arrow"></span>
                            </a>
                            <ul class="aiz-side-nav-list level-2">
                                <li class="aiz-side-nav-item">
                                    <a href="{{ route('produit.create')}}" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang("Nouveau produit")</span>
                                    </a>
                                </li>
                                <li class="aiz-side-nav-item">
                                    <a href="{{ route('admin.produits')}}" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">@lang("Liste de nos produits")</span>
                                    </a>
                                </li>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('commande.index')}}" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">@lang("Demandes de produits")</span>
                            </a>
                        </li>
                    </ul>
                    </li>

                    <!-- Addon Manager -->
                    <li class="aiz-side-nav-item">
                        <a href="{{ route('admin.galerie')}}" class="aiz-side-nav-link ">
                            <i class="las la-wrench aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">@lang("Gallerie")</span>
                        </a>
                    </li>
                    <!-- Services -->
                    <li class="aiz-side-nav-item">
                        <a href="{{ route('service.create')}}" class="aiz-side-nav-link ">
                            <i class="las la-wrench aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">@lang("Services")</span>
                        </a>
                    </li>
                    <!-- Staffs -->
                    <li class="aiz-side-nav-item">
                        <a href="{{ route('admin.staff.index')}}" class="aiz-side-nav-link">
                            <i class="las la-user-tie aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">@lang("Agents")</span>
                            <!-- <span class="aiz-side-nav-arrow"></span> -->
                        </a>
                        <!-- <ul class="aiz-side-nav-list level-2">
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('admin.staff.index')}}" class="aiz-side-nav-link ">
                                    <span class="aiz-side-nav-text">@lang("Liste des agents")</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item" hidden>
                                <a href="#" class="aiz-side-nav-link ">
                                    <span class="aiz-side-nav-text">@lang("Permission des membres")</span>
                                </a>
                            </li>
                        </ul> -->
                    </li>
                    <!-- Addon Manager -->
                    <li class="aiz-side-nav-item">
                        <a href="{{ route('admin.newslatter')}}" class="aiz-side-nav-link ">
                            <i class="las la-wrench aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">@lang("Newslatter")</span>
                        </a>
                    </li>
                    <!-- Addon Manager -->
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link ">
                            <i class="las la-wrench aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">@lang("Commentaires")</span>
                        </a>
                    </li>
                    <!-- Cleints -->
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-user-tie aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">@lang("Parametre")</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            <li class="aiz-side-nav-item">
                                <a href="{{('apropos.config')}}" class="aiz-side-nav-link ">
                                    <span class="aiz-side-nav-text">@lang("Page a propos")</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="{{('news.config')}}" class="aiz-side-nav-link ">
                                    <span class="aiz-side-nav-text">@lang("page d'Actualite")</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="{{('partenaires')}}" class="aiz-side-nav-link ">
                                    <span class="aiz-side-nav-text">@lang("Page de contact")</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="{{('autres.config')}}" class="aiz-side-nav-link ">
                                    <span class="aiz-side-nav-text">@lang("Autres configurations")</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Cleints -->
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-user-tie aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">@lang("Autres")</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            <li class="aiz-side-nav-item">
                                <a href="{{('clients')}}" class="aiz-side-nav-link ">
                                    <span class="aiz-side-nav-text">@lang("Clients")</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="{{('fournisseurs')}}" class="aiz-side-nav-link ">
                                    <span class="aiz-side-nav-text">@lang("Fournisseurs")</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="{{('partenaires')}}" class="aiz-side-nav-link ">
                                    <span class="aiz-side-nav-text">@lang("Partenaires")</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    </ul><!-- .aiz-side-nav -->
                </div><!-- .aiz-side-nav-wrap -->
            </div><!-- .aiz-sidebar -->
            <div class="aiz-sidebar-overlay"></div>
        </div><!-- .aiz-sidebar -->
        <div class="aiz-content-wrapper">
            <div class="aiz-topbar px-15px px-lg-25px d-flex align-items-stretch justify-content-between">
                <div class="d-flex">
                    <div class="aiz-topbar-nav-toggler d-flex align-items-center justify-content-start mr-2 mr-md-3 ml-0" data-toggle="aiz-mobile-nav">
                        <button class="aiz-mobile-toggler">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-stretch flex-grow-xl-1">
                    <div class="d-flex justify-content-around align-items-center align-items-stretch">
                        <div class="d-flex justify-content-around align-items-center align-items-stretch">
                            <div class="aiz-topbar-item">
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-icon btn-circle btn-light" href="{{ route('index')}}" target="_blank" title="site web">
                                        <i class="las la-globe"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around align-items-center align-items-stretch ml-3">
                            <div class="aiz-topbar-item">
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-soft-danger btn-sm d-flex align-items-center" href="#">
                                        <i class="las la-hdd fs-20"></i>
                                        <span class="fw-500 ml-1 mr-0 d-none d-md-block">@lang("Maintenace")</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around align-items-center align-items-stretch">

                        <div class="aiz-topbar-item ml-2">
                            <div class="align-items-stretch d-flex dropdown">
                                <a class="dropdown-toggle no-arrow" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="btn btn-icon p-0 d-flex justify-content-center align-items-center">
                                        <span class="d-flex align-items-center position-relative">
                                            <i class="las la-bell fs-24"></i>
                                            <span class="badge badge-sm badge-dot badge-circle badge-primary position-absolute absolute-top-right"></span>
                                        </span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg py-0">
                                    <div class="p-3 bg-light border-bottom">
                                        <h6 class="mb-0">@lang("Notifications")</h6>
                                    </div>
                                    <div class="px-3 c-scrollbar-light overflow-auto " style="max-height:300px;">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items- py-3">
                                                <div class="media text-inherit">
                                                    <div class="media-body">
                                                        <p class="mb-1 text-truncate-2">
                                                            Mouvement: 20220420-07072866 a ete paye
                                                        </p>
                                                        <small class="text-muted">
                                                            22 juillet 2022, 16:15min
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-center border-top">
                                        <a href="#" class="text-reset d-block py-2">
                                            @lang("Voir toutes les notifications")
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="aiz-topbar-item ml-2">
                            <div class="align-items-stretch d-flex dropdown " id="lang-change">
                                <a class="dropdown-toggle no-arrow" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="btn btn-icon">
                                        <img src="{{ asset('assets/img/flags/en.png')}}" height="11">
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-xs">

                                    <li>
                                        <a href="javascript:void(0)" data-flag="en" class="dropdown-item  active ">
                                            <img src="{{ asset('assets/img/flags/en.png')}}" class="mr-2">
                                            <span class="language">@lang("Anglais")</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-flag="bd" class="dropdown-item ">
                                            <img src="{{ asset('assets/img/flags/fr.png')}}" class="mr-2">
                                            <span class="language">@lang("Francais")</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="aiz-topbar-item ml-2">
                            <div class="align-items-stretch d-flex dropdown">
                                <a class="dropdown-toggle no-arrow text-dark" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="d-flex align-items-center">
                                        <span class="avatar avatar-sm mr-md-2">
                                            <img src="{{ asset(Session::get('picprofile'))}}" alt="photo de profile" onerror="this.onerror=null;this.src='htdtps://demo.activeitzone.com/ecommerce/public/assets/img/avatar-place.png';">
                                        </span>
                                        <!-- <span class="d-none d-md-block">
                                            <span class="d-block fw-500">{{ Auth::user()->name ?? ''}}</span>
                                            <span class=" d-block small opacity-60">admin</span>
                                        </span> -->
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-md">
                                    <a href="{{ route('admin.staff.profile')}}" class="dropdown-item">
                                        <i class="las la-user-circle"></i>
                                        <span>@lang("Profile")</span>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <i class="las la-sign-out-alt"></i> {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div><!-- .aiz-topbar-item -->
                    </div>
                </div>
            </div><!-- .aiz-topbar -->
            @include('layouts.modal')
            @yield('content')
            @include('sweetalert::alert')
            <div class="bg-white text-center py-3 px-15px px-lg-25px mt-auto">
                <p class="mb-0">&copy;@php
                    echo Date('Y');
                    @endphp {{ Config('app.name')}}</p>
            </div>
        </div><!-- .aiz-content-wrapper -->

    </div><!-- .aiz-main-wrapper -->
    @include('layouts.script')
    @include('layouts.alert-script')
</body>

</html>
