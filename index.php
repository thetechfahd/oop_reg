<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active" id="signin_caller"> Sign In </h2>
        <h2 class="inactive underlineHover" id="signup_caller">Sign Up </h2>

        <!-- Icon -->
        <div class="fadeIn first">
        <img src="images/avarter.png" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form method="post" action="classes/signin.class.php" id="signin_form">
            <input type="text" id="login" class="fadeIn second" name="login_username" placeholder="Username">
            <input type="text" id="password" class="fadeIn third" name="login_password" placeholder="Password">
            <input type="submit" class="fadeIn fourth" name="signin_submit" value="Log In">
        </form> 
        
        <!-- signup Form -->
        <form method="post" action="classes/signup.class.php" id="signup_form">
            <input type="text" id="login" class="fadeIn second" name="signup_username" placeholder="username">
            <input type="text" id="password" class="fadeIn third" name="signup_email" placeholder="Email">
            <input type="text" id="password" class="fadeIn third" name="signup_password" placeholder="Password">
            <input type="text" id="password" class="fadeIn third" name="signup_passwordb" placeholder="Confirm Password">
            <input type="submit" class="fadeIn fourth" name="signup_submit" value="Log In">
        </form>

        
        <!-- Remind Passowrd -->
        <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>