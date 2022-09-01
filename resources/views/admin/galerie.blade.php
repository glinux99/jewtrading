@extends('layouts.admin')
@section('content')
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">
        <div class="aiz-titlebar text-left mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h3">@lang("Configuration des images de la galerie")</h1>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="" class="btn btn-circle btn-danger" data-toggle="modal" data-target="#imageGalerie">
                        <span>@lang("Ajouter des images dans la galerie")</span>
                    </a>
                </div>
            </div>
        </div>
        @if ($galeries->count() ?? '')
        <div class="card">
            <div class="card-header">
                <span class="mb-0 fs-15">@lang("Les images de notre galerie")</span>
            </div>
            <div class="card-body">
                <div class="row" data-items="6" data-xl-items="4" data-lg-items="3" data-md-items="3" data-sm-items="2" data-arrows='true'>
                    @foreach ($galeries as $galerie)
                    <div class="col-md-3 carousel-box">
                        <div class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="#" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px" src="#" data-src="{{ asset('storage/'.$galerie->images)}}" alt="" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon mt-2">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-title="@lang('Modifier')" data-placement="left" data-id="">
                                        <i class="las la-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#delete-modal" data-href="{{ route('admin.galerie.delete',[$galerie->id])}}" data-title="@lang('supprimer')" data-placement="left" class="confirm-alert">
                                        <i class="las la-trash"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-danger">{{ $galerie->galerie }}</span>
                                </div>
                                <h3 class=" fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="#" class="d-block text-reset">{{ $galerie->description}}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @else
        <div class="card">
            <div class="card-header">
                <span class="mb-0 fs-15">@lang("Les images de notre galerie")</span>
            </div>
            <div class="card-body">
                <p class="text-center">@lang("Aucune image pour l'instant")</p>
            </div>
        </div>
        @endif

    </div>
</div><!-- .aiz-main-content -->
<div id="delete-modal" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">@lang("Confirmation de suppression")</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1">@lang("Voulez-vous vraiment supprimer cette image?")</p>
                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                <a href="" class="btn btn-primary mt-2 comfirm-link" id="supp" data-id="">@lang("Supprimer")</a>
            </div>
        </div>
    </div>
</div>
@endsection
