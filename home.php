<?php
$success=0;
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}else{
  $success=1;
  header('location:Display.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <?php
  include 'Index1.php';?>
    <?php
    if($success){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Hurray !</strong>Login Successfully
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
}
  
  ?>
 
    <h1 class="text-warning mt-5 text-center">Welcome
    <?php echo $_SESSION['username'];?></h1>

    <a href="LogOut.php" class="mt-4 btn btn-primary  w-100" name="submit">Log out</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>