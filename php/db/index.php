<?php 

    $con = mysqli_connect('localhost', 'root', '', 'webtech');

    // if($con){
    //     echo "success";
    // }else{
    //     echo "error";
    // }

    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
 
    echo "<table border=1> 
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
            </tr>";

    while($data  = mysqli_fetch_assoc($result)){
        echo    "<tr>
                    <td>{$data['id']}</td>        
                    <td>{$data['username']}</td>        
                    <td>{$data['email']}</td>        
                </tr>";
    }

    echo "</table>";
?>