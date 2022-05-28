 <nav class="navbar navbar-expand-lg bg-danger navbar-dark" id="nav">
     <div class="container-fluid ">
         <div class="navbar-brand ">
             <img src="{{ asset('assets/imgs/logojw.png')}}" alt="notre logo" width="60" class="d-inline-block align-text-top">
         </div>
         <div class="d-inline-block bg-white  d-md-none d-lg-none rounded-circle d-flex align-items-center" style="height: 50px; width: 50px">
             <span class="bi-search mx-auto text-dark"></span>
         </div>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".menuToggle" aria-controls="menuToggle" aria-expanded="false" aria-label="button toggle de navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse menuToggle navbar-collapse d-md-flex justify-content-end">
             <ul class="nav nav-pills text-uppercase ">
                 <li class="nav-item h6">
                     <a href="/" class="nav-link">
                         <span class="liste">{{ __("home")}}</span>
                     </a>
                 </li>
                 <li class="nav-item h6">
                     <a href="/service" class="nav-link ">
                         <span class="liste">{{__("service")}}</span>
                     </a>
                 </li>
                 <li class="nav-item h6">
                     <a href="/galerie" class="nav-link ">
                         <span class="liste">{{__("galerie")}}</span>
                     </a>
                 </li>
                 <li class="nav-item h6">
                     <a href="/produits" class="nav-link ">
                         <span class="liste">{{__("produits")}}</span>
                     </a>
                 </li>
                 <li class="nav-item h6">
                     <a href="/apropos" class="nav-link ">
                         <span class="liste">{{ __("apropos")}}</span>
                     </a>
                 </li>
                 <li class="nav-item h6">
                     <a href="/contact" class="nav-link ">
                         <span class="liste">{{__("contact")}}</span>
                     </a>
                 </li>
             </ul>
             <div class="d-md-block d-lg-block d-none">
                 <div class=" d-inline-block bg-white rounded-circle d-flex align-items-center" style="height: 50px; width: 50px">
                     <span class="bi-search mx-auto text-dark"></span>
                 </div>
             </div>
         </div>
     </div>
 </nav>
