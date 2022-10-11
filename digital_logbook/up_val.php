<?php 
include 'conn.php';

$userid = mysqli_real_escape_string($conn, $_POST['userid']);
$phoneNumber = mysqli_real_escape_string($conn, $_POST['phnumber']);
$faculty = mysqli_real_escape_string($conn, $_POST['faculty']);
$course = mysqli_real_escape_string($conn, $_POST['course']);
$clevel = mysqli_real_escape_string($conn, $_POST['clevel']);
$p_address = mysqli_real_escape_string($conn, $_POST['p_address']);
$sex = mysqli_real_escape_string($conn, $_POST['sex']);
$n_nok = mysqli_real_escape_string($conn, $_POST['n_nok']);
$n_ibs = mysqli_real_escape_string($conn, $_POST['n_ibs']);
$n_ubs = mysqli_real_escape_string($conn, $_POST['n_ubs']);


    // $sql = "INSERT INTO clr_students (comment) VALUES ('$faculty') WHERE userid = $userid";
    $sql = "UPDATE usertable SET phoneNumber = '$phoneNumber', faculty = '$faculty', course = '$course', level = '$clevel', p_address = '$p_address', sex = '$sex', n_nok = '$n_nok', n_ibs = '$n_ibs', n_ubs = '$n_ubs' WHERE userid = $userid";
    if(mysqli_query($conn, $sql)){

        header('location: profile.php');
        // echo "Upload Successful.";

    }else{

        echo "ERROR: Something went wrong $sql." . mysqli_error($conn);
        echo "<p> Something Went Wrong!</p><a href='update_profile.php'>Go Back</a> ";
    }

    mysqli_close($conn);

?>

