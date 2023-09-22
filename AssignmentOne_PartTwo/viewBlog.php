<?php
session_start();
require_once 'autoload.php';
if (!isset($_SESSION['userUid'])) {
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

    <body style="font-family: 'Century Gothic';">

        <?php
        require_once "navbar.php";
        ?>

        <div class="header">
            <h1><br>Blogs</h1>
        </div>
        <div class="row">
            <div class="content">
                <h1 class="topic">Published Blogs</h1>
                <hr>
                <p>Here in this page you can sellect among the different blogs that I have published in this website</p>
                <ul style="font-size: large;">
                    <li><a href="blog1.php" class="hov">All About Us</a></li>
                    <li><a href="blog2.php" class="hov">A Day in a Life</a></li>
                    <li><a href="blog3.php" class="hov">If All were One</a></li>
                </ul>

            </div>
            <div class="imgs">
                <br><br>
                <img src="CSS/images/blog.png" alt="walk" width=600px>
            </div>
        </div>
        <div class="footer">
            <p>copyright &copy JustBeth &nbsp</p>
        </div>

    </body>

    </html>
    <?php
}
?>