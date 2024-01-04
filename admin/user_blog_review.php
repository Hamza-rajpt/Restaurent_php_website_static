<?php
   include('config.php');
?>
<?php 
 
  include_once("inc/add_new_items_insert.php");
  
  $result = mysqli_query($mysqli, "SELECT * FROM all_products ORDER BY id DESC");
?>

<title> blog review</title>
<?php include('user_header.php');?>
<div class="row ml-0 mr-0">
	<div class="col-md-12 pl-0 pr-0">
		<div class="site_banner">
			<h1>All Products</h1>	
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
    <div class="products_search">
     <form>
      <div class="input-group">
        <input type="search" class="form-control" placeholder="Search" id="myInput">
        <div class="input-group-btn">
        <button class="btn btn-default" type="submit">
      <i class="fa fa-search" aria-hidden="true"></i>
        </button>
      </div>
    </div>
</form> 
    </div>
    
  </div>
</div>

		<div class="row ml-0 mr-0">
			<div class="col-md-12">
				<table class="table table-striped" tyle="margin-bottom:50px; ">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Code No.</th>
        <th>Qty.</th>
        <th>B-Price</th>
        <th>L-Price</th>
        <th>T-Price</th>
        <th>Modify</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <?php 
$i = 1;
        while($res = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>".$i."</td>";
          echo "<td>".$res['product_name']."</td>";
          echo "<td>".$res['product_code_no']."</td>";
          echo "<td>".$res['product_qty']."</td>";
          echo "<td>".$res['pro_box_price']."</td>"; 
          echo "<td>".$res['pro_leaf_price']."</td>";
          echo "<td>".$res['pro_single_tab_price']."</td>";       
          echo "<td><a href=\"add_new_items_edit.php?id=$res[id]\">Edit</a> | <a href=\"inc/admin_user_login_delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";   
          echo "</tr>";
          $i++;     
    }

?>
    
    </tbody>
  </table>
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