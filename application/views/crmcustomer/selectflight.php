<html>
	<head>
		<style>
		ul.pagination {
		display: inline-block; 
		padding: 0;
		margin-top: 40px;
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
		<div class="col-lg-12 col-md-12">
			
			<ul class="pagination">
				<legend>Booking Process:</legend>
				<li><a href="#">1. Search Flight</a></li>
				<li><a href="#" class="active">2. Select Flight</a></li>
				<li><a href="#">3. Guest Details</a></li>
				<li><a href="#">4. Add-Ons</a></li>
				<li><a href="#">5. Payment</a></li>
				<li><a href="#">6. Confirmation</a></li>
			</ul>

			<hr>
			
			
			<br>
			<div class="well"><a href="<?= base_url('customerrelationship/sales'); ?>"><p class="btn btn-primary">Search Again</p></a>
				<h2>List of Flights</h2>
				<table class="well table">
					<thead>
						<tr>
							<th>Flight ID</th>
							<th>Airport</th>
							<th>Source</th>
							<th>Designation</th>
							<th>Departure</th>
							<th>Arrival</th>
							<th>Price</th>
							<th>Add ons</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>01928</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<div>
									<label class="radio-inline">
									<input type="radio" name="optionsRadios1" id="optionsRadios1" value="option1" checked> Flight Only
								</label>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios1" id="optionsRadios2" value="option1"> Flight + Baggage
								</label>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios1" id="optionsRadios3" value="option1"> Flight + Baggage + Meal
								</label>
								</div>
								
							</td>
						</tr>

						<tr>
							<td>72361</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" checked> Flight Only
								</label>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios2" id="optionsRadios2" value="option1"> Flight + Baggage
								</label>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios2" id="optionsRadios2" value="option1"> Flight + Baggage + Meal
								</label>
							</td>
						</tr>

						<tr>
							<td>83945</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios3" id="optionsRadios1" value="option1" checked> Flight Only
								</label>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios3" id="optionsRadios2" value="option1"> Flight + Baggage
								</label>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios3" id="optionsRadios2" value="option1"> Flight + Baggage + Meal
								</label>
							</td>
						</tr>

						<tr>
							<td>14920</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios4" id="optionsRadios1" value="option1" checked> Flight Only
								</label>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios4" id="optionsRadios2" value="option1"> Flight + Baggage
								</label>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios4" id="optionsRadios2" value="option1"> Flight + Baggage + Meal
								</label>
							</td>
						</tr>

						<tr>
							<td>43259</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td> 
							<td></td>
							<td>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios5" id="optionsRadios1" value="option1" checked> Flight Only
								</label>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios5" id="optionsRadios2" value="option1"> Flight + Baggage
								</label>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios5" id="optionsRadios2" value="option1"> Flight + Baggage + Meal
								</label>
							</td>
						</tr>

						<tr>
							<td>59302</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios6" id="optionsRadios1" value="option1" checked> Flight Only
								</label>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios6" id="optionsRadios2" value="option1"> Flight + Baggage
								</label>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios6" id="optionsRadios2" value="option1"> Flight + Baggage + Meal
								</label>
							</td>
						</tr>

						<tr>
							<td>24251</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios7" id="optionsRadios1" value="option1" checked> Flight Only
								</label>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios7" id="optionsRadios2" value="option1"> Flight + Baggage
								</label>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios7" id="optionsRadios2" value="option1"> Flight + Baggage + Meal
								</label>
							</td>
						</tr>

						<tr>
							<td>64484</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios8" id="optionsRadios1" value="option1" checked> Flight Only
								</label>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios8" id="optionsRadios2" value="option1"> Flight + Baggage
								</label>
								<label class="radio-inline">
									<input type="radio" name="optionsRadios8" id="optionsRadios2" value="option1"> Flight + Baggage + Meal
								</label>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			
		
			<div class="row">	
				<h3>Learn More About Fare Rules</h3>
				<p>The following applies to Promo Fares.</p>
				<ul>
					<li>Cancellation/Rerouting - Not allowed.</li>
					<li>Rebooking - Allowed but subject to applicable fess and penalties.</li>
					<li>No Show - Fares and all other fees are forfeited or considered flown.</li>
					<li>Name Change - Not allowed.</li>
					<li>Baggage Allowance - Not included. You may purchase this on the next few pages.</li>
					<li>Meals - Not included. You may purchase this on the next few pages.</li>
				</ul>
				
				<a href="#">Basahin sa Filipino</a>
				<p>Click to view the <a href="#">Air Passenger Bill of Rights</a> and <a href="#">Conditions of Carriage</a></p>
				<div class="text-right">
					<a href="<?= base_url('customerrelationship/sales'); ?>"><span class="btn btn-primary">Back</span></a>
					<a href="http://localhost/airlinemanagement/customerrelationship/guest"><span class="btn btn-primary">Continue</span></a>
				</div>
			</div>
				
				
		
		</div>
		</div>
		</div>
		</div>
		</div>

		
		
	</body>
	<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_ex_pagination_nav by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:42 GMT -->
</html>