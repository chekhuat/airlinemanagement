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
		
		<div class="col-md-12 container">
			
			<div id="booking" class="section-padding">
				<div class="container">
					<div class="row">
						<div class="container-fluid">
							<div class=" col-lg-12 col-md-12">
								<ul class="pagination">
									<legend>Booking Process:</legend>
									<li><a href="#" class="active">1. Search Flight</a></li>
									<li><a href="#">2. Select Flight</a></li>
									<li><a href="#">3. Guest Details</a></li>
									<li><a href="#">4. Add-Ons</a></li>
									<li><a href="#">5. Payment</a></li>
									<li><a href="#">6. Confirmation</a></li>
								</ul>
								<hr>
								<form class="col-md-6 col-md-offset-3" action="<?= base_url('customerrelationship/select');?>">
									<fieldset><legend>Searching</legend>
									<div class="radio-cont text-center form-group">
										<div class="radio">
											<label class="radio-inline">
												<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> One-Way
											</label>
											<label class="radio-inline">
												<input type="radio" name="optionsRadios" id="optionsRadios2" value="option1"> Round-Trip
											</label>
										</div>
									</div><br>
									<div class="row form-group">
										<div class="col-md-6">
											<label for="exampleInputEmail1">From</label>
											<select class="form-control">
												<optgroup label="Australia">
													<option value="">Melbourne</option>
													<option value="">Sydney</option>
												</optgroup>
												<optgroup label="Bangladesh">
													<option value="">Dhaka</option>
												</optgroup>
												<optgroup label="China">
													<option value="">Beijing</option>
													<option value="">Shanghai</option>
												</optgroup>
												<optgroup label="Germany">
													<option value="">Berlin</option>
												</optgroup>
												<optgroup label="Greece">
													<option value="">Athens</option>
												</optgroup>
												<optgroup label="Hong Kong (China)">
													<option value="">Hong Kong</option>
												</optgroup>
												<optgroup label="Indonesia">
													<option value="">Jakarta</option>
													<option>Bali</option>
												</optgroup>
												<optgroup label="Malaysia">
													<option value="">Kuala Lumpur</option>
												</optgroup>
												<optgroup label="Philippines">
													<option value="">Bohol</option>
													<option value="">Boracay</option>
													<option value="">Cagayan de Oro</option>
													<option value="">Camiguin</option>
													<option value="">Cebu</option>
													<option value="">Davao</option>
													<option value="">Manila</option>
													<option value="">Pagadian</option>
													<option value="">Siargao</option>
												</optgroup>
												<optgroup label="Singapore">
													<option value="">Singapore</option>
												</optgroup>
												<optgroup label="South Korea">
													<option value="">Jeju</option>
													<option value="">Seoul</option>
												</optgroup>
												<optgroup label="Thailand">
													<option value="">Bangkok</option>
												</optgroup>
											</select>
										</div>
										<div class="col-md-6">
											<label for="">To</label><br>
											<select class="form-control">
												<optgroup label="Australia">
													<option value="">Melbourne</option>
													<option value="">Sydney</option>
												</optgroup>
												<optgroup label="Bangladesh">
													<option value="">Dhaka</option>
												</optgroup>
												<optgroup label="China">
													<option value="">Beijing</option>
													<option value="">Shanghai</option>
												</optgroup>
												<optgroup label="Germany">
													<option value="">Berlin</option>
												</optgroup>
												<optgroup label="Greece">
													<option value="">Athens</option>
												</optgroup>
												<optgroup label="Hong Kong (China)">
													<option value="">Hong Kong</option>
												</optgroup>
												<optgroup label="Indonesia">
													<option value="">Jakarta</option>
													<option>Bali</option>
												</optgroup>
												<optgroup label="Malaysia">
													<option value="">Kuala Lumpur</option>
												</optgroup>
												<optgroup label="Philippines">
													<option value="">Bohol</option>
													<option value="">Boracay</option>
													<option value="">Cagayan de Oro</option>
													<option value="">Camiguin</option>
													<option value="">Cebu</option>
													<option value="">Davao</option>
													<option value="">Manila</option>
													<option value="">Pagadian</option>
													<option value="">Siargao</option>
												</optgroup>
												<optgroup label="Singapore">
													<option value="">Singapore</option>
												</optgroup>
												<optgroup label="South Korea">
													<option value="">Jeju</option>
													<option value="">Seoul</option>
												</optgroup>
												<optgroup label="Thailand">
													<option value="">Bangkok</option>
												</optgroup>
											</select>
										</div>
									</div>
									<div class="row form-group">
										<div class="col-md-6">
											<label>Departure Date</label>
											<div class="input-group">
												<input type="date" name="" placeholder="Departure" class="form-control">
												<div class="input-group-addon"><span class="fa fa-calendar theme-color"></span></div>
											</div>
										</div>
										<div class="col-md-6">
											<label>Return Date</label>
											<div class="input-group">
												<input type="date" name="" placeholder="Return" class="form-control">
												<div class="input-group-addon"><span class="fa fa-calendar theme-color"></span></div>
											</div>
										</div>
									</div>
									<hr class="dl-horizontal">
									<div class="row text-center"> <h4>Passengers</h4></div>
									<div class="row form-group ">
										<div class="col-md-6">
											<label>Adult(12y +)</label>
											<input type="number" min="0" name="" class="form-control" placeholder="0">
										</div>
										<div class="col-md-6">
											<label>Child(2-11y)</label>
											<input type="number" min="0" name="" class="form-control" placeholder="0">
										</div>
									</div>
									<div class="row form-group">
										<div class="col-md-6">
											<label>Infant(16d-23m)</label>
											<input type="number" min="0" name="" class="form-control" placeholder="0">
										</div>
										<div class="col-md-6">
											<label>PWD</label>
											<select class="form-control">
												<option>No</option>
												<option>Yes</option>
											</select>
										</div>
									</div>
									<div class="text-center row section-padding">
										<button class="btn btn-primary mybtn">Find Flight</button>
										
									</div>
								</fieldset></form>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</body>
		<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_ex_pagination_nav by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:42 GMT -->
	</html>