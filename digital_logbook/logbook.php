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
    <h1 style="margin-bottom: 20px; text-align: center;">Add Entry</h1>
    <form action="log-val.php" method="POST">
        <div class="notes" id="app" style="margin-left: 20%;">
            <!-- <div class="notes__sidebar">
            </div>  -->
            <div class="notes__preview" style="">
                <input class="notes__title" type="text" name="entrydate" placeholder="Date (Monday, 23rd July 2022) " style="width: 78%; margin-bottom:0; padding: 0.5em 0 0.5em 0.5em; border: 1px solid black; font-size: 1.5em">
                <textarea class="notes__body" name="logentry" placeholder="Description of Work Done" style="height:21em; width:75%; border: 1px solid black; padding: 1em 1em; margin-bottom:0"></textarea>
            </div>
        </div>
       <div style="margin: 0 auto; width: 20em"> <button class="notes__add" type="submit" value="submit">Upload</button></div>
    </form>
    <!-- <script src="./js/main.js" type="module"></script>3 -->
</body>

</html>