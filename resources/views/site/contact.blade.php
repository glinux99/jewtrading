@extends('layouts.pages')
@section('contenu')
<div class="bg-danger">
    @include('layouts.navbarHome')
</div>
<style>
    .breadcrumb .breadcrumb-item {
        margin: 0;
    }

    .breadcrumb {
        margin: -20px;
        background-color: #fff;
        padding: 1.5rem 20px;
        border-bottom: 1px solid #4329a333;
        border-radius: 0;
        margin-bottom: 20px;
    }

    .breadcrumb .breadcrumb-item a {
        color: #131313;
        font-weight: 600;
    }

    .breadcrumb-item.active {
        color: #141433;
    }

    .breadcrumb-area {
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        min-height: 225px;
        position: relative;
    }

    .breadcrumb-area .breadcrumb-content {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .breadcrumb-area .breadcrumb-content>h2 {
        font-weight: 700;
        color: #ffffff;
        text-transform: uppercase;
        text-align: center;
        font-size: 36px;
        margin-bottom: 0;
        padding-bottom: 20px;
    }

    .breadcrumb-area .breadcrumb-content ul>li:first-child {
        padding-left: 0;
    }

    .breadcrumb-area .breadcrumb-content ul>li {
        color: #000000;
        display: inline-block;
        padding-left: 20px;
        position: relative;
    }

    .breadcrumb-area .breadcrumb-content ul>li:before {
        content: "\f054";
        font-family: 'Font Awesome 5 Free';
        font-weight: 600;
        position: absolute;
        right: -15px;
        top: 2px;
        font-size: 10px;
        color: #ffffff;
    }

    .breadcrumb-area .breadcrumb-content ul>li:last-child:before {
        display: none;
        content: none;
    }

    .breadcrumb-area .breadcrumb-content ul>li>a {
        color: #ffffff;
    }

    .breadcrumb-area .breadcrumb-content ul>li {
        color: #ffffff;
        display: inline-block;
        padding-left: 20px;
        position: relative;
    }

    .breadcrumb-area .breadcrumb-content ul>li.active {
        color: #ba1c24;
        font-weight: 600;
    }
</style>
<div class="breadcrumb-area " style="background-image: url('/assets/img/produitbg.jpg')">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="breadcrumb-content">
            <h2>@lang("Contactez-nous")</h2>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="row my-md-5">
            <div class="col-md-8">
                <h4 class="fw-bolder">{{__("Envoyez-nous un message")}}</h4>
                <form action="/send-message" method="post">
                    @csrf
                    <div class="mb-2 row">
                        <div class="col-6">
                            <label for="" class="form-label"></label>
                            <input type="text" class="form-control" name="nom" id="" aria-describedby="emailHelpId" placeholder="{{__('votre nom')}}">
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label"></label>
                            <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="{{__('Email adresse')}}" required>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <div class="col-6">
                            <label for="" class="form-label"></label>
                            <input type="tel" class="form-control" name="numero" id="" aria-describedby="emailHelpId" placeholder="{{__('Numero de Tel')}}">
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label"></label>
                            <input type="text" class="form-control" name="object" id="" aria-describedby="emailHelpId" placeholder="Object">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label"></label>
                        <textarea class="form-control" name="messages" id="" required></textarea>
                    </div>
                    <div class="d-flex justify-content-center"><button class="btn btn-danger">{{__("Soumettre")}}</button></div>
                </form>
            </div>
            <div class=" col-md-4 card p-4">
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
                                {{$adresse ?? ''}}
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
                                <a href="tel:{{$phone ?? ''}}" class="text-muted text-nowrap">{{$phone ?? ''}}</a>

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
                                <a href="mailto:{{ $email ?? ''}}" class="text-muted">{{ $email ?? ''}}</a>
                            </p>
                        </div>
                    </li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
