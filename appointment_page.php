
<!DOCTYPE HTML>
<html>
<head>
<title>Medical Appointment Form a Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medical Appointment Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="assets/css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link href="assets/css/style1.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
<!--background-->
<h1> Medical Appointment Form </h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Make an appointment</h2>

<?php
include_once('DaoImpl.php');
$r = new DaoImpl();
$t = $r->select('bloodbank_details','*','bb_id = '.$_GET['bb_id'].'');
while($o = mysqli_fetch_array($t))
{
	
?>
			<form action="Control.php" method="post">
<input type="hidden" value="<?=$o['bb_id']?>" name="patient_id"/>
			<div class="left-agileits-w3layouts same">
			<div class="gaps">
				<p>Patient Name</p>
					<input type="text" name="patient_name" placeholder="" required=""/>
			</div>	
				<div class="gaps">	
				<p>Phone Number</p>
					<input type="text" name="patient_phn_no" placeholder="" required=""/>
				</div>
			<div class="gaps">	
				<p>Patient Address</p>
					<input type="text" name="patient_address" placeholder="" required=""/>
			</div>
	
				<div class="gaps">
				<p>Email</p>
						<input type="email" name="email" placeholder="" required="" />
				</div>
				<div class="gaps">
					<p>Gender</p>	
						<select name="gender" class="form-control">
							<option></option>
							<option>Male</option>
							<option>Female</option>
						</select>
				</div>
				
				<div class="gaps">	
				<p>Blood Bank Name</p>
					<input type="text" name="bloodbank_name" value="<?=$o['bloodbank_name']?>" placeholder="" required=""/>
				</div>
				
				<div class="gaps">	
				<p>State</p>
					<input type="text" name="state" value="<?=$o['state']?>" placeholder="" required=""/>
				</div>
				
				<div class="gaps">	
				<p>District</p>
					<input type="text" name="district" value="<?=$o['district']?>" placeholder="" required=""/>
				</div>
				
			</div>
			<div class="right-agileinfo same">

			<div class="gaps">	
				<p>Category</p>
					<input type="text" name="category" value="<?=$o['category']?>" placeholder="" required=""/>
				</div>

			
			<div class="gaps">	
				<p>Blood Bank Address</p>
					<input type="text" name="bloodbank_add" value="<?=$o['address']?>" placeholder="" required=""/>
				</div>
			
			<div class="gaps">	
				<p>Pincode</p>
					<input type="text" name="pincode" value="<?=$o['pincode']?>" placeholder="" required=""/>
				</div>
				
				<div class="gaps">	
				<p>Blood Bank Contact No.</p>
					<input type="text" name="bb_contact_no" value="<?=$o['contact_no']?>" placeholder="" required=""/>
				</div>
				
			
			<div class="gaps">
				<p>Blood Group</p>	
					<select name="blood_group" class="form-control">
						<option></option>
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
						<option>AB+</option>
						<option>AB-</option>
						<option>O+</option>
						<option>O-</option>
						
					</select>
			</div>
			
			<div class="gaps">
				<p>Unit Required</p>	
					<select name="unit_req" class="form-control">
						<option></option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
						<option>13</option>
						<option>14</option>
						<option>15</option>
					</select>
			</div>
			
			<div class="gaps">
				<p>Select Date</p>		
						<input  id="datepicker1" name="date" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
			</div>
				
			<div class="gaps">
				<p>Time</p>		
					<input type="text" id="timepicker" name="time" class="timepicker form-control" value="">	
			</div>
			</div>
			<div class="clear"></div>
						  <input type="submit"  name = "appointment" value="Make an appointment">
			</form>
<?php
}
?>
		</div>
   </div>
   <!--copyright-->
			<!--<div class="copy w3ls">
		       <p>&copy; 2017. Medical Appointment Form . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        </div>-->
		<!--//copyright-->
		<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="assets/js/wickedpicker.js"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>
		<!-- Calendar -->
				<link rel="stylesheet" href="assets/css/jquery-ui.css" />
				<script src="assets/js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
<script>
</>

</body>
</html>