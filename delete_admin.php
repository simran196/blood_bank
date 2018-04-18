<?php
$connect = mysqli_connect("localhost", "root", "", "blood");
$sql="DELETE FROM admin_info where admin_id='".$_POST["admin_id"]."'";
if (mysqli_query($connect, $sql))
{
	echo 'data deleted';
}



?>