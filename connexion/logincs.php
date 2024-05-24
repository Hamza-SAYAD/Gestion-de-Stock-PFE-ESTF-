<?php
	session_start();
	
	
	
	// Check if user is already logged in
	if(isset($_SESSION['loggedIn'])){
		header('Location: ../acceuil/home.php');
		exit();
	}
	require_once('headers.html');
	


?>

  <body  style ="margin-left:550px; margin-top:40px;">

<?php
// Variable to store the action (login, register, passwordReset)
$action = '';
	if(isset($_GET['action'])){
		$action = $_GET['action'];
		if($action == 'register'){
			
?>

			<div class="container">
			  <div class="row justify-content-center">
			  <div class="col-sm-12 col-md-5 col-lg-5">
				<div class="card">
				  <br><div class="card-header">
					
					<h1><font  color="white">Register </font></h1>
				  </div><br><br>
				  
				  <div  class="card-header">
			
				  <div class="card-body">
					<form action="" method="POST">
					<div id="registerMessage"></div>
					  <div class="form-group">
						<label for="registerFullName"><font size="5px" color="white">FullName <font color="red">  *</font></label>
						<input type="text" class="form-control" id="registerFullName" name="registerFullName">
						<!-- <small id="emailHelp" class="form-text text-muted"></small> -->
					  </div>
					   <div class="form-group">
						<label for="registerUsername"><font color="white" size="5px">Username <font color="red">  *</font></label>
						<input type="text" class="form-control" id="registerUsername" name="registerUsername" autocomplete="on">
					  </div>
					  <div class="form-group">
						<label for="registerPassword1"><font color="white" size="5px">Password <font color="red">  *</font></label>
						<input type="password" class="form-control" id="registerPassword1" name="registerPassword1">
					  </div>
					  <div class="form-group">
						<label for="registerPassword2"><font color="white" size="5px">Re-enter password <font color="red">  *</font> </label>
						<input type="password" class="form-control" id="registerPassword2" name="registerPassword2">
					  </div><br><br>
					  <a href="logincs.php" class="btn btn-primary"><font size="4px">Login</font></a>
					  <input type="submit" value="Register" id="register" class="btn btn-success" name="register">
					  <button type="reset" class="btn">Clear</button>
					</form>
				  </div>
				</div>
				</div>
			  </div>
			</div></div>
<?php

 
$conn = new PDO('mysql:host=localhost;dbname=stockges', 'root', '');
 
if(isset($_POST['register'])) {
   
	$registerFullName = '';
	$registerUsername = '';
	$registerPassword1 = '';
	$registerPassword2 = '';
	$hashedPassword = '';
	

	
	if(isset($_POST['registerUsername'])){
		$registerFullName = htmlentities($_POST['registerFullName']);
		$registerUsername = htmlentities($_POST['registerUsername']);
		$registerPassword1 = htmlentities($_POST['registerPassword1']);
		$registerPassword2 = htmlentities($_POST['registerPassword2']);
		
		if(!empty($registerFullName) && !empty($registerUsername) && !empty($registerPassword1) && !empty($registerPassword2)){
			
			// Sanitize name
			$registerFullName = filter_var($registerFullName, FILTER_SANITIZE_STRING);
			
			// Check if name is empty
			if($registerFullName == ''){
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter your name.</div>';
				exit();
			}
			
			// Check if username is empty
			if($registerUsername == ''){
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter your username.</div>';
				exit();
			}
			
			// Check if both passwords are empty
			if($registerPassword1 == '' || $registerPassword2 == ''){
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter both passwords.</div>';
				exit();
			}
			
			// Check if username is available
			$usernameCheckingSql = 'SELECT * FROM user WHERE username = :username';
			$usernameCheckingStatement = $conn->prepare($usernameCheckingSql);
			$usernameCheckingStatement->execute(['username' => $registerUsername]);
			
			if($usernameCheckingStatement->rowCount() > 0){
				// Username already exists. Hence can't create a new user
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Username not available. Please select a different username.</div>';
				exit();
			} else {
				// Check if passwords are equalyy
				if($registerPassword1 !== $registerPassword2){
					echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Passwords do not match.</div>';
					exit();
				} else {
					// Start inserting user to DB
					// Encrypt the password
					$hashedPassword = md5($registerPassword1);
					$insertUserSql = 'INSERT INTO user(fullName, username, password, service) VALUES(:fullName, :username, :password, :service )';
					$insertUserStatement = $conn->prepare($insertUserSql);
					$insertUserStatement->execute(['fullName' => $registerFullName, 'username' => $registerUsername, 'password' => $hashedPassword, 'service'=> 'EMPLOYE' ]);
					
					echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Registration complete.</div>';
					exit();
				}
			}
		} else {
			// One or more mandatory fields are empty. Therefore, display a the error message 
			echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter all fields marked with a (*)</div>';
			exit();
		}
	}
}
?>	
<?php
			
			echo '</body></html>';
			
			
			exit();
	} 
	}
