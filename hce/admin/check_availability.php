<?php 
require_once("include/config.php");
if(!empty($_POST["emailid"])) {
	$email= $_POST["emailid"];
	
		$result =mysqli_query($con,"SELECT docEmail FROM doctores WHERE docEmail='$email'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Email ya existe .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Correo electrónico disponible para registrarse .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>
