<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="slider" class="container">
	<img src="<?php echo get_template_directory_uri(); ?>/images/slider_3x.jpg" class="img-fluid" />
</div>

<div id="topseparator">
	<img src="<?php echo get_template_directory_uri(); ?>/images/top_img_bg2xab.png" class="img-fluid" />
</div>

<script>
	$(document).ready(function(){
		$('.slidertext').slick({
		  dots: false,
		  infinite: true,
		  speed: 1000,
		  slidesToScroll: 1,
		  autoplay: true,
		  vertical: true,
		  arrows: true,
		  autoplaySpeed: 5000
		});

	
	});
</script>

<div class="container">
	<div class="top_message">
		<ul class="slidertext">
		<?php query_posts("showposts=5&post_type=news"); while ( have_posts() ) : the_post() ?>	
			<li class="slidertextbox">
				<div class="slidertextbox_left"><?php echo get_the_term_list( $post->ID, 'news_category', ' ', ', ', '' ); ?>
				
				</div>
				<div class="slidertextbox_middle"><?php echo get_the_date( 'Y.m.d'); ?></div>
				<div class="slidertextbox_right"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></div>
			</li>

		<?php endwhile; wp_reset_query(); ?>		
		
		</ul>
		<div class="textmore">
			<a href="<?php echo get_option('home'); ?>/listnews/"><img src="<?php echo get_template_directory_uri(); ?>/images/btn_img_readmore2x.png" width="12" />⼀覧はこちら</a>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$('.listposts').slick({
		  dots: true,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
			  }
			},
			{
			  breakpoint: 600,
			  settings: {				  
				slidesToShow: 2,
				slidesToScroll: 1
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				centerMode: true,				  
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
		  ]
		});
	});
</script>

<div id="top1">
	<div class="container">
		<h2 class="toptitle">TALENT <div class="topsubtitle">所属タレント</div></h2>

		<ul class="listposts">
		<?php query_posts("showposts=10&post_type=talent"); while ( have_posts() ) : the_post() ?>	
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); ?>
		<?php $zt++; ?>	
			<li class="listpost">
				<a href="<?php echo get_the_permalink(); ?>">
					<div class="postimage">
						<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>" width="100%" class="img-fluid" />
						<?php if($zt<4){ ?><div class="postimagetext">サッカー</div><?php } ?>
					</div>
					<h2 class="titlepost"><?php echo get_the_title(); ?></h2>			
				</a>
			</li>

		<?php endwhile; wp_reset_query(); ?>
		

		</ul>
		<div class="readmore">
			<div class="textmore">
				<a href="<?php echo get_option('home'); ?>/listtalent/"><img src="<?php echo get_template_directory_uri(); ?>/images/btn_img_readmore2x.png" width="12" />⼀覧はこちら</a>
			</div>
		</div>
		<div class="clear"></div>		
	</div>
</div>

<div id="top2">
	<div class="container">
		<h2 class="toptitle1"><div class="topsubtitle1">募集中</div> 所属タレント募集中！</h2>
		<div class="textbox">
			テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテ
			キストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
			ストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト

		</div>
		<div class="button"><a href="<?php echo get_option('home'); ?>/service/"><div class="btn">事業内容はこちら</div></a></div>	
	</div>
</div>

<div id="top3">
	<div class="container">
		<h2 class="toptitle">BLOG <div class="topsubtitle">ブログ</div></h2>

		<ul class="listposts">
		<?php query_posts("showposts=10"); while ( have_posts() ) : the_post() ?>	
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); ?>
		<?php $zu++; ?>	
		
			<li class="listpost">
				<a href="<?php echo get_the_permalink(); ?>">
					<div class="postimage">
						<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>" width="100%" class="img-fluid" />
						<?php if($zu<4){ ?><div class="postimagetext">NEW</div><?php } ?>
					</div>
					<div class="postdate"><?php echo get_the_date( 'Y.m.d'); ?></div>
					<h2 class="titlepost"><?php echo get_the_title(); ?></h2>			
				</a>
			</li>
		<?php endwhile; wp_reset_query(); ?>			
			
		</ul>
		<div class="readmore">
			<div class="textmore">
				<a href="<?php echo get_option('home'); ?>/blog/"><img src="<?php echo get_template_directory_uri(); ?>/images/btn_img_readmorew2x.png" width="12" />⼀覧はこちら</a>
			</div>			
		</div>
		<div class="clear"></div>		
	</div>
</div>

<div id="top4">
	<div class="container">
		<h2 class="toptitle">WORKS <div class="topsubtitle">制作実績</div></h2>

		<ul class="listposts">
		<?php query_posts("showposts=10&post_type=work"); while ( have_posts() ) : the_post() ?>	
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); ?>
		<?php $zw++; ?>	
		
			<li class="listpost">
				<a href="<?php echo get_the_permalink(); ?>">
					<div class="postimage">
						<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>" width="100%" class="img-fluid" />
						<?php if($zw<4){ ?><div class="postimagetext">NEW</div><?php } ?>
					</div>
					<div class="postdate"><?php echo get_the_date( 'Y.m.d'); ?></div>
					<h2 class="titlepost"><?php echo get_the_title(); ?></h2>			
				</a>
			</li>
			
		<?php endwhile; wp_reset_query(); ?>
		
		</ul>
		<div class="readmore">
			<div class="textmore">
				<a href="<?php echo get_option('home'); ?>/listwork/"><img src="<?php echo get_template_directory_uri(); ?>/images/btn_img_readmorew2x.png" width="12" />⼀覧はこちら</a>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>

<div id="top5">
	<div class="left">
		<a href="">
			<img src="<?php echo get_template_directory_uri(); ?>/images/menu_icn_bag.png" width="40" />
			<h2 class="title">SHOP</h2>
			<div class="subtitle">オフィシャルECショップ</div>
		</a>
	</div>
	<div class="right">
		<a href="<?php echo get_option('home'); ?>/service/">
			<img src="<?php echo get_template_directory_uri(); ?>/images/menu_icn_service.png" width="36" />
			<h2 class="title">SERVICE</h2>
			<div class="subtitle">サービスについて</div>
		</a>	
	</div>
</div>
	
<?php get_footer(); ?>
