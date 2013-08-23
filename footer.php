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
						<li><a href="http://www.australiandiabetescouncil.com/about-us/overview.aspx">Overview</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/about/clear-strategy">The Clear Strategy</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/about/our-board-and-committees">Executive Team, Board, and Committees</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/about/advocacy-support">Advocacy</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/about/research">Research</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/about/annual-reports">Annual Reports</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/about/idf-life-for-a-child-program">Life for a Child</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/about/charter-of-engagement-for-working-with-aboriginal">ATSI Charter of Engagement</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/about/our-awards">Awards</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/publications-(1)">Publications</a></li>
					</ul>
				</div>
			</div><!-- footer-widget-block -->
			<div class="footer-block">
				<h3>Service</h3>
				<div class="footer-menu">
					<ul class="menu">
						<li><a href="http://www.australiandiabetescouncil.com/volunteer">Volunteers</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/fundraising.aspx">Donations</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/membership/become-a-member">Membership</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/membership/benefits-of-membership">Bequests</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/fundraising/fundraising">Fundraising</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/fundraising/regular-giving">Regular Giving</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/fundraising/become-a-sponsor">Sponsor</a></li>
					</ul>
				</div>
			</div><!-- footer-widget-block -->
			<div class="footer-block">
				<h3>Support Us</h3>
				<div class="footer-menu">
					<ul class="menu">
						<li><a href="http://www.australiandiabetescouncil.com/volunteer">Volunteers</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/fundraising.aspx">Donations</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/membership/become-a-member">Membership</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/membership/benefits-of-membership">Bequests</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/fundraising/fundraising">Fundraising</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/fundraising/regular-giving">Regular Giving</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/fundraising/become-a-sponsor">Sponsor</a></li>
					</ul>
				</div>
			</div><!-- footer-widget-block -->
			<div class="footer-block">
				<h3>Media</h3>
				<div class="footer-menu">
					<ul class="menu">
						<li><a href="http://www.australiandiabetescouncil.com/media/news">News</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/media/media-releases">Press Releases</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/resources/position-statements">Position Statements</a></li>
						<li><a href="http://www.australiandiabetescouncil.com/events">Events</a></li>
					</ul>
				</div>
			</div><!-- footer-widget-block -->
			<div class="footer-block">
				<h3>Connect With Us</h3>
				<div class="footer-menu">
					<ul class="menu">
						<li><a href="http://www.australiandiabetescouncil.com/contact">Contact Us</a></li>
						<li class="social-link"><div class="fb-like" data-href="http://www.facebook.com/australiandiabetescouncil" data-width="170" data-layout="button_count" data-show-faces="false" data-send="false"></div></li>
						<li class="social-link"><a href="https://twitter.com/asharedvoice" class="twitter-follow-button" data-show-count="false">Follow @asharedvoice</a></li>
						<li class="social-link"><script src="//platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script><script type="IN/FollowCompany" data-id="1786754" data-counter="right"></script></li>
						<li class="social-link youtube"><div class="g-ytsubscribe" data-channel="ausdiabetescouncil" data-layout="default"></div></li>
						<li><a href="https://soundcloud.com/australiandiabetescouncil">Soundcloud</a></li>
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

<!-- social icon scripts -->
<div id="fb-root"></div>
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=532404886825430";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<script src="https://apis.google.com/js/plusone.js"></script>
</body>
</html>