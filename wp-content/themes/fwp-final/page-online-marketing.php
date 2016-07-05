<!-- index.php -->
<?php get_header(); //include header ?>

 
	<main id="content">

		<?php
		if(have_posts()){
			while(have_posts()){
				the_post();
			
		?>



		<article id="post-<?php the_id(); ?> " class="post">
			<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h2>

				<p ><?php the_content(); ?></p>
		</article><!-- end post -->

		<?php }
	}else{ ?>
		<h1>Sorry, No posts found</h1>
		<p>put stuff here like, popular posts,search,a funny 404 animation </p>


		<?php } ?>

	
 
	</main><!-- end #content -->
 <?php //get_sidebar(); ?>

  <?php get_footer(); ?>
	
 
 
