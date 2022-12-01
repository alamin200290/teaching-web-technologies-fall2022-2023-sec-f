<?php 

    $name = $_POST['name'];
    sleep(4);
    if($name != null){
        echo "Your name is: ".$name;
    }else{
        echo "Null value..";
    }

?>