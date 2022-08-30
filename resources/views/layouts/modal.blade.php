<!-- Services Create-->
<div class="modal fade" id="serviceAddModal">
    <div class="modal-dialog modal-md  ">
        <form action="{{ route('service.store')}}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="serviceAddModalLabel">{{__("Ajouter un service")}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 mx-auto">
                        <div class="row">
                            <div class="col-2">
                                <label for="titre" class="form-label">
                                    {{__("Titre")}}
                                </label>
                            </div>
                            <div class="col-10">
                                <input type="text" class="form-control " name="titreFr" id="titre">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 my-1">
                                <label for="titre" class="form-label">
                                    {{__("Déscription")}}
                                </label>
                            </div>
                            <div class="col-10 my-1">
                                <div class="form-group">
                                    <textarea class="form-control " name="descriptionFr" id="description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mx-auto border-top my-3 pt-3">
                        <p><small>{{__("Traduction en anglais du service * Optionnelle")}}</small></p>
                        <div class="row">
                            <div class="col-2">
                                <label for="titre" class="form-label">
                                    {{__("Titre")}}
                                </label>
                            </div>
                            <div class="col-10">
                                <input type="text" class="form-control " name="titreUs" id="titre">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 my-1">
                                <label for="titre" class="form-label">
                                    {{__("Déscription")}}
                                </label>
                            </div>
                            <div class="col-10 my-1">
                                <div class="form-group">
                                    <textarea class="form-control " name="descriptionUs" id="description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark mt-2" data-dismiss="modal">@lang("Annuler")</button>
                    <button type="submit" class="btn btn-danger">{{__("Enregistrer")}}</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Service update -->
<button id="ServModal" type="button" data-toggle="modal" data-target="#ModifServModal" hidden></button>
<div class="modal fade" id="ModifServModal">
    <div class="modal-dialog modal-md  ">
        <form action="" method="post" id="form-modif-service">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModifServModalssssLabel">{{__("Ajouter un service")}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 mx-auto">
                        <div class="row">
                            <div class="col-2">
                                <label for="titre" class="form-label">
                                    {{__("Titre")}}
                                </label>
                            </div>
                            <div class="col-10">
                                <input type="text" class="form-control " name="titreFr" id="titreFr">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 my-1">
                                <label for="titre" class="form-label">
                                    {{__("Déscription")}}
                                </label>
                            </div>
                            <div class="col-10 my-1">
                                <div class="form-group">
                                    <textarea class="form-control " name="descriptionFr" id="descriptionFr"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mx-auto border-top my-3 pt-3">
                        <p><small>{{__("Traduction en anglais du service * Optionnelle")}}</small></p>
                        <div class="row">
                            <div class="col-2">
                                <label for="titre" class="form-label">
                                    {{__("Titre")}}
                                </label>
                            </div>
                            <div class="col-10">
                                <input type="text" class="form-control " name="titreUs" id="titreUs">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 my-1">
                                <label for="titre" class="form-label">
                                    {{__("Déscription")}}
                                </label>
                            </div>
                            <div class="col-10 my-1">
                                <div class="form-group">
                                    <textarea class="form-control " name="descriptionUs" id="descriptionUs"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark mt-2" data-dismiss="modal">@lang("Annuler")</button>
                    <button type="submit" class="btn btn-danger">{{__("Enregistrer")}}</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- agent -->
<div id="modif-modal" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">@lang("Modifier un agent")</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form action="{{ route('admin.staff.update')}}" method="post" enctype="multipart/form-data">
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
                                <label for="">@lang('poste')</label>
                                <input type="text" class="form-control" name="poste" id="poste" aria-describedby="helpId" placeholder="@lang('Nom de l\'agent')">
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
