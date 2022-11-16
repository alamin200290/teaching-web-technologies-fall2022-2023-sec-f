<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'null'){
            echo "invalid username/password";
        }

        if($_GET['err'] == 'invalid'){
            echo "username/password not found ...";
        }

        if($_GET['err'] == 'bad_request'){
            echo "please login first ...";
        }
    }

?>


<html>
<head>
    <title>Login</title>
</head>
<body>

        <form method="post" action="../controllers/loginCheck.php" enctype="">
            <fieldset>
                <legend>Login</legend>
                Username: <input type="text" name="username" value=""/> <br>
                password: <input type="password" name="password" value=""/> <br>
                <input type="submit" name="btn" value="Submit"/>
            </fieldset>
        </form>
</body>
</html>