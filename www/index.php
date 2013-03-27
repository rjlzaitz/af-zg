
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
?>

<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Zocalo Group Domain Holding Service</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href='http://fonts.googleapis.com/css?family=Arvo:400,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>
	</head>
	<body>		
		<header>	
			<div id="header-inner">
				<img src="imgs/ZGlogo.png" alt="ZGlogo">
				<h1>Welcome to the Zocalo Group Domain Service</h1>
			</div><!-- #header-innner -->
		</header>
		<div id="container">
			<div id="content">
				<article>
					<?php 
						echo "<img src='" . $profile['image'] . "' alt='" . $profile['first_n'] . " " . $profile['last_n'] . "'' />";
					?>
					<dl>
						<dt>Name:</dt>
							<dd><?php echo $profile['first_n'] . " " . $profile['last_n']; ?></dd>
						<dt>Employee Status:</dt>
							<dd><?php echo $profile['status']; ?></dd>
						<dt>Office Location:</dt>
							<dd>Chicago, 234b</dd>
						<dt>Registrant Number:</dt>
							<dd><?php echo $profile['level'];?></dd>
					</dl> 
					<p>If you are <?php echo $profile['first_n'] . " " . $profile['last_n'];?>, then click below to see your options for how to use, remove or purchase your Zocalo Group Profile.</p>
					<a href="./choice.html" class="button">continue</a> 
				</article>
			</div><!-- #content -->
			<aside>
				<h1>What is this?</h1>
				
				<p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
				
				<p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>
			</aside>
		</div><!-- #container -->
	</body>
</html>