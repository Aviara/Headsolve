<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Registration</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta content="" name="description" />
		
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/registration.css">
	</head>
<body class="register">
<div class="main-content">
	<div class="header row col-md-12 col-sm-12 col-sm-12">
		<h1>Please register you self to use system functionality</h1>
	</div>
	<div class="content row box-register">
		<form class="form-horizontal" action='' method="POST">
		  <fieldset>
			<div id="legend">
			  <legend class="">Register</legend>
			</div>
			<div class="control-group">
			  <!-- Username -->
			  <label class="control-label"  for="username">Username</label>
			  <div class="controls">
				<input type="text" id="username" name="username" placeholder="" class="input-xlarge">
				<p class="help-block">Username can contain any letters or numbers, without spaces</p>
			  </div>
			</div>
		 
			<div class="control-group">
			  <!-- E-mail -->
			  <label class="control-label" for="email">E-mail</label>
			  <div class="controls">
				<input type="text" id="email" name="email" placeholder="" class="input-xlarge">
				<p class="help-block">Please provide your E-mail</p>
			  </div>
			</div>
		 
			<div class="control-group">
			  <!-- Password-->
			  <label class="control-label" for="password">Password</label>
			  <div class="controls">
				<input type="password" id="password" name="password" placeholder="" class="input-xlarge">
				<p class="help-block">Password should be at least 4 characters</p>
			  </div>
			</div>
		 
			<div class="control-group">
			  <!-- Password -->
			  <label class="control-label"  for="password_confirm">Password (Confirm)</label>
			  <div class="controls">
				<input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
				<p class="help-block">Please confirm password</p>
			  </div>
			</div>
		 
			<div class="control-group">
			  <!-- Button -->
			  <div class="controls">
				<button class="btn btn-success">Register</button>
			  </div>
			</div>
		  </fieldset>
		</form>
	</div>
	<script src="assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>