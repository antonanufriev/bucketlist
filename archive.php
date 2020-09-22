<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="mysingle" class="container">

	<div id="primary" class="row">

		<main id="main" role="main">
		
		<ul class="workpost">


				<?php
				// Start the Loop.
				while ( have_posts() ) :
					the_post();
?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); ?>		
		<?php $zw++; ?>
		
			<li><a href="<?php echo get_the_permalink(); ?>">
				<div class="workpost_date"><?php echo get_the_date( 'Y.m.d'); ?></div>
				<div class="image">
					<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>" width="100%" class="img-fluid" />
					<?php if($zw<4){ ?><div class="imagetext">NEW</div><?php } ?>
				</div>
				<h2 class="workpost_title"><?php echo get_the_title(); ?></h2>
			</a></li>	
<?php
				endwhile;
?>
			</ul>			


			<?php if (function_exists("pagination")) {
				pagination($additional_loop->max_num_pages);
			} 

				// If no content, include the "No posts found" template.

			?>

		</main><!-- .site-main -->

	</div><!-- .content-area -->
</div>
<?php get_footer(); ?>
