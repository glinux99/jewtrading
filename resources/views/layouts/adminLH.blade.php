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
            <div class="col-md-2 p-0 m-0 vh-100 menuAdmin">
                <nav class="navbar navbar-expand-lg border-bottom border-secondary border-1 menuAdmin ">
                    <div class="container-fluid mb-1 ">
                        <div class="navbar-brand">
                            <img src="{{ asset('assets/imgs/logojw.png')}}" alt="notre logo" width="60" class="d-inline-block align-text-top">
                            {{__("JEWS Admin")}}
                        </div>
                    </div>
                </nav>
                <div class="text-muted">
                    <ul class="list-unstyled menuLeft-Items">
                        <li>
                            <a href="" class="nav-link">
                                <span class="bi-house-door"></span>{{__("Acceuil")}} <span class="bi-chevron-left float-end"></span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="nav-link">
                                <span class="bi-cart4"></span> {{__("Produits")}} <span class="bi-chevron-left float-end"></span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="nav-link">
                                <span class="bi-globe"></span> {{__("Services")}} <span class="bi-chevron-left float-end"></span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="nav-link">
                                <span class="person-badge"></span>{{__("Employes")}} <span class="bi-chevron-left float-end"></span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="nav-link">
                                {{__("Galerie")}} <span class="bi-chevron-left float-end"></span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="nav-link">
                                {{__("Parametre")}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 p-0 m-0">
                <div>
                    <nav class="navbar navbar-expand-lg menuAdmin">
                        <div class="container-fluid">
                            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".coll">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse coll">
                                <div class="navbar-nav mx-auto me-5">
                                    <li class="nav-item">
                                        <form action="" method="post" class="input-group">
                                            <input type="text" class="form-control">
                                            <button class="btn btn-success">{{ __("Recherche")}}</button>
                                        </form>
                                    </li>
                                </div>
                                <div class="ms-auto d-flex dropdown">
                                    <img src="{{asset('assets/imgs/equipe1.jpg')}}" alt="image profile" class="rounded-circle" style="width: 50px; height: 50px">
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="">
                    <div class="container-fluid">
                        @yield('body' ?? 'NOT FOUND')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
