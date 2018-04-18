<?php

if(isset($_POST["bb_id"])){
	$output = "";
	$connect = mysqli_connect("localhost","root","","blood");
	$query = "select * from bloodbank_details where bb_id = '".$_POST['bb_id']."'";
	$result = mysqli_query($connect,$query) or die("MySQL error: " . mysqli_error($connect));
	$output.='
	
	<div class = "table-responsive">
		<table class = "table table-borderd">
		<thead>
			<tr>
				<td><label>Blood Group</label></td>
				<td><label>Number Of Units</label></td>
			</tr>
		</thead>
	<tbody>';
		while($row = mysqli_fetch_array($result))
		{
			$output.='
				<tr	>
					<td width="30%"><label>A+</label></td>
					<td width="70%">'.$row["A_positive"].' Unit</td>
				</tr>
				<tr	>
					<td width="30%"><label>A-</label></td>
					<td width="70%">'.$row["A_negative"].' Unit</td>
				</tr>
				<tr	>
					<td width="30%"><label>B+</label></td>
					<td width="70%">'.$row["B_positive"].' Unit</td>
				</tr>
				<tr	>
					<td width="30%"><label>B-</label></td>
					<td width="70%">'.$row["B_negative"].' Unit</td>
				</tr>
				<tr	>
					<td width="30%"><label>AB+</label></td>
					<td width="70%">'.$row["AB_positive"].' Unit</td>
				</tr>
				<tr	>
					<td width="30%"><label>AB-</label></td>
					<td width="70%">'.$row["AB_negative"].' Unit</td>
				</tr>
				<tr	>
					<td width="30%"><label>O+</label></td>
					<td width="70%">'.$row["O_positive"].' Unit</td>
				</tr>
				<tr	>
					<td width="30%"><label>O-</label></td>
					<td width="70%">'.$row["O_negative"].' Unit</td>
				</tr>
			';
		}
		$output.="</tbody></table></div>";
		echo $output;
		
	
}

?>