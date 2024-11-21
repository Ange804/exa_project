<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url('photo_exo.jpg'); /* Image de fond */
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Assure que le footer est en bas */
        }

        .navbar {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: transparent; /* Pas de fond */
        }

        .icon {
            flex: 1;
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

        .main {
            background: rgba(255, 255, 255, 0.8); /* Fond semi-transparent */
            backdrop-filter: blur(10px); /* Effet de flou */
            border-radius: 5px;
            margin: 20px auto; /* Centrer le conteneur */
            padding: 20px;
            max-width: 900px; /* Largeur maximale réduite */
            width: 1000%; /* Largeur relative */
        }

        header {
            text-align: center;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4CAF50; /* Couleur d'en-tête */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; /* Couleur alternée pour les lignes */
        }

        tr:hover {
            background-color: #ddd; /* Couleur au survol */
        }

        a {
            color: #4CAF50; /* Couleur des liens dans le tableau */
            text-decoration: none;
        }

        a:hover {
            text-decoration: none; /* Souligner au survol */
        }

        footer {
            background-color: #28a745; /* Couleur de fond unique (vert) */
            text-align: center;
            padding: 20px;
            margin-top: auto; /* Assure que le footer reste en bas */
        }

        footer p {
            color: white; /* Couleur du texte du footer */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="icon">
            <h2 class="logo">ExEtaT</h2>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="inscription.php">Résultats</a></li>
                <li><a href="pubaf.php">Publication</a></li>
                <li><a href="inscription.php">Résultats</a></li>
                <li><a href="commentaires.php">Commentaires</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>

    <div class="main">
        <header>
            <h1>Les Publications</h1>
        </header>  
        <table>
            <tr>
                <th>Contenu</th>
                <th>Date de Publication</th>
            </tr>
            <?php
            include "connexion.php";
            $affichagepub = $bdd->query("SELECT * FROM publication");
            while($datarecup = $affichagepub->fetch()) {
            ?>
            <tr>
                <td><?php echo htmlspecialchars($datarecup["contenu"]); ?></td>
                <td><?php echo htmlspecialchars($datarecup["datepub"]); ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>

    <footer>
        <p>&copy; 2024 ExEtaT. Tous droits réservés.</p>
    </footer>
</body>
</html>