<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="mypost" class="container">
	<div id="primary">

		<main id="main" role="main">
			<?php
			// Start the loop.
			while ( have_posts() ) :
				the_post();

				// Include the single post content template.
				get_template_part( 'template-parts/content', 'single' );

				the_post_navigation(
					array(
						'next_text' => '%title >',
						'prev_text' => '< %title',
						'in_same_term' => true
					)
				);
				
			endwhile;
			?>

		</main><!-- .site-main -->
		
		<div class="relatedposting">
			<h2 class="relatedpostingtitle">Related post</h2>
			<ul class="relatedposts">
				<?php query_posts("showposts=3&orderby=rand"); while ( have_posts() ) : the_post() ?>	
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); ?>
				<li class="relatedpost">
					<a href="<?php echo get_the_permalink(); ?>">
						<div class="postdate"><?php echo get_the_date( 'Y.m.d'); ?></div>					
						<div class="postimage">
							<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>" width="100%" class="img-fluid" />
						</div>
						<h2 class="titlepost titlepost1"><?php echo get_the_title(); ?></h2>			
					</a>
				</li>			
				<?php endwhile; wp_reset_query(); ?>
			</ul>
		</div>	
	</div><!-- .content-area -->
</div>
<?php get_footer(); ?>
