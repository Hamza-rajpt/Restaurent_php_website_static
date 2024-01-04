<?php error_reporting(0);
   include('../config.php');
?>
<?php 
  
  $DataSelection = "SELECT * FROM kitchnersloguin";
  $results=mysqli_query($conn,$DataSelection);
?>

<title> All Users Profile</title>
<?php include('user_header.php');?>
<div class="row ml-0 mr-0">
	<div class="col-md-12 pl-0 pr-0">
		<div class="site_banner">
			<h1>All Users Profile</h1>	
		</div>	
	</div>
</div>

<div class="row ml-0 mr-0">
	<div class="col-md-3 pl-0 pr-0" style="position: sticky; top: 0;">
		<?php include('user_sidebar.php');?>
	</div>
	<div class="col-md-9 pl-0 pr-0">
   	<div class="row ml-0 mr-0">
        <div class="col-md-6 pl-0 pr-0">
         </div>            
        
        <div class="col-md-6 pl-0 pr-0">
        </div>   
    </div>  


    <div class="row ml-0 mr-0" style="overflow-x: scroll;">
			<div class="col-md-12">
				<table class="table table-striped" style="margin-bottom:30px; width: 1500px;">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>  
        <th>Last Name</th>    
        <th>User E-Mail</th>
        <th>Password</th>     
        <th>Conferm Password</th>
        <th>Del Status</th>
        <th>Upd Status</th>
      </tr>
    </thead>
    <tbody  id="myTable">
<?php 
    while ($row=mysqli_fetch_array($results)) 
    {
?>
  <tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['lastname']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['password']?></td>
    <td><?php echo $row['confermpassword']?></td>
    <td><a href='delete.php?id=$row[id]'>Delete Record</a></td>
    <td><a href='delete.php?id=$row[id]'>Update Record</a></td>
  </tr>
<?php 
    }
?>
   </tbody>
  </table>
		</div>

		</div>
	</div>
</div>		
	</div>

<!-- js file included -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>