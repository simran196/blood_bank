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
				<i class="fa fa-th"></i> <span>Contact Message </span>
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
	<br/><br/>	
	
<form method="POST" action="Control.php" class="filed">
<div class = "left-agileinfo-same">
	<div >
		<b>BLOOD BANK NAME:</b><br/><input class="inputvalues" type="text"  name="bloodbank_name"  required=""/>
	</div>
	<div>
		<b>STATE:</b><br/><input class="inputvalues" type="text"  name="state"  required=""/>
	</div>
	<div>
		<b>DISTRICT:</b><br/><input class="inputvalues" type="text"  name="district"  required=""/>
	</div>
	<div>
		<b>ADDRESS:</b><br/><input class="inputvalues" type="text"  name="address"  required=""/>
	</div>
	<div>
		<b>PINCODE:</b><br/><input class="inputvalues" type="text"  name="pincode"  required=""/>
	</div>
    <div>
		<b>CONTACT NO.:</b><br/><input class="inputvalues" type="text"  name="contact_no"  required=""/>
	</div>
    <div>
		<b>EMAIL:</b><br/><input class="inputvalues" type="text"  name="email"  required=""/>
	</div>
    <div>
		<b>CATEGORY:</b><br/><input class="inputvalues" type="text"  name="category"  required=""/>
	</div>
</div>
<div class="right-agileinfo-same">
    <div>
		<b>A+:</b><br/><input class="inputvalues" type="text"  name="A_positive"  required=""/>
	</div>
    <div>
		<b>A-:</b><br/><input class="inputvalues" type="text" name="A_negative" required=""/>
	</div>
    <div>
		<b>B+:</b><br/><input class="inputvalues" type="text"  name="B_positive"  required=""/>
	</div>
    <div>
		<b>B-:</b><br/><input class="inputvalues" type="text"  name="B_negative"  required=""/>
	</div>
    <div>
		<b>AB+:</b><br/><input class="inputvalues" type="text"  name="AB_positive" required=""/>
	</div>
    <div>
		<b>AB-:</b><br/><input class="inputvalues" type="text"  name="AB_negative"  required=""/>
	</div>
    <div>
		<b>O+:</b><br/><input class="inputvalues" type="text"  name="O_positive"  required=""/>
	</div>
	<div>
		<b>O-:</b><br/><input class="inputvalues" type="text"  name="O_negative"  required=""/>
	</div>
</div>
<div class = "buttn">
		<input class="btn btn-info" type="submit" name="add_bb" value="Add">
		
</div>

</form>

    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
<?php
include_once('admin_page_footer.php');
?>