@extends('layouts.admin')
@section('content')
<div class="aiz-main-content">
    <form action="{{ route('admin.staff.store')}}" method="post" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <div class="px-15px px-lg-25px">

            <div class="aiz-titlebar text-left mt-2 mb-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="h3">@lang("Configuration d'un nouvel agent")</h1>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <a href="{{ route('admin.staff.index')}}" class="btn btn-circle btn-danger">
                            <span>@lang("Tous les agents")</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header row gutters-5">
                            <div class="col text-center text-md-left">
                                <h5 class="mb-md-0 h6">@lang("Information sur l'agent")</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">@lang('Nom')</label>
                                        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="@lang('Nom de l\'agent')">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">@lang('Adresse E-mail')</label>
                                        <input type="text" class="form-control" name="email" id="" autocomplete="new-password" aria-describedby="helpId" placeholder="@lang('adresse email de l\'agent')">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">@lang('Mot de passe')</label>
                                        <input type="text" class="form-control" name="password" id="" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">@lang('Numero Tel')</label>
                                        <input type="numero" class="form-control" name="numero" id="" aria-describedby="helpId">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">@lang('Image')</label>
                                        <input type="file" class="form-control" name="images[]" id="" aria-describedby="helpId" multiple>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">@lang('Dossiers')</label>
                                        <input type="file" class="form-control" name="docs" id="" aria-describedby="helpId" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>@lang("A propos de l'agent")</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header row gutters-5">
                            <div class="col text-center text-md-left">
                                <h5 class="mb-md-0 h6">@lang("Information supplementaire")</h5>
                            </div>
                        </div>
                        <div class="card-body row">
                            <div class="col-md-12 col-lg-12 col-6">
                                <div class="form-group">
                                    <label class="form-check-label" for="admin">
                                        @lang("Descritpion du poste dans l'entreprise")
                                    </label>
                                    <input type="text" name="poste" id="" class="form-control" placeholder="Description du poste">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role" id="admin" value="admin" onclick="checked('admin');">
                                    <label class="form-check-label" for="admin">
                                        @lang("Admin")
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role" id="agent" value="staff" checked>
                                    <label class="form-check-label" for="agent">
                                        @lang("Agent")
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-6">
                                <div class="form-group" id="permissions">
                                    <label for="inputrole" class="control-label">@lang("Permissions de l'agent")</label>
                                    <div class="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="btn-toolbar float-right mb-3" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="Second group">
                    <button type="submit" name="button" value="Enregistrer" class="btn btn-success action-btn">@lang("Enregistrer")</button>
                </div>
            </div>
        </div>
    </form>
</div>
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
@endsection
