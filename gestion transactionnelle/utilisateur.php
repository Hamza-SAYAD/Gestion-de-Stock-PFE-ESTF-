

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

function connexion(){
   // recuperation de la session
    $c=$_SESSION['categorie'];
    // if($c==1) { $t='ADMINISTRATION';}
   
    // else { $t='EMPLOYE';}

    // connection a phpmyadmin
    $link=mysqli_connect("localhost","root","","projet");
    if(!$link) { die('<p>Connection Impossible : '.mysqli_connect_error().'</p>');}
    //connection a la base de données
    
    if(!$link) { die('<p>Impossible de se connecter à la base de données : '.mysql_error().'</p>');}
    // prendre le login 
    //$login=$_SESSION['LOGIN'];
    // requete sql
    //$sqlquery="select fullname, PRENOM, LOGIN, PW from user where LOGIN='$login' and SERVICE='$t'";
    //resultat de la requette sql
  //  $result=mysqli_query($link,$sqlquery);
    //$row=mysqli_fetch_assoc($result);
	
	
	$nom=$_SESSION['fullName'];
	
    
   
    return $c;
}
 $c=connexion();

   if($c==1)
	   {
		   
		   
   
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
		
		
		$reqq=mysqli_query($conn,"select max(userid) AS max from user  ");
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
	<link rel="shortcut icon" href="../images/finalMagaz.jpg">
</head>

<body style ="margin-left:550px; margin-top:40px;">
	
	<br><br><h1 ><font COLOR= "white">Ajout des utilisateurs</font></h1>
	
		<br><br><br><br>
	<div  class="row">
			<div class="eight columns">
		<form action="affichutilisateur.php" method="POST" name="contactForm"  >
  <table align="">
    <tr><td></td><td></td></tr>
	
	 
	
    <tr style="color:white;"><td></td><td><strong >Nom</strong></td></tr>
   <tr><td></td><td><input type="text"   title="Le nom de l'utilisateur" name="nom" id="texte" class="form-control" maxlength="30"></td></tr>
   
   <tr style="color:white;"><td></td><td><strong>Prénom</strong></td></tr>
   <tr><td></td><td><input type="text"   title="Le prénom de l'utilisateur" name="prenom" id="texte" class="form-control " maxlength="10"></td></tr>
   
   <tr style="color:white;"><td></td><td><strong>Nom d'utilisateur</strong></td></tr>
   <tr><td></td><td> <input type="text"  name="username" id="texte" class="form-control " ></td></tr>
   
   <tr style="color:white;"><td></td><td><strong>Mot de passe</strong></td></tr>
   <tr><td></td><td> <input type="password"   title="Le mot de passe doit être fort!" name="password" id="texte" class="form-control " maxlength="10"></td></tr>
   
   
   
   <tr style="color:white;"><td></td><td><strong>Catégorie</strong></td></tr>
   <tr><td></td><td> <select  name="categorie" class="champ" >
				<option value="ADMINISTRATION">Administration</option>
				<option value="EMPLOYE">Employé</option>;

				</select></td></tr>
   
		
		
				
   
 
  </table>
  
  <input type="submit" name="bajout" value="Ajouter" class="" >
  <input type="submit" name="bsupp" value="Supprimer" class="" >
  <input type="submit" name="bmodif" value="Modifier" class="" >
  <input type="submit" name="brech" value="Recherche" class="" ><br>
  <a  href='../menu entete/menu.php'>Retour vers le menu</a>°
  </div>
 </div>

  </form>
  
</body>
</html>
     
		   
		   
	<?php
	
	
	}
	
	else {
		
		include('../menu entete/entetepres.php');
	
	echo '<br><br><br><br><center>
	<h1><font  color="red" size="15">Accès refusé</font></h1>','<p> <font size="5">Cette partie est réservé pour l\'administration,  vous ne pouvez pas y accéder pour les raisons suivantes:</p>
      <p><img src="../images/interdit.PNG" alt="interdit"></p>
      <p class="interdit">
          Vous n\'avez pas les droits requis
     <br/> Vous utilisez un mauvais compte d\'administration</strong></center></font><br><br>
	 <center><button onclick="document.location =\'../menu entete/menu.php\'" id="bt">Retour </button></center>

      </p>
	  
	  
	  </body>
	  </html>';
	  
	  
	}
		
	
	?>	   
		   
	   
	   
	   
	 
	
	