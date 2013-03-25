
<?php
include('./con.php');
$pID = $_GET["id"];

echo "ID: ". $pID; 

// build query
$id = mysql_real_escape_string($_GET['id']);

$sql = "SELECT `first_n`, `last_n`, `image`, `status`, `level` FROM `jokes` WHERE `" . $pID . "` = 1";

$profileSet = @mysql_query($sql);

if (!$profileSet) {
	echo "<p><strong>Query error:</strong><br /> $query</p>"; // query error
	break; // terminate
}
if (mysql_num_rows($profileSet) < 1) {
	echo '<p>No photos available';
	break; // terminate
}

// loop through
while($profile = mysql_fetch_array($profileSet, MYSQL_BOTH)) {
	echo $profile['f_name'] . " " . $profile['l_name'];
} // while photos