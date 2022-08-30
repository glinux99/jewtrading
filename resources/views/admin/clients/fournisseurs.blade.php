@extends('layouts.autres')
@section('titre')
@lang("Configuration")
@endsection
@section('button-add')
<a href="" class="btn btn-circle btn-info" data-target="#fournisseurs-modal" data-toggle="modal">
    <span>@lang("Ajouter un fournisseur")</span>
</a>
@endsection
@section('titre-actuel')
@lang("Fournisseur")
@endsection
@section('url')
{{ route('fournisseurs.store')}}
@endsection
@section('url-update')
{{ route('fournisseurs.update')}}
@endsection
@section('delete-link')
delete-fournisseur/
@endsection
@section('ajax-modif')
{{ route('fournisseurs.edit')}}
@endsection
@section('titre-modal')
@lang("Ajouter un Fournisseur")
@endsection
