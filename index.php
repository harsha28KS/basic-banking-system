<!doctype html>
<html lang="en">

  <head>
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

  <?php include_once "includes/header.php"; ?>

  <!-- Home-->
  <section class="topContent text-center">

    <div class="container mx-auto mb-5"> 
        <h1 class="fw-bold" style="font-size:60px;font-family: 'Baloo Tammudu 2', cursive;">TSF Banking System</h1>
        <p class="fs-4 fw-bold" style="font-family: 'Pacifico', cursive;"> for making transactions for its users</p>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide carousel-dark mx-auto" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="1500">
          <img src="images/bank.png" class="d-block mx-auto" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p><button type="button" class="btn btn-dark"><a href="#services">Get Started</a></button></p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="images/transfer.jpg" class="d-block mx-auto" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p><button class="btn btn-dark"><a href="transfermoney.php">Transfer Money</a></button></p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4500">
          <img src="images/transaction.jpg" class="d-block mx-auto" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p><button class="btn btn-dark"><a href="transactionhistory.php">View Transactions</a></button></p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden ">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>    

  </section>
  <!-- Home-->
  
  <!-- Services -->
  <section class="container" id="services" >
    <h2 class="heading">Services</h2>

    <br><br>
      
    <div class="container text-center">

      <div class="row">

        <div class="card mx-auto" style="width:20rem">
          <img src="images/customer.png" class="card-img-top mt-5" alt="Customers">
          <div class="card-body">
            <h5 class="card-title">Customers</h5>
            <p class="card-text">View all Customer's data</p>
            <a href="transfermoney.php"  class="btn btn-dark">View All Customers</a>
          </div>
        </div>

        <div class="card mx-auto"  style="width:20rem">
          <img src="images/credit-card.png" class="card-img-top mt-5" alt="Transactions">
          <div class="card-body">
            <h5 class="card-title">Transactions</h5>
            <p class="card-text">View all the past transactions</p>
            <a href="transactionhistory.php" class="btn btn-dark">View All Transactions</a>
          </div>
        </div>

        <div class="card mx-auto"  style="width:20rem">
          <img src="images/money.png" class="card-img-top mt-4" alt="Money transfer">
          <div class="card-body">
            <h5 class="card-title" id="harry">Transfer Money</h5>
            <p class="card-text"> Transfer Money among multiple users</p>
            <a href="transfermoney.php" class="btn btn-dark">Transfer Money</a>
          </div>
        </div>

      </div>

    </div>
    
  </section>
  <!--Services -->

  <?php include_once "includes/footer.php"; ?>

</body>

</html>
