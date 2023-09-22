<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once "aDoc.php"
    ?>
</head>

<body>
    <?php
    require_once "navbar.php";
    ?>
    <div class="header">
        <h1><br>Create Account</h1>
    </div>
    <br>

    <form action="Post-Query/signUp_Process.php" method="POST" autocomplete="on">
        <label>Full Name</label>
        <input type="text" name="FullName" placeholder="Please Enter Your Full Name" /><br>
        <label>Email Address</label>
        <input type="email" name="Email" placeholder="Please Enter Your Email Address" /><br>
        <label>New Username</label>
        <input type="text" name="Username" placeholder="Please Enter a Username" /><br>
        <label>New Password</label>
        <input type="password" name="Passwords" placeholder="Please Enter a Password" /><br>
        <label>Confirm Password</label>
        <input type="password" placeholder="Please Confirm the Password" />
        <label></label>

        <input type="submit" name="Submit" class="button" value="Register Now" />
    </form>
    </div>
</body>

</html>