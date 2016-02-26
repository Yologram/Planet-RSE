<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Planet'RSE</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/semantic.css">
</head>
<body>

  <div class="ui top attached massive stackable segment menu_header">
    <div class="ui secondary stackable menu">


<a href="acceuil.php">
  <div class="item">
      <div class="ui list">
        <h1 class="header item title_color">Planet'RSE</h1>
        <h4 class="item title_color">Plateforme de Notation et d'Evaluation Territoriale de la RSE</h4>
      </div>
  </div>
</a>


  <div class="right stackable menu">
    <a class="stackable item" href="acceuil.php">Accueil</a>
    <a class="stackable item" href="actu.php">Actualités</a>
    <a class="stackable item" href="description.php">Génèse du projet Planet'RSE</a>
    <a class="stackable item" href="criteres.php">Critérisation</a>
    <a class="stackable item" href="qui.php">Qui est évalué ?</a>
    <a class="stackable item" href="faq.php">FAQ</a>
    <a class="stackable item" href="contact.php">Contact/Adhésion</a>
    <a class="stackable item" href="login.php"><button class="ui button login">Se connecter</button></a>
    <a class="stackable item" href="login.php"><button class="ui button signup">S'inscrire</button></a>
  </div>
</div>
</div>


<div class="ui small modal comodale">
<?php
include ('boxConnextion.php');
?>
</div>

