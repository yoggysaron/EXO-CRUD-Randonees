

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <h1>Liste des randonnées</h1>
   
    <!-- A afficher plus tard avec une <table> -->

      <?php 

      include ('connexion.php'); 

      $reponse = $bdd->query('SELECT * FROM `hiking` ');
      $donnees = $reponse->fetchALL();
      foreach ($donnees as $reponse) 
        
      {

        ?>
        <table> 
            <input type="hidden" name="" value="<?php echo $reponse->id; ?>"> 
           <p> <strong> Nom : </strong> <?php echo $reponse->name; ?>  </p> 
          <p> <strong> Difficulty : </strong> <?php echo $reponse->difficulty; ?> </p>
          <p> <strong> Distance : </strong> <?php echo $reponse->distance; ?> KM </p>
          <p> <strong> Duration : </strong> <?php echo $reponse->duration; ?> </p>
          <p> <strong> Height : </strong> <?php echo $reponse->height_difference; ?> <form action="form-update.php" method="POST">
           <button type="submit">MODIF</button>
           </form> <?php } ?>

           </p> 
           

           

           <a href="delete.php"> delete </a>
        </table>

        <p> <a href="create.php"> Create one hiking </a> </p>
        <p> <a href="update.php"> MODIF </a> </p>
        <p> <a href="#"> Lien </a> </p>

    
  </body>
</html>
