<?php
include("config.php");
$result = mysqli_query($conn, "SELECT* from user ORDER by id DESC");
?>
<!DOCTYPE html>
<html>

<head>
  <title>login and Registration Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="login page.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>

<body>



  <div class="cont">

    <div class="form sign-in">
      <h2>Sign In</h2>
      <form action="" method="POST">

        <label>
          <span>Email Address</span>
          <input type="email" name="semail" id="" required>
        </label>
        <label>
          <span>Password</span>

          <input type="password" name="epassword" id="" required>
        </label>


        <button class="submit" name="signbtn">Sign In </button>
        <?php

        // session_start();
        // $_SESSION['email'] = $email;
        // $_SESSION['password'] = $password;

        // header('location: SelectPicture.php')
        

        if (isset($_POST['signbtn'])) {
          $s_email = $_POST['semail'];
          $s_password = $_POST['epassword'];

          if ($s_email != "hamidchaudhary3867@gmail.com") {
            header('location: SelectPicture.php');
          } else {
            header('location: admin.php');
          }
        }


        ?>
      </form>



      <p class="forgot-pass">Forgot Password ?</p>



    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">

        </div>
        <div class="img-text m-in">

        </div>

        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <form action="" method="POST">

          <label>
            <span>Name</span>


            <input type="text" name="name" id="" required>

          </label>
          <label>
            <span>Email</span>


            <input type="email" name="email" id="" required>

          </label>
          <label>
            <span>Password</span>


            <input type="password" name="password" id="" required>

          </label>
          <label>
            <span>Confirm Password</span>


            <input type="password" name="confirmpassword" id="" required>



          </label>




          <button class="submit" name="submit">Sign Up Now


          </button>
        </form>
      </div>
    </div>
  </div>
  <?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];



    $result = mysqli_query($conn, "INSERT into user value('', '$name', '$email', '$password', '$confirmpassword')");
    // if ($result) {
    //   header("location:second.php");
    // } else {
    //   echo "failed";
    // }

    if ($password === $confirmpassword) {
      header("location:second.php");
    } else {
      // echo '<script>alert("Password and Confirm Password Did not Match")</script>';
    }
  }
  ?>

  <script type="text/javascript" src="script.js"></script>
</body>

</html>