<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoshroDeal | Buy and Sell Online</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./login.css">
    <!-- <link rel="stylesheet" href="./login.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

    

</head>
<body>
    
    <!-- Navigation Bar -->
    <header>

        <a href="index.html" class="logo"><img src="images/Screenshot from 2022-04-08 23-38-46.png" alt="logo " class="logo"></a>
       
        <nav>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact Us

                </a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </nav>
        <div class="nav-sell">
        <a href="#" class="cta"> <button><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Listing</button></a>
    </div>
    <div class="nav-profile">
        <a href=""><img src="images/6481225432795d8cdf48f0f85800cf66.jpg" alt=""></a>
    </div>
  
    </header>

<!-- Register and Account page -->
 <!-- account page -->
 <div class="account-page">
    <div class="container">
        <div class="row">
           
           
                <div class="form-container account" >
                    <div class="form-btn">
                       
                        <span onclick="register()"> Register</span>
                         <span onclick="login()">Login </span>
                        <hr id="indicator">
                    </div>
                   <!-- register form -->
                    <form id="login-form" action="register.php" method="POST" >
                        <input type="text"placeholder="Username"  name="name">
                        <input type="email"placeholder="Email" name="email" >
                        <input type="password" placeholder="password" name="password">
                        <input type="password" placeholder="Confirm password" >
                        <input type="text" placeholder="Phone Number" name="phone">

                        <button type="submit" class="btn">Register</button>
                        
                    </form>


                    <!-- login form -->
                    <form id="reg-form" action="login1.php" method="POST">
                        <input type="text" placeholder="Username" name="name">
                        <input type="password" placeholder="password" name="password">
                        <button type="submit" class="btn">Login</button>
                        <a href="">
                           Forget Password 
                        </a>
                    </form> 
                </div>
            </div>
        </div>
    </div>
    <script src="login.js"></script>
  

<!-- footer -->
<section class="footer">
<div style="background-color: black;">
    <div class="footer-bar">
        Join Our Pay Less Get More Culture
    </div>
    <p style="text-align: center; font-size: large; font: bolder; color: white; ">“Choose best Make it Last”</p>
    <a href="mailto: abc@example.com" class="d-flex justify-center" style="color: white;">thehaatbazar@gmail.com </a>


    <div class="footer-item">
        <div class="d-flex justify-center  align-center ">

            <a href="facebook.com" style="color: white; padding-right: 10px; ">Facebook</a>

            <a href="facebook.com" style="color: white; padding-right: 10px; ">Instragram</a>
            <a href="facebook.com" style="color: white; padding-right: 10px; ">Linkkedin</a>
            <a href="facebook.com" style="color: white; padding-right: 10px; ">Twitter</a>
        </div>

        <div class="d-flex justify-center  mg-t-10">


            <a href="contact.com" style="padding-right: 15px; color: white;" class="font-black">Contact </a>



            <a href="blog.com" style="padding-right: 15px; color: white;" class="font-black">Blog</a>

            <a href="medication.com" style="padding-right: 15px; color: white;" class="font-black">Terms and Condition</a>

            <a href="delivery.com" style="padding-right: 15px; color: white;" class="font-black">Delivery</a>
            <a href="delivery.com" style="padding-right: 15px; color: white;" class="font-black">Privacy Policy</a>
            <a href="delivery.com" style="padding-right: 15px; color: white;" class="font-black">Help & Support</a>
        </div>


    </div>
</div>
</section>



</body>
</html>