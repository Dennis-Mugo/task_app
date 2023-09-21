<?php

class Layout
{
    public function defaultLayout()
    {
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="CSS/styles.css" />
        </head>

        <body style="font-family: 'Century Gothic'">
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

    public function adminLayout()
    {
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="CSS/styles.css" />
    </head>

        <body style="font-family: 'Century Gothic'">
            <?php
            require_once "navbar.php";
            ?>
            <div class="header">
                <h1><br>Admin Page</h1>
            </div>
            <div class="row">
                <div class="content">
                    <table>
                        <caption>List of Users</caption>
                        <th>
                            <td>UserId</td>
                            <td>Username</td>
                            <td>Email</td>
                            <td>is_admin</td>
                        </th>
                        <tr>
                            <td>1</td>
                            <td>Admin</td>
                            <td>
                                <a href="mailto:<?php echo ""; ?>">
                            </td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>JustBeth</td>
                            <td>
                                <a href="mailto:<?php echo ""; ?>">
                            </td>
                            <td>No</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="footer">
                <p>JustBeth &nbsp</p>
            </div>
        </body>

        </html>
        <?php
    }
    public function defaultProfileLayout()
    {
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $_SESSION['userUid']; ?></title>
        <link rel="stylesheet" href="CSS/styles.css" />
    </head>
    
            <body style="font-family: 'Century Gothic'">
                <?php
                require_once "navbar.php";
                ?>
                <div class="header">
                    <h1><br>My Profile</h1>
                </div>
                <div class="row">
                    <div class="content">
                        <h1 class="topic">Your Stats</h1>
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