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
								<li><a href="#" class="active">4. Add-Ons</a></li>
								<li><a href="#">5. Payment</a></li>
								<li><a href="#">6. Confirmation</a></li>
							</ul>
							<hr>
							<div class="well">
								<div class="form-group">
									<legend>Check your additional services</legend>
									<input type="checkbox" name="vehicle1" value="Bike"> <label>Baggage - choose your baggage allowance now, to steer clear of airport excess baggage fees! </label>
								</div>
								<div class="form-group">
									<input type="checkbox" name="vehicle2" value="Car"> <label>Meals - Exclusive only for pre-order! </label> <br>
								</div>
								<div class="form-group">
									<input type="checkbox" name="vehicle2" value="Car"> <label>Seat Select - Stay comfy, choose wisely! </label>
								</div>
								
							</div>
							
							
							<div class="text-right">
								<a href="<?= base_url('customerrelationship/guest'); ?>"><span class="btn btn-primary">Back</span></a>
								<a href="http://localhost/airlinemanagement/customerrelationship/payment"><span class="btn btn-primary">Continue</span></a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_ex_pagination_nav by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:42 GMT -->
</html>