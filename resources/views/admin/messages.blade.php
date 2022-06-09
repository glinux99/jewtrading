@extends('layouts.adminLH')
@section('title')
{{ __("Admnistration  | Jews Trading")}}
@endsection
@section('body')
<div class="col-md-11 mx-auto shadow my-3 py-4 row">
    <div class="col-md-8">
        <h4 class="border-bottom border-2">{{__("Discussions recents")}}</h4>
        @foreach ($discussionCli as $message)
        <div class="border p-2 my-1">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <span class="bi-person-circle bi--4xl "></span>
                    <div class="ms-2">
                        <h6 class="m-0 p-0"><small>{{ $message->nom}}</small></h6>
                        <h6 class="m-0 p-0"><small><a href="mailto:{{ $message->email}}" class="nav-lien text-dark m-0 p-0">{{ $message->email}}</a></small></h6>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <div>
                        <button class="btn btn-danger">Repondre par mail</button>
                    </div>
                </div>
            </div>
            <p>{{ $message->messages}}</p>
        </div>
        @endforeach
    </div>
    <div class="col-md-4 border-start border-1">
        <h4 class="border-bottom border-2">{{__("Chat Clients")}}</h4>
        <div class="">
            @foreach ($clients as $client )
            <div class="border p-1 m-1">
                <div class="col-md-6 d-flex align-items-center">
                    <span class="bi-person-circle bi--xl "></span>
                    <div class="ms-2">
                        <h6 class="m-0 p-0"><small>{{ $client->nom}}</small></h6>
                    </div>
                </div>
                <p class="small p-0 m-0 chatCli">{{ $client->messages}}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
