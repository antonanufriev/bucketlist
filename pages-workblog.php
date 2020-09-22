<?php
/**
* Template Name: Work BLOG
**/
get_header(); ?>
<div class="container">

	<div id="pg" class="row">
		<main id="main1" role="main">
		
		<ul class="workpost">
		<?php $page = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("showposts=8&post_type=work&paged=$page"); while ( have_posts() ) : the_post() ?>
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
		<?php endwhile; ?>

		</ul>
	
			<?php if (function_exists("pagination")) {
				pagination($additional_loop->max_num_pages);
			} ?>


		</main><!-- .site-main -->
	</div><!-- .content-area -->
</div>


<?php get_footer(); ?>

