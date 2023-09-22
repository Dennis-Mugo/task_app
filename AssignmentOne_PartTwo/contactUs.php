<?php
session_start();
require_once 'autoload.php';
if (! isset($_SESSION['userUid'])) {
    $layout = new Layout();
    $layout->defaultLayout();
} else { ?>

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
        <h1><br>Contact Us</h1>
    </div>
    <div class="content">
        <ul>
            <p>If you ever want to give me feedbacks, questions or just want to chat, you can talk to us!</p>
            <hr>
            <li style="margin: 10px;">Mail us on</li>
            <ul>
                <li>NotRealMail@gmail.com</li>
                <li>AlsoNotRealMail@gmail.com</li>
            </ul>
            <li style="margin: 10px;">Call us on</li>
            <ul>
                <li>+254700123456</li>
                <li>+254100123456</li>
            </ul>
        </ul>
    </div>

    <div class="imgs">
        <br><br>
        <img src="CSS/images/call.png" alt="walk" width=550px>
    </div>
    <div class="footer">
        <p>copyright &copy JustBeth &nbsp</p>
    </div>

</body>

</html>

<?php
}
?>