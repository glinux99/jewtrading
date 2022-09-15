<script>
    $(document).ready(function() {
        var success = "{{ Session('alert-session') ?? 'false' }}";
        switch (success) {
            case "produit-save":
                AIZ.plugins.notify('success', "Le produit a ete ajoute avec success");
                break;
            case "produit-delete":
                AIZ.plugins.notify('success', "Le produit a ete supprime avec success");
                break;
            case "produit-update":
                AIZ.plugins.notify('success', "Le produit a ete mis a jour avec success");
                break;
            case "error":
                AIZ.plugins.notify('danger', "Ooups!, Echec de la requette!!!");
                break;
            case "error-produit":
                AIZ.plugins.notify('danger', "Ooups!, La quantite du stock est insufissant!");
                break;
            case "commande-valide":
                AIZ.plugins.notify('success', "La commande a ete valide!!!");
                break;
            case "commande-create":
                AIZ.plugins.notify('dark', "La commande a ete envoye avec success!!!");
                break;
            case "commande-accepte":
                AIZ.plugins.notify('dark', "La commande a ete accepte avec success!!!");
                break;
            case "commande-annuler":
                AIZ.plugins.notify('dark', "La commande a ete annule avec success!!!");
                break;
            case "commande-delete":
                AIZ.plugins.notify('danger', "La commande a ete supprime avec success!!!");
                break;


        }
        success = "{{ Session::put('alert-session', '')}}";
    });
</script>
