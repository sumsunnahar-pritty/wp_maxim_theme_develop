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
	
		<div class="span3">
			<div class="home-post">
				<div class="post-image">
				<?php the_post_thumbnail(null, array('class'=> 'max-img'));?>
				</div>
				<div class="post-meta">
					<i class="icon-file icon-2x"></i>
					<span class="date"><?php the_date('M d, Y');?></span>
					<span class="tags"><?php the_tags('');?></span>
				</div>
				<div class="entry-content">
					<h5><strong><a href="#"><?php the_title();?></a></strong></h5>
					<p>
						<?php the_excerpt();?> &hellip;
					</p>
					<a href="<?php the_permalink();?>" class="more">Read more</a>
				</div>
			</div>
		</div>
		
		<?php }?>
		
		
		
		
	</div>
	<div class="blankdivider30"></div>
	<div class="aligncenter">
		<a href="#" class="btn btn-large btn-theme">More blog post</a>
	</div>
</div>
</section>
<?php get_footer();?>