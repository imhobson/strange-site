<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage skeleton
 * @since skeleton 0.1
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


				<div id="post-<?php the_ID(); ?>" <?php post_class('single'); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>

					<div class="entry-meta">
						<?php skeleton_posted_on(); ?>
					</div><!-- .entry-meta -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'skeleton' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->

<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
					<div id="entry-author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'skeleton_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description">
							<h2><?php printf( esc_attr__( 'About %s', 'skeleton' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<div id="author-link">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
									<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'skeleton' ), get_the_author() ); ?>
								</a>
							</div><!-- #author-link	-->
						</div><!-- #author-description -->
					</div><!-- #entry-author-info -->
<?php endif; ?>
<div class="bottombar"></div>

<div id="share" class="nomobile">

<div id="sharetwitter"><a href="https://twitter.com/share" class="twitter-share-button" data-via="imhobson" data-related="imhobson">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>

<div id="sharefacebook"><div class="fb-like" data-send="true" data-layout="button_count" data-width="130" data-show-faces="true"></div></div>

<div id="shareplusone"><g:plusone size="medium"></g:plusone></div>

<div id="sharebuffer"><a href="http://bufferapp.com/add" class="buffer-add-button" data-count="horizontal" data-via="imhobson">Buffer</a><script type="text/javascript" src="http://static.bufferapp.com/js/button.js"></script></div>

<div id="sharepintrest"><a href="http://pinterest.com/pin/create/button/" class="pin-it-button" count-layout="horizontal">Pin It</a>
<script type="text/javascript" src="http://assets.pinterest.com/js/pinit.js"></script></div>

</div>

<div class="mobile">
<div id="sharetwitter"><a href="https://twitter.com/share" class="twitter-share-button" data-via="TremulantDesign" data-related="TremulantDesign">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>

<div id="sharefacebookm"><div class="fb-like" data-send="true" data-layout="button_count" data-width="130" data-show-faces="true"></div></div>
</div>

<div class="clear"></div>



					<div class="entry-utility">
						<?php skeleton_posted_in(); ?>
						<?php edit_post_link( __( 'Edit', 'skeleton' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-utility -->
					 
				</div><!-- #post-## -->

				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav add-bottom">' . _x( '&larr;', 'Previous post link', 'skeleton' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav add-top">' . _x( '&rarr;', 'Next post link', 'skeleton' ) . '</span>' ); ?></div>
				</div><!-- #nav-below -->
				
				<div class="clear"></div>
				
				<div class="bottombar"></div>
				

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>