<!doctype html>
<html lang="fr">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.css" rel="stylesheet">
<link href="css/navbar-fixed-top.css" rel="stylesheet">
<link href="css/carousel.css" rel="stylesheet">
<title>Eirbeetion</title>
</head>

<body>
<div class="centrage">
	<p> blabla</p>
	</div>
<div>
    <div class="header clearfix">
	<nav>
	<ul class="nav nav-pills pull-right">
	<li role="presentation" class="active">
	<a href="accueil.php">
		Connexion
	</a>
	</li>	   	    
	</ul>
	<br>
	<br>
	<br>
	<div id="navbar">
	<ul class="nav nav-pills pull-left">
	<li role="presentation" class="active">
	<a href="accueil.php">
	Poilitique
	</a>
	</li>
	<li role="presentation" class="active">
	<a href="accueil.php">
	Santé
	</a>
	</li>
	<li role="presentation" class="active">
	<a href="accueil.php">
	Justice
	</a>
	</li>
	<li role="presentation" class="active">
	<a href="accueil.php">
	Environnement
	</a>
	</li>
	<li>
	<form action="accueil.php" method="GET">
      <input type="text" name="nom" placeholder="Search">
      <input type="submit">
    </li>
    </ul>
    <ul class="nav nav-pills pull-right">
	<li role="presentation" class="active">
	<a href="accueil.php">
	Lancer Une Pétition
	</a>
	</li>	   	    
	</ul>
	</div>
	</nav>
    </div>
    </div>
    <br>
    <br>
    <br>
<div class="jumbotron">
	<button type="button" class="btn btn-link">Populaires
	</button>
	<button type="button" class="btn btn-link">Récents
	</button>
	<div>
	<ul style="list-style-type:square">
		<?php
		for ($i=0;$i<10;$i++){
			echo "<li><p> Titre pétition $i <br>" ;
			echo "description du contenu <br>";
			echo "nombre de signatures </p></li>";
		}
		?>
	</ul>	
	</div>
<div>
</div>
</body>

</html>
