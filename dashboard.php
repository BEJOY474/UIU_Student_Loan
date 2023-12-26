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
    <link rel="stylesheet" href="css/dsbrd.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" />

        <style>
        .mid2 .imp-links a {
    color: black;
    padding-left: 10px;
    width: 302px;
    text-decoration: none;
    padding-bottom: 10px;
    padding-top: 10px;
    border-radius: 5px;
    }

    .mid2 .imp-links a:hover {
    background: #babacf;
   }
    </style>

</head>



<body>


    <div id="top">

        <div class="container">

            <div class="col-md-6 offer">

                <a href="provideLone.php" class="btn btn-success btn-sm">Welcome</a>
                <a> to UIU friend loan and crowdsource</a>
            </div>

            <div class="col-md-6">

                <ul class="menu">

                    <li><a href="myProfile.php"><?php echo "$first_name" . " " ."$last_name"; ?></a></li>

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


            <div class="headTxt">
                <p class="dashTextLine">Dashboard</p>
            </div>

            <?php 
    
                    $conn = new mysqli('localhost','root','','uiustudentservice');
                    if(!$conn){
                        echo 'not connect';
                    }
         
                    $sql = "SELECT * FROM dashboard WHERE pro_loan_user_id = $student_id ";
                    $result = $conn->query($sql);

                    while ( $data = $result->fetch_assoc()) {
                                          
                        $prov_user_id_pk = $data['user_id'];
                        $take_loan_user_id = $data['take_loan_user_id'];
                        $pro_loan_user_id = $data['pro_loan_user_id'];

                        $take_pro_first_name = $data['take_pro_first_name'];
                        $take_pro_last_name = $data['take_pro_last_name'];
                        $pro_loan_user_id = $data['pro_loan_user_id'];
                        $take_gender  = $data['take_gender'];


                        $pro_first_name = $data['pro_first_name'];
                        $pro_last_name = $data['pro_last_name'];
                        $pro_gender  = $data['pro_gender'];


                            if ($pro_gender == 'male') {
                                
                                if ($take_gender == 'female') {
                                            echo "
                                                <center>
                                                    <br>
                                                    <a href='transition_provide.php?prov_student_id=$pro_loan_user_id&tk_student_id=$take_loan_user_id'>
                                                        <div class='dsbrdTop'>
                                                            <div class='mySelf'>
                                                                <img src='socialmage/boy.png'>
                                                                <p class= 'proLoanInfoNm'>$pro_first_name $pro_last_name</p>
                                                                <p class= 'proLoanInfoId'>$pro_loan_user_id</p>
                                                            </div>
                                                            <div class= 'arroe'>
                                                                <img src='socialmage/arro1.gif' >
                                                                <p class='proLoneTxt'>To Provide Loan</p>
                                                                <p class='proLoneRun'>Running...</p>
                                                            </div>
                                                            <div class='takeLoanDtls'>
                                                                <img src='socialmage/girl.png'>
                                                                <p class='taLoanInfoNm'>$take_pro_first_name $take_pro_last_name</p>
                                                                <p class='taLoanInfoId'>$take_loan_user_id</p>
                                                            </div>
                                                        </div>
                                                    </a> <br>
                                                </center>
                            
                                             ";
                                }else {
                                    echo "
                                        <center>
                                            <br>
                                            <a href='transition_provide.php?prov_student_id=$pro_loan_user_id&tk_student_id=$take_loan_user_id'>
                                                <div class='dsbrdTop'>
                                                    <div class='mySelf'>
                                                        <img src='socialmage/boy.png'>
                                                        <p class= 'proLoanInfoNm'>$pro_first_name $pro_last_name</p>
                                                        <p class= 'proLoanInfoId'>$pro_loan_user_id</p>
                                                    </div>
                                                    <div class= 'arroe'>
                                                        <img src='socialmage/arro1.gif' >
                                                        <p class='proLoneTxt'>To Provide Loan</p>
                                                        <p class='proLoneRun'>Running...</p>
                                                    </div>
                                                    <div class='takeLoanDtls'>
                                                        <img src='socialmage/boy.png'>
                                                        <p class='taLoanInfoNm'>$take_pro_first_name $take_pro_last_name</p>
                                                        <p class='taLoanInfoId'>$take_loan_user_id</p>
                                                    </div>
                                                </div>
                                            </a> <br>
                                        </center>
                
                                     ";
                                }



                            }else {
                                
                                if ($take_gender == 'female') {
                                    echo "
                                        <center>
                                            <br>
                                            <a href='transition_provide.php?prov_student_id=$pro_loan_user_id&tk_student_id=$take_loan_user_id'>
                                                <div class='dsbrdTop'>
                                                    <div class='mySelf'>
                                                        <img src='socialmage/girl.png'>
                                                        <p class= 'proLoanInfoNm'>$pro_first_name $pro_last_name</p>
                                                        <p class= 'proLoanInfoId'>$pro_loan_user_id</p>
                                                    </div>
                                                    <div class= 'arroe'>
                                                        <img src='socialmage/arro1.gif' >
                                                        <p class='proLoneTxt'>To Provide Loan</p>
                                                        <p class='proLoneRun'>Running...</p>
                                                    </div>
                                                    <div class='takeLoanDtls'>
                                                        <img src='socialmage/girl.png'>
                                                        <p class='taLoanInfoNm'>$take_pro_first_name $take_pro_last_name</p>
                                                        <p class='taLoanInfoId'>$take_loan_user_id</p>
                                                    </div>
                                                </div>
                                            </a> <br>
                                        </center>
                    
                                     ";
                        }else {
                            echo "
                                <center>
                                    <br>
                                    <a href='transition_provide.php?prov_student_id=$pro_loan_user_id&tk_student_id=$take_loan_user_id'>
                                        <div class='dsbrdTop'>
                                            <div class='mySelf'>
                                                <img src='socialmage/girl.png'>
                                                <p class= 'proLoanInfoNm'>$pro_first_name $pro_last_name</p>
                                                <p class= 'proLoanInfoId'>$pro_loan_user_id</p>
                                            </div>
                                            <div class= 'arroe'>
                                                <img src='socialmage/arro1.gif' >
                                                <p class='proLoneTxt'>To Provide Loan</p>
                                                <p class='proLoneRun'>Running...</p>
                                            </div>
                                            <div class='takeLoanDtls'>
                                                <img src='socialmage/boy.png'>
                                                <p class='taLoanInfoNm'>$take_pro_first_name $take_pro_last_name</p>
                                                <p class='taLoanInfoId'>$take_loan_user_id</p>
                                            </div>
                                        </div>
                                    </a> <br>
                                </center>
        
                             ";
                        }

                            }

                         
                    }



            ?>


        </div>

        <!-- middle-side end -->

        <div class="mid2">
            <p>Messenger</p>
            <div class="imp-links">
              
            <?php 
    
                $conn = new mysqli('localhost','root','','uiustudentservice');
                if(!$conn){
                    echo 'not connect';
                }

                $sql = "SELECT * FROM dashboard WHERE pro_loan_user_id = $student_id ";
                $result = $conn->query($sql);

                while ( $data = $result->fetch_assoc()) {
                                    
                    $prov_user_id_pk = $data['user_id'];
                    $take_loan_user_id = $data['take_loan_user_id'];
                    $pro_loan_user_id = $data['pro_loan_user_id'];

                    $take_pro_first_name = $data['take_pro_first_name'];
                    $take_pro_last_name = $data['take_pro_last_name'];
                    $pro_loan_user_id = $data['pro_loan_user_id'];

                    $pro_first_name = $data['pro_first_name'];
                    $pro_last_name = $data['pro_last_name'];
            

                    echo " <a href='massageProvide.php?take_loan_user_id=$take_loan_user_id&take_pro_first_name=$take_pro_first_name&take_pro_last_name=$take_pro_last_name' >$take_pro_first_name  $take_pro_last_name</a>";
                    
                }



            ?>



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