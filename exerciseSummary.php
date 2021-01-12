<!--Jin Qikai 19034275-->
<?php
include 'dbFunctions.php';
session_start();

$username = $_SESSION['user'];
$query = "SELECT * FROM entry WHERE username='$username'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$output = array();

while ($row = mysqli_fetch_assoc($result)) {
  $output[] = $row;
}

echo json_encode($output);
?>
<!--Jin Qikai 19034275-->