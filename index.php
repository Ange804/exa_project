<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "connexion.php"; ?>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">ExEtaT</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="pubaf.php">Publication</a></li>
                    <li><a href="commentaires.php">Commentaires</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <h1>Affichage des<br><span> résultats</span> à <br><span>l'exetat</span></h1>
            <p class="par">Découvrez vos résultats en cliquant sur ce lien en bas</p>
            <button class="cn"><a href="menu.php">Suivez-nous</a></button>
        </div>
    </div>
</body>
</html>