<!DOCTYPE html>
<html lang="en">
<head> <!-- Builds basis of site. Sets style1 as the CSS for this page. -->
	<meta charset="utf-8">
	<title>Knightly Knowledge - Studnt Surveys</title>
	<link href="style1.css" rel="stylesheet" />
	<script src="dashboard.js" type="text/javascript"></script>
</head>
<body>
	<header>
	<a href="studentDashboard.php">
		<img class="logo" src="images/knight.jpg" alt="MGA Knight Logo" />
	</a>	
	</header>
		
	<div id="purpleBar">
		<span class="indent">Knightly Knowledge - <a href="studentDashboard.php" style="color: #FFFFFF">Student Dashboard</a>
		- <a href="yoursurveys_student.php" style="color: #FFFFFF">Your Surveys</a></span>
	</div>
	<!-- Sets up data for the side navigation bar. -->
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="studentDashboard.php">Home</a>
		<a href="classes_student.php">Classes</a>
		<a href="yoursurveys_student.php">Your Surveys</a>
		<a href="studentfeedback.php">Feedback</a>
		<a href="logout.php">Logout</a>
	</div>
	<span class="pointer" onclick="openNav()">&#9776; Menu</span>
	
	<div class="wrapper">

		<div id="main">
			<h2 class="center">Your Surveys</h2>
			<p>On this page, you will see a list of all the surveys you have participated in.</p><br>
			<table>
			  <tr>
				<th>Survey Title</th>
				<th>Class</th>
				<th>Semester</th>
			  </tr>
			  <tr>
				<td><a href="#">Group Member Evaluation</a></td>
				<td>ONLINE Senior Capstone</td>
				<td>Spring 2017</td>
			  </tr>
			  <tr>
				<td><a href="#">Group Member Evaluation</a></td>
				<td>ONLINE Senior Capstone</td>
				<td>Summer 2017</td>
			  </tr>
			  <tr>
				<td><a href="#">Placeholder</a></td>
				<td>Placeholder</td>
				<td>Placeholder</td>
			  </tr>
			  <tr>
				<td><a href="#">Placeholder</a></td>
				<td>Placeholder</td>
				<td>Placeholder</td>
			  </tr>
			  <tr>
				<td><a href="#">Placeholder</a></td>
				<td>Placeholder</td>
				<td>Placeholder</td>
			  </tr>
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