<?php
include('dbconnect.php');


if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    $qry= "INSERT INTO 'feedback' ('name', 'subject', 'message') VALUES ('$name', '$subject', '$message')";

    		$run = mysqli_query($con, $qry);

    		if ($run) 
    		{
    			echo '<script> alter("Feedback Sent") </script>';
    			# code...
    		}
    		else {
    			echo '<script>alter ("Sorry! check the system") </script>';
    		}
  # code...
}

?>