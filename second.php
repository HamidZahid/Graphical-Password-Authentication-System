<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="second.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    <title>User Registration Form</title>
</head>

<body>


    <div class="all">
        <h2>Graphical Password Authentication System</h2>
        <h3>User Registration Form</h3>
        <img src="beast.jpg" alt="logo" srcset="">

        <div class="cont">
            <form action="UserPicture.php" method="POST" enctype="multipart/form-data">
                <p><b>IMAGE 1:<input type="file" name="picture1" placeholder="Enter Picture" Required></p>
                </b>
                <p><b>IMAGE 2:<input type="file" name="picture2" id="picture2" placeholder="Enter Picture" Required></p>
                </b>
                <p><b>IMAGE 3:<input type="file" name="picture3" id="picture3" placeholder="Enter Picture" Required></p>
                </b>
                <p><b>IMAGE 4:<input type="file" name="picture4" id="picture4" placeholder="Enter Picture" Required></p>
                </b>



                <button type="submit" name="submit" value="upload"><b>Registration</b></button>

            </form>
        </div>

    </div>





</body>

</html>