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
        header("Location: dashbord.php?msg=new record created successfully");
    } else {
        echo "faild: " . mysqli_error($conn);
    }
}
