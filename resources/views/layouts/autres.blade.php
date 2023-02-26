@extends('layouts.app')
@section('content')
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">

        <div class="aiz-titlebar text-left mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h3">@yield('titre')</h1>
                </div>
                <div class="col-md-6 text-md-right">
                    @yield('button-add')
                </div>
            </div>
        </div>
        <button id="btnOpen" data-toggle="modal" data-target="#modif-modal" hidden></button>
        <button id="infoOpen" data-toggle="modal" data-target="#info-modal" hidden></button>
        <div class="card">
            <div class="card-header row gutters-5">
                <div class="col text-center text-md-left">
                    <h5 class="mb-md-0 h6">@yield('titre-actuel') @lang(" actuels")</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="row gutters-5">
                    @if (count($users))
                    @foreach ($users as $user)

                    <div class="col-auto w-140px w-lg-250px">
                        <div class="aiz-file-box">
                            <div class="dropdown-file">
                                <a class="dropdown-link" data-toggle="dropdown">
                                    <i class="la la-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <form action="@yield('ajax-modif')" method="post" class="infos">
                                        @csrf
                                        <input type="text" name="" id="id2" hidden value="{{ $user->membre_id}}">
                                        <button type="submit" class="dropdown-item confirm-alert">
                                            <i class="las la-info-circle mr-2"></i>
                                            <span>@lang("Details infos")</span>
                                        </button>
                                    </form>
                                    <form action="@yield('ajax-modif')" method="post" id="modif">
                                        @csrf
                                        <input type="text" name="" id="id" value="{{ $user->membre_id}}" hidden>
                                        <button type="submit" class="dropdown-item confirm-alert">
                                            <i class="las la-edit mr-2"></i>
                                            <span>@lang('Modifier')</span>
                                        </button>
                                    </form>
                                    <a href="javascript:void(0)" class="dropdown-item" onclick="copyUrl(this)" data-url="link">
                                        <i class="las la-clipboard mr-2"></i>
                                        <span>@lang('Copier le lien')</span>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item confirm-alert" data-href="@yield('delete-link'){{$user->membre_id}}" data-target="#delete-modal">
                                        <i class="las la-trash mr-2"></i>
                                        <span>@lang('Supprimer ce membre')</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card card-file aiz-uploader-select c-default" title="">
                                <div class="card-file-thumb">
                                    @if($user->images)
                                    <img src="{{ asset('storage/'.$user->images)}}" class="w-100">
                                    @else
                                    <img src="{{ asset('assets/img/default.png')}}" class="w-100">
                                    @endif
                                </div>
                                <div class="card-body ">
                                    <h6 class="d-flex">
                                        <span class="text-truncate title">{{ $user->name}} - {{ $user->type}}</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="card-body">
                        <p class="text-center">@lang("Aucune donnee")</p>
                    </div>
                    @endif
                </div>
                <div class="aiz-pagination mt-3">
                    <nav>
                        {{ $users->links()}}
                    </nav>

                </div>
            </div>
        </div>
    </div>
</div><!-- .aiz-main-content -->

<!-- Modals -->
<div id="info-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-right">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h6">Information</h5>
                <button type="button" class="close" data-dismiss="modal">
                </button>
            </div>
            <div class="modal-body c-scrollbar-light position-relative" id="info-modal-content2">
                <div class="c-preloader text-center absolute-center">
                    <i class="las la-spinner la-spin la-3x opacity-70"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modif-modal" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">Modification Agent</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form action="{{ route('admin.staff.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="text" name="id" id="idIn" hidden>
                    <p class="mt-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Nom')</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="@lang('Nom de l\'agent')">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Adresse E-mail')</label>
                                <input type="text" class="form-control" name="email" id="email" autocomplete="new-password" aria-describedby="helpId" placeholder="@lang('adresse email de l\'agent')">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Numero Tel /Whatsapp')</label>
                                <input type="text" class="form-control" name="numero" id="numero" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Adresse physique')</label>
                                <input type="text" class="form-control" name="adresse" id="adresse" aria-describedby="helpId">
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
                                <input type="text" class="form-control" name="site" id="site" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Lien facebook/Twitter')</label>
                                <input type="text" class="form-control" name="liens" id="liens" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                    </p>
                    <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                    <button type="submit" class="btn btn-primary mt-2 comfirm-link">@lang("Enregistrer")</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="delete-modal" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">@lang("Confirmation de suppression")</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1">@lang("Voulez-vous vraiment supprimer ce membre?")</p>
                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                <a href="" class="btn btn-primary mt-2 comfirm-link" id="supp" data-id="">@lang("Supprimer")</a>
            </div>
        </div>
    </div>
