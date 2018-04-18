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
	<br/>
<?php
include_once('DaoImpl.php');
?>
    <!-- Main content -->
    <section class="content">
		<table  class="table table-bordered" style="width:100%;">
  <tr class= "th">
    <th>SR NO.</th>
    <th>PATIENT NAME</th> 
    <th>PATIENT PHONE NO.</th>
	<th>PATIENT ADDRESS</th>
	<th>EMAIL</th>
    <th>GENDER</th>
    <th>BLOODBANK NAME</th> 
    <th>STATE</th>
	<th>DISTRICT</th>
	<th>CATEGORY</th>
    <th>BLOODBANK ADDRESS</th>
    <th>PINCODE</th> 
    <th>BLOODBANK CONTACT NO.</th>
	<th>BLOOD GROUP</th>
	<th>UNIT REQUIRED</th>
	<th>DATE</th>
	<th>TIME</th>
  </tr>
 <?php
$r = new DaoImpl();
$a = $r->select('appointment_details');
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
<?=$o['patient_name']?>
</td>
<td>
<?=$o['patient_phn_no']?>
</td>
<td>
<?=$o['patient_address']?>
</td>
<td>
<?=$o['email']?>
</td>
<td>
<?=$o['gender']?>
</td>
<td>
<?=$o['bloodbank_name']?>
</td>
<td>
<?=$o['state']?>
</td>
<td>
<?=$o['district']?>
</td>
<td>
<?=$o['category']?>
</td>
<td>
<?=$o['bloodbank_add']?>
</td>
<td>
<?=$o['pincode']?>
</td>
<td>
<?=$o['bb_contact_no']?>
</td>
<td>
<?=$o['blood_group']?>
</td>
<td>
<?=$o['unit_req']?>
</td>
<td>
<?=$o['date']?>
</td>
<td>
<?=$o['time']?>
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