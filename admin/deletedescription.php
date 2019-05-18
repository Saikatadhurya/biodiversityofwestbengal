<?php
include('includes/connect.php');

$delete_id = $_GET['del'];
$delete_id = mysqli_real_escape_string($db, $delete_id);

$delete_query = "delete from sub4name where uniqueid = '$delete_id'";
if(mysqli_query($db,$delete_query))
{
	echo "<script>alert('Post Has Been Deleted..');</script>";
	echo "<script>window.open('index.php?editspecies=editspecies','_self')</script>";
}
?>