<?php get_header();?>
<section id="blog" class="section">
<div class="container">
	<h4>Our Blog</h4>
	<!-- Three columns -->
	<div class="row">
		 <?php 
                        $maxim_post_query = null;
                        $maxim_post_query = new WP_Query(array(
                            'post_type' => 'post',
                        )); ?>
                        
                        <?php while($maxim_post_query->have_posts()){ $maxim_post_query->the_post(); ?>
	
		<div class="span12">
			<div class="home-post">
				<div class="post-image">
				<center>
				    <?php the_post_thumbnail(null, array('class'=> 'max-img'));?>
				</center>
				
				</div>
				<div class="post-meta">
					<i class="icon-file icon-2x"></i>
					<span class="date"><?php the_date('M d, Y');?></span>
					<span class="tags"><a href="#"><?php the_tags('');?></a></span>
				</div>
				<div class="entry-content">
					<h5><strong><a href="#"><?php the_title();?></a></strong></h5>
					<p>
						<?php the_content();?>
					</p>
					
				</div>
			</div>
		</div>
		
		<?php }?>
		
		
	</div>
	<div class="blankdivider30"></div>
	
</div>
</section>
<?php get_footer();?>