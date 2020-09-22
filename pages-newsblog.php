<?php
/**
* Template Name: News BLOG
**/
get_header(); ?>
<div class="container">

	<div id="pg" class="row">
		<main id="main1" role="main">
		
		<ul class="workpost">
		<?php $page = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("showposts=8&post_type=news&paged=$page"); while ( have_posts() ) : the_post() ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); ?>		
		<?php $zw++; ?>
			<li><a href="<?php echo get_the_permalink(); ?>">
				<div class="workpost_date"><?php echo get_the_date( 'Y.m.d'); ?></div>
				<h2 class="workpost_title"><?php echo get_the_title(); ?></h2>
			</a></li>		
		<?php endwhile; ?>

		</ul>
	
			<?php if (function_exists("pagination")) {
				pagination($additional_loop->max_num_pages);
			} ?>


		</main><!-- .site-main -->
	</div><!-- .content-area -->
</div>


<?php get_footer(); ?>

