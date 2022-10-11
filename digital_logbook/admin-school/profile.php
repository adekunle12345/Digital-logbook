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
        <div class="home-wrap" style="margin-top: 5px;">
        <button onclick="history.back()" style="background-color: rgb(255, 0, 0);  cursor: pointer; float: left; border-radius: 10px; padding: 3px; margin-right:-4vw; width: 4vw;">Back</button>
        <h2>Profile</h2>
        <div class="table-box">
            <table>
                <tr>
                    <td style="border-top: none;">&nbsp;</td>
                    <td style="border-top: none;">&nbsp;</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>Mr. Olayemi Okeke</td>
                </tr>
                </tr>
                <tr>
                    <td>Department</td>
                    <td>HR</td>
                </tr>
                <tr>
                    <td>Permarnent Home Address</td>
                    <td>Lorem 123, Ipsum street, Abuja.</td>
                </tr>
                <tr>
                    <td>Sex</td>
                    <td>Male</td>
                </tr>
                <tr>
                    <td style="border-bottom: none; margin-bottom: 10px;">&nbsp;</td>
                    <td style="border-bottom: none; margin-bottom: 10px;">&nbsp;</td>
                </tr>
            </table>

        </div>
    </div>
</body>

</html>