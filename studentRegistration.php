<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/rgs.css">
    <title>Registration</title>
    <link rel="icon" href="images/mLogo.png" type="images/icon">




<style>
    body {
           background-image: url(images/bg3.gif);
        background-repeat: no-repeat;
        background-size: cover;
        height: 96.1vh;
    }

    .container {
        position: relative;
        top: 30px;
    }

    .left {
        width: 50%;
        float: left;
        position: relative !important;
        top: 45px !important;
        height: 295px !important;
    }

    center p a:hover {
        color: #000000e8;
        transition: 0.1s;
    }

    .right {
        position: relative;
        top: 44px;
        width: 306px;
        float: right;
        height: 312px;

    }

    input#fsnm {
        position: relative;
        left: 32px;
        height: 35px;
        color: #fff !important;
        margin-bottom: 20px;
        border-radius: 7px;
        border: 1px solid wheat;
        background: transparent;
    }


    form {
        height: 451px;
    }

    .form-group.loanStatus {
        position: relative;
        top: -15px;
    }

    .form-group.gender {
        position: relative;
        top: -18px;
    }

    ::placeholder {
        color: #e9e4e4;
        opacity: 1;
        position: relative;
        left: 8px;
    }

    .text-center a:hover {
        color: #e9e4e4;
    }

    .footer {
        position: relative;
        top: 75px;
    }

    center .btn {
        position: relative;
        left: 156px;
    }

    button.btn.btn-secondary.btn-lg.mb-1 {
    position: relative;
    top: 80px;
    left: 295px;
    height: 50px;
    
    }

        p {
        position: absolute;
        left: 274px;
        top: 443px;
    }

    input {
    color: #fff;
    margin-left: 0px;
    }

        input#adrs {
        position: relative;
        left: 38px;
        height: 35px;
        margin-bottom: 20px;
        border-radius: 7px;
        border: 1px solid wheat;
        background: transparent;
    }

    a:hover {
        color: #ccd3dd;
    }


</style>

</head>

<body>


    <h2>Registration Form</h2>

    <div class="container">

        <?php 

                $conn = new mysqli('localhost','root','','uiustudentservice');
                if(!$conn){
                   echo 'not connect';
                }

                if ( isset($_POST['submit'])) {
                    $first_name = $_POST['first_name'];
                    $last_name = $_POST['last_name'];
                    $student_id  = $_POST['student_id'];
                    $email = $_POST['email'];
                    $father_name = $_POST['father_name'];


                    $mother_name = $_POST['mother_name'];
                    $phon = $_POST['phon'];
                    $department = $_POST['department'];
                    $loan = $_POST['loan'];
                    $password = $_POST['password'];
                    $gender = $_POST['gender'];
                 
 
                   
                     
                    $sql = "INSERT INTO registration (first_name,last_name,student_id,	email,father_name,mother_name,phon,department,loan,	password, gender)
                     VALUES('$first_name' , '$last_name' , '$student_id','$email','$father_name' , '$mother_name' , '$phon','$department','$loan', '$password', '$gender')";
                 
                    $sql2 = "INSERT INTO takeloanbalance (take_user_id)  VALUES( '$student_id')";
                    $result = $conn->query($sql2);
                 
                 
                 if ($conn->query($sql)== TRUE) {
                   
                       header('location:checkout.php?Account_created_successfully');
      
                    }else{
                         echo 'not in'.$conn->error;
                    }
                     

                }
        ?>

        <form action="studentRegistration.php" method="POST">



            <div class="left">
                <div class="form-group">
                    <label>First name</label>
                    <input type="text" class="name" required name="first_name" id="fsnm" placeholder="First name">
                </div>
                <div class="form-group">
                    <label>Student id</label>
                    <input type="text" class="name" required name="student_id" id="sid" placeholder="Student id">
                </div>
                <div class="form-group">
                    <label>Father's name</label>
                    <input type="text" class="name" required name="father_name" id="fnm" placeholder="Father's name">
                </div>
                <div class="form-group">
                    <label>Phone number</label>
                    <input type="text" class="name" required name="phon" id="inp" placeholder="Phone number">
                </div>
                <div class="form-group">
                    <label>Depertment</label>
                    <input type="text" class="name" required name="department" id="dpt" placeholder="Depertment name">
                </div>
            </div>

            <div class="right">
                <div class="form-group">
                    <label>Last name</label>
                    <input type="text" class="name" required name="last_name" id="lstnm" placeholder="Last name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="name" required name="email" id="email" placeholder="abc@gmail.com">
                </div>
                <div class="form-group">
                    <label>Mother's name</label>
                    <input type="text" class="name" name="mother_name" required id="inp" placeholder="Mother's name">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="name" required name="password" id="adrs" placeholder="Password">
                </div>
                <br>
                <div class="form-group  gender ">
                    <input type="radio" name="gender" value="male">
                    <label for="html">Male</label>
                    <input type="radio" name="gender" value="female">
                    <label for="css">Female</label><br><br>

                </div>

                <div class="form-group  loanStatus">
                    <input type="radio" name="loan" value="provide">
                    <label for="html">Provide loan</label>
                    <input type="radio" name="loan" value="take">
                    <label for="css">Take loan</label>

                </div>
                <br><br>
            </div>

       
              
                    <button class="btn btn-secondary btn-lg mb-1" name="submit">submit</button>
                    <p>Have an account? <a href="checkout.php">Login</a> </p>
              
           

        </form>


        <!-- <div class="btn_sub text-center">
              
            </div> -->


    </div>
</body>

</html>