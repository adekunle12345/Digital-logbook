<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIWES Logbook</title>
    <link rel="stylesheet" href="main.css">
    
    <style>
  html,
        body {
            height: 100%;
            margin: 0 auto;
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

        .notes__title{
            font-size: 2em;
            padding-top: 0.8em;
            margin-left: 0.5em;

        }

        .notes__small-updated {
            color: #aaaaaa;
            font-style: italic;
            text-align: right;
            font-size: 14px;
        }

        .notes__body{
            width: 60em;
            height: 1.5em;
            margin-top: 1em;
            resize: none;
            margin-left: 0.5em;
            /* border-bottom: 1px solid black; */
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
            <li><a  class="active" href="home.php">home</a></li>
            <li><a href="viewlogbook.php">Logbook</a></li>                    
            <li><a href="profile.php">Profile</a></li>
            <li><a href="signout.php">Sign out</a></li>
        </ul>
    </div>
    </header>
    <h1 style="margin-bottom: 0.3em; padding-left:;text-align: center;font-size:2.5em;">Notifications</h1>
    <div style="border:2px solid #dddddd; width:76.6em; margin: 0 auto">
    <?php
    include 'conn.php';
    $sql = "(SELECT * FROM industry_db)";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        // if (strlen($row['logentry']) > 100) $str = substr($row['logentry'], 0, 100) . "...";
        ?>
    <form action="" method="POST">
        <div class="notes" id="app">           
            <div class="notes__preview" style="border-bottom: 2px solid #dddddd; border-top:0; padding-top:10px; margin-right:10em; margin; padding-left:1.5em">
            <h3>Industry Supervisor left a comment:</h3>
                <input class="notes__title" style="margin-bottom:0em; font-size: 1em" readonly value= "<?php echo "[ " .$row['week']. " ]"?>">
                <textarea class="notes__body" readonly name="logentry"><?php echo $row['comment']?></textarea><br>
                <div class="notes__small-updated"><?php echo "" . $row['editdate']?></div>
            </div>
        </div>
    </form>
    <?php
        }
      }
    ?>
    <?php
    include 'conn.php';
    $sql = "(SELECT * FROM school_db)";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        // if (strlen($row['logentry']) > 100) $str = substr($row['logentry'], 0, 100) . "...";
        ?>
    <form action="" method="POST">
        <div class="notes" id="app">           
            <div class="notes__preview" style="border-bottom: 2px solid #dddddd; border-top:0; padding-top:10px; margin-right:10em; margin; padding-left:1.5em">
                <h3>Institution Supervisor left a comment:</h3>
                <input class="notes__title" style="margin-bottom:0em; font-size: 1em" readonly value= "<?php echo "[ " .$row['s_week']. " ]"?>">
                <textarea class="notes__body" readonly name="logentry"><?php echo $row['s_comment']?></textarea><br>
                <div class="notes__small-updated"><?php echo "" . $row['s_editdate']?></div>
            </div>
        </div>
      </form>
        <?php
        }
      }
    ?></div>
    </body>
</html>