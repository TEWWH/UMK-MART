<!DOCTYPE html>
<html lang="en">
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
    <title>Document</title>
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
			padding:10px;
            margin-left: 200px;
            }
			
  .card_input{padding:10px;
				text-align:center;
				width:35%;
				font-size:17px;
                margin-left: 100px;
                
            }
	
	.input-group{padding:10px;
    }
	
	.cv{margin-left:280px;
		margin-top:-110px;
    }
		
	.input3{padding:10px;
			text-align:center;
			width:240px;
			font-size:17px;}

    .input1{padding:10px;
			text-align:center;
			width:100px;
			font-size:17px;}
			
	input{border:1px solid #2B1B17;
			box-shadow:1px 2px 1px 2px grey;
			border-radius:5px;
            margin-left: 100px;
            margin-top:-300;}
	
	.submit_btn{padding:10px;
					box-shadow:2px 2px powerblue;
					cursor:grabbing;
					margin:10px;
					margin-left:400px;
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
  
        <div class="col-lg-7">
        <div class="wrapper">
    <div class="container">
        <form action="paymentcode.php" method="POST">	

            <h1>
                <i class="fas fa-shipping-fast"></i>
                Shipping Details
            </h1>
            <div class="name">
                <div>
                    <label for="f-name">Full Name</label>
                    <input type="text" name="fname">
                </div>
          
            </div>
            <div class="street">
                <label for="name">Address</label>
                <input type="text" id="street-address" name="street-address" autocomplete="street-address" required enterkeyhint="next"></input>
            </div>
            <div class="address-info">
                <div>
                    <label for="city">City</label>
                    <input type="text" name="city">
                </div>
                <div>
                    <label for="state">State</label>
                    <input type="text" name="state">
                </div>
                <div>
                    <label for="zip">Postcode</label>
                    <input class="postal-code" id="postal-code" name="postal-code" autocomplete="postal-code" enterkeyhint="next">
                </div>
                <input type="submit" name="btn" class="submit_btn" value="PURCHASE">

            </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>