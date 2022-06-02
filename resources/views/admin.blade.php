@extends('layouts.adminLH')
@section('title')
{{ __("Administration  | Jews Trading")}}
@endsection
@section('body')
<div class="row my-md-5">
    <div class="col-md-11 mx-auto row d-flex justify-content-center">
        <div class="col-md-3 m-1 menuAdmin py-md-3 rounded ">
            <h4 class="d-inline  fw-bold"><span class="me-2">{{ $countServ ?? '0' }}</span>Service</h4><span class="bi-globe me-2 float-end h4"></span>
        </div>
        <div class="col-md-3 m-1 menuAdmin py-md-3 rounded">
            <h5 class="d-inline fw-bold"><span class="me-2">{{ $countAgent ?? '0' }}</span>Employe</h5><span class="bi-person-badge me-2 float-end h4">
        </div>
        <div class="col-md-3 menuAdmin py-md-3 rounded m-1">
            <h4 class="d-inline fw-bold"><span class="me-2">{{ $countPhoto ?? '0' }}</span>Photos</h4><span class="bi-card-image me-2 h4 float-end">
        </div>
    </div>
    <div class="col-md-11 mx-auto row d-flex justify-content-center">
        <div class="col-md-3 m-1 menuAdmin py-md-3 rounded">
            <h5 class="d-inline fw-bold"><span class="me-2">{{ $countProd ?? '0' }}</span>{{__("Produits")}}</h5><span class="bi-cart4 me-2 float-end h4"></span>
        </div>
        <div class="col-md-3 m-1 menuAdmin py-md-3 rounded">
            <h4 class="d-inline fw-bold"><span class="me-2">{{ $countUser ?? '0' }}</span>{{__("Utilisateur")}}</h4><span class="bi-person me-2 float-end h4"></span>
        </div>
        <div class="col-md-3 menuAdmin py-md-3 rounded m-1">
            <h4 class="d-inline">{{__("Commande")}}</h4>
        </div>
    </div>
</div>
@endsection
