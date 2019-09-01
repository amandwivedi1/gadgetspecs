<!-- connecting the file -->
<?php
include "A_Header1.php";
include "connection1.php";
?>
<!-- internal css -->
<title>Review</title>
<style type="text/css">
		.head
		{
			background-color:#670E71;
			height: 40px;
			width: 50%;
			font-size: 30px;
			color: white;
			border-radius: 20px;
		}
		.td
		{
			width:250px;
			text-align: center;
			height:40px;
		}
		.table
		{
			border-collapse: collapse;
		}
</style>
<div style="margin-top: 2%;">
		<div class="head"><center>Check Reviews</center><br/></div>
<br/><br/>
<form id="form1"  method="POST">
<table>
	<tr>
	<th class="td">
	<label>Review Id</label>
	</th>
	<th class="td">
	<label>Email Id</label>
	</th>
	<th class="td">
	<label>Item Id</label>
	</th>
		<th class="td">
	<label>Review</label>
	</th>
		<th class="td">
	<label>Date</label>
	</th>
	</tr>
</table>
<?php
	$q="select * from revi_info";
$r=mysqli_query($conn,$q);
while($row=mysqli_fetch_assoc($r))
{
?>
</form>
<form id="form2"  method="POST">
<table border="1" class="table">
	<tr>
<td class="td">
	<label><?php echo $row["Re_id"]?></label>
	</td>
	<td class="td">
	<label><?php echo $row["Email_id"]?></label>
	</td>
	<td class="td">
	<label><?php echo $row["Item_id"]?></label>
	</td>
	<td class="td">
	<label><?php echo $row["re_msg"]?></label>
	</td>
	<td class="td">
	<label><?php echo $row["Date"]?></label>
	</td>
</tr>
</table>
<?php
}
?>
</div>
</center>