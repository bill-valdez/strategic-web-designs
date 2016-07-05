<!-- sidebar.php -->
<aside id="sidebar"> 
		<section id="categories" class="widget">
			<h3 class="widget-title"> Categories </h3>
			<ul>
				<?php wp_list_categories(array(
					'show_count' => 1,
					'orderby' => 'count',
					'order' => 'DESC',
					'number'=> 10,
					'title_li' => '',
				)); ?>              
			</ul>
		</section>
		<section id="archives" class="widget">
			<h3 class="widget-title"> Archives </h3>
			<ul>
				<?php wp_get_archives(); ?>  
			</ul>
		</section>
		<section id="tags" class="widget">
			<h3 class="widget-title"> Tags </h3>
			<ul>
				<?php wp_tag_cloud(); ?>  
			</ul>
		</section>
		<section id="meta" class="widget">
			<h3 class="widget-title"> Meta </h3>
			<ul>
				<?php wp_register(); ?> 
				<li><?php wp_loginout(); ?> </li>
			</ul>
		</section>
	</aside><!-- end #sidebar -->