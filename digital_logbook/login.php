<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIWES Logbook</title>
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head>
<body>
    <div class="grid">
        <form class="login-box" action="validation.php" method="POST">
            <img src="images/siwes-logo.jpg" class="avatar"/><br>
            <p>Login to Student Portal</p>
            <input type="text" placeholder="Matriculation #" name="user"><br><br>
            <input type="text" placeholder="Password" name="pwd"><br><br>
            <p style="float:left; margin-left:">Not a user? <a href="signup.php" style="color:black; text-decoration:none;">Register here</a></p>
            <button type="submit" style="" class="button-login">LOGIN</button><br><br>
            <a href="admin\login.php" style="margin-top:2vw; color:black; text-decoration:none;">Login as Supervisor</a>
        </form>
    </div>
</body>
</html>