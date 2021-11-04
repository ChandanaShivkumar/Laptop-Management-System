
            <p class="para1">Specials</p>
            <div class="Special" id="Specials">


 <?php


    include('dbconnect.php');

    $qry = "SELECT * FROM `laptop`";  
    $run = mysqli_query($con,$qry);

    if (mysqli_num_rows($run)>0) {
        # code...
        //$data = mysqli_fetch_assoc($run);
        while ($data=mysqli_fetch_assoc($run)){
        ?>
                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                       <img src="admin/dataimg/<?php echo $data['img'] ?>" class="img1" />
                    </div>
                    <div class="div2">
                        <h3><?php echo $data['price']; ?><strike>$25.63</strike></h3>
                        <p><?php echo $data['cate']; ?> | <span><?php echo $data['modelno']; ?></p>
                    </div>
                </fieldset>
  <?php
    }
    }

?>
               <!--  <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="img/image2.png" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>$399<strike>$402.30</strike></h3>
                        <p>Apple MacBook Pro 13-inch Laptop</p>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="img/image3.png" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>$16<strike>$18</strike></h3>
                        <p>Apple MacBook Pro 13-inch Laptop</p>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="img/image4.png" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>$133.89<strike>$134.16</strike></h3>
                        <p>Apple MacBook Pro 13-inch Laptop</p>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="img/image5.png" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>$14.92<strike></strike></h3>
                        <p>Apple MacBook Pro 13-inch Laptop</p>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="img/image6.png" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>$1.89<strike>$2</strike></h3>
                        <p>Apple MacBook Pro 13-inch Laptop</p>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="img/image7.png" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>$8.49<strike>$9</strike></h3>
                        <p>Apple MacBook Pro 13-inch Laptop</p>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="img/image7.png" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>$8.49<strike>$9</strike></h3>
                        <p>Apple MacBook Pro 13-inch Laptop</p>
                    </div>
                </fieldset> -->
            </div>

        </div>
         <!------------------- part 2----------------------------->


<!--- section-(part2) -- search box, nav bar( home, wish list.... items), slider,
----- below slider 2 laptop, latest 3 laptop, featured 6 laptop---------->

        <!-- This is section 2 of the page -->
        