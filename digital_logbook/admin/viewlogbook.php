<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIWES Logbook</title>
    <link rel="stylesheet" href="main.css">
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
        <div style="font-size: 30px; color: white; height: 4vw; width: 9 vw; float: left; margin: 19px;">
            <a href="home.php" style="color: white;"> Supervisor Home</a>
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
            <li><a href="profile.php">Profile</a></li>                    
            <li><a href="intern.php">View Intern</a></li>
            <li><a href="signout.php">Sign out</a></li>
        </ul>
    </div>
    </header>
    <!-- <h1 style="margin-bottom: 0.3em; padding-left:;text-align: center;font-size:2.5em;">View Logbook</h1> -->
    <h1 style="margin-bottom: 0.3em; padding-left:3.3em;text-align: ;font-size:2.5em;">Logbook</h1>
   <div style="float:right; margin-right:8.3em; padding-top:0.15em; margin-top:-4em;" > <a href="comment.php"><button class="notes__add" style="width:10em">Comment</button></a></div><br>
    <div style="border:2px solid #dddddd; width:76.6em; margin: 0 auto">
    <?php
    include 'conn.php';
    $sql = "SELECT * FROM logentrydb";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        // if (strlen($row['logentry']) > 100) $str = substr($row['logentry'], 0, 100) . "...";
        ?>
    <form action="log-val.php" method="POST">
        <div class="notes" id="app">           
            <div class="notes__preview" style="border-bottom: 2px solid #dddddd; border-top:0; padding-top:10px; margin-right:em; margin; padding-left:1.5em">
                <input class="notes__title" type="text" name="entrydate" style="padding-left:0em;" readonly value= "<?php echo $row['entrydate']?>">
                <textarea class="notes__body" readonly name="logentry"><?php echo $row['logentry']?></textarea><br>
                <div class="notes__small-updated"><?php echo "Uploaded:&nbsp;" . $row['editdate']?></div>
            </div>
        </div>
    </form>
    <?php
        }
      }
    ?></div>
    </body>
</html>