@extends('layouts.admin')
@section('content')
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">

        <div class="aiz-titlebar text-left mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h3">@lang("Les commandes")</h1>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="{{ route('produits.all')}}" class="btn btn-danger">
                        <span>@lang("Nos produits")</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header row gutters-5">
                <div class="col text-center text-md-left">
                    <h5 class="mb-md-0 h6">@lang("Les commandes de produits")</h5>
                </div>
            </div>
            <div class="card-body">
                @if (!$commandes->count())
                <p class="text-center">@lang("Aucune commande pour l'instant")</p>
                @else
                <table class="table  mb-0">
                    <thead>
                        <th>
                            #
                        </th>
                        <th>{{__("Nom")}}</th>
                        <th>
                            {{__("E-mail")}}
                        </th>
                        <th>{{__("Marque/Model")}}</th>
                        <th>{{__("Prix")}}</th>
                        <th>
                            {{__("Status")}}
                        </th>
                        <th>{{__("Action")}}</th>
                    </thead>
                    <tbody class="text-muted">
                        @foreach ($commandes as $index=> $commande)
                        <tr class="text-center">
                            <td>{{$index+1}}</td>
                            <td>
                                <a href="/commande/view/{{$commande->code_prod}}" class="com">
                                    {{$commande->name}}
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="/commande/view/{{$commande->code_prod}}" class="com">
                                    <span class="d-block">
                                        {{ $commande->email}}
                                    </span>
                                    <sapan class="d-block small">{{$commande->numero}}</sapan>
                                </a>
                            </td>
                            <td>
                                <a href="/commande/view/{{$commande->code_prod}}" class="com">
                                    <span class="d-block">
                                        {{$commande->marque}}
                                    </span>
                                    <span class="d-block">
                                        {{$commande->model}}
                                    </span>
                                </a>
                            </td>
                            <td>
                                <a href="/commande/view/{{$commande->code_prod}}" class="com">
                                    {{$commande->prix}} USD
                                </a>
                            </td>
                            <td>
                                <button class="btn btn-outline-danger" type="button">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    <span class="">{{__("En entente...")}}</span>
                                </button>
                            </td>
                            <td>
                                <a href="{{ route('commande.accepte', [$commande->cmd_id])}}" class="btn btn-soft-danger">
                                    <span class="bi-cart-check-fill"></span>
                                    <span class="small">{{__("Accepter")}}</span>
                                </a>
                                <a href="{{ route('commande.annuler', [$commande->cmd_id])}}" class="btn btn-dark ">
                                    <span class="bi-cart-x-fill"></span>
                                    <span class="small">{{__("Annuler")}}</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
        <div class="card">
            <div class="card-header row gutters-5">
                <div class="col text-center text-md-left">
                    <h5 class="mb-md-0 h6">@lang("Liste de commande de produits accepte")</h5>
                </div>
            </div>
            <div class="card-body">
                @if (!$commandesaccepte->count())
                <p class="text-center">@lang("Aucune commande de produit deja accepte pour l'instant")</p>
                @else
                <table class="table  mb-0">
                    <thead>
                        <th>
                            #
                        </th>
                        <th>{{__("Nom")}}</th>
                        <th>
                            {{__("E-mail")}}
                        </th>
                        <th>{{__("Marque/Model")}}</th>
                        <th>{{__("Prix")}}</th>
                        <th>
                            {{__("Status")}}
                        </th>
                        <th>{{__("Action")}}</th>
                    </thead>
                    <tbody class="text-muted">
                        @foreach ($commandesaccepte as $index=> $commande)
                        <tr class="text-center">
                            <td>{{$index+1}}</td>
                            <td>
                                <a href="/commande/view/{{$commande->code_prod}}" class="com">
                                    {{$commande->name}}
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="/commande/view/{{$commande->code_prod}}" class="com">
                                    <span class="d-block">
                                        {{ $commande->email}}
                                    </span>
                                    <sapan class="d-block small">{{$commande->numero}}</sapan>
                                </a>
                            </td>
                            <td>
                                <a href="/commande/view/{{$commande->code_prod}}" class="com">
                                    <span class="d-block">
                                        {{$commande->marque}}
                                    </span>
                                    <span class="d-block">
                                        {{$commande->model}}
                                    </span>
                                </a>
                            </td>
                            <td>
                                <a href="/commande/view/{{$commande->code_prod}}" class="com">
                                    {{$commande->prix}} USD
                                </a>
                            </td>
                            <td>
                                <button class="btn btn-outline-danger" type="button">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    <span class="">{{__("En entente...")}}</span>
                                </button>
                            </td>
                            <td>
                                <a href="{{ route('commande.accepte', [$commande->cmd_id])}}" class="btn btn-soft-danger">
                                    <span class="bi-cart-check-fill"></span>
                                    <span class="small">{{__("Accepter")}}</span>
                                </a>
                                <a href="{{ route('commande.annuler', [$commande->cmd_id])}}" class="btn btn-dark ">
                                    <span class="bi-cart-x-fill"></span>
                                    <span class="small">{{__("Annuler")}}</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
        <div class="card">
            <div class="card-header row gutters-5">
                <div class="col text-center text-md-left">
                    <h5 class="mb-md-0 h6">@lang("Liste de commandes de produits annule")</h5>
                </div>
            </div>
            <div class="card-body">
                @if (!$commandesannuler->count())
                <p class="text-center">@lang("Aucune commande de produit deja annuller pour l'instant")</p>
                @else
                <table class="table  mb-0">
                    <thead>
                        <th>
                            #
                        </th>
                        <th>{{__("Nom")}}</th>
                        <th>
                            {{__("E-mail")}}
                        </th>
                        <th>{{__("Marque/Model")}}</th>
                        <th>{{__("Prix")}}</th>
                        <th>
                            {{__("Status")}}
                        </th>
                        <th>{{__("Action")}}</th>
                    </thead>
                    <tbody class="text-muted">
                        @foreach ($commandesannuler as $index=> $commande)
                        <tr class="text-center">
                            <td>{{$index+1}}</td>
                            <td>
                                <a href="/commande/view/{{$commande->code_prod}}" class="com">
                                    {{$commande->name}}
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="/commande/view/{{$commande->code_prod}}" class="com">
                                    <span class="d-block">
                                        {{ $commande->email}}
                                    </span>
                                    <sapan class="d-block small">{{$commande->numero}}</sapan>
                                </a>
                            </td>
                            <td>
                                <a href="/commande/view/{{$commande->code_prod}}" class="com">
                                    <span class="d-block">
                                        {{$commande->marque}}
                                    </span>
                                    <span class="d-block">
                                        {{$commande->model}}
                                    </span>
                                </a>
                            </td>
                            <td>
                                <a href="/commande/view/{{$commande->code_prod}}" class="com">
                                    {{$commande->prix}} USD
                                </a>
                            </td>
                            <td>
                                <button class="btn btn-outline-danger" type="button">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    <span class="">{{__("En entente...")}}</span>
                                </button>
                            </td>
                            <td>
                                <a href="{{ route('commande.accepte', [$commande->cmd_id])}}" class="btn btn-soft-danger px-1">
                                    <span class="bi-cart-check-fill"></span>
                                    <span class="small">{{__("Accepter")}}</span>
                                </a>
                                <a href="{{ route('commande.delete', [$commande->cmd_id])}}" class=" btn btn-dark ">
                                    <span class=" bi-cart-x-fill"></span>
                                    <span class="small">{{__("Supprimer")}}</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</div><!-- .aiz-main-content -->

@endsection
