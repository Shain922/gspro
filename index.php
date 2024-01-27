<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>home</title>
  <!-- boostrap cdn-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />

  <!-- font awsome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- custem css -->
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>
  <div class="container container-fluid">
    <?php
    include "./includes/nav_bar.php";
    include "./includes/home.php";
    include "./includes/service.php";
    include "./includes/forms.php";
    include "./includes/contactUs.php";
    ?>
  </div>
  <?php
  include "./includes/footer.php";
  ?>
  <!-- boostrap js bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- sweet alert cdn -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>