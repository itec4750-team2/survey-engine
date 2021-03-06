<!DOCTYPE html>
<html lang="en">
<head><!-- Builds basis of site. Sets style1 as the CSS for this page. -->
	<meta charset="utf-8">
	<title>Knightly Knowledge - Faculty Classes</title>
	<link href="style1.css" rel="stylesheet" />
	<script src="dashboard.js" type="text/javascript"></script>
</head>
<body>
	<header>
	<a href="facultyDashboard.php">
		<img class="logo" src="images/knight.jpg" alt="MGA Knight Logo" />
	</a>	
	</header>
	
	<!-- Navigation Bar (purple) -->	
	<div id="purpleBar">
		<span class="indent">Knightly Knowledge - <a href="facultyDashboard.php" style="color: #FFFFFF">Faculty Dashboard</a>
		- <a href="classes.php" style="color: #FFFFFF">Classes</a></span>
	</div>
	
	<!-- Sets up data for the side navigation bar. -->
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="facultyDashboard.php">Home</a>
		<a href="classes.php">Classes</a>
		<a href="yoursurveys.php">Your Surveys</a>
	<!--	<a href="createnew.php">Create New Survey</a> -->
		<a href="settings.php">Settings</a>
		<a href="facultyfeedback.php">Feedback</a>
		<a href="logout.php">Logout</a>
	</div>
	<!-- Open side navigation bar -->
	<span class="pointer" onclick="openNav()">&#9776; Menu</span>
	
	<!-- Main Content Section-->
	<div class="wrapper">

	<!-- Builds table for classes. Placeholders are present currently other than Spring 2017 Capstone. -->
		<div id="main">
			<h2 class="center">Your Classes</h2>
			
			<table>
			  <tr>
				<th>Class</th>
				<th>Semester</th>
			  </tr>
			  <tr>
				<td><a href="reporting.php">ONLINE Senior Capstone</a></td>
				<td>Spring 2017</td>
			  </tr>
			  <tr>
				<td><a href="#">Placeholder</a></td>
				<td>Placeholder</td>
				</tr>
			  <tr>
				<td><a href="#">Placeholder</a></td>
				<td>Placeholder</td>
				</tr>
			  <tr>
				<td><a href="#">Placeholder</a></td>
				<td>Placeholder</td>
				</tr>
			  <tr>
				<td><a href="#">Placeholder</a></td>
				<td>Placeholder</td>
				</tr>
			  <tr>
				<td><a href="#">Placeholder</a></td>
				<td>Placeholder</td>
				</tr>
			</table>

			<hr>
			
		</div>
	</div>
	
	<footer>
			
	</footer>
	
</body>
</html>