<?php
	include_once('daoImpl.php');
	
	class model extends daoImpl
	{
		function insertData_appointment($arg)
		{
			$a= $this->insert('appointment_details',$arg);
//print_r($arg);
			return $a; 
		}
		
		function insertData_contact($arg)
		{
			$a=$this->insert('contact',$arg);
			return $a;
		}

		function insertData_bloodbank($arg)
		{
			$a=$this->insert('bloodbank_details',$arg);
			return $a;
		}
		
		function updateData_bloodbank($arg,$bb_id)
		{
			$a=$this->update('bloodbank_details',$arg,'bb_id='.$bb_id.'');
			return $a;
		}
		
		function updateData_admin($arg,$admin_id)
		{
			$a=$this->update('admin_info',$arg,'admin_id='.$admin_id.'');
			return $a;
		}
		
	}
?>