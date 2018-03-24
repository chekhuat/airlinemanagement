<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<select>
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
	</body>
</html>
<form class="form-inline">
	<div class="form-group">
		<label class="sr-only">Card Number*</label>
		<input type="text" name="cardnum" class="form-control"  placeholder="Card Number*" required>
	</div>
	<div class="form-group">
		<label class="sr-only">Validation Number</label>
		<input type="text" class="form-control"  placeholder="Validation Number">
	</div>
	<div class="form-group">
		<label>Expiration Date:</label>
		<input type="date" name="expire" placeholder="Expiration Date" class="form-control">
	</div>
	<div class="form-group">
		<label>Nationality*</label>
		<input type="text" name="nationality" placeholder="Please select" class="form-control">
	</div>
</form>

<form class="form-inline">
	<div class="form-group">
		<label class="sr-only">Expiration Date:</label>
		<input type="text" class="form-control"  placeholder="Validation Number">
	</div>
	<div class="form-group">
		<label class="sr-only">Validation Number</label>
		<input type="text" class="form-control"  placeholder="Validation Number">
	</div>
	
	<button type="submit" class="btn btn-default">Sign in</button>
</form>