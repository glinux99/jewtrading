@extends('layouts.app')
@section('contenu')
<div class="h-100 bg-cover bg-center py-5 d-flex align-items-center" style="background-image: url('/assets/img/bgjews.png')">
    <div class="container py-2">
        <div class="row">
            <div class="col-lg-6 col-xl-4 mx-auto">
                <div class="card text-left login-color">
                    <div class="card-body">
                        <div class="mb-4 text-center">
                            <img src="{{asset('assets/img/logojw.png')}}" class="mw-100 mb-2" height="100">
                            <p class="fs-18 text-danger mb-0 text-uppercase fw-700"> {{ Config('app.name')}} @lang("Login")</p>
                            <p class="my-2 opacity-60">@lang("Connectez-vous avec votre propre compte")</p>
                        </div>
                        <form class="pad-hor" method="POST" role="form" action="{{route('login')}}">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" id="password-field" name="password" class="form-control form-control-submit" placeholder="Password" required>
                                <div data-name="#password-field" class="la la-fw la-eye field-icon toggle-password" style="float: right;
    margin-left: -25px;
    margin-top: -28px;
    position: relative;
    z-index: 2;
    right: 18px;
    cursor: pointer;"></div>
                            </div>
                            <div class="d-flex my-3">
                                <div class="">
                                    <div class="text-left">
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="remember" id="remember">
                                            <span class="opacity-60 text-lowercase">@lang("Se souvenir de moi")</span>
                                            <span class="aiz-square-check"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <div class="text-right opacity-100">
                                        <a href="password/reset.html" class="text-reset text-lowercase">@lang("Mot de passe oublie?")</a>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger btn-lg btn-block">
                                @lang("Se connecter")
                            </button>
                        </form>
                        <div class="mt-4">
                            <p class="m-0 p-0 text-center">
                                @lang("Propulsé par") <a href="https://subnetcongo.net" class="text-danger">SubnetCongo</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
