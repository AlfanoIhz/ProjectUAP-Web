<!DOCTYPE HTML>
<?php
	require 'conn.php';
?>
<html lang = "eng">
	<head>
		<meta charset =  "UTF-8">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<title>Login</title>


	</head>
<body class = "alert-warning">

	<header class="header_area">
		
		<div class="main_menu">
			
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<h3><a href="../index.php">SIDAMBI</a></h3>
					<p>Sistem Data Murid Bimbel</p>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="../index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<div class = "row">	
		<div class = "col-md-4">
		</div>
		<div class = "col-md-4 alert alert-info">
			<h4>Administrator Login</h4>
			<hr  style = "clear:both;"/>
			<form enctype = "multipart/form-data" method = "POST" >
				<div class = "form-group">
					<label>Username</label>
					<input type = "text" id = "username" class = "form-control" />
				</div>
				<div class = "form-group">
					<label>Password</label>
					<input type = "password" id = "password" class = "form-control" />
				</div>
				<div id = "loading">
				</div>
				<br />
				<div class  = "form-group">
					<button type = "button" class = "form-control" id = "login"><span class = "glyphicon glyphicon-log-in"></span> Login</button>
				</div>
			</form>
		</div>
		<div class = "col-md-4">
		</div>
	</div>	
	<footer class = "navbar navbar-fixed-bottom navbar-inverse">
		<label class = "center-label">&copy; <?php echo date('Y', strtotime('+8 HOURS'))?> Developed By: <b>Kelompok1</b></label>
	</footer>
</body>	
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/script.js"></script>
</html>