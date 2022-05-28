<div class="services">
    <h2 class="text-center fw-bolder py-md-5">
        {{__("Nous fournissons les meilleurs services")}}
    </h2>
    @php
    $services = array(
    array('title'=>'Importation des vehicules',
    'corps'=>"Nous important des vehicules de toutes marques et de vos reves"),
    array('title'=>"Ventes de pieces de rechanges en ligne",
    'corps'=>"L'entreprise Jews Trading facilite le client de faire l'achat en ligne de toutes pièces, huile
    moteur, huile de boite de
    toutes marques des véhicules tous d'origine japonaise."),
    array('title'=>"Location véhicule",
    'corps'=>"Nous prenons en locations des véhicules des bonne qualités et en bon état au public."),
    array('title'=>"Echange de vehicule",
    'corps'=>"Nous échangeons des véhicules à la demande de nos clients et selon des modalité bien respecter.
    "),
    );
    @endphp
    <div class="row w-100 d-flex justify-content-center">
        @foreach ($services as $service )
        <div class="col-md-4 m-2  rounded border-bottom border-danger border-5 bg-white shadow position-relative">
            <div class="card-header h5 text-center fw-bold bg-white">
                {{ $service['title']}}
            </div>
            <div class="card-body ">
                <p class=" mb-5">
                    {{ $service['corps']}}
                </p>
                <button class="btn btn-danger d-block position-absolute bottom-0 mb-3 buttonIndex">Lire plus</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
