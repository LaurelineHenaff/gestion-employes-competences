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
            margin-top: 1.5rem;
            padding: 1rem;
          }

          th{
            padding: 1rem;
          }
          
        </style>
        <title>Démo BDD - Employé</title>
    </head>
    <body>
      <?php
        if(isset($_POST['matricule'])){
          $matricule = $_POST['matricule'];

          // Connexion
          include_once("utils.php");
          $connexion = connect();

          if($connexion){
            // Faire la requête SQL
            $sql = 'SELECT competences.codeC, nomC FROM avoir, competences
            WHERE avoir.matricule = "'.$matricule.'" AND avoir.codeC = competences.codeC;';

            // Executer la requête
            $emp = query($connexion, $sql);

            // Afficher le résultat
            echo "Les competences de l'employé de matricule ".$matricule. " sont :";
            echo "<br><br>";
              include_once('fonctions.php');
              afficherEmploye($emp);


            // Déconnexion
            disconnect($connexion);
          }
        }
      ?>
      <a href="employes.php" style="text-decoration:none;"><br> Employés</a>
    </body>
</html>
