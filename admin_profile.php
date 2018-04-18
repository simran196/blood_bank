<?php
include_once('admin_page_header.php');
?>

<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="admin_page_sidebar.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <!--<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>-->
          </a>
        </li>
        <li>
			<a href="admin_contact_details.php">
				<i class="fa fa-th"></i> <span>Contact Mesage</span>
					<span class="pull-right-container">
						<!--<small class="label pull-right bg-green">new</small>-->
					</span>
			</a>
        </li>
        <li>
          <a href="admin_bloodbank_details.php">
            <i class="fa fa-edit"></i>
            <span>Blood Bank</span>
          </a>
        </li>
        <li>
            <a href="admin_appointment_details.php">
            <i class="fa fa-laptop"></i> <span>Appointment Details</span>
          </a>
        </li>
  </aside>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!--<h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>-->
     
    </section>
<?php
include_once('DaoImpl.php');
?>
<script>
function update(admin_id)
{
		window.location.href="admin_update.php?admin_id="+admin_id;
}

function del(admin_id)
{
	var confirmValue = confirm("do you want to delete ??");
	console.log(confirmValue)
	
	if(confirmValue)
	{
		console.log("callajax")
		 $.ajax({
			 type:'post',
			 url:'delete_admin.php',
			 data:{admin_id:admin_id},
			 success:function(data){
				//$('#delete'+bb_id).hide();
				window.location.reload();				
			 }
		 });
	}
}
</script>
    <!-- Main content -->
    <section class="content">
<form method="POST" action="control.php" >
<div>
<table  class="table table-bordered" style="width:80%;">
  <tr class= "th">
    <th>SR NO.</th>
    <th>FIRST NAME</th> 
    <th>LAST NAME</th>
	<th>USERNAME</th>
	<th>PASSWORD</th>
	<th>EMAIL</th>
	<th>EDIT</th>
	<th>REMOVE</th>
  </tr>
<?php
$r = new DaoImpl();
$a = $r->select('admin_info');
$p=0;
while($o = mysqli_fetch_array($a))
{
$p++;
?>
<tr>
<td>
<?=$p?>
</td>
<td>
<?=$o['first_name']?>
</td>
<td>
<?=$o['last_name']?>
</td>
<td>
<?=$o['username']?>
</td>
<td>
<?=$o['password']?>
</td>
<td>
<?=$o['email']?>
</td>
<td onclick="update(<?=$o['admin_id']?>)">
<i class="fa fa-edit"></i>
</td>
<td onclick="del(<?=$o['admin_id']?>)" name="del" id="delete">
<i class="fa fa-remove"></i>
</td>
</tr>
<?php
}
?>
</table>

</form>


    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
<?php
include_once('admin_page_footer.php');
?>