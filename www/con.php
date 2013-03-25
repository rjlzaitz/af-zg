<?php
	// Global Settings
	$dbName = 'aprilfools';
	$dbTable = 'jokes';
	$dbUser = 'dev_zach';
	$dbPass = 'mdnitp912407';

	// Local Settings
//	$dbURL = 'localhost';

	// Prod Settings 
	$dbURL = 'mysql.zgresources.com';


	// connect to database server
	$dbLink = @mysql_connect($dbURL,$dbUser,$dbPass);
	if (!$dbLink) exit('<p><strong>Error:</strong> Connecting to database server.</p>');
	
	// select database
	if (!@mysql_select_db($dbName)) exit('<p><strong>Error:</strong> Selecting database.');
?>
