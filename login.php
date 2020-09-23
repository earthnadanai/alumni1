<?php 

    session_start();
    

    if (isset($_POST['username'])) {

        include('conn.php');

        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordenc = md5($password);

        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordenc'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['id'];
            $_SESSION['user'] = $row['firstname'] . " " . $row['lastname'];
            $_SESSION['userlevel'] = $row['userlevel'];
            $_SESSION['img'] = $row['img'];
            $_SESSION['F'] = $row['firstname'];

            if ($row){
                header("Location: show.php");   

        } else  {
            echo '<script>alert("User หรือ Password ไม่ถูกต้อง");</script>';
            header("Location: index.php");
              
        }
    } 
    }
?>