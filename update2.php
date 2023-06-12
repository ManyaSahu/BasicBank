<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from Registration where id=$from";
    $query = mysqli_query($con,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from Registration where id=$to";
    $query = mysqli_query($con,$sql);
    $sql2 = mysqli_fetch_array($query);

   



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }
    else {
        
        // deducting amount from sender's account
        $newbalance = $sql1['balance'] - $amount;
        $sql = "UPDATE Registration set balance=$newbalance where id=$from";
        mysqli_query($con,$sql);
     

        // adding amount to reciever's account
        $newbalance = $sql2['balance'] + $amount;
        $sql = "UPDATE Registration set balance=$newbalance where id=$to";
        mysqli_query($con,$sql);
        
        $sender = $sql1['username'];
        $receiver = $sql2['username'];
        $sql = "INSERT INTO transaction(`sender`, `reciever`, `amount`) VALUES ('$sender','$receiver','$amount')";
        $query=mysqli_query($con,$sql);

        if($query){
            echo "Sucessfull";
             echo "<script> alert('Transaction Successful');
                             window.location='transfer.php';
                   </script>";
            
        }

        $newbalance= 0;
        $amount =0;
}

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style.css">

</head>

<body>
<?php include './index1.php'?>
	<div class="container">
        <h2 class="text-center pt-4" style="color:rgb(0, 91, 181);font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Transaction History</h2>
       
                
        
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr style="color:rgb(0, 91, 181); font-size:23px;">
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                    <th class="text-center">Password</th>
                </tr>
         <?php
      
            $sid=$_GET['id'];
            $sql = "SELECT * FROM  Registration where id=$sid";
            $result=mysqli_query($con,$sql);
            if(!$result)
            {
            echo "Error : ".$sql."<br>".mysqli_error($con);
            }else{
                while($row=mysqli_fetch_assoc($result)){
                    echo '<tr>
                    <th scope="row">'.$row['id'].'</th>
                    <td> '.$row['username'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['balance'].'</td>
                    <td>'.$row['password'].'</td></tr>';

                }
}?>
            </table>
        </div>
        <br><br><br>
        <label style="color:rgb(0, 91, 181);"><b>Transfer To:</b></label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'Registration.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM Registration where id!=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($con);
                }
                while($row = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $row['id'];?>" >
                
                    <?php echo $row['username'] ;?> (Balance: 
                    <?php echo $row['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label style="color:rgb(0, 91, 181);"><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" required>   
            
                <div class="text-center" >
            <button class="btn1 mt-3" name="submit" type="submit" id="myBtn" >Transfer</button>
            </div>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<nt>

<?php
include './Footer.php';?>
</body>
</html>