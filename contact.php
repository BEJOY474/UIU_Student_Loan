<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UIU friend loan and crowdsource</title>
    <link rel="icon" href="images/mLogo.png" type="images/icon">

    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" />

    <!-- fontOsam link start -->
    <script src="https://kit.fontawesome.com/09deaf1e8d.js" crossorigin="anonymous"></script>
    <!-- fontOsam link  end-->

    <style>
        html {
            scroll-behavior: smooth;
        }

        .detailsMShop{
            text-align: center;
        }

        .box {
            text-align: center;
        }

        .scroll-up-btn {
            position: fixed;
            height: 45px;
            width: 42px;
            background: red;
            right: 30px;
            bottom: 10px;
            text-align: center;
            line-height: 45px;
            color: #fff;
            z-index: 9999;
            font-size: 30px;
            border-radius: 6px;
            cursor: pointer;
            opacity: 0;
            pointer-events: none;
            transition: all 0.4s ease;
        }

        .scroll-up-btn.show {
            bottom: 30px;
            opacity: 1;
            pointer-events: auto;
        }


        .ul .li .ulIn .liIn {
            display: block;
        }

        .ul .li .ulIn {
            width: 100%;
            background: #22438C;
            position: absolute;
            z-index: 999;
            display: none;
        }

        .ul .li:hover .ulIn {
            display: block;
            background: #fff5f5;
            color: #FFF;

        }

        hr.hrBr {
            padding: 0;
            margin: 0;
        }

        body {
            font-size: 14px;
            line-height: 1.42857143;
            color: #333333;
            background-color: black;
            overflow-x: hidden;
        }

        audio {
            display: none;
        }

        .text h3 a {
            position: relative;
            top: -10px;
        }


        #navbar {
            border-radius: 0px !important;
        }

        marquee {
            padding: 10px;
            font-size: 30px;
            font-family: cursive;
            color: red;
            cursor: pointer;
        }

        .offer a:hover {
            text-decoration: none;
            border: 1px solid black;
        }



        .text.text2::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: red;
            border-left: 2px solid blue;
            animation: animate 4s steps(12) infinite;

        }

        @keyframes animate {

            40%,
            60% {
                left: 100%;
            }

            100% {
                left: 0%;
            }
        }

        .about .about-content .right a {
            display: inline-block;
            background-color: red;
            color: #fff;
            font-size: 20px;
            padding: 10px 30px;
            margin-top: 20px;
            border-radius: 6px;
            border: 2px solid red;
            text-decoration: none;
            transition: all 0.4s ease;
        }


        @media (min-width:450px) {
            .max-width {
                padding: 0 23px;
            }

            .about .about-content .right {
                padding-top: 10px;
                width: 100%;
                text-align: justify;
                justify-content: center;
            }

            .about .about-content .left {
                width: 100%;
            }

            .about .about-content .left img {
                width: 100%;

            }

            .same-height-row :last-child {
                padding-bottom: 20px;
            }


            .col-md-12.headPhnTitleHeader h2 {
                padding-top: 70px;
                color: #fff;
            }


        }



        @media (min-width: 890px) {
            .about .about-content .left {
                width: 45%;
            }

            .about .about-content .right {
                width: 50%;
                text-align: justify;
                justify-content: center;
            }

            .col-md-12.headPhnTitleHeader h2 {
                padding-top: 70px;
                color: #fff;
            }

        }

        .slick-prev:before {
            content: '←';
            color: red;
            font-size: 25px;
        }

        .slick-next:before {
            content: '→';
            color: red;
            font-size: 25px;
        }

        #outerContent {
            background-color: rgb(236, 226, 226);
            position: relative;
            top: 50px;
            height: 660px;
        }

        .headPhnsection {
            /* background-color: black; */
            text-align: center;
        }

        .col-md-12.headPhnTitleHeader {
            /* margin-top: 60px; */
            color: #fff;
        }



        .product {
            background-color: #fff;
            padding: 0px;
            text-align: center;
            border-radius: 5px;
            /* width: 350px;
                                height: 420px; */
        }


        div#content\ headPhnSec {
            background-color: black !important;
        }

        .headTitle {
            text-align: center;
            background-color: black;
        }

        section#outerContent\ hpnSen {
            background-color: black;
        }

        .box_h.box_h2 {
            background-color: black;
        }

        .box_h {
            background-color: rgb(236, 226, 226);
            ;
            margin: 0 0 30px;
            box-sizing: border-box;
            padding: 5px;
            border-radius: 5px;
            transition: all .4s ease;

        }

        .headphnSlid {
            background-color: #222;
        }

        .home img {
            width: 50px;
            border-radius: 13px;
        }

        section .title {
            position: relative;
            text-align: center;
            font-size: 40px;
            font-weight: 500;
            margin-bottom: 60px;
            padding-bottom: 20px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            height: 0vh;
        }

        section#about {
            height: 140vh;
        }

        #top ul.menu>li a:hover {
            color: red;
            text-decoration: none;

            transition: 0.4s;

        }
    </style>
