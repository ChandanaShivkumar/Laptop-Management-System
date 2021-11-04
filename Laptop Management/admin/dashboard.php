 <?php include("comman/header.php") ?>
 <!-- /. NAV SIDE  -->

 <div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
               Welcome To  <small>Dashboard </small>
             </h1>
         </div>
     </div> 



     <div class="row">


        <div class='col-md-3 col-sm-12 col-xs-12'>
           <div class='panel panel-primary text-center no-boder bg-color-red'>
            <div class='panel-body'>
                <i class='fa fa-users fa-5x'></i>
                <h3>
                    <?php
                    include("../dbconnect.php");
                    $result = mysqli_query($con,"SELECT * FROM `admin`");
                    $row = mysqli_num_rows( $result);
                    echo $row ?>
                </h3>
            </div>
            <a href="usersetting.php"> <div class='panel-footer back-footer-red'> ADMIN </div></a>
        </div>
    </div>

    <div class='col-md-3 col-sm-12 col-xs-12'>
       <div class='panel panel-primary text-center no-boder bg-color-green'>
        <div class='panel-body'>
            <i class='fa fa-users fa-5x'></i>
            <h3>
                <?php
                include("../dbconnect.php");
                $result = mysqli_query($con,"SELECT * FROM `user_details`");
                $row = mysqli_num_rows( $result);
                echo $row ?>
            </h3>
        </div>
        <a href="userdetails.php">  <div class='panel-footer back-footer-green'>  USER </div></a>
    </div>
</div>


<div class='col-md-3 col-sm-12 col-xs-12'>
   <div class='panel panel-primary text-center no-boder bg-color-blue'>
    <div class='panel-body'>
        <i class='fa fa-users fa-5x'></i>
        <h3>
            <?php
            include("../dbconnect.php");
            $result = mysqli_query($con,"SELECT * FROM `laptop`");
            $row = mysqli_num_rows( $result);
            echo $row ?>
        </h3>
    </div>
    <a href="view.php"><div class='panel-footer back-footer-blue'>ALL LAPTOPS</div></a>
</div>
</div>

<div class='col-md-3 col-sm-12 col-xs-12'>
   <div class='panel panel-primary text-center no-boder bg-color-brown'>
    <div class='panel-body'>
        <i class='fa fa-users fa-5x'></i>
        <h3>
            <?php
            include("../dbconnect.php");
            $result = mysqli_query($con,"SELECT * FROM `user_details`");
            $row = mysqli_num_rows( $result);
            echo $row ?>
        </h3>
    </div>
    <a href="userdetails.php">  <div class='panel-footer back-footer-brown'>USER  DETIALS</div></a>
</div>
</div>


<div class='col-md-3 col-sm-12 col-xs-12'>
   <div class='panel panel-primary text-center no-boder bg-color-blue'>
    <div class='panel-body'>
        <i class='fa fa-users fa-5x'></i>
        <h3>
            <?php
            include("../dbconnect.php");
            $result = mysqli_query($con,"SELECT * FROM `laptop` WHERE cate= 'HP'");
            $row = mysqli_num_rows( $result);
            echo $row ?>
        </h3>
    </div>
    <div class='panel-footer back-footer-blue'>HP</div>
</div>
</div>

<div class='col-md-3 col-sm-12 col-xs-12'>
   <div class='panel panel-primary text-center no-boder bg-color-brown'>
    <div class='panel-body'>
        <i class='fa fa-users fa-5x'></i>
        <h3>
            <?php
            include("../dbconnect.php");
            $result = mysqli_query($con,"SELECT * FROM `laptop` WHERE cate= 'DELL'");
            $row = mysqli_num_rows( $result);
            echo $row ?>
        </h3>
    </div>
    <div class='panel-footer back-footer-brown'>DELL</div>
</div>
</div>

<div class='col-md-3 col-sm-12 col-xs-12'>
   <div class='panel panel-primary text-center no-boder bg-color-green'>
    <div class='panel-body'>
        <i class='fa fa-users fa-5x'></i>
        <h3>
            <?php
            include("../dbconnect.php");
            $result = mysqli_query($con,"SELECT * FROM `laptop` WHERE cate= 'Apple'");
            $row = mysqli_num_rows( $result);
            echo $row ?>
        </h3>
    </div>
    <div class='panel-footer back-footer-green'>APPLE</div>
</div>
</div>

<div class='col-md-3 col-sm-12 col-xs-12'>
   <div class='panel panel-primary text-center no-boder bg-color-red'>
    <div class='panel-body'>
        <i class='fa fa-users fa-5x'></i>
        <h3>
            <?php
            include("../dbconnect.php");
            $result = mysqli_query($con,"SELECT * FROM `laptop`WHERE cate= 'Microsoft' ");
            $row = mysqli_num_rows( $result);
            echo $row ?>
        </h3>
    </div>
    <div class='panel-footer back-footer-red'>MICROSOFT</div>
</div>
</div>


<div class='col-md-3 col-sm-12 col-xs-12'>
   <div class='panel panel-primary text-center no-boder bg-color-red'>
    <div class='panel-body'>
        <i class='fa fa-users fa-5x'></i>
        <h3>
            <?php
            include("../dbconnect.php");
            $result = mysqli_query($con,"SELECT * FROM `laptop` WHERE cate= 'Msi'");
            $row = mysqli_num_rows( $result);
            echo $row ?>
        </h3>
    </div>
    <div class='panel-footer back-footer-red'>MSI</div>
</div>
</div>

<div class='col-md-3 col-sm-12 col-xs-12'>
   <div class='panel panel-primary text-center no-boder bg-color-green'>
    <div class='panel-body'>
        <i class='fa fa-users fa-5x'></i>
        <h3>
            <?php
            include("../dbconnect.php");
            $result = mysqli_query($con,"SELECT * FROM `laptop` WHERE cate= 'Asus'");
            $row = mysqli_num_rows( $result);
            echo $row ?>
        </h3>
    </div>
    <div class='panel-footer back-footer-green'>ASUS</div>
</div>
</div>

<div class='col-md-3 col-sm-12 col-xs-12'>
   <div class='panel panel-primary text-center no-boder bg-color-brown'>
    <div class='panel-body'>
        <i class='fa fa-users fa-5x'></i>
        <h3>
            <?php
            include("../dbconnect.php");
            $result = mysqli_query($con,"SELECT * FROM `laptop` WHERE cate= 'Lenovo'");
            $row = mysqli_num_rows( $result);
            echo $row ?>
        </h3>
    </div>
    <div class='panel-footer back-footer-brown'>LENOVO</div>
</div>
</div>

<div class='col-md-3 col-sm-12 col-xs-12'>
   <div class='panel panel-primary text-center no-boder bg-color-blue'>
    <div class='panel-body'>
        <i class='fa fa-users fa-5x'></i>
        <h3>
            <?php
            include("../dbconnect.php");
            $result = mysqli_query($con,"SELECT * FROM `laptop`WHERE cate= 'Accer' ");
            $row = mysqli_num_rows( $result);
            echo $row ?>
        </h3>
    </div>
    <div class='panel-footer back-footer-blue'>ACCER</div>
</div>
</div>

</div>
<!-- /. ROW  -->

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
