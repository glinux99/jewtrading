@extends('layouts.autres')
@section('titre')
@lang("Configuration")
@endsection
@section('button-add')
<a href="" class="btn btn-circle btn-info" data-target="#fournisseurs-modal" data-toggle="modal">
    <span>@lang("Ajouter un partenaire")</span>
</a>
@endsection
@section('titre-actuel')
@lang("Fournisseur")
@endsection
@section('url')
{{ route('partenaires.store')}}
@endsection
@section('url-update')
{{ route('partenaires.update')}}
@endsection
@section('delete-link')
delete-paternaire/
@endsection
@section('ajax-modif')
{{ route('partenaires.edit')}}
@endsection
@section('titre-modal')
@lang("Ajouter un Partenaire")
@endsection
