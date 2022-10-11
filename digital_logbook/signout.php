<?php
session_destroy();
header('location:index.html');
?>



<td>'.$row["name"].'</td>
                    <td>'.$row["department_due"].'</td>
                    <td>'.$row["clinic"].'</td>
                    <td>'.$row["bursary"].'</td>
                    <td>'.$row["library"].'</td>
                    <td>'.$row["sport"].'</td>
                    <td>'.$row["hostel"].'</td>
                    <td>'.$row["security"].'</td>
                    <td>'.$row["alumni"].'</td>


                    Name:  '.$row["fname"].'<br><br>
        	Matric: '.$row["name"].'<br><br>
            Department: '.$row["department"].'<br><br>
            Phone Number: '.$row["phoneNumber"].'<br><br>