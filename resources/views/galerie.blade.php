@extends('layouts.layoutHF')
@section('title') {{ __("Notre galerie avec Jew Trading")}} @endsection
@section('body')
@include('layouts.menuP')
<div class="galerie text-white pt-md-5 galerie-image" style="background: url({{asset('assets/imgs/bg1.jpg')}});">
    <h2 class="text-center fw-bolder py-md-3 display-6">
        Notre Galerie Photo
    </h2>
    <div class="text-white col-md-6 mx-auto text-center mb-md-3">
        Autour d'une galerie photographique en ligne, vous avez une vue générale de Jews trading votre plus
        grand partenaire dans le domaine d'automobile.
    </div>
    <div class="col-md-6 mx-auto d-flex my-1">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active btn-jew" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">SHOW ALL</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn-jew" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">EQUIPE</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn-jew" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">CLIENTS</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn-jew" id="pills-produit-tab" data-bs-toggle="pill" data-bs-target="#pills-produit" type="button" role="tab" aria-controls="pills-produit" aria-selected="false">PRODUITS</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn-jew" id="pills-other-tab" data-bs-toggle="pill" data-bs-target="#pills-other" type="button" role="tab" aria-controls="pills-other" aria-selected="false">AUTRES</button>
            </li>
        </ul>
    </div>
    @php
    $y=0;
    $galeries = ['assets/imgs/gal1.jpg','assets/imgs/gal2.jpg','assets/imgs/gal3.jpg','assets/imgs/gal4.jpg','assets/imgs/gal5.jpg','assets/imgs/gal6.jpg','assets/imgs/gal7.jpg',
    'assets/imgs/gal8.jpg','assets/imgs/gal9.jpg','assets/imgs/gal10.jpg','assets/imgs/gal11.jpg','assets/imgs/gal12.jpg','assets/imgs/gal13.jpg',
    'assets/imgs/gal14.jpg','assets/imgs/gal15.jpg','assets/imgs/gal16.jpg','assets/imgs/gal17.jpg','assets/imgs/gal18.jpg','assets/imgs/gal19.jpg',
    'assets/imgs/gal20.jpg','assets/imgs/gal21.jpg','assets/imgs/gal22.jpg'];
    @endphp
    <div class="col-md-10 mx-auto">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                @for($i = 0; $i < count($galeries)/3; $i++) @php $x=0; $w=3; if($y>=count($galeries)-3){ $w=count($galeries)-$y; } @endphp <div class="d-flex justify-content-center">
                        @while ($x<$w ) <div class="col-md-4 m-3">
                            <img src="{{asset($galeries[$y])}}" alt="" class="img-fluid">
                    </div>
                    @php
                    $x++;
                    $y++;
                    @endphp
                    @endwhile
            </div>
            @endfor
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            @for($i = 0, $y=0; $i <= 10; $i++) @php $x=0; $w=3; if($y>=10-3){ $w=10-$y; } @endphp <div class="d-flex justify-content-center">
                    @while ($x<$w ) <div class="col-md-4 m-3">
                        <img src="{{asset($galeries[$y])}}" alt="" class="img-fluid">
                </div>
                @php
                $x++;
                $y++;
                @endphp
                @endwhile
        </div>
        @endfor
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        @for($i = 0, $y=0; $i < 1; $i++) @php $x=0; $w=3; if($y>=10-3){ $w=10-$y; } @endphp <div class="d-flex justify-content-center">
                @while ($x<1 ) <div class="col-md-4 m-3">
                    <img src="{{asset($galeries[11])}}" alt="" class="img-fluid">
            </div>
            @php
            $x++;
            $y++;
            @endphp
            @endwhile
    </div>
    @endfor
</div>
<div class="tab-pane fade" id="pills-produit" role="tabpanel" aria-labelledby="pills-produit-tab">
    @for($i = 16, $y=16; $i < count($galeries); $i++) @php $x=0; $w=3; if($y>=count($galeries)-3){ $w=count($galeries)-$y; } @endphp <div class="d-flex justify-content-center">
            @while ($x<$w ) <div class="col-md-4 m-3">
                <img src="{{asset($galeries[$y])}}" alt="" class="img-fluid">
        </div>
        @php
        $x++;
        $y++;
        @endphp
        @endwhile
</div>
@endfor
</div>
<div class="tab-pane fade" id="pills-other" role="tabpanel" aria-labelledby="pills-other-tab">
    @for($i = 0, $y=10; $i < 5; $i++) @php $x=0; $w=3; if($y>=15-3){ $w=15-$y; } @endphp <div class="d-flex justify-content-center">
            @while ($x<$w ) <div class="col-md-4 m-3">
                <img src="{{asset($galeries[$y])}}" alt="" class="img-fluid">
        </div>
        @php
        $x++;
        $y++;
        @endphp
        @endwhile
</div>
@endfor
</div>
</div>
</div>
</div>
</div>
@endsection
