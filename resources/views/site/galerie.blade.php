@extends('layouts.page')
@section('titre')
@lang("Gallerie")
@endsection
@section('contenu')
<section class="py-4">
    <h1 class="text-center fs-30 fw-700">
        @lang('Notre Galerie Photo')
    </h1>
    <p class="text-center col-md-6 mx-auto">
        @lang("Autour d'une galerie photographique en ligne, vous avez une vue générale de Jews trading votre plus grand partenaire dans le domaine d'automobile.")
    </p>
    <div class="col-md-6 mx-auto d-flex my-1 justify-content-center">
        <ul class="nav nav-pills mb-3 galA" id="pills-tab" role="tablist">
            @if (1)
            <li class="nav-item" role="presentation">
                <button class="nav-link active btn-jew" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">{{__("TOUT VOIR")}}</button>
            </li>
            @endif
            @if (1)
            <li class="nav-item" role="presentation">
                <button class="nav-link btn-jew" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">{{__("EQUIPE")}}</button>
            </li>
            @endif
            @if (1)
            <li class="nav-item" role="presentation">
                <button class="nav-link btn-jew" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">{{__("CLIENTS")}}</button>
            </li>
            @endif
            @if (1)
            <li class="nav-item" role="presentation">
                <button class="nav-link btn-jew" id="pills-produit-tab" data-bs-toggle="pill" data-bs-target="#pills-produit" type="button" role="tab" aria-controls="pills-produit" aria-selected="false">{{__("PRODUITS")}}</button>
            </li>
            @endif
            @if (1)
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
                    @foreach ($galeries as $image)
                    <div class="col-md-4 col-lg-4 d-flex justify-content-center  my-2 position-relative img-gal d-flex justify-content-center" data-responsive="{{asset('asset/'.$image->images)}}" data-src="{{asset('asset/'.$image->images)}}" data-sub-html="<h4>Jew trading Cars</h4><p>ppp</p>">
                        <div class="ratio ratio-16x9">
                            <img src="{{asset('storage/'.$image->images)}}" class="card-img-top  " loading="lazy" alt="...">
                        </div>
                        <!-- <img class="img-fluid h-100 w-100 rounded img-thumbnail" src="{{asset('storage/'.$image->images)}}" alt="ddd"> -->
                        <div class="position-absolute btn-seach"><span class="bi-search bi--4xl"></span></div>
                        <div class="position-absolute bottom-0 mb-2 footer-gal py-1 px-4 bg-danger mx-2">jews trading</div>
                    </div>
                    @endforeach
                </div>
                <div class="d-flex">
                    <div class="mx-auto mt-3">
                        @if ($galeries)
                        {{$galeries->links()}}
                        @endif
                    </div>
                </div>
            </div>
            <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row lightgallery w-100 mx-auto">
                    @foreach ($staff as $image)
                    <div class="col-md-4 col-lg-4 d-flex justify-content-center  my-2 position-relative img-gal d-flex justify-content-center" data-responsive="{{asset('asset/'.$image->images)}}" data-src="{{asset('asset/'.$image->images)}}" data-sub-html="<h4>Jew trading Cars</h4><p>ppp</p>">
                        <img class="img-fluid h-100 rounded img-thumbnail" src="{{asset('storage/'.$image->images)}}" alt="ddd">
                        <div class="position-absolute btn-seach"><span class="bi-search bi--4xl"></span></div>
                        <div class="position-absolute bottom-0 mb-2 footer-gal py-1 px-4 bg-danger mx-2">jews trading</div>
                    </div>
                    @endforeach
                </div>
                <div class="d-flex">
                    <div class="mx-auto mt-3">
                        @if ($galeries)
                        {{$galeries->links()}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
