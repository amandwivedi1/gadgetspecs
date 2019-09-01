<!-- connecting the file -->
<?php
include "connection1.php";
include "A_Header1.php";
?>
<!-- designing the form  -->
<div class="form-design" style="height: 200px">
<br/>
<label class="lbl-des">Genrate Invoice</label>
<br/><br/>
<form method="POST">
 <br/><br/>
	<!-- create select format to fetch data from payment table -->
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
<button class="btn-save" name="btnsave">Genrate Invoice</button>
<input type="reset" name="btnreset" class="btn-cancel">
</form>
</div>
<!-- fetch data into invoice table -->
<?php
if(isset($_POST['btnsave']))
{
$id=$_POST['Pay_id'];
$query="select p.Pay_id,p.Total_price,p.Pay_mode,p.Basket_id,p.Email_id,p.Del_add,p.C_phone,p.Pay_date,b.Bas_id,b.Total_item,b.Item_id,c.it_id,c.it_name,c.It_brand from pay_info p join bast_info b  on p.Basket_id=b.Bas_id join  item_info c on  c.it_id=b.Item_id where Pay_id='$id' ";
$r=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($r))
{
	?>
<!-- create invoice format -->
<div style="background-color:#F8F9F9;margin-right: 30%;margin-left: 30%;height:700px;">
	<table>
		<tr>
			<td>
			</td>
		</tr>
	</table>
	<span style="float:left;padding: 30px;">ElectricEra pvt.ltd.
		<br/>
		<span style="font-size: 13px;">
		<br/>Krishan Vihar,<br/>
		Rohini,Delhi-110086
		<br/>
9582846081 <br/>
	</span>
	</span>
	<span style="float:right;padding: 30px;"><span style="color:#D35400;font-size: 20px;font-weight:20px;">INVOICE</span><br/>
				<span style="font-size: 13px;">
<br/>
INVOICE#<br/>
Date: <?php echo date('d-m-Y')?>
<br/>
suport.eraelectri@gmail.com 
</span>
	</span>
<br/>
<br/><br/><br/><br/><br/><br/><br/>
<hr/>
<br/>
	<span style="float:left;margin-left: 5%;">BILL TO
			<span style="font-size: 13px;">
		<br/>
		Name Electroworld pvt.ltd.
		<br/>
		Address   
			<span style="font-size: 13px;">
		<br/>
		Krishan Vihar,<br/>
		Rohini,Delhi-110086	
<br/>
	</span>
		Phone
		<span style="font-size: 13px;">
	9582846081 
<br/>
	</span>
		<br/>
</span>
	</span>
		<span style="float:right;margin-right: 15%;">
			SHIP TO
		<br/>
			<span style="font-size: 13px;">
						<?php
				$str1="select * from  cust_reg_info";
				$record1=mysqli_query($conn,$str1);
				while($rec1=mysqli_fetch_Assoc($record1))
				{?>
		Name <?php echo $rec1['C_name']?><br/>
		<?php } ?>
		Phone No <?php echo $row['C_phone']?><br/>
		Address <?php echo wordwrap($row['Del_add'],5,"<br>\n")?><br/>
	</span>
	</span>
<br/>
<style type="text/css">
table
{
	border-collapse: collapse;
	margin-left: 6%;
}
th
{
width:90px;
text-align: center;
	background-color:#F5B041;
}
	th,td
	{
width:90px;
text-align: center;
	}
</style>
<br/><br/><br/><br/>
<div style="margin-top:4%;">
	<br/>	<br/>
<table border="1" class="F-table">
	<tr>
			<th class="F_th1"><label>Payment Id</label></th>
					<th class="F_th1"><label>Brand</label></th>
		<th class="F_th1"><label>Item</label></th>
		<th class="F_th1"><label>Quantity</label></th>
		<th class="F_th1"><label>Payment Mode</label></th>
	</tr>
	<tr>
				<td class="F_td1"><label><?php echo $row['Pay_id']?></label></td>
					<td class="F_td1"><label><?php echo $row['It_brand']?></label></td>
					<?php
				$str="select * from  item_info where it_id='".$row['it_id']."' ";
				$record=mysqli_query($conn,$str);
				while($rec=mysqli_fetch_Assoc($record))
				{?>
				<td class="F_td1"><label><?php echo $rec['it_name']?></label></td>
				<?php } ?>
				<td class="F_td1"><label><?php echo $row['Total_item']?></label></td>
				<td class="F_td1"><label><?php echo $row['Pay_mode']?></label></td>		
</tr>
</table>
<br/><br/>
<span style="float:right;margin-right:8%;"><b>TOTAL </b>  <label><?php echo $row['Total_price']?></label></span>
<?php
 }
?>
<a href="A_Geneerate_invoice.php">Back</a><br/><br/><br/><br/>
<p>Note: Ctrl+S to save the Bill</p>
</div>
</div>
<?php
}
?>