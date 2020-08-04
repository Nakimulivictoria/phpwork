
<?php

include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="account.css">
    <link rel="icon" type="image" href="logo.jpg">
</head>
<body>
   
    <div class="login-box">
        
        <h1>SIGN IN</h1>
        <h1>Customers and Hostesses</h1>

    
        <form method="post">
    
         
          <input type="text" name="email" placeholder="Email Address" autocomplete="off">
    
          <input type="password" name="password" placeholder="Password" autocomplete="off">
          <a href="#">Forgot Password?</a><br><br>
    
          <input type="submit" name="login" value="SIGN IN" >
    
         
          <b>Don't have account?</b><a href="register.php">Create an Account</a>
    
        </form>
        <?php

if (isset($_POST['login'])) {
        
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM register WHERE email='$email' AND password='$password'";
  $result = $connection -> query($query);

  $exist = mysqli_num_rows($result);

  if ($exist == true) {
    echo ("<meta http-equiv='refresh' content='0;URL=contact.php'>");
  } else {
    echo "Wrong username or password. Try again..";
  }

}

?>
    
</body>
</html>