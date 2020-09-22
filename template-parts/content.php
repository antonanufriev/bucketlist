<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h3 class="mypost_title"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>	
		<?php
			echo get_excerpt1(40);
		?>
</article><!-- #post-## -->
