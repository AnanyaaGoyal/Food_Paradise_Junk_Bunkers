<?php 
include('head.php');
include('menu.php');
include('connection.php');
?>

<?php

if(isset($_POST['add_reg'])){
	
	$name=$_POST['register_name'];
	$email=$_POST['register_email'];
	$mobile=$_POST['register_mobile_no'];
	$password=$_POST['register_password'];
	$cpassword= $_POST['register_confirm_password'];
	$address= $_POST['register_address'];
	$date=date('Y-m-d H:i:s');
	
	//same email adress
	$sql="select * from user_registration_table1";
	$query1=mysqli_query($c,$sql) or die("error ".mysqli_error($c));
	while($data=mysqli_fetch_array($query1))
	{
		$semail=$data['register_email'];
		if($semail==$email)
		{
			echo "<script>alert('Email address is already register Please enter new email adress');window.location='register_login.php'</script>";
		}
		else
	
		if($password == $cpassword )
		{
		
			$query=mysqli_query($c,"insert into user_registration_table1 (register_name,register_email,register_mobile_no,register_address,register_password,register_confirm_password,register_date) values('{$name}','{$email}','{$mobile}','{$address}','{$password}','{$cpassword}','{$date}')") or die("error in query".mysqli_error($c));
	
			if($query) 
			{
				echo "<script>alert('record created successfully');window.location='register_login.php'</script>";
			}
		}
		else
		{
			echo "<script>alert('Not Match Password and Confirm Password');window.location='register_login.php'</script>";
		}
	}
	
	 
	



}

?>

<div class="apartment-single-area">
	<div class="container">
		

			<div class="row">
			
			<div class="col-md-6">
                    <div class="apartment-sidebar">                    
        				<div class="widget_rental_search clerafix">					
        					<div class="form-border gradient-border">
        						<form method="post" class="advance_search_query booking-form">
        							<div class="form-bg seven">
        								<div class="form-content">
                                            <h2 class="form-title">Register</h2>
        									<div class="form-group">
        									   <label>Full Name</label>
        									   <input type="text" name="register_name" placeholder="Full name" required>
        									</div><!-- /.form-group -->
        									<div class="form-group">
                            					<label>Mobile Number</label>
                                                <input type="text" name="register_mobile_no" placeholder="+99(99)9999-9999" required>
        									</div><!-- /.form-group -->
        									<div class="form-group">
        										<label>Email Address</label>
        										<input type="email" name="register_email" placeholder="example@domain.com" required>
        									</div><!-- /.form-group -->
        									<div class="form-group">
        									    <label>Password</label>
                                                <input type="password"   name="register_password" class="input-text" required>
        									</div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" name="register_confirm_password" class="input-text" required>
                                            </div><!-- /.form-group -->
        									<div class="form-group">
        									    <label>Your Address</label>
        		                                <textarea name="register_address" placeholder="Address" class="form-controller" required></textarea>
        									</div><!-- /.form-group -->
        									<div class="form-group">
        										<input type="submit" name="add_reg" value="submit" style="color: #fff;" class="button default-template-gradient button-radius">
        									</div><!-- /.form-group -->
        								</div><!-- /.form-content -->
        							</div><!-- /.form-bg -->
        						</form> <!-- /.advance_search_query -->
        					</div><!-- /.form-border -->
        				</div><!-- /.widget_rental_search -->


                    </div><!-- /.apartment-sidebar -->
    			</div> <!-- .col-md-6 -->
			
				<?php
				
				if(isset($_POST['user_login'])){
					$email=$_POST['register_email'];
					$password=$_POST['register_password'];
					
					 $sql = "SELECT * FROM user_registration_table1 WHERE register_email = '{$email}' and register_password = '{$password}'";
      $result = mysqli_query($c,$sql) or die("error in login".mysqli_error($c));
      $row = mysqli_fetch_array($result);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
          $_SESSION['register_email'] = $email;
        
          echo "<script>alert('Login Successfull');window.location='index.php'</script>";
	
      }else {
        
		  echo "<script>alert('Your Login Name or Password is invalid');window.location='register_login.php'</script>";
	
      }
					
				}
				?>
				
				<div class="col-md-6">
                    <div class="apartment-sidebar">                    
        				<div class="widget_rental_search clerafix">					
        					<div class="form-border gradient-border">
        						<form  method="post" class="advance_search_query booking-form">
        							<div class="form-bg seven">
        								<div class="form-content">
                                            <h2 class="form-title">Login</h2>
        								
        									<div class="form-group">
        										<label>Email Address</label>
        										<input type="email" name="register_email" >
        									</div><!-- /.form-group -->
        									<div class="form-group">
        									    <label>Password</label>
                                                <input type="password" step="1" min="1" max="100" name="register_password"  title="Qty" size="4" class="input-text">
        									</div><!-- /.form-group -->
                                           
											<a href="#">		 <label style="text-align:right;">forgot password?</label></a>
        									
        									<div class="form-group">
        										<input type="submit" name="user_login" class="button default-template-gradient button-radius" style="color: #fff;" value="Login">
        									</div><!-- /.form-group -->
        								</div><!-- /.form-content -->
        							</div><!-- /.form-bg -->
        						</form> <!-- /.advance_search_query -->
        					</div><!-- /.form-border -->
        				</div><!-- /.widget_rental_search -->


                    </div><!-- /.apartment-sidebar -->
    			</div> <!-- .col-md-6 -->
		  

			
			
			</div> <!-- /.row -->
	  	</div> <!-- /.container -->
  	</div> <!-- /.appartment-single-area -->
<?php
include('footer.php');
?>