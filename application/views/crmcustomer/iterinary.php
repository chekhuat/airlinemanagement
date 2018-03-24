<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		<li><a href="#" >5. Payment</a></li>
		<li><a href="#" class="active">6. Confirmation</a></li> 
	</ul>

	<div class="col-md-offset-2 col-md-8 row">
		<a href="#"><span class="btn btn-primary form-control">PRINT THIS</span></a><br>
	</div>
	
	<div class="container col-md-offset-2 col-md-8 row jumbotron" style="margin-top: 15px;">
	<h2 class="text-center">Iterinary Receipt</h2><hr>
	<h4>Booking Details</h4>
	<h5>Status: Confirmed</h5>
	<h5>Booking Date: Fri 08 Dec 2017</h5>

	<h3 class="text-center">BOOKING REFERENCE NUMBER</h3>
	<h1 class="text-center">CD6KY6D</h1>

	<legend><strong>Guest Details</strong></legend>
	<h4>1. Sheila Cagape (Adult)</h4>

	<br>

	<legend><strong>Flight Details</strong></legend>
	<table>
		<thead>
			<tr>
				<th>Route</th>
				<th>Airline</th>
				<th>Flight</th>
				<th>Departure</th>
				<th>Arrival</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Manila to Cagayan de Oro</td>
				<td>Cebu Pacific</td>
				<td>123986</td>
				<td>Tuesday 12 December 2017, 1340H (1:40PM)<br>Ninoy Aquino International Airport Terminal 3 <br>Andrews Avenue Pasay City</td>
				<td>Tuesday 12 December 2017, 1515H (3:15PM)<br>Laguindingan International Airport <br>Laguindingan International Airport</td>

			</tr>
		</tbody>
	</table>
	<br><br>

	<h5>REMNDERS</h5>
	<small> * Guests booked on Cebu Pacific's Interline partners may need to transfer airport terminal when transitioning via Manila. Please proceed to the transit area for the free Manila Internatinal Airport Authority Shuttle Service from 5:30AM to 1AM of the following day. The MIAA shuttle leaves every 30 to 40 minutes.</small>
	<br><br>

	<legend><strong>Additional Services</strong></legend>
	<strong>Manila - Cagayan de Oro</strong><br>
	<small>Sheila Cagape - Seat</small>
	</div>
	<div class="col-md-offset-2 col-md-8 row">
		<a href="<?= base_url('crmupdates/managebooking'); ?>"><span class="btn btn-primary form-control">Proceed to Manage Booking</span></a><br>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>

	

</body>
</html>