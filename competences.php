<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Démo BDD - Compétences</title>
    </head>
    <body>
      <p>Toutes les compétences<br></p>
      <?php
        // connexion
        include_once("utils.php");
        $connexion = connect();

        if($connexion){
          // Faire la requête SQL
          $sql = "SELECT codeC, nomC FROM competences;";

          // Interroger la BDD
          $competences = query($connexion, $sql);

          // Afficher le résultat
            if($competences){
              include_once("fonctions.php");
              afficherCompetences($competences);
            }
          // Déconnexion
          disconnect($connexion);
        }
      ?>
      <a href="index.php"><br> Accueil</a>
    </body>