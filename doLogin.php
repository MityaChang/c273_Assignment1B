<!--Jin Qikai 19034275-->
<?php
include("dbFunctions.php");
session_start();

$msg = "";
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = sha1($password);

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['user'] = $username;
        $msg = "<b>You have successfully login<b><br>";
        $msg .= "<a href='mainPage.php'>Return to main menu</a>";
    } else {
        $msg = "You have entered a wrong password.";
        $msg.= "<a href='login.php'>Please login again</a>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <?php include './extension.html'?>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <div class="card" style="width: 300px;height: 200px;margin: 0 auto; margin-top: 100px; padding: 10px; text-align: center;">
            Login
            <hr style="background-color: black;">
            <?php
                echo $msg;
            ?>
        </div>
    </body>
</html>
<!--Jin Qikai 19034275-->