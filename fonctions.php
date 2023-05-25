<?php
function afficherCompetences($competences){
  echo "<table>";
  echo "<tr><th>Code</th><th>Conpétence</th></tr>";
    foreach($competences as $c){
      echo "<tr><td>".$c['codeC']."</td><td>".$c['nomC']."</td></tr>";
    }
    echo "</table>";
}

function afficherEmployes($employes){
  echo "<table>";
  echo "<tr><th>Matricule</th><th>Nom</th><th>Prenom</th><th></th></tr>";
    foreach($employes as $e){
      echo "<tr><td>".$e['matricule']."</td>";
      echo "<td>".$e['nom']."</td>";
      echo "<td>".$e['prenom']."</td>";
      echo "<td><form action='employe.php' method='post'>";
      echo "<input type='hidden' name='matricule' value='".$e['matricule']."'>";
      echo "<input type='hidden' name='' value=''>";
      echo "<br>";
      echo "<input type='submit' name='' value='Compétences'> </form>";
      echo "</td></tr>";
    }
    echo "</table>";
}

function afficherEmploye($employe){
  echo '<table>';
  echo '<tr><th>Code compétence</th><th>Compétence</th></tr>';
    foreach($employe as $emp){
      echo '<td>'.$emp["codeC"].'</td>';
      echo '<td>'.$emp["nomC"].'</td></tr>';
    }
    echo '</table>';
}


?>
