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

    <div class="pass">
        <h1><br>Reset Password</h1>
    </div>
    <div>
        <form action="forgotPassProcess.php" method="POST" autocomplete="off">
            <br>
            <label>Email Address</label>
            <input name="Code" type="text" placeholder="Please Enter Your Email Address">
            <label></label>
            <input type="button" class="button" value="Enter">
        </form>
        <div class="footer">
            <p>copyright &copy JustBeth &nbsp</p>
        </div>

</body>

</html>