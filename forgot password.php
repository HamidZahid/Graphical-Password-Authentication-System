<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    <title>Forgot Password</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            background: url(images/first\ \(4\).jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            /* background: -webkit-linear-gradient(left, #7579ff, #b224ef); */

        }

        .container {
            width: 100%;
            height: 100%;
            /* background: -webkit-linear-gradient(left, #59a1b3b2, #45384b); */
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
        }

        h2 {
            text-align: center;
            font-family: 'Nunito', sans-serif;
            margin-top: 10%;
            padding: 1% 1%;
            color: white;

        }

        img {
            width: 8%;
            height: 15%;
            border: 2px solid black;
            border-radius: 50px;
            margin: 3% 46%;
            justify-content: center;
        }

        input {
            width: 30%;
            display: flex;
            margin: 0.5% 35%;
            padding: 1% 1%;
            color: rgb(12, 12, 14);
            border-radius: 11px;
            border: 2px solid black;
            font-family: 'Nunito', sans-serif;
        }

        p b {
            margin: 2% 35%;
            /* padding: 1% 3%; */
            font-family: 'Nunito', sans-serif;
            color: white;
        }

        button {
            margin: 1% 45%;
            padding: 1% 5%;
            border: 1px solid black;
            border-radius: 20px;
            font-family: 'Nunito', sans-serif;

        }
    </style>
</head>

<body>
    <form action="">

        <div class="container">

            <h2>Forgot Password ?</h2>
            <img src="beast.jpg" alt="logo" srcset="">
            <p><b>Enter Valid Email</b><input type="email" name="Email" id="Email" placeholder="Enter Valid Email"
                    required></p>
            <p><b>Enter Password</b><input type="password" name="Password" id="Password" placeholder="Enter Password"
                    required>
                <a href="loginpage.php">

                    <button>Update</button>
                </a>
        </div>
    </form>
</body>

</html>