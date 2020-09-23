<?php 

    session_start();

    if (!$_SESSION['userid']) {
        header("Location: index.php");
    } else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php include("header.php");
         require_once "conn.php";
         $query = "SELECT * FROM user WHERE id = '".$_SESSION['userid']."'";
         $result  = mysqli_query($conn,$query)
         ?>
        
        <br>
        
        <?php
		while($result =mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        ?>
       
                
    <div class="container">
    <nav aria-label="breadcrumb">
					<ol class="breadcrumb SpaceStyle" style="background-color: #111111">
						<li class="breadcrumb-item"><a href="profile.php">Profile</a></li>
					</ol>
                </nav>
        <h1 align="center">You are Member</h1>
        <h2 align="center">Profile</h2>
        <div align="center">
    <div class="card" style="width: 30rem;">
    <img src="img/<?php echo $result["img"];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text" align="center">Hi, <?php echo $_SESSION['user']; ?></p>
  </div>
</div>
</div>
    </div>
    <p align="center"><a href="editprofile.php?id=<?php echo $result["id"];?>" class="btn btn-outline-success">Edit Profile</a></p>      
<?php 
}
?>
<?php
$conn = null;
?>
    <?php
    include("footer1.php");
    ?>
</body>
</html>


<?php } ?>