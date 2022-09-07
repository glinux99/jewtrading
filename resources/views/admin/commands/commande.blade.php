@extends('layouts.admin')
@section('content')
<div class="container card my-4 py-4 shadow">
    <div class="row border-bottom border-2">
        <div class="col-md-6">
            <h5 class="text-dark fw-bolder  py-2">{{__("Nos commandes")}} @if (!count($commandes) ?? 0) <smalll class="text-muted h6">({{__("Pas de commande")}})</smalll>@endif</h5>
        </div>
    </div>
    <div class=" mx-1">
        @if (count($commandes) ?? 0)
        <div class="my-2">
            <table class="table table-hover table-responsive table-striped table-sm">
                <thead class="text-center">
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
                                {{$commande->nom_cli}}
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="/commande/view/{{$commande->code_prod}}" class="com">
                                <span class="d-block">
                                    {{ $commande->email_Cli}}
                                </span>
                                <sapan class="d-block small">{{$commande->num_cli}}</sapan>
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
                            @if ($commande->confirme == "0")
                            <button class="btn btn-outline-warning" type="button">
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                <span class="sr-only">{{__("En entente...")}}</span>
                            </button>
                            @elseif($commande->confirme == "1")
                            <button class="btn btn-outline-success" type="button">
                                <span class="bi-check2-all"></span><span>{{__("Checked...")}}</span>
                            </button>
                            @else
                            <button class="btn btn-outline-danger" type="button">
                                <span class="bi-x-circle-fill text-danger ps-3"></span>
                                <span class="pe-3">{{__("Anuller..")}}</span>
                            </button>
                            @endif
                        </td>
                        <td>
                            @if ($commande->confirme!="1")
                            <a href="/accepte/commande/{{$commande->cmd_id}}" class="btn btn-success">
                                <span class="bi-cart-check-fill"></span>
                                <span class="small">{{__("Accepter")}}</span>
                            </a>
                            @if ($commande->confirme!="2")
                            <a href="/annule/commande/{{$commande->cmd_id}}" class="btn btn-danger ">
                                <span class="bi-cart-x-fill"></span>
                                <span class="small">{{__("Annuler")}}</span>
                            </a>
                            @endif
                            @else
                            <a href="/annule/commande/{{$commande->cmd_id}}" class="btn btn-danger ">
                                <span class="bi-cart-x-fill"></span>
                                <span class="small">{{__("Annuler")}}</span>
                            </a>
                            <a href="/delete/commande/{{$commande->cmd_id}}" class="btn btn-dark ">
                                <span class="bi-cart-x-fill"></span>
                                <span class="small">{{__("Supprimer")}}</span>
                            </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
@endsection
