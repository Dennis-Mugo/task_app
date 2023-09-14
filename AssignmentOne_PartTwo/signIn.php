<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/Styles.css" />
</head>

<body>
    
    <?php
     include_once "nav.php";
    ?>

    <div class="header">
        <h1><br>Login</h1>
    </div>
    <div>
        <br>
        <label>Email Address</label>
        <input type="text" placeholder="Please Enter Your Email Address">
        <br>
        <label>Password</label>
        <input type="password" placeholder="Please Enter Your Password">
        <a href="forgotPass.php" class="hov" style="font-size: small;"><br><br><br><br><br>Forgot Password?</a>
        <label></label>
        <input type="button" class="button" value="Register Now">
    </div>

</body>

</html>