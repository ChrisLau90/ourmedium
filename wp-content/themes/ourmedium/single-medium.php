<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post details -->
		<!--span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="comments">
			<?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?>
		</span -->
		<!-- /post details -->
		<div class="medium-wrapper">
			<div class="medium-image-wrapper">
				<div class="medium-change prev"><span>&lt;</span></div>
				<?php echo(types_render_field("image", array('class' => 'medium-image', 'size' => 'full')))?>
				<div class="medium-change next"><span>&gt;</span></div>
			</div>
			<a href="<?php echo(types_render_field("soundcloud-url", array('output' => 'raw'))) ?>" class="sc-player">Track Name</a>
		</div>
        
		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

		<?php edit_post_link(); ?>

	</article>
	<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
