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
	<br><br><h1 align="center" ><font COLOR= "white">MOUVEMENTS</font></h1>
	

	<br>
	<?php 
//traitement
$name=$_SESSION['fullName'];

$usernameCheckingSql = "SELECT * FROM user WHERE fullName = '$name'";
			
			
			$req=mysqli_query($conn,$usernameCheckingSql);
			$row=mysqli_fetch_assoc($req);
$iduser=$row['userID'];

$messs="";
$mess="";
$mes="";
$id=@$_POST['id'];
$codef=@$_POST['codef'];
$codec=@$_POST['codec'];
$code=@$_POST['code'];
$qte=@$_POST['qte'];
$date=date('y-m-d H:i:s');

$nature=@$_POST['nature'];
$methodval=@$_POST['methodval'];


	
if ($methodval=='Retrait_basic'){
	$stock_gen="stock_basic";
}
else if ($methodval=='Retrait_fifo') {
	$stock_gen="stock_fifo";
}
else
	$stock_gen="stock_lifo";


	if(isset($_POST['bajout'])   ){ 
	
	if ( $nature=='Retrait' && $methodval!=null ){
		
		$reqs=mysqli_query($conn,"select sum(quantite) as qtetot from mouvmt where codeprd='$code' and (nature='depot' or nature='$stock_gen') ");
		while (($rows = mysqli_fetch_assoc($reqs)) ){
			
			if($qte<=$rows['qtetot']){
				
		$exe1=mysqli_query($conn,"insert into mouvmt values('$id','$code','$codef','$codec','$iduser','$qte','$methodval','$date')");
	
				
				if($exe1){
						$messs="Ajout réussie !!";
				}
				else
					$mess="Echec ajout !!". mysqli_error($conn);
					
				
   
		}
		
		else $mess="Stock insuffisant !!";
		
		}
	}
	
	else{
		$exe1=mysqli_query($conn,"insert into mouvmt values('$id','$code','$codef','$codec','$iduser','$qte','depot','$date')");
				
				if($exe1){
						$messs="Ajout réussie !!";
				}
				else
					$mess="Echec ajout !!". mysqli_error($conn);
	}
		
					
	
	}
			
		







?>	
	
<?php 
//traitement avec fifo





	

	if(isset($_POST['bajout']) && $nature=='Retrait' && $methodval=='Retrait_fifo' && $messs=="Ajout réussie !!"){
	
	
	
	
	$req=mysqli_query($conn,"select idmv , quantite from mouvmt where codeprd='$code' and (nature='depot' or nature='stock_fifo') order by date asc ");
	
	

	while (($row = mysqli_fetch_assoc($req)) && $qte!=0){
		
		$idm=$row['idmv'];
	    $quantites=$row['quantite'];
	
	
		
		
	
		
	 if ($qte > $quantites){
			$req2=mysqli_query($conn,"delete from mouvmt where idmv='$idm'");
			if($req2){
				$qte= $qte-$quantites;
				
			}
			else {
				
			}
			
			}
		
		else{
			
			
				$req4=mysqli_query($conn,"update mouvmt set  quantite='$quantites'-'$qte' , nature='stock_fifo'  where idmv='$idm'");
			
			
			
			if($req4){
				$qte=0;

			}
			
			
		}
			
		

}
print'</table >';
print'</div>';

}


//traitement basic

if(isset($_POST['bajout']) && $nature=='Retrait' && $methodval=='Retrait_basic' && $messs=="Ajout réussie !!"){
	
	
	
	
	$req=mysqli_query($conn,"select idmv , quantite from mouvmt where codeprd='$code' and (nature='depot' or nature='stock_basic')  ");
	
	

	while (($row = mysqli_fetch_assoc($req)) && $qte!=0){
		
		$idm=$row['idmv'];
	    $quantites=$row['quantite'];
	
	
		
		
	
		
	 if ($qte > $quantites){
			$req2=mysqli_query($conn,"delete from mouvmt where idmv='$idm'");
			if($req2){
				$qte= $qte-$quantites;
				
			}
			else {
				
			}
			
			}
		
		else{
			
			
				$req4=mysqli_query($conn,"update mouvmt set  quantite='$quantites'-'$qte' , nature='stock_basic'  where idmv='$idm'");
			
			
			
			if($req4){
				$qte=0;

			}
			
			
		}
			
		

}
print'</table >';
print'</div>';

}


//traitement avec lifo

if(isset($_POST['bajout']) && $nature=='Retrait' && $methodval=='Retrait_lifo' && $messs=="Ajout réussie !!"){
	
	$req=mysqli_query($conn,"select idmv , quantite from mouvmt where codeprd='$code' and (nature='depot' or nature='stock_lifo') order by date desc ");
	
	

	while (($row = mysqli_fetch_assoc($req)) && $qte!=0){
		
		$idm=$row['idmv'];
	    $quantites=$row['quantite'];
	
	
		
		
	
		
	 if ($qte > $quantites){
			$req2=mysqli_query($conn,"delete from mouvmt where idmv='$idm'");
			if($req2){
				$qte= $qte-$quantites;
				//$messs="traitement1 a reussie !!";
			}
			// else {
				//$messs="traitement1 a echoué !!";
			// }
			
			}
		
		else{
			
			
				$req4=mysqli_query($conn,"update mouvmt set  quantite='$quantites'-'$qte', nature='stock_lifo'  where idmv='$idm'");
			
			
			
			if($req4){
				$qte=0;
				//$messs="traitement3 a reussie !!";
			}
			// else {
				// $messs="traitement3 a echoué !!";
			
			// }
			
		}
			
		

}
print'</table >';
print'</div>';

}



?>	


