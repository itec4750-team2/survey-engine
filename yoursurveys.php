<!DOCTYPE html>
<html lang="en">
<head> <!-- Builds basis of site. Sets style1 as the CSS for this page. -->
	<meta charset="utf-8">
	<title>Knightly Knowledge - Faculty Surveys</title>
	<link href="style1.css" rel="stylesheet" />
	<script src="dashboard.js" type="text/javascript"></script>
</head>
<body>
	<header>
	<!-- Header Section -- Clickable image that redirects to the Faculty Dashboard -->
	<a href="facultyDashboard.php">
		<img class="logo" src="images/knight.jpg" alt="MGA Knight Logo" />
	</a>	
	</header>
	
	<!-- Navigation Bar (purple) -->	
	<div id="purpleBar">
		<span class="indent">Knightly Knowledge - <a href="facultyDashboard.php" style="color: #FFFFFF">Faculty Dashboard</a>
		- <a href="yoursurveys.php" style="color: #FFFFFF">Your Surveys</a></span>
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
	
	<!-- Opens side navigation bar -->
	<span class="pointer" onclick="openNav()">&#9776; Menu</span>
	
	<!-- Main Content Section-->
	<div class="wrapper">
		<div id="main">
			<h2 class="center">Your Created Surveys</h2>
			<p>On this page, you will see a list of all the surveys you have created.</p><br>
			<table>
			    <!-- Row 1 -->
			  <tr>
				<th>Survey Title</th>
				<th>Class</th>
				<th>Semester</th>
			  </tr>
			   <!-- Row 2 -->
			  <tr>
				<td><a href="#">Group Member Evaluation</a></td>
				<td>ONLINE Senior Capstone</td>
				<td>Spring 2017</td>
			  </tr>
			   <!-- Row 3-->
			  <tr>
				<td><a href="#">Group Member Evaulation</a></td>
				<td>ONLINE Senior Capstone</td>
				<td>Summer 2017r</td>
			  </tr>
			   <!-- Row 4 -->
			  <tr>
				<td><a href="#">Placeholder</a></td>
				<td>Placeholder</td>
				<td>Placeholder</td>
			  </tr>
			   <!-- Row 5 -->
			  <tr>
				<td><a href="#">Placeholder</a></td>
				<td>Placeholder</td>
				<td>Placeholder</td>
			  </tr>
			   <!-- Row 6 -->
			  <tr>
				<td><a href="#">Placeholder</a></td>
				<td>Placeholder</td>
				<td>Placeholder</td>
			  </tr>
			   <!-- Row 7-->
			  <tr>
				<td><a href="#">Placeholder</a></td>
				<td>Placeholder</td>
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