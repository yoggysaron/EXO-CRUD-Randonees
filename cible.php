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

$req = $bdd->prepare("INSERT INTO hiking(name, difficulty, distance, duration, height_difference)
					  VALUES (:name, :difficulty, :distance, :duration, :height_difference)");

			$req->execute(array(
				'name' => $name,
				'difficulty' => $difficulty,
				'distance' => $distance,
				'duration' => $duration,
				'height_difference' => $height_difference
				));

			// appeler les variables et name de la même façon 

			echo "Tout est ajoutés"; 

?>

<a href="read.php"> Read </a>

</body>
</html>