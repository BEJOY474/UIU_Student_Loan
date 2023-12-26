<?php 
$conn = new mysqli('localhost','root','','uiustudentservice');

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
    <link rel="icon" href="images/mLogo.png" type="images/icon">

   
    <style>
        body{
        
            background-image: url("images/bg2.gif");
            background-repeat: no-repeat;
            background-size: cover;
            height: 93.6vh;
        
        }

        label.name {
            color: #fff;
        }
        #floatingInput {
            background: transparent;
            font-weight: bold;
            font-size: 18px;
            border : 2px solid #fff;
            color: #fff;
        }
        input#floatingPassword {
            background: transparent;
            font-weight: bold;
            font-size: 18px;
            border: 2px solid #fff;
            color: #fff;
        }

        input[type="text"]
        {
            background: transparent;
            border: none;
        }
        .container{
            padding: 15px;
            border-radius: 10px;
            max-width: 900px;
            margin: auto;
            position: relative;
            top: 80px;
            box-shadow: 0 4px 8px 0 white;
            transition: 0.1s;
        }
        p.text-center.mt-1 {
        color: white;
        }
        p.text-center.mt-1 a {
            color: #fdfdfd;
            text-decoration: none;
        }

        button{
            width: 180px;
        }
        p,a{
            font-size: 16px;
            color: #fff;
        }
        a:hover{
            color: rgb(216, 205, 205);
        }
        h2 {
        text-align: center;
        color: #573ce4;
        font-size: 45px;
        text-shadow: 2px 2px 4px #321f1f;
        margin-top: 40px;
         }

        .container h4 {
            color: #ffff;
            font-size: 35px;
            font-family: inherit;
            font-weight: bold;
            text-align: center;
        }
            @media screen and (min-width: 1200px) {
                .container{
                    width: 800px;
                    transition: 0.1s;
                    
                }
        }

        @media screen and (min-width: 400px) {
                .container{
                    width: 400px;
                    transition: 0.1s;
                }
        }

        @media screen and (min-width: 750px) {
                .container{
                    width: 700px;
                    transition: 0.1s;
                    
                }
        }

            audio {
                display: none;
            }
        
    </style>

</head>
<body>
    

    <h2> UIU friend loan and crowdsource</h2>

    <div class="container">

        <?php
          if (isset($_GET['Account_created_successfully'])) {
             echo "<p style='color:#fff; text-align: center;'>" . 'Account create successfully' . "</p>";
             echo '<audio controls autoplay>
             <source src="AllBackgroundMusic/cngrs2.mp3" type="audio/mp3">
             </audio>' ;
          }    
          
        ?>    

        <form action="checkout.php" method="POST">
            <h4>Login</h4><br>

            <?php
                    $conn = new mysqli('localhost','root','','uiustudentservice');

                    if(!$conn){
                        echo 'not connect';
                    }

           
                    if ( isset($_POST['submit'])) {

                        $student_id = $_POST['student_id'];
                        $password = $_POST['password'];

                   
                      

                        $sql = "SELECT* FROM registration WHERE student_id = '$student_id' and  password = '$password' " ;
                
                       

                        $query = $conn->query($sql);
                

                    
                        if ($query->num_rows> 0) {
                        $data = mysqli_fetch_assoc($query);
                        $first_name = $data['first_name'];
                        $last_name = $data['last_name'];
                        $student_id = $data['student_id'];
                        $email = $data['email'];
                        $father_name = $data['father_name'];

                        $mother_name = $data['mother_name'];
                        $phon = $data['phon'];
                        $department = $data['department'];
                        $loan = $data['loan'];
                        $password = $data['password'];
                        $facebook = $data['facebook'];
                        $linkdin = $data['linkdin'];
                        $gender = $data['gender'];
                        
                        $_SESSION['first_name'] = $first_name;
                        $_SESSION['last_name'] = $last_name ;
                        $_SESSION['student_id'] = $student_id;
                        $_SESSION['email'] = $email;
                        $_SESSION['father_name'] = $father_name;
                        $_SESSION['mother_name'] = $mother_name;
                        $_SESSION['phon'] = $phon;
                        $_SESSION['department'] = $department ;
                        $_SESSION['loan'] = $loan;
                        $_SESSION['password'] = $password;
                        $_SESSION['facebook'] = $facebook;
                        $_SESSION['linkdin'] = $linkdin;
                        $_SESSION['gender'] = $gender;
                        
                    
                       
                        if ($loan == "provide") {
                         
                            header("location:provideLoan.php");
                            }
                        if($loan == "take") {
                            header("location:takeLoan.php");
                        }

                       
                        
                        }else{
                            echo "<p style='color:#fff;  text-align: center;'>" .'Invalid user!!!' . "</p>";
                            echo '<audio controls autoplay>
                            <source src="AllBackgroundMusic/invalid.mp3" type="audio/mp3">
                            </audio>';
                        }
                        
                    
                    }

            ?>



            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Student id" name="student_id" required>
                <label for="floatingInput" class="name">Student id</label>

            </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                <label for="floatingPassword" class="name">Password</label>
                               
              </div>
    
              <div class="btn_sub text-center">
                <button class="btn btn-secondary btn-lg mb-1" name="submit"> Login </button>
               
              
            </div>

        </form>
      

             <p class="text-center mt-1">Not have account? <a href="studentRegistration.php">Registration here</a></p>

    </div>


</body>
</html>
