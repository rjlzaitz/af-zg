
<?php
include('./con.php');
$pID = $_GET["id"];

echo "ID: ". $pID; 

// build query
$id = mysql_real_escape_string($_GET['id']);

$sql = "SELECT `first_n`, `last_n`, `image`, `status`, `level` FROM `jokes` WHERE `id` = " . $pID;

$profileSet = @mysql_query($sql);

if (!$profileSet) {
	echo "<p><strong>Query error:</strong><br /> $query</p>"; // query error
}
if (mysql_num_rows($profileSet) < 0) {
	echo '<p>No Profile</p>';
}

// loop through
while($profile = mysql_fetch_array($profileSet, MYSQL_BOTH)) {
	echo $profile['f_name'] . " " . $profile['l_name'];
} // while photos