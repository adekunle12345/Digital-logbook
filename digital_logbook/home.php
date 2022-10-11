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
            /* background-color: #f0eeee;   */
        }
        html,
        body {
            height: 100%;
            margin: 0;
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

    </style>
</head>

<body>   
    
 <header class="header">
        <div style="background-color: white; height: 4vw; width: 4vw; border-radius: 100%; float: left; margin: 5px;">
            <a href="home.php"> <img src="images/siwes-logo.jpg"
                    style="width: 4.5vw; margin-top: 5px; margin-left: -2px;"></a>
        </div>
        <!-- <div style="float: right;">
            <a href="profile.php"><img src="images/profile-icon-2.png"
                    style="margin-top: 1vw; width: 3vw; height: 3vw; margin-right: 5px;">
                <p style="float: right; margin-right: 12px; margin-top: 1.8vw; color: white;">Adeleke Adekunle</p>
            </a>
        </div> -->
        <div class="main" style="padding-top:10px">
        <ul>
            <!-- <li><a  class="active" href="home.php">home</a></li> -->
            <!-- <li><a href="viewlogbook.php">Logbook</a></li>                     -->
            <!-- <li><a href="profile.php">Profile</a></li> -->
            <!-- <li><a href="signout.php">Sign out</a></li> -->
        </ul>
    </div>
    </header>
    
    <div class="home-wrap">
        <h2> Welcome</h2>
        <p style="font-style: oblique;">What would you like to do?</p>
        <div class="home-box">
            <a href="viewlogbook.php"> <button>Log Book</button></a>
            <a href="profile.php"><button>Profile</button></a>
            <a href="notif.php"><button>Notifications</button></a>
            <a href="https://www.nigerialng.com/Careers/Pages/SIWES-Training.aspx" style=""><button>About</button></a>
        </div>
        <a href="signout.php"><button class="logout">Logout</button></a>
    </div>
</body>

</html>