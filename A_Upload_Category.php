<!-- connecting the file -->
<?php
include "connection1.php";
include "A_Header1.php";
?>
<!-- design the sale form -->
<div class="form-design" style="height:280px;">
<br/>
<title>Upload Category</title>
<label class="lbl-des">Upload Category</label>
<br/><br/>
<form method="POST">
<input type="text" name="C_name" placeholder="Category Name" class="txt-design" required/><br/><br/>
<textarea name="C_de" cols="33" rows="4" style="margin-left: 20px;border-radius: 10px;" required></textarea><br/><br/>
<button class="btn-save" name="btnsave">Save</button>
<input type="reset" name="btnreset" class="btn-cancel">
</form>
</div>
<!-- insert data in category table -->
<?php
 if($_POST){  	
	$C_name=$_POST['C_name'];
	$C_de=$_POST['C_de'];
    $sql = "insert into categ_info(C_name,C_de) values('$C_name','$C_de')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New Record Created Sucessfully');window.location('A_Upload_Category.php');</script>";
} else {
    echo "<script>alert('Could not insert');window.location('A_Upload_Category.php');</script>";
}
$conn->close();
}
?>