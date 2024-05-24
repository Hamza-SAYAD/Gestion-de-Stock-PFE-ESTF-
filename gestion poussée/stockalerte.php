
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



/*

<!DOCTYPE html>
<html>
<head>
	<title>GS</title>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="moncss.css">
</head>

<body>
	<h3 align="center">STOCK DE SECURITE</h3>
	<div align="center">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST"  >
	
	 <strong >Nom produit   </strong>
	 <input type="text" name="nom" class="champ" size="25"  >
	 
     <input type="submit" name="submit" value="Vérifier">
	</form>
	<br><br><br><br>

*/



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


<!-- Created by TopStyle Trial - www.topstyle4.com -->

<?php 
//recherche <link rel="stylesheet" type="text/css" href="../inventory/vendor/DataTables/datatables.css">
$nom=@$_POST['nom'];
$methodval=@$_POST['methodval'];
 echo '<center><h1 id="h1"><font COLOR= "white" >STOCK DE SECURITE</font></h1></center><br><br>';
if(isset($_POST['submit'])   ){
	
	
 
//String qr="select * from produit where codeprod='$nom'";
$exer=mysqli_query($conn,"select * from produit where nomprod='$nom'");
if($exer){
   print'<div style="overflow-x:auto;" class="col-xs-8 ">';
	print'<table border="1"  id="tbfich" class="table table-bordered table-striped table-condensed">';
	print'<tr class="success"><th>Nom produit</th><th>Consommation mensuelle moyenne</th><th>Délais de livraison en mois</th><th>Taux d évaluation du SS</th><th>Stock Minimum</th><th>Stock de sécurité</th><th>Stock d Alerte</th></tr>';
	while($row = mysqli_fetch_assoc($exer)){
	
	$nomp=$row['nomprod'];
	$CMM=$row['Consommation mensuelle moyenne'];
	$DLM=$row['Delais de livraison en mois'];
	$TESS=$row['taux d evaluation du SS'];
	
	print'<tr >';

	
	
	print'<td >';
	     echo 	'<center>'.$nomp.'</center>';
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
	
	$stomin = number_format($CMM * $DLM,0,'','');
	print'<td style="background: linear-gradient(to top, pink 0%,  blue 100%); color: white;">';
	     echo '<center>'.$stomin.'</center>';
	print'</td>';
	
	$stosecu = number_format($TESS * $stomin,0,'','');
	print'<td style="background: linear-gradient(to top, pink 0%,  blue 100%); color: white;">';
	     echo '<center>'.$stosecu.'</center>'; 
	print'</td>';
	
	$stoaler = number_format($stosecu + $stomin,0,'','');
	print'<td style="background: linear-gradient(to top, pink 0%,  blue 100%); color: white;">';
	     echo '<center>'.$stoaler.'</center>';
	print'</td>';
	
	print'</tr>';
	
	
	
	
	}
	
	print'</table >';
print'</div>';
}}



?>
<br><br>

 <?php 
 // $testb1="";
	$rq=mysqli_query($conn,"select * from produit ");
	print'<div style="overflow-x:auto;">';
	print'<table border="1"  id="tbfich">';
	print'<tr><th>Nom produit</th><th>Consommation mensuelle moyenne</th><th>Délais de livraison en mois</th><th>Taux d évaluation du SS</th><th>Stock Minimum</th><th>Stock de sécurité</th><th>Stock d Alerte</th></tr>';
	
	$c= 0;
	while ($row = mysqli_fetch_assoc($rq)){
	
	$nomp=$row['nomprod'];
	$CMM=$row['Consommation mensuelle moyenne'];
	$DLM=$row['Delais de livraison en mois'];
	$TESS=$row['taux d evaluation du SS'];
	//$stock=$row['stock'];
	$codep=$row['codeprod'];
	$prix=$row['prix'];
	
	
	
	print'<tr >';

	
	
	print'<td >';
	     echo 	'<center>'.$nomp.'</center>';
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
	
	$stomin = number_format($CMM * $DLM,0,'','');
	print'<td style="background: linear-gradient(to top, pink 0%,  blue 100%); color: white;">';
	     echo '<center>'.$stomin.'</center>';
	print'</td>';
	
	$stosecu = number_format($TESS * $stomin,0,'','');
	print'<td style="background: linear-gradient(to top, pink 0%,  blue 100%); color: white;">';
	     echo '<center>'.$stosecu.'</center>'; 
	print'</td>';
	
	$stoaler = number_format($stosecu + $stomin,0,'','');
	print'<td style="background: linear-gradient(to top, pink 0%,  blue 100%); color: white;">';
	     echo '<center>'.$stoaler.'</center>';
	print'</td>';
	
	print'</tr>';
	
	$exe=mysqli_query($conn,"select codeprod from stock ");
	while($rows=mysqli_fetch_assoc($exe)){
		$id=$rows['codeprod'];
		if($id!=$codep){
		$exe1=mysqli_query($conn,"insert into stock  values('$codep','$nomp','$prix','$stomin','$stosecu','$stoaler')");
	}
	}
	$exe1=mysqli_query($conn,"insert into stock  values('$codep','$nomp','$prix','$stomin','$stosecu','$stoaler')");
	
	//$stoaler=$stoaler+$c;
	//$c=$stoaler;
	
	
	
	
	
	
		}
	print'</table >';
