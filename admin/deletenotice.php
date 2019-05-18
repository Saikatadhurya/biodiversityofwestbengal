<?php
include('includes/connect.php');

$delete_id = $_GET['del'];
$delete_id = mysqli_real_escape_string($db, $delete_id);
$query =  mysqli_query($db, "select * from notice where id = '$delete_id'");
$row = mysqli_fetch_assoc($query);
$pdf = $row['pdf'];
unlink("../assets/pdf/$pdf");
$delete_query = "delete from notice where id = '$delete_id'";
if(mysqli_query($db,$delete_query))
{
	echo "<script>alert('Notice Has Been Deleted..');</script>";
	echo "<script>window.open('index.php?editnotice=editnotice','_self')</script>";
}
?>