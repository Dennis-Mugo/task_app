<?php
class Layout
{
    public function defaultLayout() {
        ?>
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
                <h1><br>Wanna See My Blogs?</h1>
            </div>
            <div class="row">
                <div class="content">
                    <h1 class="topic">Please Login to Access Reading Content!</h1>
                    <hr>
                    <h3>If you don't have an account, you can always sign up. </h3>
                    <h3>To view the list of users, please sign in using the following email and password</h3>
                    <ul>
                        <li>Email: JerryMouse@cheese.com</li>
                        <li>Password: pass</li>
                    </ul>
                </div>
            </div>
            <div class="footer">
                <p>JustBeth &nbsp</p>
            </div>
        </body>

        </html>
        <?php
    }
    public function adminLayout($conn) {
        ?>
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
                <h1><br>Admin Page</h1>
            </div>
            <div class="row">
                <div class="content">
                    <table>
                        <caption>List of Users</caption>
                        <th></th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>is_admin</th>

                        <?php
                        //get users from table
                        $sql = "SELECT * FROM `Users`;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td>
                                        <?php echo $row['id'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Username'] ?>
                                    </td>
                                    <td>
                                        <a href="mailto:<?php echo $row['Email'] ?>">
                                            <?php echo $row['Email'] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?php echo $row['is_admin'] ?>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
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
    public function defaultProfileLayout($conn) {
        $signedInUserId = $_SESSION['userId'];
        ?>
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
                <h1><br>My Profile</h1>
            </div>
            <div class="row">
                <div class="content">
                    <h1 class="topic">Your Stats</h1>
                </div>
                <div>
                    <table>
                        <caption>User Data</caption>
                        <th></th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>is_admin</th>
                        <?php
                        //get users from table
                        $sql = "SELECT * FROM `Users` where  $signedInUserId=`id` ;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td>
                                        <?php echo $row['id'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Username'] ?>
                                    </td>
                                    <td>
                                        <a href="mailto:<?php echo $row['Email'] ?>">
                                            <?php echo $row['Email'] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?php echo $row['is_admin'] ?>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
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
}