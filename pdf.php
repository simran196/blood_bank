<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="assets/css/pdf.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
<script src ="jspdf/jspdf.js"></script>
<script src ="jspdf/html2canvas.js"></script>


</head>

<?php
include_once('DaoImpl.php');
$r = new DaoImpl();
$q = intval($_GET['id']-10085);
$t = $r->select('appointment_details','*','patient_id = '.$q.'');
while($o = mysqli_fetch_array($t))
{
	
?>

<body id="target">
<form method="POST" >
<input type="hidden" value="<?=$o['patient_id']?>" name="patient_id"/>
	<div class = "container">
		<div class = "header">
			<p><b>APPOINTMENT CONFIRMATION</b></p>
		</div>
<br/>
		<div class="head">
			<p><b>PATIENT DETAILS</b></p>
		</div>
		<div class="tab">
			<table>
				<tr>
					<td><label>Patient Name</label></td>
					<td class = "tdds">:</td>
					<td class = "tdd11"><label><?=$o['patient_name']?></label></td>
				</tr>
				<tr>
					<td><label>Contact Number</label></td>
					<td class = "tdds">:</td>
					<td class = "tdd11"><label><?=$o['patient_phn_no']?></label></td>
				</tr>	
				<tr>
					<td><label>Address</label></td>
					<td class = "tdds">:</td>
					<td class = "tdd11"><label><?=$o['patient_address']?></label></td>
				</tr>
				<tr>
					<td><label>Gender</label></td>
					<td class = "tdds">:</td>
					<td class = "tdd11"><label><?=$o['gender']?></label></td>
				</tr>
				<tr>
					<td><label>Email</label></td>
					<td class = "tdds">:</td>
					<td class = "tdd11"><label><?=$o['email']?></label></td>
				</tr>
			</table>
		</div>
<br/>
		<div class="head2">
			<p><b>BLOOD BANK DETAILS</b></p>
		</div>
		<div class="tab">
			<table>
				<tr>
					<td><label>Blood Bank Name</label></td>
					<td class = "tdd">:</td>
					<td class = "tdd1"><label><?=$o['bloodbank_name']?></label></td>
				</tr>
				<tr>
					<td><label>State</label></td>
					<td class = "tdd">:</td>
					<td class = "tdd1"><label><?=$o['state']?></label></td>
				</tr>	
				<tr>
					<td><label>District</label></td>
					<td class = "tdd">:</td>
					<td class = "tdd1"><label><?=$o['district']?></label></td>
				</tr>
				<tr>
					<td><label>Category</label></td>
					<td class = "tdd">:</td>
					<td class = "tdd1"><label><?=$o['category']?></label></td>
				</tr>
				<tr>
					<td><label>Address</label></td>
					<td class = "tdd">:</td>
					<td class = "tdd1"><label><?=$o['bloodbank_add']?></label></td>
				</tr>
				<tr>
					<td><label>Pincode</label></td>
					<td class = "tdd">:</td>
					<td class = "tdd1"><label><?=$o['pincode']?></label></td>
				</tr>
				<tr>
					<td><label>Contact Number</label></td>
					<td class = "tdd">:</td>
					<td class = "tdd1"><label><?=$o['bb_contact_no']?></label></td>
				</tr>
			</table>
		</div>
<br/>
		<div class="head3">
			<p><b>APPOINTMENT DETAILS</b></p>
		</div>
		<div class="tab">
			<table>
				<tr>
					<td><label>Blood Group</label></td>
					<td class = "tdda">:</td>
					<td class = "tdd12"><label><?=$o['blood_group']?></label></td>
				</tr>
				<tr>
					<td><label>Units Required</label></td>
					<td class = "tdda">:</td>
					<td class = "tdd12"><label><?=$o['unit_req']?></label></td>
				</tr>	
				<tr>
					<td><label>Appointment Date</label></td>
					<td class = "tdda">:</td>
					<td class = "tdd12"><label><?=$o['date']?></label></td>
				</tr>
				<tr>
					<td><label>Appointment Time</label></td>
					<td class = "tdda">:</td>
					<td class = "tdd12"><label><?=$o['time']?></label></td>
				</tr>
			</table>
<?php

}

?>
		</div>
<br/>
<br/>
<div id="editor"></div>
		<div class ="button">
			<input type = "button" class = "btn btn-primary" id="cmd" name = "cmd" value = "Confrim Appointment">
		</div>
	</div>
</form>
</body>
<script>
	$("#cmd").click(function(){
		html2canvas($(".container"), {
			onrendered: function(canvas) {         
				var imgData = canvas.toDataURL('image/png');              
				var imgWidth = 210; 
				var pageHeight = 195;  
				var imgHeight = (canvas.height * imgWidth / canvas.width);
				var heightLeft = imgHeight;

				var doc = new jsPDF('p', 'mm');
				var position = 20;

				doc.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
				heightLeft -= pageHeight;

				while (heightLeft >= 0) {
					position = heightLeft - imgHeight;
					doc.addPage();
					doc.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
					heightLeft = heightLeft-pageHeight;
				}
				doc.save('confirm_appointment.pdf')
			}
		});
	});
</script>
</html>

