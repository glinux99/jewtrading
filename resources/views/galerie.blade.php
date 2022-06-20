@extends('layouts.layoutHF')
@section('title') {{ __("Notre galerie avec Jew Trading")}} @endsection
@section('body')
@include('layouts.menuP')
<div class="galerie text-white pt-md-5 galerie-image" style="background: url({{asset('assets/imgs/bg1.jpg')}});">
    <h2 class="text-center fw-bolder py-md-3 display-6">
        {{__("Notre Galerie Photo")}}
    </h2>
    <div class="text-white col-md-6 mx-auto text-center mb-md-3">
        {{__("Autour d'une galerie photographique en ligne, vous avez une vue générale de Jews trading votre plus
        grand partenaire dans le domaine d'automobile.")}}
    </div>
    <div class="col-md-6 mx-auto d-flex my-1 justify-content-center">
        <ul class="nav nav-pills mb-3 galA" id="pills-tab" role="tablist">
            @if (count($galerieShowAll)>=1)
            <li class="nav-item" role="presentation">
                <button class="nav-link active btn-jew" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">{{__("TOUT VOIR")}}</button>
            </li>
            @endif
            @if (count($equipes)>=1)
            <li class="nav-item" role="presentation">
                <button class="nav-link btn-jew" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">{{__("EQUIPE")}}</button>
            </li>
            @endif
            @if (count($showClients)>=1)
            <li class="nav-item" role="presentation">
                <button class="nav-link btn-jew" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">{{__("CLIENTS")}}</button>
            </li>
            @endif
            @if (count($produits)>=1)
            <li class="nav-item" role="presentation">
                <button class="nav-link btn-jew" id="pills-produit-tab" data-bs-toggle="pill" data-bs-target="#pills-produit" type="button" role="tab" aria-controls="pills-produit" aria-selected="false">{{__("PRODUITS")}}</button>
            </li>
            @endif
            @if (count($autres)>=1)
            <li class="nav-item" role="presentation">
                <button class="nav-link btn-jew" id="pills-other-tab" data-bs-toggle="pill" data-bs-target="#pills-other" type="button" role="tab" aria-controls="pills-other" aria-selected="false">{{__("AUTRES")}}</button>
            </li>
            @endif
        </ul>
    </div>
    <div class="col-md-10 mx-auto pb-4">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    @for ($x=0; $x<count($galerieShowAll);$x++) <div class="col-md-4 my-2">
                        <img src="{{asset($galerieShowAll[$x])}}" alt="{{asset($galerieShowAll[$x])}}" class="img-fluid h-100">
                </div>
                @endfor
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row">
                @for ($x=0; $x<count($equipes);$x++) <div class="col-md-4">
                    <img src="{{asset($equipes[$x])}}" alt="{{asset($equipes[$x])}}" class="img-fluid h-100">
            </div>
            @endfor
        </div>
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="row">
            @for ($x=0; $x<count($showClients);$x++) <div class="col-md-4">
                <img src="{{asset($showClients[$x])}}" alt="{{asset($galerieShowAll[$x])}}" class="img-fluid h-100">
        </div>
        @endfor
    </div>
</div>
<div class="tab-pane fade" id="pills-produit" role="tabpanel" aria-labelledby="pills-produit-tab">
    <div class="row">
        @for ($x=0; $x<count($produits);$x++) <div class="col-md-4">
            <img src="{{asset($produits[$x])}}" alt="{{asset($produits[$x])}}" class="img-fluid h-100">
    </div>
    @endfor
</div>
</div>
<div class="tab-pane fade" id="pills-other" role="tabpanel" aria-labelledby="pills-other-tab">
    <div class="row">
        @for ($x=0; $x<count($autres);$x++) <div class="col-md-4">
            <img src="{{asset($autres[$x])}}" alt="{{asset($galerieShowAll[$x])}}" class="img-fluid h-100">
    </div>
    @endfor
</div>
</div>
</div>
</div>
</div>
@endsection
