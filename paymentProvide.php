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
         $gender = $_SESSION['gender'];

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
    <link rel="stylesheet" href="css/post.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" />


    <style>
    .ul .li .ulIn .liIn {
        display: block;
    }

    .paymentHead p {
        text-align: center;
        background: red;
        position: relative;
        top: ;
        padding-bottom: 15px;
        padding-top: 15px;
        color: #fff;
        font-size: 22px;
        font-family: sans-serif;
        font-weight: bold;
    }

    button.btn-block.btn-primary.text-center {
    position: relative;
    left: 130px;
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

    p.u_name {
        font-size: 18px;
        color: #c5ab21;
    }

    p.note {
        text-align: center;
        font-size: 12px;
    }

    hr.psthr {
        background: #00000030;
        height: 1px;
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

    .write-post-container {
        width: 96%;
        background: #ffe6e6;
        border-radius: 7px;
        padding: 20px;
        color: #626262;
        margin-bottom: 10px;
        margin-left: 17px;
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

    p.myPost {
        text-align: center;
        font-size: 27px;
        font-family: cursive;
        font-weight: bold;
        margin-top: 20px;
        margin-bottom: 15px;
        text-shadow: 2px 2px 3px black;
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

            <div class="main-content">



            <?php 
        
                    $conn = new mysqli('localhost','root','','uiustudentservice');
                    if(!$conn){
                        echo 'not connect';
                    }

                    if (isset($_GET['bkash'])) {
                        if ($_GET['take_student_id']) {
                            $take_student_id = $_GET['take_student_id'];
    
                            $sql = "SELECT* FROM registration WHERE student_id = '$take_student_id'  " ;        
    
                            $query = $conn->query($sql);
                      
                            if ($query->num_rows> 0) {
                                $data = mysqli_fetch_assoc($query);
                            
                                $phon = $data['phon'];
                        
                            }
                               

                            echo "
                            
                                       

                                            <div class='paymentHead'>
                                            <p>Bkash Payment</p>
                                        </div>

                                        <div class='container-fluid px-1 py-5 mx-auto'>
                                            <div class='row d-flex justify-content-center'>
                                                <div class='col-xl-7 col-lg-8 col-md-9 col-11 text-center'>

                                                
                                                    <div class='card'>

                                                        <form class='form-car' action='paymentProvide.php' method='POST'>
                                                            <div class='row justify-content-between text-left'>
                                                                <div class='form-group col-sm-6 flex-column d-flex'> <label
                                                                        class='form-control-label px-3'>Amount<span class='text-danger'>
                                                                            *</span></label>
                                                                    <input type='text' name='pro_amount' required placeholder='Enter your amount'>
                                                                </div>

                                                                <div class='form-group col-sm-6 flex-column d-flex'> <label
                                                                        class='form-control-label px-3'>Student Id who will take loan<span
                                                                            class='text-danger'>
                                                                            *</span></label>
                                                                    <input type='text' name='take_st_id' value='$take_student_id' placeholder''>
                                                                </div>
                                                            </div>
                                                            <div class='row justify-content-between text-left'>
                                                                <div class='form-group col-sm-6 flex-column d-flex'> <label
                                                                        class='form-control-label px-3'>Destination bkash number<span
                                                                            class='text-danger'> *</span></label>
                                                                    <input type='text' name='dst_num' value='$phon' placeholder='Installment'>
                                                                </div>
                                                            
                                                            
                                                            </div>

                                                            <div class='row justify-content-between text-left'>
                                                                <div class='form-group col-sm-6 flex-column d-flex'> <label
                                                                        class='form-control-label px-3'>Your bkash number<span
                                                                            class='text-danger'> *</span></label>
                                                                    <input type='text' name='transi_num' required placeholder='Bkash number'>
                                                                </div>
                                                                <div class='form-group col-sm-6 flex-column d-flex'> <label
                                                                        class='form-control-label px-3'>Password<span class='text-danger'>
                                                                            *</span></label>
                                                                    <input type='password' id='mob' required name='pass' placeholder='Password'>
                                                                </div>
                                                            
                                                            </div>


                                                            <div class='row justify-content-end'>
                                                                <div class='form-group col-sm-6'>

                                                                    <button type='submit' name='post'
                                                                        class='btn-block btn-primary text-center'>Send Money</button>

                                                                </div>
                                                            </div>



                                                        </form>





                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            
                            
                    
                            
                            ";


                    
                        }
                    }
                    
                    if (isset($_GET['nagad'])) {
                        if ($_GET['take_student_id']) {
                            $take_student_id = $_GET['take_student_id'];
    
                            $sql = "SELECT* FROM registration WHERE student_id = '$take_student_id'  " ;        
    
                            $query = $conn->query($sql);
                      
                            if ($query->num_rows> 0) {
                                $data = mysqli_fetch_assoc($query);
                            
                                $phon = $data['phon'];
                        
                            }
                               

                            echo "
                            
                                       

                                            <div class='paymentHead'>
                                            <p>Nagad Payment</p>
                                        </div>

                                        <div class='container-fluid px-1 py-5 mx-auto'>
                                            <div class='row d-flex justify-content-center'>
                                                <div class='col-xl-7 col-lg-8 col-md-9 col-11 text-center'>

                                                
                                                    <div class='card'>

                                                        <form class='form-car' action='paymentProvide.php' method='POST'>
                                                            <div class='row justify-content-between text-left'>
                                                                <div class='form-group col-sm-6 flex-column d-flex'> <label
                                                                        class='form-control-label px-3'>Amount<span class='text-danger'>
                                                                            *</span></label>
                                                                    <input type='text' name='pro_amount' required placeholder='Enter your amount'>
                                                                </div>

                                                                <div class='form-group col-sm-6 flex-column d-flex'> <label
                                                                        class='form-control-label px-3'>Student Id who will take loan<span
                                                                            class='text-danger'>
                                                                            *</span></label>
                                                                    <input type='text' name='take_st_id' value='$take_student_id' placeholder''>
                                                                </div>
                                                            </div>
                                                            <div class='row justify-content-between text-left'>
                                                                <div class='form-group col-sm-6 flex-column d-flex'> <label
                                                                        class='form-control-label px-3'>Destination nagad number<span
                                                                            class='text-danger'> *</span></label>
                                                                    <input type='text' name='dst_num' value='$phon' placeholder='Installment'>
                                                                </div>
                                                            
                                                            
                                                            </div>

                                                            <div class='row justify-content-between text-left'>
                                                                <div class='form-group col-sm-6 flex-column d-flex'> <label
                                                                        class='form-control-label px-3'>Your nagad number<span
                                                                            class='text-danger'> *</span></label>
                                                                    <input type='text' name='transi_num' required placeholder='Nagad number'>
                                                                </div>
                                                                <div class='form-group col-sm-6 flex-column d-flex'> <label
                                                                        class='form-control-label px-3'>Password<span class='text-danger'>
                                                                            *</span></label>
                                                                    <input type='password' id='mob' name='pass' required placeholder='Password'>
                                                                </div>
                                                            
                                                            </div>


                                                            <div class='row justify-content-end'>
                                                                <div class='form-group col-sm-6'>

                                                                    <button type='submit' name='post'
                                                                        class='btn-block btn-primary text-center'>Send Money</button>

                                                                </div>
                                                            </div>



                                                        </form>





                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            
                            
                    
                            
                            ";


                    
                        }
                    }

                    if (isset($_GET['rocket'])) {
                        if ($_GET['take_student_id']) {
                            $take_student_id = $_GET['take_student_id'];
    
                            $sql = "SELECT* FROM registration WHERE student_id = '$take_student_id'  " ;        
    
                            $query = $conn->query($sql);
                      
                            if ($query->num_rows> 0) {
                                $data = mysqli_fetch_assoc($query);
                            
                                $phon = $data['phon'];
                        
                            }
                               

                            echo "
                            
                                       

                                            <div class='paymentHead'>
                                            <p>Rocket Payment</p>
                                        </div>

                                        <div class='container-fluid px-1 py-5 mx-auto'>
                                            <div class='row d-flex justify-content-center'>
                                                <div class='col-xl-7 col-lg-8 col-md-9 col-11 text-center'>

                                                
                                                    <div class='card'>

                                                        <form class='form-car' action='paymentProvide.php' method='POST'>
                                                            <div class='row justify-content-between text-left'>
                                                                <div class='form-group col-sm-6 flex-column d-flex'> <label
                                                                        class='form-control-label px-3'>Amount<span class='text-danger'>
                                                                            *</span></label>
                                                                    <input type='text' name='pro_amount' required placeholder='Enter your amount'>
                                                                </div>

                                                                <div class='form-group col-sm-6 flex-column d-flex'> <label
                                                                        class='form-control-label px-3'>Student Id who will take loan<span
                                                                            class='text-danger'>
                                                                            *</span></label>
                                                                    <input type='text' name='take_st_id' value='$take_student_id' placeholder''>
                                                                </div>
                                                            </div>
                                                            <div class='row justify-content-between text-left'>
                                                                <div class='form-group col-sm-6 flex-column d-flex'> <label
                                                                        class='form-control-label px-3'>Destination rocket number<span
                                                                            class='text-danger'> *</span></label>
                                                                    <input type='text' name='dst_num' value='$phon' placeholder='Installment'>
                                                                </div>
                                                            
                                                            
                                                            </div>

                                                            <div class='row justify-content-between text-left'>
                                                                <div class='form-group col-sm-6 flex-column d-flex'> <label
                                                                        class='form-control-label px-3'>Your rocket number<span
                                                                            class='text-danger'> *</span></label>
                                                                    <input type='text' name='transi_num' required placeholder='Rocket number'>
                                                                </div>
                                                                <div class='form-group col-sm-6 flex-column d-flex'> <label
                                                                        class='form-control-label px-3'>Password<span class='text-danger'>
                                                                            *</span></label>
                                                                    <input type='password' id='mob' name='pass' required placeholder='Password'>
                                                                </div>
                                                            
                                                            </div>


                                                            <div class='row justify-content-end'>
                                                                <div class='form-group col-sm-6'>

                                                                    <button type='submit' name='post'
                                                                        class='btn-block btn-primary text-center'>Send Money</button>

                                                                </div>
                                                            </div>



                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                     
                            
                            ";


                    
                        }
                    }
    
            ?>

            </div>
          
        </div>


        <?php 

                    $conn = new mysqli('localhost','root','','uiustudentservice');
                    if(!$conn){
                    echo 'not connect';
                    }

                    if ( isset($_POST['post'])) {
                        $pro_amount = $_POST['pro_amount'];
                        $take_st_id = $_POST['take_st_id'];
                        $dst_num  = $_POST['dst_num'];
                        $transi_num = $_POST['transi_num'];
                        $pass = $_POST['pass'];

                        $sql = "SELECT* FROM allpost WHERE student_id = '$student_id' " ;     
                      
                      
                        $query = $conn->query($sql);      
                  
                        if ($query->num_rows> 0) {
                            $data = mysqli_fetch_assoc($query);
                        
                            $pro_installment = $data['pro_installment'];
                    
                        }

                        $sqlA = "SELECT * FROM takeloanbalance WHERE take_user_id = '$student_id' ";
                        $result = $conn->query($sqlA);
    
                        while ( $data = $result->fetch_assoc()) {
                            
                            $balance1 = $data['balance'];
                            $due_balance = $data['due_balance']; 
                          //  $installment = $data['due_instlmnt'];
                        
    
                        }

                        $totalBalance1 = $balance1 - $pro_amount;
                        $sql2 =   "UPDATE takeloanbalance 
                        SET balance='$totalBalance1',due_balance='$totalBalance1',
                        due_instlmnt='$pro_installment' WHERE take_user_id='$student_id' ";
                        $result = $conn->query($sql2);




                        $sqlB = "SELECT * FROM takeloanbalance WHERE take_user_id = '$take_st_id' ";
                        $result_2 = $conn->query($sqlB);
    
                        while ( $data = $result_2->fetch_assoc()) {
                            
                            $balance_2 = $data['balance'];
                            $due_balance = $data['due_balance']; 
                            $installment_2 = $data['due_instlmnt'];
                        
    
                        }
    
                      
                        $totalBalance2 = $balance_2 + $pro_amount;
                      
                        
         
                        $sql1 =   "UPDATE takeloanbalance 
                        SET balance='$totalBalance2',due_balance='$totalBalance2',
                        due_instlmnt='$pro_installment' WHERE take_user_id='$take_st_id' ";

                        $result = $conn->query($sql1);
        
                            if(mysqli_query($conn, $sql1)==TRUE){
                             
                                echo "<script>window.location.href='reciptProvide.php?take_st_Id=$take_st_id&pro_amount=$pro_amount';</script>";

                  
                            }else {
                                echo 'Data Not send';
                            }

                        
                          
                      

                    }
        ?>

        <!-- middle-side end -->

        <div class="right-sidebar">
            <div class="imp-links">
                <a
                    href="https://www.google.com/search?q=job+website&oq=job+web&gs_lcrp=EgZjaHJvbWUqBwgAEAAYgAQyBwgAEAAYgAQyBwgBEAAYgAQyBggCEEUYOTIHCAMQABiABDIHCAQQABiABDIHCAUQABiABDIHCAYQABiABDIHCAcQABiABDIHCAgQABiABDIHCAkQABiABKgCALACAA&sourceid=chrome&ie=UTF-8&ibp=htl;jobs&sa=X&sqi=2&ved=2ahUKEwilgf_v45aCAxUVZmwGHdnvA8EQkd0GegQIChAB#fpstate=tldetail&htivrt=jobs&htiq=job+website&htidocid=0Mp1zUXYq1LH6gEgAAAAAA%3D%3D"><img
                        src="socialmage/job.png" alt="">Job News</a>
                <a href="https://www.w3schools.com/"><img src="socialmage/code.png" alt="">Learn coading</a>
                <a href="versityFee"><img src="socialmage/money.png" alt="">Versity trimester fee payment</a>

            </div>
            <hr class="hrLft">
            <div class="video">
                <iframe class="ifrm2" src="https://www.youtube.com/embed/k01PU4efd-k?autoplay=1&mute=1"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>

                </iframe>
            </div>

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