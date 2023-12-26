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
    <link rel="stylesheet" href="css/mngr.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" />
    <style>
        button.btn-block.btn-primary.text-center {
        width: 53px;
    }

    .chat .chat-history .other-message {
    background: #ffffff;
    position: relative;
    float: right;
       
    }
    .chat .chat-history .other-message:after {
        border-bottom-color: #ffffff;
        left: 93%;
    }


    .chat .chat-history .my-message {
        background: #ffffff;
    }

    .chat .chat-history .my-message:after {
        bottom: 100%;
        left: 30px;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-bottom-color: #ffffff !important;
        border-width: 10px;
        margin-left: -10px;
    }

    .chat-about h6 {
    font-size: 20px;
    font-weight: bold;
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

                    <li><a href="myProfile2.php"><?php echo "$first_name" . " " ."$last_name"; ?></a></li>

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

if ($_GET['pro_first_name']) {
    $pro_first_name = $_GET['pro_first_name'];

}

if ($_GET['pro_last_name']) {
    $pro_last_name = $_GET['pro_last_name'];

}

?>



        <?php 

                $conn = new mysqli('localhost','root','','uiustudentservice');
                if(!$conn){
                echo 'not connect';
                }

                if ($_GET['pro_loan_user_id']) {
                    $pro_student_id = $_GET['pro_loan_user_id'];
    
                }
            if ( isset($_POST['post'])) {
                    $msg = $_POST['msg'];
    
  
                $sql = "INSERT INTO conversion (take_loan_user_id,take_loan_user_msg, pro_loan_user_id)
                VALUES('$student_id' , '$msg' , '$pro_student_id')";

                $result = $conn->query($sql);
          
    


            }
        ?>



            <div class="container_ms">

                <div class="mid">
                    <div class="row clearfix">
                        <div class="col-lg-11">
                            <div class="card chat-app">
                            
                                <div class="chat">
                                    <div class="chat-header clearfix">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                              </a>
                                                <div class="chat-about">
                                                    <h6 class="m-b-0"><?php echo "$pro_first_name $pro_last_name"; ?></h6>
                                                    <small></small>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 hidden-sm text-right">
                                                <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fa fa-camera"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-cogs"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-question"></i></a>
                                            </div>
                                        </div>
                                    </div>


                             
                                    <?php 
 
                                        $conn = new mysqli('localhost','root','','uiustudentservice');
                                        if(!$conn){
                                            echo 'not connect';
                                        }



                                        if ($_GET['pro_loan_user_id']) {
                                            $pro_loan_user_id = $_GET['pro_loan_user_id'];

                                        }



                                        $sql = "SELECT * FROM conversion WHERE take_loan_user_id = $student_id and pro_loan_user_id = $pro_loan_user_id ";
                                        $result = $conn->query($sql);


                                        while ( $data = $result->fetch_assoc()) {
                                            
                                            $take_loan_user_id = $data['take_loan_user_id'];
                                            $take_loan_user_msg = $data['take_loan_user_msg'];
                                            $pro_loan_user_msg = $data['pro_loan_user_msg'];
                                            


                                            echo "
                                            
                                            
                                            <div class='chat-history'>
                                            <ul class='m-b-0'>
                                                <li class='clearfix'>
                                                    <div class='message-data text-right'>
                                                        
                                                    </div>
                                                    <div class='message other-message float-righ'>$take_loan_user_msg </div>
                                                </li>
                                            
                                                <li class='clearfix'>
                                                    <div class='message-data'>
                                                    
                                                    </div>
                                                    <div class='message my-message'>$pro_loan_user_msg</div>
                                                </li>

                                            
                                            </ul>
                                        </div>
                                            
                                            
                                            
                                            
                                            
                                            ";

                                            
                                        }
                                        ?>
                                                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        


                <div class="chat-message clearfix">
                    <div class="input-group mb-0">
                        
                        <form  method="POST">
                            <input type="text" class="form-control" name="msg" placeholder="Enter text here...">  
                            <div class="input-group-prepend">
                            <button type='submit' name='post'
                                 class='btn-block btn-primary text-center'>Send</button>
                            </div> 
                        </form>                                 
                    </div>
                </div>
            </div>


       



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