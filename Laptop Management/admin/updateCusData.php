<?php

include('dbconnect.php');

$name = $_POST['name'];
$lname= $_POST['lname'];
$addre= $_POST['addre'];
$city= $_POST['city'];
$email= $_POST['email'];
$mob = $_POST['mob'];
$ahd= $_POST['ahd'];
$id = $_POST['sid'];

$qry = " UPDATE `user_details` SET `name`='$name',`lname`='$lname',`addre`='$addre',`city`='$city',`email`='$email',`mob`='$mob',`ahd`='$ahd' WHERE `id` = $id;";


$run  = mysqli_query($con,$qry);

if ($run == TRUE) { 

	?>
	<script>
		alert('Data UPDATE Successfuly.');
		<?php 
		header('location:updateCus.php?sid=$id');
		?>
	</script>
	<?php

}



?>