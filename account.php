<?php
session_start();
if(isset($_SESSION['username'])){

 header('location:welcome.php');
}

  
?>
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
   <?php require 'links/navigation.php'; ?>

   
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
                    <form id="login-form" action="register.php" method="POST" required>
                        <input type="text" placeholder="Username"  name="name">
                        <input type="email" placeholder="Email" name="email" >
                        <input type="text" placeholder="Phone Number" name="phone">
                        <input type="password" placeholder="password" name="password">
                        <input type="password" placeholder="Confirm password" name="cpassword">
                        <button type="submit" name="submit" class="btn">Register</button>
                        
                    </form>


                    <!-- login form -->
                    <form id="reg-form" action="login.php" method="POST">
                        <input type="text" placeholder="Enter Your Email" name="email">
                        <input type="password" placeholder="Enter Your Password" name="password">
                        <button type="submit" class="btn" name="submit">Login</button>
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
<?php require 'links/footer.php'; ?>



</body>
</html>