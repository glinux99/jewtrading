@extends('layouts.layoutHF')
@section('title') {{ __("Notre galerie avec Jew Trading")}} @endsection
@section('body')
@include('layouts.menuP')
<div class="position-relative">
    <div class="position-absolute" style="z-index: 1000; bottom: 50%;">
        <h1 class="fw-bold text-white mx-5">{{__("Contactez-nous")}}</h1>
    </div>
    <div class="d-flex align-items-center contactBg">
    </div>
</div>
<div class="container">
    <div class="row my-md-5">
        <div class="col-md-8">
            <h4 class="fw-bolder">{{__("Envoyez-nous un message")}}</h4>
            <form action="/send-message" method="post">
                @csrf
                <div class="mb-2 row">
                    <div class="col-6">
                        <label for="" class="form-label"></label>
                        <input type="text" class="form-control" name="nom" id="" aria-describedby="emailHelpId" placeholder="votre nom">
                    </div>
                    <div class="col-6">
                        <label for="" class="form-label"></label>
                        <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="Email adresse">
                    </div>
                </div>
                <div class="mb-2 row">
                    <div class="col-6">
                        <label for="" class="form-label"></label>
                        <input type="tel" class="form-control" name="numero" id="" aria-describedby="emailHelpId" placeholder="Numero de Tel">
                    </div>
                    <div class="col-6">
                        <label for="" class="form-label"></label>
                        <input type="text" class="form-control" name="object" id="" aria-describedby="emailHelpId" placeholder="Object">
                    </div>
                </div>
                <div class="mb-2">
                    <label for="" class="form-label"></label>
                    <textarea class="form-control" name="messages" id=""></textarea>
                </div>
                <div class="d-flex justify-content-center"><button class="btn btn-danger">Soumettre</button></div>
            </form>
        </div>
        <div class="col-md-4 card p-4">
            <h4 class="fw-bolder">{{__("Contact rapide")}}</h4>
            <p>
                {{__("Si vous avez des questions, utilisez simplement nos coordonnées suivantes.")}}
            </p>
            <p>
            <ul class="list-unstyled">
                <li class="d-flex m-3">
                    <span class="bi-person-lines-fill text-danger bi--2xl"></span>
                    <div class="ms-2 ">
                        <h6 class="fw-bold p-0 m-0 text-uppercase">
                            {{ __("Adresse") }}
                        </h6>
                        <p class="text-muted small">
                            {{$adresse}}
                        </p>
                    </div>
                </li>
                <li class="d-flex m-2">
                    <span class="bi-telephone-inbound-fill text-danger bi--2xl"></span>
                    <div class="ms-2">
                        <h6 class="fw-bold p-0 m-0 text-uppercase">
                            {{ __("Phone") }}
                        </h6>
                        <p class="text-muted small ">
                            @php
                            $i=0;
                            @endphp
                            @foreach ($phones as $phone)
                            @if ($i%2!=0)
                            {{ ","}}
                            @endif
                            <a href="tel:{{$phone}}" class="text-muted text-nowrap">{{$phone}}</a>
                            @php
                            $i++;
                            @endphp
                            @endforeach
                        </p>
                    </div>
                </li>
                <li class="d-flex m-3">
                    <span class="bi-envelope text-danger bi--2xl"></span>
                    <div class="ms-2">
                        <h6 class="fw-bold p-0 m-0 text-uppercase">
                            {{ __("Email") }}
                        </h6>
                        <p class="text-muted small">
                            <a href="mailto:{{ $email}}" class="text-muted">{{ $email}}</a>
                        </p>
                    </div>
                </li>
            </ul>
            </p>
        </div>
    </div>
</div>
@endsection
