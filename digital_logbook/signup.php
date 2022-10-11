<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="style.css">
</head>
  <body>
    <div class="grid">
      <form class="reg-box" action="registration.php" method="POST">
      <h1 style="margin-bottom: 20px; text-align: center;">Registration</h1>
      <p style="color: #3D3D3C; text-align: center;">Complete the fields to register</p> 
          <label style="margin-top: 1px;">Name</label><br>
          <input type="text" placeholder="Enter Full Name" name="fname" required><br>
          <label style="margin-top: 1px;">Matriculation Number</label><br>
          <input type="text" placeholder="Enter Matriculation Number" name="user" required><br>
          <!-- <label style="margin-top: 15px;">Age</label><br>
          <input type="text" placeholder="Enter Your Age" name="age" required><br> -->
          <label style="margin-top: 15px;">Phone Number</label><br>  
          <input type="text" placeholder="Enter Your Phone Number" name="phnumber" required>
          <label style="margin-top: 15px;">Password</label><br> 
          <input type="password" placeholder="Enter password" name="pwd" required><br>
          <!-- <label style="margin-top: 15px;">Confirm Password</label><br>  
          <input type="password" id="cnpwd" placeholder="Confirm password" name="cnpwd" required><br> -->
          <p>Already registered? <a href="login.php">Login</a></p>
          <button type="submit" class="button-login" style=" margin-left: 7em">Register</button>
      </form> 
    </div>
  </body>
</html>
