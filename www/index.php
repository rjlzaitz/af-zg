
<?php
include('./con.php');
$pID = $_GET["id"];

//echo "ID: ". $pID . "<br>"; 

// build query
$id = mysql_real_escape_string($_GET['id']);

$sql = "SELECT `first_n`, `last_n`, `image`, `status`, `level` FROM ". $dbName .".jokes WHERE `id` = " . $pID;

//echo $sql;

$profileSet = @mysql_query($sql);

//echo $profileSet;

if (!$profileSet) {
	echo "<p><strong>Query error:</strong><br /> $query</p>"; // query error
}
if (mysql_num_rows($profileSet) < 0) {
	echo '<p>No Profile</p>';
}

// creating array
$profile = mysql_fetch_array($profileSet, MYSQL_ASSOC);

// loop through
//$length = count($profile);
//print_r($profile);
echo "<img src='" . $profile['image'] . "' alt='" . $profile['first_n'] . " " . $profile['last_n'] . "' width='50' height='50' /> <br>";
echo "name: " . $profile['first_n'] . " " . $profile['last_n'] . "<br>";
echo "status: " . $profile['status'] . "<br>";
echo "level: " . $profile['level'] . "<br>";
