<?php
include("functions.php");

$con=con();

mysqli_query($con,"DROP TABLE `petition`");

mysqli_query($con,"DROP TABLE `signature`");

$qTbPerson = "CREATE TABLE IF NOT EXISTS `personne` (
  `per_id` int(11),
  `fname` varchar(12) NOT NULL,
  `lname` varchar(12) NOT NULL,
  `uname` varchar(12) NOT NULL,
  `login` varchar(64) NOT NULL,
  `pwd` varchar(12) NOT NULL,
  PRIMARY KEY (`per_id`)
  )ENGINE=InnoDB";

$qTbPetition = "CREATE TABLE IF NOT EXISTS `petition` (
  `id` int(11),
  `sig_nb` int(11),
  `title` varchar(100) NOT NULL,
  `categorie` int(11),
  `date` date,
  PRIMARY KEY (`id`)
  )ENGINE=InnoDB";

$qTbSignature = "CREATE TABLE IF NOT EXISTS `signature` (
  `id_sig` int(11),
  `id_pet` int(11),
  `per_id` int(11),
  `date` date,
  PRIMARY KEY (`id_sig`)
  )ENGINE=InnoDB";


mysqli_query($con,$qTbPerson);
echo "<p>".mysqli_info($con).mysqli_error($con)."</p>";
mysqli_query($con,$qTbPetition);
mysqli_query($con,$qTbSignature);

echo "<p>".mysqli_info($con).mysqli_error($con)."</p>";


for ($i=1; $i<10 ; $i++){
	$title="'titre $i'";
	$nb_sign=0;
	$nb_cat=0;
	$date="'1017-04-07'";
	p_ajout($i,$nb_sign,$title,$nb_cat,$date);
}

mysqli_query($con,"SELECT * FROM `petition`");

?>
