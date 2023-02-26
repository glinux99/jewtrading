<nav class="navbar navbar-expand-md navbar-dark" id="nav">
    <div class="container-fluid">
        <div class="navbar-brand ">
            <img src="{{ asset('assets/img/logojw.png')}}" alt="notre logo" width="40" height="40" class="d-inline-block align-text-top rounded-circle">
        </div>
        <!-- <div class="d-inline-block bg-white  d-md-none d-lg-none rounded-circle d-flex align-items-center" style="height: 50px; width: 50px">
             <span class="bi-search mx-auto text-dark"></span>
         </div> -->
        <button class="navbar-toggler" type="button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="offcanvas offcanvas-start w-25 d-md-none d-lg-none" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header w-25">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel me-2">Menu</h5>
                <button type="button" class="btn-close text-reset ms-2" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex justify-content-center offca">
                <ul class="list-unstyled text-uppercase ">
                    <li class="nav-item h6">
                        <a href="/" class="nav-link">
                            <span class="liste">{{ __("home")}}</span>
                        </a>
                    </li>
                    <li class="nav-item h6">
                        <a href="{{ route('home.services')}}" class="nav-link ">
                            <span class="liste">{{__("service")}}</span>
                        </a>
                    </li>
                    <li class="nav-item h6">
                        <a href="{{ route('home.galerie')}}" class="nav-link ">
                            <span class="liste">{{__("galerie")}}</span>
                        </a>
                    </li>
                    <li class="nav-item h6">
                        <a href="{{ route('produits.all')}}" class="nav-link ">
                            <span class="liste">{{__("produits")}}</span>
                        </a>
                    </li>
                    <li class="nav-item h6">
                        <a href="{{ route('home.apropos')}}" class="nav-link ">
                            <span class="liste">{{ __("apropos")}}</span>
                        </a>
                    </li>
                    <li class="nav-item h6">
                        <a href="{{ route('home.contact')}}" class="nav-link ">
                            <span class="liste">{{__("contact")}}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="collapse menuToggle navbar-collapse d-md-flex justify-content-end">
            <ul class="nav nav-pills text-uppercase ">
                <li class="nav-item h6">
                    <a href="/" class="nav-link">
                        <span class="liste">{{ __("home")}}</span>
                    </a>
                </li>
                <li class="nav-item h6">
                    <a href="{{ route('home.services')}}" class="nav-link ">
                        <span class="liste">{{__("service")}}</span>
                    </a>
                </li>
                <li class="nav-item h6">
                    <a href="{{ route('home.galerie')}}" class="nav-link ">
                        <span class="liste">{{__("galerie")}}</span>
                    </a>
                </li>
                <li class="nav-item h6">
                    <a href="{{ route('produits.all')}}" class="nav-link ">
                        <span class="liste">{{__("produits")}}</span>
                    </a>
                </li>
                <li class="nav-item h6">
                    <a href="{{ route('home.apropos')}}" class="nav-link ">
                        <span class="liste">{{ __("apropos")}}</span>
                    </a>
                </li>
                <li class="nav-item h6">
                    <a href="{{ route('home.contact')}}" class="nav-link ">
                        <span class="liste">{{__("contact")}}</span>
                    </a>
                </li>
            </ul>
            <!-- <div class="d-md-block d-lg-block d-none">
                 <div class=" d-inline-block bg-white rounded-circle d-flex align-items-center" style="height: 50px; width: 50px">
                     <span class="bi-search mx-auto text-dark"></span>
                 </div>
             </div> -->
        </div>
    </div>
</nav>
