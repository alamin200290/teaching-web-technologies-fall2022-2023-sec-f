<?php
    session_start();
    // include "db.php";
    // include_once "db.php";
    // require "db.php";
    require_once "../models/userModel.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        header('location: ../views/login.php?err=null');
    }else{

        $user = ['username'=> $username, 'password'=>$password];
        $status = login($user);
        if($status){
            setcookie('status', 'true', time()+3600, '/');
            header('location: ../views/home.php');
        }else{
            header('location: ../views/login.php?err=invalid');
        }
    }
?>