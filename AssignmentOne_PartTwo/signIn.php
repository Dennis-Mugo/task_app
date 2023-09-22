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
        <h1><br>Login</h1>
    </div>
    <div>
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "empty-fields") {
                echo /*html*/'<p class="error">Fill in all fields!</p>';
            } elseif ($_GET['error'] == "sql-error") {
                echo /*html*/'<p class="error">SQL Error!</p>';
            } elseif ($_GET['error'] == "wrong-pwd") {
                echo /*html*/'<p class="error">Wrong Password!</p>';
            } elseif ($_GET['error'] == "no-user") {
                echo /*html*/'<p class="error">No User!</p>';
            } elseif ($_GET['error'] == "form-error") {
                echo /*html*/'<p class="error">No Post</p>';
            }
        }
        ?>
    </div>
    <div>
        <form action="Post-Query/signIn_Process.php" method="POST" autocomplete="on">
            <br>
            <label>Email Address</label>
            <input name="Email" type="text" placeholder="Please Enter Your Email Address">
            <br>
            <label>Password</label>
            <input name="Passwords" type="password" placeholder="Please Enter Your Password">
            <a href="forgotPass.php" class="hov" style="font-size: small;"><br><br><br><br><br>Forgot Password?</a>
            <label></label>
            <input type="submit" class="button" value="Sign In" name="SignIn" />
        </form>
    </div>

</body>

</html>