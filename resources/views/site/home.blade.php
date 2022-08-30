@extends('layouts.pages')
@section('contenu')
<div class="bg-danger indexI ">
    <div class="cool" style="background-image: url('/assets/img/carIndex.png'),url('/assets/img/bgIndex.png'); background-repeat: no-repeat,no-repeat; background-position: center,center;
    background-size: 50% 70%, cover;
        min-height: 100vh; ">
        @include('layouts.navbarHome')
        <div class="container row">
            <div class="col-md-6 ms-md-4">
                <h1 class="fw-bolder jewsIndex">
                    <span class="fw-bold display-1 title">
                        Jews
                    </span>
                </h1>
                <h2 class="fw-bold tradingIndex">
                    Trading
                </h2>
                <div class="col-6">
                    <ul class="list-unstyled">
                        <li class="mt-2">
                            <h6 class="text-uppercase fw-bold">
                                <span clss="bi-apeople-fill"></span>
                                {{__("top paterners")}}
                            </h6>
                            <p class="text-danger fs-15 fw-600">
                                {{$jewtrading->partenaires?? 'Be Forward, SBT'}}
                            </p>
                        </li>
                        <li class="mt-4">
                            <h6 class="text-uppercase fw-bold">
                                <span class="bi-geo-fill"></span>
                                {{__("Bureau")}}
                            </h6>
                            <p class="text-danger fs-15 fw-600">
                                {{ $jewtrading->adresse ?? 'Com.De Goma,Q. Les volcans, Av. du Touriste, N-2'}}
                            </p>
                        </li>
                        <li class="mt-4">
                            <h6 class="text-uppercase fw-bold">
                                <span class="bi-telephone-inbound"></span>
                                {{__("contact")}}
                            </h6>
                            <p class="text-danger h5 fw-bolder">
                                <a href="mailto:{{ $jewtrading->emailEntreprise?? '' }}" class="text-danger m-0 p-0">{{ $jewtrading->emailEntreprise ?? '' }}</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="corp ">
        <div class="galerie bg-white mt-md-5 pt-md-5">
            <h2 class="text-center fw-bolder py-md-3 display-6">
                {{__("Notre Galerie Photo")}}
            </h2>
            <div class="text-muted col-md-6 mx-auto text-center mb-md-3 fs-17">
                {{__("Autour d'une galerie photographique en ligne, vous avez une vue générale de Jews trading votre plus
                grand partenaire dans le domaine d'automobile.")}}
            </div>
            <style>
                .indexIm {
                    min-height: 50vh;
                    max-height: 50vh;
                }
            </style>
            <div class="swiffy-slider slider-item-show3 slider-item-reveal slider-item-nogap slider-nav-outside slider-nav-round slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-page slider-item-snapstart slider-nav-autoplay slider-nav-autopause slider-nav-animation slider-nav-animation-fadein" data-slider-nav-autoplay-interval="3000">
                <ul class="slider-container">
                    @foreach ($galeries as $image)
                    <li><img src="{{asset('storage/'.$image->images)}}" style="max-width: 100%;height: 80%;"></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mx-auto mb-md-4">
        <div class="row pt-md-5">
            <div class="col-md-6">
                <img src="{{asset('assets/img/img2.jpg')}}" alt="" srcset="" class="d-inline-block w-100">
            </div>
            <div class="col-md-6">
                <h2 class="text-center fw-bolder py-md-3 display-6">
                    {{__("Nous sommes les meilleurs")}}
                </h2>
                <ul class="list-unstyled">
                    <li class="border-bottom border-2 p-2">
                        <span class="bi-check-circle-fill bi--xl"></span><span class="ps-md-3 fs-15">
                            {{__("Rapide et facile")}}</span>
                    </li>
                    <li class="border-bottom border-2 p-2">
                        <span class="bi-check-circle-fill bi--xl"></span><span class="ps-md-3 fs-15">
                            {{__("Une inspection Transparente")}}</span>
                    </li>
                    <li class="border-bottom border-2 p-2">
                        <span class="bi-check-circle-fill bi--xl"></span><span class="ps-md-3 fs-15">
                            {{__("Offert immédiatement")}}</span>
                    </li>
                    <li class="border-bottom border-2 p-2">
                        <span class="bi-check-circle-fill bi--xl"></span><span class="ps-md-3 fs-15">
                            {{__("Formalités administratives sans tracas")}}</span>
                    </li>
                    <li class="border-bottom border-2 p-2">
                        <span class="bi-check-circle-fill bi--xl"></span><span class="ps-md-3 fs-15">
                            {{__("Transactions de paiement sécurisées")}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="bg-danger py-md-5 ">
        <h2 class="display-5 text-center text-white">
            {{__("Ce que disent le peuple")}}
        </h2>
        <div class="swiffy-slider slider-item-show2 slider-item-reveal slider-nav-outside slider-nav-round slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein">
            <ul class="slider-container py-4">
                @php
                $comments =array(
                1=>[
                'image'=>'assets/img/pic1.jpg',
                'name'=>'Kalema Daniel Jonathan',
                'poste'=>'Goma, Nord-Kivu',
                'comment'=>'Si vous n’êtes pas un spécialiste dans l’importation des véhicules, le mieux c’est
                de
                vous renseigner chez jews Trading
                car ils ont les moyens de passer et traiter avec des agences fiables et spécialisées
                pour vous satisfaire.'],
                2=>[
                'image'=>'assets/img/pic2.jpg',
                'name'=>'Ir Tonny Kayayalo',
                'poste'=>'Subnet Congo',
                'comment'=>"J'ai fait confiance à l'expertise de Jews Trading pour me ramener mon véhicule de
                rêve et je peux confirmer cette
                expertise car j'ai été bien servis, ils sont meilleurs."],
                3=>[
                'image'=>'assets/img/pic3.jpg',
                'name'=>'Gracieux Sikuly',
                'poste'=>'Goma, Nord-Kivu',
                'comment'=>"Les meilleurs services d’importation des automobiles viennent de jews trading !
                L’expérience montre que proposer une
                action de qualité dans le temps s’apprécie car peu de personnes ont cette expertise
                en RDC."]);
                @endphp
                @foreach ($comments as $comment)
                <li class="">
                    <div class="card shadow">
                        <img src="{{asset($comment['image'])}}" alt="image one" class="d-inline-block rounded-circle mx-auto shadow mt-2" height="100" width="100">
                        <div class="card-body p-3 p-xl-5">
                            <h3 class="card-title h5 fw-700">{{ $comment['name']}}, <small>{{ $comment['poste']}}</small></h3>
                            <p class="card-text text-justify">
                                {{$comment['comment']}}
                            </p>
                            <!-- <div class="d-flex justify-content-center"><a href="#" class="btn btn-primary">@lang("Commentez aussi")</a>
                            </div> -->
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>

            <button type="button" class="slider-nav" aria-label="Go left"></button>
            <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>
        </div>
    </div>
</section>
<section>
    <div class=" swiffy-slider slider-item-show6 slider-nav-outside slider-nav-white slider-nav-sm slider-nav-visible slider-nav-page slider-item-snapstart slider-nav-autoplay slider-nav-autopause slider-item-ratio-contain bg-white shadow-lg py-3 py-lg-4" data-slider-nav-autoplay-interval="4000">
        <ul class="slider-container">
            @php
            $images =['assets/img/beforward.png','assets/img/sbt.jpg','assets/img/beforward.png','assets/img/sbt.jpg','assets/img/beforward.png','assets/img/sbt.jpg','assets/img/beforward.png','assets/img/sbt.jpg'];
            @endphp
            @foreach ($images as $image)
            <li><img src="{{asset($image)}}" style="max-width: 100%;" alt="Second slide" class="d-inline-block" height="40"></li>
            @endforeach
        </ul>
    </div>
</section>
@endsection
