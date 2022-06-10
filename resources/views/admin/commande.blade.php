@extends('layouts.adminLH')
@section('title')
{{ __("Admnistration  | Jews Trading")}}
@endsection
@section('body')
<div class="container card my-4 py-4 shadow">
    <div class="row border-bottom border-2">
        <div class="col-md-6">
            <h5 class="text-dark fw-bolder  py-2">{{__("Nos commandes")}}</h5>
        </div>
        <div class="col-md-6 d-flex justify-content-end align-items-center">
            <button class="btn btn-danger" role="button" data-bs-toggle="modal" data-bs-target="#newslatter">Envoyer un message</button>
        </div>
    </div>
    <div class=" mx-1">
        <div class="my-2">
            <table class="table table-hover table-responsive table-striped table-sm">
                <thead>
                    <th>
                        #
                    </th>
                    <th>
                        {{__("E-mail")}}
                    </th>
                    <th>
                        {{__("Action")}}
                    </th>
                </thead>
                <tbody>
                    @foreach ($newslatterCli as $client)
                    <tr>
                        <td></td>
                        <td>{{ $client->email_Cli}}</td>
                        <td>
                            <a href="/delete/newslatter/{{$client->id}}" class="btn btn-danger">{{__("Supprimer")}}</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
