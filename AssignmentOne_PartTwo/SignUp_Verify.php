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
        <h1><br>Enter Verification Code</h1>
    </div>
    <div>
        <form action="Post-Query/signUp_ver_Process.php" method="POST" autocomplete="off">
            <br>
            <label>Your verification code has been sent to your email.</label>
            <input name="Code" type="text" placeholder="Please Enter Your Verification Code">
            <input type="hidden" name="user-id" value="<?php echo $_GET['user-id']; ?>">
            <input name="Verify" type="submit" class="button" value="Enter">
            <div class="footer">
                <p>copyright &copy JustBeth &nbsp</p>
            </div>
        </form>
    </div>

</body>

</html>