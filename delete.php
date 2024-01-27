<?php
    include "db_conn.php";
    $id=$_GET['id'];
    $sql="DELETE FROM `member` WHERE id=$id";

$result=mysqli_query($conn,$sql);
  if($result){
    header("Location: dashbord.php?msg=record deleted successfuly");
  }
  else{
    echo "Failed".mysqli_error($conn);
  }
?>