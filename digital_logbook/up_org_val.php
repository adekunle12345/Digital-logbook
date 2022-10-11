<?php 
include 'conn.php';

$userid = mysqli_real_escape_string($conn, $_POST['userid']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$phoneNumber = mysqli_real_escape_string($conn, $_POST['phnumber']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$tob = mysqli_real_escape_string($conn, $_POST['tob']);
$products = mysqli_real_escape_string($conn, $_POST['products']);
$jobs = mysqli_real_escape_string($conn, $_POST['jobs']);
$employees = mysqli_real_escape_string($conn, $_POST['employees']);
$capital = mysqli_real_escape_string($conn, $_POST['capital']);
$info = mysqli_real_escape_string($conn, $_POST['info']);


    // $sql = "INSERT INTO clr_students (comment) VALUES ('$location') WHERE userid = $userid";
    // $sql = "UPDATE org_dt SET name = '$name', phnumber = '$phoneNumber', location = '$location',  address = '$address', tob = '$tob', jobs = '$jobs', products = '$products', employees = '$employees', capital = '$capital', info = '$info' WHERE uid = $userid";
    $sql = "INSERT INTO org_dt (name, phnumber, location, address, tob, jobs, products, employees, capital, info, uid) VALUES ('$name', '$phoneNumber',' $location', '$address', '$tob',' $jobs', '$products', '$employees', '$capital', '$info', '$userid')"; 
    if(mysqli_query($conn, $sql)){

        header('location: org-profile.php');
        // echo "Upload Successful.";

    }else{

        echo "ERROR: Something went wrong $sql." . mysqli_error($conn);
        echo "<p> Something Went Wrong!</p><a href='update_org.php'>Go Back</a> ";
    }

    mysqli_close($conn);

?>

