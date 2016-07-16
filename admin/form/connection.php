<?php
	define("HOST", 'localhost');
	define("POST", '3036');
	define("USERNAME", 'root');
	define("PASSWORD", '');
	define("DATABASENAME", 'registration');
	
	$con = mysql_connect(HOST, USERNAME, PASSWORD);
	
	if ($con) {
		mysql_select_db(DATABASENAME);
	} else {
		echo '<h1>Failed to connent mysql</h1>';
	}
	
	function display($strData) {
		print_r('<pre>');
		print_r($strData);
		print_r('</pre>');
	}
?>