<?php

$login=0;
$invalid=0;
include 'connection.php';
if(isset($_POST['submit'])){
   
    $username=$_POST['username'];
    $password=$_POST['password'];


$sql="select * from Registration where username='$username'and password='$password'";


$result=mysqli_query($con,$sql);
if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
        $login=1;
        session_start();
        $_SESSION['username']=$username;
        header('location:home.php');

    }else{
        
        $invalid=1;
    }
}

}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <?php
include 'Index1.php'?>
    <?php
    if($login){
        echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Hurray !</strong>Login Successfully
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';

    }
    if($invalid){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oh !</strong>Invalide Data
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';

    }
 ?>
    <div class="container mt-5">
        <div class="row justify-content-evenly">
            <div class="col-5 p-3" style="box-shadow:4px 4px 12px gray;">
                <h2 class="title1">Login website</h2>
                    <form action="Login.php" method="post">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="name" placeholder="Name"class="form-control" name="username" require>
                    </div>

                

                    <div class="mb-3">
                        <label for="Password" class="form-label" >Password</label>
                        <input type="password"  placeholder="Password" class="form-control" name="password" require>
                        
</div >
                    

                    <button type="submit" class="mt-4 btn btn-primary  w-100" name="submit">Login</button>
                    </form>
            </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  
   

</body>
</html>



