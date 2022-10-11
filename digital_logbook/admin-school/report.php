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
        <div class="main" style="padding-top:10px">
        <ul>
            <li><a  class="active" href="home.php">home</a></li> 
            <li><a href="profile.php">Profile</a></li>                    
            <li><a href="intern.php">View Intern</a></li>
            <li><a href="signout.php">Sign out</a></li>
        </ul>
    </div>
    </header>
    <h1 style="margin-bottom: 0.3em; padding-left:;text-align: center;font-size:2.5em;">Report</h1>
    <button onclick="history.back()" style="background-color: rgb(255, 0, 0);  cursor: pointer; border-radius: 10px; padding: 3px; margin-left:23vw; width: 5vw; height: 2vw; color:white;">Back</button>
    <!-- <form> -->
        <div class="notes" id="app" style="margin-left: 20%;">
            <!-- <div class="notes__sidebar">
            </div>  -->
            <div class="notes__preview" style="">
                <input class="notes__title" type="text" name="week" placeholder="Subject " style="width: 76.5%; margin-bottom:0; padding: 0.5em 0 0.5em 0.5em; border: 1px solid black; font-size: 1.5em">
                <textarea class="notes__body" name="comment" placeholder="What are you reporting?" style="height:15em; width:74%; border: 1px solid black; padding: 1em 1em; margin-bottom:0"></textarea>
            </div>
        </div>
       <a href="home.php"><div style="margin: 0 auto; width: 25em"> <button class="notes__add">Send</button></div></a>
    <!-- </form> -->
    </div>
    </body>
</html>