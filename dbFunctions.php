<!--Jin Qikai 19034275-->
<?php
//$db_host = "localhost";
//$db_user = "root";
//$db_pass = "";
//$db_name = "c273_assignment";
//
//$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or
//        die(mysqli_connect_error());
?>
<!--Jin Qikai 19034275-->

<?php

if ($_SERVER['HTTP_HOST'] == "localhost"){
//$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "c273_assignment";

$host = "localhost";
$link = mysqli_connect($db_user, $db_pass, $db_name) or
        die(mysqli_connect_error());
}
else{


  $connectstr_dbhost = '';
  $connectstr_dbname = '';
  $connectstr_dbusername = '';
  $connectstr_dbpassword = '';

  foreach ($_SERVER as $key => $value) {
  if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
  continue;
  }

  $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
  $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
  $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
  $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
  }

  $link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);

  if (!$link) {
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
  echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
  exit;
  }
 
}
?>

