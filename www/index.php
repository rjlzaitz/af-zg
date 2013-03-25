
<?php
include('./con.php');
echo "ID: ". $_GET["id"]; 

// is form data present?
if (!empty($_POST)) {
	// process form data
			
	// build query
	$title = mysql_real_escape_string($_POST['title']);
	$description = mysql_real_escape_string($_POST['description']);
	
	$query = 'INSERT INTO albums SET ' . 
				"title = '$title', " .
				"description = '$description' ";
	
	// send query to server
	$result = @mysql_query($query);
	
	// check query result
	if (!$result) {
		// query error - display debug or friendly message
		echo '<p><strong>Query error</strong> - no soup for you! *snap*</p>';
	} else {
		// success!
		echo '<p>The record has been saved.</p>';
	}		
	
	// process results if any
	
} else {
	echo "oops!";
}
?>
