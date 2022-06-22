@extends('layouts.adminLH')
@section('title')
{{ __("Administration  | Jews Trading")}}
@endsection
@section('body')
@if($affprod ?? '')
<div class="container card my-4 py-4 shadow">
    <h5 class="text-dark fw-bolder  border-bottom border-2 py-2">{{__("Produit")}}@if (!count($produits)) <span class="text-muted">({{__("Aucun produit pour l'instant")}})</span>@endif</h5>
    <div>
        <a href="/ajouter/produit" class="btn btn-danger">{{__("Ajouter un vehicule")}} <span class="bi-truck"></span></a>
    </div>
    @if (count($produits))
    <div class="container mt-4">
        <table id="dataTable" class="table table-striped table-hover ">
            <thead>
                <tr>
                    <th>Model</th>
                    <th>Marque</th>
                    <th>Couleur</th>
                    <th>Prix</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produits as $produit)
                <tr>
                    <td>
                        {{$produit->model}}
                    </td>
                    <td>
                        {{$produit->marque}}
                    </td>
                    <td>
                        <input type="color" name="" id="" value="{{$produit->couleur}}" disabled>
                    </td>
                    <td>
                        {{$produit->prix}}
                    </td>
                    <td>
                        <a href="/modifier/produit/{{$produit->id}}" class="btn btn-primary mx-1"> <span class="ms-1 bi-pencil-square float-end"></span><span class="ms-1 bi-trash float-end text-danger"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endif
@if ($affserv ?? '')
<div class="container card my-4 py-4 shadow">
    <h5 class="text-dark fw-bolder  border-bottom border-2 py-2">{{__("Service")}} @if(!count($services)) <span class="text-muted">({{__("Aucun service pour l'instant")}})</span>@endif</h5>
    <div>
        <a href="#" class="btn btn-danger" role="button" data-bs-toggle="modal" data-bs-target="#serviceAddModal">{{__("Ajouter un service")}}</a>
    </div>
    @if (count($services))
    <div class="container mt-4">
        <table id="dataTable" class="table table-striped table-hover table-sm  table-responsive">
            <thead>
                <tr>
                    <th class="col-3">{{__("Titre")}}</th>
                    <th class="col-6">{{__("Description")}}</th>
                    <th class="col-6">{{__("Action")}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $serv)
                <tr>
                    <td>
                        {{ $serv->titreService }}
                    </td>
                    <td>
                        {{ $serv->descriptionService}}
                    </td>
                    <td class="modalButton">
                        <a href="/modifier/service/{{ $serv->id}}" class="btn btn-primary my-1 mx-auto"><span class="ms-1 bi-pencil-square float-end"></span></a>
                        <a href="/supprimer/service/{{ $serv->id}}" class="btn btn-danger mx-auto my-1"><span class=" ms-1 bi-trash float-end"></span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endif
@if ($agents ?? '')
<div class="container card my-4 py-4 shadow">
    <h5 class="text-dark fw-bolder  border-bottom border-2 py-2">{{__("Agent")}}@if (!count($agents))
        <span class="text-muted">({{__("Aucun agent enregistré pour l'instant")}})</span>
        @endif
    </h5>
    <div>
        <a href="#" class="btn btn-danger" role="button" data-bs-toggle="modal" data-bs-target="#employeAddModal">Ajouter un agent</a>
    </div>
    @if (count($agents))
    <div class="container mt-4">
        <table id="dataTable" class="table table-striped table-hover table-sm  table-responsive">
            <thead>
                <tr class="text-center">
                    <th>{{__("Noms")}}</th>
                    <th>{{__("Numéro")}}</th>
                    <th>{{__("Fonctions")}}</th>
                    <th>{{__("E-mail")}}</th>
                    <th>{{__("Numero")}}</th>
                    <th>{{__("Adresse")}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($agents as $agent)
                <tr>
                    <td>
                        {{ $agent->nom_agent }}
                    </td>
                    <td>
                        {{ $agent->num_agent}}
                    </td>
                    <td>
                        {{ $agent->email_agent}}
                    </td>
                    <td>
                        {{ $agent->adresse_agent}}
                    </td>
                    <td>
                        {{$agent->fonction}}
                    </td>
                    <td class="modalButton">
                        <a href="/modal-update-agent/{{ $agent->id}}" class="btn btn-primary my-1 mx-auto"><span class="ms-1 bi-pencil-square float-end"></span></a>
                        <a href="/delete-agent/{{ $agent->id}}" class="btn btn-danger mx-auto my-1"><span class=" ms-1 bi-trash float-end"></span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endif
@endsection
