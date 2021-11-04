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

            <!-- 2 laptop -->
            <div class="content1">
                <div class="innertitle1">
                    <h3>For Student</h3>
                    <p class="para1">Comfort is a very important things nowadays because it is a condition of satifaction.</p>
                    <br />
                    <p class="para1">Shop Now!</p>
                </div>

                <div class="innertitle2">
                    <h3>For Home Appliances</h3>
                    <p class="para1">Comfort is a very important things nowadays because it is a condition of satifaction.</p>
                    <br />
                    <p class="para1">Shop Now!</p>
                </div>

                <div class="inner1">
                    <img src="img/slide1.png" class="img1" />
                </div>
                <div class="inner2">
                    <img src="img/slide3.png" class="img2" />
                </div>
            </div>





            <!-- Latest 3 laptop -->
            <p class="featuredpara">Latest</p>
            <div class="products">
                <?php


    include('dbconnect.php');

    $qry = "SELECT * FROM `laptop` LIMIT 3 ";  
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
                     <!-- <td><a href="cart.php<?php echo $data['id']; ?>"><button class="button button2" >Add to Cart</button> </a></td> -->
                </fieldset>
                                     <?php
    }
    }

?>


  <?php

    $qry = "SELECT * FROM `laptop` WHERE `cate` = 'hp' ";  
    $run = mysqli_query($con,$qry);

    if (mysqli_num_rows($run)>0) {
        # code...
        //$data = mysqli_fetch_assoc($run);
        while ($data=mysqli_fetch_assoc($run)){
        ?>
               <!--  <fieldset class="col2">
                  
                    <legend>New</legend>
                   <img src="admin/dataimg/<?php echo $data['img'] ?>" class="img1" />
                    <h3><span><?php echo $data['price']; ?><strike>$642.45</strike></h3>
                    <h4><span><?php echo $data['cate']; ?> | <span><?php echo $data['modelno']; ?></h4>
                    <p><?php echo $data['details']; ?></p>

    
                </fieldset> -->
                 <?php
    }
    }

?><!-- 
                <fieldset class="col3" >
                    <legend>New</legend>
                    <img src="img/hp2.png" class="img1" />
                    <h3>$49.41<strike>$50.31</strike></h3>
                    <h4>HP Envy 4527 All-in-One Printer, Instant Ink Compatible with 4 Months Trial</h4>
                    <p>Print, scan or copy quickly and easily with the 2.2 inch (5.5 cm) display - simply touch and go...</p>
                                        
                </fieldset> -->
            </div>


            <!-- Fearured 6 laptop -->
            <p class="featuredpara">Featured</p>

            <div class="products">

  <?php

    $qry = "SELECT * FROM `laptop` WHERE `cate` = 'hp' LIMIT 3 ";  
    $run = mysqli_query($con,$qry);

    if (mysqli_num_rows($run)>0) {
        # code...
        //$data = mysqli_fetch_assoc($run);
        while ($data=mysqli_fetch_assoc($run)){
        ?>
                <fieldset class="col1">
                    <legend>Hot Deal</legend>
                     <img src="admin/dataimg/<?php echo $data['img'] ?>" class="img1" />
                    <h3><span><?php echo $data['price']; ?><strike>$642.45</strike></h3>
                    <h4><span><?php echo $data['cate']; ?> | <span><?php echo $data['modelno']; ?></h4>
                    <p><?php echo $data['details']; ?></p>
                      <!-- <td><a href="cart.php<?php echo $data['id']; ?>"><button class="button button2" >Add to Cart</button> </a></td> -->
                </fieldset>
     <?php
    }
    }

?>
             <!--    <fieldset class="col2">
         <legend>Hot Deal</legend>
                     <img src="admin/dataimg/<?php echo $data['img'] ?>" class="img1" />
                    <h3><span><?php echo $data['price']; ?><strike>$642.45</strike></h3>
                    <h4><span><?php echo $data['cate']; ?> | <span><?php echo $data['modelno']; ?></h4>
                    <p><?php echo $data['details']; ?></p>

                </fieldset> -->


                <!-- <fieldset class="col3">
                    <legend>Hot Deal</legend>
                    <img src="img/image2.png" class="img1" />
                    <h3>$28.71<strike>$35.31</strike></h3>
                    <h4>Apple MacBook Pro 13-inch Laptop (Intel Dual-Core i5 2.4 GHz, 4 GB RAM, 500 GB HDD, Intel HD, OS X) - Silver - 2011</h4>
                    <p>2600 watts gives you a fast heat-up time and more power for performance in your battle against the creases...</p>
                </fieldset> -->
            </div>




            <div class="products" style="margin-top:3vh;">
                <?php

    $qry = "SELECT * FROM `laptop` WHERE `cate` = 'dell' LIMIT 3 ";  
    $run = mysqli_query($con,$qry);

    if (mysqli_num_rows($run)>0) {
        # code...
        //$data = mysqli_fetch_assoc($run);
        while ($data=mysqli_fetch_assoc($run)){
        ?>
                <fieldset class="col1">
                    <legend>Hot Deal</legend>
                    <img src="admin/dataimg/<?php echo $data['img'] ?>" class="img1" />
                    <h3><span><?php echo $data['price']; ?><strike>$642.45</strike></h3>
                    <h4><span><?php echo $data['cate']; ?> | <span><?php echo $data['modelno']; ?></h4>
                    <p><?php echo $data['details']; ?></p>
                  <!--  <a href="cart.php<?php echo $data['id']; ?>"><button class="button button2" >Add to Cart</button> </a> -->
                </fieldset>
  <?php
    }
    }

?>
             <!--    <fieldset class="col2">
                    <legend>Hot Deal</legend>
                    <img src="img/image3.png" class="img1" />
                    <h3>$449.12<strike>$559.23</strike></h3>
                    <h4>Apple MacBook Pro 13-inch Laptop (Intel Dual-Core i5 2.4 GHz, 4 GB RAM, 500 GB HDD, Intel HD, OS X) - Silver - 2011</h4>
                    <p>stunning 2.7K HD videos and 12 Megapixel photos with the integrated aerial camera. Stable Footage...</p>
                </fieldset>

                <fieldset class="col3">
                    <legend>Hot Deal</legend>
                    <img src="img/image7.png" class="img1" />
                    <h3>$239.59<strike>$259.81</strike></h3>
                    <h4>Apple MacBook Pro 13-inch Laptop (Intel Dual-Core i5 2.4 GHz, 4 GB RAM, 500 GB HDD, Intel HD, OS X) - Silver - 2011</h4>
                    <p>Keep your footage steady and reduce image blur with Sony's Optical SteadyShot...</p>
                </fieldset> -->
            </div>

        </div>
    </section>

<!-- -- section-3 = footer, 4 part- information, couster information,!> -->

    <?php  include('footer.php'); ?>