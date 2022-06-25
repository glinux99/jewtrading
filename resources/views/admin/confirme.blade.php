@extends('layouts.adminLH')
@section('title')
{{ __("Admnistration  | Jews Trading")}}
@endsection
@section('body')
<form action="/confirmeLog" method="post">
    @csrf
    <div class="col-md-5 card shadow px-4 mx-auto my-md-3 py-md-5">
        <div class="my-2 p-3 card shadow">
            <h3 class="text-center">{{__("Confirmez le password")}}</h3>
            <p class="text-center">
                <span class="bi-person bi--6xl"></span>
            </p>
            <div class="mx-2">
                <input type="password" class="form-control " placeholder="******************" name="psswd">
            </div>
            <div class="d-flex justify-content-center mt-3">
                <button class="btn btn-danger">{{__("confirmer")}}</button>
            </div>
        </div>

    </div>
</form>
@endsection
