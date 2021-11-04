 <?php include("comman/header.php") ?>
 
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
             <?php include("comman/menu.php") ?>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Edit Laptop Details<small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
                 
                 <div class="row">
                
                <div class="col-md-11 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            SEARCH LAPTOPS
                        </div>
                        <div class="panel-body">
                        <form name="form"action="update.php" method="post">

                            <div class="form-group">
                                            <label>Categories</label>
                                            <input type="text" name="cate" class="form-control" placeholder="Enter Laptop Categories" required>
                                        </div>     
                                        <div class="form-group">
                                <label>Model No:</label>
                           <input type="text" name="modelno" width="80%" class="form-control" placeholder="Enter Laptop Model No" required>
                           </div>
                       
                      
                    <div align="center" class="form-group">
                             <input type="submit" class="btn btn-primary"name="submit" value="Search"> 
         
                            </form>
                             </div>
                        
                    </div>
                </div>
          </div>


            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->

                    <div class="panel panel-default">
                        <div class="panel-body">

                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Categories</th>
                                            <th>Model No</th>
                                             <th>Edit</th>
                                        
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    

    <?php  
if (isset($_POST['submit'])) {

     include("dbconnect.php");
     $cate = $_POST['cate'];
     $modelno= $_POST['modelno'];

     // $qry = " SELECT * FROM `student` WHERE `std` = '$std' AND `name` LIKE ' %$name%'";
     $qry = " SELECT * FROM `laptop` WHERE `cate` LIKE '%$cate%' AND `modelno` = '$modelno'  ";
     $run = mysqli_query($con,$qry);

    if (mysqli_num_rows($run)<1) {
        # code...
         echo "<tr><td colspan ='5'>No Record Found</td></tr>";
    }else{
            $count=0;

        while ($data=mysqli_fetch_assoc($run)) {
            # code...
                $count++;
            ?>
            <tr align="center">
                <td><?php echo $count; ?></td>
                <td><img src="dataimg/<?php echo $data['img']; ?>" style="max-width:100px;"></td>
                <td><?php echo $data['cate']; ?></td>
                <td><?php echo $data['modelno']; ?></td>
                <td>
                   
                  <a class="btn btn-primary" href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a> | 
                  <a class="btn btn-danger" href="deletedata.php?sid=<?php echo $data['id']; ?>">Delete</a></button>
                </td>
            </tr>

            <?php

        }
    }
}

?>


















                                                      <!-- include ('dbconnect.php');
                                        $sql="select * from laptop";
                                        $re = mysqli_query($con,$sql);
                                        while($row = mysqli_fetch_array($re))
                                        {
                                        
                                            $id = $row['id'];
                                            
                                            if($id % 2 ==1 )
                                            {
                                                echo"<tr class='gradeC'>
                                                    <td>".$row['id']."</td>
                                                    <td>".$row['cate']."</td>
                                                    
                                                    <td>".$row['cate']."</td>
                                                    <td>".$row['modelno']."</td>
                                                    <td>".$row['price']."</td>
                                                    <td>".$row['details']."</td>
                                                
                                                    <td><a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
                                                    </tr>";
                                            }
                                            else
                                            {
                                                echo"<tr class='gradeU'>
                                                       <td>".$row['id']."</td>
                                                    <td>".$row['cate']."</td>
                                                    <td>".$row['cate']."</td>
                                                    <td>".$row['modelno']."</td>
                                                    <td>".$row['price']."</td>
                                                    <td>".$row['details']."</td>
                                                    <td><a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
                                                    </tr>";
                                            
                                            }
                                        
                                        }
                                        
                                    ?> -->
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
                </div>
               
            </div>
        
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
