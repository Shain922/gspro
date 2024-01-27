<?php
include "./php/add.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico" />

  <title>form</title>
  <!-- nessary boostrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <!-- font awsome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
      <form autocomplete="on" action="" method="POST">
        <?php
        include "./includes/populationForm.php";
        ?>
        <!-- family members end -->
        <hr class="mb-4" />
        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-success btn-block btn-lg " name="submit">Add</button>
          </div>
          <div class="col">
            <a href="dashbord.php" class="btn btn-danger btn-block btn-lg">Cancel</a>
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
<!-- jquary -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- boostrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/addNew.js"></script>

</html>