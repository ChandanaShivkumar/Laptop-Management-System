 <?php include("comman/header.php") ?>
        <!-- /. NAV SIDE  -->
       
       <?php
 
 include("dbconnect.php");
 $sid = $_GET['sid'];
 $qry = "SELECT * FROM  `laptop` WHERE `id` = '$sid'";
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
            <form name="form" method="post" action="updatedata.php" enctype="multipart/form-data">

                            <div class="form-group">
                                            <label>Categories</label>
                                            <input type="text" name="cate" class="form-control"   value="<?php echo $data['cate']; ?>" required>
                                        </div>     
                                        <div class="form-group">
                                <label>Model No:</label>
                           <input type="text" name="modelno" width="80%" class="form-control"value="<?php echo $data['modelno']; ?>" required>
                           </div>
                           <div class="form-group">
                               <label>Price</label>
                              <input type="text" name="price" width="80%" class="form-control" value="<?php echo $data['price']; ?>" required>
                              </div>
                              <div class="form-group">
                               <label>Details</label>
                               <input type="text" name="details" width="80%"  class="form-control" value="<?php echo $data['details']; ?>" required>
                        
                         </div>
                             <div class="form-group">
                              <label>Image</label>
                             <input type="file"  name="simg" value="<?php echo $data['img']; ?>" class="form-control">                            
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
