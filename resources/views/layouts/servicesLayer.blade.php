<div class="services">
    <h2 class="text-center fw-bolder py-md-5">
        {{__("Nous fournissons les meilleurs services")}}
    </h2>
    <div class="row w-100 d-flex justify-content-center">
        @php
        if((session()->get('lang_code')=='en')){
        $titre="titreServiceUS";
        $desc ="descriptionServiceUS";
        }else{
        $titre="titreService";
        $desc ="descriptionService";
        }
        @endphp
        @foreach ($services as $service )
        <div class="col-md-4 m-2  rounded border-bottom border-danger border-5 bg-white shadow position-relative">
            <div class="card-header h5 text-center fw-bold bg-white">
                {{ $service->$titre}}
            </div>
            <div class="card-body ">
                <p class=" mb-5">
                    {{ $service->$desc}}
                </p>
                <button class="btn btn-danger d-block position-absolute bottom-0 mb-3 buttonIndex">Lire plus</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
