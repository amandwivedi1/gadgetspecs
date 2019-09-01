<!-- connecting the file -->
<?php
include "connection1.php";
include "A_Header1.php";
?>
<!-- design the sale form -->
<div class="form-design" style="height: 250px">
<br/>
<title>Sales</title>
<label class="lbl-des" style="margin-left:140px">Sales</label>
<br/><br/>
<form method="POST">
<input type="text" name="txtis" placeholder="Total Sale of Item" class="txt-design" required/><br/><br/>
<input type="text" name="txttm" placeholder="Total Amount of Sales" class="txt-design" required/><br/><br/>
<input type="text" name="txtds" placeholder="Duration of Sales" class="txt-design" required/><br/><br/>
<button class="btn-save" name="btnlogin">Add Sales</button>
<input type="reset" name="btnreset" class="btn-cancel">
</form>
<!-- insert data in sale table -->
<?php
 if($_POST){
	$sait=$_POST['txtis'];
	$saamt=$_POST['txttm'];
	$sadu=$_POST['txtds'];
    $sql = "insert into sal_info (To_sa,Total_amt,Duration)
values('$sait','$saamt','$sadu')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Upload Sales Sucessfully');window.location='a_header1.php'</script>";
} else {
    echo "<script>alert('Could not Upload sales');window.location='A_sales.php'</script>";
}
$conn->close();
}
?>