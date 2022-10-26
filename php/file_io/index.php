<?php 

    // $file = fopen('user.txt', 'r');
    // $data = fread($file, filesize('user.txt'));
    // echo $data;
    // fclose($file);

    // $file = fopen('user.txt', 'w');
    // $data = "This is new content...";
    // fwrite($file, $data);
    // echo "Done";
    // fclose($file);

    $file = fopen('user.txt', 'a');
    $data = "This is new content...\r\n";
    fwrite($file, $data);
    echo "Done";
    fclose($file);
?>