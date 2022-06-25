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
                <div class="row lightgallery w-100 mx-auto">
                    @foreach ($galerieShowAll as $index=>$galerieAll)<div class="col-md-4 col-lg-4 d-flex justify-content-center  my-2 position-relative img-gal d-flex justify-content-center" data-responsive="{{asset($galerieAll)}}" data-src="{{asset($galerieAll)}}" data-sub-html="<h4>Jew trading Cars</h4><p>{{$galerieShowAllC[$index]}}</p>">
                        <img class="img-fluid h-100 rounded img-thumbnail" src="{{asset($galerieAll)}}">
                        <div class="position-absolute btn-seach"><span class="bi-search bi--4xl"></span></div>
                        @if($galerieShowAllC[$index])
                        <div class="position-absolute bottom-0 footer-gal py-1 px-4 bg-danger mx-2">{{$galerieShowAllC[$index]}}</div>
                        @endif
                    </div>
                    @endforeach
                </div>
                <div class="d-flex">
                    <div class="mx-auto mt-3">
                        @if ($galerieShowAll)
                        {{$galerieShowAll->links()}}
                        @endif
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row lightgallery">
                    @foreach ($equipes as $index=>$equipe) <div class="col-md-4 my-2 img-gal position-relative d-flex justify-content-center" data-responsive="{{asset($equipe)}}" data-src="{{asset($equipe)}}" data-sub-html="<h4>{{ __('Jew trading cars')}}</h4>
                        <p>{{$equipesC[$index]}}</p>">
                        <img src="{{asset($equipe)}}" alt="{{asset($equipe)}}" class="img-fluid h-100 rounded img-thumbnail">
                        <div class="position-absolute btn-seach"><span class="bi-search bi--4xl"></span></div>
                        @if($equipesC[$index])
                        <div class="position-absolute bottom-0 footer-gal px-3 py-1 bg-danger mx-3 ms-1">{{$equipesC[$index]}} </div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row lightgallery">
                    @for ($x=0; $x<count($showClients);$x++) <div class="col-md-4 my-2 img-gal position-relative d-flex justify-content-center " data-responsive="{{asset($showClients[$x])}}" data-src="{{asset($showClients[$x])}}" data-sub-html="<h4>{{__('Notre galerie d\'images pour nos clients')}}</h4><p>{{$showClientsC[$x]}}</p>">
                        <img src="{{asset($showClients[$x])}}" alt="image client" class="img-fluid h-100 rounded img-thumbnail">
                        <div class="position-absolute btn-seach"><span class="bi-search bi--4xl"></span></div>
                        @if($showClientsC[$x])
                        <div class="position-absolute bottom-0 footer-gal py-1 px-4 bg-danger mx-2">{{$showClientsC[$x]}}</div>
                        @endif
                </div>
                @endfor
            </div>
        </div>
        <div class="tab-pane fade" id="pills-produit" role="tabpanel" aria-labelledby="pills-produit-tab">
            <div class="row lightgallery">
                @foreach ($produits as $index=>$galerieAll)<div class="col-md-4 col-lg-4 d-flex justify-content-center  my-2 position-relative img-gal d-flex justify-content-center" data-responsive="{{asset($galerieAll)}}" data-src="{{asset($galerieAll)}}" data-sub-html="<h4>Jew trading Cars</h4><p>{{$produitsC[$index]}} <p>
                    @php
                        $link =substr($galerieAll, 25);
                    @endphp
                <a class='btn btn-dark' href='/commentaires/{{$link}}' >{{__('Commentaires')}}</a></p></p>">

                    <img class="img-fluid h-100 rounded img-thumbnail" src="{{asset($galerieAll)}}">
                    <div class="position-absolute btn-seach"><span class="bi-search bi--4xl"></span></div>
                    @if($produitsC[$index])
                    <div class="position-absolute bottom-0 footer-gal py-1 px-4 bg-danger mx-2">{{$produitsC[$index]}}</div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="pills-other" role="tabpanel" aria-labelledby="pills-other-tab">
            <div class="row lightgallery">
                @for ($x=0; $x<count($autres);$x++) <div class="col-md-4 my-2 img-gal position-relative d-flex justify-content-center" data-responsive="{{asset($autres[$x])}}" data-src="{{asset($autres[$x])}}" data-sub-html="<h4>{{__('Autres images de Jew trading')}}</h4><p>{{$autres[$x]}}</p>">
                    <img src="{{asset($autres[$x])}}" alt="{{asset($galerieShowAll[$x])}}" class="img-fluid h-100 rounded img-thumbnail">
                    <div class="position-absolute btn-seach"><span class="bi-search bi--4xl"></span></div>
                    @if($autresC[$x])
                    <div class="position-absolute bottom-0 footer-gal py-1 px-4 bg-danger mx-2">{{$autresC[$x]}}</div>
                    @endif
            </div>
            @endfor
        </div>
    </div>
</div>
</div>
</div>
@endsection