</div>
<div id="fournisseurs-modal" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">@yield('titre-modal')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form action="@yield('url')" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <p class="mt-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Nom')</label>
                                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="@lang('Nom de l\'agent')">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Adresse E-mail')</label>
                                <input type="text" class="form-control" name="email" id="" autocomplete="new-password" aria-describedby="helpId" placeholder="@lang('adresse email de l\'agent')">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Numero Tel /Whatsapp')</label>
                                <input type="text" class="form-control" name="numero" id="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Adresse physique')</label>
                                <input type="text" class="form-control" name="adresse" id="" aria-describedby="helpId">
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
                                <input type="text" class="form-control" name="site" id="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Lien facebook/Twitter')</label>
                                <input type="text" class="form-control" name="liens" id="" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                    </p>
                    <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                    <button type="submit" class="btn btn-primary mt-2 comfirm-link">@lang("Enregistrer")</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="delete-modal" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">@lang("Confirmation de suppression")</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1">@lang("Voulez-vous vraiment supprimer?")</p>
                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                <a href="" class="btn btn-primary mt-2 comfirm-link" id="supp" data-id="">@lang("Supprimer")</a>
            </div>
        </div>
    </div>
</div>
<!-- Mes scripts -->
<!-- <script>
    function imageDelete(el) {
        $('#supp').attr('href', `xxxx`);
    }
</script> -->
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script type="text/javascript">
    function copyUrl(e) {
        var url = $(e).data('url');
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(url).select();
        try {
            document.execCommand("copy");
            AIZ.plugins.notify('success', "@lang('Lien a ete copie en cache')");
        } catch (err) {
            AIZ.plugins.notify('danger', "@lang('Oooh!, desole, le lien ne peut etre copie')");
        }
        $temp.remove();
    }

    function sort_uploads(el) {
        $('#sort_uploads').submit();
    }
</script>

<script>
    $(document).ready(function($) {
        $('#modif').on('click', function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            console.log(id);
            $urls = $(this).attr("action");
            // ajax
            $.ajax({
                type: "POST",
                url: $urls,
                data: {
                    id: $(this).find('#id').val()
                },
                dataType: 'json',
                success: function(res) {
                    // $('#jan_plan').val(res.jan);
                    $('#btnOpen').trigger('click');
                    $('#name').val(res.name);
                    $('#email').val(res.email);
                    $('#numero').val(res.numero);
                    $('#liens').val(res.liens);
                    $('#site').val(res.site);
                    $('#idIn').val(res.membre_id);
                    console.log(res.name);
                }
            });
        });
        $('.infos').on('click', function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $urls = $(this).attr("action");
            // ajax
            $.ajax({
                type: "POST",
                url: $urls,
                data: {
                    id: $(this).find('#id2').val()
                },
                dataType: 'json',
                success: function(res) {
                    // $('#jan_plan').val(res.jan);
                    $('#infoOpen').trigger('click');
                    $('#info-modal-content2').html(`
                        <div class="c-preloader text-center">
                        <div class="col-12 card-user">
                        <div class="image">
                            <img class="w-100" src="https://infocongo.net/wp-content/uploads/2021/12/goma-intacte.jpg" alt="..." />
                        </div>
                        <div class="content">
                            <div class="author">
                                <style>
                                    .avatar:hover {
                                        transform: scale(1.2);
                                        transition: transform 1s 0s ease;
                                    }
                                </style>
                                <a href="{{ asset(Session('picprofile'))}}">
                                    <img id="img" class="avatar border-gray" src="" alt="Profile" />
                                    <h4 class="title text-center"><span id="titre"></span><br />
                                    <span id="infosite"></span><br>
                                        <br><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                    </h4>
                                </a>
                            </div>
                            <div class="row">
                              <div class="col-md-4">  @lang("Email:")<br> <span id="infoemail"></span><br></div>
                              <div class="col-md-4">  @lang("Numero:") <br><span id="infonumero"></span><br></div>
                              <div class="col-md-4 text-center">  @lang("Facebook/Twitter:")<br><span id="infoliens"></span><br></div>



                            </div>
                        </div>
                        <hr>
                        <div class="text-center py-3">
                            {{__("Profile design")}} {{Config("app.name")}}
                        </div>
                    </div>
                        </div>
                        `);

                    $('#titre').text(res.name);
                    $('#infoemail').text(res.email);
                    $('#infonumero').text(res.numero);
                    $('#infoliens').text(res.liens);
                    $('#infosite').text(res.site);
                    $('#idIn').text(res.membre_id);
                    if (res.images == null) var img = "{{ asset('assets/img/default.png')}}";
                    else var img = "storage/" + res.images;
                    if (res.email == null) $('#infoemail').remove();
                    if (res.numero == null) $('#infonumero').remove();
                    if (res.liens == null) $('#infoliens').remove();
                    if (res.site == null) $('#infosite').remove();
                    $('#img').attr('src', img);
                    console.log(res.name);
                }
            });
        });
    })
</script>
@endsection
