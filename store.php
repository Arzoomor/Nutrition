<?php 

//store.php
require('mysqli_connect.php');
//$connect = new PDO("mysql:host=localhost;dbname=storecreator", "root", "");

$message = '';

if(isset($_POST["add_to_cart"]))
{
	if(isset($_COOKIE["shopping_cart"]))
	{
		$cookie_data = stripslashes($_COOKIE['shopping_cart']);

		$cart_data = json_decode($cookie_data, true);
	}
	else
	{
		$cart_data = array();
	}

	$item_id_list = array_column($cart_data, 'item_id');

	if(in_array($_POST["hidden_id"], $item_id_list))
	{
		foreach($cart_data as $keys => $values)
		{
			if($cart_data[$keys]["item_id"] == $_POST["hidden_id"])
			{
				$cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] + $_POST["quantity"];
			}
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_POST["hidden_id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$cart_data[] = $item_array;
	}

	
	$item_data = json_encode($cart_data);
	setcookie('shopping_cart', $item_data, time() + (85500 * 30));
	header("location:store.php?success=1");
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		$cookie_data = stripslashes($_COOKIE['shopping_cart']);
		$cart_data = json_decode($cookie_data, true);
		foreach($cart_data as $keys => $values)
		{
			if($cart_data[$keys]['item_id'] == $_GET["id"])
			{
				unset($cart_data[$keys]);
				$item_data = json_encode($cart_data);
				setcookie("shopping_cart", $item_data, time() + (85500 * 30));
				header("location:cart.php?remove=1");
			}
		}
	}
	if($_GET["action"] == "clear")
	{
		setcookie("shopping_cart", "", time() - 3600);
		header("location:cart.php?clearall=1");
	}
}

if(isset($_GET["success"]))
{
	$message = '
	<div class="alert alert-success alert-dismissible">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  	Item Added into Cart
	</div>
	';
}

?>

<?php
$page_title = 'Welcome to this Site!';
include('includes/header.html');
?>

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner ">
				<div class="col-first">
					<h1>Shop Category page</h1>
					
				</div>
			</div>
		</div>
	</section>
	
	
	
	<!-- End Banner Area -->
	
	<p class="message" action="close"><?php echo $message; ?> </p>;
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-8 col-md-7">
				
				<?php	
					$query = "SELECT * FROM inventory ORDER BY product_id ASC";
					$result=@mysqli_query($dbc,$query);
					?>
				
				<div class="row">
				<?php
				foreach($result as $row)
					{
				?> 
						<div class="col-md-4">
						<form method="post" target="cart.php">
						<div class="single-product " style="border:3px;  background-color:bcf9b3; border-radius:15px; padding:10px; height:250px width:250px ">
							<img class="" src="images/<?php echo $row["product_image"]; ?>" class="img-responsive"/>
							<div class="product-details">
									<h6 class="text-info" align="center"><?php echo $row["product_name"]; ?></h6>
									<div class="price">
										<h6 class="text-danger">$ <?php echo $row["product_price"]; ?>0</h6>
										
									</div>
									<input type="text" name="quantity" value="1" class="form-control" />
									<input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]; ?>" />
									<input type="hidden" name="hidden_price" value="<?php echo $row["product_price"]; ?>" />
									<input type="hidden" name="hidden_id" value="<?php echo $row["product_id"]; ?>" />
									<div class="col-md-6 text-center">
									<input type="submit" name="add_to_cart" style="margin-top:5px;" class="primary-btn color:black " value="Add to Cart" />
									</div>
							</div>
						</div>
						</form>
						</div>
						<?php
					}
					?>
					
					
					
				</div>
				</section>
				</div>
				</div>
				</div>
				
			
			
						

	
	
<?php
include('includes/footer.html');
?>