?>
		

	<!-- Default Page Content (login form) -->
    <div  class="row">
      <div class="eight columns">
	  <div class="col-sm-12 col-md-5 col-lg-5">
		<div class="card">
		  <br><br><div  class="card-header"><h1>
			<font  color="white">Login </font></h1><br><br><br><br>
		  </div>
		  <div class="card-body">
			<form action="" method="POST" id="contactForm" name="contactForm">
			<div id="loginMessage"></div>
			
			  <div class="form-group">
				<label  for="contactName"><font color="white" size="5px">Username <font color="red">  *</font></font></label>
				<input type="text"  id="loginUsername" name="loginUsername">
			  </div><br>
			  <div class="form-group">
				<label for="contactEmail"><font color="white" size="5px">Password<font color="red">  *</font></font></label>
				<input type="password"  id="loginPassword" name="loginPassword">
			  </div><br><br>
			  
			  <div class="form-group">
				<label for=""><font color="white" size="5px">Categorie<font color="red">  </font></font></label>
				<select  name="categorie" class="champ" >
				<option value="1">Administration</option>
				<option value="2">Employe</option>;

				</select>
			  </div><br><br>
			  
			  
			  <input type="submit" id="login" value="Login" class="submit" name="login">
			  
			  <a href="logincs.php?action=register" class="submit"><font size="4px">Register</font></a>
			  <button type="reset" class="submit">Clear</button>
			</form>
		  </div>
		</div>
		</div>
      </div>
    </div>
	<?php
	
				$_SESSION['categorie']=@$_POST['categorie'];
				
				$c=@$_POST['categorie'];
				
				
				if($c==1) { $t='ADMINISTRATION';}
				else { $t='EMPLOYE';}
		
	
	$conn = new PDO('mysql:host=127.0.0.1;dbname=stockges', 'root', '');
	if (isset($_POST['login'])){
		$loginUsername = '';
	$loginPassword = '';
	$hashedPassword = '';
	
	if(isset($_POST['loginUsername'])){
		$loginUsername = $_POST['loginUsername'];
		$loginPassword = $_POST['loginPassword'];
		// $_SESSION['user'] = $loginUsername;
		if(!empty($loginUsername) && !empty($loginUsername)){
			
			// Sanitize username
			$loginUsername = filter_var($loginUsername, FILTER_SANITIZE_STRING);
			
			// Check if username is empty
			if($loginUsername == ''){
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter Username</div>';
				exit();
			}
			
			// Check if password is empty
			if($loginPassword == ''){
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter Password</div>';
				exit();
			}
			
			// Encrypt the password
			$hashedPassword = md5($loginPassword);
			
			// Check the given credentials
			$checkUserSql = 'SELECT * FROM user WHERE username = :username AND password = :password and SERVICE=:t';
			$checkUserStatement = $conn->prepare($checkUserSql);
			$checkUserStatement->execute(['username' => $loginUsername, 'password' => $hashedPassword, 't'=>$t]);
			
			// Check if user exists or not
			if($checkUserStatement->rowCount() > 0){
				// Valid credentials. Hence, start the session
				$row = $checkUserStatement->fetch(PDO::FETCH_ASSOC);

				$_SESSION['loggedIn'] = '1';
				$_SESSION['fullName'] = $row['fullName'];
				
				
				
				echo '<div class="alert alert-success"><p style="color:white;"><button type="button" class="close" data-dismiss="alert">&times;</button>Login success! Redirecting you to presentation page...</p></div>';
				header('Location: ../acceuil/presentation.php');
				
				exit();
				
			} 
			
			else {
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Incorrect Username / Password</div>';
				exit();
			}
			
			
		} else {
			echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter Username and Password</div>';
			exit();
		}
	}
		
		
	}
	
	
?>

  </body>
</html>
