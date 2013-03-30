<?php
	// Header 
	include('header.php');
?>
<div id="content">
	<article>
		<?php echo '<img src="' . $image . '" alt="' . $full_n . '" />'; ?>
		<dl>
			<dt>Name:</dt>
				<dd><?php echo $full_n; ?></dd>
			<dt>Status:</dt>
				<dd><?php echo $status; ?></dd>
			<dt>Level:</dt>
				<dd><?php echo $level; ?></dd>
			<dt>Office Location:</dt>
				<dd><?php echo $location; ?></dd>
			<dt>SSN:</dt>
				<dd><?php echo $ssn; ?></dd>
		</dl> 
		<p>If you are <?php echo $full_n; ?>, please continue for more instructions on how to release or claim <?php echo $url; ?></p>
		<a href="choice.php?id=<?php echo $profile_id; ?>" onClick="_gaq.push(['_trackEvent', 'Choice', 'Continue', '<?php echo $full_n; ?>']);" class="button">continue</a> 
	</article>
</div><!-- #content -->
<aside>
	<h1>What is this?</h1>	
	<p>Many of Zócalo Group’s clients continue to experience licensee obstructions when seeking to register U.S.-based website domains in English, especially international client partners in China, Russia and Indonesia. </p>	
	<p>It has come to the attention of Zócalo Group [the Organization] that a majority of employees have to date not registered their names as website domains. In order to stay competitive within the global digital space, the Organization has purchased these unclaimed domain names as a service to its employees, including <?php echo $url; ?>, with the intention of commoditizing them on the open market and driving leads to the Organization’s web properties.</p>	
	<p>The U.S. Employee Domain ID Protocol requires that the Organization provide employees the opportunity to claim their domain names from the registering Organization or agree to have the Organization host an Employee Profile within a 7-day grace period as required by law (25 USC § DNSSEC). Fees may vary. After this period, all unclaimed domains are cleared to be used by the Organization in any manner it deems appropriate for its business.</p>	
</aside>
<?php 
	// Footer
	include('footer.php'); 
?>