print'</div>';


//echo  '<h2>Le total du stock d alerte est: <font color= "red">'.$stoaler.'</font></h2>';

	?>





<br><br><br>	
	<?php 
//recherche
$nom=@$_POST['nom'];
 
if((isset($_POST['submit']) || isset($_POST['brech'])) && isset($_POST['methodval']) && $methodval=='Retrait_basic'  ){
	echo '<center><br><br><h1 id="h11"><font COLOR= "white" >RESTE EN STOCK (Retrait basic)</font></h1></center>';
	if(isset($_POST['submit'])   ){
//String qr="select codeprod,nomprod,prix,sum(qte) as stock,sum(qte)*prix as montant from vue1 group by codeprod ";
$exer=mysqli_query($conn,"select codeprod,nomprod,prix,alerte, min, sum(qte) as stock,sum(qte*prix) as montant from vue1 where nomprod='$nom' group by nomprod");
if($exer){
   print'<br><br><div  style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>Code produit</th><th>Nom produit</th><th>Prix unitaire</th><th>Quantité en stock</th><th>Montant</th></tr>';
	$compteur=0;
$compt=0;
$comp=0;

	while($row = mysqli_fetch_assoc($exer)){
	$codep=$row['codeprod'];
	$nomp=$row['nomprod'];
	$prix=$row['prix'];
	$stock=$row['stock'];
	$montant=$row['montant'];
	$stoaler=$row['alerte'];
	//$montant=$row['securite'];
	$stomin=$row['min'];

	print'<tr>';
	
	
	
	
	
	print'<td>';
	     echo '<center>'.$codep.'</center>';
	print'</td>';
	
	
	print'<td>';
	if ($stock==0){
		
		echo '<center><strong><font color ="red" size="5px">'.$nomp.'</font></strong></center>';
			
		}
		else if ($stoaler<$stock) {echo '<center>'.$nomp.'</center>';}
		
		else if ($stomin>=$stock){
			
			echo '<center><strong><font color ="BROWN">'.$nomp.'</font></strong></center>';
		}
		else {
			
		
		echo '<center><strong><font color ="orange">'.$nomp.'</font></strong></center>';
			
		}
	print'</td>';
	
		print'<td>';
	     echo 	'<center>'.$prix.'</center>';
	print'</td>';
	
	print'<td>';
		if ($stock<=0){
			$stock=0;
			
			echo '<center><strong><font color ="red" size="5px">'.$stock.'</font></strong></center>';
			$comp++;
		}
		else if ($stoaler<$stock) {echo '<center>'.$stock.'</center>';}
		
		else if ($stomin>=$stock){
			
			echo '<center><strong><font color ="BROWN">'.$stock.'</font></strong></center>';
			$compt++;
		}
		else {
			
		echo '<center><strong><font color ="orange">'.$stock.'</font></strong></center>';
			$compteur++;
		}
	print'</td>';
	print'<td>';
	 if ($montant <= 0){
		 $montant=0;
		 echo '<center>'.$montant.'</center>';
	 }
	 else{
		 echo 	'<center>'.$montant.'</center>';
	 }
	     
	print'</td>';
	
	print'</tr>';
		}
				
		
	print'</table >';
print'</div>';
	}}


?>   
<?php 
//affichage
$exer=mysqli_query($conn,"select codeprod,nomprod,prix,alerte, min,sum(qte) as stock,sum(qte*prix) as montant from vue1  group by nomprod");


if($exer){
   print'<br><br><div  style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>Code produit</th><th>Nom produit</th><th>Prix unitaire</th><th>Quantité en stock</th><th>Montant</th></tr>';
	$compteur=0;
$compt=0;
$comp=0;

	while($row = mysqli_fetch_assoc($exer)){
	$codep=$row['codeprod'];
	$nomp=$row['nomprod'];
	$prix=$row['prix'];
	$stock=$row['stock'];
	$montant=$row['montant'];
	$stoaler=$row['alerte'];
	$stomin=$row['min'];
	print'<tr>';
	
	
	
	
	
	print'<td>';
	     echo '<center>'.$codep.'</center>';
	print'</td>';
	
	
	print'<td>';
	if ($stock==0){
		
		echo '<center><strong><font color ="red" size="5px">'.$nomp.'</font></strong></center>';
			
		}
		else if ($stoaler<$stock) {echo '<center>'.$nomp.'</center>';}
		
		else if ($stomin>=$stock){
			
			echo '<center><strong><font color ="BROWN">'.$nomp.'</font></strong></center>';
		}
		else {
			
		
		echo '<center><strong><font color ="orange">'.$nomp.'</font></strong></center>';
			
		}
	print'</td>';
	
		print'<td>';
	     echo 	'<center>'.$prix.'</center>';
	print'</td>';
	
	print'<td>';
		if ($stock<=0){
			$stock=0;
			
			echo '<center><strong><font color ="red" size="5px">'.$stock.'</font></strong></center>';
			$comp++;
		}
		else if ($stoaler<$stock) {echo '<center>'.$stock.'</center>';}
		
		else if ($stomin>=$stock){
			
			echo '<center><strong><font color ="BROWN">'.$stock.'</font></strong></center>';
			$compt++;
		}
		else {
			
		echo '<center><strong><font color ="orange">'.$stock.'</font></strong></center>';
			$compteur++;
		}
	print'</td>';
	print'<td>';
	 if ($montant <= 0){
		 $montant=0;
		 echo '<center>'.$montant.'</center>';
	 }
	 else{
		 echo 	'<center>'.$montant.'</center>';
	 }
	     
	print'</td>';
	
	print'</tr>';
		}
				
		
	print'</table >';
	print'<br><br><br><br><br><br><br><div align="center">';
echo  '<br><br><h1><font COLOR= "white" >INDICATEURS : </font></h1><br><br><br>';
		
		echo  '<h2 id="mesu">Le nombre de produits en <font COLOR= "red" >rupture de stock</font>  : &nbsp;&nbsp;&nbsp; <b><font COLOR= "red" size="15px">'.$comp.'</font> </b></h2><br>';
		echo  '<h2 id="mesu">Le nombre de produits en <font COLOR= "BROWN" >stock minimal</font> : &nbsp;&nbsp;&nbsp; <b><font COLOR= "BROWN" size="15px">'.$compt.'</font> </b></h2><br>';
		echo  '<h2 id="mesu">Le nombre de produits en <font COLOR= "orange" >alerte de stock</font> : &nbsp;&nbsp;&nbsp; <b><font COLOR= "orange" size="15px">'.$compteur.'</font> </b></h2><br><br>';	
	print'</div>';
print'</div>';
}


?>

<?php




ini_set('display_errors',1);
error_reporting(E_ALL);
$from = "hamzasayad16@gmail.com";
$to = "hamzasayad2002@gmail.com";
$subject = " Etat du stock (BASIC)";
if($comp!=0){
	$rupture="Le nombre de produits en rupture de stock: "  .$comp;
	//$rupture="";
}

else{
	$rupture="";
}
	
 if($compteur!=0){
	$alerte="Le nombre de produits en alerte de stock: "  .$compteur;
}
else{
	$alerte="";
}
 if($compt!=0){
	$stockmin="Le nombre de produits en stock minimal: "  .$compt;
}
else {
	$stockmin="";
}
	

	



if ($stockmin!="" && $alerte!="" && $rupture!="" ){
		$message ="INDICATEURS:
		
		"
		.$rupture."
		
		".$alerte."
		
		".$stockmin ;
		

}
 elseif ($stockmin!="" && ($alerte=="" && $rupture=="") ){
		$message = "INDICATEURS:
		
		"
		.$stockmin;
	}
	
	elseif ($stockmin=="" && ($alerte!="" && $rupture!="") ){
		$message ="INDICATEURS:
		
		"
		.$rupture."
		
		".$alerte
		 ;
	}
	elseif ($alerte!="" && ($stockmin=="" && $rupture=="") ){
		$message = "INDICATEURS:
		"
		.$alerte;
	}
	
	elseif ($alerte=="" && ($stockmin!="" && $rupture!="") ){
		$message ="INDICATEURS:
		
		"
		.$rupture
		."
		
		".$stockmin ;
	}
	elseif ($rupture!=null && ($stockmin=="" && $alerte=="") ){
		$message = "INDICATEURS:
		
		"
		.$rupture;

	}
	elseif ($rupture==null && ($stockmin!="" && $alerte!="") ){
		$message ="INDICATEURS:
		
		"
		.$alerte
		."
		
		".$stockmin ;

	}
	

else {
	$message="";
}

if($message!=""){
	$from = "hamzasayad16@gmail.com";
	$to = "hamzasayad2002@gmail.com";
	$subject = " Etat du stock (BASIC)";
	$headers = "From:".$from;
	$mail=mail($to,$subject,$message,$headers );
	if($mail){
		echo" sent.";
	}
	else
	echo" not sent.";
	}

else {
	echo 'Stock en etat normal';
}

	
?>

<?php
//total
//$exe5="select sum(prix*qte) as total from vue1";
$exe5=mysqli_query($conn,"select sum(prix*qte) as total from vue1");
	if($rst = mysqli_fetch_assoc($exe5)){
	$total=$rst['total'];
	if ($total<=0){
		
	}
	else
	echo  '<center><h3 id="mesu">Montant total des produits en stock :  <b><font COLOR= "blue" size="6px">'.$total.'</font> </b></h3></center><br><br>';
	} 

}
?>

