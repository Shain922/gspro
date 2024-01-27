<?php
include "db_conn.php";

if (isset($_POST["login"])) {
    $user_name = $_POST["userName"];
    $password = $_POST["pass"];
    $sql = "SELECT * FROM users WHERE user_name='$user_name' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        if ($row["user_type"] == "admin") {
?>
            <script>
                swal({
                    title: "Success!",
                    text: "You have successfully logged in as admin",
                    icon: "success",
                    button: "OK",
                }).then(() => {
                    // Redirect the page after the user clicks OK
                    window.location.href = "http://localhost/gs/dashbord.php";
                });
            </script>
        <?php   } else if ($row["user_type"] == "user") {

        ?>
            <script>
                swal({
                    title: "Success!",
                    text: "You have successfully logged in as user",
                    icon: "success",
                    button: "OK",
                }).then(() => {
                    // Redirect the page after the user clicks OK
                    window.location.href = "http://localhost/gs/user.php";
                });
            </script>
        <?php
        }
    } else { ?>
        <script>
            swal({
                title: "error!",
                text: "You dont have an account",
                icon: "error",
                button: "OK",
            })
        </script>
<?php
    }
}
?>