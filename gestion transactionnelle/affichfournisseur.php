<?php

session_start();

 //Redirect the user to login page if he is not logged in.
	if(!isset($_SESSION['loggedIn'])){
		header('Location: ../connexion/logincs.php');
		exit();
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
	<br><br><h1 align="center" ><font COLOR= "white">FOURNISSEURS</font></h1>
	
	<br>
	

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
$IDF=@$_POST['IDF'];
$RAISSOCF=@$_POST['RAISSOCF'];
$TEL_F=@$_POST['TEL_F'];
$EMAIL_F=@$_POST['EMAIL_F'];
$FAX_F=@$_POST['FAX_F'];
$ADRESSE_F=@$_POST['ADRESSE_F'];





if(isset($_POST['bajout'])){
	 
	$exe1=mysqli_query($conn,"insert into fournisseur (ID_F, RAISSOCF, ADRESSE_F, TEL_F, FAX_F, EMAIL_F) values('$IDF','$RAISSOCF','$ADRESSE_F','$TEL_F','$FAX_F','$EMAIL_F')");
	if($exe1){
   $messs="Ajout réussie !!";
}
else
   $mess="Echec ajout !!". mysqli_error($conn);
}

 



?>

<?php 
//suppression
if(isset($_POST['bsupp'])){
$exe2=mysqli_query($conn,"delete from fournisseur where ID_F='$IDF'");
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
$exe3=mysqli_query($conn,"update fournisseur set RAISSOCF= '$RAISSOCF', ADRESSE_F = '$ADRESSE_F', TEL_F = '$TEL_F', FAX_F ='$FAX_F', EMAIL_F='$EMAIL_F' where ID_F='$IDF'");
if($exe3){
   $mess="Modification réussie !!";
}
else
   $mess="Echec modification !!". mysqli_error($conn);
}

// 
?>

<?php 
//recherche
$IDF=@$_POST['IDF'];
if(isset($_POST['brech'])&& !empty($IDF)){
$exe4=mysqli_query($conn,"select * from fournisseur where ID_F='$IDF'");
if($exe4){
   print'<div style="overflow-x:auto;" >';
	print'<table border="3" id="tbfich" >';
	print'<tr><th>Code Fournisseur</th><th>Raison Sociale / Nom</th><th>Tél.</th></th><th>E-mail</th><th>Fax.</th><th>Adresse</th></tr>';
	while ($row = mysqli_fetch_assoc($exe4)){
	$IDF=$row['ID_F'];
	$RAISSOCF=$row['RAISSOCF'];
	$ADRESSE_F=$row['ADRESSE_F'];
	$TEL_F=$row['TEL_F'];
	$FAX_F=$row['FAX_F'];
	$EMAIL_F=$row['EMAIL_F'];
	print'<tr>';
	print'<td>';
	     echo   	'<center>'.$IDF.'</center>';
	print'</td>';
	
	
	print'<td>';
	     echo 	  	'<center>'.$RAISSOCF.'</center>';
	print'</td>';
	
		print'<td>';
	     echo 	  	'<center>'.$TEL_F.'</center>';
	print'</td>';
	
	print'<td>';
	    echo 	  	'<center>'.$EMAIL_F.'</center>';
	print'</td>';
	print'<td>';
	     echo 	  	'<center>'.$FAX_F.'</center>';
	print'</td>';
	print'<td>';
	     echo 	  	'<center>'.$ADRESSE_F.'</center>';
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
	$rq=mysqli_query($conn,"select * from fournisseur ");
	print'<div style="overflow-x:auto;">';
	print'<table border="1" id="tbfich" >';
	print'<tr><th>Code Fournisseur</th><th>Raison Sociale / Nom</th><th>Tél.</th></th><th>E-mail</th><th>Fax.</th><th>Adresse</th></tr>';
	while ($row = mysqli_fetch_assoc($rq)){
	$IDF=$row['ID_F'];
	$RAISSOCF=$row['RAISSOCF'];
	$ADRESSE_F=$row['ADRESSE_F'];
	$TEL_F=$row['TEL_F'];
	$FAX_F=$row['FAX_F'];
	$EMAIL_F=$row['EMAIL_F'];
	print'<td>';
	     echo   	'<center>'.$IDF.'</center>';
	print'</td>';
	
	
	print'<td>';
	     echo 	  	'<center>'.$RAISSOCF.'</center>';
	print'</td>';
	
		print'<td>';
	     echo 	  	'<center>'.$TEL_F.'</center>';
	print'</td>';
	
	print'<td>';
	    echo 	  	'<center>'.$EMAIL_F.'</center>';
	print'</td>';
	print'<td>';
	     echo 	  	'<center>'.$FAX_F.'</center>';
	print'</td>';
	print'<td>';
	     echo 	  	'<center>'.$ADRESSE_F.'</center>';
	print'</td>';
	
	print'</tr>';
		}
	print'</table >';
print'</div>';

//http://localhost/GestionStock2/home.php

	?>
	
	<?php echo '<br><h3><font COLOR= "red" SIZE="15">'.$mess.'</font></h3>';
echo '<br><h1><center><font COLOR= "green" SIZE="15">'.$messs.'</center></font></h2>';	?>
	<br><br>
	<center><button onclick="document.location ='fournisseur.php'" id="bt">Retour </button></center>
	</body>
</html>