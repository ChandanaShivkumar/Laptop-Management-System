
<?php session_start(); ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Login...</title>
<link rel="stylesheet" type="text/css" href="css/login.css" />
</head>
<body >
    
<div class="container" style="margin-top: 10%">
    <section id="content">
        <form action="my_account.php" method="post">
            <h1>Sign In Form</h1>
            <div>
                <input type="text" placeholder="Username" name="name" required="" id="username" />
            </div>
            <div>
                <input type="password" placeholder="Password" name="pass" required="" id="password" />
            </div>
            <div>
              <input type="submit" name="login" value="Sign in" />
                <a href="#"></a>
                <a href="register.php">Sign Up</a>
                <a href="admin/index.php">Admin Login</a>
            </div>
        </form><!-- form -->
        
    </section><!-- content -->
</div><!-- container -->
</body>
</html>

<?php 
 include("dbconnect.php");

 if (isset($_POST['login'])){
    $username = $_POST['name'];
    $password = $_POST['pass'];

    $query = "SELECT * FROM `user_details` WHERE `email` = '$username ' AND `pass` = '$password'";
    $run = mysqli_query($con,$query);
    $row = mysqli_num_rows($run);
    if($row < 1){
        ?>
        <script>
            alert("User Name or Password not match!");
            window.open('my_account.php'._self);
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



           
      