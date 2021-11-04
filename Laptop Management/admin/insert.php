 <?php include("comman/header.php") ?>
 <!-- /. NAV SIDE  -->
 
 
 
 <div id="page-wrapper" >
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-header">
          SHOPING CART FORM<small></small>
        </h1>
      </div>
    </div> 
    
    
    <div class="row">
      
      <div class="col-md-11 col-sm-5">
        <div class="panel panel-primary">
          <div class="panel-heading">
            ADD NEW
          </div>
          <div class="panel-body">
            <form name="form" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label>Categories</label>
                <input type="text" name="cat" class="form-control" placeholder="Enter Laptop Categories" required>
              </div>     

              <div class="form-group">
                <label>Model No:</label>
                <input type="text" name="modelno" width="80%" class="form-control" placeholder="Enter Laptop Model No" required>
              </div>
              
              <div class="form-group">
               <label>Price</label>
               <input type="text" name="price" width="80%" class="form-control" placeholder="Enter Laptop Price" required>
             </div>
             
             <div class="form-group">
               <label>Details</label>
               <input type="text" name="details" width="80%"  class="form-control" placeholder="Enter Laptop Details" required>  
             </div>

             <div class="form-group">
              <label>Image</label>
              <input type="file"  name="simg" class="form-control">                            
            </div>
            
            <div class="form-group">
              <label>Number of pieces available</label>
              <input type="text" name="quantity" width="80%" class="form-control" placeholder="Enter laptop quantity"
              required>
            </div>
            
            <div align="center" class="form-group">
             <input type="submit" class="btn btn-primary"name="submit" value="Submit"> 
             <input type="reset" name="" value="Reset" class="btn btn-danger"></div>
           </form>
           <?php
           include('dbconnect.php');
           if(isset($_POST['submit']))
           {
            $categories = $_POST['cat'];
            $modelno= $_POST['modelno'];
            $price= $_POST['price'];
            $details= $_POST['details'];
            $img= $_FILES['simg']['name'];
            $tempname = $_FILES['simg']['tmp_name'];
            $quantity=$_POST['quantity'];
            move_uploaded_file($tempname, "dataimg/$img");
            
            $check="SELECT * FROM laptop WHERE cate = '$categories' AND modelno = '$modelno'";
            $rs = mysqli_query($con,$check);
            $data = mysqli_fetch_array($rs, MYSQLI_NUM);
            if($data[0] > 1) {
             echo "<script type='text/javascript'> alert('Laptop Already in Exists')</script>";
             
           }

           else
           {
            
            $qry = "INSERT INTO `laptop`(`cate`, `modelno`, `price`, `details`, `img`)  VALUES ('$categories','$modelno','$price','$details', '$img')";

            $run  = mysqli_query($con,$qry);

            
            if($run)
            {
             echo '<script>alert("New Laptop Added") </script>' ;
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
<!-- jQuery Js -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Metis Menu Js -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script>

<?php include('footer.php'); ?>
</body>
</html>
