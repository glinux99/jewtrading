@extends('layouts.layoutHF')
@section('title') {{ __("Notre galerie avec Jew Trading")}} @endsection
@section('body')
@include('layouts.menuP')
<div class="col-10 mx-auto adminBody">
    <div class="row">
        <div class="col-md-6">
            <div class="menuAdmin my-3 py-3">
                <h3 class="text-center">{{__("Connection")}}</h3>
                <p class="text-center">
                    <span class="bi-person bi--6xl"></span>
                </p>
                <div class="mx-2">
                    <input type="text" class="form-control my-2" placeholder="Username">
                    <input type="password" class="form-control" placeholder="******************">
                </div>
                <button class="btn buttonAdd">{{__("connection")}}</button>
            </div>
        </div>
        <div class="col-md-6">
            ll
        </div>
    </div>
</div>
@endsection
