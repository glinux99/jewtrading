<div>
    @if(session('error')==='no_error')
    <div class="mt-2 alert alert-dismissible fade show bg-success col-lg-5 mx-auto" role="alert">
        <strong>{{ __("Success!") }}</strong>
        {{__("Traitement effectué avec success")}} <br>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif(session('error')==='one_thing_not_running')
    <div class="mt-2 alert alert-dismissible fade show bg-danger col-lg-5 mx-auto" role="alert">
        <strong>{{ __("ERREUR!") }}</strong>
        {{__("Nous ne pouvons pas satisfaire à votre requête car plusieurs erreurs ont été detectées")}} <br>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif(session('error')==='no_autorization')
    <div class="mt-2 alert alert-dismissible fade show bg-danger col-lg-5 mx-auto" role="alert">
        <strong>{{ __("ERREUR!") }}</strong>
        {{__("Vous n'avez pas d'autorisation pour acceder à ce service ou effectuer cette opération!!!")}} <br>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>
