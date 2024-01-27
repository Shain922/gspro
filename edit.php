<?php
include "db_conn.php";
$id = $_GET['id'];

if (isset($_POST['submit'])) {
  $id = $_GET['id'];
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

  $sql = "UPDATE `member` SET 
  `id`='$id', `full_name`='$full_name', `id_card`='$id_card', `dob`='$dob', `house_no`='$house_no', `address`='$address', `place_work`='$place_work', `income`='$income', `gender`='$gender', `marital`='$marital', `edu_level`='$edu_level', `nation`='$nation', `religion`='$religion' WHERE `id`='$id'";


  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("Location: dashbord.php?msg=data updated sucessfully");
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

  <title>form</title>
  <!-- nessary boostrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <!-- font awsome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- jquary -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="./js/addNew.js"></script>
  <style>
    * {
      text-transform: capitalize;
    }
  </style>

</head>

<body class="bg-light">
  <div class="container">
    <?php
    include "db_conn.php";
    $sql = "SELECT * FROM `member` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <!-- main form -->
    <div class="col-md order-md-1">
      <h1 class="mb-3 text-center">Population and census</h1>
      <form autocomplete="on" action="" method="POST">
        <!-- frist line -->
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="fullName">full name</label>
            <input type="text" class="form-control" id="fullName" placeholder="full name" name="full_name" value="<?php echo $row['full_name'] ?>" required />
          </div>
          <div class="col-md-6 mb-3">
            <label for="identity">NIC</label>
            <input type="text" class="form-control" id="identity" placeholder="" name="id_card" value="<?php echo $row['id_card'] ?>" required />

          </div>
        </div>
        <!-- second line -->
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="dob">date of brith</label>
            <input type="date" class="form-control" id="dob" placeholder="" name="dob" value="<?php echo $row['dob'] ?>" required />

          </div>
          <div class="col-md-6 mb-3">
            <label for="hhd">house hold number</label>
            <input type="number" class="form-control" id="hhd" placeholder="" name="house_no" value="<?php echo $row['house_no'] ?>" required />

          </div>
        </div>

        <!-- 3rd -->
        <!-- radio btn start -->
        <hr class="" />
        <div class="row mb-3">
          <div class="col">
            <h5 class="mb-3">gender</h5>
            <div class="row">
              <div class="col-md">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" value="male" <?php echo ($row['gender'] == 'male') ? "checked" : ""; ?>>
                  <label class="form-check-label">
                    male
                  </label>
                </div>
              </div>
              <div class="col-md">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" value="female" <?php echo ($row['gender'] == 'female') ? "checked" : ""; ?>>
                  <label class="form-check-label">
                    female
                  </label>
                </div>
              </div>
            </div>

          </div>
          <div class="col">

            <h5 class="mb-3">marital status</h5>
            <div class="row">
              <div class="col-md">

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="marital" value="married" <?php echo ($row['marital'] == 'maried') ? "checked" : ""; ?>>
                  <label class="form-check-label">
                    married
                  </label>
                </div>
              </div>
              <div class="col-md">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="marital" value="devorst" <?php echo ($row['marital'] == 'devorst') ? "checked" : ""; ?>>
                  <label class="form-check-label">
                    divorce
                  </label>
                </div>
              </div>
            </div>

          </div>
        </div>
        <hr class="" />
        <!-- nation and religion start -->
        <div class="row">
          <div class="col-md">
            <div class="form-group">
              <label>nation</label>
              <select class="custom-select d-block w-100" id="" name="nation" required>
                <option value="">select</option>
                <option value="sinhala">sinhala</option>
                <option value="tamil">tamil</option>
                <option value="muslim">muslim</option>
                <option value="burgher">burgher</option>
              </select>
            </div>
          </div>
          <div class="col-md">
            <div class="form-group">
              <label>religion</label>
              <select class="custom-select d-block w-100" id="" name="religion" required>
                <option>select</option>
                <option value="budhisim">budhisim</option>
                <option value="hindu">hindu</option>
                <option value="islam">islam</option>
                <option value="catholisim">catholisim</option>
                <option value="other">other</option>
              </select>
            </div>
          </div>
        </div>
        <!-- nation and religion end -->

        <!-- radio end -->
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="address">address</label>
            <input type="text" class="form-control" id="address" placeholder="address" name="address" value="<?php echo $row['address'] ?>" required />

          </div>
          <div class="col-md-6 mb-3">
            <label for="placeOfWork">place of work</label>
            <input type="text" class="form-control" id="placeOfWork" placeholder="" name="place_work" value="<?php echo $row['place_work'] ?>" required />

          </div>
        </div>

        <!-- 4th -->
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="monthlyincome">monthly income</label>
            <input type="text" class="form-control" id="monthlyincome" placeholder="" name="income" value="<?php echo $row['income'] ?>" required />

          </div>
          <div class="col-md-6 mb-3">
            <label for="edu-level">education level</label>
            <select class="custom-select d-block w-100" id="edu-level" name="edu_level" required>
              <option value="">select</option>
              <option value="odinary">odinary level</option>
              <option value="advance"> advance level</option>
              <option value="higher"> highers study</option>
            </select>

            <!-- add another field -->

          </div>
        </div>
        <!-- family members details -->
        <h4 class="text-muted">
          family members details
        </h4>
        <div id="tbl">
          <div class="row" id="">
            <div class="col-md-3">
              <div class="form-group">
                <label for="">name</label>
                <input type="text" class="form-control" name="" id="">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">relationship</label>

                <input type="text" class="form-control" name="" id="">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">occupation</label>
                <input type="text" class="form-control" name="" id="">
              </div>
            </div>
            <div class="col-md-3">
              <button class="btn btn-primary btn-block mt-4" id="add">
                Add more members
              </button>

            </div>
          </div>

        </div>

        <!-- family members end -->


        <hr class="mb-4" />
        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-success btn-block btn-lg " name="submit">Update</button>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</html>