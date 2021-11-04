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
                           All Customers<small> </small>
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
                                            
                                        <th>No</th>
                                        <th>NAME</th>
                                        <th>ADDRESS</th>
                                        <th>CITY</th>
                                        <th>EMAIL</th>

                                        <th>MOBILE NO</th>
                                        <th>ADDHAR NO</th>
                                        <th>PASSWORD</th>
                                       
										
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										include ('dbconnect.php');
										$sql="select * from user_details";
										$re = mysqli_query($con,$sql);
                                        $count=0;
										while($data = mysqli_fetch_array($re))
                                           
										{
										 $count++;
											$id = $data['id'];
											
											if($id % 2 ==1 )
											{
                                                ?>
												<tr class='gradeC'>
												
                                                    <td><?php echo $count; ?></td>
                                                <td><?php echo $data['name']; ?> <?php echo $data['lname']; ?></td>
                                                <td><?php echo $data['addre']; ?></td>
                                                <td><?php echo $data['city']; ?></td>

                                                <td><?php echo $data['email']; ?></td>
                                                <td><?php echo $data['mob']; ?></td>

                                                <td><?php echo $data['ahd']; ?></td>
                                                <td><?php echo '********' ?></td>
                                              
												</tr>

                                                    <?php
											}
											else
											{
                                                 ?>
												<tr class='gradeU'>
													   
                                              
                                                <td><?php echo $count; ?></td>
                                               
                                                <td><?php echo $data['name']; ?> <?php echo $data['lname']; ?></td>
                                                <td><?php echo $data['addre']; ?></td>
                                                <td><?php echo $data['city']; ?></td>

                                                <td><?php echo $data['email']; ?></td>
                                                <td><?php echo $data['mob']; ?></td>

                                                <td><?php echo $data['ahd']; ?></td>
                                                <td><?php echo '********' ?></td>
                                              
                                                </tr>

                                                    <?php
											
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
