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
	<br><br><h1 align="center" ><font COLOR= "white">CLIENTS</font></h1>
	
	<br>
	

<?php 
//ajout
$mess="";
$messs="";
$IDC=@$_POST['IDC'];
$RAISSOC_C=@$_POST['RAISSOC_C'];
$TEL_C=@$_POST['TEL_C'];
$EMAIL_C=@$_POST['EMAIL_C'];
$FAX_C=@$_POST['FAX_C'];
$ADRESSE_C=@$_POST['ADRESSE_C'];




if(isset($_POST['bajout'])){
	 
	$exe1=mysqli_query($conn,"insert into client (ID_C, RAISSO_C, ADRESSE_C, TEL_C, FAX, EMAIL) values('$IDC','$RAISSOC_C','$ADRESSE_C','$TEL_C','$FAX_C','$EMAIL_C')");
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
$exe2=mysqli_query($conn,"delete from client where ID_C='$IDC'");
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
$exe3=mysqli_query($conn,"update CLIENT set RAISSO_C= '$RAISSOC_C', ADRESSE_C = '$ADRESSE_C', TEL_C = '$TEL_C', FAX ='$FAX_C', EMAIL='$EMAIL_C' where ID_C='$IDC'");
if($exe3){
   $messs="Modification réussie !!";
}
else
   $mess="Echec modification !!". mysqli_error($conn);
}

// 
?>

<?php 
//recherche
$IDC=@$_POST['IDC'];
if(isset($_POST['brech'])&& !empty($IDC)){
$exe4=mysqli_query($conn,"select * from client where ID_C='$IDC'");
if($exe4){
   print'<div style="overflow-x:auto;">';
	print'<table border="3" id="tbfich">';
	print'<tr><th>Code Client</th><th>Raison Sociale / Nom</th><th>Tél.</th></th><th>E-mail</th><th>Fax.</th><th>Adresse</th></tr>';
	while ($row = mysqli_fetch_assoc($exe4)){
	
	
$IDC=$row['ID_C'];
$RAISSOC_C=$row['RAISSO_C'];
$TEL_C=$row['TEL_C'];
$EMAIL_C=$row['EMAIL'];
$FAX_C=$row['FAX'];
$ADRESSE_C=$row['ADRESSE_C'];
	print'<tr>';
	print'<td>';
	     echo '<center>'.$IDC.'</center>';
	print'</td>';
	
	
	print'<td>';
	     echo 	'<center>'.$RAISSOC_C.'</center>';
	print'</td>';
	
		print'<td>';
	     echo 	'<center>'.$TEL_C.'</center>';
	print'</td>';
	
	print'<td>';
	    echo 	'<center>'.$EMAIL_C.'</center>';
	print'</td>';
	print'<td>';
	     echo 	'<center>'.$FAX_C.'</center>';
	print'</td>';
	print'<td>';
	     echo 	'<center>'.$ADRESSE_C.'</center>';
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
	$rq=mysqli_query($conn,"select * from client ");
	print'<div style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>Code Client</th><th>Raison Sociale / Nom</th><th>Tél.</th></th><th>E-mail</th><th>Fax.</th><th>Adresse</th></tr>';
	
	while ($row = mysqli_fetch_assoc($rq)){
		
	$IDC=$row['ID_C'];
	$RAISSOC_C=$row['RAISSO_C'];
	$TEL_C=$row['TEL_C'];
	$EMAIL_C=$row['EMAIL'];
	$FAX_C=$row['FAX'];
	$ADRESSE_C=$row['ADRESSE_C'];

	print'<tr>';
	print'<td>';
	     echo '<center>'.$IDC.'</center>';
	print'</td>';
	
	
	print'<td>';
	     echo 	'<center>'.$RAISSOC_C.'</center>';
	print'</td>';
	
		print'<td>';
	     echo 	'<center>'.$TEL_C.'</center>';
	print'</td>';
	
	print'<td>';
	    echo 	'<center>'.$EMAIL_C.'</center>';
	print'</td>';
	print'<td>';
	     echo 	'<center>'.$FAX_C.'</center>';
	print'</td>';
	print'<td>';
	     echo 	'<center>'.$ADRESSE_C.'</center>';
	print'</td>';
	
	print'</tr>';
		}
	print'</table >';
print'</div>';
print'</div>';
//http://localhost/GestionStock2/home.php

	?>
	
	<?php echo '<br><h3><font COLOR= "red" SIZE="15">'.$mess.'</font></h3>';
	echo '<br><h1><center><font COLOR= "green" SIZE="15" >'.$messs.'</center></font></h2>
	</body>
	</html>';

	?><br><br>
	<center><button onclick="document.location ='client.php'" id="bt">Retour </button></center>
	</body>
</html>