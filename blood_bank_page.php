<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blood FOR Life</title>

    <!-- Bootstrap core CSS -->
    

    <!-- Custom fonts for this template -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   
    <!-- Custom styles for this template -->
    <link href="assets/css/aaa.css" rel="stylesheet">
	<link href="assets/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	.hide{
		display:none;
	}
  </style>
  </head>


  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">BLOOD FOR LIFE</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
		    <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="main.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="main.php#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="main.php#portfolio">Blood Bank</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="main.php#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="main.php#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="main.php#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    
	
<?php
include_once('DaoImpl.php');
?>



	<!-- Services -->
    <section id="services">
	
	<div class="page_head">
                    <h2>Blood Availability </h2>
					
     </div>
				<div>
				    <hr class="doublebrdr">
				</div>
	<form class="aaaa" method="POST">			
	<label><b>Select District </b><span class="red">*</span></label>
	<select  class="form-control" id="fetchdist" name="fetchby" required="">
                        <option value="" selected> -Select Any District-</option>
						<option value="CENTRAL DELHI">CENTRAL DELHI</option>
						<option value="EAST DELHI">EAST DELHI</option>
						<option value="NEW DELHI">NEW DELHI</option>
						<option value="NORTH DELHI">NORTH DELHI</option>
						<option value="NORTH EAST DELHI">NORTH EAST DELHI</option>
						<option value="NORTH WEST DELHI">NORTH WEST DELHI</option>
						<option value="SOUTH DELHI">SOUTH DELHI</option>
						<option value="SOUTH EAST DELHI">SOUTH EAST DELHI</option>
						<option value="SOUTH WEST DELHI">SOUTH WEST DELHI</option>
						<option value="WEST DELHI">WEST DELHI</option>
						
    </select>
    </form>	
		<br>
<div class="tab">
		<table  class="table table-bordered hide" style="width:40%;">
  <tr class= "th">
    <th>SR NO.</th>
    <th>BLOOD BANK NAME</th> 
    <th>CONTACT</th>
	<th>BLOOD STATUS</th>
	<th>ACTION</th>
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
<td>
<?=$o['bloodbank_name']?>
</td>
<td>
<button id="<?php echo $o["bb_id"]; ?>" class="btn btn-info btn-xs view_data"> view </button>
</td>
<td>
<button id="<?php echo $o["bb_id"]; ?>" class="btn btn-info btn-xs viewdata"> view </button>
</td>
<td>
<input type="button" class="btn btn-primary" value="APPOINTMENT" onclick="appointment(<?=$o['bb_id']?>)"/>
</td>
</tr>

<?php
}
?>
</table>

</div>


        </section>


	  <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
</body>
<!--<script>
/*$(document).ready(function() 
{
    console.log("vallllllllll")
	
	$.ajax({
      post: "POST",
      url: "Bloodbankcontroller/select",
	  data:''
    }).done(function() {
      console.log("data")
	  alert("fdsfsdf"+this.responseText);
    }).fail(function() {
      alert(this.responseText);
    });

});
</script>*/-->
</html>
<div id = "dataModal" class = "modal fade-in">
	<div class = "modal-dialog">
		<div class = "modal-content">
			<div class = "modal-header">
				<button type = "button" class = "close" data-dismiss = "modal">&times;</button>
				<h4 class = "modal-title">Blood Bank Details</h4>
			</div>
			<div class = "modal-body" id = "bloodbank_details"></div>
			<div class = "modal-footer" >
			</div>
		</div>
	</div>
</div>



<script>
	$(document).ready(function(){
		$('.viewdata').click(function(){
			var bb_id = $(this).attr("id");
			console.log(bb_id)
			$.ajax({
				url:'selectBG.php',
				method:'POST',
				data:{bb_id:bb_id},
				success:function(data){
					$('#bloodbank_details').html(data);
					$('#dataModal').show();
					$('.modal-title').html('Blood Status')	
// $('#bloodbank_details').click(function(){
		         // $('#myModal').modal('hide');
			
	//}); 
				}
			});
			
		});
	});
</script>

<script>
	$(document).ready(function(){
		$('.view_data').click(function(){
			var bb_id = $(this).attr("id");
			console.log(bb_id)
			$.ajax({
				url:'select.php',
				method:'POST',
				data:{bb_id:bb_id},
				success:function(data){
					$('#bloodbank_details').html(data);
					$('#dataModal').show();
				}
			});
			
		});

		$('.close').click(function(){
			$(this).closest(".fade-in").hide()
		});
	});
</script>

<script>
	$(document).ready(function()
	{
		$("#fetchdist").val("")
		$("#fetchdist").on('change',function()
		{
			var value = $(this).val();
			//window.location.href='blood_bank_page.php?q='+value;
			$.ajax(
			{
				url:'fetch_district.php',
				type:'POST',
				data:'request='+value,
				success:function(data)
				{
					$(".tab").html(data);
					$(".tab").removeClass("hide");
				},
			});
		});
		
	});

</script>
<script>
function appointment(bb_id)
{
	
		window.location.href="appointment_page.php?bb_id="+bb_id;
}
</script>

