<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>UIU friend loan and crowdsource</title>
    <link rel="icon" href="images/mLogo.png" type="images/icon">
   
<style>
    body{
    
        background-image: url("images/admin2.png");
        background-repeat: no-repeat;
        background-size: cover;
        height: 93.6vh;
       
    }
    .container{
        /* background-color: darkslateblue; */
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
    color: black;
}
p.text-center.mt-1 a {
    color: black;
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
    color: #1eff00;;
    font-size: 45px;
    text-shadow: 2px 2px 4px #b1a7a7;
    margin-top: 40px;
}


.container h4 {
    color: #4c35b6;
    font-size: 35px;
    font-family: inherit;
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

<h2>UIU friend loan and crowdsource</h2>

    <div class="container">

    

<?php
             
if ( isset($_POST['submit'])) {
    $passWord = 'admin1005';
    $pass = $_POST['Passwordss'];
   // $md5_user_pass = md5($pass);
  


    if ( !empty($pass)) {
    
          
            if ($passWord == $pass) {
           
               header("location:admin.php");
               
               }else{
                  echo "<p style='color:#fff;'>" .'Wrong Password' . "</p>";
                  echo '<audio controls autoplay>
                  <source src="music/wrngPass.mp3" type="audio/mp3">
                </audio>';
              }
    }

}

?>
        <form action="adminLogin.php" method="POST">
            <h4>Admin Login</h4><br>
        

              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="Passwordss" required>
                <label for="floatingPassword">Password</label>
                 
              </div>
    
              <div class="btn_sub text-center">
                        <button class="btn btn-secondary btn-lg mb-1" name="submit">
                        
                        Login
                </button>
 
        </div>

             </form>

           
    </div>
</body>
</html>
