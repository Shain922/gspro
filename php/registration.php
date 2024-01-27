<?php
include "db_conn.php";
if (isset($_POST["admin"])) {
    $user_name = $_POST["userName"];
    $password = $_POST["password"];
    $sql1 = "INSERT INTO users(user_name,password,user_type)VALUES('$user_name','$password','admin')";
    $result = mysqli_query($conn, $sql1);
    if ($result) { ?>
        <script>
            swal({
                title: "Success!",
                text: "You have successfully create account",
                icon: "success",
                button: "OK",
            })
        </script>
    <?php
    } else {
    ?>
        <script>
            swal({
                title: "error!",
                text: "cant register",
                icon: "error",
                button: "OK",
            })
        </script>
    <?php
    }
}

if (isset($_POST["user"])) {
    $user_name = $_POST["userName"];
    $password = $_POST["password"];
    $sql1 = "INSERT INTO users(user_name,password,user_type)VALUES('$user_name','$password','user')";
    $result = mysqli_query($conn, $sql1);
    if ($result) { ?>
        <script>
            swal({
                title: "Success!",
                text: "You have successfully create account",
                icon: "success",
                button: "OK",
            })
        </script>
    <?php
    } else {
    ?>
        <script>
            swal({
                title: "error!",
                text: "cant register",
                icon: "error",
                button: "OK",
            })
        </script>
<?php
    }
}
?>