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
         .profile {
            float: right;
            margin: 3.4vw 3.1vw 0 0;
            background: rgba(0, 0, 0, 0.2);
            height: 5vw;
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
                    style="width: 4.5vw; margin-top: 0.4vw; margin-left: -0.2vw;"></a>
        </div>
        <div style="float: right;">
            <a href="profile.php"><img src="images/profile-icon-2.png"
                    style="margin-top: 1vw; width: 3vw; height: 3vw; margin-right: 0.5vw;">
                <p style="float: right; margin-right: 2vw; margin-top: 1.8vw; color: white;">Adeleke Adekunle</p>
            </a>
        </div>
    </header>
    
    <div class="home-wrap" style="margin-top: 5px;"> 
        <button onclick="history.back()" style="background-color: rgb(255, 0, 0);  cursor: pointer; float: left; border-radius: 10px; padding: 3px; margin-right:-4vw; width: 4vw;">Back</button>
        <h2>Organization Profile</h2>
        <div class="table-box">
        <div class="profile"><br><br>
                <form action="update_org.php" method="post">
                    <input type="hidden" name="userid" value="<?php echo $row ['userid']?>">
                    <button type="submit" name = "comment" class="btn btn-warning btn-lg mb-2"><i class="fa-solid fa-comment"></i>Add Details</button>	
                </form>		
            </div>
            <?php
    include 'conn.php';
    $sql = "SELECT * FROM org_dt where uid like $user_id ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        // if (strlen($row['logentry']) > 100) $str = substr($row['logentry'], 0, 100) . "...";
    ?>
            <table>
                <tr>
                    <td style="border-top: none;">&nbsp;</td>
                    <td style="border-top: none;">&nbsp;</td>
                </tr>
                <tr>
                    <td>Name of Industry</td>
                    <td><?php echo  $row['name'];?></td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td><?php echo  $row['location'];?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo  $row['address'];?></td>
                </tr>
                <tr>
                    <td>Type of Buisness</td>
                    <td><?php echo  $row['tob'];?></td>
                </tr>
                <tr>
                    <td>Jobs Undertaken</td>
                    <td><?php echo  $row['jobs'];?></td>
                </tr>
                <tr>
                    <td>Products</td>
                    <td><?php echo  $row['products'];?></td>
                </tr>
                <tr>
                    <td>Number Of Employees</td>
                    <td><?php echo  $row['employees'];?></td>
                </tr>
                <tr>
                    <td>Capital Investment</td>
                    <td><?php echo  $row['capital'];?></td>
                </tr>
                <tr>
                    <td>Telephone Number</td>
                    <td><?php echo  $row['phnumber'];?></td>
                </tr>
                <tr>
                    <td>Other Relevant Information&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                    <td><?php echo  $row['info'];?></td>
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