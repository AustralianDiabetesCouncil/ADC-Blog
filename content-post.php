<?php
/**
 * Post Content Template
 *
 * This template is the default page content template. It is used to display the content of the
 * `single.php` template file, contextually, as well as in archive lists or search results.
 *
 * @package WooFramework
 * @subpackage Template
 */

/**
 * Settings for this template file.
 *
 * This is where the specify the HTML tags for the title.
 * These options can be filtered via a child theme.
 *
 * @link http://codex.wordpress.org/Plugin_API#Filters
 */
 global $woo_options;
 
 $title_before = '<h1 class="title">';
 $title_after = '</h1>';
 
 if ( ! is_single() ) {
 
 	$title_before = '<h2 class="title">';
 	$title_after = '</h2>';
 
	$title_before = $title_before . '<a href="' . get_permalink( get_the_ID() ) . '" rel="bookmark" title="' . the_title_attribute( array( 'echo' => 0 ) ) . '">';
	$title_after = '</a>' . $title_after;
 
 }
 
 $page_link_args = apply_filters( 'woothemes_pagelinks_args', array( 'before' => '<div class="page-link">' . __( 'Pages:', 'woothemes' ), 'after' => '</div>' ) );
 
 woo_post_before();
?>
<article <?php post_class(); ?>>
<?php
	woo_post_inside_before();	
	if ( $woo_options['woo_post_content'] != 'content' AND !is_singular() )
		woo_image( 'width='.$woo_options['woo_thumb_w'].'&height='.$woo_options['woo_thumb_h'].'&class=thumbnail '.$woo_options['woo_thumb_align'] );
?>
	<header>
		<?php the_title( $title_before, $title_after ); ?>
		<?php // output tags
		$post_info ='[post_tags before=""]';
		printf( '<div class="post-utility">%s</div>' . "\n", apply_filters( 'woo_post_inside_after_default', $post_info ) );
		?>
		<?php $lead = get_field('lead_text'); ?>
		<?php if ( $lead ) { ?>
			<p class="lead"><?php the_field('lead_text'); ?></p>
		<?php } ?>
		<?php if ( in_category('videos') ) { ?>
			<p style="margin-bottom: 20px;"><?php the_field('video') ?></p>
		<?php } else { ?>
			<div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
		<?php } ?>
		
	</header>
	<section class="entry">
		<?php /* if ( in_category('2') && !is_archive() && !is_home() ) { ?>
			<div class="recipe-thumbnail">
				<?php the_post_thumbnail('recipe'); ?>
			</div>
		<?php } */ ?> 
	    <?php
	    	if ( $woo_options['woo_post_content'] == 'content' || is_single() ) { the_content(__('Continue Reading &rarr;', 'woothemes') ); } else { the_excerpt(); }
	    	if ( $woo_options['woo_post_content'] == 'content' || is_singular() ) wp_link_pages( $page_link_args );
	    ?>
	</section><!-- /.entry -->
	<div class="fix"></div>
<?php
	woo_post_inside_after();
?>
<?php
if ( !is_single() ) :
	woo_post_meta();
endif;
?>
</article><!-- /.post -->
<?php
	woo_post_after();
	$comm = $woo_options[ 'woo_comments' ];
	if ( ( $comm == 'post' || $comm == 'both' ) && is_single() ) { comments_template(); }
?>