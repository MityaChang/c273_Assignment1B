<!--Jin Qikai 19034275-->
<?php
include "dbFunctions.php";
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$height = $_POST['signupHeight'];
$weight = $_POST['signupWeight'];
$birthdate = $_POST['birthday'];
$activelevel = $_POST['activity'];
$password = sha1($password);

$queryCheck = "SELECT * FROM user
                WHERE username='$username'";
$resultCheck = mysqli_query($link, $queryCheck) or die(mysqli_error($link));

if (mysqli_num_rows($resultCheck) == 1) {
    $message = "Username already exists!";
    $message .= "<br/> Please try to <a href='register.php'>register</a> again.";
} else {
    $queryInsert = "INSERT INTO user (username, email, password, gender, weight, height, dateOfBirth, activeLevel)
                    VALUES ('$username', '$email', '$password', '$gender', $weight, $height, '$birthdate', '$activelevel')";
    $resultInsert = mysqli_query($link, $queryInsert) or die;
    $message = "Congratulations " . $username . " , you have successfully registered an account with YCH!";
    $message .= "<br/> You can now <a href='login.php'>login.</a>";
}

mysqli_close($link);
?>

<?php
    session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php include 'extension.html'?>
        <style>
            #message{
                font-weight: bold;
                text-align: center;
                margin-top: 100px;
            }
        </style>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <?php
        echo "<h3 id='message'>$message</h3>";
        ?>

    </body>
</html>
<!--Jin Qikai 19034275-->