</head>




<body>

    <div id="top">

        <div class="container">

            <div class="col-md-6 offer">

                <a href="index.php" class="btn btn-success btn-sm">Welcome</a>
                <a> to UIU friend loan and crowdsource</a>
            </div>

            <div class="col-md-6">

                <ul class="menu">
                    <!-- echo    $u_name = $_SESSION['user_name']; -->
                    <!-- <li><a><?php ?></a></li> -->

                    <li>
                        <a href="adminLogin.php">Admin</a>

                    </li>

                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a>uiuln&cs@gmail.com</a>
                    </li>

                </ul>

            </div>

        </div>

    </div>

    <div id="navbar" class="navbar navbar-default">

        <div class="container">

            <div class="navbar-header">

                <a href="index.php" class="navbar-brand home">

                    <img src="images/mLogo.png" alt="" class="hidden-xs">
                    <img src="images/mLogo.png" alt="" class="visible-xs">

                </a>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                    <span class="sr-only">Toggle Navigation</span>

                    <i class="fa fa-align-justify"></i>

                </button>

            </div>

            <div class="navbar-collapse collapse" id="navigation">
                <div class="padding-nav">
                    <ul class="nav navbar-nav left ul">
                        <li >
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="checkout.php">Student Loan</a>
                        </li>
                        <li>
                            <!-- <a href="account.php">My Account</a> -->

                        </li>
                        <li>
                            <a href="donation.php">Donation</a>
                        </li>
                        <li>
                            <a href="#about service">About service</a>
                        </li>
                        <li class="active">
                            <a href="#contact">Contact</a>
                        </li>

                        <li class="li-dropout li">
                            <a class="nav-link dropdown-toggle">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu ulIn">
                                <li class="li-dropin liIn"><a href="#about outerContent books">Book</a></li>
                                <hr class="hrBr">
                                <li class="li-dropin liIn"><a href="bookSell.php">Book sell</a></li>
                                <hr class="hrBr">
                                <!-- <li><hr class="dropdown-divider"></li> -->
                                <li class="li-dropin liIn"><a href="tuition.php">Tuition</a></li>
                            </ul>
                        </li>



                    </ul>

                </div>




            </div>

        </div>

    </div>


    <div style="background-color:rgb(236, 226, 226);" id="content" class="content">
        <div class="container">
            
            <div class="col-md-12">
                <div class="box">
                    <h1>Contact Us</h1>
                </div>

                <div class="row">
                    <div class="box">
                        <div class="detailsMShop">
                            <h3>UIU friend loan and crowdsource</h3>
                            <p>Phone-Number : 01861028474</p><br>
                            <p>Email :  uiuln&cs@gmail.com</p><br>
                            <p>Facebook : https://www.facebook.com/groups/uiuflac</p><br>
                            <p>Address : Rods-10, H-40, madani avinue, badda-dhaka </p><br>
                            <p>Room-number : 202,203,204 </p><br>
                            <div class="mapDiv">
                                <iframe class="map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.2910409710703!2d90.44860675751083!3d23.79789192149767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c769370e205b%3A0xbc7cf60dd1670c6d!2sUIU%20Cafeteria!5e0!3m2!1sen!2sbd!4v1615562626599!5m2!1sen!2sbd"
                                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>


                    </div>
                </div>


            </div>



        </div>

    </div>


    <?php

    include("includes/footer.php");

    ?>


    <script src="js/jquery-331.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous"></script>


</body>

</html>