@extends( (Auth::user()->hasRole('admin')) ? 'layouts.pages' : 'layouts.admin')
@section('content')
<section class="main-content col-md-12 col-centered mx-auto">
    <div class="aiz-main-content">
        <div class="px-15px px-lg-25px">

            <div class="aiz-titlebar text-left mt-2 mb-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="h3">@lang("Configuration de mon profile")</h1>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <a href="{{route('profile')}}" class="btn btn-circle btn-danger">
                            <span>@lang("Mon profile")</span>
                        </a>
                    </div>
                </div>
            </div>

            <form action="{{ route('admin.staff.update.profile')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row gutters-5">
                        <div class="card col-md-12">
                            <div class="card-header row gutters-5">
                                <div class="col text-center text-md-left">
                                    <h5 class="mb-md-0 h6">@lang("Modifier mon profile")</h5>
                                </div>
                                <div class="float-right d-flex">
                                    <p class="mr-2 align-self-center">@lang("Recevoir les notifications")</p>
                                    <label class="aiz-switch aiz-switch-danger mb-0">
                                        <input type="checkbox" name="notificable">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="modal-body">
                                <input type="text" name="id" id="idIn" value="{{ Auth::id() }}" hidden>
                                <p class="mt-1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">@lang('Nom')</label>
                                            <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="@lang('nom')" value="{{ Auth::user()->name ?? 'Jews'}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">@lang('Adresse E-mail')</label>
                                            <input type="text" class="form-control" name="email" id="email" autocomplete="new-password" aria-describedby="helpId" placeholder="@lang('adresse email')" value="{{ Auth::user()->email ?? 'genesiskikimb@gmail.com'}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">@lang('poste')</label>
                                            <input type="text" class="form-control" name="poste" id="poste" aria-describedby="helpId" placeholder="@lang('mon poste')" value="{{ Auth::user()->poste ?? 'admin' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">@lang('Password')</label>
                                            <input type="password" class="form-control" name="password" id="password" autocomplete="new-password" aria-describedby="helpId" placeholder="@lang('************')">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">@lang('Numero Tel /Whatsapp')</label>
                                            <input type="text" class="form-control" name="numero" id="numero" aria-describedby="helpId" value="{{ Auth::user()->numero ?? '0970912428'}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">@lang('Adresse physique')</label>
                                            <input type="text" class="form-control" name="adresse" id="adresse" aria-describedby="helpId" value="{{ Auth::user()->adresse ?? 'Goma'}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">@lang('Images')</label>
                                            <input type="file" class="form-control" name="images[]" multiple>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">@lang('Autres documents')</label>
                                            <input type="file" class="form-control" name="documents[]" id="" aria-describedby="helpId">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">@lang('site web')</label>
                                            <input type="text" class="form-control" name="site" id="site" aria-describedby="helpId" value="www.jewstrading.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">@lang('Lien facebook/Twitter')</label>
                                            <input type="text" class="form-control" name="liens" id="liens" aria-describedby="helpId" value="{{ Auth::user()->facebook ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="btn-toolbar float-right mb-3" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group" role="group" aria-label="Second group">
                                <button type="submit" name="button" value="publish" class="btn btn-danger action-btn">@lang("Enregistrer")</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- .aiz-main-content -->
</section>
@endsection
