<?php

include('dbconnect.php');


$id = $_REQUEST['sid'];
$qry = " DELETE FROM `laptop` WHERE `id` = '$id'";

$run  = mysqli_query($con,$qry);

if ($run == true) { 

	?>
	<script>
		alert('Data Delete Successfuly.');
		<?php 
		header('location:update.php?sid=$id');
		?>
	</script>
	<?php

}



?>
<!-- Customer Delete-->
<?php

include('dbconnect.php');


$id = $_REQUEST['sid'];
$qry = " DELETE FROM `user_details` WHERE `id` = '$id'";

$run  = mysqli_query($con,$qry);

if ($run == true) { 

	?>
	<script>
		alert('Data Delete Successfuly.');
		<?php 
		header('location:updateCus.php?sid=$id');
		?>
	</script>
	<?php

}



?>