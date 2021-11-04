 <?php include("comman/header.php") ?>
        <!-- /. NAV SIDE  -->
       
        
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           NEW USER <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-11 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ADD LAPTOPS
                        </div>
          <div class="panel-body">
						<form name="form"  action="userform.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>NAME</label>
         <input type="text"  name="name" class="form-control" placeholder="Enter Your Name" required>
        </div> 
        <div class="form-group">
            <label>LAST NAME </label>
          <input type="text"  name="lname"  class="form-control" placeholder="Enter Last Your Name" required>
        </div>
         <div class="form-group">
            <label>ADDRESS </label>
           <input type="text"  name="addre"  class="form-control" placeholder="Enter Your ADDRESS" required>
            </div>
             <div class="form-group">
            <label>CITY </label>
          <input type="text"  name="city"  class="form-control" placeholder="Enter Your CITY" required>
        </div>
         <div class="form-group">

        <label>EMAIL </label>
         <input type="text"  name="email"  class="form-control" placeholder="Enter Your EMAIL" required>
</div>
 <div class="form-group">
            <label>MOBILE NO </label>
          <input type="tel" name="mob"  class="form-control" placeholder="Enter Your MOBILE NO" required>
        </div>
         <div class="form-group">
            <label>ADDHAR NO </label>
         <input type="TEXT"  name="ahd"   class="form-control" placeholder="Enter Your ADDHAR NO" required>
       </div>
        <div class="form-group">
            <label>PASSWORD </label>
         <input type="password"   id="password" name="pass"  class="form-control"  placeholder="Enter Your PASSWORD" required>
      </div>
   <div class="form-group">
            <label>CONFIRM PASSWORD</label>
        <input type="password"  id="confirm_password" class="form-control" name="pass"  placeholder="Enter Your CONFIRM PASSWORD" required>
      </div>    
                    <div align="center" class="form-group">
                             <input type="submit" class="btn btn-primary"name="submit" value="Submit"> 
                          <input type="reset" name="" value="Reset" class="btn btn-danger"></div>
  
                        

    </form>

                        
                           
 </div>   
                  

					
							<?php
							 include('dbconnect.php');
							 if(isset($_POST['submit']))
							 {
      										    $name = $_POST['name'];
                              $lname= $_POST['lname'];
                              $addre= $_POST['addre'];
                              $city= $_POST['city'];
                              $email= $_POST['email'];
                              $mob = $_POST['mob'];
                              $ahd= $_POST['ahd'];
                              $pass= $_POST['pass'];
										   
										$check="SELECT * FROM user_details WHERE email = '$email' AND mob = '$mob'";
										$rs = mysqli_query($con,$check);
										$data = mysqli_fetch_array($rs, MYSQLI_NUM);
										if($data[0] > 1) {
											echo "<script type='text/javascript'> alert('Customer Already in Exists')</script>";
											
										}

										else
										{
							 
										$qry = "INSERT INTO `user_details`(`name`, `lname`, `addre`, `city`, `email`, `mob`, `ahd`, `pass`)   VALUES ('$name','$lname','$addre','$city', '$email', '$mob','$ahd','$pass')";

                                        $run  = mysqli_query($con,$qry);

										
										if($run)
										{
										 echo '<script>alert("New User Added") </script>' ;
										}else {
											echo '<script>alert("Sorry ! Check The System") </script>' ;
										}
							 }
							}
							
							?>
                        </div>
                        
                    </div>
                </div>
                
                  
           
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <script type="text/javascript">
      var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
    </script>
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
