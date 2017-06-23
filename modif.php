<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

include ('connexion.php'); 

 
$name=$_POST['name'];
$difficulty=$_POST['difficulty'];
$distance=$_POST['distance'];
$duration=$_POST['duration'];
$height_difference=$_POST['height_difference'];

$req = $bdd->prepare("UPDATE hiking SET name = :name, difficulty = :difficulty, distance = :distance, duration = :duration, height_difference = :height_difference WHERE ID = 12 ");
$req->bindParam (':name', $name); 
	$req->bindParam (':difficulty', $difficulty);
	$req->bindParam (':distance', $distance);
	$req->bindParam (':duration', $duration);
	$req->bindParam (':height_difference', $height_difference);

$req->execute();

			 

?>

<a href="update.php"> UPDATE </a>

</body>
</html>