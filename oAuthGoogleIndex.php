<?php 
    //récupération des paramètres pour les chaînes de requête endpoind
    require('config.php');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name=viewport content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Test Api Withings</title>
    </head>
    <body>
        <h1>Connexion</h1>

        <!--google-->
        <p>
            <a href="https://accounts.google.com/o/oauth2/v2/auth?scope=email&access_type=online&response_type=code
            &redirect_uri=<?= urldecode('http://localhost/test_api_withings/connect.php')?>&client_id=<?= GOOGLE_ID ?>">Se connecter via google !</a>
        </p>
    </body>
</html>