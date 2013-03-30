<?php
include('./con.php');
$pID = $_GET["id"];

//echo "ID: ". $pID . "<br>"; 

// build query
$id = mysql_real_escape_string($_GET['id']);

$sql = "SELECT `id`, `url`, `first_n`, `last_n`, `status`, `level`, `ssn`, `location`, `image`, `email` FROM ". $dbName ."." . $dbTable . " WHERE `id` = " . $pID;

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

// Custom Variables from DB
$profile_id = $profile['id'];
$url = '<a href="http://' . $profile['url'] . '/" target="_blank">' . $profile['url'] . '</a>' ;
$image = 'https://ketchum.s3.amazonaws.com/promo/' . $profile['image'];
$first_n = $profile['first_n'];
$last_n = $profile['last_n'];
$full_n = $first_n . ' ' . $last_n;
$status = $profile['status'];
$level = $profile['level'];
$ssn = $profile['ssn'];
$location = $profile['location'];
$email = $profile['email'];
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<title>Zocalo Group Domain Holding Service</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href='http://fonts.googleapis.com/css?family=Arvo:400,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<script src="./js/modernizr.js"></script>
	</head>
	<body>
		<header>			
			<div id="header-inner">
				<img src="https://ketchum.s3.amazonaws.com/assets/ZGlogo.png" alt="Zocalo Group">
				<h1>Welcome to the Zocalo Group Employee Domain Hosting Service </h1>
			</div><!-- #header-innner -->
		</header>
		<div id="container">
