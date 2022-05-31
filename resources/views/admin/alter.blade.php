@extends('layouts.adminLH')
@section('title')
{{ __("Administration  | Jews Trading")}}
@endsection
@section('body')
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
                        <button type="button" class="btn btn-primary mx-1">Modifier<span class="ms-1 bi-trash float-end"></span></button>
                        <button type="button" class="btn btn-danger mx-1">Supprimer<span class="ms-1 bi-pencil-square float-end"></span>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
