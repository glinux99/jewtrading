@extends('layouts.layoutHF')
@section('title') {{ __("Notre galerie avec Jew Trading")}} @endsection
@section('body')
@include('layouts.menuP')
    <div class="galerie text-white mt-md-5 galerie-image" style="background: url({{asset('assets/imgs/bg1.jpg')}}">
        <h2 class="text-center fw-bolder py-md-3 display-6">
            Notre Galerie Photo
        </h2>
        <div class="text-muted col-md-6 mx-auto text-center mb-md-3">
                Autour d'une galerie photographique en ligne, vous avez une vue générale de Jews trading votre plus
                grand partenaire dans le domaine d'automobile.
        </div>
        <div class="col-md-6 mx-auto d-flex my-5">
            <button class="btn btn-jew mx-2 text-white "> SHOW ALL</button>
            <button class="btn btn-jew mx-2 text-white"> EQUIPE</button>
            <button class="btn btn-jew mx-2 text-white"> CLIENTS</button>
            <button class="btn btn-jew mx-2 text-white"> PRODUITS</button>
            <button class="btn btn-jew mx-2 text-white"> AUTRES</button>
        </div>
            @php
                $y=0;
                $galeries = ['assets/imgs/gal1.jpg','assets/imgs/gal2.jpg','assets/imgs/gal3.jpg','assets/imgs/gal4.jpg','assets/imgs/gal5.jpg','assets/imgs/gal7.jpg',
                'assets/imgs/gal8.jpg','assets/imgs/gal9.jpg','assets/imgs/gal10.jpg','assets/imgs/gal11.jpg','assets/imgs/gal12.jpg','assets/imgs/gal13.jpg',
                'assets/imgs/gal14.jpg','assets/imgs/gal15.jpg','assets/imgs/gal16.jpg','assets/imgs/gal17.jpg','assets/imgs/gal18.jpg','assets/imgs/gal19.jpg',
                'assets/imgs/gal20.jpg','assets/imgs/gal21.jpg','assets/imgs/gal22.jpg'];
            @endphp
            <div class="col-md-10 mx-auto">
                @for($i = 0; $i < count($galeries)/3; $i++)
                    @php
                    $x=0;
                @endphp
                    <div class="d-flex justify-content-center">
                    @while ($x<3)
                    <div class="col-md-4 m-3">
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
@endsection
