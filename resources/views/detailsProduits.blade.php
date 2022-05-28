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
    <div class="container-fluid ">
        <div class="col-md-10 mx-auto">
            <div class="row">
                <div class="col-md-4">
                    <div id="produitDetails" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="{{asset('assets/imgs/gal16.jpg')}}" alt="produit slide" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="lsit-unstyled">
                        <li>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
