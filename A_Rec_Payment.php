<!-- connecting the file -->
<?php
include "A_Header1.php";
include "connection1.php";
?>
<!-- internal css -->
<title>Payment</title>
<style type="text/css">
		.head
		{
			background-color:#F45D06;
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
		<div class="head"><center>Order Payment Information</center><br/></div>
<br/><br/>
<form id="form1"  method="POST">
<table>
	<tr>
	<th class="td">
	<label>Payment Id</label>
	</th>
	<th class="td">
	<label>Email Id</label>
	</th>
	<th class="td">
	<label>Basket Id</label>
	</th>
	<th class="td">
	<label>Total Price</label>
	</th>
	<th class="td">
	<label>Payment Mode</label>
	</th>
	<th class="td">
	<label>Delivery Address</label>
	</th>
	<th class="td">
	<label>Phone No</label>
	</th>
	<th class="td">
	<label> Payment Date</label>
	</th>
	</tr>
</table>
<?php
	$q="select * from pay_info";
$r=mysqli_query($conn,$q);
while($row=mysqli_fetch_assoc($r))
{
?>
</form>
<form id="form2"  method="POST">
<table class="table">
	<tr>
<td class="td">
	<label><?php echo $row["Pay_id"]?></label>
	</td>
	<td class="td">
	<label><?php echo $row["Email_id"]?></label>
	</td>
	<td class="td">
	<label><?php echo $row["Basket_id"]?></label>
	</td>
	<td class="td">
	<label><?php echo $row["Total_price"]?></label>
	</td>
	<td class="td">
	<label><?php echo $row["Pay_mode"]?></label>
	</td>
	<td class="td">
	<label><?php echo $row["Del_add"]?></label>
	</td>
	<td class="td">
	<label><?php echo $row["C_phone"]?></label>
	</td>
	<td class="td">
	<label><?php echo $row["Pay_date"]?></label>
	</td>
</tr>
</table>
<?php
}
?>
</div>
</center>