<?php 
//recherche fifo
$nom=@$_POST['nom'];
 
if((isset($_POST['submit']) || isset($_POST['brech'])) && isset($_POST['methodval']) && $methodval=='Retrait_fifo'  ){
	echo '<center><br><br><br><h1 id="h11"><font COLOR= "white" >RESTE EN STOCK (Retrait fifo)</font></h1></center>';
	
	if(isset($_POST['submit'])   ){
//String qr="select codeprod,nomprod,prix,sum(qte) as stock,sum(qte)*prix as montant from vue1 group by codeprod ";
$exer=mysqli_query($conn,"select codeprod,nomprod,prix,alerte, min,sum(qte) as stock,sum(qte)*prix as montant from vue2 where nomprod='$nom' group by nomprod");



if($exer){
   print'<br><br><div  style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>Code produit</th><th>Nom produit</th><th>Prix unitaire</th><th>Quantité en stock</th><th>Montant</th></tr>';
	$compteur=0;
$compt=0;
$comp=0;

	while($row = mysqli_fetch_assoc($exer)){
	$codep=$row['codeprod'];
	$nomp=$row['nomprod'];
	$prix=$row['prix'];
	$stock=$row['stock'];
	$montant=$row['montant'];
	$stoaler=$row['alerte'];
	$stomin=$row['min'];
	print'<tr>';
		
	
	
	
	
	
	print'<td>';
	     echo '<center>'.$codep.'</center>';
	print'</td>';
	
	
	print'<td>';
	if ($stock==0){
		
		echo '<center><strong><font color ="red" size="5px">'.$nomp.'</font></strong></center>';
			
		}
		else if ($stoaler<$stock) {echo '<center>'.$nomp.'</center>';}
		
		else if ($stomin>=$stock){
			
			echo '<center><strong><font color ="BROWN">'.$nomp.'</font></strong></center>';
		}
		else {
			
		
		echo '<center><strong><font color ="orange">'.$nomp.'</font></strong></center>';
			
		}
	print'</td>';
	
		print'<td>';
	     echo 	'<center>'.$prix.'</center>';
	print'</td>';
	
	print'<td>';
		if ($stock<=0){
			$stock=0;
			
			echo '<center><strong><font color ="red" size="5px">'.$stock.'</font></strong></center>';
			$comp++;
		}
		else if ($stoaler<$stock) {echo '<center>'.$stock.'</center>';}
		
		else if ($stomin>=$stock){
			
			echo '<center><strong><font color ="BROWN">'.$stock.'</font></strong></center>';
			$compt++;
		}
		else {
			
		echo '<center><strong><font color ="orange">'.$stock.'</font></strong></center>';
			$compteur++;
		}
	print'</td>';
	print'<td>';
	 if ($montant <= 0){
		 $montant=0;
		 echo '<center>'.$montant.'</center>';
	 }
	 else{
		 echo 	'<center>'.$montant.'</center>';
	 }
	     
	print'</td>';
	
	print'</tr>';
		}
				
		
	print'</table >';
print'</div>';
}
}

?>   


<?php 
//affichage
$exer=mysqli_query($conn,"select codeprod,nomprod,prix,alerte, min,sum(qte) as stock,sum(qte)*prix as montant from vue2  group by nomprod");



if($exer){
   print'<br><br><div  style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>Code produit</th><th>Nom produit</th><th>Prix unitaire</th><th>Quantité en stock</th><th>Montant</th></tr>';
	$compteur=0;
$compt=0;
$comp=0;

	while($row = mysqli_fetch_assoc($exer)){
	$codep=$row['codeprod'];
	$nomp=$row['nomprod'];
	$prix=$row['prix'];
	$stock=$row['stock'];
	$montant=$row['montant'];
	$stoaler=$row['alerte'];
	$stomin=$row['min'];
	print'<tr>';
	
	
	
	print'<td>';
	     echo '<center>'.$codep.'</center>';
	print'</td>';
	
	
	print'<td>';
	if ($stock==0){
		
		echo '<center><strong><font color ="red" size="5px">'.$nomp.'</font></strong></center>';
			
		}
		else if ($stoaler<$stock) {echo '<center>'.$nomp.'</center>';}
		
		else if ($stomin>=$stock){
			
			echo '<center><strong><font color ="BROWN">'.$nomp.'</font></strong></center>';
		}
		else {
			
		
		echo '<center><strong><font color ="orange">'.$nomp.'</font></strong></center>';
			
		}
	print'</td>';
	
		print'<td>';
	     echo 	'<center>'.$prix.'</center>';
	print'</td>';
	
	print'<td>';
		if ($stock<=0){
			$stock=0;
			
			echo '<center><strong><font color ="red" size="5px">'.$stock.'</font></strong></center>';
			$comp++;
		}
		else if ($stoaler<$stock) {echo '<center>'.$stock.'</center>';}
		
		else if ($stomin>=$stock){
			
			echo '<center><strong><font color ="BROWN">'.$stock.'</font></strong></center>';
			$compt++;
		}
		else {
			
		echo '<center><strong><font color ="orange">'.$stock.'</font></strong></center>';
			$compteur++;
		}
	print'</td>';
	print'<td>';
	 if ($montant <= 0){
		 $montant=0;
		 echo '<center>'.$montant.'</center>';
	 }
	 else{
		 echo 	'<center>'.$montant.'</center>';
	 }
	     
	print'</td>';
	
	print'</tr>';
		}
				
		
	print'</table >';
	print'<br><br><br><br><br><br><br><div align="center">';
echo  '<br><br><h1><font COLOR= "white" >INDICATEURS : </font></h1><br><br><br>';
		
		echo  '<h2 id="mesu">Le nombre de produits en <font COLOR= "red" >rupture de stock</font>  : &nbsp;&nbsp;&nbsp; <b><font COLOR= "red" size="15px">'.$comp.'</font> </b></h2><br>';
		echo  '<h2 id="mesu">Le nombre de produits en <font COLOR= "BROWN" >stock minimal</font> : &nbsp;&nbsp;&nbsp; <b><font COLOR= "BROWN" size="15px">'.$compt.'</font> </b></h2><br>';
		echo  '<h2 id="mesu">Le nombre de produits en <font COLOR= "orange" >alerte de stock</font> : &nbsp;&nbsp;&nbsp; <b><font COLOR= "orange" size="15px">'.$compteur.'</font> </b></h2><br><br>';	
	print'</div>';
print'</div>';
}


?>
<?php




ini_set('display_errors',1);
error_reporting(E_ALL);
$from = "hamzasayad16@gmail.com";
$to = "hamzasayad2002@gmail.com";
$subject = " Etat du stock (BASIC)";
if($comp!=0){
	$rupture="Le nombre de produits en rupture de stock: "  .$comp;
	//$rupture="";
}

else{
	$rupture="";
}
	
 if($compteur!=0){
	$alerte="Le nombre de produits en alerte de stock: "  .$compteur;
}
else{
	$alerte="";
}
 if($compt!=0){
	$stockmin="Le nombre de produits en stock minimal: "  .$compt;
}
else {
	$stockmin="";
}
	

	



if ($stockmin!="" && $alerte!="" && $rupture!="" ){
		$message ="INDICATEURS:
		
		"
		.$rupture."
		
		".$alerte."
		
		".$stockmin ;
		

}
 elseif ($stockmin!="" && ($alerte=="" && $rupture=="") ){
		$message = "INDICATEURS:
		
		"
		.$stockmin;
	}
	
	elseif ($stockmin=="" && ($alerte!="" && $rupture!="") ){
		$message ="INDICATEURS:
		
		"
		.$rupture."
		
		".$alerte
		 ;
	}
	elseif ($alerte!="" && ($stockmin=="" && $rupture=="") ){
		$message = "INDICATEURS:
		"
		.$alerte;
	}
	
	elseif ($alerte=="" && ($stockmin!="" && $rupture!="") ){
		$message ="INDICATEURS:
		
		"
		.$rupture
		."
		
		".$stockmin ;
	}
	elseif ($rupture!=null && ($stockmin=="" && $alerte=="") ){
		$message = "INDICATEURS:
		
		"
		.$rupture;

	}
	elseif ($rupture==null && ($stockmin!="" && $alerte!="") ){
		$message ="INDICATEURS:
		
		"
		.$alerte
		."
		
		".$stockmin ;

	}
	

else {
	$message="";
}

if($message!=""){
	$from = "hamzasayad16@gmail.com";
	$to = "hamzasayad2002@gmail.com";
	$subject = " Etat du stock (FIFO)";
	$headers = "From:".$from;
	$mail=mail($to,$subject,$message,$headers );
	if($mail){
		echo" sent.";
	}
	else
	echo" not sent.";
	}

else {
	echo 'Stock en etat normal';
}

	
?>

<?php
//total
//$exe5="select sum(prix*qte) as total from vue1";
$exe5=mysqli_query($conn,"select sum(prix*qte) as total from vue2");
	if($rst = mysqli_fetch_assoc($exe5)){
	$total=$rst['total'];
	if ($total<=0){
		
	}
	else
	echo  '<center><h3 id="mesu">Montant total des produits en stock :  <b><font COLOR= "blue" size="6px">'.$total.'</font> </b></h3></center><br><br>';
	} 

}
?>
<br><br>






