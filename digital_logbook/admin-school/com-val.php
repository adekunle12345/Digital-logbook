<?php 
include 'conn.php';

$week = "";
$comment = "";

$week = mysqli_real_escape_string($conn, $_POST['s_week']);
$comment = mysqli_real_escape_string($conn, $_POST['s_comment']);
$editdate = date("y-m-d H");
// $uid = "SELECT * FROM usertable WHERE userid = "

$sql = "INSERT INTO school_db (s_week, s_comment, s_editdate, user) VALUES('$week', '$comment', '$editdate', 'usertable.name')";

if(mysqli_query($conn, $sql)){
	header('location: viewlogbook.php');
    echo "Upload Successful.";

}else{
    echo "ERROR: Something went wrong $sql." . mysqli_error($conn);
}

mysqli_close($conn);

?>


