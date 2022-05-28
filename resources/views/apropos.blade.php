@extends('layouts.layoutHF')
@section('title') {{ __("Notre galerie avec Jew Trading")}} @endsection
@section('body')
@include('layouts.menuP')
<div class="position-relative">
    <div class="position-absolute" style="z-index: 1000; bottom: 50%;">
        <h1 class="fw-bold text-white mx-5">{{__("Apropos")}}</h1>
    </div>
    <div class="d-flex align-items-center aproposBg">
    </div>
</div>
<div class="container-fluid">
    <div class="col-md-11 mx-auto my-md-5">
        <div class="w-100 row">
            <div class="col-md-6">
                <h3 class="text-uppercase fw-bolder">Bienvenu chez <span class="text-danger">Jews Trading</span></h3>
                <h6 class="mb-3">{{__("Apropos")}}</h6>
                <p class="text-muted text-justify">
                    {{__("Nous sommes JEWS TRADING l'entreprise d'importation des vehicules oueuvrant à l'Est de la République Démocratique du Congo dans la province du Nord-Kivu dans la ville de Goma, dans le domaine d'import et allocation des véhicules au public.")}}
                </p>
            </div>
            <div class="col-md-6 card border-0">
                <img src="{{asset('assets/imgs/aproposcard.png')}}" alt="" class="card-img-top">
            </div>
        </div>
    </div>
    <div class="col-md-11 mx-auto my-md-5">
        <div class="w-100 row">
            <div class="col-md-6 card border-0">
                <img src="{{asset('assets/imgs/aproposcard2.png')}}" alt="" class="card-img-top">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bolder">Pourquoi choisir jews traiding?</h3>
                <p class="text-muted text-justify">
                    {{__("L'automobile est un moyen de transport privé parmi les plus répandus. Sa capacité est généralement de deux à cinq personnes,mais peut varier de une à neuf places. L'usage limite l'emploi du terme automobile aux véhicules possédant quatre roues, ou plus rarement trois ou six roues,de dimensions inférieures à celle des autobus et des camions, mais englobe parfois les camionnettes.Bien qu'étant des « véhicules automobiles. » nous somme jews trading, l'entreprise d'importation de vos véhicules de rêve avec comme mission Faciliter l'intermédiaire entre les acheteurs de véhicules et les entreprises de fabrication Aider les acheteurs de passer commande au site officiel d'achat des véhicules de leurs choix Faciliter l'importation des véhicules de la maison de fabrication jusqu'à la destination du client en toute sécurité Allocation des véhicules au public pour tel ou tel autre évènement. Bref Jews Trading a pour mission d'importer les véhicules à ses clients en leurs garantissant la sécurité.. Nos services sont (ont): ")}}
                </p>
                <p>
                <ul class="list-unstyled">
                    <li><span class="bi-check-circle-fill mx-1"></span> Rapide et facile</li>
                    <li><span class="bi-check-circle-fill mx-1"></span>Une inspection Transparente</li>
                    <li><span class="bi-check-circle-fill mx-1"></span>Offert immédiatement</li>
                    <li><span class="bi-check-circle-fill mx-1"></span>Formalités administratives sans tracas</li>
                    <li><span class="bi-check-circle-fill mx-1"></span>Transactions de paiement sécurisées</li>
                </ul>
                </p>
            </div>
        </div>
        <div class="equipe my-5">
            <h2 class="fw-bolder text-uppercase">{{__("Notre equipe")}}</h2>
            <div>
                @php
                $y=0;
                $z=4;
                $galeries = ['assets/imgs/equipe1.jpg','assets/imgs/equipe2.jpg','assets/imgs/equipe3.jpg',
                'assets/imgs/equipe4.jpg','assets/imgs/equipe5.jpg','assets/imgs/equipe6.jpg','assets/imgs/equipe7.jpg',];
                @endphp
                <div class="d-flex">
                    <div class="col-md-3 m-2 card position-relative h-75 border-0">
                        <img src="{{asset('assets/imgs/equipe1.jpg')}}" alt="equipe image" class="img-fluid ">
                        <div class="my-3">
                            <h6 class="text-center fw-bold">KASEREKA KWIRATUWE</h6>
                            <h6 class="text-center">General manager</h6>
                        </div>
                    </div>
                    <div class="col-md-3 m-2 card position-relative h-75 border-0">
                        <img src="{{asset('assets/imgs/equipe2.jpg')}}" alt="equipe image" class="img-fluid">
                        <div class="my-3">
                            <h6 class="text-center fw-bold">KAMBALE MATESO</h6>
                            <h6 class="text-center">Chief Logisticianr</h6>
                        </div>
                    </div>
                    <div class="col-md-3 m-2 card position-relative h-75 border-0">
                        <img src="{{asset('assets/imgs/equipe3.jpg')}}" alt="equipe image" class="img-fluid">
                        <div class="my-3">
                            <h6 class="text-center fw-bold">NADIA NYAVINGI</h6>
                            <h6 class="text-center">Accounting cashier</h6>
                        </div>
                    </div>
                    <div class="col-md-3 m-2 card position-relative h-75 border-0">
                        <img src="{{asset('assets/imgs/equipe4.jpg')}}" alt="equipe image" class="img-fluid">
                        <div class="my-3">
                            <h6 class="text-center fw-bold">KAKULE MBAHINGANA J.P</h6>
                            <h6 class="text-center">Sales Manager</h6>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-md-3 m-2 card position-relative h-75 border-0">
                        <img src="{{asset('assets/imgs/equipe5.jpg')}}" alt="equipe image" class="img-fluid">
                        <div class="my-3">
                            <h6 class="text-center fw-bold">KAKULE MUSAVULI Aigé</h6>
                            <h6 class="text-center">Driver</h6>
                        </div>
                    </div>
                    <div class="col-md-3 m-2 card position-relative h-75 border-0">
                        <img src="{{asset('assets/imgs/equipe6.jpg')}}" alt="equipe image" class="img-fluid">
                        <div class="my-3">
                            <h6 class="text-center fw-bold">KASEREKA MWENGE Julien</h6>
                            <h6 class="text-center">Driver</h6>
                        </div>
                    </div>
                    <div class="col-md-3 m-2 card position-relative h-75 border-0">
                        <img src="{{asset('assets/imgs/equipe7.jpg')}}" alt="equipe image" class="img-fluid">
                        <div class="my-3">
                            <h6 class="text-center fw-bold">NZANZU EXEMPLE</h6>
                            <h6 class="text-center">Driver</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.beforword')
@endsection
