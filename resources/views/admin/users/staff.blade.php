@extends('layouts.admin')
@section('content')
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">

        <div class="aiz-titlebar text-left mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h3">@lang("Staff Configuration")</h1>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="{{ route('admin.staff.create')}}" class="btn btn-circle btn-danger">
                        <span>@lang("Ajouter un Agent")</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header row gutters-5">
                <div class="col text-center text-md-left">
                    <h5 class="mb-md-0 h6">@lang("Agent actuel")</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="row gutters-5">
                    @if (count($users))
                    @foreach ($users as $user)

                    <div class="col-auto w-140px w-lg-250px">
                        <div class="aiz-file-box">
                            <div class="dropdown-file">
                                <a class="dropdown-link" data-toggle="dropdown">
                                    <i class="la la-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <form action="{{ route('admin.staff.edit', [$user->user_id])}}" method="post" class="modifier-agent">
                                        @csrf
                                        <input type="text" name="" id="id-agent" value="{{ $user->user_id}}" hidden>
                                        <button type="submit" class="dropdown-item confirm-alert">
                                            <i class="las la-edit mr-2"></i>
                                            <span>@lang('Modifier')</span>
                                        </button>
                                    </form>
                                    <a href="javascript:void(0)" class="dropdown-item" onclick="copyUrl(this)" data-url="link">
                                        <i class="las la-clipboard mr-2"></i>
                                        <span>@lang('Copier le lien')</span>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item confirm-alert" data-href="{{ route('admin.staff.delete', [$user->user_id])}}" data-target="#delete-modal">
                                        <i class="las la-trash mr-2"></i>
                                        <span>@lang('Supprimer ce membre')</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card card-file aiz-uploader-select c-default" title="">
                                <div class="card-file-thumb">
                                    <img src="{{ asset('storage/'.$user->images)}}" class="w-100" onerror="this.onerror=null;this.src='assets/img/default.png';">
                                </div>
                                <div class="card-body ">
                                    <h6 class="d-flex">
                                        <span class="text-truncate title">{{ $user->name}} - admin</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="card-body">
                        <p class="text-center">@lang("Aucune donnee")</p>
                    </div>
                    @endif
                </div>
                <div class="aiz-pagination mt-3">
                    <nav>
                        {{ $users->links()}}
                    </nav>

                </div>
            </div>
        </div>
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
<div id="info-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-right">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h6">File Info</h5>
                <button type="button" class="close" data-dismiss="modal">
                </button>
            </div>
            <div class="modal-body c-scrollbar-light position-relative" id="info-modal-content">
                <div class="c-preloader text-center absolute-center">
                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<button id="btnOpen" data-toggle="modal" data-target="#modif-modal" hidden></button>
@endsection
