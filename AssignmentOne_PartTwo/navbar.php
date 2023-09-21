<?php session_start();

if(isset($_SESSION['userUid'])) : ?>

<div class="topnav">
    <a href="main.php">Home</a>
    <a href="viewBlog.php">Blog</a>
    <a href="contactUs.php">Contact Us</a>

    <div class="topnav_right">
        <a href="profile.php">
            <?php echo $_SESSION['userUid']; ?>
        </a>
        <a href="signIn.php">Log Out</a>
    </div>
</div>

<?php else : ?>
    <div class="topnav">
        <a href="index.php">Home</a>
    
        <div class="topnav_right">
            <a href="signIn.php">Sign In</a>
            <a href="signUp.php">Sign Up</a>
        </div>
    </div>
<?php endif ?>
