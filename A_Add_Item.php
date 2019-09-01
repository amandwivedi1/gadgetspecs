<!-- connecting the file -->
<?php
include "connection1.php";
include "A_Header1.php";
?>
<!-- designing the form  -->
<div class="form-design" style="height: 420px">
<br/>
<title>Add Items</title>
<label class="lbl-des" style="margin-right: 25px">Add Items</label>
<br/><br/>
<form method="POST" enctype="multipart/form-data">
<input type="text" name="it_name" placeholder="Name of Item" class="txt-design" required /><br/><br/>
<!-- create select format to fetch data from category table -->
<select name="Cat_id" class="txt-design" required >
    <option value="0">--Select Category--</option>
<?php
$q="select *from categ_info";
$r=mysqli_query($conn,$q);
while($row=mysqli_fetch_assoc($r))
{
?>
<option value="<?php echo $row["Cat_id"]?>"><?php echo $row["C_name"]?></option>
<?php
}
?>
</select>
<br/><br/>
<input type="text" name="It_color" placeholder="Color of Item" class="txt-design" required/><br/><br/>
<input type="text" name="It_brand" placeholder="Brand of Item" class="txt-design" required/><br/><br/>
<label for="file">
	<input type="file" name="It_ima1" class="txt-design" required/><br/><br/>
	<input type="file" name="It_ima2" class="txt-design" required /><br/><br/>
</label>
<select name="Di_id" class="txt-design">
    <option value="0">--Select Discount--</option>
<?php
$q="select *from dis_info";
$r=mysqli_query($conn,$q);
while($row=mysqli_fetch_assoc($r))
{
?>
<option value="<?php echo $row["Di_id"]?>"><?php echo $row["per"]?></option>
<?php
}
?>
</select>
<br/><br/>
<input type="text" name="price" placeholder="Price of item" class="txt-design" required /><br/><br/>
<button class="btn-save" name="btnsave">Add</button>
<input type="reset" name="btnreset" class="btn-cancel">
</form>
</div>
<!-- insert data into item table -->
<?php
if(isset($_POST['btnsave']))
{
        $it_name=$_POST['it_name'];
    	$Cat_id=$_POST['Cat_id'];
    	$It_color=$_POST['It_color'];
    	$It_brand=$_POST['It_brand'];
        $It_ima1 =$_POST['It_ima1'];
        $It_ima2 =$_POST['It_ima2'];
    	$Di_id=$_POST['Di_id'];
        $price=$_POST['price'];
        $i="uploads/";
        $i1="uploads/";
  $i=$i.basename($_FILES["It_ima1"]["name"]);
     move_uploaded_file($_FILES["It_ima1"]["tmp_name"],$i);
    $i1=$i1.basename($_FILES["It_ima2"]["name"]);
     move_uploaded_file($_FILES["It_ima2"]["tmp_name"],$i1);
        $sql = "insert into item_info(it_name,Cat_id,It_color,It_brand,It_ima1,It_ima2,Di_id,price)
        values('$it_name','$Cat_id','$It_color','$It_brand','"."uploads/" . $_FILES["It_ima1"]["name"]."','"."uploads/" . $_FILES["It_ima2"]["name"]."','$Di_id','$price')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New Record Created Sucessfully');window.location('A_add_item.php');</script>";
    } else {
        echo "<script>alert('Could not insert');window.location('A_add_item.php');</script>";
    }
    $conn->close();
    }
?>