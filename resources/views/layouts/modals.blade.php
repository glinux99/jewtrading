<!-- Modal pour la modification -->
<!-- Modal -->
<button id="produitModife" role="button" data-bs-toggle="modal" data-bs-target="#produitAlterModal" hidden></button>
<button type="button" id="agentAffModal" role="button" data-bs-toggle="modal" data-bs-target="#employeAlterModal" hidden></button>
<button type="button" id="modalAff" role="button" data-bs-toggle="modal" data-bs-target="#serviceAlterModal" hidden></button>
<button type="button" id="agentAffModal" role="button" data-bs-toggle="modal" data-bs-target="#employeAlterModal" hidden></button>
@if ($produit ?? 0)
<div class="modal fade" id="produitAlterModal" tabindex="-1" aria-labelledby="produitAlterModal" aria-hidden="true">
    <div class="modal-dialog modal-lg  text-white">
        <form action="/update-vehicule/{{$produit->id}}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modifModalLabel">Modifier un vehicule</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card bg-card">
                        <div class="row">
                            <div class="col-6">
                                <div id="vehiculeCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-bs-target="#vehiculeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                                        @for ($x=1; $x<4; $x++) @if($produitCurrent->file.$x)
                                            <li data-bs-target="#vehiculeCarousel" data-bs-slide-to="{{$x}}" aria-label="Second slide"></li>
                                            @endif
                                            @endfor
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            @php
                                            $img1 = '/storage/images/produits'.$produitCurrent->file1;
                                            $img2 = '/storage/images/produits'.$produitCurrent->file2;
                                            $img3 = '/storage/images/produits'.$produitCurrent->file3;
                                            $img4 = '/storage/images/produits'.$produitCurrent->file4;
                                            @endphp
                                            <img src="{{asset($img1)}}" class="w-100 d-block" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        @if ($produitCurrent->file2)
                                        <div class="carousel-item">
                                            <img src="{{asset($img2)}}" class="w-100 d-block" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        @endif
                                        @if ($produitCurrent->file3)
                                        <div class="carousel-item">
                                            <img src="{{asset($img3)}}" class="w-100 d-block" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        @endif
                                        @if ($produitCurrent->file4)
                                        <div class="carousel-item">
                                            <img src="{{asset($img4)}}" class="w-100 d-block" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#vehiculeCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#vehiculeCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6 my-2">
                                <div class="row m-2">
                                    <div class="col-4">
                                        <label for="" class="form-label">
                                            {{__("Prix")}}
                                        </label>
                                    </div>
                                    <div class="col-8">
                                        <input type="number" name="prix" class="form-control bg-select" value="{{$produitCurrent->prix}}">
                                    </div>
                                </div>
                                <div class="row mx-2">
                                    <div class="col-4">
                                        <label for="" class="form-label">
                                            {{__("Marque")}}
                                        </label>
                                    </div>
                                    <div class=" col-8">
                                        <input type="text" name="marque" class="form-control bg-select" value="{{$produitCurrent->marque}}">
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-4">
                                        <label for="" class="form-label">
                                            {{__("Modele")}}
                                        </label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="model" class="form-control bg-select" value="{{$produitCurrent->model}}">
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-4">
                                        <label for="" class="form-label">
                                            {{__("Couleur")}}
                                        </label>
                                    </div>
                                    <div class="col-8">
                                        <input type="color" name="couleur" class="form-control bg-select" value="{{$produitCurrent->couleur}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-6 row">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Emplacement")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="emplencement" class="form-control bg-select" value="{{$produitCurrent->emplacement}}">
                                </div>
                            </div>
                            <div class="col-6 row">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Kilometrage")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="number" name="kilometrage" class="form-control bg-select" value="{{$produitCurrent->kilometrage}}">
                                </div>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-6 row">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Annee Fab")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="date" name="anneeFab" class="form-control bg-select" value="{{$produitCurrent->annee_fab}}">
                                </div>
                            </div>
                            <div class="row col-6">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Moteur")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="moteur" class="form-control bg-select" value="{{$produitCurrent->moteur}}">
                                </div>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="row col-6">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Transmission")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <select class="form-control bg-select" name="transmission" id="" value="{{$produitCurrent->transmission}}">
                                        <option value="Manuelle">Manuelle</option>
                                        <option value="Automatique">Automatique</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row col-6">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Carburateur")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <select class="form-control bg-select" name="carburateur" id="" value="{{$produitCurrent->carburateur}}">
                                        <option value="OTHER">{{__("Autres")}}</option>
                                        <option value="DIES">{{__("Diesel")}}</option>
                                        <option value="ELEC">{{__("Électrique")}}</option>
                                        <option value="GASO">{{__("Essence")}}</option>
                                        <option value="NGAS">{{__("Gaz naturel")}}</option>
                                        <option value="LPG">{{__("GPL")}}</option>
                                        <option value="HYBD">{{__("Hybride Diesel")}}</option>
                                        <option value="HYBDP">{{__("Hybride Diesel Plug-in")}}</option>
                                        <option value="HYBG">{{__("Hybride essence")}}</option>
                                        <option value="HYBGP">{{__("Hybride essence Plug-in")}}</option>
                                        <option value="HYDR">{{__("Hydrogène")}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="row col-6">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Num Chassis")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="number" name="numChassis" class="form-control bg-select">
                                </div>
                            </div>
                            <div class="row col-6">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Declaration")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="declaration" class="form-control bg-select" value="{{$produitCurrent->declaration}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn buttonAdd">{{__("Enregistrer")}}</button>
                    <a href="/supprimer-produit/{{$produit->id}}" class="btn btn-danger">{{__("Supprimer")}}</a>
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{__("Fermer")}}</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endif
<!-- Modal pour la suppression -->
<!-- <div class="modal fade" id="suppModal" tabindex="-1" aria-labelledby="suppModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  text-white">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="suppModalLabel">Modifier un vehicule</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card bg-card">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{asset('assets/imgs/carIndex.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-6 my-2">
                            <div class="row m-2">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Prix")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    5.000usd
                                </div>
                            </div>
                            <div class="row mx-2">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Marque")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    Mercedes
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Modele")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    Coupe
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Couleur")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    RED
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-md-5">
                        <div class="row my-1">
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Emplacement")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    KOREA
                                </div>
                            </div>
                            <div class="col-5 row">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Kilometrage")}}
                                    </label>
                                </div>
                                <div class="col-8 pe-auto">
                                    1200
                                </div>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Annee Fab")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    10992
                                </div>
                            </div>
                            <div class="row col-5">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Moteur")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    12cc
                                </div>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="row col-7">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Transmission")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    Manuelle
                                </div>
                            </div>
                            <div class="row col-5">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Carburateur")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    Diesel
                                </div>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="row col-7">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Num Chassis")}}
                                    </label>
                                </div>
                                <div class="col-8 d-flex">
                                    <spna class="me-auto">
                                        1223434531
                                    </spna>
                                </div>
                            </div>
                            <div class="row col-5">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Declaration")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    N/N
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{__("Fermer")}}</button>
                <button type="button" class="btn btn-danger">{{__("Supprimer")}}</button>
            </div>
        </div>
    </div>
