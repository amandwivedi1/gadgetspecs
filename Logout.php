<!-- logut session destroy -->
<?php
session_start();
?>
<?php
if(isset($_SESSION['Ad_id']))
{
	session_destroy();
		echo "<script>alert('Logout Sucessfully.');window.location='A_Login.php';</script>";

}
else
{

}
?>