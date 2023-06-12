<?php

include 'connection.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<?php include 'Index1.php'?>
  

   <table class="table table-striped">
   <tr>
   <thead>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      
      <th scope="col">Account No.</th>
      <th scope="col">Balance</th>
      <th scope="col">Password</th>
      <th scope="col">Transaction</th>
      
    </tr>
    </thead> 
<?php
$sql="select * from Registration";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['username'];
        $email=$row['email'];
        $account=$row['account'];
        $balance=$row['balance'];
        $password=$row['password'];
        

        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
  
        <td>'.$account.'</td>
        <td>'.$balance.'</td>
        <td>'.$password.'</td>
       
        <td>
        <a href="update2.php? id='.$id.'" class="btn1">Transact</a>
        <a href="Delete.php? deleteid='.$id.'" class="btn2 ">Delete</a>
      
        
       
        
        </td>
      </tr>';
    }
}?>

</table>
</body>
</html>

   
