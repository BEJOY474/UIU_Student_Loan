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

    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <div id="top">

        <div class="container">

            <div class="col-md-6 offer">

                <a href="index.php" class="btn btn-success btn-sm">Welcome</a>
                <a> to UIU friend loan and crowdsource</a>
            </div>

            <div class="col-md-6">

                <ul class="menu">
                    <!-- echo    $u_name = $_SESSION['user_name']; -->
                    <!-- <li><a><?php  ?></a></li> -->

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
                        <li class="active">
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
                        <li>
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

    <div class="container" id="slider">

        <div class="col-md-12">

            <div class="carousel slide" id="myCarousel" data-ride="carousel">

                <ol class="carousel-indicators">

                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>

                </ol>

                <div class="carousel-inner">

                    <div class="item">

                        <img style="width: 1500px; height:450px" src="images/uiu1.jpg" alt="Slider Image 2">
                    </div>

                    <div class="item active">
                        <img style="width: 1150px; height:450px" src="images/l_1.webp" alt="Slider Image 1">
                    </div>

                    <div class="item">
                        <img style="width: 1500px; height:450px" src="images/l_2.jpg" alt="Slider Image 2">
                    </div>

                    <div class="item">

                        <img style="width: 1500px; height:450px" src="images/uiu2.jpg" alt="Slider Image 4">

                    </div>

                    <div class="item">
                        <img style="width: 1500px; height:450px" src="images/d2.webp" alt="Slider Image 2">
                    </div>



                    <div class="item">

                        <img style="width: 1500px; height:450px" src="images/d3.webp" alt="Slider Image 2">
                    </div>

                    <div class="item">

                        <img style="width: 1500px; height:450px" src="images/h1.jpg" alt="Slider Image 3">

                    </div>



                </div>

                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <!-- left carousel-control Begin -->

                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>

                </a>

                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <!-- left carousel-control Begin -->

                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>

                </a>

            </div>

        </div>

    </div>

    <div class="container">
        <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">Welcome to UIU
            friend loan and crowdsource</marquee>
    </div>

    <section class="about" id="about service">
        <div class="max-width container">
            <h2 class="title">About service</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/uiu3.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">Here you will found <span class="typing_2"> </span></div>
                    <p>United International University (UIU) is the outcome of the initiative taken by a couple of
                        renowned academicians. It is established with the generous support and patronage of the United
                        Group, a successful business conglomerate operating in diverse business areas....</p>
                    <a href="readMore.php">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <div id="advantage">
        <div class="container">
            <h2 class="title">We Believe</h2>
            <div class="same-height-row">
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">UIU student friendly university</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam porro voluptatem asperiores
                            maiores rerum. Ipsum?</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-tag"></i>
                        </div>
                        <h3><a href="#">
                                Provide loan
                            </a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam porro voluptatem asperiores
                            maiores rerum.</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <h3><a href="#">Donation & help</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam porro voluptatem asperiores
                            maiores rerum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about loan" id="about loan">
        <div class="max-width container">
            <h2 class="title">UIU friend loan</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/loan-1.gif" alt="">
                </div>
                <div class="column right">
                    <div class="text">Here student <span class="typing_3"> </span></div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ut debitis, placeat, odit
                        repellat quaerat eveniet error fuga ea officia adipisci nesciunt! Blanditiis, officia molestias
                        minima, nemo sint ex aliquam distinctio laudantium delectus consectetur rem! Nesciunt similique
                        tempore ab vitae expedita quo delectus rem. Repudiandae aut, nobis suscipit tempora eum sapiente
                        maiores doloribus odio laudantium voluptates iure quisquam impedit alias.</p>
                    <a href="allKidsBook.php">Click Here</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about donation" id="about donation">
        <div class="max-width container">
            <h2 class="title">UIU donation place</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/donation.webp" alt="">
                </div>
                <div class="column right">
                    <div class="text">Here student will <span class="typing_4"> </span></div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ut debitis, placeat, odit
                        repellat quaerat eveniet error fuga ea officia adipisci nesciunt! Blanditiis, officia molestias
                        minima, nemo sint ex aliquam distinctio laudantium delectus consectetur rem! Nesciunt similique
                        tempore ab vitae expedita quo delectus rem. Repudiandae aut, nobis suscipit tempora eum sapiente
                        maiores doloribus odio laudantium voluptates iure quisquam impedit alias.</p>
                    <a href="allKidsBook.php">Click Here</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about outerContent books">
        <div id="hot">
            <div class="box_h">
                <div class="container">
                    <div class="col-md-12">
                        <h2>Student books</h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" class="container">
            <div class="row s_slider">
                <div class="col-sm-4 col-sm-6 single">
                    <div class="product">
                        <a>
                            <img style="width: 359px; height: 265px" class="img-responsive" src="images/eng.jpg"
                                alt="macbookLaptop">
                        </a>

                        <div class="text">
                            <h3>
                                <a>Intensive english I</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-sm-6 single">
                    <div class="product">
                        <a>
                            <img style="width: 359px; height: 265px" class="img-responsive" src="images/java.jpg"
                                alt="macbookLaptop">
                        </a>

                        <div class="text">
                            <h3>
                                <a>Java</a>
                            </h3>


                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-sm-6 single">
                    <div class="product">
                        <a>
                            <img style="width: 359px; height: 265px" class="img-responsive" src="images/python.jpg"
                                alt="">
                        </a>

                        <div class="text">
                            <h3>
                                <a>Python</a>
                            </h3>


                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-sm-6 single">
                    <div class="product">
                        <a>
                            <img style="width: 359px; height: 265px" class="img-responsive" src="images/pyh.jpg"
                                alt="macbookLaptop">
                        </a>

                        <div class="text">
                            <h3>
                                <a>Physics</a>
                            </h3>


                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-sm-6 single">
                    <div class="product">
                        <a>
                            <img style="width: 359px; height: 265px" class="img-responsive" src="images/elc.webp"
                                alt="macbookLaptop">
                        </a>

                        <div class="text">
                            <h3>
                                <a>Electronic</a>
                            </h3>


                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-sm-6 single">
                    <div class="product">
                        <a>
                            <img style="width: 359px; height: 265px" class="img-responsive" src="images/thoery.jpg"
                                alt="macbookLaptop">
                        </a>

                        <div class="text">
                            <h3>
                                <a>TOC</a>
                            </h3>


                        </div>
                    </div>
                </div>
                <button class="slick-next slick-arrow" aria-label="Next" type="button">Next</button>

            </div>


        </div>
    </section>

    <section class="about donation" id="about tuition">
        <div class="max-width container">
            <h2 class="title">UIU student tuition</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/stuitor.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">Here student will <span class="typing_5"> </span></div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ut debitis, placeat, odit
                        repellat quaerat eveniet error fuga ea officia adipisci nesciunt! Blanditiis, officia molestias
                        minima, nemo sint ex aliquam distinctio laudantium delectus consectetur rem! Nesciunt similique
                        tempore ab vitae expedita quo delectus rem. Repudiandae aut, nobis suscipit tempora eum sapiente
                        maiores doloribus odio laudantium voluptates iure quisquam impedit alias.</p>
                    <a href="allKidsBook.php">Click Here</a>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="max-width container">
            <h2 class="title">Contact</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="mapDiv">
                        <iframe class="map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.2910409710703!2d90.44860675751083!3d23.79789192149767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c769370e205b%3A0xbc7cf60dd1670c6d!2sUIU%20Cafeteria!5e0!3m2!1sen!2sbd!4v1615562626599!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>




                <div class="column right">
                    <div class="text">Massage us</div>
                    <form action="index.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" name="userName" required>
                            </div>

                            <div class="field email">
                                <input type="email" placeholder="Email" name="userEmail" required>
                            </div>
                        </div>


                        <div class="field textarea">
                            <textarea cols="30" rows="10" project placeholder="Comment.." name="comment"
                                required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit" name="submit">Send message</button>
                        </div>
                </div>
                </form>



                <?php 

