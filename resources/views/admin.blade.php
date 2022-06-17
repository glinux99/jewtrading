@extends('layouts.adminLH')
@section('title')
{{ __("Administration  | Jews Trading")}}
@endsection
@section('body')
@if ($read ?? '')
{{'dsfdfgds'}}
@endif
<div class="row my-md-5 w-100">
    <div class="col-md-11 mx-auto row d-flex justify-content-center dashbord">
        <div class="border-start border-5 border-danger col-md-3 shadow m-3 py-md-3 rounded">
            <h4 class="d-inline  fw-bold text-center">{{__("Service")}}@if ($countServ?? 0) @if($countServ>1){{"s"}}@endif

                @endif</h4><span class="bi-globe me-2 float-end h4"></span>
            <h3 class="text-center mt-3">{{ $countServ ?? '0' }}</h3>
        </div>
        <div class="border-start border-5 border-danger col-md-3 shadow m-3  py-md-3 rounded">
            <h5 class="d-inline fw-bold text-center">{{__("Employé")}}@if ($countAgent?? 0)@if($countAgent>1){{"s"}}@endif

                @endif</h5><span class="bi-person-badge me-2 float-end h4">
                <h3 class="text-center mt-3">{{ $countAgent ?? '0' }}</h3>
        </div>
        <div class="border-start border-5 border-danger col-md-3 shadow m-3  py-md-3 rounded">
            <h4 class="d-inline fw-bold text-center">{{__("Photo")}}@if ($countPhoto?? 0)@if($countPhoto>1){{"s"}}@endif

                @endif</h4><span class="bi-border-start border-5 border-danger-image me-2">
                <h3 class="text-center mt-3">{{ $countPhoto ?? '0' }}</h3>
        </div>
    </div>
    <div class="col-md-11 mx-auto row d-flex justify-content-center dashbord">
        <div class="border-start border-5 border-danger col-md-3 shadow m-3  py-md-3 rounded">
            <h5 class="d-inline fw-bold text-center">{{__("Produit")}}@if ($countProd?? 0)@if($countProd>1){{"s"}}@endif

                @endif</h5><span class="bi-cart4 me-2 float-end h4"></span>
            <h3 class="text-center mt-3">{{ $countProd ?? '0' }}</h3>
        </div>
        <div class="border-start border-5 border-danger col-md-3 shadow m-3  py-md-3 rounded">
            <h4 class="d-inline fw-bold text-center">{{__("Utilisateur")}}@if ($countUser?? 0)@if($countUser>1){{"s"}}@endif

                @endif</h4><span class="bi-person me-2 float-end h4"></span>
            <div>
                <h3 class="text-center mt-3">{{ $countUser ?? '0' }}</< /h3>
            </div>
        </div>
        <div class="border-start border-5 border-danger col-md-3 shadow  py-md-3 rounded m-3">
            <h4 class="d-inlin fw-bold text-center">
                <span class="bi-truck me-2"></span>{{__("Commande")}} @if ($countCom?? 0)@if($countCom>1){{"s"}}@endif
                @endif
            </h4>
            <div>
                <h3 class="text-center mt-3">{{$count_T->id ?? 0}}</h3>
            </div>
        </div>
    </div>
</div>

@endsection
