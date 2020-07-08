<?php
session_start();

if(isset($_SESSION['id_cli']))  { 
             //Affichage du code html si la variable $_SESSION['membre_id'] existe
			 header('Location: http://alumeproject.fr/ALLUMEDERNIER/espace_membre/profil.php?id='.$_SESSION['id_cli']);
			 //include 'espace_membre/profil.php?id=' . $_SESSION['id_cli'];
      } //On ferme le if
      else { 
	  header('Location: http://alumeproject.fr/ALLUMEDERNIER/espace_membre/seconnecter.php');
             //Sinon affichage d'un autre code html 
			 //include 'seconnecter.php';
      } //On ferme le else
?>
