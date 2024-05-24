<?php

session_start();

 //Redirect the user to login page if he is not logged in.
	if(!isset($_SESSION['loggedIn'])){
		header('Location: ../connexion/logincs.php');
		exit();
	}
?>

<?php 
/*application réalisée du 13 au 15 Avril 2020 à Ndjaména au Tchad par
  Targoto Christian
  contact: +23560316682 / ct@chrislink.net
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stockges";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
} 


/*

margin-right: 265px;
margin-left: 1px;

*/

?>

<?php
		
		
		$reqq=mysqli_query($conn,"select max(idmv) AS max from mouvmt ");
		while (($rowss = mysqli_fetch_assoc($reqq)) ){
		
		$id=$rowss['max']+1;
		// $rowss="";
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
<br><br><h1  ><font COLOR= "white">RESTE EN STOCK</font></h1>
	<br><br>
	<div >
	<form action="../gestion poussée/stockalerte.php" method="POST"  >
	
	 
	 
	 
	 <p  style="color:white;"><strong>Nom produit</strong></p>
	 <select  name="nom" class="champ" >
	
	<?php
		$reqq=mysqli_query($conn,"SELECT nomprod FROM produit; ");
		while (($rowss = mysqli_fetch_assoc($reqq)) ){
		
		echo '<option value="'.$rowss['nomprod'].'">'.$rowss['nomprod'].'</option>';
		}
		
	
	?>
	
	
	 </select></td></tr><br><br>
	 
	 
	 <p  style="color:white;"><strong>Méthode de valorisation :</strong><BR><br>
   <input  type="radio" name="methodval" value="Retrait_basic" checked><strong>Basique<input  type="radio" name="methodval" value="Retrait_fifo" >FIFO<input type="radio" name="methodval" value="Retrait_lifo" >LIFO</p><BR><br>
     <input type="submit" name="submit" value="Rechercher">
	 <input type="submit" name="brech" value="Vérifier les produits" class="" >
	</form>

<br>
<a  href='../menu entete/menupoussé.php'>Retour vers le menu</a>
	</div>
</body>
</html>