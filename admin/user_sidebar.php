
<div class="user_sidebar">
	<ul>
		<li>
			<a href="index.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
		</li>
		<!-- toggle list of side bar-->
      
      <li class="main_submenu"><a href="#!"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
      	User Info <span class="caret"></span></a>
       
        <ul class="sub_menu_items">
          <li>
          	  <a href="all_user_profile.php"><i class="fa fa-user-plus" aria-hidden="true"></i> All Users</a>
          </li>
        </ul>
      </li>
      
       <li class="main_submenu1"><a href="#!"><i class="fa fa-product-hunt" aria-hidden="true"></i>
      	Blog Details <span class="caret"></span></a>
        <ul class="sub_menu_items1">
          <li>
          	  <a href="user_blog_review.php"><i class="fa fa-stack-exchange" aria-hidden="true"></i>page in progress</a>
          </li>
          
        </ul>
      </li>
      
		<!-- -----END-toggle list of side bar------ -->
		
		<li>
			<a href="contact_admin.php"><i class="fa fa-volume-control-phone" aria-hidden="true" ></i> User Contact</a>
		</li>
	</ul>
</div>

<script type="text/javascript">
	$(".main_submenu").click(function(){
  $(".sub_menu_items").toggle('slow');
});
		$(".main_submenu1").click(function(){
  $(".sub_menu_items1").toggle('slow');
});
</script>