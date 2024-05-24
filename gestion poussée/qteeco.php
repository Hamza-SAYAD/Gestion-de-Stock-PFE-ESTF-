
<?php

session_start();

 //Redirect the user to login page if he is not logged in.
	if(!isset($_SESSION['loggedIn'])){
		header('Location: ../connexion/logincs.php');
		exit();
	}
?>


<?php 
/*
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
?>
<?php 
//ajout
$mess="";
$code=@$_POST['code'];
$nom=@$_POST['nom'];
$prix=@$_POST['prix'];


?>

<!-- Created by TopStyle Trial - www.topstyle4.com -->
<!DOCTYPE html>
<html>
<head>
	<title>Gestion de stock</title>
	<meta charset="utf8">
	<link rel="shortcut icon" href="../images/finalMagaz.jpg">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" href="../css/default.css">
	<link rel="stylesheet" href="../css/styleform.css">
</head>

<body>
	<br><br><h1 align="center" ><font COLOR= "white">Quantite economique</h1>
	<br><br><div align="center">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST"  >
	
	 <strong >Nom produit   </strong><br><br></font>
	 <select  name="nom" class="champ" >
	
	<?php
		$reqq=mysqli_query($conn,"SELECT nomprod FROM produit; ");
		while (($rowss = mysqli_fetch_assoc($reqq)) ){
		
		echo '<option value="'.$rowss['nomprod'].'">'.$rowss['nomprod'].'</option>';
		}
		
	
	?>
	
	
	 </select>
	 
     <input type="submit" name="submit" value="Vérifier">
	</form><br>
	

<?php 
//recherche
$nom=@$_POST['nom'];
if(isset($_POST['submit'])){
//String qr="select * from produit where codeprod='$nom'";
$exer=mysqli_query($conn,"select * from produit where nomprod='$nom'");
if($exer){
   print'<div style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>Nom produit</th><th>Prix unitaire</th></th><th>coût de passation</th><th>taux de possession</th><th>Quantite anuelle</th><th>Quantite economique</th></tr>';
	if($row = mysqli_fetch_assoc($exer)){
	
	$nomp=$row['nomprod'];
	$prix=$row['prix'];
	$cpa=$row['cpa'];
	$tp=$row['taux de possession'];
	$D=$row['Quantite anuelle'];
	
	print'<tr>';

	
	
	print'<td>';
	     echo 	'<center>'.$nomp.'</center>';
	print'</td>';
	
		print'<td>';
	     echo 	'<center>'.$prix.'</center>';
	print'</td>';
	
	print'<td>';
	    echo 	'<center>'.$cpa.'</center>';
	print'</td>';
	print'<td>';
	     echo '<center>'.$tp.'</center>'	;
	print'</td>';
	print'<td>';
	     echo 	'<center>'.$D.'</center>';
	print'</td>';
	$qteeco = number_format( sqrt((2*$cpa*$D)/($prix*$tp)) ,0,'','');
	print'<td style="background: linear-gradient(to top, pink 0%,  blue 100%); color: white;">';
	     echo '<center>'.$qteeco.'</center>';
	print'</td>';
	
	print'</tr>';
		}
	print'</table >';
print'</div><br>';
}

}
?>


 <?php 
  
	$rq=mysqli_query($conn,"select * from produit ");
	print'<div style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>Nom produit</th><th>Prix unitaire</th></th><th>coût de passation</th><th>taux de possession</th><th>Quantite anuelle</th><th>Quantite economique</th></tr>';
	while ($row = mysqli_fetch_assoc($rq)){
	
	$nomp=$row['nomprod'];
	$prix=$row['prix'];
	$cpa=$row['cpa'];
	$tp=$row['taux de possession'];
	$D=$row['Quantite anuelle'];
	
	print'<tr>';

	
	
	print'<td>';
	     echo 	'<center>'.$nomp.'</center>';
	print'</td>';
	
		print'<td>';
	     echo 	'<center>'.$prix.'</center>';
	print'</td>';
	
	print'<td>';
	    echo 	'<center>'.$cpa.'</center>';
	print'</td>';
	print'<td>';
	     echo '<center>'.$tp.'</center>'	;
	print'</td>';
	print'<td>';
	     echo 	'<center>'.$D.'</center>';
	print'</td>';
	$qteeco = number_format( sqrt((2*$cpa*$D)/($prix*$tp)) ,0,'','');
	print'<td style="background: linear-gradient(to top, pink 0%,  blue 100%); color: white;">';
	     echo '<center>'.$qteeco.'</center>';
	print'</td>';
	
	print'</tr>';
		}
	print'</table >';
print'</div>';

	?>



<button onclick="document.location = '../menu entete/menupoussé.php'" id="bt">Retour vers le menu</button>
	</div>
</body>
</html>