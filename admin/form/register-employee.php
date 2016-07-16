<?php
require_once('connection.php');

if (true == isset($_POST['submit']) && 1 <= strlen($_POST['name'])) {
	$strName 		= trim($_POST['name']);
	$strCountry 	= trim($_POST['country']);
	$strEmail	 	= trim($_POST['email']);
	$strMobileNo 	= trim($_POST['mobile-no']);
	$strAboutyou 	= trim($_POST['about-you']);
	$strBirthday 	= trim($_POST['birthday']);
	
	$strInsertSql = 'INSERT INTO 
						employees(name, country, email, mobile_no, about_you, birthday, created_on) 
					values
						("' . $strName . '", "' . $strCountry . '", "' . $strEmail . '", "' . $strMobileNo. '", "' . $strAboutyou. '", "' . $strBirthday. '", "' . date('Y-m-d h:i:m') . '")';
						
	$intInsert = mysql_query($strInsertSql);
	
	if (true == $intInsert) {
		echo '<h1>Data inserted successsfully</h1>';
		header('Location: list.php?insert=1');
		exit;
	} else {
		echo '<h1>Failed to insert data</h1>';
		header('Location: index.php?insert=0');
		exit;
	}
} else {
}
exit;
?>