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
      <form class="reg-box" action="up_val.php" method="POST">
      <h1 style="margin-bottom: 20px; text-align: center;">Update Profile</h1>
      <!-- <p style="color: #3D3D3C; text-align: center;">Complete the fields to register</p>  -->
        <input type="hidden" name="userid" value="<?php echo $row ['userid']?>">
          <label style="margin-top: 1px;">Name</label><br>
          <input type="text" value= "<?php echo  $row['fname'];?>" name="fname" readonly><br>
          <label style="margin-top: 1px;">Matriculation Number</label><br>
          <input type="text" value= "<?php echo  $row['name'];?>" name="user" readonly><br>
          <label style="margin-top: 15px;">Phone Number</label><br>  
          <input type="text" value= "<?php echo  $row['phoneNumber'];?>" name="phnumber" required>
          <label style="margin-top: 15px;">Faculty</label><br>
          <input type="text" placeholder="Enter Faculty" name="faculty" required><br>
          <label style="margin-top: 15px;">Course of Study</label><br>
          <input type="text" placeholder="Course of Study" name="course" required><br>
          <label style="margin-top: 15px;">Level</label><br>
          <input type="text" placeholder="Enter Level" name="clevel" required><br>
          <label style="margin-top: 15px;">Permarnent Address</label><br>
          <input type="text" placeholder="Enter Permarnent Address" name="p_address" required><br>
          <label style="margin-top: 15px;">Sex</label><br>
          <input type="text" placeholder="Enter Sex" name="sex" required><br>
          <label style="margin-top: 15px;">Name and Address of Next of Kin</label><br>
          <input type="text" placeholder="Enter Name and Address of Next of Kin" name="n_nok" required><br>
          <label style="margin-top: 15px;">Name of Industry-Based Supervisor</label><br>
          <input type="text" placeholder="Enter Name of Industry-Based Supervisor" name="n_ibs" required><br>
          <label style="margin-top: 15px;">Name of University-Based Supervisor</label><br>
          <input type="text" placeholder="Enter Name of University-Based Supervisor" name="n_ubs" required><br><br>
          <button type="submit" class="button-login" style=" margin-left: 6em">Update</button>
      </form> 
    </div>
    <?php
                        }
                    }
                        ?>
  </body>
</html>
