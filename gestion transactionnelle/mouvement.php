
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
	<link rel="stylesheet" href="../css/bootstrap.min	">
</head>

<body style ="margin-left:550px; margin-top:40px;">
	
	<br><br><h1  ><font COLOR= "white">Mouvement des produits (dépot/retrait)</font></h1>
	<br>
	
	<br><br><br><div >
	<form action="affmouv.php" method="POST" >
  <table align="">
    <tr><td></td><td></td></tr>
	
	
    <tr style="color:white;"><td></td><td><strong >Identifiant</strong></td></tr>
   <tr><td></td><td><input type="text" name="id" class="champ" size="25" value="<?php echo $id; ?>"  ></td></tr>
    <tr style="color:white;"><td></td><td><strong >Code produit   </strong> 
	<select  name="code" class="champ" >
	
	<?php
		$reqq=mysqli_query($conn,"SELECT codeprod FROM produit; ");
		while (($rowss = mysqli_fetch_assoc($reqq)) ){
		
		echo '<option value="'.$rowss['codeprod'].'">'.$rowss['codeprod'].'</option>';
		}
		
	
	?>
	
	
	 </select></td></tr> 
	
	<tr style="color:white;"><td></td><td><strong >Code fournisseur   </strong> 
	<select  name="codef" class="champ" >
	
	<?php
		$reqq=mysqli_query($conn,"SELECT id_f FROM fournisseur; ");
		while (($rowss = mysqli_fetch_assoc($reqq)) ){
		
		echo '<option value="'.$rowss['id_f'].'">'.$rowss['id_f'].'</option>';
		}
		
	
	?>
	
	
	 </select></td></tr>
	
	<tr style="color:white;"><td></td><td><strong >Code client   </strong> 
	<select  name="codec" class="champ" >
	
	<?php
		$reqq=mysqli_query($conn,"SELECT id_c FROM client; ");
		while (($rowss = mysqli_fetch_assoc($reqq)) ){
		
		echo '<option value="'.$rowss['id_c'].'">'.$rowss['id_c'].'</option>';
		}
		
	
	?>
	
	
	 </select></td></tr>
	
   <tr style="color:white;"><td></td><td><strong >Quantité</strong></td></tr>
   <tr><td></td><td><input type="text" name="qte" class="champ" size="25"  ></td></tr><br><br><br>
   
   
   
   <br><br>
  <font size="10px" ><tr style="color:white;"><td></td><td><br><strong>Nature :</strong></td><td></td><td><br><strong>Méthode de valorisation :</strong></td></tr>
   <tr style="color:white;"><td></td><td><input  type="radio" name="nature" value="depot" checked>Dépot<input type="radio" name="nature" value="Retrait" >Retrait</td><td></td><td><input  type="radio" name="methodval" value="Retrait_basic" checked >Basique<input  type="radio" name="methodval" value="Retrait_fifo" >FIFO<input type="radio" name="methodval" value="Retrait_lifo" >LIFO</td></tr></font>
  <?php //if(isset($_POST['nature']) && $_POST['nature']='Retrait'){
	  // <tr style="color:white;"><td></td><td><strong>Identifient  </strong> 
	// <SELECT  name="ID" class="champ" >
	
	
	
	// </select></td></tr>
	  ?>
  
  
  <?php //}?>
  </table>
  <br><br>
  <input type="submit" name="bajout" value="Ajouter" class="" >
  <input type="submit" name="bsupp" value="Supprimer" class="" >
  <input type="submit" name="bmodif" value="Modifier" class="" >
  <input type="submit" name="brech" value="Recherche" class="" >

  </form>
<a  class="btn btn-warning" href='../menu entete/menu.php'>Retour vers le menu</a>
<br><br>

	</div>
</body>
</html>
