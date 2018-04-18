<script>
function appointment(bb_id)
{
	
		window.location.href="appointment_page.php?bb_id="+bb_id;
}
</script>

<?php if($_POST['request'])
	{
		$request = $_POST['request'];
?>
<?php
include_once('Config.php');
?>
<?php
include_once('DBconnect.php');
?>

<?php
include_once('Daoimpl.php');
?>

	<table  class="table table-bordered" style="width:40%;">
  <tr class= "th">
    <th>SR NO.</th>
    <th>BLOOD BANK NAME</th> 
    <th>CONTACT</th>
	<th>BLOOD STATUS</th>
	<th>ACTION</th>
  </tr>
  
  <?php
$r = new DaoImpl();
$a = $r->select('bloodbank_details','*',"district='$request'");
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
	}
?>
 
</table>

<div id = "dataModal" class = "modal fade-in">
	<div class = "modal-dialog">
		<div class = "modal-content">
			<div class = "modal-header">
				<button type = "button" class = "close" data-dismiss = "modal">&times;</button>
				<h4 class = "modal-title">Blood Bank Detail</h4>
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
