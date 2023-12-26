<style>

        #outerContent {
            background-color: rgb(236, 226, 226);
            position: relative;
            top: 50px;
            height: 660px;
        }
        .col-sm-4.col-md-3 {
            float: right;
            position: relative;
            top: -211px;
            right: 70px;
        }

        .col-sm-6.col-mid-3 {
            height: 245px;
        }
        #footer {
            background-color: black;
            padding: 35px 0;
        
            position: relative;
        }

        #footer ul{
            list-style: none;
            padding-left: 0px;

        }

        #footer ul a{
            color: #EA3027 ;
            padding: 20px 0;
        text-decoration: none;
        }



        #footer .social{
            text-align: left;
        }

        #footer h4{
            color: #fff;
        }

        #footer .social a{
            margin: 0px 10px 0px 0px;
            display: inline-block;
            color: #ffffff;
            width: 30px;
            height: 30px;
            border-radius: 15px;
            line-height: 30px;
            font-size: 15px;
            text-align: center;
            vertical-align: bottom;
            background-color: #555555;

        }

        @media (min-width: 992px){
            .col-md-3 {
                width: 25%;
            }

        #footer .social a:hover{
            background-color: red;
            text-decoration: none;
        }
      }
        @media (min-width: 850px){
            .col-sm-4.col-md-3 {
            float: right;
            position: relative;
            top: -211px;
            right: 105px;
        }
            
        }

        #footer ul a {
            color: #EA3027;
            padding: 20px 0;
            text-decoration: none;
            /* height: 50px; */
            line-height: 35px;
        }

        .col-sm-4.col-md-3 {
            position: relative;
            top: -295px;
        }

        .col-sm-6.col-md-3 a {
            text-decoration: none;
            color: gray;
            transition: 0.4s;
        }

        .col-sm-6.col-md-3 a:hover {
            color: red;
        }

    
</style>



<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-mid-3">

                <h4>Pages</h4>

                <ul>
                    <li><a href="cart.php">Loan</a></li>
                    <li><a href="shop.php">Donation</a></li>
                    <li><a href="contact.php">Contact Us</a></li> 
                </ul>

                 <hr class="hidder-md hidden-lg hidden-sm">
               

                <h4>User Section</h4>

                <ul>
                    <li><a href="checkout.php">Login</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>

              
            </div>
   
     

            <div class="col-sm-6 col-md-3">
                <h4>Find Us</h4>
                <p>
                    <strong>Munsh Shop</strong>
                    <br>Badda-Dhaka
                    <br>01861028474
                    <br>munshiShop323@gmail.com
                    <br><strong>Bejoy Munshi</strong>
                </p>
                <a href="contact.php">Contact Us</a> 
                <hr class="hidder-md hidden-lg hidden-sm">
        
            </div>
            <div class="col-sm-6 col-md-3">
                <h4>Update News</h4>
                <p class="text-muted">
                     Don't miss out latest update.
                </p>
                  <hr>
                <h4>Keep In Touch</h4>

                <p class="social">
                    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                    <a href="https://twitter.com/home" class="fa fa-twitter"></a>
                    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                    <a href="https://www.google.com/" class="fa fa-google"></a>
                    <a href="#" class="fa fa-arrow-up"></a>
                </p>
            </div>
        </div>
    </div>
</div>