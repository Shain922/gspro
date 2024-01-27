<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>register</title>
  <!-- sweet alert cdn -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./css/register.css" />
</head>


<body>
  <div class="account-page">
    <div class="container">
      <div class="row">
        <div class="col-6-lg">


        </div>
        <div class="col-6-lg">
          <!-- start forms -->

          <div class="form-container">
            <div class="form-btn">
              <span onclick="admin()">admin</span>
              <span onclick="user()">user</span>
              <hr id="indicator" />
            </div>
            <!-- admin form -->

            <form action="registration.php" method="post" id="loginForm" class="form">
              <input type="text" placeholder="user name" name="userName" class="form-control" />
              <input type="email" placeholder="email" name="email" class="form-control" />
              <input type="password" placeholder="password" name="password" class="form-control" />
              <input type="password" placeholder="confirm password" class="form-control" />
              <input type="submit" value="register as admin" name="admin" class="btn d-block btn-primary">
              <p>already have an account? <a href="./login.php" class="text-decoration-none">login</a></p>
            </form>

            <!-- user form -->

            <form action="registration.php" method="post" id="RegForm">
              <input type="text" placeholder="user name" name="userName" class="form-control" />
              <input type="email" placeholder="email" name="email" class="form-control" />
              <input type="password" placeholder="password" name="password" class="form-control" />
              <input type="password" placeholder="confirm password" class="form-control" />
              <input type="submit" value="register as user" name="user" class="btn d-block btn-primary">
              <p>already have an account? <a href="./login.php" class="text-decoration-none">login</a></p>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<?php
include "./php/registration.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<script src="./js/registration.js"></script>

</html>