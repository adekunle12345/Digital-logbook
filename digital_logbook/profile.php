<?php
  include 'conn.php';
    session_start();
    $user_id = $_SESSION["userid"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIWES Logbook</title>
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

        .profile {
            float: right;
            margin: 3.4vw 3.1vw 0 0;
            background: rgba(0, 0, 0, 0.2);
            height: 10vw;
            width: 15vw;
            padding-bottom: 4vw;
            border: grey 2px solid;
            border-top: #500101 3px solid;
            
        }

    </style>
</head>

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
    <div class="home-wrap" style="margin-top: 5px;">
        <button onclick="history.back()" style="background-color: rgb(255, 0, 0);  cursor: pointer; float: left; border-radius: 10px; padding: 3px; margin-right:-4vw; width: 4vw;">Back</button>
        <h2>Profile</h2>
        <div class="table-box">
            <div class="profile"><br><br>
                <!-- <img src="images/profile-icon-2.png"><br> -->
                <!-- <button>Update Photo</button><br> -->
                <form action="update_profile.php" method="post">
                    <input type="hidden" name="userid" value="<?php echo $row ['userid']?>">
                    <button type="submit" name = "comment" class=""><i class=""></i>Update Profile</button>	
                </form>
               <a href="org-profile.php"> <button>Organization Profile</button></a>
            </div>
            <table>
                <tr>
                    <td style="border-top: none;">&nbsp;</td>
                    <td style="border-top: none;">&nbsp;</td>
                </tr>
                <tr>
                    <td>Name of Student</td>
                    <td><?php echo  $row['fname'];?></td>
                </tr>
                <tr>
                    <td>Matriculation #</td>
                    <td><?php echo  $row['name'];?></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><?php echo  $row['phoneNumber'];?></td>
                </tr>
                <!-- </tr> -->
                <tr>
                    <td>Faculty/Department</td>
                    <td><?php echo  $row['faculty'];?></td>
                </tr>
                <tr>
                    <td>Course of Study</td>
                    <td><?php echo  $row['course'];?></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td><?php echo  $row['level'];?></td>
                </tr>
                <tr>
                    <td>Permarnent Home Address</td>
                    <td><?php echo  $row['p_address'];?></td>
                </tr>
                <tr>
                    <td>Sex</td>
                    <td><?php echo  $row['sex'];?></td>
                </tr>
                <tr>
                    <td>Name and Address of Next of Kin</td>
                    <td><?php echo  $row['n_nok'];?></td>
                </tr>
                <tr>
                    <td>Name of Industry-Based Supervisor</td>
                    <td><?php echo  $row['n_ibs'];?></td>
                </tr>
                <tr>
                    <td>Name of University-Based Co-ordinator &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                    <td><?php echo  $row['n_ubs'];?></td>
                </tr>
                <tr>
                    <td style="border-bottom: none; margin-bottom: 10px;">&nbsp;</td>
                    <td style="border-bottom: none; margin-bottom: 10px;">&nbsp;</td>
                </tr>
            </table>

        </div>
    </div>
    <?php
                        }
                    }
                        ?>
</body>

</html>