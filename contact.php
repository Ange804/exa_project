<?php
session_start();
include "connexion.php";

// Vérifiez si un message d'administrateur est présent
$message = "";
if (isset($_SESSION['admin_message'])) {
    $message = $_SESSION['admin_message'];
    unset($_SESSION['admin_message']); // Supprimez le message après l'affichage
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url(photo_exo.jpg); /* Image de fond */
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Assure que le footer est en bas */
            align-items: center; /* Centre le contenu horizontalement */
        }

        .navbar {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: transparent; /* Pas de fond */
        }

        .logo {
            color: #4CAF50;
            font-size: 30px;
        }

        .menu {
            margin-right: 20px;
        }

        ul {
            display: flex;
            list-style: none;
        }

        ul li {
            margin-left: 30px;
        }

        ul li a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
            transition: color 0.4s ease-in-out;
            padding: 10px 15px; /* Espacement interne autour des liens */
            border-radius: 3px; /* Coins arrondis pour les liens */
        }

        ul li a:hover {
            background-color: #4CAF50; /* Couleur de fond au survol */
            color: white; /* Couleur du texte au survol */
        }

        header {
            text-align: center;
            padding: 20px;
            color: white; /* Couleur du texte de l'en-tête */
        }

        #form {
            background: rgba(255, 255, 255, 0.7); /* Fond semi-transparent */
            backdrop-filter: blur(10px); /* Effet de flou en arrière-plan */
            padding: 20px;
            border-radius: 5px; /* Coins arrondis */
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.3); /* Ombre plus prononcée */
            margin: 20px;
            width: 300px; /* Largeur fixe pour le formulaire */
        }

        label {
            font-weight: bold; /* Texte des labels en gras */
            margin-top: 10px; /* Espacement au-dessus des labels */
            color: #4CAF50; /* Couleur des labels */
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%; /* Largeur complète */
            padding: 10px; /* Espacement interne */
            margin-top: 5px; /* Espacement au-dessus des champs */
            border: 1px solid rgba(0, 0, 0, 0.2); /* Bordure légère */
            border-radius: 3px; /* Coins arrondis */
            background: rgba(255, 255, 255, 0.9); /* Fond semi-transparent pour les champs */
            color: #333; /* Couleur du texte */
        }

        #butt {
            display: flex;
            justify-content: center; /* Centre le bouton */
            margin-top: 10px; /* Espacement au-dessus du bouton */
        }

        button {
            background-color: #4CAF50; /* Couleur du bouton */
            color: white; /* Couleur du texte du bouton */
            border: none; /* Pas de bordure */
            padding: 10px 20px; /* Espacement interne du bouton */
            border-radius: 5px; /* Coins arrondis */
            cursor: pointer; /* Curseur pointer au survol */
            transition: background-color 0.3s; /* Transition douce */
        }

        button:hover {
            background-color: #45a049; /* Couleur au survol */
        }

        footer {
            background-color: #28a745; /* Couleur de fond verte */
            text-align: center;
            padding: 20px;
            margin-top: auto; /* Assure que le footer reste en bas */
            width: 100%; /* Largeur complète */
        }

        footer p {
            color: white; /* Couleur du texte du footer */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h2 class="logo">ExEtaT</h2>
        <div class="menu">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="pubaf.php">Publication</a></li>
                <li><a href="commentaires.php">Commentaires</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>

    <header>
        <h1>Contact</h1>
    </header>
    
    <center>
        <form action="" method="POST" id='nameform'>
            <div id="form">
                <label for="num">Numéro</label><br>
                <input type="text" name="nume" pattern="\+[0-9]*"><br>
                
                <label for="nomm">Nom</label><br>
                <input type="text" name="nommm" required pattern="[A-Za-z\s]{2,20}"><br>
                
                <label for="pren">Prénom</label><br>
                <input type="text" name="preno" pattern="[A-Za-z\s]{2,20}"><br>
                
                <label for="mail">Email</label><br>
                <input type="email" name="maill"><br>
                
                <label for="mes">Message</label><br>
                <textarea name="messa" id="me" cols="30" rows="4" pattern="[A-Za-z\s]{2,20}"></textarea>
            </div>
            <div id="butt">
                <button type="submit" name="env" value="valider">Valider</button>
            </div>
        </form>
    </center>

    <footer>
        <p>&copy; 2024 ExEtaT. Tous droits réservés.</p>
    </footer>
</body>
<?php
include "connexion.php";
if (isset($_POST["env"])) {
    $recupnumero = $_POST["nume"];
    $recupnom = $_POST["nommm"];
    $recupprenom = $_POST["preno"];
    $recupemail = $_POST["maill"];
    $recupmessage = $_POST["messa"];
    $insertconta = "INSERT INTO contact(numero,nom,prenom,email,Messages) VALUES ('$recupnumero', '$recupnom','$recupprenom','$recupemail','$recupmessage')";
    $bdd->exec($insertconta);
    header("location: contaaffi.php");
}
?>
</html>