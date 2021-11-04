   <?php include("comman/header.php") ?>
   <!-- /. NAV SIDE  -->

   <?php
   
   include("dbconnect.php");
   $sid = $_GET['sid'];
   $qry = "SELECT * FROM  `user_details` WHERE `id` = '$sid'";
   $run = mysqli_query($con,$qry);
   $data = mysqli_fetch_assoc($run);

   ?> 

   <div id="page-wrapper" >
    <div id="page-inner">
     <div class="row">
      <div class="col-md-12">
        <h1 class="page-header">
         UPDATE LAPTOPS DETAILS <small></small>
       </h1>
     </div>
   </div> 


   <div class="row">

    <div class="col-md-11 col-sm-5">
      <div class="panel panel-primary">
        <div class="panel-heading">
          EDITS LAPTOPS DETAILS
        </div>
        <div class="panel-body">
          <form name="form" method="post" action="updateCusData.php" enctype="multipart/form-data">

            <div class="form-group">
             <label>NAME</label>
             <input type="text"  name="name" class="form-control" value="<?php echo $data['name']; ?>" required>
           </div> 
           <div class="form-group">
            <label>LAST NAME </label>
            <input type="text"  name="lname"  class="form-control" value="<?php echo $data['lname']; ?>" required>
          </div>
          <div class="form-group">
            <label>ADDRESS </label>
            <input type="text"  name="addre"  class="form-control" value="<?php echo $data['addre']; ?>" required>
          </div>
          <div class="form-group">
            <label>CITY </label>
            <input type="text"  name="city"  class="form-control" value="<?php echo $data['city']; ?>" required>
          </div>
          <div class="form-group">

            <label>EMAIL </label>
            <input type="text"  name="email"  class="form-control" value="<?php echo $data['email']; ?>" required>
          </div>
          <div class="form-group">
            <label>MOBILE NO </label>
            <input type="TEXT"  name="mob"  class="form-control" value="<?php echo $data['mob']; ?>" required>
          </div>
          <div class="form-group">
            <label>ADDHAR NO </label>
            <input type="TEXT"  name="ahd"   class="form-control" value="<?php echo $data['ahd']; ?>" required>
          </div>




          <div align="center" class="form-group">
            <input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
            <input type="submit" class="btn btn-primary"name="submit" value="Submit"> 
            <input type="reset" name="" value="Reset" class="btn btn-danger"></div>
          </form>

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
