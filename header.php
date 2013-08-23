<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>" />
<title><?php woo_title(); ?></title>
<?php woo_meta(); ?>
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>" />
<?php wp_head(); ?>
<?php woo_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-XQ9S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-XQ9S');</script>
<!-- End Google Tag Manager -->

<div class="header-wrap">
	<header id="header" class="col-full">
		<img class="print-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-mobile-2x.png" alt="Australian Diabetes Council">
		<h1 class="logo">
			<a href="http://australiandiabetescouncil.com">Australian Diabetes Council</a>
		</h1>
		
		<div class="search">
			<div class="search-wrap">
				<form id="search-form" action="http://www.australiandiabetescouncil.com/search-results">
					<label for="q" id="search-label" class="screen-reader">Search</label>
					<input aria-labelledby="search-label" id="q" type="search" name="q" class="search-field" placeholder="Search the ADC network" value="">
					<span class="search-icon"></span>
					<input type="submit" id="search-button" value="Search" class="button search-button">
				</form>
			</div>
		</div>

		<div class="main-nav-toggle">
			<!-- <a href="#" class="menu">&#9776;</a> -->
			<a href="#" class="menu menuicon-list"></a>
		</div>

		<nav id="secondary-nav">
			<span class="phone">Call: 1300 342 238</span>
			<!-- <a class="member-link renew" href="https://diabetesnswonline.com.au/Login.aspx" target="_blank">Renew</a>
			<a class="member-link join" href="https://diabetesnswonline.com.au/Details.aspx" target="_blank">Join</a> -->
			<div class="btn-group">
				<button class="btn dropdown-toggle" data-toggle="dropdown">Membership <span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="https://australiandiabetescouncil.wufoo.com/forms/w7x3k1/">Become a Member</a></li>
					<li><a href="https://australiandiabetescouncil.wufoo.com/forms/z7x3w1/">Renew Membership</a></li>
					<li><a href="https://australiandiabetescouncil.wufoo.com/forms/z7x3s5/">Change Membership Details</a></li>
					<li><a href="http://www.australiandiabetescouncil.com/membership/fees">Membership Fees</a></li>
				</ul>
			</div><!-- btn-group -->
			<a href="<?php the_field('donate_link', 'option'); ?>" target="_blank" class="btn btn-success">Donate</a>
		</nav>

	</header>
</div><!-- end header-wrap -->

<div class="main-nav-wrap">
	<nav id="main-nav">
		<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
	</nav>
</div><!-- end main-nav-wrap -->

<div id="wrapper">
	<div id="inner-wrapper">