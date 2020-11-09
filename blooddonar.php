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
			<div class="form-group">
				<label>Type of blood<span style="color: red;">*</span></label>
				<input type="text" id="input5" name="tob" class="form-control">
				<span style="color: red" id="span5"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Bloodregister-id<span style="color: red;">*</span></label>
				<input type="text" id="input6" name="tob" class="form-control">
				<span style="color: red" id="span6"></span>
			</div>
		</div>
	</div>
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" name="donation" id="donar" class="btn-success p-2" style="text-align: center; border-radius: 5%; border:1px solid green; width: 100px;">Donation
		</button>
	</div>
<script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/blooddonar.js"></script>
</body>
</html>