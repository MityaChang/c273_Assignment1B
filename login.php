<!--Jin Qikai 19034275-->
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

                    <!--Username: dany
                      password: 123123-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include './extension.html'?>
        <link rel="stylesheet" href="./css/login.css">
    </head>
    <body>
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <br>
                <div class="fadeIn first">
                    <a href="./mainPage.php">
                        <img src="image/ych-logo.png" alt="User Icon" id="icon"/>
                    </a>

                </div>
                <br>
                <!-- Login Form -->
                <form name="login" action="doLogin.php" method="post">
                    <input type="text" id="login" class="fadeIn second" name="username" placeholder="login" required>
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
                    <br><br>
                    <input type="submit" class="fadeIn fourth" value="Log In">
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                    <br><br>
                    <form name="login" action="main_page.html" method="post">
                        <a class="underlineHover" href="./signup.php">Register</a>
                    </form>
                </div>


            </div>
        </div>
    </body>
</html>
<!--Jin Qikai 19034275-->