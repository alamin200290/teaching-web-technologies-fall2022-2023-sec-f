<?php 

    $id = 1;
    $name = "alamin";
    $cgpa = 3.6;
    $email = "alamin@aiub.edu";

    // $student = array(1, "alamin", 3.4, 'alamin@aiub.edu');
    // $student = [1, "alamin", 3.4, 'alamin@aiub.edu'];

    // $students = [
    //                 [1, "alamin", 3.4, 'alamin@aiub.edu'],
    //                 [2, "abc", 3.54, 'abc@aiub.edu'],
    //                 [3, "xyz", 3.6, 'xyz@aiub.edu']
    //             ];
    // $students[2][3];
    // $student = ['id'=>1, 'name'=>"alamin", 'cgpa'=>3.4, 'email'=>'alamin@aiub.edu'];
    // $student['email'];

    $students = [
                    's1'=>['id'=>1, 'name'=>"alamin", 'cgpa'=>3.4, 'email'=>'alamin@aiub.edu'],
                    's2'=>['id'=>2, 'name'=>"alamin", 'cgpa'=>3.5, 'email'=>'alamin@aiub.edu'],
                    's3'=>['id'=>3, 'name'=>"alamin", 'cgpa'=>3.6, 'email'=>'alamin@aiub.edu']
                ];

    // $students['s1']['email'];
    
    //echo "Hello PHP";
    //print('abc');
    //print_r($students);
    echo "<table border=1>
                <tr>
                    <td>ID</td>
                    <td>NAME</td>
                    <td>EMAIL</td>
            </tr>";

    for($i =0; $i<10; $i++){
        $id = $i+1;
        echo "<tr>
                <td>{$id}</td>
                <td>Alamin</td>
                <td>alamin@aiub.edu</td>
            </tr>";
    }

    echo "</table>";

    // function sum($a=0, $b=0){
    //     return $a+$b;
    // }

    //echo sum(20);

    //data processing
    //output

?>