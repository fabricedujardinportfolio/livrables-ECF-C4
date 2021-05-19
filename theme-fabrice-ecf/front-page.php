<?php get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<div class="col-12 pt-4">
	<h1 class="title text-center">
		<!-- Titre -->
		<!-- <?php the_title(); ?> -->
	</h1>
</div>
<div class="container-fluid d-block d-md-flex">
	<div class="col-12 col-md-3">
		<aside class="site__sidebar">
			<ul>
				<!-- SIDEBAR GAUCHE Start -->
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
				<div class="text-center">
					<a href='<?php echo home_url ('/sportives', ''); ?>' class="modifLien">Voire tous les articles
						sportive</a>
				</div>
				<!-- SIDEBAR GAUCHE END -->
			</ul>
		</aside>
	</div>
	<div class="col-12 col-md-6 bg-light">
		<aside class="site__sidebar">
			<ul>
				<!-- SIDEBAR CENTRALE MAIN* mais pas utilisé  Start -->
				<?php dynamic_sidebar( 'sidebar-front-page-widget-area' ); ?>
				<!-- SIDEBAR CENTRALE MAIN* mais pas utilisé  END -->
				<!-- Contenue afficher par un echo d'un shortcode Start-->
				<?php echo do_shortcode( '[the-post-grid id="156" title=""]' ); ?>
				<!-- Contenue afficher par un echo d'un shortcode END-->
			</ul>
		</aside>
		<!-- Contenue wordpress start -->
		<?php the_content(); ?>
		<!-- Contenue wordpress END -->
	</div>
	<div class="col-12 col-md-3">
		<aside class="site__sidebar">
			<ul>
				<!-- SIDEBAR DROITE Start -->
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
				<div class="text-center">
					<a href='<?php echo home_url ('/culturelles', ''); ?>' class="modifLien">Voire tous les articles
						sportive</a>
				</div>
				<!-- SIDEBAR DROITE END -->
			</ul>
		</aside>
	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>