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
            <h1><br>Welcome To My Blog!!</h1>
        </div>

        <div class="row">
            <div class="content">
                <div>
                    <?php
                    if (isset($_GET['login']) && $_GET['login'] == "success") {
                        echo "<p class='first'>You are logged in!</p>";
                    }
                    ?>
                </div>
                <h1 class="topic">Main Content</h1>
                <hr>
                <p class="first"></p>
                <p class="first">In this page, you will be able to see all the things you have seen! Here I have different
                    pages such as the following</p>
                <ul>
                    <li>Blog Page: This page contains a list of few blogs that were written.</li>
                    <li>Contact Page: It has information that is necessary to contact the people which it may concern.</li>
                    <li>Sign in and Sign up: If you have an account, you can sign in to the website, if not you can always
                        create an account by signing up.</li>
                </ul>
            </div>
            <div class="side">
                <h1>Side Note</h1>
                <hr>
                <p class="first">This webpage is strictly focusing in designing and doesn't actually have real functioning
                    use.</p>
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