<HTML>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="contact.css">
        <link rel="icon" type="image" href="logo.jpg">
        <title>contact us</title>
</head>
<body>

<div class="container">

    <br>


<form method="post">
    <div>
    <input type="text" name="phone" required autocomplete="off">
    <label>
   Phone No.
    </label>
    </div>

    <div>
    <input type="text" name="orderno" required autocomplete="off">
    <label>
    Orders Made.
    </label>
    </div>

    <div>
    <input type="email" name="email" required autocomplete="off">
    <label>
    Email
    </label>
    </div>
    Gender: <input type="radio" name="gender" value="male">male
                <input type="radio" name="gender" value="famale">famale
                <input type="radio" name="gender" value="others">others
                <br>

 Message<br> <textarea class="tr" name="message">Type Your Message</textarea><br>

<br>
Make order
<input type="checkbox" name='none' value="yes">Yes<input type="checkbox" name='none' value="yes">No<br>

<input type="submit"value="send" name="send"><br><br>

<b>Email</b>&nbsp;&nbsp;<b class="pal"><a href="gmail.com" class="none"> vheakyfashions@gmail.com</a></b><br>
Typical response time within 24hours.<br><br>
<b>Phone No</b>&nbsp;&nbsp;00963-15487<br><br>
<b>Live chat now</b><br>24/7hours always at your service.<br><br>
<b>Complaints&nbsp;&&nbsp;Suggestions</b><br>if your not satisfied with our services please Email us on<br>
<b class="pal"> <a href="vheakyfashions.com" class="none">company@vheaky.com.</a></b> <a href="uploadorder.php">click to upload images</a></b><br>
</div>
</form>
 
 <?php 

$connection = new mysqli("localhost","root","","vheakyfashions");

if (isset($_POST['send'])) {
    
    $phone = $_POST['phone'];
    $orderno = $_POST['orderno'];
    $email = $_POST['email'];
     $gender = $_POST['gender'];
    $message = $_POST['message'];
    $none = $_POST['none'];


        $query = "INSERT INTO contact (phone, orderno, email, gender, message, none)
                                VALUES ('$phone','$orderno','$email','$gender','$message','$none')";

        $result = $connection -> query($query);

        if ($result) {

            echo "Successfully registered. You can now login. Wait...";
            echo ("<meta http-equiv='refresh' content='0;URL=index.php'>");

        } else {
            echo "Sorry, we encountered a problem";
        }

    }

    

?>

</BODY>
</HTML>