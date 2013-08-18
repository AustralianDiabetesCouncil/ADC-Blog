<?php
/**
 * Magazine Featured Content Template
 */
 
 global $woo_options;
 
 $title_before = '<h2 class="title"><a href="' . get_permalink( get_the_ID() ) . '" rel="bookmark" title="' . the_title_attribute( array( 'echo' => 0 ) ) . '">';
 $title_after = '</a></h2>';
 
 $page_link_args = apply_filters( 'woothemes_pagelinks_args', array( 'before' => '<div class="page-link">' . __( 'Pages:', 'woothemes' ), 'after' => '</div>' ) );
 
 woo_post_before();
?>
<article <?php post_class(); ?>>
	<?php
		woo_post_inside_before();
	?>
	<div class="mag-item-image">
		<?php if ( get_field('video') ) {
	    	the_field('video');
	    } elseif ( has_post_thumbnail() ) {
			$imageid = get_post_thumbnail_id( $post->ID );
			$image = wp_get_attachment_image_src( $imageid, 'mag' ); ?>
			<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><img src="<?php echo $image[0]; ?>"></a>
		<?php } ?>
	</div>
	<span class="post-cat">
		<?php $category = get_the_category(); 
		echo $category[0]->cat_name; ?>
	</span>
	<header>
		<?php the_title( $title_before, $title_after ); ?>
	</header>
	<section class="entry">
		<?php if ( in_category('recipe') ) {
			echo get_summary(200);
		} else {
			echo get_excerpt(200);
		} ?>
	</section><!-- /.entry -->
	<div class="post-meta">
		<span class="author vcard">
			<a href="<?php echo get_bloginfo('url');?>/?author=<?php the_author_meta('ID') ?>" title="Posts by <?php the_author_meta('display_name') ?>" rel="author"><?php the_author_meta('display_name') ?></a>
		</span>
		<span class="date time published">
			<?php 
			$posttime = get_the_time('U');
			$currenttime = date('U');
			?>
			<?php if ( ($currenttime - $posttime) <= 345600 ) {
				echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago';
			} else {
				echo get_the_date();
			}; ?>
		</span>
	</div>
	<?php
		//woo_post_inside_after();
		//woo_post_meta();
	?>
</article><!-- /.post -->
<?php
	woo_post_after();
?>