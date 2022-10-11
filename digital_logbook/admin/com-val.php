<?php 
include 'conn.php';

$week = "";
$comment = "";

$week = mysqli_real_escape_string($conn, $_POST['week']);
$comment = mysqli_real_escape_string($conn, $_POST['comment']);
$editdate = date("y-m-d H");
// $uid = "SELECT * FROM usertable WHERE userid = "

$sql = "INSERT INTO industry_db (week, comment, editdate, user) VALUES('$week', '$comment', '$editdate', 'usertable.name')";

if(mysqli_query($conn, $sql)){
	header('location: viewlogbook.php');
    echo "Upload Successful.";

}else{
    echo "ERROR: Something went wrong $sql." . mysqli_error($conn);
}

mysqli_close($conn);

?>


