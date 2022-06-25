@extends('layouts.layoutHF')
@section('title') {{ __("Commentaire de Jew Trading")}} @endsection
@section('body')
@include('layouts.menuP')
<div class="position-relative">
    <div class="position-absolute" style="z-index: 1000; bottom: 50%;">
        <h1 class="fw-bold text-white mx-5">{{__("Commentaires")}}</h1>
    </div>
    <div class="d-flex align-items-center aproposBg">
    </div>
</div>
<div class="container-fluid">
    <div class="col-md-11 mx-auto my-md-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset($photo)}}" alt="{{$photo}}" class="img-fluid rounded img-thumbnail">
            </div>
            <div class="col-md-6">
                <p>
                    {{__("Ajouter un commentaire")}}
                </p>
                <p class="card">
                <form action="/commentaires/image" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        @php
                        $id =substr($photo, 25);
                        @endphp
                        <input type="text" name="id" value="{{$id}}" hidden>
                        <label for="" class="form-label">{{__("Nom")}}</label>
                        <input type="text" class="form-control" name="nom_cli" id="" aria-describedby="helpId" placeholder="{{__('votre nom')}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">{{__("Adresse E-mail")}}</label>
                        <input type="text" class="form-control" name="adresse_mail" id="" aria-describedby="helpId" placeholder="{{ __('Votre Email adresse')}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">{{__("Ajouter une image")}}</label>
                        <input type="file" class="form-control" name="image" id="" aria-describedby="helpId" placeholder="{{ __('Votre Email adresse')}}">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label"></label>
                        <textarea class="form-control" name="commentaires" id=""></textarea>
                    </div>
                    <div class="d-flex justify-content-center"><button class="btn btn-danger">{{__("Soumettre")}}</button></div>
                </form>
                </p>
            </div>
        </div>
        <div class="">
            <h4 class="text-uppercase">{{__("les commentaires")}}</h4>
            <div class="commentaire">
                <div class="row">
                    @foreach ($commentaires as $comment)
                    <div class="col-md-12 my-1">
                        <div class="card">
                            <div class="col-md-6 d-flex align-items-center mx-3">
                                <span class="bi-person-circle bi--2xl "></span>
                                <div class="ms-2">
                                    <h6 class="m-0 p-0 fw-bold h5">{{ $comment->nom_cli}}</h6>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="my-2 text-justify px-3">
                                    {{ $comment->commentaires}}
                                </div>
                                @if($comment->image)
                                <div class="col-md-4">
                                    <div class="">
                                        <img src="{{asset('/storage/images/comments/'.$comment->image)}}" alt="commentaire image" class="img-fluid h-100">
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
