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

  </head>

  <body>

  <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
  ?>

  <?php include_once "includes/header.php"; ?>

  <!-- Table -->
    <div class="container mt-5 mb-5 t" >
      <h2>Transfer Money</h2>
      <br>
      <table  class="table table-light ">
        <thead class="table-dark ">
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">E-Mail</th>
          <th scope="col">Balance</th>
          <th scope="col">Operation</th>
        </thead>
        <tbody>
          <?php 
              while($rows=mysqli_fetch_assoc($result)){
          ?>
          <tr>
          <th scope="row"><?php echo $rows['id'] ?></th>
            <!--td><?php echo $rows['id'] ?></td-->
            <td><?php echo $rows['name']?></td>
            <td><?php echo $rows['email']?></td>
            <td><?php echo $rows['balance']?></td>
            <td><a href="userdetails.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-dark">View and Transact</button></a></td> 
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
