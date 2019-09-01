<!-- connecting the file -->
<?php
include "connection1.php";
include "A_Header1.php";
?>
<!-- designing the form  -->
<div class="form-design" style="height: 220px">
<br/>
<title>Create Discount</title>
<label class="lbl-des">Create Discount</label>
<br/><br/>
<form method="POST">
	<!-- create select format to fetch data from item table -->
<select name="it_id" class="txt-design">
				<option>-- Select Product --</option>
				<?php
				$str="select * from item_info";
				$record=mysqli_query($conn,$str);
				while($rec=mysqli_fetch_Assoc($record))
				{
					   echo "<option value='".$rec['it_id']."'>".$rec['it_name']."</option>";
					}
			?>
			</select><br/><br/>
<input type="text" name="Duration" placeholder="Duration of Discount" class="txt-design" required/><br/><br/>
<input type="text" name="per" placeholder="Discount Percentage" class="txt-design" required/><br/><br/>
<button class="btn-save" name="btnlogin">Add Discount</button>
<input type="reset" name="btnreset" class="btn-cancel">
</form>
<!-- insert data into Discount table -->
<?php
 if($_POST)
 {
	$Duration=$_POST['Duration'];
	$per=$_POST['per'];
	$it_id=$_POST['it_id'];
    $sql = "insert into dis_info(Duration,per,it_id)
values('$Duration','$per','$it_id')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New Record Created Sucessfully');window.location('A_create_discount.php');</script>";
} else {
    echo "<script>alert('Could not insert');window.location('A_create_discount.php');</script>";
}
$conn->close();
}
?>