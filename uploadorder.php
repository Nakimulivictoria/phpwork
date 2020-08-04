<!DOCTYPE html>
<html lang="en">
<head>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="contact.css">
        <link rel="icon" type="image" href="logo.jpg">
        <title>order upload</title>
</head>
</head>
<body>
    
<form method="post"  enctype="multipart/form-data">
                              
                              <?php
                                $msg = "document";
                                // if upload button is pressed
                                
                                if (isset($_POST['upload'])) {
                                  // the path to store the uploaded image
                                  $target = "images/".basename($_FILES['image']['name']);
                                   
                                   
                                  // connect to the database
                                  $db = mysqli_connect("localhost", "root", "", "umuregistration");
                                  
                                  //Get all the submitted data from the form
                                  $image = $_FILES['image']['name'];
                                  $message = $_POST['message'];
                                  $sql = "INSERT INTO images (image, message) VALUES ('$image','$message')";
                                  mysqli_query($db, $sql); //stores the submitted data into the database table: images
                                  
                                  //Now lets move the uploaded image into the folder: images
                                  if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
                                    echo " uploaded successfully";
                                  }else{
                                    echo "There was a problem uploading the document";
                                  }
                                  
                                  
                                }
                                 
                                
                                
                              ?>      
                    
                    <input type="hidden" name="size" value="1000000">
                    <div class="upload">
                      <div>
                         <p><input type="file" name="image"></p>
                       </div>
                      <div>
                        <p><textarea id="message" name="message" placeholder="NAME TYPE AND Quantity....." required></textarea></p>
                      </div><hr>
                      <div>
                         <p><input type="submit" name="upload" value="Upload Post"></p>
                       </div>
            
                       
                    </form>    
                    </p>
                  </div>
                </div>
                            </div>
                <a href="index.php" style="text-decoration:none"> <input type="submit"value="HOME"></a>
              
              </div>  


</body>
</html>