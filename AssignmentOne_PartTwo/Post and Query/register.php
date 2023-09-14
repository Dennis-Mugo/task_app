<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatable">
    <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
    <title>Document</title>   
</head>
<body>
    <form action="processes.php"method="POST">
        <h1>Register</h1>
        <input type = "text" name = "FullName" placeholder = "Enter Fullname"/><br>
        <input type = "email" name = "Email" placeholder = "Enter Email"/><br>
        <input type = "password" name = "Passwords" placeholder = "Enter Password"/><br>
        <select name = "UserType">
            <option value="Admil">Admin</option>
            <option value="Author">Author</option>
            <option value="Editor">Editor</option>
        </select><br>
        <input type="submit" name="save_details"value="Register"/>
    </form>
</body>
</html>