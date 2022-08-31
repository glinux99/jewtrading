@extends('layouts.pages')
@section('contenu')
<div class="bg-danger indexI ">
    <div class="cool" style="background-image: url('/assets/img/carIndex.png'),url('/assets/img/bgIndex.png'); background-repeat: no-repeat,no-repeat; background-position: center,center;
    background-size: 50% 70%, cover;
        min-height: 100vh; ">
        @include('layouts.navbarHome')
        <div class="container row">
            <h1>ERREUR 404</h1>
        </div>
    </div>
</div>
<section>
    <div class=" swiffy-slider slider-item-show6 slider-nav-outside slider-nav-white slider-nav-sm slider-nav-visible slider-nav-page slider-item-snapstart slider-nav-autoplay slider-nav-autopause slider-item-ratio-contain bg-white shadow-lg py-3 py-lg-4" data-slider-nav-autoplay-interval="4000">
        <ul class="slider-container">
            @php
            $images =['assets/img/beforward.png','assets/img/sbt.jpg','assets/img/beforward.png','assets/img/sbt.jpg','assets/img/beforward.png','assets/img/sbt.jpg','assets/img/beforward.png','assets/img/sbt.jpg'];
            @endphp
            @foreach ($images as $image)
            <li><img src="{{asset($image)}}" style="max-width: 100%;" alt="Second slide" class="d-inline-block" height="40"></li>
            @endforeach
        </ul>
    </div>
</section>
@endsection
