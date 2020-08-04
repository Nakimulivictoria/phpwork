<html>
<head>
<style>
body{
margin:0 auto;
background-color:#D1D0CE;
background-size:cover;
background-position:cover;
}
.container{
 width:320px;
  background: rgba(0,0,0,0.5);
  color:#fff;
  top:50%;
  left:50%;
  position:absolute;
  transform:translate(-50%,-50%);
  box-sizing: border-box;
  padding: 70px 30px
  
  }

 h1{
 margin:0;
 padding:0 0 20px;
 text-align: center;
 font-size: 22px;
 } 
 . container p{
 margin:0;
 padding:0;
 font-weight: bold;
 }
 .container input{
 width:100%;
 margin-bottom:20px
 }
 .container input[type="text"], input[type="password"]
 {
 border: none;
 border-bottom:1px solid #fff;
 background: transparent;
 outline: none;
 height: 48px
 color:#fff;
 font-size: 16px;
 }
  .container input[type="submit"]
  {
  border:none;
  outline:none;
  height:48px;
  background: #1c8adb;
  color:#fff;
  font-size: 18px;
  border-radius: 20px;
  }
    .container input[type="submit"]:hover
	{
	cursor:pointer;
	background:#39dc79;
	color:#000;
	}
   .container a{
   text-decoration:none;
   font-size: 14px;
   color:#fff;
   }
   .container a:hover
   {
   color:#39dc79;
   }
</style>
<link rel="icon" type="image" href="umu2.jpg">
</head>
<body>
<div class="container">
<form method="post">
<div class="T">

<input type="text" name="username" autocomplete="off" placeholder="username"/>
</div>

<div class="Y">
<input type="password" name="password" placeholder="password"/>
</div>
<input type="submit" name="login" value="LOGIN">

</form>

    <?php


    $connection = new mysqli("localhost","root","","vheakyfashions");

      if (isset($_POST['login'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $result = $connection -> query($query);

        $exist = mysqli_num_rows($result);

        if ($exist == true) {
          echo ("<meta http-equiv='refresh' content='0;URL=orders.php'>");
        } else {
          echo "Wrong username or password. Try again..";
        }

      }

    ?>

</div>
</body>
</html>