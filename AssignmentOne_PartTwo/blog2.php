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
        <h1><br>Blogs</h1>
    </div>
    <div class="row">
        <div class="content">
            <h1 class="topic">A Day In A Life</h1>
            <hr>
            <p class="first">In the life I lived in, I have seen many things, experienced different situations, felt
                different emotions. Those experiences are mine because the life I lived is mine and noone has ever lived
                my life except for me. So I wonder what would it be like if I get to live a day in a life of someone
                else, or if someone lived a day in a life of mine. What would it be to walk a mile in their shoes?</p>
            <p>Experiencing day in the life of someone would have made us understand others and help us know more about
                them. We would Understand what makes them happy, sad, bored. We can also wee how they percive the world.
                Perhaps we can see how things taste to them, or how certain smell can make them feel. Maybe the hight
                difference can be a fresh perspective. Maybe we might experience their intellignegce and flaws.</p>
            <p>But all this is hyphothetical, because life is unique to all. Yet that doesn't mean we can never
                understand others. Though we cant feel and percive exactly every bit of their life, we can still have
                emphathy. Which in my opinion, is the closest we can get to living a day in a life of someone else.</p>
        </div>
        <div class="imgs">
            <br><br>
            <img src="CSS/images/walk.png" alt="walk" width=450px>
        </div>
    </div>
    <div>
        &nbsp &nbsp
        <a href="blog1.php" class="hov">Previous</a> |
        <a href="blog3.php" class="hov">Next</a>
    </div>
    <div class="footer">
        <p>copyright &copy JustBeth &nbsp</p>
    </div>

</body>

</html>
<?php
}
?>