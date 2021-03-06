<?php

session_start();

$logged = false;
$user   = '';

if(array_key_exists('authcate', $_SESSION)) {
	$logged = true;
	$user   = $_SESSION['authcate'];
} else {
	header("Location: http://{$_SERVER['SERVER_NAME']}/");
	die();
}

?>


<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../public/css/bootstrap.css">
		<link rel="stylesheet" href="../public/css/layout.css">
		
		<script src="../public/js/jquery-2.1.1.min.js"></script>
		<script src="../public/js/bootstrap.min.js"></script>
	</head>
	
	<body>
		
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid limiter">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="navbar-brand" href="/">Bastard Real estate</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Link</a></li>
						<li class="active"><a href="property.php">Edit Property</a></li>
						<li><a href="client.php">Edit Client</a></li>
						<li><a href="../logout.php">Logout</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>



		<div class="limiter">
			<h1>Property page</h1>
			<?php echo $user ?>
		</div>
	</body>
	<script src="../public/js/app.js"></script>
</html>