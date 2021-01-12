<!--Jin Qikai 19034275-->
<?php
session_start();
if (isset($_SESSION['user'])) {
    $_SESSION=array();
        $msg= "<a href='mainPage.php'>Return to main menu</a>";
    session_destroy();

}

?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include './extension.html'?>
    </head>
    <body>
        <a style='text-align:center;'><?php include './navbar.php';
        echo $msg; ?></a>
        
    </body>
</html>
<!--Jin Qikai 19034275-->