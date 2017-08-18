<?php 
include("config.php");

function SignIn() 
{ 
session_start(); //starting the session
if(!empty($_POST['Email'])) //checking the email, is it empty or have some text 
//Searches database for users' email and psw. Displays error message if authentication fails
{ 
	$str = sha1($_POST[Pword]);


	$query = mysql_query("SELECT * FROM Login where Email = '$_POST[Email]' AND Pword = '$str'") or die(mysql_error()); 
	$row = mysql_fetch_array($query) or die(mysql_error()); 
	
	  
	  
	session_regenerate_id();
	$_SESSION["Email"] = $row["Email"];
	$_SESSION["Pword"] = $row["Pword"];
    $_SESSION["Role"] = $row["Role"];
	$_SESSION["FName"] = $row["FName"];
	$_SESSION["LName"] = $row["LName"];

        echo $_SESSION["Role"];
		session_write_close();
	  //Directs user to a dashboard based on role 
	  if( $_SESSION["Role"] == "Faculty"){
		header('Location: facultyDashboard.php');
	  }		
		else {
		header('Location: studentDashboard.php');
	  }
}
} 
if(isset($_POST['Login'])) 
{ 
	SignIn(); 
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Knightly Knowledge</title>
	<link href="stylez.css" rel="stylesheet" />
</head>
<body>
    <!--Header (school logo) -->
	<header>
		<img src="images/MiddleGeorgia_Inst_EXHoriz_DkBgrnd.jpg" alt="MGA Banner" />
	</header>
	<br>
	<!--Header (School logo - left-hand side) -->	
	<div id="loginLogo">
		<br><br><br>
		<img src="images/knightly knowledge logo.jpg" alt="MGA Knightly Knowledge Logo" width="35%" />
	</div>
	<!-- Main Content Section-->
	<main>
		<form action="#" method="post" id="loginForm">
			<fieldset><legend>Login</legend>
			<!-- Email Field-->
				<div class="two"><label for="Email">Email</label><input type="email" name="Email" 
					id="userName" placeholder="Enter Email" required></div>
			<!-- Password -->
				<div class="two"><label for="Pword">Password</label><input type="password" name="Pword" 
					id="password" placeholder="Enter Password" required></div>
			<!-- Submit form  -->
				<div class="one"><input type="submit" value="Login" name="Login" id="submit"></div>
				<div class="two"><a href="forgotpassword.php">Forgot Password?</a></div>
			</fieldset>
		</form>
		<br>
	</main>
	<footer>
			
	</footer>
	
</body>
</html>