@extends('layouts.layoutHF')
@section('title') {{ __("Nos services avec Jew Trading")}} @endsection
@section('body')
@php
$x=0;
$i=0;
$z=5;
$gal=0;
@endphp
@include('layouts.menuP')
<div class="position-relative d-none d-lg-block d-md-block">
    <div class="position-absolute" style="z-index: 1000; bottom: 50%;">
        <h1 class="fw-bold text-white px-5">{{__("Nous fournissons les meilleurs services")}}</h1>
    </div>
    <div class="d-flex align-items-center serviceBg">
    </div>
</div>
<div class="corp mt-md-5 pt-md-5 pb-3" style="background: rgb(245, 246, 246);">
    @include('layouts.servicesLayer')
</div>
</div>
@endsection
