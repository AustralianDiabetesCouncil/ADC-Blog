<?php
/**
 * Recipe Content Template
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
		<h1><?php the_title(); ?></h1>
		<?php // output tags
		$post_info ='[post_tags before=""]';
		printf( '<div class="post-utility">%s</div>' . "\n", apply_filters( 'woo_post_inside_after_default', $post_info ) );
		?>
		<div class="recipe-summary">
			<?php if ( get_field('recipe_summary') ) : ?>
			    <p><?php the_field('recipe_summary'); ?></p>
			<?php endif; ?>
		</div>
	</header>

	<section class="entry">
		<div class="recipe-content">
			<div class="recipe-thumbnail">
				<?php the_post_thumbnail('recipe'); ?>
				<?php if ( get_field('image_credit') ) { ?>
					<small><?php the_field('image_credit'); ?></small>
				<?php } ?>
			</div>
			<div class="recipe-ingredients">
				<?php if ( get_field('servings') ) : ?>
					<p><strong>Serves: </strong><?php the_field('servings'); ?>
				<?php endif; ?>
				<?php if ( get_field(preparation_time) ) : ?>
					<br><strong>Preparation Time: </strong><?php the_field('preparation_time'); ?> minutes</p>
				<?php endif; ?>
				<?php if ( get_field(cooking_time) ) : ?>
					<br><strong>Cooking Time: </strong><?php the_field('cooking_time'); ?> minutes</p>
				<?php endif; ?>

				<h2>Ingredients</h2>
				<?php if ( get_field('ingredients_list_1_name') ) { ?>
					<strong><?php the_field('ingredients_list_1_name') ?></strong>
				<?php } ?>
				<?php $rows = get_field('ingredient_list');
				if ( $rows ) {
					echo '<ul>';
				 
					foreach($rows as $row) {
						echo '<li>' . $row['ingredient_quantity'] . ' ' . $row['ingredient_unit'] . ' ' . $row['ingredient_name'] . '</li>';
					}
				 
					echo '</ul>';
				} ?>

				<?php if ( get_field('ingredients_list_2_name') ) { ?>
					<strong><?php the_field('ingredients_list_2_name') ?></strong>
				<?php } ?>
				<?php $rows = get_field('ingredient_list_two');
				if ( $rows ) {
					echo '<ul>';
				 
					foreach($rows as $row) {
						echo '<li>' . $row['ingredient_quantity'] . ' ' . $row['ingredient_unit'] . ' ' . $row['ingredient_name'] . '</li>';
					}
				 
					echo '</ul>';
				} ?>
				</p>
			</div>

			<div class="recipe-method">
		    	<h2>Method</h2>
		    	<p><?php $methodsteps = get_field('method_steps');
				if ( $methodsteps ) {
					echo '<ol>';
				 
					foreach($methodsteps as $methodstep) {
						echo '<li>';
						echo $methodstep['method_step'];
						if ( $methodstep['step_image'] ) : echo '<img align="right" style="max-width: 99%;" src="' . $methodstep['step_image'] . '"><br>'; endif;
						echo '</li>';
					}
				 
					echo '</ol>';
				} ?>
				</p>
			</div>
			
			<?php $dietitiansnote = get_field('dietitians_note');
			if ( $dietitiansnote ) { ?>
				<div class="dietitians-note">
					<h2>Dietitians Note</h2>
					<p><?php the_field('dietitians_note'); ?></p>
				</div>
			<?php } ?>
			
			<div class="recipe-nutrition">
			    <h2>Nutritional Information (per serve)</h2>
				 	<table class="nutritional-info"><tbody>

				 	<?php

				 	$field = get_field('energy_kj');
			    	if ( $field ) {
			    		echo '<tr><td width="50%">Energy (kJ)</td><td width="50%">' . $field . '</td></tr>';
			    	};

			    	$field = get_field('protein');
			    	if ( $field ) {
			    		echo '<tr><td>Protein (g)</td><td>' . $field . '</td></tr>';
			    	};

			    	$field = get_field('total_fat');
			    	if ( $field ) {
			    		echo '<tr><td>Total Fat (g)</td><td>' . $field . '</td></tr>';
			    	};

			    	$field = get_field('saturated_fat');
			    	if ( $field ) {
			    		echo '<tr><td>Saturated Fat (g)</td><td>' . $field . '</td></tr>';
			    	};

			    	$field = get_field('polyunsaturated_fat');
			    	if ( $field ) {
			    		echo '<tr><td>Polyunsaturated Fat (g)</td><td>' . $field . '</td></tr>';
			    	};

			    	$field = get_field('monounsaturated_fat');
			    	if ( $field ) {
			    		echo '<tr><td>Monounsaturated Fat (g)</td><td>' . $field . '</td></tr>';
			    	};

			    	$field = get_field('trans_fat');
			    	if ( $field ) {
			    		echo '<tr><td>Trans Fat (g)</td><td>' . $field . '</td></tr>';
			    	};

			    	$field = get_field('carbohydrates');
			    	if ( $field ) {
			    		echo '<tr><td>Carbohydrates (g)</td><td>' . $field . '</td></tr>';
			    	};

			    	$field = get_field('sugar');
			    	if ( $field ) {
			    		echo '<tr><td>Sugar (g)</td><td>' . $field . '</td></tr>';
			    	};

			    	$field = get_field('fibre');
			    	if ( $field ) {
			    		echo '<tr><td>Dietary Fibre (g)</td><td>' . $field . '</td></tr>';
			    	};

			    	$field = get_field('sodium');
			    	if ( $field ) {
			    		echo '<tr><td>Sodium (mg)</td><td>' . $field . '</td></tr>';
			    	};

			    	$field = get_field('potassium');
			    	if ( $field ) {
			    		echo '<tr><td>Potassium (mg)</td><td>' . $field . '</td></tr>';
			    	};

			    	$field = get_field('cholesterol');
			    	if ( $field ) {
			    		echo '<tr><td>Cholesterol (mg)</td><td>' . $field . '</td></tr>';
			    	};

			    	$field = get_field('vitamin_a');
			    	if ( $field ) {
			    		echo '<tr><td>Vitamin A (%)</td><td>' . $field . '</td></tr>';
			    	};

			    	$field = get_field('vitamin_c');
			    	if ( $field ) {
			    		echo '<tr><td>Vitamin C (%)</td><td>' . $field . '</td></tr>';
			    	};

			    	$field = get_field('iron');
			    	if ( $field ) {
			    		echo '<tr><td>Iron (%)</td><td>' . $field . '</td></tr>';
			    	};

			    	$field = get_field('calcium');
			    	if ( $field ) {
			    		echo '<tr><td>Calcium (mg)</td><td>' . $field . '</td></tr>';
			    	};

			    	?>

			    	</tbody></table>
			</div>

			<?php if ( get_field('image_credit') ) { ?>
				<p class="recipe-disclaimer"><?php the_field('recipe_disclaimer'); ?></p>
			<?php } ?>

		</div>
		<?php the_content(); ?>
	</section><!-- /.entry -->
	<div class="fix"></div>
<?php
	woo_post_inside_after();
?>
<?php /* Show replated posts */ related_posts(); ?>
</article><!-- /.post -->
<?php
	woo_post_after();
	$comm = $woo_options[ 'woo_comments' ];
	if ( ( $comm == 'post' || $comm == 'both' ) && is_single() ) { comments_template(); }
?>