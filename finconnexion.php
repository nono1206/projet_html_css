<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Italianno&family=Volkhov:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <title>¨Connexion Réussie !</title>
    <link href="finconnexion.css" rel="stylesheet">
</head>
<body>

<header>
        <h1>Majesty</h1>
    </header>

<div class="container">
    <div class="connexion item">
        <div class="imageutilisateur">
            <img src="télécharger (17).jpg" alt="">
        </div>
        <div class="texteheader">
            <div class="item">
            <?php
            $nom=$_POST['nom'];
            echo "<h2>Ravie de vous revoir, ".$nom."!</h2><br>"
            ?>
            </div>
            
             <p class="poursuivre">Poursuivez votre exploration de la boutique <a href="page-principale.html">ici !</a></p>
        </div>
       
    </div>

</div>

<footer>
    <div class="contenufooter">
    <p class="itemfooter">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <div class="separateur">✧˖°. ⋆｡°✩</div>
    <p class="itemfooter">Blablablbalbalbala</p>
    </div>
</footer>


    
</body>
</html>