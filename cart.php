<?php
$page_title = 'Welcome to this Site!';
include('includes/header.html');
?>
<!-- Start Banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="breadcrumb-banner row fullscreen align-items-center justify-content-start" >
                <div class="col-first">
                    <h1>Cart</h1>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->





<?php
$message = '';
if(isset($_GET["remove"]))
{
	$message = '
	<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		Item removed from Cart
	</div>
	';
}
if(isset($_GET["clearall"]))
{
	$message = '
	<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		Your Shopping Cart has been cleared...
	</div>
	';
}


?>

			
			<div class="table-responsive">
			<?php echo $message; ?>
			
			<div class="col-lg-4 order_box">
				<a class="primary-btn" value="checkout" href="store.php?action=clear">Clear Cart</a>
			</div>
			<table class="table table-bordered">
			
				<tr>
					<th width="40%">Item Name</th>
					<th width="10%">Quantity</th>
					<th width="20%">Price</th>
					<th width="15%">Total</th>
					<th width="5%">Action</th>
				</tr>
			
			<?php
			if(isset($_COOKIE["shopping_cart"]))
			{
				$total = 0;
				$cookie_data = stripslashes($_COOKIE['shopping_cart']);
				$cart_data = json_decode($cookie_data, true);
				foreach($cart_data as $keys => $values)
				{
			?>
				<tr>
					<td><?php echo $values["item_name"]; ?></td>
					<td><?php echo $values["item_quantity"]; ?></td>
					<td>$ <?php echo $values["item_price"]; ?></td>
					<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
					<td><a href="store.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Delete</span></a></td>
				</tr>
			<?php	
					$total = $total + ($values["item_quantity"] * $values["item_price"]);
				}
			?>
				<tr>
					<td colspan="3" align="right">Total</td>
					<td align="right">$ <?php echo number_format($total, 2); ?></td>
					<td></td>
				</tr>
			<?php
			}
			else
			{
				echo '
				<tr>
					<td colspan="5" align="center">No Item in Cart</td>
				</tr>
				';
			}
			?>
			
			</table>
			<div class="col-lg-4 order_box">
				<a class="primary-btn" value="checkout" href="checkout.php">Checkout</a>
			</div>
			
		<br />
	
<?php
include('includes/footer.html');
?>