<?php

    session_start();
    include 'connect.php';

    if(isset($_POST['submit_login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $password = md5($password);

        $sql = "select * from user where username='$username' and password = '$password'";
        $user = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($user);

        if(mysqli_num_rows($user) > 0){
            $_SESSION["username"] = $username;
            $_SESSION["level"] = $row["level"];
            $_SESSION["id"] = $row["id"];
           
            if($_SESSION["level"]==1){
                echo "<script language='javascript'> alert('Đăng nhập thành công! Chúc bạn có trải nghiệm thật tốt');";
                echo "location.href='level.php';";
                echo "</script>";
            }
            if($_SESSION["level"]==0){
                echo "<script language='javascript'> alert('Đăng nhập thành công! Chúc bạn có trải nghiệm thật tốt');";
                echo "location.href='user.php';";
                echo "</script>";
            }
        }
        else{
            echo "<script language='javascript'>alert('Bạn đã nhập sai username or password');";
            echo " location.href='index.php';</script>"; 
        }
    }


?>