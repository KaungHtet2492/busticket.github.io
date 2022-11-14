<?php
session_start();
    include "configure.php";
    if(isset($_POST['username']) && 
    isset($_POST['pass'])){
        $username = $_POST['username'];
        $password = $_POST['pass'];
        if($username == "admin" && $password == "admin123"){
            header("Location: admin/admin.php");
        }
        $sql = "SELECT * FROM user_account WHERE username = ?";
        $stmt = $connection->prepare($sql); 
        $stmt->execute([$username]);

        if($stmt->rowCount() == 1){
            $user = $stmt->fetch();
            $uid = $user['uid'];
            $_SESSION['uid']= $uid;
            $uname = $user['username'];
            $pass = $user['password'];
            $email = $user['email'];
            if($uname == $username && $pass == $password){
                    header("Location: index.php");
            }else {
                echo '<script>alert("Username (or) Password is wrong!!")</script>';
                header("Location: login.html");
               
            }   
        }
    } 
?>