<?php 
    session_start();
    include ('bootstap.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    include ("header.php"); 
    include ("conn.php");
    $sql = "SELECT * FROM user";
    $query   = mysqli_query($conn,$sql)
?>
<div class="container">
<br>
<nav aria-label="breadcrumb">
					<ol class="breadcrumb SpaceStyle" style="background-color: #111111">
						<li class="breadcrumb-item active" aria-current="page">ข้อมูลนักศึกษาในระบบ</li>
					</ol>
				</nav>

  <div class="row">
  
  <?php
		while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
	?>
    
     <div class="col-sm"><div class="card" style="width: 21rem;">
    <img src="img/<?php echo $result["img"];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title" >
    ชื่อ <?php echo $result["firstname"];?>
    <?php echo $result["lastname"];?>
    <br>รหัสนักศึกษา <?php echo $result["codestu"];?>
    </h4>
    <h5 class="text-danger"><br><a href="show1.php?id=<?php echo $result["id"];?>"><?php echo"ข้อมูลเพิ่มเติม";?></a></h5>

</div></div><br>
</div>
<?php
}
$sql1 = "SELECT * FROM professor";
$query1   = mysqli_query($conn,$sql1)
?>
    
  </div>
  <nav aria-label="breadcrumb">
					<ol class="breadcrumb SpaceStyle" style="background-color: #111111">
						<li class="breadcrumb-item active" aria-current="page">ข้อมูลอาจารย์</li>
					</ol>
				</nav>
                <div class="row">
  
  <?php
		while ($result1 = mysqli_fetch_array($query1,MYSQLI_ASSOC)) {
	?>
    
     <div class="col-sm"><div class="card" style="width: 21rem;">
    <img src="img/<?php echo $result1["img"];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title" >
    <?php echo $result1["name"];?>
    </h4>
    <?php echo $result1["position"];?>
    <?php echo $result1["email"];?>

</div></div><br>
</div>
        <?php 
        }
        $sql2 = "SELECT * FROM seniors";
        $query2   = mysqli_query($conn,$sql2)
        ?>
</div>

<nav aria-label="breadcrumb">
					<ol class="breadcrumb SpaceStyle" style="background-color: #111111">
						<li class="breadcrumb-item active" aria-current="page">ข้อมูลรุ่นพี่</li>
					</ol>
				</nav>
                <div class="row">
  
  <?php
		while ($result2 = mysqli_fetch_array($query2,MYSQLI_ASSOC)) {
	?>

     <div class="col-sm"><div class="card" style="width: 21rem;">
    <img src="img/<?php echo $result2["img"];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title" >
    ชื่อ <?php echo $result2["firstname"];?>
    <?php echo $result2["lastname"];?>
    <br>รหัสนักศึกษา <?php echo $result2["codestu"];?>
    </h4>
    <h5 class="text-danger"><br><a href="show1.php?id=<?php echo $result2["id"];?>"><?php echo"ข้อมูลเพิ่มเติม";?></a></h5>


</div></div><br>
</div>
        <?php } ?>
</div>

</div>
<?php
    mysqli_close($conn);
    include ("footer1.php");
?>
</body>

</html>