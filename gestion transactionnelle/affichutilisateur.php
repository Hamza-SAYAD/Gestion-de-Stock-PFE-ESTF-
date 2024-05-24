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
	<br><br><h1 align="center" ><font COLOR= "white">UTILISATEURS</font></h1>
	
	<br>
	

<?php 
//ajout

	$hashedPassword = '';
	$mess="";
	$messs="";
	$nom=@htmlentities($_POST['nom']);
	$prenom=@htmlentities($_POST['prenom']);
	$username=@htmlentities($_POST['username']);
	$password=@htmlentities($_POST['password']);
	$service=@htmlentities($_POST['categorie']);


if(isset($_POST['bajout'])) {
   
	// $registerFullName = '';
	// $registerUsername = '';
	// $registerPassword1 = '';
	// $registerPassword2 = '';
	// $hashedPassword = '';
	// $mess="";
	// $messs="";
	// $nom=@htmlentities($_POST['nom']);
	// $prenom=@htmlentities($_POST['prenom']);
	// $username=@htmlentities($_POST['username']);
	// $password=@htmlentities($_POST['password']);

	
	//if(isset($_POST['registerUsername'])){
		// $registerFullName = htmlentities($_POST['registerFullName']);
		// $registerUsername = htmlentities($_POST['registerUsername']);
		// $registerPassword1 = htmlentities($_POST['registerPassword1']);
		// $registerPassword2 = htmlentities($_POST['registerPassword2']);
		
		if(!empty($nom) && !empty($prenom) && !empty($username) && !empty($password)){
			
			// Sanitize name
			$prenom = filter_var($prenom, FILTER_SANITIZE_STRING);
			$nom = filter_var($nom, FILTER_SANITIZE_STRING);
			
			// Check if name is empty
			if($nom == ''|| $prenom == ''){
				echo '<br><br><br><br><center><div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter your firstname and your lastname   .</div>
				
				<br><br><button onclick="document.location =\'utilisateur.php\'" id="bt">Retour </button></center>';
				exit();
			}
			
			// Check if username is empty
			if($username == ''){
				echo '<br><br><br><br><center><div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter your username.</div>
				<br><br><button onclick="document.location =\'utilisateur.php\'" id="bt">Retour </button></center>';
				exit();
			}
			
			
			
			// Check if username is available
			$usernameCheckingSql = "SELECT * FROM user WHERE username = '$username' and service='$service'";
			// $usernameCheckingStatement = $conn->prepare($usernameCheckingSql);F
			// $usernameCheckingStatement->execute(['username' => $username]);
			$req=mysqli_query($conn,$usernameCheckingSql);
			$row=mysqli_fetch_assoc($req);
			if(!empty($row)){
				// Username already exists. Hence can't create a new user
				
				echo '<br><br><br><br><center><div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Username not available. Please select a different username.</div>
				<br><br><button onclick="document.location =\'utilisateur.php\'" id="bt">Retour </button></center>';
				
				
				exit();
			}
			$usernameCheckingSql = "SELECT * FROM user WHERE fullName = '$prenom $nom' and service='$service'";
			// $usernameCheckingStatement = $conn->prepare($usernameCheckingSql);F
			// $usernameCheckingStatement->execute(['username' => $username]);
			$req=mysqli_query($conn,$usernameCheckingSql);
			$row=mysqli_fetch_assoc($req);
			if(!empty($row)){
				// Username already exists. Hence can't create a new user
				
				echo '<br><br><br><br><center><div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Fullname not available. Please select a different fullname.</div>
				<br><br><button onclick="document.location =\'utilisateur.php\'" id="bt">Retour </button></center>';
				
				
				exit();
			} else {
				// Check if passwords are equalyy
				
					// Start inserting user to DB
					// Encrypt the password
					$hashedPassword = md5($password);
					$insertUserSql = "INSERT INTO user(fullName, username, password, service) VALUES('$prenom $nom', '$username', '$hashedPassword','$service')";
					// $insertUserStatement = $conn->prepare($insertUserSql);
					// $insertUserStatement->execute(['fullName' => $prenom.' '.$nom, 'username' => $username, 'password' => $hashedPassword]);
					
					$reqq=mysqli_query($conn,$insertUserSql);
					if($reqq){
						   $messs="Ajout réussie !!";
						}
						else
						   $mess="Echec Ajout !!". mysqli_error($conn);
						}
					
					// exit();
				}
				else {
			// One or more mandatory fields are empty. Therefore, display a the error message 
			echo '<br><br><br><br><center><div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter all fields marked with a (*)</div>
			<br><br><button onclick="document.location =\'utilisateur.php\'" id="bt">Retour </button></center>';
			
			
			exit();
		}
			}
			
		 
	



// if(isset($_POST['bajout'])){
	 
	// $exe1=mysqli_query($conn,"insert into user (ID_C, RAISSO_C, ADRESSE_C, TEL_C, FAX, EMAIL) values('$IDC','$RAISSOC_C','$ADRESSE_C','$TEL_C','$FAX_C','$EMAIL_C')");
	// if($exe1){
   // $messs="Ajout réussie !!";
// }
// else
   // $mess="Echec ajout !!". mysqli_error($conn);
// }

 



?>

<?php 
//suppression
if(isset($_POST['bsupp'])){
$exe2=mysqli_query($conn,"delete from user where username='$username'");
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
	$hashedPassword = md5($password);
$exe3=mysqli_query($conn,"update user set fullName='$prenom $nom', username='$username', password='$hashedPassword', service='$service'  where username='$username'");
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
$user=@$_POST['username'];
if(isset($_POST['brech'])&& !empty($user)){
$exe4=mysqli_query($conn,"select * from user where username='$username'");
if($exe4){
   print'<div style="overflow-x:auto;">';
	print'<table border="3" id="tbfich">';
	print'<tr><th>Code Utilisateur</th><th>Nom Complet</th><th>Nom d\'utilisateur</th><th>Catégorie</th></tr>';
	while ($row = mysqli_fetch_assoc($exe4)){
	
	

	
	$id=$row['userID'];
	$nom_complet=$row['fullName'];
	$username=$row['username'];
	$categorie=$row['service'];
	
	
	
	print'<tr>';
	print'<td>';
	     echo '<center>'.$id.'</center>';
	print'</td>';
	
	print'<td>';
	     echo '<center>'.$nom_complet.'</center>';
	print'</td>';
	
	
	print'<td>';
	     echo 	'<center>'.$username.'</center>';
	print'</td>';
	
	print'<td>';
	     echo 	'<center>'.$categorie.'</center>';
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
	$rq=mysqli_query($conn,"select * from user ");
	print'<div style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>Code Utilisateur</th><th>Nom Complet</th><th>Nom d\'utilisateur</th><th>Catégorie</th></tr>';
	
	while ($row = mysqli_fetch_assoc($rq)){
		
$id=$row['userID'];
	$nom_complet=$row['fullName'];
	$username=$row['username'];
	$categorie=$row['service'];
	
	
	
	print'<tr>';
	print'<td>';
	     echo '<center>'.$id.'</center>';
	print'</td>';
	
	print'<td>';
	     echo '<center>'.$nom_complet.'</center>';
	print'</td>';
	
	
	print'<td>';
	     echo 	'<center>'.$username.'</center>';
	print'</td>';
	
	print'<td>';
	     echo 	'<center>'.$categorie.'</center>';
	print'</td>';
	
		
	
	
	
	print'</tr>';
		
	
	
	
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
	<center><button onclick="document.location ='utilisateur.php'" id="bt">Retour </button></center>
	</body>
</html>