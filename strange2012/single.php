<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="sixteen columns">
			<h1 class="homeheading big-bottom"><strong>The Blog</strong></h1>
	</div>
	
	<?php get_sidebar(); ?>

	<div id="primary" class="site-content eleven-columns">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

				<div class="social-buttons"><?php dd_twitter_generate('Compact','twitter_username') ?><?php dd_fblike_generate('Like Button Count') ?>
			  </div>

				<nav class="nav-single">
					<span class="nav-previous">
						<?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> Previous' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', 'Next <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>

				</nav><!-- .nav-single -->


				<div class="comment_area clearfix">
				<?php comments_template( '', true ); ?>
			  </div>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>