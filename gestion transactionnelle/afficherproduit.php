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

?>



<?php 
//ajout
$mess="";

$messs="";
$code=@$_POST['code'];
$nom=@$_POST['nom'];
$prix=@$_POST['prix'];
$cpa=@$_POST['cpa'];
$tp=@$_POST['taux_de_possession'];
$D=@$_POST['Quantite_anuelle'];
$CMM=@$_POST['CMM'];
$DLM=@$_POST['DLM'];
$TESS=@$_POST['TESS'];



if(isset($_POST['bajout'])){
	 
	$exe1=mysqli_query($conn,"insert into produit values('$code','$nom','$prix','$cpa','$tp','$D','$CMM','$DLM','$TESS')");
	if($exe1){
   $messs="Ajout réussie !!";
}
else
   $mess="Echec ajout !!". mysqli_error($conn);
}

 



?>
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
	<br><br><h1 align="center" ><font COLOR= "white">PRODUITS</font></h1>
	
	<br>
<?php 
//suppression
if(isset($_POST['bsupp'])){
$exe2=mysqli_query($conn,"delete from produit where codeprod='$code'");
if($exe2){
   $messs="Suppréssion réussie !!";
}
else
   $mess="Echec suppréssion !!". mysqli_error($conn);
}

?>

<?php 
//modifier
if(isset($_POST['bmodif'])){
$exe3=mysqli_query($conn,"update produit set nomprod='$nom',prix='$prix' where codeprod='$code'");
if($exe3){
   $messs="Modification réussie !!";
}
else
   $mess="Echec modification !!". mysqli_error($conn);
}
// <link rel="stylesheet" type="text/css" href="../moncss.css">
?>

<?php 
//recherche
$code=@$_POST['code'];
if(isset($_POST['brech'])&& !empty($code)){
$exe4=mysqli_query($conn,"select * from produit where codeprod='$code'");
if($exe4){
   print'<div style="overflow-x:auto;">';
	print'<table border="3" id="tbfich">';
	print'<tr><th>Code produit</th><th>Nom produit</th><th>Prix unitaire</th></th><th>coût de passation</th><th>taux de possession</th><th>Quantite anuelle</th><th>Consommation mensuelle moyenne</th><th>Délais de livraison en mois</th><th>Taux d évaluation du SS</th></tr>';
	while ($row = mysqli_fetch_assoc($exe4)){
	$codep=$row['codeprod'];
	$nomp=$row['nomprod'];
	$prix=$row['prix'];
	$cpa=$row['cpa'];
	$tp=$row['taux de possession'];
	$D=$row['Quantite anuelle'];
	$CMM=$row['Consommation mensuelle moyenne'];
	$DLM=$row['Delais de livraison en mois'];
	$TESS=$row['taux d evaluation du SS'];
	
	
	print'<tr>';
	print'<td >';
	     echo '<center>'.$codep.'</center>';
	print'</td>';
	
	
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
	     echo 	'<center>'.$tp.'</center>';
	print'</td>';
	print'<td>';
	     echo 	'<center>'.$D.'</center>';
	print'</td>';
	
	print'<td>';
	     echo 	'<center>'.$CMM.'</center>';
	print'</td>';
	
	print'<td>';
	     echo 	'<center>'.$DLM.'</center>';
	print'</td>';
	
	print'<td>';
	     echo 	'<center>'.$TESS.'</center>';
	print'</td>';
	
	print'</tr>';
		}
	print'</table >';
print'</div>';
}

}
?>
  
  
  <?php 
  print'<br><br><br>';
  
	$rq=mysqli_query($conn,"select * from produit ");
	print'<div style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>Code produit</th><th>Nom produit</th><th>Prix unitaire</th></th><th>coût de passation</th><th>taux de possession</th><th>Quantite anuelle</th><th>Consommation mensuelle moyenne</th><th>Délais de livraison en mois</th><th>Taux d évaluation du SS</th></tr>';
	while ($row = mysqli_fetch_assoc($rq)){
	$codep=$row['codeprod'];
	$nomp=$row['nomprod'];
	$prix=$row['prix'];
	$cpa=$row['cpa'];
	$tp=$row['taux de possession'];
	$D=$row['Quantite anuelle'];
	$CMM=$row['Consommation mensuelle moyenne'];
	$DLM=$row['Delais de livraison en mois'];
	$TESS=$row['taux d evaluation du SS'];
	
	
	print'<tr>';
	print'<td >';
	     echo '<center>'.$codep.'</center>';
	print'</td>';
	
	
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
	     echo 	'<center>'.$tp.'</center>';
	print'</td>';
	print'<td>';
	     echo 	'<center>'.$D.'</center>';
	print'</td>';
	
	print'<td>';
	     echo 	'<center>'.$CMM.'</center>';
	print'</td>';
	
	print'<td>';
	     echo 	'<center>'.$DLM.'</center>';
	print'</td>';
	
	print'<td>';
	     echo 	'<center>'.$TESS.'</center>';
	print'</td>';
	
	print'</tr>';
		}
	print'</table >';
print'</div>';


//http://localhost/GestionStock2/home.php

	?>
	<?php echo '<br><h3><font COLOR= "red" SIZE="15">'.$mess.'</font></h3>'; 
	echo '<br><h1><center><font COLOR= "green"SIZE="15" >'.$messs.'</center></font></h2>';?><br><br>
	<center><button onclick="document.location ='index.php'" id="bt">Retour </button></center>
	
	
	</body>
</html>