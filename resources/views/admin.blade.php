@extends('layouts.adminLH')
@section('title')
{{ __("Administration  | Jews Trading")}}
@endsection
@section('body')
@if ($read ?? '')
{{'dsfdfgds'}}
@endif
<div class="row my-md-5">
    <div class="col-md-11 mx-auto row d-flex justify-content-center dashbord">
        <div class="border-start border-5 border-danger col-md-3 shadow m-1 py-md-3 rounded">
            <h4 class="d-inline  fw-bold"><span class="me-2">{{ $countServ ?? '0' }}</span>Service</h4><span class="bi-globe me-2 float-end h4"></span>
        </div>
        <div class="border-start border-5 border-danger col-md-3 shadow m-1  py-md-3 rounded">
            <h5 class="d-inline fw-bold"><span class="me-2">{{ $countAgent ?? '0' }}</span>Employe</h5><span class="bi-person-badge me-2 float-end h4">
        </div>
        <div class="border-start border-5 border-danger col-md-3 shadow py-md-3 rounded m-1">
            <h4 class="d-inline fw-bold"><span class="me-2">{{ $countPhoto ?? '0' }}</span>Photos</h4><span class="bi-border-start border-5 border-danger-image me-2 h4 float-end">
        </div>
    </div>
    <div class="col-md-11 mx-auto row d-flex justify-content-center dashbord">
        <div class="border-start border-5 border-danger col-md-3 shadow m-1  py-md-3 rounded">
            <h5 class="d-inline fw-bold"><span class="me-2">{{ $countProd ?? '0' }}</span>{{__("Produits")}}</h5><span class="bi-cart4 me-2 float-end h4"></span>
        </div>
        <div class="border-start border-5 border-danger col-md-3 shadow m-1  py-md-3 rounded">
            <h4 class="d-inline fw-bold"><span class="me-2">{{ $countUser ?? '0' }}</span>{{__("Utilisateur")}}</h4><span class="bi-person me-2 float-end h4"></span>
        </div>
        <div class="border-start border-5 border-danger col-md-3 shadow  py-md-3 rounded m-1">
            <h4 class="d-inline">{{__("Commande")}}</h4>
        </div>
    </div>
</div>

@endsection
