<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url(photo_exo.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Pour que le footer reste en bas */
            align-items: center; /* Centre le contenu horizontalement */
            overflow: hidden; /* Empêche le défilement */
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
        }

        #form {
            background: rgba(255, 255, 255, 0.5); /* Fond semi-transparent */
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
        textarea {
            width: 100%; /* Largeur complète */
            padding: 10px; /* Espacement interne */
            margin-top: 5px; /* Espacement au-dessus des champs */
            border: 1px solid rgba(0, 0, 0, 0.2); /* Bordure légère */
            border-radius: 3px; /* Coins arrondis */
            background: rgba(255, 255, 255, 0.7); /* Fond semi-transparent pour les champs */
            color: #333; /* Couleur du texte */
        }

        button {
            background-color: #4CAF50; /* Couleur du bouton */
            color: white; /* Couleur du texte du bouton */
            border: none; /* Pas de bordure */
            padding: 10px 15px; /* Espacement interne du bouton */
            border-radius: 2px; /* Coins arrondis */
            cursor: pointer; /* Curseur pointer au survol */
            margin-top: 10px; /* Espacement au-dessus du bouton */
            transition: background-color 0.3s; /* Transition douce */
        }

        button:hover {
            background-color: #45a049; /* Couleur au survol */
        }

        footer {
            background-color: #4CAF50; /* Couleur du footer */
            color: white;
            padding: 10px; /* Espacement interne */
            text-align: center;
            margin-top: auto; /* Pousse le footer en bas */
            width: 100%; /* Largeur complète */
        }

        footer p {
            margin: 0; /* Pas de marge pour le texte du footer */
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h2 class="logo">ExEtaT</h2>
        <div class="menu">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="inscription.php">Résultats</a></li>
                <li><a href="pubaf.php">Publication</a></li>
                <li><a href="commentaires.php">Commentaires</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
    <header>
        <h1>Découvrez Les Résultats De L'Exetat</h1>
    </header>
    <?php
    include "connexion.php";
    if (isset($_POST["env"])) {
        $recupte = $_POST["tex"];
        $recupau = $_POST["aut"];
        $insertcom = "INSERT INTO commentaires(texte, auteur) VALUES ('$recupte', '$recupau')";
        $bdd->exec($insertcom);
        header("location: comefi.php");
    }
    ?>
    <center>
        <form action="" method="POST">
            <div id="form">
                <label for="texi">Texte</label><br><br>
                <textarea name="tex" id=""></textarea>
                <label for="aute">Auteur</label><br><br>
                <input type="text" name="aut"><br><br>
                <div id="butt">
                    <button type="submit" name="env">Envoyer</button>
                </div>
            </div>
        </form>
    </center>
    <footer>
        <p>&copy; 2024 ExEtaT. Tous droits réservés.</p>
    </footer>
</body>
</html>