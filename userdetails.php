<?php
include 'config.php';

if(isset($_POST['submit']))
{
  $from = $_GET['id'];
  $to = $_POST['to'];
  $amount = $_POST['amount'];

  $sql = "SELECT * from users where id=$from";
  $query = mysqli_query($conn,$sql);
  $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

  $sql = "SELECT * from users where id=$to";
  $query = mysqli_query($conn,$sql);
  $sql2 = mysqli_fetch_array($query);

  // constraint to check input of negative value by user
  if (($amount)<0)
  {
    echo '<script type="text/javascript">';
    echo ' alert("Sorry! Negative values cannot be transferred")';  // showing an alert box.
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
  else if($amount == 0)
  {
    echo "<script type='text/javascript'>";
    echo "alert('Sorry! Zero value cannot be transferred')";
    echo "</script>";
  }

  else 
  {
    // deducting amount from sender's account
    $newbalance = $sql1['balance'] - $amount;
    $sql = "UPDATE users set balance=$newbalance where id=$from";
    mysqli_query($conn,$sql);
    

    // adding amount to reciever's account
    $newbalance = $sql2['balance'] + $amount;
    $sql = "UPDATE users set balance=$newbalance where id=$to";
    mysqli_query($conn,$sql);

    $sender = $sql1['name'];
    $receiver = $sql2['name'];
    $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
    $query=mysqli_query($conn,$sql);

    if($query)
    {
      echo "<script> alert('Transaction Successful');
      window.location='transactionhistory.php';
        </script>";
    }

    $newbalance= 0;
    $amount =0;
  }

}
?>

<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="./css/main.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
        
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@600&family=Lobster&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" >

  </head>

  <body>
  
    <?php include_once "includes/header.php"; ?>

    <!-- Table -->
    <div class="container mt-5 mb-5">
      <h2>Transaction</h2>
      <br>
      <?php
        include 'config.php';
        $sid=$_GET['id'];
        $sql = "SELECT * FROM  users where id=$sid";
        $result=mysqli_query($conn,$sql);
        if(!$result)
          {
        echo "Error : ".$sql."<br>".mysqli_error($conn);
          }
        $rows=mysqli_fetch_assoc($result);
      ?>
  
      <div class="container t">
        <table class="table table-light">
          <thead class="table-dark">
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Balance</th>
            </tr>
          </thead>
          <tbody>
            <tr style="color : black;">
              <td><?php echo $rows['id'] ?></td>
              <td><?php echo $rows['name'] ?></td>
              <td><?php echo $rows['email'] ?></td>
              <td><?php echo $rows['balance'] ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <form class="container mt-5 mb-5 p-5 bg-light w-50 f" method="post" name="tcredit">

        <div class="form-container">

          <div class="mb-3">
            <label class="form-label"><b>Transfer To:</b></label>
            <select name="to" class="form-control" required>
              <option value="" disabled selected>Choose</option>
              <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
              ?>
              <option class="table" value="<?php echo $rows['id'];?>" >
                <?php echo $rows['name'] ;?> (Balance: 
                <?php echo $rows['balance'] ;?> ) 
              </option>
              <?php 
              } 
              ?>
            </select>
          </div>

          <div class="mb-4">
            <label class="form-label"><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" id="formGroupExampleInput" required>   
          </div>

          <div class="text-center">
          <button class="btn btn-dark btn-lg" name="submit" type="submit" id="myBtn" >Transfer</button>
          </div>

        </div>
      </form>
    </div>  

    <?php include_once "includes/footer.php"; ?>   
    
  </body>
</html>
 
