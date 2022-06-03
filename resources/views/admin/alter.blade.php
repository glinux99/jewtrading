@extends('layouts.adminLH')
@section('title')
{{ __("Administration  | Jews Trading")}}
@endsection
@section('body')
@if($produit ?? '')
<div class="container">
    <h2 class="text-center text-white fw-bolder">{{__("Modifier un produit")}}</h2>
    <div class="container mt-4">
        <table id="dataTable" class="table table-striped table-hover ">
            <thead>
                <tr>
                    <th>Nom produit</th>
                    <th>Marque</th>
                    <th>Couleur</th>
                    <th>Prix</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Mercedes
                    </td>
                    <td>
                        Mercedes
                    </td>
                    <td>
                        Rouge
                    </td>
                    <td>
                        5000
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#modifModal">Modifier<span class="ms-1 bi-trash float-end"></span></button>
                        <button type="button" class="btn btn-danger mx-1" data-bs-toggle="modal" data-bs-target="#suppModal">Supprimer<span class="ms-1 bi-pencil-square float-end"></span>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endif
@if ($service ?? '')
<div class="container">
    <h2 class="text-center text-white fw-bolder">{{__("Modifier un service")}}</h2>
    <div class="container mt-4">
        <table id="dataTable" class="table table-striped table-hover table-sm  table-responsive">
            <thead>
                <tr>
                    <th class="col-3">Titre</th>
                    <th class="col-6">Description</th>
                    <th class="col-6">Action</th>
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
                        <a href="/modifier/service/{{ $serv->id}}" class="btn btn-primary my-1 mx-auto">Modifier<span class="ms-1 bi-pencil-square float-end"></span></a>
                        <a href="/supprimer_service/{{ $serv->id}}" class="btn btn-danger mx-auto my-1">Supprimer<span class=" ms-1 bi-trash float-end"></span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection
