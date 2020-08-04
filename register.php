

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="reg.css">
    <link rel="icon" type="image" href="logo.jpg">
    <title>Register</title>
</head>
<body>

        <div class="container">

                <h1>Create account</h1>
            
                <form method="post">
                    <div>
                    <input type="text" name="first_name" required autocomplete="off">
                    <label>
                    First Name
                    </label>
                    </div>
            
                    <div>
                    <input type="text" name="second_name" required autocomplete="off">
                    <label>
                    Second Name
                    </label>
                    </div>
            
                    <div>
                    <input type="email" name="email" required autocomplete="off">
                    <label>
                    Email
                    </label>
                    </div>
            
            
            
                    <div>
                    <input type="password" name="password" required autocomplete="off">
                    <label>
                    Password
                    </label>
                    </div>
            
                    <div>
                    <input type="password" name="repeat_password" required autocomplete="off">
                    <label>
                    Re-Enter password
                    </label>
                    </div>
                    
                    <input type="submit" value="Register" name="register">
                </form>

              
                 
            
            </div>
            
            <?php

$connection = new mysqli("localhost","root","","vheakyfashions");

if (isset($_POST['register'])) {
    
    $first_name = $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $email = $_POST['email'];
     $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    if ($password != $repeat_password) {
        echo "Password do not match. Please, try again.";
    } else {

        $query = "INSERT INTO register (first_name, second_name, email,  password)
                                VALUES ('$first_name','$second_name','$email','$password')";

        $result = $connection -> query($query);

        if ($result) {

            echo "Successfully registered. You can now login. Wait...";
            echo ("<meta http-equiv='refresh' content='0;URL=account.php'>");

        } else {
            echo "Sorry, we encountered a problem";
        }

    }

}

?>

    
</body>
</html>