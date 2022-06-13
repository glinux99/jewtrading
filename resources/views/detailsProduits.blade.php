@extends('layouts.layoutHF')
@section('title') {{ __("Notre galerie avec Jew Trading")}} @endsection
@section('body')
@include('layouts.menuP')
<div class="position-relative">
    <div class="position-absolute" style="z-index: 1000; bottom: 80%;">
        <h1 class="fw-bold text-white mx-5">{{__("Details du produits")}}</h1>
    </div>
    <div class="d-flex align-items-center produitBg">
    </div>
    <div class="container-fluid my-4 ">
        <div class="col-md-10 mx-auto">
            <div class="row">
                <div class="col-md-7">
                    <div id="produitDetails" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            @php
                            $img1 = '/storage/images/produits/'.$produit->file1;
                            $img2 = '/storage/images/produits/'.$produit->file2;
                            $img3 = '/storage/images/produits/'.$produit->file3;
                            $img4 = '/storage/images/produits/'.$produit->file4;
                            @endphp
                            <div class="carousel-item active">
                                <img src="{{asset($img1)}}" alt="images produit slide" class="img-fluid img-thumbnail">
                            </div>
                            @if (strlen($produit->file2)>4)
                            <div class="carousel-item">
                                <img src="{{asset($img2)}}" alt="images produit slide" class="img-fluid img-thumbnail shadow">
                            </div>
                            @endif
                            @if (strlen($produit->file3)>4)
                            <div class="carousel-item">
                                <img src="{{asset($img3)}}" alt="images produit slide" class="img-fluid img-thumbnail shadow">
                            </div>
                            @endif
                            @if (strlen($produit->file4)>4)
                            <div class="carousel-item">
                                <img src="{{asset($img4)}}" alt="images produit slide" class="img-fluid img-thumbnail shadow">
                            </div>
                            @endif
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#produitDetails" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#produitDetails" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="row my-3 border-bottom border-2 pb-4">
                        <div class="col-3">
                            <img src="{{asset($img1)}}" alt="images produit slide" class="img-fluid img-thumbnail">
                        </div>
                        @if (strlen($produit->file2)>4)
                        <div class="col-3">
                            <img src="{{asset($img2)}}" alt="images produit slide" class="img-fluid img-thumbnail shadow">
                        </div>
                        @endif
                        @if (strlen($produit->file3)>4)
                        <div class="col-3">
                            <img src="{{asset($img3)}}" alt="images produit slide" class="img-fluid img-thumbnail shadow">
                        </div>
                        @endif
                        @if (strlen($produit->file4)>4)
                        <div class="col-3">
                            <img src="{{asset($img4)}}" alt="images produit slide" class="img-fluid img-thumbnail shadow">
                        </div>
                        @endif
                    </div>
                    <p>
                        <small>{{__("Pour plus d'informations sur le produit, veuillez nous contacter
                            ou abonnez-vous a notre newslatter pour recevoir les notifications sur les nouvelles voitures")}}</small>
                    </p>
                </div>
                <div class="col-md-5 card shadow ">
                    <div class="px-3">
                        {{__("Confort")}}
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center">
                                <ul class="list-unstyled">
                                    <li>
                                        <h3 class="fw-bolder">{{$produit->marque}}</h3>
                                    </li>
                                    <li>
                                        <h3 class="fw-bold">{{$produit->model}}</h3>
                                    </li>
                                    <li>
                                        <h4>{{$produit->prix}} $</h4>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <div>
                                    <a href="/commande/{{$produit->id}}" class="btn btn-danger">{{__('Commander')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-top border-2 border-danger">
                        <div class="row">
                            <div class="col-md-6">
                                {{__("Caractéristiques")}}
                            </div>
                            <div class=" col-md-6 d-flex justify-content-end">
                                {{__("Emplacement")}} : {{$produit->emplacement}}
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>{{__("Kilometrage")}}</th>
                                    <th>{{__("Annee")}}</th>
                                    <th>{{__("Moteur")}}</th>
                                    <th>{{__("Trans.")}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$produit->kilometrage}}</td>
                                    <td>{{$produit->annee_fab}}</td>
                                    <td>{{$produit->moteur}}</td>
                                    <td>{{$produit->transmission}}</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered table-reflow">
                            <tr>
                                <th>{{__("Marque")}}</th>
                                <td>{{$produit->kilometrage}}</td>
                            </tr>
                            <tr>
                                <th>{{__("Model")}}</th>
                                <td>{{$produit->kilometrage}}</td>
                            </tr>
                            <tr>
                                <th>{{__("Carburant")}}</th>
                                <td>{{$produit->kilometrage}}</td>
                            </tr>
                            <tr>
                                <th>{{__("Couleur")}}</th>
                                <td>{{$produit->kilometrage}}</td>
                            </tr>
                            <tr>
                                <th>{{__("Num Chassi")}}</th>
                                <td>{{$produit->kilometrage}}</td>
                            </tr>
                            <tr>
                                <th>{{__("Declaration")}}</th>
                                <td>{{$produit->kilometrage}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
