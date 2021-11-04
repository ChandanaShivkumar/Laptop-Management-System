<?php include('header.php');  ?>
<style type="text/css">
    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 19px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
</style>
<!-------------- only 1 section --------------------------->
<!---------------section1 (part1)-------------------------->
    <section>
        <!-- This is Section 1 of the page -->
        <div class="section1">
            <img src="img/logo1.ico" class="logo" />
            <div class="navigation">
                <img src="img/if_List_Text_Menu_Numbers_String_Burger_1329080.png" class="toggle" />
                <a class="cgr" >Categories</a>
            </div>
            <div>
               
               <?php include('nav.php');  ?>


            </div>


                <?php include('special.php');  ?>
<div class="section2">
            
            <?php include('menu.php'); ?>

            <!-- slider -->
            <div class="slider">
                <div class="slides" align="center">
                    <div class="slide1">
                        <img src="img/slide1.png" class="img1" />
                    </div>
                    <div class="slide1">
                        <img src="img/slide2.png" class="img2" />
                    </div>
                    <div class="slide1">
                        <img src="img/slide3.png" class="img3" />
                    </div>
                    <div class="constant">
                        <!-- <h1> i7 processor</h1> -->
                        <!-- <p>Comfort is a very important things nowadays because it is a condition of satifaction.</p> -->

                      <!--   <a class="btnshopnow">Shop Now!</a> -->
                    </div>
                </div>
            </div>

   

        <!-- Brand HP-->

        
        <div class="featuredpara_pg12" id="HP">
            <h2 >HP</h2>
        </div>
        <div class="products">
                 <?php


    include('dbconnect.php');

    $qry = "SELECT * FROM `laptop` WHERE `cate` = 'hp' LIMIT 3 ";  
    $run = mysqli_query($con,$qry);

    if (mysqli_num_rows($run)>0) {
        # code...
        //$data = mysqli_fetch_assoc($run);
        while ($data=mysqli_fetch_assoc($run)){
        ?>

    <fieldset class="col1">


                    <legend>New</legend>
                   <img src="admin/dataimg/<?php echo $data['img'] ?>" class="img1" />
                    <h3><span><?php echo $data['price']; ?><strike>$642.45</strike></h3>
                    <h4><span><?php echo $data['cate']; ?> | <span><?php echo $data['modelno']; ?></h4>
                    <p><?php echo $data['details']; ?></p>
                    <a href="admin/print.php?pid=<?php echo $data['id']; ?>"><button class="button button2" >Buy Now</button> </a>
          <!--  <a href="cart.php<?php echo $data['id']; ?>"><button class="button button2" >Add to Cart</button> </a>-->

                </fieldset>
                                     <?php
    }
    }

?>

        </div>


        <!-- Brand Accer-->
        <div class="featuredpara_pg12" id="Accer">
            <h2 >Accer</h2>
        </div>
        <div class="products">
             <?php


    include('dbconnect.php');

    $qry = "SELECT * FROM `laptop` WHERE `cate` = 'Accer' LIMIT 3 ";  
    $run = mysqli_query($con,$qry);

    if (mysqli_num_rows($run)>0) {
        # code...
        //$data = mysqli_fetch_assoc($run);
        while ($data=mysqli_fetch_assoc($run)){
        ?>
            <fieldset class="col1">


                    <legend>New</legend>
                   <img src="admin/dataimg/<?php echo $data['img'] ?>" class="img1" />
                    <h3><span><?php echo $data['price']; ?><strike>$642.45</strike></h3>
                    <h4><span><?php echo $data['cate']; ?> | <span><?php echo $data['modelno']; ?></h4>
                    <p><?php echo $data['details']; ?></p>
                     <td><a href="admin/print.php?pid=<?php echo $data['id']; ?>"><button class="button button2" >Buy Now</button> </a></td>
                </fieldset>
                                     <?php
    }
    }

?>
        </div>


        <!-- Brand Lenovo-->
        <div class="featuredpara_pg12" id="Lenovo">
            <h2 >Lenovo</h2>
        </div>
        <div class="products">
           <?php


    include('dbconnect.php');

    $qry = "SELECT * FROM `laptop` WHERE `cate` = 'Lenovo' LIMIT 3 ";  
    $run = mysqli_query($con,$qry);

    if (mysqli_num_rows($run)>0) {
        # code...
        //$data = mysqli_fetch_assoc($run);
        while ($data=mysqli_fetch_assoc($run)){
        ?>
            <fieldset class="col1">


                    <legend>New</legend>
                   <img src="admin/dataimg/<?php echo $data['img'] ?>" class="img1" />
                    <h3><span><?php echo $data['price']; ?><strike>$642.45</strike></h3>
                    <h4><span><?php echo $data['cate']; ?> | <span><?php echo $data['modelno']; ?></h4>
                    <p><?php echo $data['details']; ?></p>
                     <td><a href="admin/print.php?pid=<?php echo $data['id']; ?>"><button class="button button2" >Buy Now</button> </a></td>
                </fieldset>
                                     <?php
    }
    }

?>
        </div>

        <!-- Brand Asus-->
        <div class="featuredpara_pg12" id="Asus">
            <h2 >Asus</h2>
        </div>
        <div class="products">
            <?php


    include('dbconnect.php');

    $qry = "SELECT * FROM `laptop` WHERE `cate` = 'Asus' LIMIT 3 ";  
    $run = mysqli_query($con,$qry);

    if (mysqli_num_rows($run)>0) {
        # code...
        //$data = mysqli_fetch_assoc($run);
        while ($data=mysqli_fetch_assoc($run)){
        ?>
            <fieldset class="col1">


                    <legend>New</legend>
                   <img src="admin/dataimg/<?php echo $data['img'] ?>" class="img1" />
                    <h3><span><?php echo $data['price']; ?><strike>$642.45</strike></h3>
                    <h4><span><?php echo $data['cate']; ?> | <span><?php echo $data['modelno']; ?></h4>
                    <p><?php echo $data['details']; ?></p>
                     <td><a href="admin/print.php?pid=<?php echo $data['id']; ?>"><button class="button button2" >Buy Now</button> </a></td>
                </fieldset>
                                     <?php
    }
    }

?>

        </div>

    </div>
</section>


 <?php  include('footer.php'); ?>