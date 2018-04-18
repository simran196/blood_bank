<?php

if(isset($_POST["bb_id"])){
	$output = "";
	$connect = mysqli_connect("localhost","root","","blood");
	$query = "select * from bloodbank_details where bb_id = '".$_POST['bb_id']."'";
	$result = mysqli_query($connect,$query) or die("MySQL error: " . mysqli_error($connect));
	$output.='
	
	<div class = "table-responsive">
		<table class = "table table-borderd">';
		
		while($row = mysqli_fetch_array($result))
		{
			$output.='
				<tr	>
					<td width="30%"><label>Blood Bank Name</label></td>
					<td width="70%">'.$row["bloodbank_name"].'</td>
				</tr>
				<tr	>
					<td width="30%"><label>State</label></td>
					<td width="70%">'.$row["state"].'</td>
				</tr>
				<tr	>
					<td width="30%"><label>District</label></td>
					<td width="70%">'.$row["district"].'</td>
				</tr>
				<tr	>
					<td width="30%"><label>Address</label></td>
					<td width="70%">'.$row["address"].'</td>
				</tr>
				<tr	>
					<td width="30%"><label>Pin code</label></td>
					<td width="70%">'.$row["pincode"].'</td>
				</tr>
				<tr	>
					<td width="30%"><label>Contact No.</label></td>
					<td width="70%">'.$row["contact_no"].'</td>
				</tr>
				<tr	>
					<td width="30%"><label>Email</label></td>
					<td width="70%">'.$row["email"].'</td>
				</tr>
				<tr	>
					<td width="30%"><label>Category</label></td>
					<td width="70%">'.$row["category"].'</td>
				</tr>
			';
		}
		$output.="</table></div>";
		echo $output;
		
	
}

?>