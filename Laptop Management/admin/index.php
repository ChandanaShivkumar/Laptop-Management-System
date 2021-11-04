<?php  
session_start();  
if(isset($_SESSION["user"]))  
{  
  header("location:dashboard.php");  
}  

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Welcome To Laptop Store</title>
  
  
  
  <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div id="clouds">
    <div class="cloud x1"></div>
    <!-- Time for multiple clouds to dance around -->
    <div class="cloud x2"></div>
    <div class="cloud x3"></div>
    <div class="cloud x4"></div>
    <div class="cloud x5"></div>
  </div>

  <div class="container">


    <div id="login">
     <h1 align="center"> Admin Login </h1>
     <br>
     <br>
     <form method="post">

      <fieldset class="clearfix">

        <p>
         <span class="fontawesome-user"></span>
         <input type="text"  name="user" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required>
       </p>

       <p>
         <span class="fontawesome-lock"></span>
         <input type="password" name="pass"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> 
         <p><input type="submit" name="sub"  value="Login"></p>

       </fieldset>

     </form>

     

   </div> <!-- end login -->


 </div>
 <br>
 <br> <br>
 <br>
 <div class="bottom">  <h4><a href="../index.php">Laptops Shop</a></h4></div>
 
 
</body>
</html>


<?php 
include("dbconnect.php");

if (isset($_POST['sub'])){
  $username = $_POST['user'];
  $password = $_POST['pass'];

  $query = "SELECT * FROM `admin` WHERE `uname` = '$username ' AND `pass` = '$password'";
  $run = mysqli_query($con,$query);
  $row = mysqli_num_rows($run);
  if($row < 1){
    ?>
    <script>
      alert("User Name or Password not match!");
      window.open('login.php'._self);
    </script>
    <?php
  }
  else{
    $data = mysqli_fetch_assoc($run);
    $id = $data['id'];
    echo "id = ".$id;

    
    $_SESSION['user'] = $id;
    header("location:dashboard.php");

  }
}



?>