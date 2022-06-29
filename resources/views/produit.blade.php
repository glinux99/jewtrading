@extends('layouts.layoutHF')
@section('title') {{ __("Achetez votre vehicule chez Jew Trading")}} @endsection
@section('body')
@include('layouts.menuP')
<div class="position-relative d-none d-lg-block d-md-block">
    <div class="position-absolute" style="z-index: 1000; bottom: 50%;">
        <h1 class="fw-bold text-white mx-5">{{__("Nos produits")}}</h1>
    </div>
    <div class="d-flex align-items-center produitBg">
    </div>
</div>
<div class="pb-md-5 galerie text-white pt-md-5 galerie-image" style="background: url({{asset('assets/imgs/bg1.jpg')}}">
    <div class="mb-md-5 pb-md-5 mb-lg-5 pb-lg-5">
        @if($search ?? 0)
        <div class="mb-md-5 pb-md-5 mb-lg-5 pb-lg-5">
            <div class="bg-dark mx-auto col-md-5 d-none d-md-block d-lg-block">
                <h2 class="fw-bolder bg-danger px-3">
                    @if($search!=null)
                    {{__("Recherche trouvée:")}}
                    @endif
                </h2>
            </div>
            <div class="col-md-10 mx-auto">
                <div class="bg-dark mx-auto pt-2 col-md-5 d-md-none d-lg-none">
                    <h2 class="fw-bolder bg-danger px-3">
                        @if($search!=null)
                        {{__("Recherche trouvée:")}}
                        @endif
                    </h2>
                </div>
                <div class="row mx-auto">
                    @foreach ($search as $produit )
                    <div class="col-md-4 my-2 position-relative mx-auto">
                        <img src="{{asset($produit[3])}}" alt="" class="img-fluid img-thumbnail shadow" style="filter: contrast(50%)">
                        <div class="card-img-overlay mx-4">
                            <h4 class="card-title fw-bolder">{{ $produit[0]}}</h4>
                            <h4 class="card-title fw-bolder">{{ $produit[1]}}</h4>
                            <div class="position-absolute bottom-0 pb-2">
                                <a href="/detail/produit/{{ $produit[2]}}" class="btn btn-danger">{{__("Voir details")}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <div class="row w-100 mx-auto">
            <div class="col-md-2 text-white d-none d-lg-block d-md-block">
                <div class="bg-dark shadow mx-1 px-1 my-1">
                    <div class="bg-danger">
                        <h5>{{__("Choix par Model")}}</h5>
                    </div>
                    <div class="text-dark">
                        <ul class="list-unstyled">
                            @foreach ($choice as $model)
                            <li class="ms-3">
                                <a href="{{route('search',['model',$model->model])}}" class="nav-link choice m-0 p-0">
                                    {{$model->model}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="bg-dark mx-1 px-1 my-1">
                    <div class="bg-danger">
                        <h5>{{__("Choix par Marque")}}</h5>
                    </div>
                    <div class="text-dark">
                        <ul class="list-unstyled">
                            @foreach ($choice as $marque)
                            <li class="ms-3">
                                <a href="{{route('search',['marque',$marque->marque])}}" class="nav-link choice m-0 p-0">
                                    {{$marque->marque}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-10 mx-auto mt-2">
                <div class="bg-dark">
                    <h2 class="fw-bolder bg-danger w-75 produitStock px-3">
                        @if($search==null)
                        {{__("Produits en stocks")}}
                        @else
                        {{__("Vous pourriez aussi aimer")}}
                        @endif
                    </h2>
                </div>
                <div class="row">
                    @foreach ($produits as $produit )
                    <div class="col-md-4 my-2 position-relative">
                        <img src="{{asset($produit[3])}}" alt="produit" class="img-thumbnail img-fluid h-100 rounded" style="filter: contrast(50%)">
                        <div class="card-img-overlay mx-4">
                            <h4 class="card-title fw-bolder">{{ $produit[0]}}</h4>
                            <h4 class="card-title fw-bolder">{{ $produit[1]}} USD</h4>
                            <div class="position-absolute bottom-0 pb-2">
                                <a href="/detail/produit/{{ $produit[2]}}" class="btn btn-danger">{{__("Voir details")}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-2 text-white d-lg-none d-md-none">
                <div class="bg-dark shadow mx-1 px-1 my-1">
                    <div class="bg-danger">
                        <h5>{{__("Choix par Model")}}</h5>
                    </div>
                    <div class="text-dark">
                        <ul class="list-unstyled">
                            @foreach ($choice as $model)
                            <li class="ms-3">
                                <a href="{{route('search',['model',$model->model])}}" class="nav-link choice m-0 p-0">
                                    {{$model->model}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="bg-dark mx-1 px-1 my-1">
                    <div class="bg-danger">
                        <h5>{{__("Choix par Marque")}}</h5>
                    </div>
                    <div class="text-dark">
                        <ul class="list-unstyled">
                            @foreach ($choice as $marque)
                            <li class="ms-3">
                                <a href="{{route('search',['marque',$marque->marque])}}" class="nav-link choice m-0 p-0">
                                    {{$marque->marque}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
