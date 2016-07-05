<!-- index.php -->
<?php get_header(); //include header ?>

 
	<main id="content">

		<?php
		if(have_posts()){
			while(have_posts()){
				the_post();
			
		?>



		<article id="post-<?php the_id(); ?> " class="portfolio-piece">

			<?php the_post_thumbnail( "medium"); ?>
			<div class="website">
			<h1><?php the_title(); ?></h1>
			<a target="_blank" href="<?php echo get_post_meta( $post->ID, 'url', true ); ?>">Visit Site</a>
			</div>
		</article><!-- end post -->

		<?php }
	}else{ ?>
		<h1>Sorry, No posts found</h1>
		<p>put stuff here like, popular posts,search,a funny 404 animation </p>


		<?php } ?>

		
 
	</main><!-- end #content -->
 <?php //get_sidebar(); ?>

  <?php get_footer(); ?>
	
 
 
