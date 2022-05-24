 <nav class="navbar navbar-expand-lg bg-danger" id="nav">
     <div class="container-fluid">
         <div class="navbar-brand">
             <img src="{{ asset('assets/imgs/logojw.png')}}" alt="notre logo" width="60" class="d-inline-block align-text-top">
         </div>
         <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target=".menuToggle" aria-controls="menuToggle" aria-expanded="false" aria-label="button de navigation">
             <span class="navbar-toggler-icon text-white"></span>
         </button>
         <div class="collapse menuToggle navbar-collapse justify-content-end nav-fill">
             <ul class="navbar-nav w-50  text-uppercase px-4">
                 <li class="nav-item">
                     <a href="/" class="nav-link ">
                         <span class="liste">{{ __("home")}}</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="/service" class="nav-link ">
                         <span class="liste">{{__("service")}}</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="/galerie" class="nav-link ">
                         <span class="liste">{{__("galerie")}}</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="/produits" class="nav-link ">
                         <span class="liste">{{__("produits")}}</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="/apropos" class="nav-link ">
                         <span class="liste">{{ __("a propos")}}</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="/contact" class="nav-link ">
                         <span class="liste">{{__("contact")}}</span>
                     </a>
                 </li>
             </ul>
             <div class="d-inline-block bg-white rounded-circle d-flex align-items-center" style="height: 50px; width: 50px">
                 <span class="bi-search mx-auto text-dark"></span>
             </div>
         </div>
     </div>
 </nav>
