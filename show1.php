<?php 
include("booststap.php");
session_start();
?>
<html>
<head>
<title>ข้อมูล</title>
</head>

<body>

<?php

include ("header.php"); 
  
   $strid = null;

	  $strid = $_GET["id"];
   
include ('conn.php');

  $sql = "SELECT * FROM user WHERE id = '".$strid."'";

  $query = mysqli_query($conn,$sql)

  ?>
  <br>
<div class="container">
<nav aria-label="breadcrumb">
					<ol class="breadcrumb SpaceStyle" style="background-color: #111111">
						<li class="breadcrumb-item"><a href="show.php">home</a></li>
            <li class="breadcrumb-item active" aria-current="page">ดูเพิ่มเติม</li>
					</ol>
				</nav>
        <div class="p-3 mb-2" style="background-color: #111111 ">
<div class="card mb-3">
<br>
<h1 class="card-title">&nbsp&nbsp<?php echo "ข้อมูลส่วนตัว";?></h1>

<br>
<?php
		while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
	?>
  <div class="card-body">
  <div align="center">
  <img src="img/<?php echo $result["img"];?>" class="d-block w-50" alt="...">
  <br>
  <h4 class="card-text">ชื่อ : <?php echo $result["firstname"];?>&nbsp&nbsp<?php echo $result["lastname"];?>
  &nbsp รหัสนักศึกษา :&nbsp<?php echo $result["codestu"];?> &nbsp เพศ :&nbsp<?php echo $result["sex"];?>
  &nbsp ป/ด/ว :&nbsp<?php echo $result["birthdate"];?></h4>
  <h4 class="card-text">ที่อยู่ : <?php echo $result["addres"];?>&nbsp เบอร์โทร :&nbsp<?php echo $result["tell"];?>
  &nbsp facebook :&nbsp<?php echo $result["facebook"];?></h4>
  <h4 class="card-text">ตำแหน่ง : <?php echo $result["position"];?>&nbsp ที่อยู่ที่ทำงาน :&nbsp<?php echo $result["addressjob"];?></h4>
  
  
    <?php }   
    $sql1 = "SELECT * FROM seniors WHERE id = '".$strid."'";
    $query1 = mysqli_query($conn,$sql1)
    ?>

    <?php
		while($result1 = mysqli_fetch_array($query1,MYSQLI_ASSOC)) {
	  ?>
  <div class="card-body">
  <div align="center">
    <img src="img/<?php echo $result1["img"];?>" class="d-block w-50" alt="...">
  <br>
  <h4 class="card-text">ชื่อ : <?php echo $result1["firstname"];?>&nbsp&nbsp<?php echo $result1["lastname"];?>
  &nbsp รหัสนักศึกษา :&nbsp<?php echo $result1["codestu"];?> &nbsp เพศ :&nbsp<?php echo $result1["sex"];?>
  &nbsp ป/ด/ว :&nbsp<?php echo $result1["birthdate"];?></h4>
  <h4 class="card-text">ที่อยู่ : <?php echo $result1["addres"];?>&nbsp เบอร์โทร :&nbsp<?php echo $result1["tell"];?>
  &nbsp facebook :&nbsp<?php echo $result1["facebook"];?></h4>
  <h4 class="card-text">จบการศึกษา : <?php echo $result1["Graduate"];?>&nbsp ที่อยู่ที่ทำงาน :&nbsp<?php echo $result1["addressjob"];?></h4>

    <?php } ?>
    </div>
    </div>
    </div>
    </div>
</div>
</div>
</div>

<br>

  <?php
    mysqli_close($conn);
    include("footer1.php");
?>
</body>
</html>