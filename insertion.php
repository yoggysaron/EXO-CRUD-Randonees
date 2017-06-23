<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

  include ('connexion.php'); 

    $bdd->exec('INSERT INTO `hiking` (`id`, `name`, `difficulty`, `distance`, `duration`, `height_difference`) 
              VALUES (NULL, "Le tour des pentes de Grand Coude par les trous de Cissia", "difficile", "9.6", "05:30:00", "680"), 
                     (NULL, "Le grand tour de Grand Coude par le Bérénice de la Corymbus", "difficile", "18.8", "07:30:00", "1450"),
                     (NULL, "La montée au Morne Lavngevin depuis Grand Coude", "difficile", "10", "05:30:00", "1150"),
                     (NULL, "La boucle des trous de Cissia à Grand Coude", "facile", "5.1", "01:45:00", "250"),
                     (NULL, "Roche Plate depuis Grand Coude", "Moyen", "16", "06:00:00", "900")');



    echo "Hiking have been asigned ";

  ?>

  <a href="#"> Lien </a>
  <a href="#"> Lien </a>

  </body>
  </html>