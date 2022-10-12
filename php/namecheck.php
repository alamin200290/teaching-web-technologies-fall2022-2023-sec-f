<?php 
    $username = $_POST['username'];
    $password = $_POST['pass'];

    if($username == "" || $password == ""){
        echo "invalid username/password";
    }else if($username == $password){
        echo "<h1>Welcome Home </h1>";
    }else{
        echo "invalid user!";
    }

?>