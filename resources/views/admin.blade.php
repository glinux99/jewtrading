@extends('layouts.adminLH')
@section('title')
{{ __("Administration  | Jews Trading")}}
@endsection
@section('body')
<div class="row my-md-5">
    <div class="col-md-11 mx-auto row d-flex justify-content-center">
        <div class="col-md-3 m-1 menuAdmin py-md-3 rounded ">
            <h4 class="d-inline">Service</h4><span class="bi-globe me-md-2 float-end"></span>
        </div>
        <div class="col-md-3 m-1 menuAdmin py-md-3 rounded">
            <h4 class="d-inline">Employe</h4><span class="bi-person-badge me-2 float-end">
        </div>
        <div class="col-md-3 menuAdmin py-md-3 rounded m-1">
            <h4 class="d-inline">Photos</h4><span class="bi-card-image me-md-2 float-end">
        </div>
    </div>
    <div class="col-md-11 mx-auto row d-flex justify-content-center">
        <div class="col-md-3 m-1 menuAdmin py-md-3 rounded">
            <h5 class="d-inline fw-bold"><span class="me-2">{{ $countProd ?? '0' }}</span>{{__("Produits")}}</h5><span class="bi-cart4 me-md-2 float-end h4"></span>
        </div>
        <div class="col-md-3 m-1 menuAdmin py-md-3 rounded">
            <h4 class="d-inline">{{__("Utilisateur")}}</h4><span class="bi-person me-md-2 float-end"></span>
        </div>
        <div class="col-md-3 menuAdmin py-md-3 rounded m-1">
            <h4 class="d-inline">{{__("Parametre")}}</h4>
        </div>
    </div>
</div>
@endsection
