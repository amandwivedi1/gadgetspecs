<!-- connecting the file -->
<?php
include "A_Header1.php";
include "connection1.php";
?>
<!-- internal css -->
<title>Requirements</title>
<style type="text/css">
		.head
		{
			background-color:#F42A06;
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
		<div class="head"><center>Check Requirements</center><br/></div>
<br/><br/>
<form id="form1"  method="POST">
<table>
	<tr>
	<th class="td">
	<label>Requirement Id</label>
	</th>
	<th class="td">
	<label>Email Id</label>
	</th>
	<th class="td">
	<label>Item Id</label>
	</th>
	<th class="td">
	<label>Requirements</label>
	</th>
	<th class="td">
	<label>Date</label>
	</th>
	</tr>
</table>
<?php
	$q="select * from req_info";
$r=mysqli_query($conn,$q);
while($row=mysqli_fetch_assoc($r))
{
?>
</form>
<form id="form2"  method="POST">
<table border="1" class="table">
	<tr>
<td class="td">
	<label><?php echo $row["Req_id"]?></label>
	</td>
	<td class="td">
	<label><?php echo $row["Email_id"]?></label>
	</td>
	<td class="td">
	<label><?php echo $row["Item_id"]?></label>
	</td>
	<td class="td">
	<label><?php echo $row["Req"]?></label>
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