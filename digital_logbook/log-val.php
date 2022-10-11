<?php 
include 'conn.php';

$entrydate = "";
$logentry = "";

$entrydate = mysqli_real_escape_string($conn, $_POST['entrydate']);
$logentry = mysqli_real_escape_string($conn, $_POST['logentry']);
$editdate = date("y-m-d H");
// $uid = "SELECT * FROM usertable WHERE userid = "

$sql = "INSERT INTO logentrydb (entrydate, logentry, editdate, user) VALUES('$entrydate', '$logentry', '$editdate', 'usertable.name')";

if(mysqli_query($conn, $sql)){
	header('location: viewlogbook.php');
    echo "Upload Successful.";

}else{
    echo "ERROR: Something went wrong $sql." . mysqli_error($conn);
}

mysqli_close($conn);

?>


