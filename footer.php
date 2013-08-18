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
		<?php 
			woo_footer_top();
			woo_footer_before();
		?>

		<?php woo_footer_inside(); ?>

		<div id="copyright" class="col-left">
			<?php woo_footer_left(); ?>
		</div>

		<div id="credit" class="col-right">
			<?php woo_footer_right(); ?>
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