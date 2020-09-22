<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="format-detection" content="telephone=no">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">	

<script>
$(window).scroll(function(){
	var header = $('.header'),
    scroll = $(window).scrollTop();

	if (scroll >= 600) header.addClass('sticky');
	else header.removeClass('sticky');
});
</script>

	
</head>


<body <?php body_class(); ?>>
<div id="wrapper" <?php if ( !is_front_page() ) { echo 'class="headerblack"'; } ?>>
	<div <?php if ( !is_front_page() ) { echo 'id="headerblack"'; } ?> class="header container nocontainer">
		<div class="header-sticky">	
			<nav id="navigation" class="navigation navigation-justified">
				<div class="navigation-header">
					<div class="navigation-brand-text">
						<div id="logo"><a href="<?php echo get_option('home'); ?>/">
							<?php if ( is_front_page() ) {	?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/bucketlist.png" alt="Bucket List" class="img-fluid" width="187" />
							<?php }else{ ?>	
								<img src="<?php echo get_template_directory_uri(); ?>/images/bucketlist_dark.png" alt="Bucket List" class="img-fluid" width="187" />
							<?php } ?>
						</div>
					</div>
					<div class="navigation-body_right1">
						<ul class="navigation-body_list">
							<li><a href="">
								<?php if ( is_front_page() ) {	?>	
									<img src="<?php echo get_template_directory_uri(); ?>/images/header_icn_instagram.png" alt="Instagram" width="30" />
								<?php }else{ ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/header_icn_instagramb@2x.png" alt="Instagram" width="30" />
								<?php } ?>							
							</a></li>	
							<li><a href="">
								<?php if ( is_front_page() ) {	?>							
									<img src="<?php echo get_template_directory_uri(); ?>/images/header_icn_twitter.png" alt="Instagram" width="30" />
								<?php }else{ ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/header_icn_twitterb@2x.png" alt="Instagram" width="30" />
								<?php } ?>									
							</a></li>	
						</ul>
					</div>					
					<div class="navigation-button-toggler">
						<i class="hamburger-icon"></i>
					</div>
				</div>
				<div class="navigation-body">
					<div class="navigation-body-header">
						<div class="navigation-brand-text">
							<div id="logo" class="dilogo"><a href="<?php echo get_option('home'); ?>/">
							<?php if ( is_front_page() ) {	?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/bucketlist.png" alt="Bucket List" class="img-fluid" width="187" />
							<?php }else{ ?>	
								<img src="<?php echo get_template_directory_uri(); ?>/images/bucketlist_dark.png" alt="Bucket List" class="img-fluid" width="187" />
							<?php } ?>
							</a></div>
						</div>
						<span class="navigation-body-close-button">&#10005;</span>
					</div>
					<ul class="navigation-menu">
						<li class="navigation-item mdilogo">
							<a class="navigation-link" href="<?php echo get_option('home'); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/bucketlist_dark2x.png" width="187" /></a>
						</li>					
						<li class="navigation-item">
							<a class="navigation-link<?php if(is_front_page()){ echo " nav-active"; } ?>" href="<?php echo get_option('home'); ?>/">HOME</a>
						</li>
						<li class="navigation-item">
							<a class="navigation-link<?php if(is_page_template("pages-service.php")){ echo " nav-active"; } ?>" href="<?php echo get_option('home'); ?>/service/">SERVICE</a>
						</li>						
						<li class="navigation-item">
							<a class="navigation-link" href="<?php echo get_option('home'); ?>/about/#about3">COMPANY </a>
						</li>
						<li class="navigation-item">
							<a class="navigation-link" href="<?php echo get_option('home'); ?>/shop/">SHOP</a>
						</li>
						<li class="navigation-item">
							<a class="navigation-link<?php if(is_page_template("pages-about.php")){ echo " nav-active"; } ?>" href="<?php echo get_option('home'); ?>/about/">ABOUT</a>
						</li>
						<li class="navigation-item">
							<a class="navigation-link<?php if(is_page_template("pages-contact.php")){ echo " nav-active"; } ?>" href="<?php echo get_option('home'); ?>/contact/">CONTACT</a>
						</li>
						<li class="navigation-item dilogo"><a class="navigation-link socialmenu_link" href="">
						<?php if ( is_front_page() ) {	?>	
							<img src="<?php echo get_template_directory_uri(); ?>/images/header_icn_instagram.png" alt="Instagram" width="21" />
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/header_icn_instagramb@2x.png" alt="Instagram" width="21" />
						<?php } ?>	
						</a></li>
						<li class="navigation-item dilogo"><a class="navigation-link socialmenu_link" href="">
						<?php if ( is_front_page() ) {	?>							
							<img src="<?php echo get_template_directory_uri(); ?>/images/header_icn_twitter.png" alt="Instagram" width="21" />
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/header_icn_twitterb@2x.png" alt="Instagram" width="21" />
						<?php } ?>							
						</a></li>						
					</ul>
				</div>
			</nav>
		</div>
	</div><!-- .header -->
	


<?php if ( !is_front_page() ) { ?>

<div id="headerfonttop">
	<img src="<?php echo get_template_directory_uri(); ?>/images/page_img_fonttop.jpg" width="100%" class="img-fluid" />		
</div>
<div id="headerpage">
	<div class="container">
		<h1 class="title">
			<?php if(is_page() || is_single()){ 
				echo wp_trim_words(get_the_title(),20); }		
			?>

			<?php if(is_archive()){ 
				the_archive_title(); }		
			?>

			<?php if(is_search()){ 
				printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); }		
			?>

			<?php if(is_404()){ 
				echo "Not Found"; }		
			?>
		</h1>	
		<?php if(rwmb_meta( 'subtitle' )<>''){ ?> <div class="subtitlebox"><div class="subtitle">
		<?php echo rwmb_meta( 'subtitle' ); ?>
		</div></div><?php }else{ ?> <div class="space60"></div> <?php } ?>
		<?php if(rwmb_meta( 'titletext' )<>''){ ?> <div class="titletext"><?php echo rwmb_meta( 'titletext' ); ?></div><?php }else{ ?> <div class="space60"></div> <?php } ?>
	
		<div class="headerdevicer">
			<img src="<?php echo get_template_directory_uri(); ?>/images/top_img_bg2xa.jpg" class="img-fluid" />		
		</div>
	</div>
	<div class="headerslogan"><img src="<?php echo get_template_directory_uri(); ?>/images/slogan.png" width="14" /></div>
</div>
<div id="headerfont">
	<img src="<?php echo get_template_directory_uri(); ?>/images/page_img_fontbottom.jpg" width="100%" class="img-fluid" />		
</div>
<?php } ?>

