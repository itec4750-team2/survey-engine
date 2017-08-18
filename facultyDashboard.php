<?php /* Includes config.php for functions. */
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>			<!-- Builds basis of site. Sets style1 as the CSS for this page. -->
	<meta charset="utf-8">
	<title>Knightly Knowledge - Faculty Dashboard</title>
	<link href="style1.css" rel="stylesheet" />
	<script src="dashboard.js" type="text/javascript"></script>
</head>
<body>
	<header>
	<a href="facultyDashboard.php">
		<img class="logo" src="images/knight.jpg" alt="Knight" />
	</a>	
	</header>
		
	<div id="purpleBar">
		<span class="indent">Knightly Knowledge - Faculty Dashboard</span>
	</div>
	
	<!-- Sets up data for the side navigation bar. -->
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="facultyDashboard.php">Home</a>
		<a href="classes.php">Classes</a>
		<a href="yoursurveys.php">Your Surveys</a>
		<!-- <a href="createnew.php">Create New Survey</a> -->
		<a href="settings.php">Settings</a>
		<a href="facultyfeedback.php">Feedback</a>
		<a href="logout.php">Logout</a>
	</div>
	<span class="pointer" onclick="openNav()">&#9776; Menu</span>
	
	<div class="wrapper">

	<!-- Sets up the dashboard. -->
		<div id="main">
				
			<h2 class="center">Welcome, <?php include("name.php"); ?></h2>
			<p>
			</p><br><br>
		
			<div class="dashboardIcon">
				<a href="classes.php">
					<img src="images/lecture.png" alt="Classes" />
					<figcaption>Classes</figcaption>
				</a>
			</div>
			<div class="dashboardIcon">
				<a href="yoursurveys.php">
					<img src="images/yoursurveys.png" alt="Your Surveys" />
					<figcaption>Your Surveys</figcaption>
				</a>
			</div>
			<!-- This section will be implemented by future development teams if deemed appropriate. -->
			<!-- <div class="clear" ></div> -->
			<!-- <div class="dashboardIcon"> -->
			<!--	<a href="createnew.php"> -->
	        <!--		<img src="images/createnew.png" alt="Create New Survey" /> -->
			<!--		<figcaption>Create New Survey</figcaption>-->
			<!-- </a> -->
			<!-- </div> -->
			<div class="dashboardIcon">
				<a href="settings.php">
					<img src="images/settings.png" alt="Settings" />
					<figcaption>Settings</figcaption>
				</a>
			</div>
			<div class="dashboardIcon">
				<a href="facultyfeedback.php">
					<img src="images/notebook-1.png" alt="Feedback" />
					<figcaption>Feedback</figcaption>
				</a>
			</div>
			<div class="clear" ></div>
		
		</div>
	</div>
	
	<footer>
			
	</footer>
	
</body>
</html>