<?php


include ('dbconnect.php');

			
			$id =$_GET['eid'];		
			$newsql ="DELETE FROM `admin` WHERE id ='$id' ";
			if(mysqli_query($con,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("User name and password Added") </script>';
							
						
				}
			header("Location: settings.php");
		
?>


