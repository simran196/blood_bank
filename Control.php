<?php
include_once('model.php');
$a=new model();

if(isset($_POST['appointment']))
{
	extract($_POST);
//$data = date('Y-m-d H:i:s');
//$time = time('H:i:s');
	//$last_id = mysqli_insert_id($con);
	$arg=array('patient_name'=>$patient_name,'patient_phn_no'=>$patient_phn_no,'patient_address'=>$patient_address,'email'=>$email,'gender'=>$gender,
'bloodbank_name'=>$bloodbank_name,'state'=>$state,'district'=>$district,'category'=>$category,'bloodbank_add'=>$bloodbank_add,'pincode'=>$pincode,
'bb_contact_no'=>$bb_contact_no,'blood_group'=>$blood_group,'unit_req'=>$unit_req,'date'=>$date,'time'=>$time);
	
	$b= $a->insertData_appointment($arg);
	//print_r($b);
	if($b>0)
	{
		$b = $b+10085;
		//echo  "success".mysqli_insert_id($con);
		header("Location:pdf.php?id=$b");
	}
	else
	{
		echo"error";
		//echo "error inserting data";
	}
}

if(isset($_POST['add_bb']))
{
	extract($_POST);
//$data = date('Y-m-d H:i:s');
//$time = time('H:i:s');
	//$last_id = mysqli_insert_id($con);
	$arg=array('bloodbank_name'=>$bloodbank_name,'state'=>$state,'district'=>$district,'address'=>$address,'pincode'=>$pincode,
'contact_no'=>$contact_no,'email'=>$email,'category'=>$category,'A_positive'=>$A_positive,'A_negative'=>$A_negative,
'B_positive'=>$B_positive,'B_negative'=>$B_negative,'AB_positive'=>$AB_positive,'AB_negative'=>$AB_negative,
'O_positive'=>$O_positive,'O_negative'=>$O_negative);
	
	$b= $a->insertData_bloodbank($arg);
	//print_r($b);
	if($b>0)
	{
		$b = $b+10085;
		//echo  "success".mysqli_insert_id($con);
		header("Location:admin_bloodbank_details.php");
	}
	else
	{
		echo"error";
		//echo "error inserting data";
	}
}


if(isset($_POST['send_msg']))
{
	
	extract($_POST);
	
	$arg=array('name'=>$name,'email'=>$email,'phn_no'=>$phn_no,'message'=>$message);
	
	$b=$a->insertData_contact($arg);
	
	if($b>0)
	{
		//echo"success";
		header('location:main.php');
	}
	else
	{
		echo "error inserting data";
	}
}

if(isset($_POST['updatebb']))
{
	extract($_POST);
$arg=array('bloodbank_name'=>$bloodbank_name,'state'=>$state,'district'=>$district,'address'=>$address,'pincode'=>$pincode,
'contact_no'=>$contact_no,'email'=>$email,'category'=>$category,'A_positive'=>$A_positive,'A_negative'=>$A_negative,
'B_positive'=>$B_positive,'B_negative'=>$B_negative,'AB_positive'=>$AB_positive,'AB_negative'=>$AB_negative,
'O_positive'=>$O_positive,'O_negative'=>$O_negative);

	$b=$a->updateData_bloodbank($arg,$bb_id);
	//print_r($b);
	if($b>0)
	{
		$b = $b+10085;	
		//echo"success";
		header("location:admin_bloodbank_details.php");
	}
	else
	{
		echo"error";
		//header("location:update_stud.php");
	}
}


if(isset($_POST['cancel']))
{
	header('location:admin_bloodbank_details.php');
}

if(isset($_POST['update_admin']))
{
	extract($_POST);
$arg=array('first_name'=>$first_name,'last_name'=>$last_name,'username'=>$username,'password'=>$password,'email'=>$email);

	$b=$a->updateData_admin($arg,$admin_id);
	//print_r($b);
	if($b>0)
	{
		$b = $b+10085;	
		//echo"success";
		header("location:admin_profile.php");
	}
	else
	{
		echo"error";
		//header("location:update_stud.php");
	}
}

if(isset($_POST['canceladmin']))
{
	header('location:admin_profile.php');
}


?>