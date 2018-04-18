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
    </section>
    <!-- Main content -->
    <section class="content">
	<?php
include_once('DaoImpl.php');
$r = new DaoImpl();
$t = $r->select('admin_info','*','admin_id = '.$_GET['admin_id'].'');
while($o = mysqli_fetch_array($t))
{
	
?>
	
<form method="POST" action="control.php" >
<div class="admin_update">
	<div >
		<input type="hidden" value="<?=$o['admin_id']?>" name="admin_id"/>
	</div>
	<div >
		<b>First Name:</b><br/><input class="inputvalues" type="text" value="<?=$o['first_name']?>" name="first_name"  required=""/>
	</div>
	<div>
		</b>Last Name:</b><br/><input class="inputvalues" type="text" value="<?=$o['last_name']?>" name="last_name"  required=""/>
	</div>
	<div>
		<b>User Name :</b><br/><input class="inputvalues" type="text" value="<?=$o['username']?>" name="username"  required=""/>
	</div>
	<div>
		<b>Password:</b><br/><input class="inputvalues" type="text" value="<?=$o['password']?>" name="password"  required=""/>
	</div>
	<div>
		<b>Email:</b><br/><input class="inputvalues" type="text" value="<?=$o['email']?>" name="email"  required=""/>
	</div>
    
</div>

<div class="admin_update_btn">
		<input class="btn btn-info" type="submit" name="update_admin" value="Edit">
		<input class="btn btn-danger" type="submit" name="canceladmin" value="Cancel">
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