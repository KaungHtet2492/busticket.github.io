<?php
    include "configure.php";
    if(isset($_POST['user']) && 
    isset($_POST['email']) && 
    isset($_POST['psw']) && 
    isset($_POST['psw-repeat'])){
        $username = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['psw'];
        $re_passw = $_POST['psw-repeat'];
    if ($password == $re_passw){
        //$pass = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user_account(username, email, password) VALUES(?,?,?)";
        $stmt = $connection->prepare($sql);
        $stmt->execute([$username, $email, $password]);
        header("Location: login.html");

    }else {
        echo ("Password are not the same!");
    }
}else {
    echo "Account Creation is Fail!";
    exit;
}    
?>