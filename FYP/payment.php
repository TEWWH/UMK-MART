<?php include("dataconnection.php"); 
session_start();


?>

<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS PAYMENT.css">
    <style src=""></style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!-- <style src="https://use.fontawesome.com/releases/v5.7.2/css/all.css"></style> -->
<title>Payment</title>
</head>
<style>
    .cc-img {height: 200px;
			width: 500px;
			padding:10px;}
	
	h1{color:grey;
		font-style:italic;
		}
	
	.label{font-weight:bold;
			text-shadow:1px 2px grey;
			padding:10px;}
			
  .card_input{padding:10px;
				text-align:center;
				width:35%;
				font-size:17px;}
	
	.input-group{padding:10px;}
	
	.cv{margin-left:280px;
		margin-top:-85px;}
		
	.input{padding:10px;
			text-align:center;
			width:240px;
			font-size:17px;}
			
	input{border:1px solid #2B1B17;
			box-shadow:1px 2px 1px 2px grey;
			border-radius:5px;}
	
	.submit_btn{padding:10px;
					box-shadow:2px 2px powerblue;
					cursor:grabbing;
					margin:10px;
					margin-left:340px;
					margin-top:19px;
					letter-spacing:3px;
					color:#151B54;}	
					
	.submit_btn:hover{font-weight:bold;
						font-size:15px;
						text-shadow:2px 1px grey;
						background-color:#FFE6E8;}
						
			
table {
  margin-top:-570px;
  margin-right:50px;
  border-spacing: 0;
  border: none;
  float:right;
  width:50%;
}

th, td {
  
  padding: 16px;
  border:none;
}

.p_name{font-size:20px;
			font-weight:bold;
			color:#000080;}

.p_type_name{color:grey;
				font-size:15px;
				padding-left:5px;
				font-style:italic;}

.p_qty{font-weight:bold;
		}

.p_subtotal{font-weight:bold;
			color:black;}

.subtotal,.shipping{letter-spacing:2px;}

.total{letter-spacing:4px;}

.info{text-shadow:1px 2px grey;
		letter-spacing:5px;
		font-style:italic;}
</style>
<body>
<body>
    
	<div class="container mt-4 p-0">
		<nav class="navbar navbar-expand-lg navbar-light bg-white pt-3 px-md-4 px-2">
			<div class="container-fluid"> <a class="navbar-brand" href="#">Mart</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
				<div class="collapse navbar-collapse" id="nav">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item"> <a class="nav-link active" href="#">Meat</a> </li>
						<li class="nav-item"> <a class="nav-link" href="#">Fruit</a> </li>
						<li class="nav-item"> <a class="nav-link" href="#">Drinks</a> </li>
						<li class="nav-item"> <a class="nav-link" href="#">Snacks</a> </li>
						<li class="nav-item"> <a class="nav-link" href="#">Special Offers</a> </li>
					</ul>
					<ul class="d-flex mb-0">
						<li class="nav-item pe-3">
							<div class="d-flex align-items-center">
								<div class="icon me-3"> <span class="fas fa-shopping-cart"></span> </div>
								<div class="cart">
									<p class="">My cart</p> <small class="">3 items</small>
								</div>
							</div>
						</li>
						<li class="nav-item me-3">
							<div class="btn btn-outline-primary">Sign Up</div>
						</li>
						<li class="nav-item">
							<div class="btn btn-primary">Login</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="row px-md-4 px-2 pt-4">
			<div class="col-lg-8">
				<p class="pb-2 fw-bold">Order</p>
				<div class="card">
					<div class="ribbon ribbon-top-right"><span>SALE TIME!</span></div>
					<div>
						<div class="table-responsive px-md-4 px-2 pt-3">
							<table class="table table-borderless">
								<tbody>
									<tr class="border-bottom">
										<td>
											<div class="d-flex align-items-center">
												<div> <img class="pic" src="steakfyp.jpg" alt=""> </div>
												<div class="ps-3 d-flex flex-column justify-content">
													<p class="fw-bold">Steak<span class="ps-1"></span><span class="ps-1"></span></p> <small class=" d-flex"> <span class=" text-muted">Brand: </span> <span class=" fw-bold"> JAPAN A5</span> </small> <small class=""> <span class=" text-muted">Weight: </span> <span class=" fw-bold">1kg</span> </small>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex">
												<p class="pe-3"><span class="red">$145.00</span></p>
												<p class="text-muted text-decoration-line-through">$195.00</p>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center"> <span class="pe-3 text-muted">Quantity</span> <span class="pe-3"> <input class="ps-2" type="number" value="2"></span>
												<div class="round"> <span class=""> L </span> </div>
											</div>
										</td>
									</tr>
									<tr class="border-bottom">
										<td>
											<div class="d-flex align-items-center">
												<div> <img class="pic" src="IBERICOPIGfyp.jpg" alt=""> </div>
												<div class="ps-3 d-flex flex-column">
													<p class="fw-bold">IBERICO PIG<span class="ps-1"></span></p> <small class=" d-flex"> <span class=" text-muted">Brand : </span> <span class="fw-bold">Spanyol</span> </small> <small class=""> <span class=" text-muted">Weight : </span> <span class="fw-bold">100g</span> </small>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex">
												<p class="pe-3"><span class="red">$139.99</span></p>
												<p class="text-muted text-decoration-line-through">$179.00</p>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center"> <span class="pe-3 text-muted">Quantity</span> <span class="pe-3"> <input class="ps-2" type="number" value="2"></span>
												<div class="round"> <span class=""> L </span> </div>
											</div>
										</td>
									</tr>
									<tr class="">
										<td>
											<div class="d-flex align-items-center">
												<div> <img class="pic" src="bressechicken.jpg" alt=""> </div>
												<div class="ps-3 d-flex flex-column">
													<p class="fw-bold"> Bresse <span class="ps-1">Chicken</span><span class="ps-1"></span></p> <small class=""> <span class=" text-muted">Brand : </span> <span class="fw-bold">French</span> </small> <small class=""> <span class=" text-muted">Weight :</span> <span class="fw-bold">1 pcs</span> </small>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex">
												<p class="pe-3"><span class="red">$219.99</span></p>
												<p class="text-muted text-decoration-line-through">$279.00</p>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center"> <span class="pe-3 text-muted">Quantity</span> <span class="pe-3"> <input class="ps-2" type="number" value="2"></span>
												<div class="round"> <span class=""> L </span> </div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 payment-summary">
				<p class="fw-bold pt-lg-0 pt-4 pb-2">Payment Summary</p>
				<div class="card px-md-3 px-2 pt-4">
					<div class="unregistered mb-4"> <span class="py-1">unregistered account</span> </div>
					<div class="d-flex justify-content-between pb-3"> <small class="text-muted">Transaction code</small>
						<p class="">VC115665</p>
					</div>
					<div class="d-flex justify-content-between b-bottom"> <input type="text" class="ps-2" placeholder="COUPON CODE">
						<div class="btn btn-primary">Apply</div>
					</div>
					<div class="d-flex flex-column b-bottom">
						<div class="d-flex justify-content-between py-3"> <small class="text-muted">Order Summary</small>
							<p>$122</p>
						</div>
						<div class="d-flex justify-content-between pb-3"> <small class="text-muted">Additional Service</small>
							<p>$22</p>
						</div>
						<div class="d-flex justify-content-between"> <small class="text-muted">Total Amount</small>
							<p>$132</p>
						</div>
					</div>
					<div class="sale my-3"> <span>sale<span class="px-1">expiring</span><span>in</span>:</span><span class="red">21<span class="ps-1">hours</span>,31<span class="ps-1 ">minutes</span></span> </div>
				</div>
			</div>
			<div class="col-lg-8 delivery px-md-3 px-1">
				<p class="pt-4 fw-bold pb-3 ps-2">Delivery</p>
				<div class="d-md-flex justify-content-between align-items-center pb-4">
					<div class="size d-flex ps-4"> <label class="option d-flex align-items-center"> <input type="radio" name="radio">
							<div class="card">
								<div class="d-flex align-items-center">
									<div class="d-flex align-items-center justify-content-center"> <img class="del" src="https://www.freepnglogos.com/uploads/ups-logo-transparent/ups-airlines-aviation-22.png" alt="">
										<p class="ps-2">DPD</p>
									</div>
									<div class=" d-flex flex-column px-3">
										<p class="fw-bold pb-1">DPD<span>Deliveries</span></p> <small class="text-muted pb-1">Expected<span class="ps-1">delivery:</span></small> <small class="text-muted pb-1">Friday:28</small>
									</div>
									<p class="fw-bold">$5.25</p>
								</div>
							</div> <span class="checkmark"></span>
						</label> </div>
					<div class="size d-flex pt-md-0 pt-3 ps-md-0 ps-4"> <label class="option d-flex align-items-center"> <input type="radio" name="radio">
							<div class="card">
								<div class="d-flex align-items-center">
									<div class="d-flex align-items-center justify-content-center"> <img class="del" src="https://www.freepnglogos.com/uploads/ups-logo-transparent/ups-airlines-aviation-22.png" alt="">
										<p class="ps-2">DPD</p>
									</div>
									<div class=" d-flex flex-column px-3">
										<p class="fw-bold pb-1">DPD<span>Deliveries</span></p> <small class="text-muted pb-1">Expected<span class="ps-1">delivery:</span></small> <small class="text-muted pb-1">Friday:28</small>
									</div>
									<p class="fw-bold">$5.25</p>
								</div>
							</div> <span class="checkmark"></span>
						</label> </div>
				</div>
				<div class="d-md-flex justify-content-between align-items-center pb-4">
					<div class="size d-flex ps-4"> <label class="option d-flex align-items-center"> <input type="radio" name="radio">
							<div class="card">
								<div class="d-flex align-items-center">
									<div class="d-flex align-items-center justify-content-center"> <img class="del" src="https://www.freepnglogos.com/uploads/ups-logo-transparent/ups-airlines-aviation-22.png" alt="">
										<p class="ps-2">DPD</p>
									</div>
									<div class=" d-flex flex-column px-3">
										<p class="fw-bold pb-1">DPD<span>Deliveries</span></p> <small class="text-muted pb-1">Expected<span class="ps-1">delivery:</span></small> <small class="text-muted pb-1">Friday:28</small>
									</div>
									<p class="fw-bold">$5.25</p>
								</div>
							</div> <span class="checkmark"></span>
						</label> </div>
					<div class="size d-flex pt-md-0 pt-3 ps-md-0 ps-4"> <label class="option d-flex align-items-center"> <input type="radio" name="radio">
							<div class="card">
								<div class="d-flex align-items-center">
									<div class="d-flex align-items-center justify-content-center"> <img class="del" src="https://www.freepnglogos.com/uploads/ups-logo-transparent/ups-airlines-aviation-22.png" alt="">
										<p class="ps-2">DPD</p>
									</div>
									<div class=" d-flex flex-column px-3">
										<p class="fw-bold pb-1">DPD<span>Deliveries</span></p> <small class="text-muted pb-1">Expected<span class="ps-1">delivery:</span></small> <small class="text-muted pb-1">Friday:28</small>
									</div>
									<p class="fw-bold">$5.25</p>
								</div>
							</div> <span class="checkmark"></span>
						</label> </div>
				</div>
			</div>
			<div class="col-lg-4">
				<p class="pt-4 fw-bold pb-3">Additional Service</p>
				<div class="card p-3 mb-2">
					<div class="d-flex align-items-center justify-content-between">
						<div>
							<p class="fw-bold">Care + package</p> <small class="text-muted">One year of additional Care</small>
						</div>
						<div class="d-flex align-items-center">
							<p class="pe-3">$10.00</p>
							<div class="form-check form-switch"> <input class="form-check-input" type="checkbox" id="SwitchCheck"> </div>
						</div>
					</div>
				</div>
				<div class="card p-3 mb-2">
					<div class="d-flex align-items-center justify-content-between">
						<div>
							<p class="fw-bold">Environment Friendly</p> <small class="text-muted">Add some tip for earth care</small>
						</div>
						<div class="d-flex align-items-center">
							<p class="pe-3">$2.00</p>
							<div class="form-check form-switch"> <input class="form-check-input" type="checkbox" id="SwitchCheck"> </div>
						</div>
					</div>
				</div>
				<div class="card p-3 mb-2">
					<div class="d-flex align-items-center justify-content-between">
						<div>
							<p class="fw-bold">Golden Guard</p> <small class="text-muted">30 days more for return</small>
						</div>
						<div class="d-flex align-items-center">
							<p class="pe-3">$5.00</p>
							<div class="form-check form-switch"> <input class="form-check-input" type="checkbox" id="SwitchCheck"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	</body>
<?php if(isset($_SESSION['id']))
	{
		$user=$_SESSION['id'];
		$result=mysqli_query($connect,"SELECT * FROM payment_details where card_details='$user'");
			
		$row=mysqli_fetch_assoc($result);
			
	}
	?>
	
	<h2 class="info" style="margin-top:50px;">PAYMENT DETAILS </h2>
	<h2 class="info" style="margin-left:730px; margin-top:-45px; padding-bottom:40px;"><a href="comfirmorder.php" style="text-decoration:none; color:black;">ORDER SUMMARY </a></h2>
	
	
	<img class="img-responsive cc-img" src="https://www.nicepng.com/png/full/54-542683_credit-card-pay-now-visa-and-mastercard-accepted.png" style="margin-top:-30px;">

<form action="paymentcode.php" method="POST">	
      
     <label class="label">CARD NUMBER</label>
        <div  class="input-group">
			<input type="tel" name="card" id="card" class="card_input" maxlength="19" minlength="19" placeholder="xxxx xxxx xxxx xxxx"  autocomplete="off" required/>
		</div>
	
	<script>
			document.querySelector('#card').addEventListener('keydown', (e) => {
			e.target.value = e.target.value.replace(/(\d{4})(\d+)/g, '$1 $2')
		})
		/* Jquery */
		$('#card').keyup(function() {
		  $(this).val($(this).val().replace(/(\d{4})(\d+)/g, '$1 $2'))
		});
	</script>
	
	 <label class="label">CARD OWNER</label>
			<div class="input-group">
				<input type="text" name="cname" class="card_input" placeholder="CHUA WEI HONG" pattern="[a-z A-Z]{1,30}" title="Character only" autocomplete="off" required>
			</div>       
			
	 <label class="label">EXPIRATION DATE</label>
		<div class="input-group">
			<input type="month" class="input" name="exp" min="2022-01" placeholder="MM / YY" required/>
		</div>
	<div class="cv">	 
		<label class="label">CVV CODE</label>
			<div class="input-group">
				<input type="tel" name="cv" class="input" placeholder="xxx" minlength="3" maxlength="3" autocomplete="off" pattern="[0-9]{1,3}" title="Three Number CVV Code" required/>
			</div>                  
	</div>
	
	<input type="submit" name="btn" class="submit_btn" value="SUBMIT PAYMENT">
 </form>
 
            	<table border="1" width="800px">
			
			<?php
		/*	
			$result = mysqli_query($connect, "select * from shopping_cart WHERE user_id='$card_details' and cart_selected=1");
			$no=0;
			$subtotal=0;
	         while($row = mysqli_fetch_assoc($result))
			{
					
				$no++;
				$total=($row["product_price"]*$row["product_qty"]);
				$subtotal+=$total;
		?>	
		
			<tr>
				
				<?php 
					$num=0;
					$r = mysqli_query($connect, "select product_type.*, shopping_cart.* from product_type, shopping_cart WHERE product_type.product_type_id = '$row[product_type_id]' and user_id='$user'");
					$pic = mysqli_fetch_assoc($r);
					
					$num++;
					
				?>
				<td><img src="Admin/working_site/Product_img/<?php echo $pic["img_dir"] ?>" width="150px;"></td>
				
				<td>
					<p class="p_name"><?php echo $row["product_name"] ?> </p>
					<p class="p_type_name"><?php echo $row["product_type_name"] ?></p>
				</td>
				
				<!--<td name="price"></td>-->
				
				<td class="p_qty">
					x<?php echo $row["product_qty"];?>
				</td >
				
				
				<td class="p_subtotal">RM <?php echo $row["product_price"] ?></td>
				
			</tr>	
					
		<?php
				
				
				}
		*/		
		?>		
	
			<tr>
				<th colspan="9" align="right" class="subtotal">SUBTOTAL : RM <?php echo number_format($subtotal, 2, '.', ''); ?>
				<p align="left" style="margin-left:530px;">SHIPPING <p style="margin-top:-38px; margin-left:628px; text-align:left;">: FREE</p></p>
			</tr>
				
				<tr>
					
					<th colspan="10" align="right" class="total"><hr><br>	TOTAL: <span style="font-size:25px;">MYR <?php echo number_format($subtotal, 2, '.', ''); ?></span>
					</tr>
</body>
</html>
<?php

if(isset($_SESSION['id']))
{
	$id=($_SESSION["id"]);

	
}

/*
if (isset($_GET['btn']))
{
	
	$result=mysqli_query($connect,"SELECT MAX(shipping_id) from shipping;");
	while($row = mysqli_fetch_assoc($result)){
	   print_r($row);
	   $sid=$row['MAX(shipping_id)'];
	}
	
	//get card info
	$card=($_GET['card']);
	$exp=($_GET['exp']);
	$cv=($_GET['cv']);
	$name=($_GET['cname']);
	
	mysqli_query($connect,"INSERT INTO payment (credit_card_no,credit_card_expired,credit_card_cvv,credit_card_name,user_id,shipping_id) values ('$card','$exp','$cv','$name','$id','$sid');");
	
	?>
	
	<script>
		alert("Your payment made successfully.");
		window.location.href="updatepurchase.php";
	</script>
	
	
	<?php
	
	
	

}

*/
?>
