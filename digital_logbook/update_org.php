<?php
  include 'conn.php';
    session_start();
    $user_id = $_SESSION["userid"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="style.css">
  <style>
        body {
            background-color: #f0eeee;  
        }
        main{
            /* max-width: 12000px; */
            /* margin-top:0 auto; */
        }
        ul{
            list-style: none;
            float: right;
        }
        ul li{
            display: inline-block;
        }
        ul li a{
            text-decoration: none;
            color: white;
            padding:5px 20px;
            border:1px solid transparent;
            transition: 0.6s ease;
            text-transform: capitalize;
        }
        ul li a:hover{
            background-color: rgba(194, 186, 186, 0.685);
            color:#131212;
            border: 1px solid white;
        }

        .reg-box {
        width: 35vw;
        height: 79vw;
        background: #f3f3f3;
        padding: 1vw 2vw;
        margin-top: 85vh;
        text-align: left;
        color: rgb(0, 0, 0); 
        border: grey 2px solid;
        border-top: #500101 4px solid;
        border-left: #500101 1px solid;
        border-right: #500101 1px solid;
        border-bottom: #500101 1px solid;
        /* border-radius: 5px; */
        font-size: 20px;
    }
    .reg-box input{
        height: 0.5vw;
        width: 33vw;
        padding: 1vw;
        margin-bottom: 10px;
        margin-top: 10px;
    }

  </style>
</head>
  <body>
    
<body> 
    <header class="header">
        <div style="background-color: white; height: 4vw; width: 4vw; border-radius: 100%; float: left; margin: 5px;">
            <a href="home.php"> <img src="images/siwes-logo.jpg"
                    style="width: 4.5vw; margin-top: 5px; margin-left: -2px;"></a>
        </div>
        <div class="main" style="padding-top:10px">
        <ul>
            <li><a  class="active" href="home.php">home</a></li>
            <li><a href="viewlogbook.php">Logbook</a></li>                    
            <li><a href="profile.php">Profile</a></li>
            <li><a href="signout.php">Sign out</a></li>
        </ul>
    </div>
    </header>
    
    <?php
    include 'conn.php';
    $sql = "SELECT * FROM usertable where userid like $user_id ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        // if (strlen($row['logentry']) > 100) $str = substr($row['logentry'], 0, 100) . "...";
    ?>
    <div class="grid">
      <form class="reg-box" action="up_org_val.php" method="POST">
      <h1 style="margin-bottom: 20px; text-align: center;">Update Organization Profile</h1>
      <!-- <p style="color: #3D3D3C; text-align: center;">Complete the fields to register</p>  -->
        <input type="hidden" name="userid" value="<?php echo $row ['userid']?>">
          <label style="margin-top: 1px;">Organization Name</label><br>
          <input type="text" placeholder = "Enter Organization Name" name="name"><br>
          <label style="margin-top: 1px;">Location</label><br>
          <input type="text"  name="location" placeholder = "Enter Location"><br>
          <label style="margin-top: 15px;">Phone Number</label><br>  
          <input type="text" placeholder = "Enter Phone Number" name="phnumber" required>
          <label style="margin-top: 15px;">Address</label><br>
          <input type="text" placeholder="Enter Address" name="address" required><br>
          <label style="margin-top: 15px;">Type Of Buisness</label><br>
          <input type="text" placeholder="Type of Buisness" name="tob" required><br>
          <label style="margin-top: 15px;">Jobs Undertaken</label><br>
          <input type="text" placeholder="Jobs Undertaken" name="jobs" required><br>
          <label style="margin-top: 15px;">Products Offered</label><br>
          <input type="text" placeholder="Enter Products Offered" name="products" required><br>
          <label style="margin-top: 15px;">Number Of Employees</label><br>
          <input type="text" placeholder="Enter Number Of Employees" name="employees" required><br>
          <label style="margin-top: 15px;">Capital Investment</label><br>
          <input type="text" placeholder="Enter Capital Investment" name="capital" required><br>
          <label style="margin-top: 15px;">Other Relevant Information</label><br>
          <input type="text" placeholder="Enter Other Relevant Information" name="info" required><br>
          <button type="submit" class="button-login" style=" margin-left: 6em">Update</button>
      </form> 
    </div>
    <?php
                        }
                    }
                        ?>
  </body>
</html>
