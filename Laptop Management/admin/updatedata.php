
<?php
include('dbconnect.php');

	$cate = $_POST['cate'];
	$modelno= $_POST['modelno'];
	$price= $_POST['price'];
	$details= $_POST['details'];


	$id = $_POST['sid'];
	$img= $_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name'];
	move_uploaded_file($tempname, "dataimg/$img");

	$qry = "  UPDATE `laptop` SET `cate` = '$cate', `modelno` = '$modelno', `price` = '$price', `details` = '$details', `img` = '$img' WHERE `id` = $id;";


	$run  = mysqli_query($con,$qry);
 
	if ($run == TRUE) { 

		?>
		<script>
			alert('Data UPDATE Successfuly.');
			<?php 
				header('location:update.php?sid=$id');
			?>
		</script>
		<?php

	}



?>