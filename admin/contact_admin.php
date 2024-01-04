
<?php error_reporting(0);
   include('../config.php');
   include('user_header.php');?>
<?php 
  
  $ReceiveReview = "SELECT * FROM user_contact_us";
  $reslts=mysqli_query($conn,$ReceiveReview);
?>
<title>Contact_Admin</title>
<div class="row ml-0 mr-0">
  <div class="col-md-12 pl-0 pr-0">
    <div class="site_banner">
      <h1>Contact Admin</h1>  
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
        <th>User E-Mail</th>
        <th>Subject</th>     
        <th>User Complaints Review</th>
        <th>Review Status</th>
      </tr>
    </thead>
<?php 
    while ($row=mysqli_fetch_array($reslts)) 
    {
?>
  <tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['subject']?></td>
    <td><?php echo $row['review_detail']?></td>
    <td><a href='delete.php?id=$row[id]'>Delete Record</a></td>
  </tr>
<?php 
    }
?>
   </tbody>
  </table>
    </div>

    </div>

<!-- js file included -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>