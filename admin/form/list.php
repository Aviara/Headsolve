<?php
	require_once('connection.php');
	
	$strSql = 'SELECT * FROM employees';
	$result = mysql_query($strSql);
	
	$arrEmployeeData = array();
	
	if ($result) {
		while( $row = mysql_fetch_object($result)) {
			$arrEmployeeData[$row->id] = $row;
		}
	}
	
?>

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
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Table View of <small> Company employees.</small></h1>
</div>

<!-- Registration form - START -->
<div class="container">
	<div class="col-md-12">
		<a href="index.php" class="btn btn-info">Add New Employee</a>
	</div>
	<div>&nbsp;</div>
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
		<div class="col-lg-5 col-md-push-1">
		</div>
		<div class="employee-listing">
			<table id="employee-listing" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Contry</th>
						<th>Email</th>
						<th>Mobile No</th>
						<th>About You</th>
						<th>BirthDay</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if (true == is_array($arrEmployeeData) && 0 < count($arrEmployeeData)) {
							foreach ($arrEmployeeData as $employee) {
								echo '<tr>';
								echo '<td>' . $employee->id . '</td>';
								echo '<td>' . $employee->name . '</td>';
								echo '<td>' . $employee->country . '</td>';
								echo '<td>' . $employee->email . '</td>';
								echo '<td>' . $employee->mobile_no . '</td>';
								echo '<td>' . $employee->about_you . '</td>';
								echo '<td>' . $employee->birthday . '</td>';
								echo '</tr>';
							}
						}
					?>
				</tbody>
			</table>
		</div>
    </div>
</div>
<!-- Registration form - END -->

</div>
<script>
$(document).ready(function() {
    $('#employee-listing').DataTable();
} );
</script>
</body>
</html>