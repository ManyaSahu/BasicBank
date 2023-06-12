<?php

$user=0;
$success=0;
include 'connection.php';
if(isset($_POST['submit'])){
   
    $username=$_POST['username'];
    $email=$_POST['email'];
    $account=$_POST['account'];
    $balance=$_POST['balance'];
    $password=$_POST['password'];


$sql="select * from Registration where username='$username'";


$result=mysqli_query($con,$sql);
if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
        $user=1;
    }else{
        
    $sql="insert into Registration(username,email,account,balance,password)
    values('$username','$email','$account','$balance','$password')";

    $result=mysqli_query($con,$sql);

    if($result){
        $success=1;
    
        }else{
            die(mysqli_error($con));
        }

    }
}

}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">

</head>
  <body>
    <?php
    include 'Index1.php';?>
    <?php

    if($user){
           echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Ohh! sorry </strong>User already Exist
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if($success){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong>Great !</strong> You are Successfully Sign up
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
 }

?>
    <div class="container mt-5" >
        <div class="row justify-content-evenly">
            <div class="col-6" style="box-shadow:4px 4px 12px gray;">
                <h2 class="title1">Sign Up Form</h2>
                    <form action="Sign.php" method="post">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="name" placeholder="Name"class="form-control" name="username" required>
                    </div>

                    
                    <div class="mb-3">
                        <label for="email" class="form-label" >Email</label>
                        <input type="email"  placeholder="Enter Email" class="form-control" name="email" required></div>

                

                    <div class="mb-3">
                        <label for="balance" class="form-label" >Account No</label>
                        <input type="number"  placeholder="Account" class="form-control" name="account" required></div>

                    <div class="mb-3">
                        <label for="balance" class="form-label" >Balance</label>
                        <input type="number"  placeholder="Balance" class="form-control" name="balance" required></div>

                    <div class="mb-3">
                        <label for="Password" class="form-label" >Password</label>
                        <input type="password"  placeholder="Password" class="form-control" name="password" required></div>
                    

                    <button type="submit" class="mt-4 btn3 btn-primary mb-5" name="submit">Sign up</button>
                    </form></div></div></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>

   
 <br>
<?php include './Footer.php'?>   
</body>
</html>
