@extends('layouts.admin')
@section('content')
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">

        <div class="aiz-titlebar text-left mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h3">@lang("Configuration Services")</h1>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="" class="btn btn-circle btn-info" data-toggle="modal" data-target="#serviceAddModal">
                        <span>@lang("Ajouter un service")</span>
                    </a>
                </div>
            </div>
        </div>

        <section class="mb-4">
            <div class="mx-3 containerd">
                <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
                    <div class="d-flex mb-3 align-items-baseline border-bottom">
                        <h3 class="h5 fw-700 mb-0">
                            <span class="border-bottom border-danger border-width-2 pb-3 d-inline-block">@lang("Services")</span>
                        </h3>
                    </div>
                    <div>
                        <button id="catModal" data-toggle="modal" data-target="#categorie-modif-modal" hidden></button>
                        <button id="infosCat" data-toggle="modal" data-target="#categorie-info-modal" hidden></button>
                        <div class="row" data-items="6">
                            @foreach ($services as $service)
                            <div class="col-md-4 ">
                                <div class="carousel-box">
                                    <div class="aiz-card-box h-md-250px border @if ($categorie->visible ?? '1') border-light @else border-success  @endif rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                        <div class="p-md-3 p-2 text-left">
                                            <h3 class="fw-600 fs-13 text-truncate-2 mb-0 text-center">
                                                <a href="#" class="d-block text-reset">{{ $service->titreFr}}</a>
                                            </h3>
                                        </div>
                                        <div class="position-relative">
                                            <a href="#" class="d-block text-justify p-2 ">
                                                {{ $service->descriptionFr}}
                                            </a>

                                            <div class="absolute-top-right aiz-p-hov-icon">
                                                <a href="javascript:void(0)" data-toggle="tooltip" data-title="@lang('Modifier')" data-placement="left" class="modifproduit" data-id="{{ $service->id}}">
                                                    <i class="las la-edit"></i>
                                                </a>
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#delete-modal" data-href="{{ route('service.delete', [$service->id])}}" data-title="@lang('supprimer')" data-placement="left" class="confirm-alert">
                                                    <i class="las la-trash"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                <p class="mt-1">@lang("Voulez-vous vraiment supprimer ce membre?")</p>
                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                <a href="" class="btn btn-primary mt-2 comfirm-link" id="supp" data-id="">@lang("Supprimer")</a>
            </div>
        </div>
    </div>
</div>
@endsection
