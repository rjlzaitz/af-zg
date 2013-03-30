<?php
// Header 
include('header.php');
?>

<div id="content">
	<article>

		<h1>Please choose to release or claim your .com Domain ID.</h1>
		<p>If you choose to release <?php echo $url; ?> to the Z&#243;calo Group Employee Domain Hosting Service for <strong>$15/month</strong>, (automatically deducted each month from your payroll check pre-tax), please continue here.</p>
		<a href="result.php?id=<?php echo $profile_id; ?>" onClick="_gaq.push(['_trackEvent', 'Result', 'Release', '<?php echo $full_n; ?>']);" class="button">Release &amp; Agree to host for $15/month</a>
		<p>If you choose to claim <?php echo $url; ?> from Z&#243;calo Group for a <strong>one-time processing fee of $175</strong>, (to be deducted from your payroll check pre-tax), please purchase here.</p>
		<a href="result.php?id=<?php echo $profile_id; ?>" onClick="_gaq.push(['_trackEvent', 'Result', 'Claim', '<?php echo $full_n; ?>']);" class="button">Claim &amp; Purchase your domain for $175</a>

	</article>
</div><!-- #content -->
<aside>
<aside>
	<h1>What is this?</h1>	
	<p>Many of Z&#243;calo Group’s clients continue to experience licensee obstructions when seeking to register U.S.-based website domains in English, especially international client partners in China, Russia and Indonesia. </p>	
	<p>It has come to the attention of Z&#243;calo Group [<strong>the Organization</strong>] that a majority of employees have to date <strong>not registered their names as website domains</strong>. In order to stay competitive within the global digital space, <strong>the Organization</strong> has purchased these unclaimed domain names as a service to its employees, including <strong><?php echo $url; ?></strong>, with the intention of commoditizing them on the open market and driving leads to the <strong>Organization’s</strong> web properties.</p>	
	<p>The U.S. Employee Domain ID Protocol requires that the Organization provide employees the opportunity to claim their domain names from the registering Organization or agree to have the <strong>Organization</strong> host an Employee Profile within a <strong>7-day grace period as required by law (25 USC &sect; DNSSEC)</strong>. Fees may vary. After this period, all unclaimed domains are cleared to be used by the <strong>Organization</strong> in any manner it deems appropriate for its business.</p>	
</aside>

<?php
// Footer
include('footer.php');
?>