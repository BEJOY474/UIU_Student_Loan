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
    <link rel="stylesheet" href="css/myProfile.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
        integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

    <style>
          p.myPost {
            text-align: center;
            font-size: 27px;
            font-family: cursive;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 15px;
            text-shadow: 2px 2px 3px black;
        }

        .write-post-container {
            width: 70%;
            background: #ffe6e6;
            border-radius: 7px;
            padding: 20px;
            color: #626262;
            margin-bottom: 10px;
            margin-left: 17px;
        }

        .post-input-container {
            padding-left: 55px;
            padding-top: 20px;
            text-align: justify;
        }

        p.u_name {
            text-align: justify;
            margin-bottom: 2px;
            font-size: 18px;
            font-weight: bold;
       }

        .left-sidebar {
            flex-basis: 26.5%;
            position: sticky;
            top: 70px;
            align-self: flex-start;
            /* margin-left: 14px; */
            margin-right: 14px;
            margin-top: 0px;
            background: #c1d7d7;
            padding: 0px 20px 0px 25px;
            height: 514px;
        }



        input.form-control {
            font-size: 15px;
            font-weight: 600;
            color: #000000a1;
            width: 400px;
            background: transparent;
            border: 1px solid #a5a5bd;

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
            color: #0a0a0a;
            overflow-x: hidden;
            background: #d5d3d3;
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

                <a href="provideLoan.php" class="btn btn-success btn-sm">Welcome</a>
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

                <a href="provideLoan.php" class="navbar-brand home">

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
                            <a href="provideLoan.php">Home</a>
                        </li>
                        <li class="active">
                            <a href="provideLoan.php"><?php echo "$loan"." " ."LOAN" ?></a>
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
                                Dropdown
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
                <a href="myProfile.php"><img src="socialmage/man.png"
                        alt=""><?php echo "$first_name" . " " . "$last_name" ?></a>
                <a href="post.php"><img src="socialmage/post.png" alt="">Post</a>
                <a href="dashboard.php"><img src="socialmage/dsbrd.png" alt="">Dashboard</a>
                <a href="provideBalance.php"><img src="socialmage/money.png" alt="">Balance</a>
        
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
        <div class="mid">
            <div>
                <div class="row">
                    <div class="col-12">

                        <div class="my-5">
                            <h3>My Profile</h3>

                            <hr>
                        </div>


                        <?php

                                $conn = new mysqli('localhost','root','','uiustudentservice');
                                if(!$conn){
                                    echo 'not connect';
                                }


                                $sql = "SELECT * FROM registration WHERE student_id = $student_id ";
                                $result = $conn->query($sql);


                                while ( $data = $result->fetch_assoc()) {
                                    
                                    $student_id = $data['student_id'];
                                    $pro_first_name = $data['first_name'];
                                    $pro_last_name = $data['last_name'];
                                    $pro_email = $data['email'];
                                    $pro_father_name = $data['father_name'];
                                    $pro_mother_name = $data['mother_name'];
                                    $pro_phon = $data['phon'];
                                    $pro_department = $data['department'];
                                    $pro_loan  = $data['loan'];
                                    $trimester  = $data['trimester'];
                                    $facebook  = $data['facebook'];
                                    $linkdin  = $data['linkdin'];
                                    $gender  = $data['gender'];
                                    
                                }


                        ?>


                        <form class="file-upload" action="myProfile.php" method="POST">
                            <div class="row mb-5 gx-5">

                                <div class="col-xxl-8 mb-5 mb-xxl-0">
                                    <div class="bg-secondary-soft px-4 py-5 rounded">
                                        <div class="row g-3">
                                           


                                            <div class="col-md-6 inputdiv">
                                                <label class="form-label">First Name </label>
                                                <input type="text" class="form-control" name="first_name"
                                                    value="<?php echo "$pro_first_name" ?>" aria-label="First name">
                                            </div>

                                            <div class="col-md-6 inputdiv">

                                                <label class="form-label">Last Name </label>
                                                <input type="text" class="form-control" placeholder name="last_name"
                                                    value="<?php echo "$pro_last_name" ?>">
                                            </div>

                                            <div class="col-md-6 inputdiv">
                                                <label class="form-label">student id </label>
                                                <input type="text" readonly class="form-control" placeholder name="student_id"
                                                    value="<?php echo "$student_id" ?>">
                                            </div>

                                            <div class="col-md-6 inputdiv">
                                                <label class="form-label">Phone number </label>
                                                <input type="text" class="form-control" placeholder name="phon"
                                                    aria-label="Phone number" value="<?php echo "$pro_phon" ?>">
                                            </div>

                                            <div class="col-md-6 inputdiv">
                                                <label for="inputEmail4" class="form-label">Email </label>
                                                <input type="email" class="form-control" id="inputEmail4" name="email"
                                                    value="<?php echo "$pro_email" ?>">
                                            </div>

                                            <div class="col-md-6 inputdiv">
                                                <label class="form-label">Father name</label>
                                                <input type="text" class="form-control" placeholder name="father_name"
                                                    value="<?php echo "$pro_father_name" ?>">
                                            </div>

                                            <div class="col-md-6 inputdiv">
                                                <label class="form-label">Mother name</label>
                                                <input type="text" class="form-control" placeholder name="mother_name"
                                                    value="<?php echo "$pro_mother_name" ?>">
                                            </div>

                                            <div class="col-md-6 inputdiv">
                                                <label class="form-label">Department name</label>
                                                <input type="text" class="form-control" placeholder name="department"
                                                    value="<?php echo "$pro_department" ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="row mb-5 gx-5">
                                <div class="col-xxl-6 mb-5 mb-xxl-0">
                                    <div class="bg-secondary-soft px-4 py-5 rounded">
                                        <div class="row g-3">
                                            <h4 class="mb-4 mt-0">Social media detail</h4>

                                            <div class="col-md-6  inputdiv">
                                                <label class="form-label"><i
                                                        class="fab fa-fw fa-facebook me-2 text-facebook"></i>Facebook
                                                </label>
                                                <input type="text" class="form-control" name="facebook" placeholder
                                                    aria-label="Facebook" value="<?php echo "$facebook" ?>">
                                            </div>

                                            <div class="col-md-6 inputdiv">
                                                <label class="form-label"><i
                                                        class="fab fa-fw fa-twitter text-twitter me-2"></i>Linkedin
                                                </label>
                                                <input type="text" class="form-control" name="linkdin" placeholder
                                                    aria-label="Linkedin" value="<?php echo "$linkdin" ?>">
                                            </div>

                                            <div class="col-md-6 inputdiv">
                                                <label class="form-label">Current Trimester
                                                </label>
                                                <input type="text" class="form-control" name="trimester" placeholder
                                                    aria-label="Trimester" value="<?php echo "$trimester" ?>">
                                            </div>

                                            <div class="col-md-6 inputdiv">
                                                <br><br> <label class="form-label">Gender :
                                                    <?php echo "$gender" ?></label>
                                            </div>

                                            <div class="col-md-6 inputdiv">
                                                <br> <label class="form-label">Loan status : <?php echo "$pro_loan" ?>
                                                    loan</label>
                                            </div>





                                        </div>
                                    </div>
                                </div>

                                <div class="gap-3 d-md-flex justify-content-md-end text-center">

                                    <button class="btn updateBtn btn-primary btn-lg" name="edit"> Update profile
                                    </button>

                                </div>


                            </div>


                        </form>

                        <p class="myPost">My All Post</p>

            <center>

            <?php

                $conn = new mysqli('localhost','root','','uiustudentservice');
                if(!$conn){
                    echo 'not connect';
                }


                $sql = "SELECT * FROM allpost WHERE student_id = '$student_id'";
                $result = $conn->query($sql);


                while ( $data = $result->fetch_assoc()) {
                    
                    $student_id = $data['student_id'];
                    $pro_amount = $data['pro_amount'];
                    $interest = $data['interest'];
                    $pro_installment = $data['pro_installment'];
                    $pro_duration = $data['pro_duration'];
                    $fine_amount = $data['fine_amount'];
                    $msg = $data['msg'];
                    $user_id  = $data['user_id'];
                    $time = $data['time'];

                    $pro_first_name = $data['first_name'];
                    $pro_last_name = $data['last_name'];
                    $pro_email = $data['email'];
                    $pro_father_name = $data['father_name'];
                    $pro_mother_name = $data['mother_name'];
                    $pro_phon = $data['phon'];
                    $pro_department = $data['department'];
                    $pro_loan  = $data['loan'];
                    $gender = $data['gender'];
                    $count = 1;

                if ($gender == 'male') {

                    if ($pro_loan ==   'provide') {
                        echo "

                                        <div class='write-post-container'>
                                            <div class='user-profile'>
                                                <img src='socialmage/boy.png' >
                                                <div>
                                                    <p class='u_name'>$pro_first_name $pro_last_name</p>
                                                    <small>Public -- $time</i></small> <br>
                                                        <p class='st_loan'>Loan status :  $pro_loan loan</p>
                                                </div>
                                            </div>
                                            <div class='post-input-container'>
                                                <p>Amount             :     $pro_amount BDT</p> 
                                                <p>Interest           :     $interest%</p> 
                                                <p>Total installment  :     $pro_installment </p> 
                                                <p>Total Duration     :     $pro_duration </p> 
                                            </div>
                                
                                            <hr class='psthr'>
                                            <p class='note'>N.B. Late payment of for each installment $fine_amount BDT will fine.</p>
                                            
                                        </div> 
                            
                            
                        " ;

                    }else {
                        echo "

                                <div class='write-post-container'>
                                    <div class='user-profile'>
                                        <img src='socialmage/boy.png' >
                                        <div>
                                            <p class='u_name take_usnm'>$pro_first_name $pro_last_name</p>
                                            <small>Public -- $time</i></small> <br>
                                                <p class='st_loan take_ln'>Loan status :  $pro_loan loan</p>
                                        </div>
                                    </div>

                                    <div class='post-input-container'>
                                        <p>Amount             :     $pro_amount BDT</p> 
                                        <p>Total Duration     :     $pro_duration</p> 
                                        <p>Reason             :     $msg</p> 
                                        <p>Phone              :     $pro_phon</p> 

                                    </div>
                                    <hr class='psthr'>
                                    <span class='btn btn-danger details'><a href='view2.php?student_id=$student_id' >Details</a></span>
                                    <span class='btn btn-danger accept'><a href='provideLoanDashboard.php?take_student_id=$student_id' >Accept</a></span>
                                
                                                
                                </div> 


                        " ;
                    }



                }else {
                if ($pro_loan ==   'provide') {
                    echo "

                                    <div class='write-post-container'>
                                    <div class='user-profile'>
                                        <img src='socialmage/girl.png' >
                                        <div>
                                            <p class='u_name'>$pro_first_name $pro_last_name</p>
                                            <small>Public -- $time</i></small> <br>
                                                <p class='st_loan'>Loan status :  $pro_loan loan</p>
                                        </div>
                                    </div>
                                    <div class='post-input-container'>
                                        <p>Amount             :     $pro_amount BDT</p> 
                                        <p>Interest           :     $interest%</p> 
                                        <p>Total installment  :     $pro_installment </p> 
                                        <p>Total Duration     :     $pro_duration</p> 
                                    </div>
                                
                                    <hr class='psthr'>
                                    <p class='note'>N.B. Late payment of for each installment $fine_amount BDT will fine.</p>
                                    
                                </div> 
                        
                        
                    " ;

                }else {
                    echo "

                            <div class='write-post-container'>
                                <div class='user-profile'>
                                    <img src='socialmage/girl.png' >
                                    <div>
                                        <p class='u_name take_usnm'>$pro_first_name $pro_last_name</p>
                                        <small>Public -- $time</i></small> <br>
                                            <p class='st_loan take_ln'>Loan status :  $pro_loan loan</p>
                                    </div>
                                </div>

                                <div class='post-input-container'>
                                    <p>Amount             :     $pro_amount BDT</p> 
                                    <p>Total Duration     :     $pro_duration</p> 
                                    <p>Reason             :     $msg</p> 
                                    <p>Phone              :     $pro_phon</p> 

                                </div>
                                <hr class='psthr'>
                                <span class='btn btn-danger details'><a href='view2.php?student_id=$student_id' >Details</a></span>
                                <span class='btn btn-danger accept'><a href='provideLoanDashboard.php?take_student_id=$student_id' >Accept</a></span>
                                
                            
                                            
                            </div> 


                    " ;
                }

             }



                
                
                
                
                }


            ?>

            </center>

                    </div>
                </div>
            </div>
        </div>

        <?php
          $conn = new mysqli('localhost','root','','uiustudentservice');

                    if(!$conn){
                        echo 'not connect';
                    }

                   
           
                    if ( isset($_POST['edit'])) {

                        $first_name = $_POST['first_name'];
                        $last_name = $_POST['last_name'];
                        $student_id  = $_POST['student_id'];
                        $email = $_POST['email'];
                        $father_name = $_POST['father_name'];
                        $mother_name = $_POST['mother_name'];
                        $phon = $_POST['phon'];
                        $department = $_POST['department'];
                        $facebook  = $_POST['facebook'];
                        $linkdin = $_POST['linkdin'];
                        $trimester = $_POST['trimester'];


                                $sql1 =   "UPDATE registration 
                                SET first_name='$first_name',	last_name='$last_name',student_id='$student_id',
                                email='$email',	father_name='$father_name',	mother_name='$mother_name',

                                phon='$phon',	department='$department',facebook='$facebook',
                                linkdin='$linkdin',trimester='$trimester'

                                WHERE student_id='$student_id' ";
                
                                    if(mysqli_query($conn, $sql1)==TRUE){
                                        echo "<script>window.location.href='provideLoan.php';</script>";
                                    }else {
                                        echo 'Data Not Update';
                                    }

                            
                  
                    }

        ?>

        <!-- middle-side end -->


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