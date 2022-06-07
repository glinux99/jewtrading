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
<div class="position-relative">
    <div class="position-absolute" style="z-index: 1000; bottom: 50%;">
        <h1 class="fw-bold text-white px-5">{{__("Nous fournissons les meilleurs services")}}</h1>
    </div>
    <div class="d-flex align-items-center serviceBg">
    </div>
</div>
<div class="corp mt-md-5 pt-md-5" style="background: rgb(245, 246, 246);">
    @include('layouts.servicesLayer')
    <div class="produit bg-white mt-md-5 pt-md-5">
        <h2 class="text-center fw-bolder py-md-3 display-6">
            Nos produits
        </h2>
        <div id="galerieProduits" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                @while ($gal<count($galeries)) @php $active='' ; if($gal==0){ $active='active' ; } @endphp <div class="carousel-item {{$active}}">
                    <div class="row">
                        @for ($x=0; $x<$z-1;$x++) @php if($gal>count($galeries)-4){
                            $z= 1+count($galeries)%4;
                            $gal = count($galeries);
                            }
                            $img ='/storage/images/galeries/'.$galeries[$i];
                            @endphp
                            <div class="col-md-3">
                                <img src="{{asset($img)}}" alt="{{$galeries[$i]}}" class="d-block w-100">
                            </div>
                            @php
                            $i++;
                            @endphp
                            @endfor
                    </div>
            </div>
            @php
            $gal = $gal+4;
            @endphp
            @endwhile
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#galerieProduits" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#galerieProduits" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
</div>
@endsection
