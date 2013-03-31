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

<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie ie6 lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie ie7 lt-ie10 lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie ie8 lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie ie9 lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
		<title>Z&#243;calo Group Domain Holding Service</title>
		<link rel="stylesheet" type="text/css" href="./style.css" />
		<link href='http://fonts.googleapis.com/css?family=Arvo:400,700|Open+Sans:400,700' rel='stylesheet' type='text/css' /> 
		<script src="./js/modernizr.js"></script>
	</head>
	<body>
		<header>			
			<div id="header-inner">
				<img src="https://ketchum.s3.amazonaws.com/assets/ZGlogo.png" alt="Zocalo Group">
				<h1>Welcome to the Z&#243;calo Group Employee Domain Hosting Service </h1>
			</div><!-- #header-innner -->
		</header>
		<div id="container">
