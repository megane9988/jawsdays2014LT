<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div id="main" class="wrapper row">
		<div id="content" role="main">
			<article>
			<?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
					<img src="http://www.megane.net/wp-content/uploads/2014/03/4629510dfd2e6cebdfc6b516cf6211a8.png" alt="スクリーンショット 2014-03-15 6.48.38" width="1900" height="1064" class="alignnone size-full wp-image-99700291">
					<h1>手を叩く</h1>
					<h2 class="red m300">STEP FORWARD</h2>
					<h2 class="black m100">STEP FORWARD</h2>
				<?php endwhile; ?>
				<?php endif; // end have_posts() check ?>
			</article>
		</div><!-- #content -->
	</div><!-- #main .wrapper -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>