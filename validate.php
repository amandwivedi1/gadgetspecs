<!-- validate page -->
<?php
session_start();
?>
<?php
if(isset($_SESSION['Ad_id']))
{

}
else
{
	echo "<script>alert('Please Login First');window.location='A_Login.php';</script>";
}
?>