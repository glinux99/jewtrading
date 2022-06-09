@extends('layouts.adminLH')
@section('title')
{{ __("Administration  | Jews Trading")}}
@endsection
@section('body')
<div class="">
    <form action="/params_update" method="post">
        @csrf
        <h4 class="text-center text-white ">{{__("Modifier le parametre")}}</h4>
        <div class="col-md-10 card shadow-lg mx-auto px-md-5 px-2 py-4 mb-1">
            <h5 class="pb-3 border-bottom border-1 border-secondary"><span class="bi-info-square me-2"></span>{{__("Information Generale")}}</h5>
            <div class="row">
                <div class="col-md-6">
                    <label for="nom" class="form-label">{{__("Login username")}}</label>
                    <input type="text" class="form-control " value="{{ Auth::User()->name }}" name="name">
                </div>
                <div class="col-md-6">
                    <label for="nom" class="form-label">{{__("Login password")}}</label>
                    <input type="text" class="form-control " placeholder="*******************" name="psswd">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="nom" class="form-label">{{__("E-mail")}}</label>
                    <input type="email" class="form-control " value="{{ Auth::User()->email }}" name="email">
                </div>
                <div class="col-md-6">
                    <label for="nom" class="form-label">{{__("Numero Tel")}}</label>
                    <input type="text" class="form-control " value="{{ Auth::User()->number }}" name="number">
                </div>
            </div>
        </div>
        <div class="col-md-10 card shadow-lg mx-auto px-md-5 px-2 pb-4 ">
            <h5 class=" py-3 border-bottom border-1 border-secondary"><span class="bi-info-circle me-2"></span>{{__("Information Supplementaire")}}</h5>
            <div class="row">
                <div class="col-md-12">
                    <label for="nom" class="form-label">{{__("Langue par defaut")}}</label>
                    <input type="text" class="form-control " name="lang" value="{{ Auth::User()->lang }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="nom" class="form-label">{{__("Numero de contact")}}</label>
                    <input type="text" class="form-control " name="contact" value="{{ Auth::User()->contact }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="nom" class="form-label">{{__("Adresse")}}</label>
                    <input type="text" class="form-control " name="adresse" value="{{ Auth::User()->adresse }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="nom" class="form-label">{{__("E-mail de l'entreprise")}}</label>
                    <input type="email" class="form-control " name="emailEntreprise" value="{{ Auth::User()->emailEntreprise }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="nom" class="form-label">{{__("Partenaires")}}</label>
                    <input type="text" class="form-control " name="partenaires" value="{{ Auth::User()->partenaires}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="nom" class="form-label">{{__("Mission")}}</label>
                    <div class="mb-3">
                        <textarea class="form-control " name="mission" id="">
                        {{ Auth::User()->description }}
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="nom" class="form-label">{{__("A propos")}}</label>
                    <div class="mb-3">
                        <textarea class="form-control " name="apropos" id="">
                        {{ Auth::User()->apropos }}
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn bg-danger text-white">{{__("Mise a jour")}}</button>
            </div>
        </div>
    </form>
</div>
@endsection
