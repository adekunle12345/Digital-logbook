<?php
// include 'conn.php';
// session_start();
// $name = $_POST["user"];
// $pass = $_POST["pwd"];
// $sql = "select * from usertable where name= '$name' && password = '$pass'";
// $result = mysqli_query($conn,$sql);
// $rowNum = mysqli_num_rows($result);

// if($rowNum == 1){
    
//     $_SESSION['userName'] = $name;
//     header('location:home.php');
    
// }
// else{
//     header('location:login.php');
// }


include 'conn.php';
session_start();
// $userid = $_POST["userid"];
$name = $_POST["user"];
$pass = $_POST["pwd"];
$sql = "select * from usertable where name= '$name' && password = '$pass'";
// $sql = "select name, pass from usertable where name like '$name' and password like '$pass';";
$result = mysqli_query($conn,$sql);
$rowNum = mysqli_num_rows($result);


if($rowNum > 0){
    $row = mysqli_fetch_assoc($result);
    $name = $row["name"];
    $user_id = $row['userid'];
    $_SESSION['userid'] = $user_id;
    echo $user_id;
    echo "Welcome: ". $user_id ;
    header('location:home.php');
}
else{
    header('location:login.php');
}

?>