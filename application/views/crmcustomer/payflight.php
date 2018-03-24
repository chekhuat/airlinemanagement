<html>
	<head>
		<style>
		ul.pagination {
		display: inline-block;
		padding: 0;
		margin: 40px;
		}
		ul.pagination li {display: inline;}
		ul.pagination li a {
		color: black;
		float: left;
		padding: 8px 16px;
		text-decoration: none;
		transition: background-color .3s;
		border: 1px solid #ddd;
		font-size: 18px;
		}
		ul.pagination li a.active {
		background-color: #eee;
		color: black;
		border: 1px solid #ddd;
		}
		ul.pagination li a:hover:not(.active) {background-color: #ddd;}
		</style>
	</head>
	<body>
		<div id="booking" class="section-padding">
			<div class="container">
				<div class="row">
					<div class="container-fluid">
						<div class=" col-lg-12 col-md-12">
							<ul class="pagination">
								<legend>Booking Process:</legend>
								<li><a href="#">1. Search Flight</a></li>
								<li><a href="#">2. Select Flight</a></li>
								<li><a href="#">3. Guest Details</a></li>
								<li><a href="#">4. Add-Ons</a></li>
								<li><a href="#" class="active">5. Payment</a></li>
								<li><a href="#">6. Confirmation</a></li>
							</ul>
							<hr>
							<div class="jumbotron">
								<legend>Let us know how we may reach you if there are any changes or questions related to your booking and payment.</legend>
								
								<form>
									<div class="form-inline row form-group">
										
										<label>Name*</label>
										<select class="form-control">
											<option>Mr.</option>
											<option>Ms.</option>
										</select>
										<input type="text" name="firstname" placeholder="Given Name/First Name" class="form-control">
										<input type="text" name="middlename" placeholder="Middle Name" class="form-control">
										<input type="text" name="lastname" placeholder="Family Name/Surname" class="form-control">
									</div>
									<div class="form-inline row form-group" >
										<label>Contact Details:</label>
										<input type="text" name="number" placeholder="Contact Number" class="form-control">
										<input type="email" name="email" placeholder="Email Address" class="form-control">
										<input type="email" name="email" placeholder="Retype Email Address" class="form-control">
									</div>
								</form>
								
							</div>
							
							<div class="well">
								<legend>Balance Due: </legend>
								<h4>Card Details</h4>
								<p>Please enter your credit card details</p>
								<form class="">
									<div class="form-group form-inline">
										<label class="sr-only">Card Number*</label>
										<input type="text" name="cardnum" class="form-control"  placeholder="Card Number*" required>
										<label>Expiration Date:</label>
										<input type="date" name="expire" placeholder="Expiration Date" class="form-control" required>
									</div>
									<div class="form-group form-inline">
										
										<label>Card Holder Name*</label>
										
										<input type="text" name="firstname" placeholder="First Name*" class="form-control" required>
										<input type="text" name="lastname" placeholder="Last Name*" class="form-control" required>
									</div>
									
									<p>Billing Address</p>
									<div class="form-group form-inline">
										<input type="text" name="address" placeholder="Street Address*" class="form-control" required>
										<input type="text" name="zipcode" placeholder="Zip code*" class="form-control" required>
										<input type="text" name="city" placeholder="City*" class="form-control" required>
										<input type="text" name="country" placeholder="Country*" class="form-control" required>
										
									</div>

									<div class="form-group form-inline">
										<input type="text" name="region" placeholder="State/Region*" class="form-control" required>
										<input type="text" name="email" placeholder="Email Address*" class="form-control" required>
										<input type="text" name="contactnum" placeholder="Contact Number*" class="form-control" required>
									</div>
									<br> <br>
									
									<small>DISCLAIMER: Airline3R4, with merchant operation located at Airline 3R4 Building, USTP, PHilippines, authenticates all debit and credit card transactions and reserves the right to refuse you or your baggage if, in the exercise of reasonable discretion, we determine that the payment of your fare has been done fraudulently or unlawfully. Some banks may charge additional fees for this transaction. </small>
									
								</form>
								
								
								
							</div>
							
							<br>
							<div class="text-right">
								<a href="<?= base_url('customerrelationship/addons'); ?>"><span class="btn btn-primary">Back</span></a>
								<a href="<?= base_url('customerrelationship/confirmation') ?>"><span class="btn btn-primary">Continue</span></a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_ex_pagination_nav by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:42 GMT -->
</html>