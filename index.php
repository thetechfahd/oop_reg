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
        <h2 class="active"> Sign In </h2>
        <h2 class="inactive underlineHover">Sign Up </h2>

        <!-- Icon -->
        <div class="fadeIn first">
        <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form>
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="Login">
        <input type="text" id="password" class="fadeIn third" name="login" placeholder="Password">
        <input type="submit" class="fadeIn fourth" value="Log In">
        </form> 
        
        <!-- Login Form -->
        <form>
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
</body>
</html>