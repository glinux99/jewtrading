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

<body class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-lg-2 col-2 p-0 m-0 vh-100 bg-danger shadow position-sticky top-0">
                <nav class="navbar navbar-expand-lg border-bottom border-secondary border-1 bg-danger p-0 m-1">
                    <div class="container-fluid px-3">
                        <div class="navbar-brand d-flex align-items-center">
                            <img src="{{ asset('assets/imgs/logojw.png')}}" alt="notre logo" width="35" height="35" class="d-inline-block align-text-top rounded-circle">
                            <span class="d-none d-md-inline d-lg-inline text-white px-2">
                                {{__("JEWS Admin")}}
                            </span>
                        </div>
                    </div>
                </nav>
                <div class="text-white ms-md-3">
                    <ul class="list-unstyled menuLeft-Items">
                        <li class="d-flex justify-content-center d-lg-block d-md-block hoverClass">
                            <div class="p-3">
                                <a href="/admin" class="m-0 p-0">
                                    <span class="bi-house-door me-md-2"></span><span class="d-none d-md-inline d-lg-inline">{{__("Acceuil")}}</span> <span class="bi-chevron-left float-end d-none d-md-inline d-lg-inline"></span>
                                </a>
                            </div>
                        </li>
                        <li class="d-flex justify-content-center d-lg-block d-md-block hoverClass">
                            <a href="/galerie-alter" class="nav-link m-0 p-0">
                                <div class="p-3">
                                    <span class="bi-card-image me-md-2"></span><span class="d-none d-md-inline d-lg-inline">{{__("Galerie")}}</span> <span class="bi-chevron-left float-end d-none d-md-inline d-lg-inline"></span>
                                </div>
                            </a>
                        </li>
                        <li class="d-flex justify-content-center d-lg-block d-md-block hoverClass ">
                            <div class="p-3 ">
                                <span class="bi-cart4 me-md-2"></span> <span class="d-none d-md-inline d-lg-inline">{{__("Produits")}}</span> <span class="bi-chevron-left float-end d-none d-md-inline d-lg-inline"></span>
                            </div>
                        </li>
                        <li class="d-flex justify-content-center d-lg-block d-md-block hoverClass" type="button" data-bs-toggle="collapse" data-bs-target="#collapseServices" aria-expanded="false" aria-controls="collapseServices">
                            <div class="p-3">
                                <span class="bi-globe me-md-2"></span> <span class="d-none d-md-inline d-lg-inline">{{__("Services")}}</span> <span class="bi-chevron-left float-end d-none d-md-inline d-lg-inline"></span>
                            </div>
                        </li>
                        <li class="d-flex justify-content-center d-lg-block d-md-block hoverClass" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEmploye" aria-expanded="false" aria-controls="collapseEmploye">
                            <div class="p-3">
                                <span class="bi-person-badge"></span><span class="d-none d-md-inline d-lg-inline">{{__("Employes")}}</span> <span class="bi-chevron-left float-end d-none d-md-inline d-lg-inline"></span>
                            </div>
                        </li>
                        <li class="d-flex justify-content-center d-lg-block d-md-block hoverClass">
                            <a href="/galerie-alter" class="nav-link m-0 p-0">
                                <div class="p-3">
                                    <span class="bi-envelope"></span><span class="d-none d-md-inline d-lg-inline">{{__("Messages")}}</span> <span class="bi-chevron-left float-end d-none d-md-inline d-lg-inline"></span>
                                </div>
                            </a>
                        </li>
                        <li class="d-flex justify-content-center d-lg-block d-md-block hoverClass">
                            <a href="/galerie-alter" class="nav-link m-0 p-0">
                                <div class="p-3">
                                    <span class="bi-truck"></span><span class="d-none d-md-inline d-lg-inline">{{__("Commandes")}}</span> <span class="bi-chevron-left float-end d-none d-md-inline d-lg-inline"></span>
                                </div>
                            </a>
                        </li>
                        <li class="d-flex justify-content-center d-lg-block d-md-block hoverClass">
                            <a href="/parametre" class="nav-link m-0 p-0">
                                <div class="p-3">
                                    <span class="bi-share"></span><span class="d-none d-md-inline d-lg-inline">{{__("Parametre")}}</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-lg-10 col-10 p-0 m-0">
                <div>
                    <nav class="navbar navbar-expand-lg bg-danger ">
                        <div class="container-fluid">
                            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".coll">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <ul class="nav mx-auto">
                                <li class="nav-item">
                                    <a href="/galerie-alter" class="">
                                        <div class="px-3">
                                            <span class="bi-envelope me-md-2"></span><span class="d-none d-md-inline d-lg-inline">{{__("Messages")}}</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/galerie-alter" class="">
                                        <div class="px-3">
                                            <span class="bi-truck me-md-2"></span><span class="d-none d-md-inline d-lg-inline">{{__("Commandes")}}</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-end">
                                <div class="btn-group dropstart">
                                    <img src="{{asset('assets/imgs/logojw.png')}}" data-bs-toggle="dropdown" aria-expanded="false" alt="image profile" class="rounded-circle" style="width: 35px; height: 35px">
                                    <ul class="dropdown-menu shadow-lg">
                                        <li>
                                            <a href="/parametre" class="nav-link">
                                                <span class=" bi-gear-fill me-1 text-danger"></span><span class="text-danger">{{__("Parametre")}}</span>
                                            </a>
                                        </li>
                                        <li class="border-top"></li>
                                        <li>
                                            <a href="/logout" class="nav-link">
                                                <span class="bi-power me-1 text-danger "></span><span class="text-danger">{{__("Deconnection")}}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- <div class="">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('assets/imgs/logojw.png')}}" alt="image profile" class="rounded-circle" style="width: 50px; height: 50px">
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div> -->
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
        let numFile = 2;

        function ajouter() {
            $('.input-add').append('<div class="d-flex">\
            <input type = "file"\
            class = "form-control my-1 " name ="file' + numFile + '"/>\
            <span class="ms-2 bi-trash-fill bi--xl text-danger" onclick="deleteP(this)"></span>\
            </div>');
            $('#count').val(numFile);
            numFile++;
        }

        function deleteP(el) {
            $(el).parent('div').remove();
            numFile = $('#count').val();
            let val = $('#count').val();
            $('#count').val(val - 1);
            console.log();
        }
    </script>
    @if(session('serviceAff') ?? 0)
    <script>
        $(window).ready(function() {
            $('#modalAff').click();
        });
    </script>
    @endif
    @if(session('agentAff') ?? 0)
    <script>
        $(window).ready(function() {
            $('#agentAffModal').click();
        });
    </script>
    @endif
    @if(session('produitAff') ?? 0)
    <script>
        $(window).ready(function() {
            $('#produitModife').click();
        });
    </script>
    @endif
</body>

</html>