<?php 
//recherche lifo
$nom=@$_POST['nom'];
 
if((isset($_POST['submit']) || isset($_POST['brech'])) && isset($_POST['methodval']) && $methodval=='Retrait_lifo'  ){
	echo '<center><br><br><h1 id="h11"><font COLOR= "white" >RESTE EN STOCK (Retrait lifo)</font></h1></center>';
	if(isset($_POST['submit'])   ){
//String qr="select codeprod,nomprod,prix,sum(qte) as stock,sum(qte)*prix as montant from vue1 group by codeprod ";
$exer=mysqli_query($conn,"select codeprod,nomprod,prix,alerte,sum(qte) as stock,min,sum(qte)*prix as montant from vue3 where nomprod='$nom' group by nomprod");
if($exer){
   print'<br><br><div  style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>Code produit</th><th>Nom produit</th><th>Prix unitaire</th><th>Quantité en stock</th><th>Montant</th></tr>';
	$compteur=0;
$compt=0;
$comp=0;

	while($row = mysqli_fetch_assoc($exer)){
	$codep=$row['codeprod'];
	$nomp=$row['nomprod'];
	$prix=$row['prix'];
	$stock=$row['stock'];
	$montant=$row['montant'];
	$stoaler=$row['alerte'];
	$stomin=$row['min'];
	print'<tr>';
	
	
	
	
	
	print'<td>';
	     echo '<center>'.$codep.'</center>';
	print'</td>';
	
	
	print'<td>';
	if ($stock==0){
		
		echo '<center><strong><font color ="red" size="5px">'.$nomp.'</font></strong></center>';
			
		}
		else if ($stoaler<$stock) {echo '<center>'.$nomp.'</center>';}
		
		else if ($stomin>=$stock){
			
			echo '<center><strong><font color ="BROWN">'.$nomp.'</font></strong></center>';
		}
		else {
			
		
		echo '<center><strong><font color ="orange">'.$nomp.'</font></strong></center>';
			
		}
	print'</td>';
	
		print'<td>';
	     echo 	'<center>'.$prix.'</center>';
	print'</td>';
	
	print'<td>';
		if ($stock<=0){
			$stock=0;
			
			echo '<center><strong><font color ="red" size="5px">'.$stock.'</font></strong></center>';
			$comp++;
		}
		else if ($stoaler<$stock) {echo '<center>'.$stock.'</center>';}
		
		else if ($stomin>=$stock ){
			
			echo '<center><strong><font color ="BROWN">'.$stock.'</font></strong></center>';
			$compt++;
		}
		else {
			
		echo '<center><strong><font color ="orange">'.$stock.'</font></strong></center>';
			$compteur++;
		}
	print'</td>';
	print'<td>';
	 if ($montant <= 0){
		 $montant=0;
		 echo '<center>'.$montant.'</center>';
	 }
	 else{
		 echo 	'<center>'.$montant.'</center>';
	 }
	     
	print'</td>';
	
	print'</tr>';
		}
				
		
	print'</table >';
print'</div>';
	}}


?>   
<?php 
//affichage
$exer=mysqli_query($conn,"select codeprod,nomprod,prix,alerte,sum(qte) as stock,min,sum(qte)*prix as montant from vue3  group by nomprod");
if($exer){
   print'<br><br><div  style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>Code produit</th><th>Nom produit</th><th>Prix unitaire</th><th>Quantité en stock</th><th>Montant</th></tr>';
	$compteur=0;
$compt=0;
$comp=0;

	while($row = mysqli_fetch_assoc($exer)){
	$codep=$row['codeprod'];
	$nomp=$row['nomprod'];
	$prix=$row['prix'];
	$stock=$row['stock'];
	$montant=$row['montant'];
	$stoaler=$row['alerte'];
	$stomin=$row['min'];
	print'<tr>';
	
	
	
	
	
	print'<td>';
	     echo '<center>'.$codep.'</center>';
	print'</td>';
	
	
	print'<td>';
	if ($stock==0){
		
		echo '<center><strong><font color ="red" size="5px">'.$nomp.'</font></strong></center>';
			
		}
		else if ($stoaler<$stock) {echo '<center>'.$nomp.'</center>';}
		
		else if ($stomin>=$stock){
			
			echo '<center><strong><font color ="BROWN">'.$nomp.'</font></strong></center>';
		}
		else {
			
		
		echo '<center><strong><font color ="orange">'.$nomp.'</font></strong></center>';
			
		}
	print'</td>';
	
		print'<td>';
	     echo 	'<center>'.$prix.'</center>';
	print'</td>';
	
	print'<td>';
		if ($stock<=0){
			$stock=0;
			
			echo '<center><strong><font color ="red" size="5px">'.$stock.'</font></strong></center>';
			$comp++;
		}
		else if ($stoaler<$stock) {echo '<center>'.$stock.'</center>';}
		
		else if ($stomin>=$stock){
			
			echo '<center><strong><font color ="BROWN">'.$stock.'</font></strong></center>';
			$compt++;
		}
		else {
			
		echo '<center><strong><font color ="orange">'.$stock.'</font></strong></center>';
			$compteur++;
		}
	print'</td>';
	print'<td>';
	 if ($montant <= 0){
		 $montant=0;
		 echo '<center>'.$montant.'</center>';
	 }
	 else{
		 echo 	'<center>'.$montant.'</center>';
	 }
	     
	print'</td>';
	
	print'</tr>';
		}
				
		
	print'</table >';
	print'<br><br><br><br><br><br><br><div align="center">';
echo  '<br><br><h1><font COLOR= "white" >INDICATEURS : </font></h1><br><br><br>';
		
		echo  '<h2 id="mesu">Le nombre de produits en <font COLOR= "red" >rupture de stock</font>  : &nbsp;&nbsp;&nbsp; <b><font COLOR= "red" size="15px">'.$comp.'</font> </b></h2><br>';
		echo  '<h2 id="mesu">Le nombre de produits en <font COLOR= "BROWN" >stock minimal</font> : &nbsp;&nbsp;&nbsp; <b><font COLOR= "BROWN" size="15px">'.$compt.'</font> </b></h2><br>';
		echo  '<h2 id="mesu">Le nombre de produits en <font COLOR= "orange" >alerte de stock</font> : &nbsp;&nbsp;&nbsp; <b><font COLOR= "orange" size="15px">'.$compteur.'</font> </b></h2><br><br>';	
	print'</div>';
print'</div>';
}


?>


<?php




ini_set('display_errors',1);
error_reporting(E_ALL);
$from = "hamzasayad16@gmail.com";
$to = "hamzasayad2002@gmail.com";
$subject = " Etat du stock (LIFO)";
if($comp!=0){
	$rupture="Le nombre de produits en rupture de stock: "  .$comp;
	//$rupture="";
}

else{
	$rupture="";
}
	
 if($compteur!=0){
	$alerte="Le nombre de produits en alerte de stock: "  .$compteur;
}
else{
	$alerte="";
}
 if($compt!=0){
	$stockmin="Le nombre de produits en stock minimal: "  .$compt;
}
else {
	$stockmin="";
}
	

	



if ($stockmin!="" && $alerte!="" && $rupture!="" ){
		$message ="INDICATEURS:
		
		"
		.$rupture."
		
		".$alerte."
		
		".$stockmin ;
		

}
 elseif ($stockmin!="" && ($alerte=="" && $rupture=="") ){
		$message = "INDICATEURS:
		
		"
		.$stockmin;
	}
	
	elseif ($stockmin=="" && ($alerte!="" && $rupture!="") ){
		$message ="INDICATEURS:
		
		"
		.$rupture."
		
		".$alerte
		 ;
	}
	elseif ($alerte!="" && ($stockmin=="" && $rupture=="") ){
		$message = "INDICATEURS:
		"
		.$alerte;
	}
	
	elseif ($alerte=="" && ($stockmin!="" && $rupture!="") ){
		$message ="INDICATEURS:
		
		"
		.$rupture
		."
		
		".$stockmin ;
	}
	elseif ($rupture!=null && ($stockmin=="" && $alerte=="") ){
		$message = "INDICATEURS:
		
		"
		.$rupture;

	}
	elseif ($rupture==null && ($stockmin!="" && $alerte!="") ){
		$message ="INDICATEURS:
		
		"
		.$alerte
		."
		
		".$stockmin ;

	}
	

else {
	$message="";
}

if($message!=""){
	$from = "hamzasayad16@gmail.com";
	$to = "hamzasayad2002@gmail.com";
	$subject = " Etat du stock (BASIC)";
	$headers = "From:".$from;
	$mail=mail($to,$subject,$message,$headers );
	if($mail){
		echo" sent.";
	}
	else
	echo" not sent.";
	}

else {
	echo 'Stock en etat normal';
}

	

?>


<?php
//total
//$exe5="select sum(prix*qte) as total from vue1";
$exe5=mysqli_query($conn,"select sum(prix*qte) as total from vue3");
	if($rst = mysqli_fetch_assoc($exe5)){
	$total=$rst['total'];
	if ($total<=0){
		
	}
	else
	echo  '<center><h3 id="mesu">Montant total des produits en stock :  <b><font COLOR= "blue" size="6px">'.$total.'</font> </b></h3></center><br><br>';
	} 

}
?>
<br><br>


<center><button onclick="document.location ='../gestion transactionnelle/requetes.php'" id="bt">Retour</button></center>

<br><br>

	</div>
</body>
</html>





	