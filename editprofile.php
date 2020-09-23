  
<html>
<head>
<title>OFG</title>
</head>
<body>
<?php

include('header.php');
  
   $strid = null;

   if(isset($_GET["id"]))
   {
	   $strid = $_GET["id"];
   }
  
include ('conn.php');

   $sql = "SELECT * FROM user WHERE id = '".$strid."' ";

   $query = mysqli_query($conn,$sql);

   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

   $newName = $_FILES['img']['name'];
   if (move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $newName)) {
     $sql1 = "UPDATE user Set img =  '" . $newName . "'
     where id = '" . $strid . "'";
     $stmt = mysqli_query($conn, $sql1);
   if ($stmt) :
    echo '<script> alert("เพิ่มสำเร็จ") </script>';
    Header("Refresh:0");
   else :
       echo '<script> alert("เพิ่มล้มเหลว") </script>';
   endif;
   } 

?>
<br><br>
<div class="container">
  <div class="row">
    <div class="col">
     
    </div>
    <div class="col-md-6 ">
<div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
  <div class="card-header">Edit Profile</div>
  <div class="card-body">
    <h5 class="card-title">
    <form action="saveeditprofile.php" name="frmAdd" method="post">
  <div class="form-group">
    <label for="txtid" >ID  : </label>
    <input type="hidden" name="txtid" value="<?php echo $result["id"];?>"><?php echo $result["id"];?>
  </div>
  <div class="form-group">
    <label for="txtusername">User Name : </label>
    <input type="hidden" name="txtusername"  value="<?php echo $result["username"];?>"><?php echo $result["username"];?>
  </div>
  <div class="form-group">
  <label for="txtemail">Email : </label>
  <input class="form-control" type="email" name="txtemail"  value="<?php echo $result["email"];?>">
  </div>
  <div class="form-group">
  <label for="txtfirstname">First Name : </label>
  <input class="form-control" type="text" name="txtfirstname" size="20" value="<?php echo $result["firstname"];?>">
  </div>
  <div class="form-group">
  <label for="txtlastname">Last Name : </label>
  <input class="form-control" type="text" name="txtlastname" size="20" value="<?php echo $result["lastname"];?>">
  </div>
  <div class="form-group">
  <label for="txtaddres">Addres : </label>
  <input class="form-control" type="text" name="txtaddres" size="20" value="<?php echo $result["addres"];?>">
  </div>
  <div class="form-group">
  <label for="txttell">Tell : </label>
  <input class="form-control" type="text" name="txttell" size="20" value="<?php echo $result["tell"];?>">
  </div>
  <div class="form-group">
  <label for="txtfacebook">Facebook : </label>
  <input class="form-control" type="text" name="txtfacebook" size="20" value="<?php echo $result["facebook"];?>">
  </div>
  <div class="form-group">
  <label for="txtposition">Position : </label>
  <input class="form-control" type="text" name="txtposition" size="20" value="<?php echo $result["position"];?>">
  </div>
  <div class="form-group">
  <label for="txtaddressjob">Addres Job : </label>
  <input class="form-control" type="text" name="txtaddressjob" size="20" value="<?php echo $result["addressjob"];?>">
  </div>
  <div align="center">


  <input type="submit" class="btn btn-success" name="submit" value="ตกลง">
  <input type="button" value=" ยกเลิก " class="btn btn-danger" onclick="window.location='profile.php' " />



</form>
</div>
</h5>
<div class="card">
  <div class="card-body">

  <div align="center">
				<img src="img/<?php echo $result["img"];?>" width="200" height="200" />
			</div>
      <br>
  <form method="post" enctype="multipart/form-data">
<div class="custom-file">
   <input type="file" class="custom-file-input form-control"  id="img" name="img">
    <label class="custom-file-label" for="fileUpload">แนบไฟล์</label> 
    <input type="submit" class="btn btn-outline-info" value="อัพโหลดรูป">
 </div>
 <br>
      
  </form>
</div>
<br>
</div>
<br>

  </div>
</div>
    </div>
    <div class="col">
  
    </div>
  </div>
</div>

<br><br>
<?php
mysqli_close($conn);
include('footer1.php');
?>
</body>
</html>

