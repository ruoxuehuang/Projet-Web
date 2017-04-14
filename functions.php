<?php
include("connexion.php");

// Établi une connexion à la base
function con() {
  return mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);
}

// Ajoute une petition
function p_ajout($p_id, $p_nb, $p_title, $p_cat) {
  $con = con();
  mysqli_query($con, "INSERT INTO petition VALUES ($p_id,$p_nb,$p_title,$p_cat)");
  mysqli_close($con);
}

// Supprime un post
function p_supp($id) {
  $con = con();
  mysqli_query($con, "DELETE FROM posts WHERE id = $id");
  mysqli_close($con);
}

?>
