<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fininscription.css" rel="stylesheet">
    <title>Bienvenue !</title>
</head>
<body>

<header>
        <h1>Majesty</h1>
    </header><br>
    <div class="hautpage">
        <div class="hautpagecontenu">
       <?php
       $nom=$_POST['nom'];
       echo"<h1>Bienvenue " .$nom."!</h1><br>";
        ?>
        </div>
    
    </div>
    <br>

    <div class="class">
        <div class="bénéfices">
            <h2>Votre inscription au site de la boutique Majesty a été effectué avec succès !</h2>
            <h2>Vous pouvz maintenant profitez en tant que nouveau membre de :</>
            <ul>
                <li>-20% dans votre prochain panier</li>
                <li>Un bracelet offert</li>
            </ul>
            <br>

            <p>Profitez également des avantages offerts aux membres de Majesty :</p>
            <ul>
                <li>Réductions spécial membre</li>
                <li>Livraison gratuite à partir de 30 euros</li>
                <li>Livraison rapide</li>
                <li>Invitations gratuites au events Majest</li>
            </ul>
        </div>
    </div>
    <br>

    <div class="badepage">
        <p><a href="page-principale.html">Cliquez ici pour retourner à la page d'accueil </a></p>
    </div>

    <footer>
    <div class="contenufooter">
    <p class="itemfooter">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <div class="separateur">✧˖°. ⋆｡°✩</div>
    <p class="itemfooter">balbala</p>
    </div>
</footer>

    
</body>
</html>