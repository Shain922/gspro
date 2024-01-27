<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>login</title>
  <!-- boostrap 4 cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <!-- boostrap 5 cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <!-- fonr awsome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- sweet alert cdn -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="./css/login.css" />
</head>

<body>

  <!-- login page start -->
  <section class="form py-5 d-flex justify-content-center min-vh-100 align-item-center">
    <!-- main container -->
    <div class="container-fluid container">
      <div class="row no-gutters mt-5">
        <!-- image -->
        <div class="col-lg-6">
          <img src="./img/login.jpg" alt="" class="img-fluid" />
        </div>
        <!-- login form section -->
        <div class="col-lg-6 px-5 pt-5 mx-auto text-center">
          <!-- login form -->
          <form action="login.php" method="post" autocomplete="off">
            <img src="./img/login icon.svg" class="avatar img-fluid mx-auto" alt="" />
            <h1 class="my-3">welcome</h1>
            <!-- user name  -->
            <div class="form-row form-group text-center">
              <div class="icon">
                <i class="fa fa-user" aria-hidden="false"></i>
              </div>
              <div class="col-lg">
                <input type="text" class="form-control" name="userName" id="username" placeholder="user name" required />
              </div>
            </div>
            <!-- password -->
            <div class="form-row mt-4">
              <div class="icon">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </div>
              <div class="col-lg">
                <input type="password" name="pass" id="password" class="form-control" placeholder="password" required />
              </div>
            </div>
            <!-- forgot password link-->
            <div class="mt-4 text-decoration-none mx-auto">
              <a href="#">forgot password ?</a>
            </div>
            <!-- button -->
            <div class="form-row my-4">
              <div class="col-lg">
                <input type="submit" class="btn1 rounded-pill" name="login" value="login" />
              </div>
            </div>
          </form>
          <!-- form end -->
        </div>
      </div>
      <!-- main container end -->
    </div>
  </section>
</body>

<?php
include "./php/login.php";
?>
<!-- js bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- jaquary cdn -->
<script src="https://code.jquery.com/jquery-migrate-3.4.1.min.js" integrity="sha256-UnTxHm+zKuDPLfufgEMnKGXDl6fEIjtM+n1Q6lL73ok=" crossorigin="anonymous"></script>

</html>