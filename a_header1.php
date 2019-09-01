<!-- connecting the file -->
<?php
include "validate.php";
?>
<!-- designing the  header page with session -->
<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="A_Design1.css"/>
</head>
<title>Home</title>
<body>
	<div class="f_div">
		<?php 
if(isset($_SESSION['Ad_id']))
{?>
		<td><a href="a_add_item.php"><button class="btn-des">Items</button></a></td>
		<td><a href="a_upload_category.php"><button class="btn-des">Categories</button></a></td>
		<td><a href="a_create_discount.php"><button class="btn-des">Discounts</button></a></td>
		<td><a href="a_rec_payment.php"><button class="btn-des">Payments</button></a></td>
		<td><a href="a_geneerate_invoice.php"><button class="btn-des">Invoice</button></a></td>
		<td><a href="a_upload_delivery.php"><button class="btn-des">Delivery</button></a></td>
		<td><a href="a_review.php"><button class="btn-des">Reviews</button></a></td>
		<td><a href="a_requirements.php"><button class="btn-des">Requirements</button></a>
		<td><a href="a_sales.php"><button class="btn-des">Sales</button></a></td>
		<td><a href="Logout.php"><button class="btn-des">Logout</button></a></td>
<?php
}
else
{?>
		<td><a href="a_Login.php"><button class="btn-des">Login</button></a></td>
<?php
}
?>
	</div>
	<marquee>
	<span class="h-txt1">
		<b>We provide product for using purpose only not to sale.</b>
	</span>
</marquee>
	<img src="Images/administion.jpg" class="img1" />
</body>
</html>