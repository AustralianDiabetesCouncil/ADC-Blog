<?php
/**
 * Footer Template
 *
 * Here we setup all logic and XHTML that is required for the footer section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */

 global $woo_options; ?>

	</div><!-- /#inner-wrapper -->

</div><!-- /#wrapper -->

<div class="footer-wrap">
	<footer id="footer" class="col-full">
		
		<section id="footer-blocks">
			<div class="footer-block">
				<h3>About</h3>
				<div class="footer-menu">
					<ul class="menu">
						<li><a href="#">Overview</a></li>
						<li><a href="#">The Clear Strategy</a></li>
						<li><a href="#">Executive Team, Board, and Committees</a></li>
						<li><a href="#">Advocacy</a></li>
						<li><a href="#">Research</a></li>
						<li><a href="#">Annual Reports</a></li>
						<li><a href="#">Life for a Child</a></li>
						<li><a href="#">ATSI Charter of Engagement</a></li>
						<li><a href="#">Awards</a></li>
						<li><a href="#">Publications</a></li>
					</ul>
				</div>
			</div><!-- footer-widget-block -->
			<div class="footer-block">
				<h3>Service</h3>
				<div class="footer-menu">
					<ul class="menu">
						<li><a href="#">Volunteers</a></li>
						<li><a href="#">Donations</a></li>
						<li><a href="#">Membership</a></li>
						<li><a href="#">Bequests</a></li>
						<li><a href="#">Fundraising</a></li>
						<li><a href="#">Regular Giving</a></li>
						<li><a href="#">Sponsor</a></li>
					</ul>
				</div>
			</div><!-- footer-widget-block -->
			<div class="footer-block">
				<h3>Support Us</h3>
				<div class="footer-menu">
					<ul class="menu">
						<li><a href="#">Volunteers</a></li>
						<li><a href="#">Donations</a></li>
						<li><a href="#">Membership</a></li>
						<li><a href="#">Bequests</a></li>
						<li><a href="#">Fundraising</a></li>
						<li><a href="#">Regular Giving</a></li>
						<li><a href="#">Sponsor</a></li>
					</ul>
				</div>
			</div><!-- footer-widget-block -->
			<div class="footer-block">
				<h3>Media</h3>
				<div class="footer-menu">
					<ul class="menu">
						<li><a href="#">News</a></li>
						<li><a href="#">Press Releases</a></li>
						<li><a href="#">Position Statements</a></li>
						<li><a href="#">Events</a></li>
					</ul>
				</div>
			</div><!-- footer-widget-block -->
			<div class="footer-block">
				<h3>Connect With Us</h3>
				<div class="footer-menu">
					<ul class="menu">
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">LinkedIn</a></li>
						<li><a href="#">YouTube</a></li>
						<li><a href="#">Soundcloud</a></li>
					</ul>
				</div>
			</div><!-- footer-widget-block -->
			<div class="footer-block last">
				<img src="<?php echo get_template_directory_uri(); ?>/images/a-shared-voice-2x.png" alt="A Shared Voice">
			</div><!-- footer-widget-block -->
        	<div class="fix"></div>
		</section>

		<div id="copyright" class="col-left">
			<p>© <?php echo date('Y'); ?>, Australian Diabetes Council. All rights reserved. ABN 84 001 363 766 - CFN 12458.</p>
			<p class="conditions">
				<a href="#">Terms and Conditions</a>
				<a href="#">Privacy</a>
				<a href="#">Sitemap</a>
			</p>
		</div>

	</footer>
</div>

	<?php woo_footer_after(); ?>

<div class="fix"></div><!--/.fix-->

<?php wp_footer(); ?>
<?php woo_foot(); ?>
<script>
	jQuery('a[title="back_adc"]').parent().addClass("pull-right");
	jQuery('#mc-embedded-subscribe').addClass('btn');
</script>
</body>
</html>