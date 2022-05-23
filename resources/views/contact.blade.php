@extends('layouts.layoutHF')
@section('title') {{ __("Notre galerie avec Jew Trading")}} @endsection
@section('body')
@include('layouts.menuP')
<div class="container d-flex align-items-center bg-dark z-index-2n" style="height: 40vh">
    <h1 class="fw-bold text-white">{{__("Contactez-nous")}}</h1>
</div>
<div class="container">
    <div class="row my-md-5">
        <div class="col-md-8">
            <h4 class="fw-bolder">{{__("Envoyez-nous un message")}}</h4>
            <form action="" method="post">
                <div class="mb-2 row">
                    <div class="col-6">
                        <label for="" class="form-label"></label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="votre nom">
                    </div>
                    <div class="col-6">
                        <label for="" class="form-label"></label>
                        <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="Email adresse">
                    </div>
                </div>
                <div class="mb-2 row">
                    <div class="col-6">
                        <label for="" class="form-label"></label>
                        <input type="tel" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="Numero de Tel">
                    </div>
                    <div class="col-6">
                        <label for="" class="form-label"></label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="Object">
                    </div>
                </div>
                <div class="mb-2">
                    <label for="" class="form-label"></label>
                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>
                <div class="d-flex justify-content-center"><button class="btn btn-danger">Soumettre</button></div>
            </form>
        </div>
        <div class="col-md-4 card">
            <h4 class="fw-bolder">{{__("Contact rapide")}}</h4>
            <p>
                {{__("Si vous avez des questions, utilisez simplement nos coordonnées suivantes.")}}
            </p>
            <p>
            <ul class="list-unstyled">
                <li class="d-flex m-3">
                    <span class="bi-person-lines-fill text-danger bi--2xl"></span>
                    <div class="ms-2 ">
                        <h6 class="fw-bold p-0 m-0 text-uppercase">
                            {{ __("Adresse") }}
                        </h6>
                        <p class="text-muted small">
                            {{__("Com.De Goma,Q. Les volcans, Av. du Touriste, N-2")}}
                        </p>
                    </div>
                </li>
                <li class="d-flex m-3">
                    <span class="bi-telephone-inbound-fill text-danger bi--2xl"></span>
                    <div class="ms-2">
                        <h6 class="fw-bold p-0 m-0 text-uppercase">
                            {{ __("Phone") }}
                        </h6>
                        <p class="text-muted small">
                            <a href="tel:+243814536299" class="text-muted">+243 814 536 299</a>
                            <a href="https://wa.me/+243997721070" class="text-muted">+243 997 721 070</a>
                        </p>
                    </div>
                </li>
                <li class="d-flex m-3">
                    <span class="bi-envelope text-danger bi--2xl"></span>
                    <div class="ms-2">
                        <h6 class="fw-bold p-0 m-0 text-uppercase">
                            {{ __("Email") }}
                        </h6>
                        <p class="text-muted small">
                            <a href="mailto:kwiratuwe@gmail.com" class="text-muted">kwiratuwe@gmail.com</a>
                        </p>
                    </div>
                </li>
            </ul>
            </p>
        </div>
    </div>
</div>
@endsection
