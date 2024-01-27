<?php
  // Database Connection
  include "db_conn.php";
  // Check if Search button is clicked or not
  if (isset($_POST['search'])) {
    $searchkey = $_POST['search'];
    $sql = "SELECT * FROM member WHERE LOWER(full_name) LIKE LOWER('%$searchkey%')";
  } else {
    $sql = "SELECT * FROM member";
    $searchkey = "";
  }

  // Perform SQL Query
  $result = mysqli_query($conn, $sql);
