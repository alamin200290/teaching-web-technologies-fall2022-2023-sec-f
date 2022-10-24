<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        header('location: login.php?err=null');
    }else if($_SESSION['user']['username']== $username && $_SESSION['user']['password'] == $password){
        $_SESSION['status'] = true;
        header('location: home.php');
    }else{
        header('location: login.php?err=invalid');
    }

?>