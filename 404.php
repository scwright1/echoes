<?php get_header(); ?>
<section id="content" role="main">
	<style type='text/css'>
		#content {
			text-align: center;
		}
		.not-found {
			margin: 40px;
			line-height: 40px;
			font-size: 20px;
			text-transform: uppercase;
			text-decoration: none;
			color: #000000;
		}
	</style>
	<a class='not-found' href="<?php echo esc_url( home_url( '/' ) ); ?>">
		THE PAGE YOU REQUESTED CANNOT BE FOUND!
	</a>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>