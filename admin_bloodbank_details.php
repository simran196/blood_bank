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
				<i class="fa fa-th"></i> <span>Contact Message</span>
					<span class="pull-right-container">
						<!--<small class="label pull-right bg-green">new</small>-->
					</span>
			</a>
        </li>
        <li>
          <a href="admin_bloodbank_details.php">
            <i class="fa fa-laptop"></i>
            <span>Blood Bank</span>
            <!--<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>-->
          </a>
        </li>
        <li>
          <a href="admin_appointment_details.php">
            <i class="fa fa-laptop"></i> <span>Appointment Details</span>
          </a>
        </li>
	</ul>
  </aside>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!--<h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>-->
    <div class="add">
        <a href="admin_add_bloodbank.php" >
            <i class="fa fa-plus"></i> <span>Add Blood Bank</span>
          </a>
	</div>
    </section>
	<br/>
<?php
include_once('DaoImpl.php');
?>
<script>
function update(bb_id)
{
		window.location.href="admin_bloodbank_update.php?bb_id="+bb_id;
}

function del(bb_id)
{
	var confirmValue = confirm("do you want to delete ??");
	console.log(confirmValue)
	
	if(confirmValue)
	{
		console.log("callajax")
		 $.ajax({
			 type:'post',
			 url:'delete.php',
			 data:{bb_id:bb_id},
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
		<table  class="table table-bordered" style="width:100%;">
  <tr class= "th">
    <th>SR NO.</th>
    <th>BLOOD BANK NAME</th> 
    <th>STATE</th>
	<th>DISTRICT</th>
	<th>ADDRESS</th>
    <th>PINCODE</th>
    <th>CONTACT NO.</th> 
    <th>EMAIL</th>
	<th>CATEGORY</th>
	<th>A+</th>
    <th>A-.</th>
    <th>B+</th> 
    <th>B-</th>
	<th>AB+</th>
	<th>AB-</th>
	<th>O-</th>
	<th>O+</th>
	<th>EDIT</th>
	<th>REMOVE</th>
  </tr>
 <?php
$r = new DaoImpl();
$a = $r->select('bloodbank_details');
$p=0;

while($o = mysqli_fetch_array($a))
{ 
$p++;
?>
<tr>

<td>
<?=$p?>
</td>
<td style="width:10%;">
<?=$o['bloodbank_name']?>
</td>
<td>
<?=$o['state']?>
</td>
<td style="width:10%;">
<?=$o['district']?>
</td>
<td style="width:15%;">
<?=$o['address']?>
</td>
<td>
<?=$o['pincode']?>
</td>
<td>
<?=$o['contact_no']?>
</td>
<td style="width:10%;">
<?=$o['email']?>
</td>
<td>
<?=$o['category']?>
</td>
<td>
<?=$o['A_positive']?>
</td>
<td>
<?=$o['A_negative']?>
</td>
<td>
<?=$o['B_positive']?>
</td>
<td>
<?=$o['B_negative']?>
</td>
<td>
<?=$o['AB_positive']?>
</td>
<td>
<?=$o['AB_negative']?>
</td>
<td>
<?=$o['O_positive']?>
</td>
<td>
<?=$o['O_negative']?>
</td>
<td onclick="update(<?=$o['bb_id']?>)">
<i class="fa fa-edit"></i>
</td>
<td onclick="del(<?=$o['bb_id']?>)" name="del" id="delete">
<i class="fa fa-remove"></i>
</td>
</tr>

<?php
}
?>
</table>
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
<?php
include_once('admin_page_footer.php');
?>