
<html>
<head>
<title></title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

include ('conn.php');

	$sql = "UPDATE user SET 
			username = '".$_POST["txtusername"]."' ,
			email = '".$_POST["txtemail"]."' ,
			firstname = '".$_POST["txtfirstname"]."' ,
			lastname = '".$_POST["txtlastname"]."' ,
			addres = '".$_POST["txtaddres"]."' ,
			tell = '".$_POST["txttell"]."' ,
			facebook = '".$_POST["txtfacebook"]."' ,
			position = '".$_POST["txtposition"]."' ,
			addressjob = '".$_POST["txtaddressjob"]."' 
			WHERE id = '".$_POST["txtid"]."' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
      echo "<script type='text/javascript'>";
      echo "Record updact successfully";
      echo "</script>";
      header("Location: profile.php");
  }

	mysqli_close($conn);
?>
</body>
</html>