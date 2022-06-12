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
        <div class="border-start border-5 border-danger col-md-3 shadow m-3 py-md-3 rounded">
            <h4 class="d-inline  fw-bold"><span class="me-2 display-5">{{ $countServ ?? '0' }}</span>{{__("Service")}} @if ($countServ?? 0){{"s"}}

                @endif</h4><span class="bi-globe me-2 float-end h4"></span>
        </div>
        <div class="border-start border-5 border-danger col-md-3 shadow m-3  py-md-3 rounded">
            <h5 class="d-inline fw-bold"><span class="me-2">{{ $countAgent ?? '0' }}</span>{{__("Employe")}}@if ($countAgent?? 0){{"s"}}

                @endif</h5><span class="bi-person-badge me-2 float-end h4">
        </div>
        <div class="border-start border-5 border-danger col-md-3 shadow py-md-3 rounded m-3">
            <h4 class="d-inline fw-bold"><span class="me-2">{{ $countPhoto ?? '0' }}</span>{{__("Photo")}}@if ($countPhoto?? 0){{"s"}}

                @endif</h4><span class="bi-border-start border-5 border-danger-image me-2 h4 float-end">
        </div>
    </div>
    <div class="col-md-11 mx-auto row d-flex justify-content-center dashbord">
        <div class="border-start border-5 border-danger col-md-3 shadow m-3  py-md-3 rounded">
            <h5 class="d-inline fw-bold"><span class="me-2">{{ $countProd ?? '0' }}</span>{{__("Produit")}}@if ($countProd?? 0){{"s"}}

                @endif</h5><span class="bi-cart4 me-2 float-end h4"></span>
        </div>
        <div class="border-start border-5 border-danger col-md-3 shadow m-3  py-md-3 rounded">
            <h4 class="d-inline fw-bold"><span class="me-2">{{ $countUser ?? '0' }}</span>{{__("Utilisateur")}}@if ($countUser?? 0){{"s"}}

                @endif</h4><span class="bi-person me-2 float-end h4"></span>
        </div>
        <div class="border-start border-5 border-danger col-md-3 shadow  py-md-3 rounded m-3">
            <h4 class="d-inlin fw-bold">
                <span class="bi-truck me-2"></span>{{__("Commande")}} @if ($countCom?? 0){{"s"}}
                @endif
            </h4>
            <div>
                <h3 class="text-center">9</h3>
            </div>
        </div>
    </div>
</div>

@endsection
