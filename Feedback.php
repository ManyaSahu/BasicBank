<?php

$success=0;
include 'connection.php';
if(isset($_POST['mit'])){
   
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
   


$sql="insert into Feedback(name,email,message)
values('$name','$email','$message')";


$result=mysqli_query($con,$sql);

 if($result){
  $success=1;
    echo "<script>alert('Message sent successfully 👍');</script>";
    header('location:Main.php');
   
    
    }else{
        die(mysqli_error($con));
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<?php
 if($success){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>Great !</strong> Your message sent successfully
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>';
}

?>
<form method="post" action="Feedback.php">
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" name="name" autocomplete="off" required>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" autocomplete="off" required>
  </div><br>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" autocomplete="off" required></textarea>
  </div><br>
  <button type="submit" class="btn3 btn-primary mb-2"name="mit"autocomplete="off" required>Submit</button>
</form>
</body>
</html>