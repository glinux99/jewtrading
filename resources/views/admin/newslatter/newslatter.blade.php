@extends('layouts.admin')
@section('content')
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">

        <div class="aiz-titlebar text-left mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h3">@lang("Newslatter Service")</h1>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="" class="btn btn-circle btn-danger" data-toggle="modal" data-target="#serviceAddModal">
                        <span>@lang("Envoyer un message aux abonnes")</span>
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
                    @if ($newslatterCli->count() ?? 0)
                    <div>
                        <table class="table table-hover table-striped table-sm">
                            <thead>
                                <th>
                                    #
                                </th>
                                <th class="text-center">
                                    {{__("Nom")}}
                                </th>
                                <th class="text-center">
                                    {{__("E-mail")}}
                                </th>
                                <th class="text-center">
                                    {{__("Telephone")}}
                                </th>
                                <th class="text-center">
                                    {{__("Action")}}
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($newslatterCli as $index=>$client)
                                <tr class="center">
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td class="text-center">{{ $client->email}}</td>
                                    <td>{{ $client->numero}}</td>
                                    <td class="text-center">
                                        @if ($client->newslatter)
                                        <a href="/desactivate/newslatter/{{$client->id}}" class="btn btn-dark">{{__("Désabonné")}}</a>
                                        @else
                                        <a href="/activate/newslatter/{{$client->id}}" class="btn btn-dark">{{__("Abonné")}}</a>
                                        @endif
                                        <a href="/delete/newslatter/{{$client->id}}" class="btn btn-danger">{{__("Supprimer")}}</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="d-flex justify-content-center">
                        @lang("Aucune donnee a afficher")
                    </div>
                    @endif
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
