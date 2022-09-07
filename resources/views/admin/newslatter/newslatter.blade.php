@extends('layouts.admin')
@section('content')
<div class="container card my-4 py-4 shadow">
    <div class="row border-bottom border-2">
        <div class="col-md-6">
            <h5 class="text-dark fw-bolder  py-2">{{__("Clients abonnés à notre Newslatter")}} @if (!count($newslatterCli))
                <span class="text-muted small d-block fw-normal">({{__("*Aucun client abonné à notre Newslatter")}})</span>
                @endif
            </h5>
        </div>
        <div class="col-md-6 d-md-flex d-lg-flex justify-content-end align-items-center">
            <button class="btn btn-danger" role="button" data-bs-toggle="modal" data-bs-target="#newslatter">{{__("Envoyer un message")}}</button>
        </div>
    </div>
    <div class=" mx-1">
        @if (count($newslatterCli))
        <div class="my-2">
            <table class="table table-hover table-responsive table-striped table-sm">
                <thead>
                    <th>
                        #
                    </th>
                    <th class="text-center">
                        {{__("E-mail")}}
                    </th>
                    <th class="text-center">
                        {{__("Action")}}
                    </th>
                </thead>
                <tbody>
                    @foreach ($newslatterCli as $client)
                    <tr>
                        <td></td>
                        <td class="text-center">{{ $client->email_Cli}}</td>
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
        @endif
    </div>
</div>
@endsection
