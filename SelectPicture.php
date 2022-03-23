<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Pictures</title>
</head>
<style>
    body {
        background-color: black;
    }

    h2 {
        color: white;
    }

    .container input {
        width: 150px;
        height: 30px;
        align-content: center;
        background-color: blue;
        color: white;
        margin-left: 600px;
        border-radius: 20px;
        text-decoration: none;
    }

    img:hover {
        color: white;
    }
</style>

<body>
    <h2 style="text-align: center;">Select Your Pictures</h2>

    <?php
    include("image.php");

    $qry1 = "SELECT * FROM `images`WHERE 1";
    $run = mysqli_query($con, $qry1);

    while ($row = mysqli_fetch_array($run)) {

    ?>



        <img onclick="third()" src="DB_images/<?php echo $row['picture3'] ?>" width="150px" height="150px" align="left">
        <img onclick="test1()" src="DB_images/cio_learning.png" width="150px" height="150px" margin-left="20px" align="center">
        <img onclick="test2()" src="DB_images/hqdefault.jpg" width="150px" height="150px" margin-left="20px" align="center">
        <img onclick="test3()" src="DB_images/evgeny-tchebotarev-aiwuLjLPFnU-unsplash.jpg" width="150px" height="150px" margin-left="20px" align="center">
        <img onclick="test4()" src="DB_images/michael-dziedzic-aQYgUYwnCsM-unsplash.jpg" width="150px" height="150px" margin-left="20px" align="left">
        <img onclick="test5()" src="DB_images/thumb-1920-1098301.png" width="150px" height="150px" margin-left="20px" align="right">
        <img onclick="test6()" src="DB_images/evgeny-tchebotarev-aiwuLjLPFnU-unsplash.jpg" width="150px" height="150px" margin-left="20px" align="left">
        <img onclick="test7()" src="DB_images/kobu-agency-67L18R4tW_w-unsplash.jpg" width="150px" height="150px" margin-left="20px" align="center">
        <img onclick="test8()" src="DB_images/how-to-edit-keynote-files-in-windows-logo_thumb1200_4-3.jpg" width="150px" height="150px" margin-left="20px" align="right">
        <img onclick="test9()" src="DB_images/lamborghini_aventador_white_sports_car_76876_1920x1080-450x253.jpg" width="150px" height="150px" margin-left="20px" align="center">
        <img onclick="fourth()" src="DB_images/<?php echo $row['picture4'] ?>" width="150px" height="150px" align="right">
        <img onclick="test10()" src="DB_images/first (4).jpg" width="150px" height="150px" align="right">
        <img onclick="test11()" src="DB_images/1404344.png" width="150px" height="150px" align="right">
        <img onclick="test12()" src="DB_images/twitter.png" width="150px" height="150px" align="right">
        <img onclick="test13()" src="DB_images/p1.jpg" width="150px" height="150px" align="right">
        <img onclick="second()" src="DB_images/<?php echo $row['picture2'] ?>" width="150px" height="105px" margin-left="20px" align="left">
        <img onclick="test14()" src="DB_images/second.jpg" width="150px" height="150px" align="right">
        <img onclick="test15()" src="DB_images/instagram.png" width="150px" height="150px" align="right">
        <img onclick="test16()" src="DB_images/linkedin.png" width="150px" height="150px" align="right">
        <img onclick="test17()" src="DB_images/i.jpg" width="150px" height="150px" align="right">
        <img onclick="test18()" src="DB_images/first (3).jpg" width="150px" height="150px" align="center">
        <img onclick="test19()" src="DB_images/instagram.png" width="150px" height="150px" align="center">
        <img onclick="test20()" src="DB_images/m k.gif" width="150px" height="150px" align="center">
        <img onclick="test21()" src="DB_images/morvanic-lee-GiUJ02Yj_io-unsplash.jpg" width="150px" height="150px" align="center">
        <img onclick="test22()" src="DB_images/muhannad-ajjan-sL2BRR1cuvM-unsplash.jpg" width="150px" height="150px" align="center">
        <img onclick="first()" src="DB_images/<?php echo $row['picture1'] ?>" width="150px" height="150px" align="center">
    <?php
    }


    ?>
    <div class="container">
        <a href="loginpage.php">
            <input type="button" value="LOG OUT">
        </a>
    </div>

</body>
<script type="text/javascript">
    function third() {
        alert("Your Entered 3rd Picture Selected")
    }

    function first() {
        alert("Your Entered 1st Picture Selected")
    }

    function second() {
        alert("Your Entered 2nd Picture Selected")
    }

    function fourth() {
        alert("Your Entered 4th Picture Selected")
    }

    function test1() {
        alert("Wrong Picture Selected")
    }

    function test2() {
        alert("Wrong Picture Selected")
    }

    function test3() {
        alert("Wrong Picture Selected")
    }

    function test4() {
        alert("Wrong Picture Selected")
    }

    function test5() {
        alert("Wrong Picture Selected")
    }

    function test6() {
        alert("Wrong Picture Selected")
    }

    function test7() {
        alert("Wrong Picture Selected")
    }

    function test8() {
        alert("Wrong Picture Selected")
    }

    function test9() {
        alert("Wrong Picture Selected")
    }

    function test10() {
        alert("Wrong Picture Selected")
    }

    function test11() {
        alert("Wrong Picture Selected")
    }

    function test12() {
        alert("Wrong Picture Selected")
    }

    function test13() {
        alert("Wrong Picture Selected")
    }

    function test14() {
        alert("Wrong Picture Selected")
    }

    function test15() {
        alert("Wrong Picture Selected")
    }

    function test16() {
        alert("Wrong Picture Selected")
    }

    function test17() {
        alert("Wrong Picture Selected")
    }

    function test18() {
        alert("Wrong Picture Selected")
    }

    function test19() {
        alert("Wrong Picture Selected")
    }

    function test20() {
        alert("Wrong Picture Selected")
    }

    function test21() {
        alert("Wrong Picture Selected")
    }

    function test22() {
        alert("Wrong Picture Selected")
    }
</script>

</html>