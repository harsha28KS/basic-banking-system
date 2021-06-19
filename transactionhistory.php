<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TSF Bank</title>

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

    <style>
      footer {
        position: absolute;
        right: 0;left: 0;
        bottom: 0;
        clear: both;
      }
    </style>

  </head>

  <body>

    <?php include_once "includes/header.php"; ?>

    <!-- Table -->
    <div class="container mt-5 mb-5 t" style="min-height: 100%">
    
      <h2>Transaction History</h2>
      <br>
      <table class="table table-light ">
        <thead class="table-dark">
          <tr>
            <th>S.No.</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
            <th>Date & Time</th>
          </tr>
        </thead>
        <tbody>
          <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
          ?>

          <tr>
            <td><?php echo $rows['sno']; ?></td>
            <td><?php echo $rows['sender']; ?></td>
            <td><?php echo $rows['receiver']; ?></td>
            <td><?php echo $rows['balance']; ?> </td>
            <td><?php echo $rows['datetime']; ?> </td>
          </tr>               
              
          <?php
            }
          ?>
        </tbody>
      </table>
    </div>
  <!-- End Table -->

<?php include_once "includes/footer.php"; ?>

</body>
</html>
