

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
		
		
		$reqq=mysqli_query($conn,"select max(id_c) AS max from client  ");
		while (($rowss = mysqli_fetch_assoc($reqq)) ){
		
		$id=$rowss['max']+1;
		// $rowss="";
		}
		
		
	?>



 
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
	
	<br><br><h1 ><font COLOR= "white">Ajout des Clients</font></h1>
	
		<br><br><br><br>
	<div  class="row">
			<div class="eight columns">
		<form action="affichclient.php" method="POST" name="contactForm"  >
  <table align="">
    <tr><td></td><td></td></tr>
	
	 <tr style="color:white;"><td></td><td><strong >Code client</strong></td></tr>
   <tr><td></td><td><input  type="text" name="IDC" class="champ" value="<?php echo $id; ?>"></td></tr>
	
    <tr style="color:white;"><td></td><td><strong >Raison Sociale / Nom</strong></td></tr>
   <tr><td></td><td><input type="text" pattern=".{3,30}" class="champ" title="La raison sociale contient minimum 3 caractères et maximum 30 caractères." name="RAISSOC_C" id="texte" class="form-control" maxlength="30"></td></tr>
   
   <tr style="color:white;"><td></td><td><strong>Tél.</strong></td></tr>
   <tr><td></td><td><input type="text"  pattern=".{10,10}" class="champ" title="Le numéro de téléphone contient 10 numéros" name="TEL_C" id="texte"  maxlength="10"></td></tr>
   
   <tr style="color:white;"><td></td><td><strong>E-mail</strong></td></tr>
   <tr><td></td><td> <input type="email"  name="EMAIL_C"class="champ" id="texte"  ></td></tr>
   
   <tr style="color:white;"><td></td><td><strong>Fax.</strong></td></tr>
   <tr><td></td><td> <input type="text" pattern=".{10,10}"  class="champ" title="Le Fax contient 10 numéros" name="FAX_C" id="texte" class="champ" maxlength="10"></td></tr>
   
   <tr style="color:white; margin-bottom:30px;"><td></td><td><strong>Adresse</strong></td></tr>
   <tr><td></td><td><textarea  id="textarea"  name="ADRESSE_C" class="champ" cols="50" rows="4" maxlength="100" style=" margin-bottom:30px;"></textarea></td></tr>
   
   
 
  </table>
  
  <input type="submit" name="bajout" value="Ajouter" class="" >
  <input type="submit" name="bsupp" value="Supprimer" class="" >
  <input type="submit" name="bmodif" value="Modifier" class="" >
  <input type="submit" name="brech" value="Recherche" class="" ><br>
  <a  class="btn btn-warning" href='../menu entete/menu.php'>Retour vers le menu</a>
  </div>
 </div>

  </form>
  
</body>
</html>
   
	
	