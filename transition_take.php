<?php
         session_start();
         $first_name = $_SESSION['first_name'];
         $last_name = $_SESSION['last_name'];
         $student_id = $_SESSION['student_id'];
         $email =  $_SESSION['email'];
         $father_name =  $_SESSION['father_name'];
         $mother_name = $_SESSION['mother_name'];
         $phon = $_SESSION['phon'];
         $department = $_SESSION['department'];
         $loan =  $_SESSION['loan'];
         $password =  $_SESSION['password'];
        

         if(!empty($student_id)){

        
        
?>

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
    <link rel="stylesheet" href="css/providLoan.css">
    <link rel="stylesheet" href="css/vw.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" />


<style>
    li.list-group-item.d-flex.justify-content-between.align-items-center.flex-wrap h6 img {
        width: 25px;
    }

    .card-body.lftSdDrd {
        width: 52.7%;
    }

    .card-body.lftSdDrd img {
        border-radius: 50%;
    }

    h3.details_Profile {
        text-align: center;
        font-size: 30px;
        font-weight: bold;
    }

    .payment {
    width: 932px;
    display: flex;
    position: relative;
    top: 80px;
 }

    .bkash {
        width: 300px;
        margin-right: 15px;
        position: relative;
        left: 15px;
    }

    img.nagd {
        height: 300px;
    }

    .bkash a {
        text-decoration: none;
    }

    .bkash.bk2 {
        position: relative;
       
    }

    .card-body.lftSdDrd {
    width: 81%;
 }

    p.patTile {
        text-align: center;
        font-size: 20px;
        padding: 10px;
        background: #c51b39;
        color: #fff;
    }

    p.patTile.ng {
        position: relative;
        background: #db0000;
    }

    p.patTile.r {
        background: #191932;
    }

    .bkash img {
        width: 300px;
    }

    .bkash.bk2 img {
    height: 299px;
 }

   
    .same-height-row {
        padding-top: 64px;
        height: 64vh;
    }

    @media (min-width: 768px) {
        .col-sm-12 {
            width: 53% !important;
        }
    }


    .card-body.rightSide {
        width: 81%;
        padding: 15px 25px 10px 25px;
    }

    .imp-links.msgr p {
        text-align: center;
        top: 10px;
        position: relative;
    }

    .imp-links.msgr {
        background: aliceblue;
        height: 350px;
        border: 2px solid #00000094;
        border-radius: 3px;
        position: relative;
        top: 0px;
        border-bottom: none;
    }

    .hd {
        background: red;
        color: #fff;
    }

    hr.hrrft {
        width: 335px;
        background: black !important;
        height: 3px;
        position: relative;
        top: 0px;
        border: none;
    }

    input#inptMsg {
        width: 339px;
        height: 35px;
        border: none;
        outline: none;
        padding-left: 10px;
        border-bottom: 2px solid #00000094;
        border-left: 2px solid #00000094;
        border-right: 2px solid #00000094;
        position: relative;
        top: -1px;
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

    p.st_loan {
        color: #1518c5;
        font-weight: bold;
    }

    p.u_name.take_usnm {
        color: #684602;
        font-size: 18px;
        font-weight: bold;
    }

    p.st_loan.take_ln {
        color: #240c0c;
    }



    span.btn.btn-danger.accept {
        float: right;
        background: #c1d3c1;
        color: #fff;
        transition: 0.4s;
    }

    span.btn.btn-danger.accept:hover {

        background: transparent;
        color: #746ec5;
        transition: 0.4s;
    }

    span.btn.btn-danger.accept a {
        color: #000;
    }

    span.btn.btn-danger.accept a:hover {
        text-decoration: none;
        color: #000;
        transition: 0.5s;

    }

    span.btn.btn-danger.details {
        background: #c1d3c1;
        transition: 0.4s;
    }

    span.btn.btn-danger.details a {
        color: #000;
    }

    span.btn.btn-danger.details a:hover {
        text-decoration: none;
        color: #000;
        transition: 0.5s;

    }


    span.btn.btn-danger.details:hover {

        background: transparent;
        color: #746ec5;
        transition: 0.4s;
    }

    .right-sidebar .imp-links a {
        font-size: 14px;
    }

    p.u_name {
        font-size: 18px;
        color: #301803fa;
        font-weight: bold;
    }

    .post-input-container p {
        color: #b93434;
        font-weight: 600;
        font-size: 13.5px;
    }

    hr.psthr {
        background: #00000030;
        height: 1px;
    }

    .post-input-container p {
        line-height: 13px;
    }

    hr.hrBr {
        padding: 0;
        margin: 0;
    }

    body {
        font-size: 14px;
        line-height: 1.42857143;
        color: #0a0a0a;
        overflow-x: hidden;
        background: #d5d3d3;
    }

    p.note {
        text-align: center;
        font-size: 12px;
    }

    .text h3 a {
        position: relative;
        top: -10px;
    }


    #navbar {
        border-radius: 0px !important;
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

                <a href="takeLoan.php" class="btn btn-success btn-sm">Welcome</a>
                <a> to UIU friend loan and crowdsource</a>
            </div>

            <div class="col-md-6">

                <ul class="menu">

                    <li><a><?php echo "$first_name" . " " ."$last_name"; ?></a></li>

                    <li>
                        <a href="cart.php">Contact</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>

                </ul>

            </div>

        </div>

    </div>

    <div id="navbar" class="navbar navbar-default">

        <div class="container">

            <div class="navbar-header">

                <a href="takeLoan.php" class="navbar-brand home">

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
                        <li>
                            <a href="takeLoan.php">Home</a>
                        </li>
                        <li class="active">
                            <a href="takeLoan.php"><?php echo "$loan"." " ."LOAN" ?></a>
                        </li>
                        <li>
                            <!-- <a href="account.php">My Account</a> -->

                        </li>
                        <li>
                            <a href="cart.php">Donation</a>
                        </li>
                        <li>
                            <a href="readMore1.php">About service</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>

                        <li class="li-dropout li">
                            <a class="nav-link dropdown-toggle">
                                More
                            </a>
                            <ul class="dropdown-menu ulIn">
                                <li class="li-dropin liIn"><a href="#">Book</a></li>
                                <hr class="hrBr">
                                <li class="li-dropin liIn"><a href="#">Book sell</a></li>
                                <hr class="hrBr">
                                <!-- <li><hr class="dropdown-divider"></li> -->
                                <li class="li-dropin liIn"><a href="#">Tuition</a></li>
                            </ul>
                        </li>



                    </ul>

                </div>




            </div>

        </div>

    </div>

    <div class="hr"></div>

    <!--  middle design start -->
    <div class="container1">
        <!-- left-side start -->
            <div class="left-sidebar">
               <div class="imp-links">
                 <a href="myProfile2.php"><img src="socialmage/man.png" alt=""><?php echo "$first_name" . " " . "$last_name" ?></a>
                            <a href="applyLoan.php"><img src="socialmage/post.png" alt="">Apply for loan</a>
                            <a href="takeDashboard.php"><img src="socialmage/dsbrd.png" alt="">Dashboard</a>
                         <a href="takeBalance.php"><img src="socialmage/money.png" alt="">Balance</a> 
            </div>
            <hr class="hrLft">
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/LlbljkO9iy8?autoplay=1&mute=1"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>

        </div>
        <!-- left-side end -->


        <!-- middle-side start -->
        <?php 
 
                $conn = new mysqli('localhost','root','','uiustudentservice');
                if(!$conn){
                    echo 'not connect';
                }
                
                if ($_GET['prov_student_id']) {
                $pro_student_id = $_GET['prov_student_id'];

                
                $sql = "SELECT * FROM registration WHERE student_id = $pro_student_id ";
                $result = $conn->query($sql);


                while ( $data = $result->fetch_assoc()) {
                    
                    $take_student_id = $data['student_id'];
                    $take_pro_first_name = $data['first_name'];
                    $take_pro_last_name = $data['last_name'];
                    $take_pro_email = $data['email'];
                    $take_pro_phon = $data['phon'];
                    $take_pro_department = $data['department'];
                    $take_pro_loan  = $data['loan'];
                    $take_trimester  = $data['trimester'];
                    $take_facebook  = $data['facebook'];
                    $take_linkdin  = $data['linkdin'];
                    $take_gender  = $data['gender'];



                if ($take_gender == 'male') {

                

                    echo "
                    
                    
                    
                    
                    <div class='mid'>
                    <h3 class='details_Profile'>Dashboard</h3>
                    <div class='container'>
                       
                        <div class='main-body'>
                            <div class='row'>
                                <div class='col-lg-12'>
                                    <div class='card'>
                                        <div class='card-body lftSdDrd'>
                                            <div class='d-flex flex-column align-items-center text-center'>

                                                <img src='socialmage/boy.png'
                                                    class='rounded-circle p-1 bg-primary' width='110'>
                                                <div class='mt-3'>
                                                    <h4>$take_pro_first_name $take_pro_last_name </h4>

                                                </div>
                                            </div>
                                            <hr class='my-4'>
                                            <ul class='list-group list-group-flush'>

                                                <li
                                                    class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                                                    <h6 class='mb-0'> <img class='icnImg' src='socialmage/facebook.png' > Facebook</h6>
                                                    <span class='text-secondary'>$take_facebook</span>
                                                </li>
                                                <li
                                                    class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                                                    <h6 class='mb-0'><img class='icnImg' src='socialmage/link.png'>Linkedin</h6>
                                                    <span class='text-secondary'>$take_linkdin</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-lg-12'>
                                    <div class='card'>
                                        <div class='card-body rightSide'>
                                            <div class='row mb-3 allInput'>
                                                <div class='col-sm-3'>
                                                    <h6 class='mb-0'>Full Name</h6>
                                                </div>
                                                <div class='col-sm-9 text-secondary'>
                                                    <input type='text' class='form-control'
                                                        value='$take_pro_first_name $take_pro_last_name'
                                                        readonly>
                                                </div>
                                            </div>

                                            <div class='row mb-3 allInput'>
                                                <div class='col-sm-3'>
                                                    <h6 class='mb-0'>Student id</h6>
                                                </div>
                                                <div class='col-sm-9 text-secondary'>
                                                    <input type='text' class='form-control'
                                                        value='$take_student_id' readonly>
                                                </div>
                                            </div>

                                            <div class='row mb-3 allInput'>
                                                <div class='col-sm-3'>
                                                    <h6 class='mb-0'>Email</h6>
                                                </div>
                                                <div class='col-sm-9 text-secondary'>
                                                    <input type='text' class='form-control'
                                                        value='$take_pro_email' readonly>
                                                </div>
                                            </div>


                                            <div class='row mb-3 allInput'>
                                                <div class='col-sm-3'>
                                                    <h6 class='mb-0'>Phone</h6>
                                                </div>
                                                <div class='col-sm-9 text-secondary'>
                                                    <input type='text' class='form-control'
                                                        value='$take_pro_phon' readonly>
                                                </div>
                                            </div>

                                            <div class='row mb-3 allInput'>
                                                <div class='col-sm-3'>
                                                    <h6 class='mb-0'>Depertment</h6>
                                                </div>
                                                <div class='col-sm-9 text-secondary'>
                                                    <input type='text' class='form-control'
                                                        value='$take_pro_department' readonly>
                                                </div>
                                            </div>

                                            <div class='row mb-3 allInput'>
                                                <div class='col-sm-3'>
                                                    <h6 class='mb-0'>Loan status</h6>
                                                </div>
                                                <div class='col-sm-9 text-secondary'>
                                                    <input type='text' class='form-control'
                                                        value='$take_pro_loan loan' readonly>
                                                </div>
                                            </div>

                                            <div class='row mb-3 allInput'>
                                                <div class='col-sm-3'>
                                                    <h6 class='mb-0'>Gender</h6>
                                                </div>
                                                <div class='col-sm-9 text-secondary'>
                                                    <input type='text' class='form-control' value='$take_gender'
                                                        readonly>
                                                </div>
                                            </div>

                                            <div class='row mb-3 allInput'>
                                                <div class='col-sm-3'>
                                                    <h6 class='mb-0'>Current trimester</h6>
                                                </div>
                                                <div class='col-sm-9 text-secondary'>
                                                    <input type='text' class='form-control'
                                                        value='$take_trimester' readonly>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class='payment'>
                                            
                                           
                                <div class='bkash'>
                                    <a href='paymentTake.php?bkash&provide_student_id=$pro_student_id'>
                                    <img class='nagd' src='socialmage/bk.gif'
                                    </a>
                                    <p class='patTile'>Bkash</p>
                                </div>

                                <div class='bkash'>
                                    <a href='paymentTake.php?nagad&provide_student_id=$pro_student_id'>
                                        <img class='nagd' src='socialmage/n.jpg'
                                    </a>
                                    <p class='patTile ng'>Nagad</p>
                                </div>
                                <div class='bkash bk2'>
                                    <a href='paymentTake.php?rocket&provide_student_id=$pro_student_id'>                                      
                                    <img src='socialmage/rk.gif'
                                    </a>
                                    <p class='patTile r'>Rocket</p>
                                </div>
                    
                            </div>

                           



                            </div>
                        </div>
                    </div>

                </div>
                    
              
                    ";



                }else {
                
                    echo "
                            
                            <div class='mid'>
                            <h3 class='details_Profile'>Dashboard</h3>
                                <div class='container'>
                                 
                                    <div class='main-body'>
                                        <div class='row'>
                                            <div class='col-lg-12'>
                                                <div class='card'>
                                                    <div class='card-body lftSdDrd'>
                                                        <div class='d-flex flex-column align-items-center text-center'>

                                                            <img src='socialmage/girl.png'
                                                                class='rounded-circle p-1 bg-primary' width='110'>
                                                            <div class='mt-3'>
                                                                <h4>$take_pro_first_name $take_pro_last_name </h4>

                                                            </div>
                                                        </div>
                                                        <hr class='my-4'>
                                                        <ul class='list-group list-group-flush'>

                                                            <li
                                                                class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                                                                <h6 class='mb-0'> <img src='socialmage/facebook.png' > Facebook</h6>
                                                                <span class='text-secondary'>$take_facebook</span>
                                                            </li>
                                                            <li
                                                                class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                                                                <h6 class='mb-0'><img src='socialmage/link.png'>Linkedin</h6>
                                                                <span class='text-secondary'>$take_linkdin</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='col-lg-12'>
                                                <div class='card'>
                                                    <div class='card-body rightSide'>
                                                        <div class='row mb-3 allInput'>
                                                            <div class='col-sm-3'>
                                                                <h6 class='mb-0'>Full Name</h6>
                                                            </div>
                                                            <div class='col-sm-9 text-secondary'>
                                                                <input type='text' class='form-control'
                                                                    value='$take_pro_first_name $take_pro_last_name'
                                                                    readonly>
                                                            </div>
                                                        </div>

                                                        <div class='row mb-3 allInput'>
                                                            <div class='col-sm-3'>
                                                                <h6 class='mb-0'>Student id</h6>
                                                            </div>
                                                            <div class='col-sm-9 text-secondary'>
                                                                <input type='text' class='form-control'
                                                                    value='$take_student_id' readonly>
                                                            </div>
                                                        </div>

                                                        <div class='row mb-3 allInput'>
                                                            <div class='col-sm-3'>
                                                                <h6 class='mb-0'>Email</h6>
                                                            </div>
                                                            <div class='col-sm-9 text-secondary'>
                                                                <input type='text' class='form-control'
                                                                    value='$take_pro_email' readonly>
                                                            </div>
                                                        </div>


                                                        <div class='row mb-3 allInput'>
                                                            <div class='col-sm-3'>
                                                                <h6 class='mb-0'>Phone</h6>
                                                            </div>
                                                            <div class='col-sm-9 text-secondary'>
                                                                <input type='text' class='form-control'
                                                                    value='$take_pro_phon' readonly>
                                                            </div>
                                                        </div>

                                                        <div class='row mb-3 allInput'>
                                                            <div class='col-sm-3'>
                                                                <h6 class='mb-0'>Depertment</h6>
                                                            </div>
                                                            <div class='col-sm-9 text-secondary'>
                                                                <input type='text' class='form-control'
                                                                    value='$take_pro_department' readonly>
                                                            </div>
                                                        </div>

                                                        <div class='row mb-3 allInput'>
                                                            <div class='col-sm-3'>
                                                                <h6 class='mb-0'>Loan status</h6>
                                                            </div>
                                                            <div class='col-sm-9 text-secondary'>
                                                                <input type='text' class='form-control'
                                                                    value='$take_pro_loan loan' readonly>
                                                            </div>
                                                        </div>

                                                        <div class='row mb-3 allInput'>
                                                            <div class='col-sm-3'>
                                                                <h6 class='mb-0'>Gender</h6>
                                                            </div>
                                                            <div class='col-sm-9 text-secondary'>
                                                                <input type='text' class='form-control' value='$take_gender'
                                                                    readonly>
                                                            </div>
                                                        </div>

                                                        <div class='row mb-3 allInput'>
                                                            <div class='col-sm-3'>
                                                                <h6 class='mb-0'>Current trimester</h6>
                                                            </div>
                                                            <div class='col-sm-9 text-secondary'>
                                                                <input type='text' class='form-control'
                                                                    value='$take_trimester' readonly>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>



                                     
                                            
                                            <div class='payment'>
                                            
                                           
                                                <div class='bkash'>
                                                <a href='paymentTake.php?bkash&provide_student_id=$pro_student_id'>
                                                    <img class='nagd' src='socialmage/bk.gif'
                                                    </a>
                                                    <p class='patTile'>Bkash</p>
                                                </div>

                                                <div class='bkash'>
                                                <a href='paymentTake.php?nagad&provide_student_id=$pro_student_id'>
                                                    <img class='nagd' src='socialmage/n.jpg'
                                                    </a>
                                                    <p class='patTile ng'>Nagad</p>
                                                </div>

                                                <div class='bkash bk2'>
                                                    <a href='paymentTake.php?rocket&provide_student_id=$pro_student_id'>
                                                
                                                    <img src='socialmage/rk.gif'
                                                    </a>
                                                    <p class='patTile r'>Rocket</p>
                                                </div>

                                            </div>

                                          



                                            
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>

                    ";


                }



                }


                }
        ?>

        <!-- middle-side end -->


    </div>

    </div>


    <script src="js/jquery-331.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous"></script>






</body>

</html>

<?php 

     }else{
         header("location:index.php");
     }

?>