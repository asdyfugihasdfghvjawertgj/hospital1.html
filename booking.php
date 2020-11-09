<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>blood registration</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</body>
</head>
<body>
<div class="container bg-light mt-5">
<form method="POST" action="">
	<div class="row pt-3">
		<div class="col-md-12">
			<div class="form-group">
				<label>Name<span style="color: red;">*</span></label>
				<input type="text" id="input1" name="name" class="form-control">
				<span style="color: red" id="span1"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Email<span style="color: red;">*</span></label>
				<input type="text" id="input2" name="email" class="form-control">
				<span style="color: red" id="span2"></span>
			</div>
		</div>
	</div>
	<div class="row">
	<div class="col-md-12">
			<div class="form-group">
				<label>Phone Number<span style="color: red;">*</span></label>
				<input type="text" id="input3" name="ph" class="form-control">
				<span style="color: red" id="span3"></span>
			</div>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Date of Birth<span style="color: red;">*</span></label>
				<input type="date" id="input4" name="bdate" class="form-control">
				<span style="color: red" id="span4"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<label>Gender<span style="color: red;">*</span></label>
			<div id="input5">
			<input type="radio" name="gender" value="male" class="radio" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male'): ?>checked='checked'<?php endif; ?> /> Male
			<input type="radio" name="gender" value="female"  class="radio" <?php if (isset($_POST['gender']) && $_POST['gender'] ==  'female'): ?>checked='checked'<?php endif; ?> /> Female

		</div>
		<span style="color: red" id="span5"></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Please select speciality<span style="color: red;">*</span></label>
				<br>
				<select name="country"id="input6" style="width: 100%; height: 40px;">
				<option value=""></option>
        		<option value="Living Inside Thailand">Living Inside Thailand</option>
        		<option value="Living Outside Thailand">Living Outside Thailand</option>
				</select>
				<span style="color: red" id="span6"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Please select sub-speciality<span style="color: red;">*</span></label>
				<br>
				<select name="country"id="input7" style="width: 100%; height: 40px;">
				<option value=""></option>
        		<option value="Living Inside Thailand">Living Inside Thailand</option>
        		<option value="Living Outside Thailand">Living Outside Thailand</option>
				</select>
				<span style="color: red" id="span7"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Please select doctor<span style="color: red;">*</span></label>
				<br>
				<select name="country"id="input8" style="width: 100%; height: 40px;">
				<option value=""></option>
        		<option value="Living Inside Thailand">Living Inside Thailand</option>
        		<option value="Living Outside Thailand">Living Outside Thailand</option>
				</select>
				<span style="color: red" id="span8"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label>Preferred Date<span style="color: red;">*</span></label>
				<input type="date" name="date" id="input9" style="width: 100%;">
				<span style="color: red" id="span9"></span>
			</div>
		</div>
	<div class="col-md-6">
			<div class="form-group">
				<label>Preferred time<span style="color: red;">*</span></label>
				<br>
				<select name="country"id="input10" style="width: 100%; height: 40px;">
				<option value=""></option>
        		<option value="Living Inside Thailand">Living Inside Thailand</option>
        		<option value="Living Outside Thailand">Living Outside Thailand</option>
				</select>
				<span style="color: red" id="span10"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Mediacal concern or request<span style="color: red;">*</span></label>
				<input type="text" id="input11"  class="form-control">
				<span style="color: red" id="span11"></span>
			</div>
		</div>
	</div>
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" id="booking" class="btn-success p-2" style="text-align: center; border-radius: 5%; border:1px solid green; width: 100px;">SUBMIT
		</button>
	</div>
<script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/booking.js"></script>
</body>
</html>