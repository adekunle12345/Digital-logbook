<?php
include 'conn.php';
// $name = $_POST["user"];
// $pass = $_POST["pwd"];
// $cnpass = $_POST["cnpwd"];
// $phnumber = $_POST["phnumber"];
// // if($name =="" || $pass == "" || $cnpass ==""|| $phnumber==""){
// //     header('location:signup.php');
// // }
// // else{
// //     if($pass != $cnpass)
// //     {
// //     header('location:signup.php');
// //     echo "Passwords dont match!";
// //     }
// // }

// $sql = "select * from usertable where name= '$name'";
// $result = mysqli_query($conn,$sql);

// $num = mysqli_num_rows($result);
// if($num> 0){
//     echo"Matriculation number already in use<br>";
//     echo "<p>Already registered? <a href='login.php'>Login</a></p>";
// }
// else{
//     $reg = " insert into usertable (name , password) values ('$name','$pass')";
//     $validquery=mysqli_query($conn,$reg);
//     $_SESSION['name'] = $name;
//     $_SESSION['fname'] = $fname;
//     $_SESSION['phnumber'] = $phnumber;
//     if($validquery==1){
//         header('location:home.php');
//     }
   

// }

// ?>

<?php 
$id = "";
$fname = "";
$name = "";
$pwd = "";

$userid = mysqli_real_escape_string($conn, $_POST['userid']);
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$name = mysqli_real_escape_string($conn, $_POST['user']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
$phoneNumber = mysqli_real_escape_string($conn, $_POST['phnumber']);
// $department = mysqli_real_escape_string($conn, $_POST['department']);

$sql = "INSERT INTO usertable (userid, fname, name, password, phoneNumber) VALUES('$userid','$fname', '$name','$pwd', '$phoneNumber')";

if(mysqli_query($conn, $sql)){

	header('location: login.php');
    // echo "Upload Successful.";

}else{
    echo "ERROR: Something went wrong $sql." . mysqli_error($conn);
}

mysqli_close($conn);


?>