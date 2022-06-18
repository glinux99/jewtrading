<!DOCTYPE html>
<html>

<head>
    <title>JEW TRADING</title>
</head>

<body>
    <h1>COMMANDE -JEW TRADING</h1>
    <p> @if ($data['motif']=="accepter")
        {{__("Bonjour cher Client, nous vous informons que votre commande a été accepté et
        est en cours d'exécution. Pour plus d'information, veuillez nous contacter")}}
        @elseif ($data['motif']=='annuller')
        {{__("Bonjour cher Client, nous vous informons que votre commande a été annulé pour certaines raisons. Pour plus d'information, veuillez nous contacter")}}
        @endif
    </p>
</body>

</html>
