<?php 

    $data = $_POST['json'];
    // $user = json_decode($data);
    // echo $user->name;

    $user = ['id'=>12, 'name'=>'alamin'];
    echo json_encode($user);
?>