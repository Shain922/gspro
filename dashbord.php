<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashbord</title>

    <!-- boostrap cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

    <!-- font awsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="./css/index.css"> -->
    <link rel="stylesheet" href="./css/dashboard.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col nav">
                <img src="./img/logo.jpeg" class="img-fluid logo" alt="" />
                <div class="nav"> GS PRO DASHBOARD</div>
            </div>
        </div>

        <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        ' . $msg . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        }
        ?>
        <!-- button set start -->
        <div class="container-fulid">
            <div class="row">
                <div class="col-md-10 mt-3">

                    <!-- add new link -->
                    <a href="add.php" class="btn btn-dark">add new</a>
                </div>
                <div class="col-md-1 mt-3">
                    <!-- search link -->
                    <a href="search.php" class="btn btn-dark ">search</a>
                </div>
                <div class="col-md-1 mt-3">

                    <!-- logout link -->
                    <button class="btn btn-dark" id="logout">logout</button>
                </div>
            </div>
        </div>
        <!-- button set end -->
        <div class="table-responsive">
            <table class="table table-hover text-center mt-3">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">full name</th>
                        <th scope="col">NIC</th>
                        <th scope="col">gender</th>
                        <th scope="col">marital</th>
                        <th scope="col">nation</th>
                        <th scope="col">religion</th>
                        <th scope="col">dob</th>
                        <th scope="col">house_no</th>
                        <th scope="col">address</th>
                        <th scope="col">place of work</th>
                        <th scope="col">monthy income</th>
                        <th scope="col">edu_level</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "db_conn.php";

                    $sql = "SELECT * FROM `member`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['full_name'] ?></td>
                            <td><?php echo $row['id_card'] ?></td>
                            <td><?php echo $row['gender'] ?></td>
                            <td><?php echo $row['marital'] ?></td>
                            <td><?php echo $row['nation'] ?></td>
                            <td><?php echo $row['religion'] ?></td>
                            <td><?php echo $row['dob'] ?></td>
                            <td><?php echo $row['house_no'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo $row['place_work'] ?></td>
                            <td><?php echo $row['income'] ?></td>
                            <td><?php echo $row['edu_level'] ?></td>
                            <td>
                                <!-- edit button -->
                                <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa fa-pencil-square-o fs-5 me-3" aria-hidden="true"></i>
                                </a>
                                <!-- delete button -->
                                <a href="delete.php?id=<?php echo $row['id']; ?>" class="link-dark"><i class="fa fa-trash fs-5 me-3" aria-hidden="true"></i> </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    include "./includes/footer.php";
    ?>
    </div>
    <!-- custum js -->
    <script src="./js/main.js"></script>
    <!-- boostrap js bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- sweet alert cdn -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>