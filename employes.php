<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <style>
            body, table, th, td{
              text-align: center;
            }

            table{
              display: flex;
              justify-content: center;
              padding-top: 1.5rem;
            }

            th{
              padding: 1rem;
            }
        </style>
        <title>Démo BDD - Employés</title>
    </head>
    <body>
      <p>Les employés et leurs compétences</p>
      <?php
        // connexion
        include_once("utils.php");
        $connexion = connect();

        if($connexion){
          // Faire la requête SQL
          $sql = "select matricule, nom, prenom FROM employes;";

          // Interroger la BDD
          $employes = query($connexion, $sql);

          // Afficher le résultat
          if($employes){
            include_once("fonctions.php");
            afficherEmployes($employes);
          }
        }
        // Déconnexion
        disconnect($connexion);
      ?>
      <a href="index.php" style="text-decoration:none;"><br> Accueil</a>
    </body>
