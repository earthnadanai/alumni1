<?php 

    session_start();
    include ("bootstap.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>

    <link rel="stylesheet" href="style1.css">

</head>
<body>
<?php
    include ("header.php"); 
?><br><br>

    <?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
            <?php 
                echo $_SESSION['success'];
            ?>
        </div>
    <?php endif; ?>


    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <?php 
                echo $_SESSION['error'];
            ?>
        </div>
    <?php endif; ?>

    <div class="container" align="center">
<div class="card border-success mb-3" style="max-width: 45rem;">
  <div class="bg-success"><h2>Login</h2></div>
  <div class="card-body text-success">
    <p class="card-text">   
    <form action="login.php" method="post">
  <div class="form-group">
    <label for="username">ชื่อผู้ใช้</label>
    <input type="text" name="username" placeholder="Username" required>
  </div>
  <div class="form-group">
    <label for="password">รหัสผ่าน</label>
    <input type="password" name="password" placeholder="Password" required>
  </div>
  <button type="submit" name="submit" class="btn btn-success"><img src="img/icons/round_perm_identity_black_18dp.png"> Login</button>
  <br><br>
  <p align="center"><a href="register.php">Go to register</a></p>
</form>
  </div>
  <div class="card-footer bg-success"></div>
</div>
</div>

    <br>
<?php
    include("footer1.php");
?>
</body>
</html>

<?php 

    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }

    ?>

 