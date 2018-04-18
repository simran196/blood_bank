<?php
	include_once('DBconnect.php');
	
class daoImpl extends DBconnect
{
	function insert($table,$abc)
	{
		$con=$this->DBconnection();
		$field="";
		$value="";
		$i=1;
		foreach($abc as $k=>$v)
		{
			if($i==1)
			{
				$field.=$k;
				$value.="'".$v."'";
			}
			else
			{
				$field.=", ".$k;
				$value.=", '".$v."'";
			}
			$i++;
		}
mysqli_query($con,"INSERT INTO $table ($field) VALUES ($value) ");
//echo "INSERT INTO $table ($field) VALUES ($value) ";
		return mysqli_insert_id($con);
	}

/*function select($table,$data='*',$where='')
 {
	 $con=$this->DBconnection();
		//$print_r($where+"checkkk");
	 if($where !='')
	 {
		 $where='where '.$where;
	 }
	 
		return mysqli_query($con,"select $data from $table $where"); 
 }*/
 
 
 function select($table, $data='*', $where='',$other='')
	{
        
		$con =$this->dbconnection();
		$i=0;
		if($where!='')
		{
			$where='where '.$where;
		}
		if($other!='')
		{
			$other=' and '.$other;
		}
			//echo "SELECT $data from $table $where $other";
		 return mysqli_query($con,"SELECT $data from $table $where $other");
		
	}
 
 function update($table,$value,$where)
 {
	 $con=$this->DBconnection();
	 
	 if(is_array($value))
	 {
		 $val="";
		 $i=0;
		 foreach($value as $k=>$v)
		 {
			 if($i==0)
			 {
				$val .=$k."='".$v."'";
				
			 }
			 else
			 {
				 $val .=", ".$k."='".$v."'";
				
			 }
			$i++;
		 }
		 
	 }
	 if($where!="")
	 {
		 $where='where '.$where;
	 }
	 echo "update $table set $val $where ";
	 return mysqli_query($con,"update $table set $val $where ");
 }
 
 function delete($table,$where)
	{
        $con =$this->DBConnection();
		if($where!= '')
		{
			$where='where '.$where;
		}
		echo"delete from $table $where";
		return mysqli_query($con,"delete from $table $where");
		
	}
}
?>