<!--Jin Qikai 19034275-->
<?php
session_start();
include("dbFunctions.php");

if (isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
    $type = $_GET['exercisetype'];
    $duration = $_GET['durationSlideValue'];
    $queryCheck = "SELECT * FROM user WHERE username='$username'";
    $resultCheck = mysqli_query($link, $queryCheck) or die(mysqli_error($link));
    if (mysqli_num_rows($resultCheck) > 0) {
        $queryInsert = "INSERT INTO entry
                        (username, exercise, duration)
                        VALUES ('$username','$type' ,$duration)";
        $resultInsert = mysqli_query($link, $queryInsert) or die(mysqli_error($link));
        if ($resultInsert) {
          echo "TRUE";
        } else {
          echo "FALSE";
        }
    }
}
?>
<!--Jin Qikai 19034275-->