<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="postdate"><?php echo get_the_date( 'Y.m.d'); ?></div>

	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
	<div class="postimage"><img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>" width="100%" class="img-fluid" /></div>
	<div class="mymetabox">
		<h2 class="singletitle"><?php echo get_the_title(); ?></h2>
		<div class="mymetaboxleft"><?php echo get_the_category_list( __( ', ', 'twentyeleven' ) ); ?></div>
	</div>	
	
	<div class="entry-content">
		<?php
			the_content();
			?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
