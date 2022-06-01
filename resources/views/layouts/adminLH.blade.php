<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/vendor/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css_js/css.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/icons/font/bootstrap-icons.css')}}">
    <title>@yield('title' ?? 'Administration | Jews Trading')</title>
</head>

<body class="adminBody">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-lg-2 col-2 p-0 m-0 vh-100 menuAdmin">
                <nav class="navbar navbar-expand-lg border-bottom border-secondary border-1 menuAdmin">
                    <div class="container-fluid px-1">
                        <div class="navbar-brand ">
                            <img src="{{ asset('assets/imgs/logojw.png')}}" alt="notre logo" width="60" class="d-inline-block align-text-top">
                            <span class="d-none d-md-inline d-lg-inline">
                                {{__("JEWS Admin")}}
                            </span>
                        </div>
                    </div>
                </nav>
                <div class="text-muted">
                    <ul class="list-unstyled menuLeft-Items">
                        <li class="d-flex justify-content-center d-lg-block d-md-block hoverClass">
                            <a href="/admin" class="nav-link m-0 p-0">
                                <div class="p-3">
                                    <span class="bi-house-door me-md-2"></span><span class="d-none d-md-inline d-lg-inline">{{__("Acceuil")}}</span> <span class="bi-chevron-left float-end d-none d-md-inline d-lg-inline"></span>
                                </div>
                            </a>
                        </li>
                        <li class="d-flex justify-content-center d-lg-block d-md-block hoverClass " type="button" data-bs-toggle="collapse" data-bs-target="#collapseProduits" aria-expanded="false" aria-controls="collapseProduits">
                            <div class="p-3 ">
                                <span class="bi-cart4 me-md-2"></span> <span class="d-none d-md-inline d-lg-inline">{{__("Produits")}}</span> <span class="bi-chevron-left float-end d-none d-md-inline d-lg-inline"></span>
                            </div>
                        </li>
                        <li class="mx-4">
                            <div class="collapse" id="collapseProduits">
                                <ul class="list-unstyled pe-md-1 pe-1 ps-2">
                                    <li class="child-hover-class my-2">
                                        <a href="/addProduit" class="nav-link m-0 p-1">
                                            <span class="bi-caret-right-fill"></span>
                                            <span class="ms-2">Ajouter</span>
                                            <span class="bi-cart-plus-fill float-end"></span>
                                        </a>
                                    </li>
                                    <li class="child-hover-class my-2">
                                        <a href="/alterProduit" class="nav-link m-0 p-1">
                                            <span class="bi-caret-right-fill"></span>
                                            <span class="ms-2">{{__("Modifier")}}</span>
                                            <span class="bi-pencil-square float-end"></span>
                                            <span class="bi-trash float-end"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="d-flex justify-content-center d-lg-block d-md-block hoverClass" type="button" data-bs-toggle="collapse" data-bs-target="#collapseServices" aria-expanded="false" aria-controls="collapseServices">
                            <div class="p-3">
                                <span class="bi-globe me-md-2"></span> <span class="d-none d-md-inline d-lg-inline">{{__("Services")}}</span> <span class="bi-chevron-left float-end d-none d-md-inline d-lg-inline"></span>
                            </div>
                        </li>
                        <li class="mx-4">
                            <div class="collapse" id="collapseServices">
                                <ul class="list-unstyled pe-md-1 pe-1 ps-2">
                                    <li class="child-hover-class my-2">
                                        <a href="#" class="nav-link m-0 p-1" role="button" data-bs-toggle="modal" data-bs-target="#serviceAddModal">
                                            <span class="bi-caret-right-fill"></span>
                                            <span class="ms-2">Ajouter</span>
                                            <span class="bi-cart-plus-fill float-end"></span>
                                        </a>
                                    </li>
                                    <li class="child-hover-class my-2">
                                        <a href="/alterService" class="nav-link m-0 p-1">
                                            <span class="bi-caret-right-fill"></span>
                                            <span class="ms-2">{{__("Modifier")}}</span>
                                            <span class="bi-pencil-square float-end"></span>
                                            <span class="bi-trash float-end"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="d-flex justify-content-center d-lg-block d-md-block hoverClass" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEmploye" aria-expanded="false" aria-controls="collapseEmploye">
                            <div class="p-3">
                                <span class="bi-person-badge me-2"></span><span class="d-none d-md-inline d-lg-inline">{{__("Employes")}}</span> <span class="bi-chevron-left float-end d-none d-md-inline d-lg-inline"></span>
                            </div>
                        </li>
                        <li class="mx-4">
                            <div class="collapse" id="collapseEmploye">
                                <ul class="list-unstyled pe-md-1 pe-1 ps-2">
                                    <li class="child-hover-class my-2">
                                        <a href="#" class="nav-link m-0 p-1" role="button" data-bs-toggle="modal" data-bs-target="#employeAddModal">
                                            <span class="bi-caret-right-fill"></span>
                                            <span class="ms-2">Ajouter</span>
                                            <span class="bi-cart-plus-fill float-end"></span>
                                        </a>
                                    </li>
                                    <li class="child-hover-class my-2">
                                        <a href="#" class="nav-link m-0 p-1" role="button" data-bs-toggle="modal" data-bs-target="#employeAlterModal">
                                            <span class="bi-caret-right-fill"></span>
                                            <span class="ms-2">{{__("Modifier")}}</span>
                                            <span class="bi-pencil-square float-end"></span>
                                            <span class="bi-trash float-end"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="d-flex justify-content-center d-lg-block d-md-block hoverClass">
                            <a href="/galerie-alter" class="nav-link m-0 p-0">
                                <div class="p-3">
                                    <span class="bi-card-image me-md-2"></span><span class="d-none d-md-inline d-lg-inline">{{__("Galerie")}}</span> <span class="bi-chevron-left float-end d-none d-md-inline d-lg-inline"></span>
                                </div>
                            </a>
                        </li>
                        <li class="d-flex justify-content-center d-lg-block d-md-block hoverClass">
                            <a href="/parametre" class="nav-link m-0 p-0">
                                <div class="p-3">
                                    <span class="bi-share me-md-2"></span><span class="d-none d-md-inline d-lg-inline">{{__("Parametre")}}</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-lg-10 col-10 p-0 m-0">
                <div>
                    <nav class="navbar navbar-expand-lg menuAdmin">
                        <div class="container-fluid">
                            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".coll">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse coll d-flex justify-content-center">
                                <div class="navbar-nav mx-auto">
                                    <li class="nav-item">
                                        <form action="" method="post" class="input-group">
                                            <input type="text" class="form-control search-menu-admin">
                                            <button class="btn menuAdmin">{{ __("Recherche")}}</button>
                                        </form>
                                    </li>
                                </div>
                            </div>

                            <div class="ms-auto d-flex">
                                <img src="{{asset('assets/imgs/equipe1.jpg')}}" alt="image profile" class="rounded-circle" style="width: 50px; height: 50px">
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="position-relative">
                    <div class="container-fluid">
                        @yield('body' ?? 'NOT FOUND')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.modals')
    <script src="{{asset('assets/vendor/dist/js/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/vendor/dist/DataTables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/vendor/dist/DataTables/DataTables-1.12.1/css/dataTables.bootstrap5.min.css')}}"></script>
    <script src="{{asset('assets/vendor/dist/js/bootstrap.bundle.min.js')}}">
    </script>
    <script>
        let numFile = 0;

        function ajouter() {
            $('.input-add').append('<input type = "file"\
            class = "form-control my-1 bg-select" name ="file' + numFile + '"/>');
            numFile++;
        }
    </script>
</body>

</html>
