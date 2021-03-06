<!-- Modal pour la modification -->
<!-- Modal -->
<button id="produitModife" role="button" data-bs-toggle="modal" data-bs-target="#produitAlterModal" hidden></button>
<button type="button" id="agentAffModal" role="button" data-bs-toggle="modal" data-bs-target="#employeAlterModal" hidden></button>
<button type="button" id="modalAff" role="button" data-bs-toggle="modal" data-bs-target="#serviceAlterModal" hidden></button>
<button type="button" id="agentAffModal" role="button" data-bs-toggle="modal" data-bs-target="#employeAlterModal" hidden></button>
<button id="produitCom" role="button" data-bs-toggle="modal" data-bs-target="#produitComModal" hidden></button>
@if ($prod ?? 0)
<div class="modal fade" id="produitAlterModal" tabindex="-1" aria-labelledby="produitAlterModal" aria-hidden="true">
    <div class="modal-dialog modal-lg  ">
        <form action="{{route('update.vehicule', [$produitCurrent->id])}}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modifModzalLabel">{{__("Modifier")}} <span class="text-uppercase">{{$produitCurrent->marque}}/{{$produitCurrent->model}}</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card shadow px-3">
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
                                    <div class="carousel-inner " role="listbox">
                                        <div class="carousel-item active">
                                            @php
                                            $img1 = '/storage/images/produits/'.$produitCurrent->file1;
                                            $img2 = '/storage/images/produits/'.$produitCurrent->file2;
                                            $img3 = '/storage/images/produits/'.$produitCurrent->file3;
                                            $img4 = '/storage/images/produits/'.$produitCurrent->file4;
                                            @endphp
                                            <img src="{{asset($img1)}}" class="img-fluid h-100" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        @if ($produitCurrent->file2)
                                        <div class="carousel-item">
                                            <img src="{{asset($img2)}}" class="img-fluid h-100" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        @endif
                                        @if ($produitCurrent->file3)
                                        <div class="carousel-item">
                                            <img src="{{asset($img3)}}" class="img-fluid h-100" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        @endif
                                        @if ($produitCurrent->file4)
                                        <div class="carousel-item">
                                            <img src="{{asset($img4)}}" class="img-fluid h-100" alt="Second slide">
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
                                        <input type="number" name="prix" class="form-control " value="{{$produitCurrent->prix}}">
                                    </div>
                                </div>
                                <div class="row mx-2">
                                    <div class="col-4">
                                        <label for="" class="form-label">
                                            {{__("Marque")}}
                                        </label>
                                    </div>
                                    <div class=" col-8">
                                        <input type="text" name="marque" class="form-control " value="{{$produitCurrent->marque}}">
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-4">
                                        <label for="" class="form-label">
                                            {{__("Modele")}}
                                        </label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="model" class="form-control " value="{{$produitCurrent->model}}">
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-4">
                                        <label for="" class="form-label">
                                            {{__("Couleur")}}
                                        </label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="couleur" class="form-control " value="{{$produitCurrent->couleur}}">
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
                                    <input type="text" name="emplacement" class="form-control " value="{{$produitCurrent->emplacement}}">
                                </div>
                            </div>
                            <div class="col-6 row">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Kilometrage")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="number" name="kilometrage" class="form-control " value="{{$produitCurrent->kilometrage}}">
                                </div>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-6 row">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Ann??e Fab")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="date" name="annee_fab" class="form-control " value="{{$produitCurrent->annee_fab}}">
                                </div>
                            </div>
                            <div class="row col-6">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Moteur")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="moteur" class="form-control " value="{{$produitCurrent->moteur}}">
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
                                    <select class="form-control " name="transmission" id="">
                                        <option value="{{$produitCurrent->transmission}}">{{$produitCurrent->transmission}}</option>
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
                                    <input type="text" name="carburateur" id="" class="form-control" value="{{$produitCurrent->carburateur}}">

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
                                    <input type="number" name="numchassis" class="form-control " value="{{$produitCurrent->numchassis}}">
                                </div>
                            </div>
                            <div class="row col-6">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("D??claration")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="declaration" class="form-control " value="{{$produitCurrent->declaration}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">{{__("Enregistrer")}}</button>
                    <a href="/supprimer-produit/{{$produitCurrent->id}}" class="btn btn-danger">{{__("Supprimer")}}</a>
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{__("Fermer")}}</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endif
@if ($prodcommnde ?? 0)
<div class="modal fade" id="produitComModal" tabindex="-1" aria-labelledby="produitComModal" aria-hidden="true">
    <div class="modal-dialog modal-lg  ">
        <form action="#" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AffComlLabel">{{__("Commande du client")}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card shadow px-3">
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
                                            $img1 = '/storage/images/produits/'.$produitCurrent->file1;
                                            $img2 = '/storage/images/produits/'.$produitCurrent->file2;
                                            $img3 = '/storage/images/produits/'.$produitCurrent->file3;
                                            $img4 = '/storage/images/produits/'.$produitCurrent->file4;
                                            @endphp
                                            <img src="{{asset($img1)}}" class="img-fluid h-100" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        @if ($produitCurrent->file2)
                                        <div class="carousel-item">
                                            <img src="{{asset($img2)}}" class="img-fluid h-100" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        @endif
                                        @if ($produitCurrent->file3)
                                        <div class="carousel-item">
                                            <img src="{{asset($img3)}}" class="img-fluid h-100" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        @endif
                                        @if ($produitCurrent->file4)
                                        <div class="carousel-item">
                                            <img src="{{asset($img4)}}" class="img-fluid h-100" alt="Second slide">
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
                                        <input type="number" name="prix" class="form-control " value="{{$produitCurrent->prix}}" disabled>
                                    </div>
                                </div>
                                <div class="row mx-2">
                                    <div class="col-4">
                                        <label for="" class="form-label">
                                            {{__("Marque")}}
                                        </label>
                                    </div>
                                    <div class=" col-8">
                                        <input type="text" name="marque" class="form-control " value="{{$produitCurrent->marque}}" disabled>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-4">
                                        <label for="" class="form-label">
                                            {{__("Modele")}}
                                        </label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="model" class="form-control " value="{{$produitCurrent->model}}" disabled>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-4">
                                        <label for="" class="form-label">
                                            {{__("Couleur")}}
                                        </label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="couleur" class="form-control " value="{{$produitCurrent->couleur}}" disabled>
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
                                    <input type="text" name="emplacement" class="form-control " value="{{$produitCurrent->emplacement}}" disabled>
                                </div>
                            </div>
                            <div class="col-6 row">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Kilometrage")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="number" name="kilometrage" class="form-control " value="{{$produitCurrent->kilometrage}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-6 row">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Ann??e Fab")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="date" name="annee_fab" class="form-control " value="{{$produitCurrent->annee_fab}}" disabled>
                                </div>
                            </div>
                            <div class="row col-6">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("Moteur")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="moteur" class="form-control " value="{{$produitCurrent->moteur}}" disabled>
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
                                    <select class="form-control " name="transmission" id="" disabled>
                                        <option value="{{$produitCurrent->transmission}}">{{$produitCurrent->transmission}}</option>
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
                                    <input type="text" class="form-control " name="carburateur" id="" value="{{$produitCurrent->carburateur}}" disabled>
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
                                    <input type="number" name="numchassis" class="form-control " value="{{$produitCurrent->numchassis}}" disabled>
                                </div>
                            </div>
                            <div class="row col-6">
                                <div class="col-4">
                                    <label for="" class="form-label">
                                        {{__("D??claration")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="declaration" class="form-control " value="{{$produitCurrent->declaration}}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endif
<div class="modal fade" id="serviceAddModal" tabindex="-1" aria-labelledby="serviceAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  ">
        <form action="/ajouter/service" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="serviceAddModalLabel">{{__("Ajouter un service")}}</h5>
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
                                <input type="text" class="form-control " name="titreService" id="titre">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 my-1">
                                <label for="titre" class="form-label">
                                    {{__("D??scription")}}
                                </label>
                            </div>
                            <div class="col-8 my-1">
                                <div class="form-group">
                                    <textarea class="form-control " name="descriptionService" id="description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mx-auto border-top my-3 pt-3">
                        <p><small>{{__("Traduction en anglais du service * Optionnelle")}}</small></p>
                        <div class="row">
                            <div class="col-2">
                                <label for="titre" class="form-label">
                                    {{__("Titre")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control " name="titreServiceUS" id="titre">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 my-1">
                                <label for="titre" class="form-label">
                                    {{__("D??scription")}}
                                </label>
                            </div>
                            <div class="col-8 my-1">
                                <div class="form-group">
                                    <textarea class="form-control " name="descriptionServiceUS" id="description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{__("Fermer")}}</button>
                    <button type="submit" class="btn btn-danger">{{__("Enregistrer")}}</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Modifier un produit -->
<div class="modal fade" id="serviceAlterModal" tabindex="-1" aria-labelledby="serviceAlterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  ">
        <form action="/update/service" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="serviceAlterModalLabel">{{__("Modifier un service")}}</h5>
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
                                <input type="text" class="form-control " name="titreService" value="{{ $serviceCurrent->titreService ?? 'rien'}}">
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
                                    <textarea id="my-textarea" class="form-control " name="descriptionService">
                                    {{ $serviceCurrent->descriptionService ?? 'rien'}}
                                    </textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 mx-auto">
                        <div class="row">
                            <div class="col-2">
                                <label for="titre" class="form-label">
                                    {{__("Titre")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control " name="titreServiceUS" value="{{ $serviceCurrent->titreService ?? 'rien'}}">
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
                                    <textarea id="my-textarea" class="form-control " name="descriptionService">
                                    {{ $serviceCurrent->descriptionServiceUS ?? 'rien'}}
                                    </textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <input type="text" name="id" value="{{ $serviceCurrent->id ?? 0}}" hidden>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{__("Fermer")}}</button>
                    <button type="submit" class="btn btn-danger">{{__("Enregistrer")}}</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ADD employ?? -->
<div class="modal fade" id="employeAddModal" tabindex="-1" aria-labelledby="employeAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="/ajoute/agent" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="employeAddModalLabel">{{__("Ajouter un employ??")}}</h5>
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
                                <input type="text" class="form-control " name="nom_agent">
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-4">
                                <label for="titre" class="form-label">
                                    {{__("Fonctions")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control " name="fonction">
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-4">
                                <label for="titre" class="form-label">
                                    {{__("E-mail")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <input type="email" class="form-control " name="email_agent">
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-4">
                                <label for="titre" class="form-label">
                                    {{__("Num??ro Tel")}}
                                </label>
                            </div>
                            <div class="col-8">
                                <input type="number" class="form-control " name="num_agent">
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
                                    <textarea class="form-control " name="adresse_agent" id=""></textarea>
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
                                <input type="file" name="file1" id="" class="form-control ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{__("Fermer")}}</button>
                    <button type="submit" class="btn btn-danger">{{__("Enregistrer")}}</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Alter employ?? -->
@if ($agentChange ?? 0)
<div class="modal fade" id="employeAlterModal" tabindex="-1" aria-labelledby="employ??AlterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl  ">
        <form action="/update-agent/{{ $agentChange->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="employeAlterModalLabel">{{__("Modifier un employ??")}}</h5>
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
                                    <input type="text" class="form-control " name="nom_agent" value="{{ $agentChange->nom_agent}}">
                                </div>
                            </div>
                            <div class="row my-1">
                                <div class="col-4">
                                    <label for="titre" class="form-label">
                                        {{__("Fonctions")}}
                                    </label>
                                </div>
                                <div class=" col-8">
                                    <input type="text" class="form-control " name="fonction" value="{{ $agentChange->fonction}}">
                                </div>
                            </div>
                            <div class="row my-1">
                                <div class="col-4">
                                    <label for="titre" class="form-label">
                                        {{__("E-mail")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="email" class="form-control " name="email_agent" value="{{ $agentChange->email_agent}}">
                                </div>
                            </div>
                            <div class="row my-1">
                                <div class="col-4">
                                    <label for="titre" class="form-label">
                                        {{__("Num??ro Tel")}}
                                    </label>
                                </div>
                                <div class="col-8">
                                    <input type="number" class="form-control " name="num_agent" value="{{ $agentChange->num_agent}}">
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
                                        <textarea class="form-control " name="adresse_agent" id="">
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
                                    <input type="file" name="file1" id="" class="form-control " value="value=" {{ $agentChange->image}}"">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 card -none p-0">
                            @php
                            $img = '/storage/images/agents/'.$agentChange->image;
                            @endphp
                            <img src="{{asset($img)}}" alt="photo agent" class="rounded d-inline-block img-responsive img-fluid h-100 " style="height: 20rem;background-position:top">
                        </div>
                    </div>
                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{__("Fermer")}}</button>
                    <button type="submit" class="btn btn-danger">{{__("Enregistrer")}}</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endif
<!-- Modal envoyer newslatter -->
<div class="modal fade" id="newslatter" tabindex="-1" aria-labelledby="newslatterLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="/sendnewslatter" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newslatterLabel">{{__("Envoyer un message ?? tous les abonn??s")}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="" class="form-label">Object</label>
                        <input type="text" class="form-control" name="object" id="" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">{{__("Nouveau vehicule Be-forward/Goma")}}</small>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="" rows="3"></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">{{ __("Piece(s) Jointe(s)")}}</label>
                        <input type="file" class="form-control" name="file[]" id="" placeholder="" aria-describedby="fileHelpId" multiple>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">{{__("Envoyer")}}</button>
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{__("Annuler")}}</button>
                </div>
            </div>
        </form>
    </div>
</div>
