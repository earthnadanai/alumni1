<?php
	session_start();
?>

<html>

	<head>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<!-- Favicon -->   
	<link href="img/favicon-16x16.png" rel="shortcut icon"/>
	

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	</head>
<body>

<header class="header-section">
<a class="site-logo" href="show.php"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <img src="img/unnamed.png" width="100" height="50" alt=""></a>
		<div class="container">
			<!-- logo -->
			
			
			<div class="user-panel">
				
				<?php if (isset($_SESSION['userid'])) { ?>
				<h5><li><?php echo $_SESSION['user'];?></li></h5>
				<p align="center"><a href="logout.php">Logout</a></p> 	
				<?php } else {?>
				<a href="index.php">login</a>  /  <a href="Register.php">Register</a>
				<?php } ?>
			</div>

			
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>

				<?php if ($_SESSION['user']) {?>
					<li><a href="profile.php">Proflie</a></li>
				<?php }else{} ?>

				</ul>
			</nav>
			
		</div>
		
	</header>
	
</body>
</html>