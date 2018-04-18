<?php
$connect = mysqli_connect("localhost", "root", "", "blood");
$sql="DELETE FROM bloodbank_details where bb_id='".$_POST["bb_id"]."'";
if (mysqli_query($connect, $sql))
{
	echo 'data deleted';
}



?>