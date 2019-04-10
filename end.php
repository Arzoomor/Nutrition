<?php
require('mysqli_connect.php');
$page_title = 'Welcome to this Site!';

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$q1="select product_name,product_quantity from inventory;";
	                        $r1=@mysqli_query($dbc,$q1);
							echo mysqli_error($dbc);
							while($row1=mysqli_fetch_array($r1,MYSQLI_ASSOC))
							{
								$oname=$row1['product_name'];
								$oquantity=$row1['product_quantity'];
								if(isset($_COOKIE["shopping_cart"]))
								{
									$cookie_data = stripslashes($_COOKIE['shopping_cart']);
									$cart_data = json_decode($cookie_data, true);
									foreach($cart_data as $keys => $values)
									{
										$cname=	$values["item_name"];
										$cquan= $values["item_quantity"]; 
										$q2="select product_quantity from inventory where product_name='$cname'";
										$r2=@mysqli_query($dbc,$q2);
										while($row2=mysqli_fetch_array($r2,MYSQLI_ASSOC))
										{
											$q3="update inventory SET product_quantity=$oquantity-$cquan where product_name='$cname'";
											$r3=@mysqli_query($dbc,$q3);
											setcookie("shopping_cart", time()-3600);
										}				
									}
								}
							}
}

include('includes/header.html');
?>

<!-- Start Banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				
				<div class="banner-content">
					<h1>Thanks!!!</h1>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->





<?php
include('includes/footer.html');
?>
