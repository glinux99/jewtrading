@extends('layouts.admin')
@section('content')
<div class="col-md-11 mx-auto shadow my-3 py-4 row">
    <div class="col-md-8">
        <h4 class="border-bottom border-2">{{__("Discussions recentes")}}</h4>
        @if((!$message))
        <span class="text-muted">({{__("Aucune discussion pour l'instant")}})</span>
        @endif
        @if($message)
        <div class="border p-2 my-1">
            <div class="card mb-1 p-2">
                <div class="row">
                    <div class="col-md-12 d-flex align-items-center">
                        <span class="bi-person-circle bi--4xl "></span>
                        <div class="ms-2">
                            <h6 class="m-0 p-0"><small>{{ $message->nom}}</small></h6>
                            <h6 class="m-0 p-0"><small><a href="mailto:{{ $message->email}}" class="nav-lien text-dark m-0 p-0">{{ $message->email}}</a></small></h6>
                        </div>
                    </div>
                </div>
                <p class="p-0 m-0">{{ $message->messages}}</p>
            </div>
            @if($message->reponse)
            <div class="card reponseBg">
                <div class="border-top border-danger border-5 p-2">
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center">
                            <span class="bi-person-circle bi--4xl "></span>
                            <div class="ms-2">
                                <h6 class="m-0 p-0"><small> {{ Config('app.name')}} Admin</small></h6>
                                <h6 class="m-0 p-0 fw-bolder"><small>-{{__("Reponse envoyé par mail")}}</small></h6>
                            </div>
                        </div>
                    </div>
                    <p class="p-0 m-0">{{ $message->reponse}}</p>
                </div>
            </div>
            @endif
            <p class="p-0 m-0">
            <div class="mb-1">
                <label for="" class="form-label"></label>
                <form action="#" method="post">
                    @csrf
                    <div class="input-group">
                        <input class="form-control" name="reponse" id="" rows="3">
                        <input type="text" name="id" value="#" hidden>
                        <button class="btn btn-danger" type="submit">{{__("Repondre")}}</button>
                    </div>
                </form>
            </div>
            </p>
        </div>
        @endif
    </div>
    @if(count($clients))
    <div class="col-md-4 border-start border-1">
        <h4 class="border-bottom border-2">{{__("Chat Clients")}}</h4>
        <div class="">
            @foreach ($clients as $client )
            <a href="{{route('message', [$client->id])}}" class="chatLink">
                <div class="border p-1 m-1">
                    <div class="col-md-6 d-flex align-items-center">
                        <span class="bi-person-circle bi--xl "></span>
                        <div class="ms-2">
                            <h6 class="m-0 p-0"><small>{{ $client->nom}}</small></h6>
                        </div>
                    </div>
                    <p class="small p-0 m-0 chatCli">{{ $client->messages}}</p>
                </div>
            </a>
            @endforeach
        </div>
        @if(count($clients))
        <div class="d-flex">
            <div class="mx-auto mt-3">
                @if ($clients)
                {{ $clients->links()}}
                @endif
            </div>
        </div>
        @endif
    </div>
    @endif
</div>
@endsection
