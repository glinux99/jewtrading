@section('titre-modal')
@lang("Ajouter un Client")
@endsection



@extends('layouts.autres')
@section('titre')
@lang("Configuration")
@endsection
@section('button-add')
<a href="" class="btn btn-circle btn-info" data-target="#fournisseurs-modal" data-toggle="modal">
    <span>@lang("Ajouter un client")</span>
</a>
@endsection
@section('titre-actuel')
@lang("Client")
@endsection
@section('url')
{{ route('clients.store')}}
@endsection
@section('url-update')
{{ route('clients.update')}}
@endsection
@section('delete-link')
delete-client/
@endsection
@section('ajax-modif')
{{ route('clients.edit')}}
@endsection
@section('titre-modal')
@lang("Ajouter un Client")
@endsection
