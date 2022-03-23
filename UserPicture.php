<?php
include("image.php");


if (isset($_POST['submit']) && isset($_FILES['picture1'])) {
  // echo "<pre>";
  // print_r($_FILES['picture1']);
  // echo "</pre>";

  $f_name = $_FILES['picture1']['name'];
  $t_name = $_FILES['picture1']['tmp_name'];

  if (move_uploaded_file($t_name, "DB_images/" . $f_name)) {

    // $qry = "INSERT INTO `images`(`id`, `picture1`) VALUES ('$f_name')";

    // if ($run = mysqli_query($con, $qry)) {
    //   echo "file moved";
    // } else {
    //   echo "not moved";
    // }

    // echo "file move";
  } else {
    // echo " file not moved";
  }
} else {
  header('location:second.php');
}



if (isset($_POST['submit']) && isset($_FILES['picture2'])) {
  // echo "<pre>";
  // print_r($_FILES['picture2']);
  // echo "</pre>";
  $a_name = $_FILES['picture2']['name'];
  $t_name = $_FILES['picture2']['tmp_name'];

  if (move_uploaded_file($t_name, "DB_images/" . $a_name)) {





    // echo "file move";
  } else {
    // echo " file not moved";
  }
} else {
  header('location:second.php');
}
if (isset($_POST['submit']) && isset($_FILES['picture3'])) {
  // echo "<pre>";
  // print_r($_FILES['picture3']);
  // echo "</pre>";
  $h_name = $_FILES['picture3']['name'];
  $t_name = $_FILES['picture3']['tmp_name'];

  if (move_uploaded_file($t_name, "DB_images/" . $h_name)) {
    // echo "file move";
  } else {
    // echo " file not moved";
  }
} else {
  header('location:second.php');
}
if (isset($_POST['submit']) && isset($_FILES['picture4'])) {
  // echo "<pre>";
  // print_r($_FILES['picture4']);
  // echo "</pre>";
  $s_name = $_FILES['picture4']['name'];
  $t_name = $_FILES['picture4']['tmp_name'];

  if (move_uploaded_file($t_name, "DB_images/" . $s_name)) {
    // echo "file move";
  } else {
    // echo " file not moved";
  }
} else {
  header('location:second.php');
}


$qry = "INSERT INTO `images`(`id`, `picture1`, `picture2`, `picture3`, `picture4`) VALUES ('','$f_name','$a_name','$h_name','$s_name')";

$query_run = mysqli_query($con, $qry);

// if ($query_run) {
//   echo "images inserted in data base";
// } else {
//   echo "failed to insert ";
// }
?>
<h3 style="text-align: center; color:black;">Registration ComPleted Back To Login Page</h3>

<a href="loginpage.php" style="align-content: center; text-decoration: none;  color:black;">Click TO Login</a>