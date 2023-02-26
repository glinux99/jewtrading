 <section class="bg-dark py-5 text-light footer-widget">
     <div class="container">
         <div class="row">
             <div class="col-lg-4 d-none d-lg-block d-md-block text-center text-md-left">
                 <div class="mt-4">
                     <a href="{{ route('index')}}" class="d-block">
                         <img class="lazyload" src="{{ asset('assets/img/logojw.png')}}" alt="jews trading" height="44">
                     </a>
                     <div class="my-3">
                         <span style="color: rgb(242, 243, 248); font-family: 'Open Sans', sans-serif; background-color: rgb(17, 23, 35);">@lang('jews trading E-commerce System')</span>
                     </div>
                     <div class="d-inline-block d-md-block mb-4">
                         <form class="form-inline" method="POST" action="/create-newslatter">
                             @csrf
                             <div class="form-group mb-0">
                                 <input type="text" name="newslatterAuth" value="1" hidden>
                                 <input type="email" class="form-control" placeholder="@lang('votre adresse email')" name="email" required>
                                 <button type="submit" class="btn text-white btn-danger ml-">
                                     @lang('s\'abonner')
                                 </button>
                             </div>
                         </form>
                     </div>
                     <div class="w-300px mw-100 mx-auto mx-md-0">
                         <a href="#" target="_blank" class="d-inline-block mr-3 ml-0">
                             <img src="{{ asset('assets/img/beforward.png')}}" class="mx-100 h-40px">
                         </a>
                         <a href="#" target="_blank" class="d-inline-block">
                             <img src="{{ asset('assets/img/sbt.jpg')}}" class="mx-100 h-40px">
                         </a>
                     </div>
                 </div>
             </div>

             <div class="col-md-4 col-6 col-lg-3">
                 <div class="text-left mt-4">
                     <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                         @lang('Nos garenties')
                     </h4>
                     <ul class="list-unstyled">
                         <li class="mb-2">
                             <a class="opacity-50 hov-opacity-100 text-reset" href="/">
                                 @lang('Rapide et facile')
                             </a>
                         </li>
                         <li class="mb-2">
                             <a class="opacity-50 hov-opacity-100 text-reset" href="/">
                                 @lang('Une inspection Transparente')
                             </a>
                         </li>
                         <li class="mb-2">
                             <a class="opacity-50 hov-opacity-100 text-reset" href="/">
                                 @lang('Offert immédiatement')
                             </a>
                         </li>
                         <li class="mb-2">
                             <a class="opacity-50 hov-opacity-100 text-reset" href="/">
                                 @lang('Formalités administratives sans tracas')
                             </a>
                         </li>
                         <li class="mb-2">
                             <a class="opacity-50 hov-opacity-100 text-reset" href="/">
                                 @lang('Transactions de paiement sécurisées')
                             </a>
                         </li>
                     </ul>
                 </div>
                 <!-- <div class="text-center text-md-left mt-4 d-none d-lg-block d-md-block">
                     <a href="{{ route('register')}}" class="text-white">
                         <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                             @lang("Devenir un partenaire")
                         </h4>
                     </a>
                 </div> -->
             </div>
             <div class="col-lg-3 col-6 ml-auto col-md-4 mr-0">
                 <div class="text-left mt-4">
                     <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                         @lang("Contact")
                     </h4>
                     <ul class="list-unstyled">
                         <li class="mb-2">
                             <span class="d-block opacity-30">@lang("Adresse")</span>
                             <span class="d-block opacity-70"> {{ Session('config')->adresse ?? 'Goma, Centre ville'}}</span>
                         </li>
                         <li class="mb-2">
                             <span class="d-block opacity-30">@lang("Telephone")</span>
                             <span class="d-block opacity-70">{{ Session('config')->numeropv ?? '+243970912428'}}</span>
                         </li>
                         <li class="mb-2">
                             <span class="d-block opacity-30">@lang('Email:')</span>
                             <span class="d-block opacity-70">
                                 <a href="mailto:{{ Session('config')->email ?? 'genesiskikimba@gmail.com'}}" class="text-white">{{ Session('config')->email ?? 'genesiskikimba@gmail.com'}}</a>
                             </span>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="col-lg-2 col-4 col-md-4">
                 <div class="text-left mt-4">
                     <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                         @lang('Liens rapides')
                     </h4>
                     <ul class="list-unstyled">
                         <li class="mb-2">
                             <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                 @lang('Aides')
                             </a>
                         </li>
                         <li class="mb-2">
                             <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                 @lang("Support")
                             </a>
                         </li>
                         <li class="mb-2">
                             <a href="{{ route('home.contact')}}" class="opacity-50 hov-opacity-100 text-reset">
                                 @lang("Joignez-nous")
                             </a>
                         </li>
                         <li class="mb-2">
                             <a href="{{ route('home.contact')}}" class="opacity-50 hov-opacity-100 text-reset">
                                 @lang("Contactez-nous")
                             </a>
                         </li>
                         <li class="mb-2">
                             <a href="#" class="opacity-50 hov-opacity-100 text-reset">
                                 @lang("Nos partenaires")
                             </a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- FOOTER -->
 <footer class="pt-md-3 pt-2 pb-md-7 pb-xl-0 bg-black text-light">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-4">
                 <div class="text-center text-md-left opacity-40" current-verison="1.2">
                     © @php
                     echo Date('Y')
                     @endphp <a href="{{ route('login')}}" class="text-white">{{ Config('app.name')}}</a>| @lang("Limited. All Rights Reserved.") <br>
                     @lang("propulse par") <a href="http://subnetcongo.com" target="_blank" rel="noopener noreferrer" class="text-white">
                         subnetCongo
                     </a>
                 </div>
             </div>
             <div class="col-lg-4">
                 <ul class="list-inline my-md-3 my-md-0 social text-center">
                     <li class="list-inline-item">
                         <a href="{{ Session('config')->facebook  ?? ''}}" target="_blank" class="facebook soc text-reset d-inline-block opacity-60 py-2"><i class="soc lab la-facebook text-white la-lg opacity-50"></i></a>
                     </li>
                     <li class="list-inline-item">
                         <a href="{{ Session('config')->twitter ?? '' }}" target="_blank" class="twitter soc text-reset d-inline-block opacity-60 py-2"><i class="lab la-twitter text-white la-lg opacity-50"></i></a>
                     </li>
                     <li class="list-inline-item">
                         <a href="{{ Session('config')->instragrame ?? '' }}" target="_blank" class="instagram soc text-reset d-inline-block opacity-60 py-2"><i class="lab la-instagram text-white la-lg opacity-50"></i></a>
                     </li>
                     <li class="list-inline-item">
                         <a href="{{ Session('config')->youtube ?? ''}}" target="_blank" class="youtube soc text-reset d-inline-block opacity-60 py-2"><i class="lab la-youtube text-white la-lg opacity-50"></i></a>
                     </li>
                     <li class="list-inline-item">
                         <a href="{{ Session('config')->lindin ?? ''}}" target="_blank" class="linkedin soc text-reset d-inline-block opacity-60 py-2"><i class="lab la-linkedin-in text-white la-lg opacity-50"></i></a>
                     </li>
                     <li class="list-inline-item">
                         <a href="{{ Session('config')->lindin ?? ''}}" target="_blank" class="whatsapp soc text-reset d-inline-block opacity-60 py-2"><i class="lab la-whatsapp text-white la-lg opacity-60"></i></a>
                     </li>
                 </ul>
             </div>
             <div class="col-lg-4">
                 <div class="text-center text-md-right">
                     <ul class="list-inline mb-0">
                         <a href="" class="text-white">
                             <span class="text-center text-md-left opacity-40">
                                 @lang("Terms & Condition | Cookie Policy")
                             </span>
                         </a>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </footer>
