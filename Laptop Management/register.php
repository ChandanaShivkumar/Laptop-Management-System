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
            <td><input type="text" class="r" name="name" placeholder="Enter Your Name" required></td>
        </tr>
            <tr>
            <td>LAST NAME</td>
            <td><input type="text" class="r" name="lname" width="80%" placeholder="Enter Last Your Name" required></td>
        </tr>       
        <tr>
            <td>ADDRESS</td>
            <td><input type="text" class="r" name="addre" width="80%" placeholder="Enter Your ADDRESS" required></td> 
            </tr>
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
        <td colspan="2" align="center"><input class="button" type="submit" name="submit" value="Submit" >
             <input type="reset" name="" class="button" value="Reset"></td>
         <tr>
          <div>
             <a href="#"></a>
             <a href="index.php">Submit</a>
          </div>
        </tr>
        
    </table>

</form>
 

      

    </div>
     
</section>



 <script >
     var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
 </script>
 <?php
if (isset($_POST['submit'])) {
  include('dbconnect.php');

  $name = $_POST['name'];
  $lname= $_POST['lname'];
  $addre= $_POST['addre'];
  $city= $_POST['city'];
  $email= $_POST['email'];
  $mob = $_POST['mob'];
  $ahd= $_POST['ahd'];
  $pass= $_POST['pass'];

  
  

  $qry = "INSERT INTO `user_details`(`name`, `lname`, `addre`, `city`, `email`, `mob`, `ahd`, `pass`)   VALUES ('$name','$lname','$addre','$city', '$email', '$mob','$ahd','$pass')";

  $run  = mysqli_query($con,$qry);
  $row = mysqli_num_rows($run);
    if($row < 1){
        ?>
        <script>
            alert("User Name or Password not match!");
            window.open('register.php'._self);
        </script>
        <?php
    }
    else{
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
        echo "id = ".$id;

     ?>
      <script>
            alert('Welcome.');
            <?php
        $_SESSION['uid'] = $id;
        header("location:index.php");
        ?>
          </script>
          <?php

  }

}
 ?>