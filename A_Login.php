<!-- connecting the file & session start-->
<?php
include "connection1.php";
session_start();
?>
<!-- designing login page  -->
<link type="text/css" rel="stylesheet" href="A_Design1.css"/>
</head>
<body>
	<div class="f_div">  
	</div>
<div class="form-design">
<br/>
<title>Login</title>
<form action="" method="POST">
<label class="lbl-des">Admin Login</label>
<br/><br/>
<input type="text" name="txtid" placeholder="Admin User Id" class="txt-design" required /><br/><br/>
<input type="password" name="txtpswd" placeholder="Admin password" class="txt-design" required /><br/><br/>
<button class="btn-save" name="btnlogin">Login</button>
<input type="reset" name="btnreset" class="btn-cancel">
</div>
</form>
<!-- insert data in admin table -->
<?php
if($_POST){
	$user = $_POST['txtid'];
	$password = $_POST['txtpswd'];
$sql = "SELECT Ad_id, Ad_pass from adm_info where Ad_id = '$user' ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
	$pass = $row['Ad_pass'];
	if ($password == $pass) {
		$_SESSION['Ad_id']=$user;
	    echo "<script>alert('Admin Login Sucessfully');window.location='a_header1.php'</script>";
	} else {
	    $message="Wrong Password, please check again";
	    echo "<script type='text/javascript'>alert('$message');</script>";
	    echo "<td><a href='A_login.php'>";
	}
}
$conn->close();
}
?>
