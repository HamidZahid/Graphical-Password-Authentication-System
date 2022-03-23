<?php
include("config.php");
$query = "SELECT * FROM user";
$query_run = mysqli_query($conn, $query);
?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <title>Admin Panel</title>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">

    <div class="container-fluid">
      <a class="navbar-brand">Muhammad Hamid Zahid (Admin)</a>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>

      </form>
    </div>
  </nav>

  <table class="table">
    <thead class="table-dark">

      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Confirm Password</th>
        <th>Edit/Update</th>
        <th>Delete</th>
      </tr>

    </thead>
    <tbody>

      <?php
      if (mysqli_num_rows($query_run) > 0) {
        while ($row = mysqli_fetch_assoc($query_run)) {
      ?>

          <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><?php echo $row['confirmpassword'] ?></td>
            <td>
              <form action="edit.php" method="post">
                <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                <button type="submit" name="edit_btn" class="btn btn-dark">Edit/Update</button>
              </form>
            </td>
            <td>
              <form action="" method="post">
                <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
                <button type="submit" name="delete_btn" class="btn btn-info">Delete</button>
              </form>
            </td>
          </tr>

      <?php
        }
      } else {
        // echo "no record Found";
      }

      ?>





      <?php
      if (isset($_POST['updatebtn'])) {
        $id = $_POST['edit_id'];
        $username = $_POST['edit_name'];
        $f_email = $_POST['edit_email'];
        $f_password = $_POST['edit_password'];
        $confirm = $_POST['edit_confirm'];

        $query = "UPDATE user SET name='$username', email='$f_email', password='$f_password', confirmpassword='$confirm'  WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
          // header('location: admin.php');
        } else {
          // echo "Data Update Failed";
        }
      }


      if (isset($_POST['delete_btn'])) {

        $id = $_POST['delete_id'];

        $query = "DELETE FROM user WHERE id='$id'";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
          // echo "Data Deleted";
          // header('location: admin.php');
        } else {
          echo "Data Not Deleted";
        }
      }














      ?>

    </tbody>
  </table>







  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->


</body>

</html>





<!-- <button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>

<button type="button" class="btn btn-link">Link</button> -->