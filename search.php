<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Search</title>
  <!-- Bootstrap 5 CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>

<body>
  <?php
  include "./php/search.php";
  ?>
  <div class="container">
    <form action="" method="post" autocomplete="off" class="d-flex align-items-center justify-content-center mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-9 pt-3">

            <a href="./dashbord.php" class="btn btn-dark ">back</a>
          </div>
          <div class="col-md-2 pt-3">
            <input type="text" name="search" class="form-control" placeholder="Search" value="<?php echo $searchkey; ?>" />
          </div>
          <div class="col-md-1 pt-3">
            <button class="btn btn-primary ">Search</button>
          </div>
        </div>
      </div>
    </form>
    <div class="container mt-5">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead class="bg-dark text-light">
            <tr>
              <th>id</th>
              <th>full name</th>
              <th>id_card</th>
              <th>gender</th>
              <th>marital</th>
              <th>dob</th>
              <th>house_no</th>
              <th>address</th>
              <th>place of work</th>
              <th>monthy income</th>
              <th>edu_level</th>
              <th>nation</th>
              <th>religion</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_object($result)) { ?>
              <tr>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->full_name ?></td>
                <td><?php echo $row->id_card ?></td>
                <td><?php echo $row->gender ?></td>
                <td><?php echo $row->marital ?></td>
                <td><?php echo $row->dob ?></td>
                <td><?php echo $row->house_no ?></td>
                <td><?php echo $row->address ?></td>
                <td><?php echo $row->place_work ?></td>
                <td><?php echo $row->income ?></td>
                <td><?php echo $row->edu_level ?></td>
                <td><?php echo $row->nation ?></td>
                <td><?php echo $row->religion ?></td>
              </tr>
            <?php } ?>

      </div>
      </tbody>
      </table>
    </div>
    <?php
    include "./includes/footer.php";
    ?>
  </div>

  <!-- jQuery CDN -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <!-- Bootstrap 5 CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Sweet Alert CDN -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>