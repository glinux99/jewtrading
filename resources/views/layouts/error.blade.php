<div>
    @if(session('error')==='no_error')
    <div class="mt-2 alert alert-dismissible fade show bg-danger col-lg-5 mx-auto shadow text-white" role="alert">
        <strong class="text-primary"><span class=" bi-check-all"></span>{{ __("Success!") }}</strong>
        {{__("Traitement effectué avec success ")}} <br>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif(session('error')==='client')
    <div class="mt-2 alert alert-dismissible fade show bg-white col-lg-5 mx-auto shadow text-dark" role="alert">
        <strong class="text-primary"><span class=" bi-check-all"></span>{{ __("Success!") }}</strong>
        {{__("Votre commande a été envoyée avec success")}} <br>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif(session('error')==='client_comment')
    <div class="mt-2 alert alert-dismissible fade show bg-white col-lg-5 mx-auto shadow text-dark" role="alert">
        <strong class="text-primary"><span class=" bi-check-all"></span>{{ __("Success!") }}</strong>
        {{__("Votre commentaire a été pris en compte")}} <br>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif(session('error')==='message')
    <div class="mt-2 alert alert-dismissible fade show bg-white col-lg-5 mx-auto shadow text-dark" role="alert">
        <strong class="text-primary"><span class=" bi-check-all"></span>{{ __("Success!") }}</strong>
        {{__("Votre message a été envoyé avec success")}} <br>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif(session('error')==='one_thing_not_running')
    <div class="mt-2 alert alert-dismissible fade show bg-danger col-lg-5 mx-auto shadow text-white" role="alert">
        <strong>{{ __("ERREUR!") }}</strong>
        {{__("Nous ne pouvons pas satisfaire à votre requête car plusieurs erreurs ont été detectées")}} <br>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif(session('error')==='no_autorization')
    <div class="mt-2 alert alert-dismissible fade show bg-danger col-lg-5 mx-auto shadow text-white" role="alert">
        <strong>{{ __("ERREUR!") }}</strong>
        {{__("Vous n'avez pas d'autorisation pour acceder à ce service ou effectuer cette opération!!!")}} <br>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>
