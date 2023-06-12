<?php

include 'connection.php';

// $sql="ALTER TABLE Registration ADD COLUMN balance VARCHAR(8) NOT NULL AFTER email;";

// $sql="ALTER TABLE Registration RENAME COLUMN Transaction to balance;

// $sql="ALTER TABLE transaction
// DROP COLUMN money;";
//  $sql="ALTER TABLE transaction ADD COLUMN  VARCHAR(388) NOT NULL AFTER reciever;";
 
// $sql="ALTER TABLE Registration ADD COLUMN phone Int(10) NOT NULL AFTER email;";
// $sql="ALTER TABLE Registration ADD COLUMN account Int(8) NOT NULL AFTER phone;";

$sql="ALTER TABLE Registration DROP COLUMN phone;";
$sql="delete from Feedback";
$result=mysqli_query($con,$sql);

if($result){
    echo "Rename  sucessfully";
}
else{
    die(mysqli_error($con));
}
?>