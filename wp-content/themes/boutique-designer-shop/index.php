<?php
/**
 * The main template file
 *
 * @subpackage Boutique Designer Shop
 * @since 1.0
 */

get_header(); ?>

<?php
	$post_sidebar = get_option( 'boutique_designer_shop_post_sidebar' );
	if ( '1' == $post_sidebar ) {
	$column = 'col-lg-12 col-md-12';
	} else { 
	$column = 'col-lg-8 col-md-8';
	}

?>

<main id="content" class="mt-5">
	<div class="container">
		<?php if ( is_home() && ! is_front_page() ) : ?>
			<header class="page-header">
				<h1 class="page-title"><span><?php single_post_title(); ?></span></h1>
			</header>
		<?php else : ?>
			<header class="page-header">
				<h2 class="page-title"><span><?php esc_html_e( 'Posts', 'boutique-designer-shop' ); ?></span></h2>
			</header>
		<?php endif; ?>
		<div class="content-area">
			<div id="main" class="site-main" role="main">
		    	<div class="row m-0">
				<?php
					get_template_part( 'template-parts/post/post-layout' );
					?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer();