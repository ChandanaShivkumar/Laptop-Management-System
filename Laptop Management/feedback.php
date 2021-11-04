<?php include('header.php');  ?>
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
 

               
            <p class="para1">Specials</p>
            <div class="Special" id="Specials">

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="img/image1.png" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>$24.34<strike>$25.63</strike></h3>
                        <p>Apple MacBook Pro 13-inch Laptop</p>
                    </div>
                </fieldset>

            
            </div>

        </div>
         <!------------------- part 2----------------------------->

        <!-- This is section 2 of the page -->
        
             <div class="section2">
            
            <?php include('menu.php'); ?>

            

        <!-- Brand HP-->

        
        <style>
    input[type=text].r, select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  border-spacing: 20px;
  margin-bottom:10px;
}
  input[type=password].r, select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  border-spacing: 20px;
  margin-bottom:10px;
}
input[type=reset].r, select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  border-spacing: 20px;
  margin-bottom:10px;
}
/*table{
  border: 1px solid black;
  border-radius: 20px;
  outline-style: solid;
  outline-color: ;
  padding: 50px;
}*/
table{
    
    padding: 50px;
}

td{
  font-weight: bold;
}

.button {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}

.button:hover {opacity: 1}

</style>
<form method="post" action="shoping_cart.php" class="pure-form" enctype="multipart/form-data">
    <table  align="center" style="margin-top:7%; outline: 50;" width="80%">
        <tr>
            <td>NAME</td>
            <td><input type="text" class="r" name="name" placeholder="Enter Your UserName" required></td>
        </tr>
            <tr>
            <td>MESSAGE</td>
            <td><input type="text" class="r" name="message" width="80%" placeholder="Enter the message" required></td>
        </tr>       
        <tr>
            <td>REVIEW</td>
            <td><input type="text" class="r" name="addre" width="80%" placeholder="Enter review (out of 5)" required></td> 
            </tr>

            <!--
            <tr>
            <td>CITY</td>
            <td><input type="text" class="r" name="city" width="80%" placeholder="Enter Your CITY" required></td>
        </tr>
        <TR>
        <td>EMAIL</td>
            <td><input type="text" class="r" name="email" width="80%" placeholder="Enter Your EMAIL" required></td>
</TR>
 <tr>
            <td>MOBILE NO</td>
            <td><input type="TEXT" class="r" name="mob" width="80%" placeholder="Enter Your MOBILE NO" required></td>
        </tr>
         <tr>
            <td>ADDHAR NO</td>
            <td><input type="TEXT" class="r" name="ahd" width="80%" placeholder="Enter Your ADDHAR NO" required></td>
        </tr>
         <tr>
            <td>PASSWORD</td>
            <td><input type="password" class="r"  id="password" name="pass" width="80%" placeholder="Enter Your PASSWORD" required></td>
        </tr>
         <tr>
            <td>CONFIRM PASSWORD</td>
            <td><input type="password" class="r" id="confirm_password" name="pass" width="80%" placeholder="Enter Your CONFIRM PASSWORD" required></td>
        </tr>
         <tr> -->

            <td colspan="2" align="center"><input class="button" type="submit" name="submit" value="Submit" >
             <input type="reset" name="" class="button" value="Reset"></td>
        </tr>
        
    </table>

</form>
 

      

    </div>
     
</section>
<?php  include('footer.php'); ?>


 
 <?php
if (isset($_POST['submit'])) {
  include('dbconnect.php');

  $name = $_POST['name'];
  $message= $_POST['message'];
  $review= $_POST['review'];

  
  

  $qry = "INSERT INTO `feedback`(`name`, `message`, `review`)   VALUES ('$name','$message','$review')";

  $run  = mysqli_query($con,$qry);
 
  if ($run == true) {

    ?>
    <script>
      alert('THANK YOU FOR YOUR FEEDBACK');
    </script>
    <?php

  }

}
 ?>

