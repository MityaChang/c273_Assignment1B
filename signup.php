<!--Jin Qikai 19034275-->
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
  <meta charset="UTF-8">
  <title></title>
  <?php include 'extension.html'?>
  <script type="text/javascript" src="./js/signup.js"></script>
  <link rel="stylesheet" href="./css/signup.css">
</head>

<body>
  <div id="formFooter">
    <a href="./mainPage.php"><img src="image/ych-logo.png" alt="Nature" class="rounded mx-auto d-block" /></a>

    <h1 style="text-align: center;">Register</h1>
    <p style="text-align: center;">Please fill in this form to register for an YCH account</p>

    <hr>
  </div>
  <div class="container">

    <form method="post" action="doSignup.php">
      <div class="form-group">
        <label>Enter your username:</label>
        <input type="text" name="username" class="form-control" placeholder="enter your username">
      </div>

      <div class="form-group">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" placeholder="enter your email">
      </div>
      <div class="form-group">
        <label>Enter your password:</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="enter your password">
      </div>
      <div class="form-group">
        <label>Confirm your password:</label>
        <input type="password" name="confirmPassword" class="form-control" placeholder="re-type your password">
      </div>
      <div class="form-group">
        <label for="selGender">Gender<span style="color:red">*</span>:</label>
        <select id="selGender" name="gender" class="form-control">
          <option value="">Please select...</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Others">Others</option>
        </select>
      </div>

      <div class="row form-group">
        <div class="col-4">
          <label for="height">Please Enter Your Height (in m): </label>
          <input type="number" class="form-control" id="height" name="signupHeight" min="1" max="2.2"/>
        </div>
        <div class="col-4">
          <label for="weight">Please Enter Your Weight (in Kg): </label>
          <input type="number" class="form-control" id="weight" name="signupWeight" min="30" max="400" />
        </div>
        <div class="col-4">
          <label>Date of Birth:</label>
          <input type="date" id="date" name="birthday" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label for="radioGroup">Active Level:</label>
        <div id="radioGroup" name="radioGroup">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="sedentary" name="activity">
            <label class="form-check-label" for="defaultCheck1">
              sedentary
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="moderate" name="activity">
            <label class="form-check-label" for="defaultCheck1">
              moderate
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="active" name="activity">
            <label class="form-check-label" for="defaultCheck1">
              active
            </label>
          </div>
        </div>
      </div>
      <input type="submit" name="submitBtn" value="sign-up" class="btn btn-primary btn-block btn-lg">
    </form>

  </div>
  <div id="formFooter">

    <form name="login" action="main_page.html" method="post">
      <a>Already have an account? </a>
      <a class="underlineHover" href="./login.php">Login Here</a>
    </form>
    <h5>OR</h5>
    <a class="underlineHover" href="./mainPage.php">Back to Mainpage</a>

  </div>
</body>

</html>
<!--Jin Qikai 19034275-->