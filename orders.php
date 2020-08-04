<html>
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UMU</title>
    <link rel="stylesheet" type="text/css" href="co.css">
    <link rel="icon" type="image" href="umu.jpg">

</head>

<body>


<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('Localhost','root','','vheakyfashions');

//Output any connection error
if ($mysqli->connect_error) {
  die("Not connected to the Mysql server :" .$connection->connect_error) ;
}
else{
    // echo" not connected to the database";
}
//MySqli Select Query
$sql = ("SELECT * FROM contact");
    $results = $mysqli->query($sql);

echo '<table border="4" height="" width="1000">';
    echo "<tr>
            
        
            <th>phone</th>
            <th>orderno</th>
            <th>email</th>
            <th>gender</th>
            <th>message</th>
            <th>none</th>
           
            </tr>";

while($row = $results->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['phone']."</td>";
    echo "<td>".$row['orderno']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['message']."</td>";
    echo "<td>".$row['none']."</td>";
  
 
  
}  
echo '</table>';


// Frees the memory associated with a result
$results->free();

// close connection 
$mysqli->close();
?>
<a href="data.php">next page</a>


</body>
</html>