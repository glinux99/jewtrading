@extends('layouts.layoutHF')
@section('title') {{ __("Notre galerie avec Jew Trading")}} @endsection
@section('body')
@include('layouts.menuP')
<div class="position-relative">
    <div class="position-absolute" style="z-index: 1000; bottom: 50%;">
        <h1 class="fw-bold text-white mx-5">{{__("Details du produits")}}</h1>
    </div>
    <div class="d-flex align-items-center produitBg">
    </div>
</div>
@endsection