$conn = new mysqli('localhost','root','','uiustudentservice');
if(!$conn){
   echo 'not connect';
}

if ( isset($_POST['submit'])) {
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $comment  = $_POST['comment'];
 
     
    $sql = "INSERT INTO cmnt (name,email,msg)
     VALUES('$userName' , '$userEmail' , '$comment')";
 
 
 
 if ($conn->query($sql)== TRUE) {
   
    echo "<script>window.location.href ='index.php';</script> ";
    

    }else{
         echo 'not in'.$conn->error;
    }
     

}
?>






            </div>
        </div>
        </div>
    </section>

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



    <script>
    $(document).ready(function() {
        $(window).scroll(function() {

            if (this.scrollY > 500) {
                $('.scroll-up-btn').addClass("show");
            } else {
                $('.scroll-up-btn').removeClass("show");
            }
        });


        // SLIDE UP SCRITP

        $('.scroll-up-btn').click(function() {
            $('html').animate({
                scrollTop: 0
            });
        });



        var typed = new Typed(".typing_2", {
            strings: [' friend loan.', ' friend loan.', ' donation place.', ' book.', ' tuition.'],
            typeSpeed: 74,
            backSpeed: 74,
            loop: true
        });

        var typed = new Typed(".typing_3", {
            strings: ['', ' take loan', ' take loan', ' provide loan.', ' take loan for abroad.'],
            typeSpeed: 76,
            backSpeed: 76,
            loop: true
        });

        var typed = new Typed(".typing_4", {
            strings: ['', ' donate money for homeless people.',
                ' donate money for flood affected people.'
            ],
            typeSpeed: 76,
            backSpeed: 76,
            loop: true
        });

        var typed = new Typed(".typing_5", {
            strings: ['', ' find course student tuitor.'],
            typeSpeed: 76,
            backSpeed: 76,
            loop: true
        });



        $('.s_slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });

        $('.s_slider1').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
        });


    });
    </script>


</body>

</html>