</div> -->
<!-- Ajouter un service -->
<div class="modal fade" id="serviceAddModal" tabindex="-1" aria-labelledby="serviceAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  text-white">
        <form action="/ajoute_service" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="serviceAddModalLabel">Ajouter un service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 mx-auto">
                        <div class="row">
                            <div class="col-2">
                                <label for="titre" class="form-label">
                                    {{__("Titre")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control bg-select" name="titreService" id="titre">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 my-1">
                                <label for="titre" class="form-label">
                                    {{__("Description")}}
                                </label>
                            </div>
                            <div class="col-8 my-1">
                                <div class="form-group">
                                    <textarea class="form-control bg-select" name="descriptionService" rows="3" id="description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{__("Fermer")}}</button>
                    <button type="submit" class="btn buttonAdd">{{__("Enregistrer")}}</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Modifier un produit -->
<div class="modal fade" id="serviceAlterModal" tabindex="-1" aria-labelledby="serviceAlterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  text-white">
        <form action="/update-service" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="serviceAlterModalLabel">Modifier un service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 mx-auto">
                        <div class="row">
                            <div class="col-2">
                                <label for="titre" class="form-label">
                                    {{__("Titre")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control bg-select" name="titreService" value="{{ $serviceCurrent->titreService ?? 'rien'}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 my-1">
                                <label for="titre" class="form-label">
                                    {{__("Description")}}
                                </label>
                            </div>
                            <div class="col-8 my-1">
                                <div class="form-group">
                                    <textarea id="my-textarea" class="form-control bg-select" name="descriptionService" rows="3">
                                    {{ $serviceCurrent->descriptionService ?? 'rien'}}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="text" name="id" value="{{ $serviceCurrent->id ?? 0}}" hidden>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{__("Fermer")}}</button>
                    <button type="submit" class="btn buttonAdd">{{__("Enregistrer")}}</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ADD EMploye -->
<div class="modal fade" id="employeAddModal" tabindex="-1" aria-labelledby="employeAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  text-white">
        <form action="/ajoute_agent" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="employeAddModalLabel">{{__("Ajouter un employe")}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-10 mx-auto">
                        <div class="row my-1">
                            <div class="col-4">
                                <label for="titre" class="form-label">
                                    {{__("Noms")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control bg-select" name="nom_agent">
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-4">
                                <label for="titre" class="form-label">
                                    {{__("Fonctions")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control bg-select" name="fonction">
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-4">
                                <label for="titre" class="form-label">
                                    {{__("E-mail")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <input type="email" class="form-control bg-select" name="email_agent">
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-4">
                                <label for="titre" class="form-label">
                                    {{__("Numero Tel")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <input type="number" class="form-control bg-select" name="num_agent">
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-4">
                                <label for="titre" class="form-label">
                                    {{__("Adresse")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <textarea class="form-control bg-select" name="adresse_agent" id="" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-4">
                                <label for="titre" class="form-label">
                                    {{__("Photo")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <input type="file" name="file1" id="" class="form-control bg-select">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{__("Fermer")}}</button>
                    <button type="submit" class="btn buttonAdd">{{__("Enregistrer")}}</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Alter Employe -->
@if ($agentChange ?? 0)
<div class="modal fade" id="employeAlterModal" tabindex="-1" aria-labelledby="employeAlterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl  text-white">
        <form action="/update-agent/{{ $agentChange->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="employeAlterModalLabel">{{__("Modifier un employe")}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="row my-1">
                                <div class="col-4">
                                    <label for="titre" class="form-label">
                                        {{__("Noms")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control bg-select" name="nom_agent" value="{{ $agentChange->nom_agent}}">
                                </div>
                            </div>
                            <div class="row my-1">
                                <div class="col-4">
                                    <label for="titre" class="form-label">
                                        {{__("Fonctions")}}
                                    </label>
                                </div>
                                <div class=" col-8">
                                    <input type="text" class="form-control bg-select" name="fonction" value="{{ $agentChange->fonction}}">
                                </div>
                            </div>
                            <div class="row my-1">
                                <div class="col-4">
                                    <label for="titre" class="form-label">
                                        {{__("E-mail")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="email" class="form-control bg-select" name="email_agent" value="{{ $agentChange->email_agent}}">
                                </div>
                            </div>
                            <div class="row my-1">
                                <div class="col-4">
                                    <label for="titre" class="form-label">
                                        {{__("Numero Tel")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="number" class="form-control bg-select" name="num_agent" value="{{ $agentChange->num_agent}}">
                                </div>
                            </div>
                            <div class="row my-1">
                                <div class="col-4">
                                    <label for="titre" class="form-label">
                                        {{__("Adresse")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <textarea class="form-control bg-select" name="adresse_agent" id="" rows="3">
                                        {{ $agentChange->adresse_agent}}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-1">
                                <div class="col-4">
                                    <label for="titre" class="form-label">
                                        {{__("Photo")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="file" name="file1" id="" class="form-control bg-select" value="value=" {{ $agentChange->image}}"">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 card bg-card-none p-0">
                            @php
                            $img = '/storage/images/agents/'.$agentChange->image;
                            @endphp
                            <img src="{{asset($img)}}" alt="photo agent" class="rounded d-inline-block img-responsive" style="height: 20rem;background-position:top">
                        </div>
                    </div>
                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{__("Fermer")}}</button>
                    <button type="submit" class="btn buttonAdd">{{__("Enregistrer")}}</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endif
