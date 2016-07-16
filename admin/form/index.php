<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Registration form Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Registration form <small> for Employees</small></h1>
</div>
<div class="col-md-12">
	<a href="list.php" class="btn btn-info">List Employees</a>
</div>
<div>&nbsp;</div>

<!-- Registration form - START -->
<div class="container">
	<?php 
		if (true == isset($_GET['insert']) && true == $_GET['insert']) {
	?>
		<div class="col-md-12">
			<div class="alert alert-success">
				<strong><span class="glyphicon glyphicon-ok"></span> Employee inserted Successfully!</strong>
			</div>
		</div>
	<?php } elseif (true == isset($_GET['insert']) && false == $_GET['insert']) { ?>
		<div class="col-md-12">
			<div class="alert alert-danger">
				<span class="glyphicon glyphicon-remove"></span><strong> Failed to insert Employee! Please try again later..!</strong>
            </div>
        </div>
	<?php } ?>
    <div class="row">
        <form role="form" method="post" action="register-employee.php">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputName">Enter Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="name" id="InputName" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputName">Select Your Country</label>
                    <div class="input-group">
						<select name="country" required class="form-control">
							<option value="">Select Country</option>
							<option value="IN">India</option>
						</select>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="email" placeholder="Enter Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Mobile Number</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="MobileNumber" name="mobile-no" placeholder="Mobile Number" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputMessage">About You</label>
                    <div class="input-group">
                        <textarea name="about-you" id="AboutYou" class="form-control" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputMessage">Birthday</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="Birthday" name="birthday" placeholder="Birthday" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success pull-right">
            </div>
        </form>
        <div class="col-lg-5 col-md-push-1 hide">
            <div class="col-md-12">
                <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span> Success! Message sent.</strong>
                </div>
                <div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span><strong> Error! Please check all page inputs.</strong>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Registration form - END -->

</div>

</body>
</html>