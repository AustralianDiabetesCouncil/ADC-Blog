<?php
/**
 * Loop - Home
 *
 * This is the loop file used on the "Blog" page template.
 *
 * @package WooFramework
 * @subpackage Template
 */
global $more; $more = 0; 

woo_loop_before();

// Fix for the WordPress 3.0 "paged" bug.
$paged = 1;
if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
if ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
$paged = intval( $paged );

$query_args = array(
					'post_type' => array('post', 'exercise'), 
					'paged' => $paged
				);

$query_args = apply_filters( 'woo_blog_template_query_args', $query_args ); // Do not remove. Used to exclude categories from displaying here.

remove_filter( 'pre_get_posts', 'woo_exclude_categories_homepage', 10 );

query_posts( $query_args );
		
if ( have_posts() ) { $count = 0;
?>

<div class="fix"></div>

<?php
	while ( have_posts() ) { the_post(); $count++;

		 global $woo_options;
		 
		$title_before = '<h2 class="title">';
	 	$title_after = '</h2>';
	 
		$title_before = $title_before . '<a href="' . get_permalink( get_the_ID() ) . '" rel="bookmark" title="' . the_title_attribute( array( 'echo' => 0 ) ) . '">';
		$title_after = '</a>' . $title_after;

		$page_link_args = apply_filters( 'woothemes_pagelinks_args', array( 'before' => '<div class="page-link">' . __( 'Pages:', 'woothemes' ), 'after' => '</div>' ) );
		 
		woo_post_before(); ?>
		<article <?php post_class(); ?>>
		<?php
			woo_post_inside_before();	
			if ( $woo_options['woo_post_content'] != 'content' AND !is_singular() )
				woo_image( 'width='.$woo_options['woo_thumb_w'].'&height='.$woo_options['woo_thumb_h'].'&class=thumbnail '.$woo_options['woo_thumb_align'] );
		?>
			<header>
				<?php the_title( $title_before, $title_after ); ?>
			</header>
		<?php
			woo_post_meta();
		?>
			<section class="entry">
			    <?php
			    	if ( $woo_options['woo_post_content'] == 'content' || is_single() ) { the_content(__('Continue Reading &rarr;', 'woothemes') ); } else { the_excerpt(); }
			    	if ( $woo_options['woo_post_content'] == 'content' || is_singular() ) wp_link_pages( $page_link_args );
			    ?>
			</section><!-- /.entry -->
			<div class="fix"></div>
		<?php
			woo_post_inside_after();
		?>
		</article><!-- /.post -->
		<?php
			woo_post_after();
			$comm = $woo_options[ 'woo_comments' ];
			if ( ( $comm == 'post' || $comm == 'both' ) && is_single() ) { comments_template(); }

	} // End WHILE Loop
} else {
	get_template_part( 'content', 'noposts' );
} // End IF Statement

woo_loop_after();

woo_pagenav();
?>
