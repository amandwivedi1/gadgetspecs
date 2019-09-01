<!-- connecting the file -->
<?php
include "connection1.php";
include "A_Header1.php";
?> 
<!-- design the sale form -->
<div class="form-design" style="height: 410px">
<br/>
<title>Upload Delivery</title>
<label class="lbl-des">Upload Delivery</label>
<br/><br/>
<form method="POST">
 <br/><br/>
 <select name="Pay_id" class="txt-design">
				<option>-- Select Customer Payment Id --</option>
				<?php
				$str="select * from pay_info";
				$record=mysqli_query($conn,$str);
				while($rec=mysqli_fetch_Assoc($record))
				{
					   echo "<option value='".$rec['Pay_id']."'>".$rec['Pay_id']."</option>";
					}
			?>
			</select>
 <br/><br/>
<input type="text" name="Del_to" placeholder="Name of Receiver" class="txt-design" required/><br/><br/>
<input type="date" name="Del_date" placeholder="Date & Time of Delivery" class="txt-design" required/><br/> <br/>
<input type="text" name="Del_status" placeholder="Delivery Status of Item" class="txt-design" required/><br/><br/>
<button class="btn-save" name="btnsave">Update Delivery</button>
<input type="reset" name="btnreset" class="btn-cancel">
</form>
<!-- insert data in category table -->
 <?php
if(isset($_POST['btnsave']))
{
	$Pay_id=$_REQUEST['Pay_id'];
	$Del_to=$_POST['Del_to'];
	$Del_date=$_POST['Del_date'];
	$Del_status=$_POST['Del_status'];
	$query="insert into delivery (Pay_id,Del_to,Del_date,Del_status)
	values('$Pay_id','$Del_to','$Del_date','$Del_status')";
	if(mysqli_query($conn,$query))
	{
		 $id=$conn->insert_id;
     echo "<script>alert('Upload Delivery Sucessfully');window.location='A_Header1.php'</script>";
	}
	else
	{
		echo "<script>alert('Could not Upload Delivery');window.location='A_Upload_Delivery.php'</script>";

	}
}
?>