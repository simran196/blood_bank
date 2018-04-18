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
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <!--<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>-->
          </a>
        </li>
        <li>
			<a href="#">
				<i class="fa fa-th"></i> <span>Users</span>
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
 
    <!-- Main content -->
    <section class="content">
		<?php
include_once('DaoImpl.php');
$r = new DaoImpl();
$t = $r->select('bloodbank_details','*','bb_id = '.$_GET['bb_id'].'');
while($o = mysqli_fetch_array($t))
{
	
?>
	
<form method="POST" action="control.php" class="filed">
<div class = "left-agileinfo-same">
	<div >
		<input type="hidden" value="<?=$o['bb_id']?>" name="bb_id"/>
	</div>
	<div >
		<b>BLOOD BANK NAME:</b><br/><input class="inputvalues" type="text" value="<?=$o['bloodbank_name']?>" name="bloodbank_name"  required=""/>
	</div>
	<div>
		<b>STATE:</b><br/><input class="inputvalues" type="text" value="<?=$o['state']?>" name="state"  required=""/>
	</div>
	<div>
		<b>DISTRICT:</b><br/><input class="inputvalues" type="text" value="<?=$o['district']?>" name="district"  required=""/>
	</div>
	<div>
		<b>ADDRESS:</b><br/><input class="inputvalues" type="text" value="<?=$o['address']?>" name="address"  required=""/>
	</div>
	<div>
		<b>PINCODE:</b><br/><input class="inputvalues" type="text" value="<?=$o['pincode']?>" name="pincode"  required=""/>
	</div>
    <div>
		<b>CONTACT NO.:</b><br/><input class="inputvalues" type="text" value="<?=$o['contact_no']?>" name="contact_no"  required=""/>
	</div>
    <div>
		<b>EMAIL:</b><br/><input class="inputvalues" type="text" value="<?=$o['email']?>" name="email"  required=""/>
	</div>
    <div>
		<b>CATEGORY:</b><br/><input class="inputvalues" type="text" value="<?=$o['category']?>" name="category"  required=""/>
	</div>
</div>
<div class="right-agileinfo-same">
    <div>
		<b>A+:</b><br/><input class="inputvalues" type="text" value="<?=$o['A_positive']?>" name="A_positive"  required=""/>
	</div>
    <div>
		<b>A-:</b><br/><input class="inputvalues" type="text" value="<?=$o['A_negative']?>" name="A_negative" required=""/>
	</div>
    <div>
		<b>B+:</b><br/><input class="inputvalues" type="text" value="<?=$o['B_positive']?>" name="B_positive"  required=""/>
	</div>
    <div>
		<b>B-:</b><br/><input class="inputvalues" type="text" value="<?=$o['B_negative']?>" name="B_negative"  required=""/>
	</div>
    <div>
		<b>AB+:</b><br/><input class="inputvalues" type="text" value="<?=$o['AB_positive']?>" name="AB_positive" required=""/>
	</div>
    <div>
		<b>AB-:</b><br/><input class="inputvalues" type="text" value="<?=$o['AB_negative']?>" name="AB_negative"  required=""/>
	</div>
    <div>
		<b>O+:</b><br/><input class="inputvalues" type="text" value="<?=$o['O_positive']?>" name="O_positive"  required=""/>
	</div>
	<div>
		<b>O-:</b><br/><input class="inputvalues" type="text" value="<?=$o['O_negative']?>" name="O_negative"  required=""/>
	</div>
</div>
<div class = "button">
		<input class="btn btn-info" type="submit" name="updatebb" value="Edit">
		<input class="btn btn-danger" type="submit" name="cancel" value="Cancel">
</div>

</form>

<?php
}
?>
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
<?php
include_once('admin_page_footer.php');
?>