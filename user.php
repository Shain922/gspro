<?php
include "db_conn.php";
if (isset($_POST['submit'])) {
  $full_name = $_POST['full_name'];
  $id_card = $_POST['id_card'];
  $dob = $_POST['dob'];
  $house_no = $_POST['house_no'];
  $address = $_POST['address'];
  $place_work = $_POST['place_work'];
  $income = $_POST['income'];
  $gender = $_POST['gender'];
  $marital = $_POST['marital'];
  $edu_level = $_POST['edu_level'];
  $nation = $_POST['nation'];
  $religion = $_POST['religion'];

  $sql = "INSERT INTO `member`(`id`, `full_name`, `id_card`, `dob`, `house_no`, `address`, `place_work`, `income`, `gender`, `marital`, `edu_level`, `nation`, `religion`) VALUES (NULL,
    '$full_name','$id_card','$dob','$house_no','$address',' $place_work','$income','$gender','$marital','$edu_level','$nation','$religion')";


  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
        form successfully submit
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
  } else {
    echo "faild: " . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico" />
  <!-- sweet alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>form</title>
  <!-- nessary boostrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <!-- font awsome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="./js/addNew.js"></script>
  <link rel="stylesheet" href="./css/user.css">

  <style>
    * {
      text-transform: capitalize;
    }
  </style>

</head>

<body class="bg-light">
  <div class="container">
    <!-- main form -->
    <div class="col-md order-md-1">
      <h1 class="mb-3 text-center">Population and census</h1>
      <p class="muted text-center">fill the following details</p>
      <form autocomplete="on" action="" method="POST">

        <?php
        include "./includes/populationForm.php";

        ?>
        <hr class="mb-4" />
        <div class="row">
          <div class="col">
            <a href="./index.php" class="btn btn-dark btn-block btn-lg">back</a>
          </div>
          <div class="col">
            <button type="submit" class="btn btn-success btn-block btn-lg " name="submit">Submit</button>
          </div>
          <div class="col">
            <input type="reset" class="btn btn-danger btn-block btn-lg">
          </div>

        </div>
      </form>
    </div>
  </div>

  <?php
  include "./includes/footer.php";
  ?>
  </div>
</body>

<!-- boostrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</script>

</html>