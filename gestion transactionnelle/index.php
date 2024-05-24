<?php

session_start();

 //Redirect the user to login page if he is not logged in.
	if(!isset($_SESSION['loggedIn'])){
		header('Location: ../connexion/logincs.php');
		exit();
	}
?>


<!-- Created by TopStyle Trial - www.topstyle4.com -->
<!DOCTYPE html>
<html>
<head>
	<title>Gestion de stock</title>
	<meta charset="utf8">
	
	
	<link rel="shortcut icon" href="../images/finalMagaz.jpg">
	<link rel="stylesheet" href="../css/default.css">
	<link rel="stylesheet" href="../css/styleform.css">
</head>

<body style ="margin-left:550px; margin-top:40px;">
	
	<br><br><h1  ><font COLOR= "white">Ajout des Produits</font></h1>
	<br><br><br><br>
	
		
	<div class="row" >
	<div class="eight columns">
		<form action="afficherproduit.php" method="POST"  name="contactForm" >
  <table align="">
    <tr><td></td><td></td></tr>
    <tr style="color:white;"><td></td><td><strong >Code produit</strong></td></tr>
   <tr><td></td><td><input type="text" name="code" class="champ" size="25"  ></td></tr>
   
   <tr style="color:white;"><td></td><td><strong>Nom produit</strong></td></tr>
   <tr><td></td><td><input type="text" name="nom" class="champ" size="25"></td></tr>
   
   <tr style="color:white;"><td></td><td><strong>Prix unitaire</strong></td></tr>
   <tr><td></td><td><input type="text" name="prix" class="champ" size="25"></td></tr>
   
   <tr style="color:white;"><td></td><td><strong>Cout de passation</strong></td></tr>
   <tr><td></td><td><input type="text" name="cpa" class="champ" size="25"></td></tr>
   
   <tr style="color:white;"><td></td><td><strong>Taux de possession</strong></td></tr>
   <tr><td></td><td><input type="text" name="taux_de_possession" class="champ" size="25" VALUE="0.01"></td></tr>
   
    <tr style="color:white;"><td></td><td><strong>Quantite anuelle</strong></td></tr>
   <tr><td></td><td><input type="text" name="Quantite_anuelle" class="champ" size="25"></td></tr>
   
   <tr style="color:white;"><td></td><td><strong>Consommation mensuelle moyenne</strong></td></tr>
   <tr><td></td><td><input type="text" name="CMM" class="champ" size="25"></td></tr>
   
   <tr style="color:white;"><td></td><td><strong>Délais de livraison en mois</strong></td></tr>
   <tr><td></td><td><input type="text" name="DLM" class="champ" size="25"></td></tr>
   
   <tr style="color:white;"><td></td><td><strong>Taux d'évaluation du SS</strong></td></tr>
   <tr><td></td><td><input type="text" name="TESS" class="champ" size="25" ></td></tr>
    
                            
            
             
             
   
   
  
  </table>
  
  <input type="submit" name="bajout" value="Ajouter" class="" >
  <input type="submit" name="bsupp" value="Supprimer" class="" >
  <input type="submit" name="bmodif" value="Modifier" class="" >
  <input type="submit" name="brech" value="Recherche" class="" ><br>
  <a  href='../menu entete/menu.php'>Retour vers le menu</a>
  </div>
 </div>

  </form>
</body>
</html>