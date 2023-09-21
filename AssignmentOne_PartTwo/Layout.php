<?php

class Layout {
    public function defaultLayout() {
        ?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Document</title>
                <link rel="stylesheet" href="CSS/styles.css" />
            </head>
            <body>
                <?php
                require_once "navbar.php";
                ?>
                <div class="header">
                    <h1><br>Wanna See My Blogs?</h1>
                </div>
                <div class="row">
                    <div class="content">
                        <h1 class="topic">Please Login to Access Reading Content!</h1>
                        <hr>
                        <h3>If you don't have an account, you can always sign up. </h3>
                    </div>
                </div>
                <div class="footer">
                    <p>JustBeth &nbsp</p>
                </div>
            </body>
        </html>
        <?php
    }
}

