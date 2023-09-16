<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/styles.css" />
</head>

<body style="font-family: 'Century Gothic';">

    <?php
     include_once "navLoged.php";
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