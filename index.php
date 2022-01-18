<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
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
        <form action="" id="signin_form">
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="Login">
            <input type="text" id="password" class="fadeIn third" name="login" placeholder="Password">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form> 
        
        <!-- signup Form -->
        <form action="" id="signup_form">
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="username">
            <input type="text" id="password" class="fadeIn third" name="login" placeholder="Email">
            <input type="text" id="password" class="fadeIn third" name="login" placeholder="Password">
            <input type="text" id="password" class="fadeIn third" name="login" placeholder="Confirm Password">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
</body>
</html>