<?php 
//suppréssion
if(isset($_POST['bsupp'])){
$exe2=mysqli_query($conn,"delete from mouvmt where idmv='$id'");
if($exe2){
   $messs="Suppréssion réussie !!";
}
else
   $mess="Echec suppréssion !!". mysqli_error($conn);
}

?>

<?php 
//modifier
if(isset($_POST['bmodif']) && $nature=='depot' && $methodval=='Retrait_basic' ){
$exe3=mysqli_query($conn,"update mouvmt set codeprd='$code', ID_F='$codef',ID_C='$codec', quantite='$qte',nature='depot', date='$date' where idmv='$id'");
if($exe3){
   $messs="Modification réussie !!";
}
else
   $mess="Echec modification !!". mysqli_error($conn);
}

else if(isset($_POST['bmodif']) && $nature=='depot' && $methodval=='Retrait_fifo' ){
$exe3=mysqli_query($conn,"update mouvmt set codeprd='$code', ID_F='$codef',ID_C='$codec', quantite='$qte',nature='stock_fifo', date='$date' where idmv='$id'");
if($exe3){
   $messs="Modification réussie !!";
}
else
   $mess="Echec modification !!". mysqli_error($conn);
}

else if(isset($_POST['bmodif']) && $nature=='depot' && $methodval=='Retrait_lifo' ){
$exe3=mysqli_query($conn,"update mouvmt set codeprd='$code', ID_F='$codef',ID_C='$codec', quantite='$qte',nature='stock_lifo', date='$date' where idmv='$id'");
if($exe3){
   $messs="Modification réussie !!";
}
else
   $mess="Echec modification !!". mysqli_error($conn);
}
else if(isset($_POST['bmodif']) && $nature=='Retrait' && $methodval!="" ){
$exe3=mysqli_query($conn,"update mouvmt set codeprd='$code', ID_F='$codef',ID_C='$codec', quantite='$qte',nature='$methodval', date='$date' where idmv='$id'");
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
  $id=@$_POST['id'];
   if(isset($_POST['brech'])&& !empty($id)){
	$rs=mysqli_query($conn,"select * from mouvmt where idmv='$id' ");
	print'<div style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>Identifiant</th><th>Code produit</th><th>Code fournisseur</th><th>Code client</th><th>Code utilisateur</th><th>Quantité</th><th>Nature</th><th>Date</th></tr>';
	while ($row2 = mysqli_fetch_assoc($rs)){
	$id=$row2['idmv'];
	$codep=$row2['codeprd'];
	$quantite=$row2['quantite'];
	$nature=$row2['nature'];
	$date=$row2['date'];
	$codef=$row2['ID_F'];
	$codec=$row2['ID_C'];$codeu=$row2['ID_user'];
	print'<tr>';
	print'<td>';
	     echo '<center>'.$id.'</center>';
	print'</td>';
	
	print'<td>';
	     echo '<center>'.$codep.'</center>';
	print'</td>';
	
	print'<td>';
	     echo '<center>'.$codef.'</center>';
	print'</td>';
	
	print'<td>';
	     echo '<center>'.$codec.'</center>';
	print'</td>';
	print'<td>';
	     echo '<center>'.$codeu.'</center>';
	print'</td>';
	
	
	print'<td>';
	     echo 	'<center>'.$quantite.'</center>';
	print'</td>';
	
		print'<td>';
	     echo 	'<center>'.$nature.'</center>';
	print'</td>';
	
		print'<td>';
	     echo 	'<center>'.$date.'</center>';
	print'</td>';
	
	print'</tr>';
		}
	print'</table >';
print'</div>';
}
	?>
  <p><br></p>
	 <?php 
   print'<br><br><br>';
	$rq=mysqli_query($conn,"select * from mouvmt ORDER by nature, date ");
	print'<div style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>Identifiant</th><th>Code produit</th><th>Code fournisseur</th><th>Code client</th><th>Code utilisateur</th><th>Quantité</th><th>Nature</th><th>Date</th></tr>';
	while ($row2 = mysqli_fetch_assoc($rq)){
	$id=$row2['idmv'];
	$codep=$row2['codeprd'];
	$quantite=$row2['quantite'];
	$nature=$row2['nature'];
	$date=$row2['date'];
	$codef=$row2['ID_F'];
	$codec=$row2['ID_C'];$codeu=$row2['ID_user'];
	print'<tr>';
	print'<td>';
	     echo '<center>'.$id.'</center>';
	print'</td>';
	
	print'<td>';
	     echo '<center>'.$codep.'</center>';
	print'</td>';
	
	print'<td>';
	     echo '<center>'.$codef.'</center>';
	print'</td>';
	
	print'<td>';
	     echo '<center>'.$codec.'</center>';
	print'</td>';
	print'<td>';
	     echo '<center>'.$codeu.'</center>';
	print'</td>';
	
	
	print'<td>';
	     echo 	'<center>'.$quantite.'</center>';
	print'</td>';
	
		print'<td>';
	     echo 	'<center>'.$nature.'</center>';
	print'</td>';
	
		print'<td>';
	     echo 	'<center>'.$date.'</center>';
	print'</td>';
	
	print'</tr>';
		}
	print'</table >';
print'</div>';

	?>
	
	<?php //echo '<br><h3><font COLOR= "red">'.$mes.'</font></h3>'; ?>
	
	<?php 
	
	echo '<br><h1><center><font COLOR= "red" SIZE="15">'.$mess.'</font></center></h2>';
	echo '<br><h1><center><font COLOR= "green" SIZE="15">'.$messs.'</center></font></h2>';
	?><br><br>
	<center><button onclick="document.location ='mouvement.php'" id="bt">Retour </button></center>
	
	</body>
</html>