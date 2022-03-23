 <?php
  include("config.php");
  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />

   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" /> -->
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

   <title>Update Into DataBase</title>
 </head>
 <style>
   body {
     overflow-x: hidden;
   }
 </style>

 <body>
   <?php


    if (isset($_POST['edit_btn'])) {
      $id = $_POST['edit_id'];
      // echo $id;
      $query = "SELECT * FROM user WHERE id='$id'";
      $query_run = mysqli_query($conn, $query);

      foreach ($query_run as $row) {
    ?>
       <h2 style="text-align: center; margin-top:20px;">User Data Update Form</h2>
       <br><br>
       <form action="admin.php" method="POST">
         <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
         <div class="form-floating mb-3">
           <input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="name@example.com">
           <label for="floatingInput">Name</label>
         </div> <br>
         <div class="form-floating mb-3">
           <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="name@example.com">
           <label for="floatingInput">Email address</label>
         </div><br>
         <div class="form-floating">
           <input type="password" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Password">
           <label for="floatingPassword">Password</label>
         </div><br>
         <div class="form-floating">
           <input type="password" name="edit_confirm" value="<?php echo $row['confirmpassword'] ?>" class="form-control" placeholder="Password">
           <label for="floatingPassword">Password</label>
         </div><br>
         <a href="admin.php" class="btn btn-danger" style="margin-left: 50px;">Cancel</a>
         <button type="submit" name="updatebtn" class="btn btn-dark" style="margin-left: 50px;">Update</button>
       </form>
   <?php
      }
    }
    ?>

 </body>

 </html>