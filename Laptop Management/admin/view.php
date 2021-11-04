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
                           All Laptop<small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
				 
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
                                            <th>Price</th>
											<th>Details</th>
                                            <th>Print</th>
										
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										include ('dbconnect.php');
										$sql="select * from laptop";
										$re = mysqli_query($con,$sql);
                                         $count=0;
										while($row = mysqli_fetch_array($re))
										{
										 $count++;
											$id = $row['id'];
											
											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>"
													; ?>
                                                     <td><?php echo $count; ?></td>
                                                <td>  <img src="dataimg/<?php echo $row['img'] ?>" style ="max-height:300px; max-width: 200px;"></td>
													<?php 
													echo "<td>".$row['cate']."</td>
													<td>".$row['modelno']."</td>
													<td>".$row['price']."</td>
													<td>".$row['details']."</td>
												
													<td><a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
													</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>";
													  ?>  <td><?php echo $count; ?></td>
                                                                 <td>  <img src="dataimg/<?php echo $row['img'] ?>" style ="max-height:300px; max-width: 200px;"></td>
                                                       <?php
                                                
                                                  echo"<td>".$row['cate']."</td>
                                                    <td>".$row['modelno']."</td>
                                                    <td>".$row['price']."</td>
                                                    <td>".$row['details']."</td>
													<td><a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
													</tr>";
											
											}
										
										}
										
									?>
                                        
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
