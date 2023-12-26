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


    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
   
    <style>

                html{
                    scroll-behavior: smooth;
                }


                .ul .li .ulIn .liIn {
                    display : block;
                }

                .ul .li .ulIn{
                    width : 100%;
                    background : #22438C;
                    position : absolute;
                    z-index : 999;
                    display : none;
                } 

                .ul .li:hover .ulIn {
                    display: block;
                    background: #fff5f5;
                    color: #FFF;
                    
                }
                ul.breadcrumb li a:hover {
                    text-decoration: none;
                }
                hr.hrBr {
                        padding: 0;
                        margin: 0;
                    }

                    body{
                        font-size: 14px;
                        line-height: 1.42857143;
                        color: #333333;
                        background-color: black;
                        overflow-x: hidden;
                    }

                    /* audio {
                    display: none;
                } */

                .text h3 a{
                    position: relative;
                    top : -10px;
                }


                    #navbar{
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



                .text.text2::before{
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

                @keyframes animate{
                    40%, 60%{
                        left: 100%;
                    }
                    100%{
                        left: 0%;
                    }
                }

                .about .about-content .right a{
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


                @media (min-width:450px){
                    .max-width{
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

                    .same-height-row :last-child{
                        padding-bottom: 20px;
                    }


                .col-md-12.headPhnTitleHeader h2 {
                    padding-top: 70px;
                    color: #fff;
                }


                }



                @media (min-width: 890px){
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

                .headTitle{
                    text-align: center;
                    background-color: black;
                }
                section#outerContent\ hpnSen {
                    background-color: black;
                }

                .box_h.box_h2 {
                    background-color: black;
                }

                .box_h{
                    background-color:  rgb(236, 226, 226);;
                    margin: 0 0 30px;
                    box-sizing: border-box;
                    padding: 5px;
                    border-radius: 5px;
                    transition:all .4s ease;
                
                }

                .headphnSlid{
                    background-color: #222;
                }

                .home img{
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
                    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
                    height: 0vh;
                }

                section#about {
                    height: 140vh;
                }

                #top ul.menu > li a:hover {
                    color: red;
                    text-decoration: none;
                    
                    transition: 0.4s;

                }

                .box h1 {
                    text-align: center;
                    text-shadow: mediumturquoise;
                    font-family: fantasy;
                }

                .box p {
                    text-align: justify;
                    margin-top: 10px;
                }

                audio {
                    position: relative;
                    left: 50px;
                }

    

    </style>
</head>



<body>


   
        <div id="top">
                    
                    <div class="container">
                        
                        <div class="col-md-6 offer">
                            
                            <a href="provideLoan.php" class="btn btn-success btn-sm">Welcome</a>
                            <a > to UIU friend loan and crowdsource</a>
                        </div>
                        
                        <div class="col-md-6">
                            
                            <ul class="menu">
                         
                                <li><a><?php  echo "$first_name" . " " ."$last_name" ?></a></li> 
                        
                                <li>
                                    <a href="#contact">Contact</a>
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
                            <li >
                                <a href="provideLoan.php">Home</a>
                            </li>
                            <li>
                                <a href="#about loan">Student Loan</a>
                            </li>
                            <li>
                              
                                
                            </li>
                            <li>
                                <a href="#about donation">Donation</a>
                            </li>
                            <li class="active">
                                <a href="provideLoan">About service</a>
                            </li>
                            <li>
                                <a href="#contact">Contact</a>
                            </li>

                            <li class="li-dropout li">
                                <a class="nav-link dropdown-toggle" >
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu ulIn" >
                                    <li class="li-dropin liIn" ><a href="#about outerContent books">Book</a></li> <hr class="hrBr">
                                    <li class="li-dropin liIn"><a  href="#outerContent book">Book sell</a></li> <hr class="hrBr">
                                    <!-- <li><hr class="dropdown-divider"></li> -->
                                    <li class="li-dropin liIn"><a href="#about tuition">Tuition</a></li>
                                </ul>
                            </li>

                            <li>
                                <audio controls autoplay>
                                    <source src="AllBackgroundMusic/read.mp3" type="audio/mp3">
                                </audio>
                            </li>

                           
                                                    
                        </ul>
                        
                </div>
                    
                  
                    
            
                </div>
                
            </div>
            
        </div> 


<div style="background-color:rgb(236, 226, 226);" id="content" class="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="provideLoan.php">Home</a></li>
                <li>About service</li>
            </ul>
        </div>

  
        <div class="col-md-12">
            <div class="box"> 
                <center>
                        <h1>UIU friend loan and crowdsource</h1>   
                        <img style="width: 65%; height:300px" src="images/r1.jpg" alt="">
                        
                        <p> Assalamualaikum this is Munshi online shop. Let's know about this shop. In 2012, Bijoy Munshi and his sister established Munshi Shop in Bangladesh, before expanding to Malaysia, Indonesia, the Philippines and Thailand.


                                    This Munshi Shop deliverer in Chiang Rai Province, Thailand
                                    A year later in 2013, Munshi Shop was launched in Bangladesh and Romania. With more than 20,000 employees operating in their company, Munshi Shop became the largest food delivery service in Bangladesh.

                                    In 2014, the service expanded into the Balkans, Brunei, as well as the Philippines. In February 2014, Munshi Shop acquired Eat Oye, a rival company in Pakistan. Global expansion of the Munshi Shop business was led by Ralf Wenzel, Felix Plog and Ben Bauer.

                                    In 2015, co-founder Rohit Chadda stepped down from the company. By 2016, none of the original managing directors or co-founders remained with the company. Its operations in Indonesia also shut down due to competition from flourishing app-based taxi-motorbike services, while the company sold its Delivery Club business in Russia to Mail.Ru for $100 million in November 2016.

                                    Munshi Shop's largest investor Rocket Internet sold the company to Delivery Hero in December 2016. On 1 November 2017, Munshi Shop re-branded and changed its brand colour from orange to pink with an updated logo across all served countries, following its acquisition by Delivery Hero.

                                    In April 2018, the company left the Brunei market.

                                    By 2019, Munshi Shop had gone through three rounds of management changes.

                                    From 2019 to 2020, Munshi Shop began operating in other markets in Southeast Asia, launching in Thailand, Myanmar, Cambodia, and Laos. Munshi Shop was also launched in Japan in September 2020.


                                    Pandamart in Tokyo, Japan
                                    In May 2021, Munshi Shop's brand was acquired by Glovo in Bulgaria and Romania. In September 2021, Delivery Hero unified its subsidiary brand NetPincér with Munshi Shop in Hungary, with NetPincér rebranding as Munshi Shop. In December 2021, Munshi Shop stopped its food delivery services in all cities of Germany, except central Berlin.

                                    Since 2021, Munshi Shop has partnered with home chefs through an initiative called Home Chefs. The initiative began in Pakistan after the company noticed that there are a lot of female home chefs looking for side income, but it has since scaled to Bangladesh and Malaysia. The initiative is also seen as a source of income for chefs who do not have the capital to set up shop, but have the ability to cook and provide food from their own kitchens. The initiative currently supports 8,000 to 9,000 home chefs, and Munshi Shop plans to grow the initiative to support up to 100,000 home chefs.

                                    In early 2022, Munshi Shop announced its new mascot called Pau-Pau, an anthropomorphic panda that cares about empowerment and environment. The new mascot will be rolled out across all of Asia.
                            </p>  
                </center>

             
            </div>

         
            
                <center>
                    <ul class="pagination">
                       
                        <li><a href="provideLoan.php">Go To Home Page</a></li>
               
                    </ul>
                </center>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>


</body>
</html>
   


<?php 

     }else{
         header("location:index.php");
     }

?>










  
