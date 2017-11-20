<?php get_header();?>
<!-- Header area -->
<div id="header-wrapper" class="header-slider" 
style="
    background-image: url(<?php echo $maxim_opt['maxim_slider_background_field']['background-image']?>);
	background-color: <?php echo $maxim_opt['maxim_slider_background_field']['background-color']?> ;
    background-repeat: <?php echo $maxim_opt['maxim_slider_background_field']['background-repeat']?>;
    background-position: <?php echo $maxim_opt['maxim_slider_background_field']['background-position']?>;
    background-attachment: <?php echo $maxim_opt['maxim_slider_background_field']['background-attachment']?>;
	background-size: <?php echo $maxim_opt['maxim_slider_background_field']['background-size']?>;
">
	<header class="clearfix">
	<div class="logo">
		<img src="<?php echo $maxim_opt['img_logo']['url'];?>" alt="" />
	</div>
	<div class="container">
		<div class="row">
			<div class="span12">
				<div id="main-flexslider" class="flexslider">
					<ul class="slides">
					
					
					<?php 
                        $maxim_post_query = null;
                        $maxim_post_query = new WP_Query(array(
                            'post_type' => 'slider',
                
                        ));  
                        ?>
					<?php  $prefix = '_maxim_';
                        while($maxim_post_query->have_posts()){$maxim_post_query->the_post();
                     $slider_cmb2_post = get_post_meta(get_the_ID(),$prefix.'slider_group_fields',true);
                              
                        ?>
					<?php  foreach($slider_cmb2_post as $single_slider ){ ?>
						<li>
						<p class="home-slide-content">
						
						<?php echo $single_slider[$prefix.'slider_group_normal'];?> <strong><?php echo $single_slider[$prefix.'slider_group_strong'];?></strong>
							
						</p>
						</li>
						<?php } }?>
						
					</ul>
				</div>
				<!-- end slider -->
			</div>
		</div>
	</div>
	</header>
	
	<div class="slider-opa" style="background: <?php echo $maxim_opt['maxim_background_opacity']['rgba']; ?>"></div>
	
</div>
<!-- spacer section -->
<section class="spacer green">
<div class="container">
	<div class="row">
		<div class="span6 alignright flyLeft">
			<blockquote class="large">
             
             <?php echo $maxim_opt['maxim_blockquote_field'];?>
				  <cite><?php echo $maxim_opt['maxim_blockquote_name'];?></cite>
			</blockquote>
		</div>
		<div class="span6 aligncenter flyRight">
			<i class=" <?php echo $maxim_opt['maxim_blockquote_icon'];?>"></i>
			
		</div>
	</div>
</div>
</section>
<!-- end spacer section -->
<!-- section: team -->
<section id="about" class="section">
<div class="container">

                       <?php 
                        $maxim_post_query = null;
                        $maxim_post_query = new WP_Query(array(
                            'post_type' => 'about',
                        )); ?>
             <?php if($maxim_post_query->have_posts()){$maxim_post_query->the_post();
     $about_cmb2_con_title = get_post_meta(get_the_ID(),$prefix.'about_con_title',true);
     $about_cmb2_con = get_post_meta(get_the_ID(),$prefix.'about_con',true);
    ?> 
             
                                 
	<h4><?php the_title();?></h4>
	<div class="row">
		<div class="span4 offset1">
			<div>
				<h2> <strong> <?php echo $about_cmb2_con_title; ?> </strong></h2>
				<p>
					<?php echo $about_cmb2_con; ?>
				</p>
			</div>
		</div>
		<div class="span6">
			<div class="aligncenter">
				<?php the_post_thumbnail();?>
			</div>
		</div>
	</div>
	
	<div class="row">
	<?php $about_cmb2_team = get_post_meta(get_the_ID(),$prefix.'about_team',true);
        foreach($about_cmb2_team as $single_team){
        ?>
		<div class="span2 offset1 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="<?php echo $single_team[$prefix.'about_con_team_img']; ?>" alt="" />
				
				<h3><?php echo $single_team[$prefix.'about_con_team_name'];?></h3>
				<p>
					<?php echo $single_team[$prefix.'about_con_team_desg'];?>
				</p>
			</div>
		</div>
		
		<?php }?>
	</div>
	<?php }?>
</div>
<!-- /.container -->
</section>
<!-- end section: team -->
<!-- section: services -->
<section id="services" class="section orange">
<div class="container">
	<h4>Services</h4>
	<!-- Four columns -->
	<div class="row">
		<div class="span3 animated-fast flyIn">
			<div class="service-box">
				<img src="<?php echo get_template_directory_uri();?>/img/icons/laptop.png" alt="" />
				<h2>Web design</h2>
				<p>
					 Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				</p>
			</div>
		</div>
		<div class="span3 animated flyIn">
			<div class="service-box">
				<img src="<?php echo get_template_directory_uri();?>/img/icons/lab.png" alt="" />
				<h2>Web development</h2>
				<p>
					 Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				</p>
			</div>
		</div>
		<div class="span3 animated-fast flyIn">
			<div class="service-box">
				<img src="<?php echo get_template_directory_uri();?>/img/icons/camera.png" alt="" />
				<h2>Photography</h2>
				<p>
					 Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				</p>
			</div>
		</div>
		<div class="span3 animated-slow flyIn">
			<div class="service-box">
				<img src="<?php echo get_template_directory_uri();?>/img/icons/basket.png" alt="" />
				<h2>Ecommerce</h2>
				<p>
					 Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				</p>
			</div>
		</div>
	</div>
</div>
</section>
<!-- end section: services -->
<!-- section: works -->

<section id="works" class="section">
<div class="container clearfix">
	<h4>Our Works</h4>
	<!-- portfolio filter -->
	<div class="row">
	               <?php 
                        $maxim_post_query = null;
                        $maxim_post_query = new WP_Query(array(
                            'post_type' => 'work',
                        )); ?>
                        
		<div id="filters" class="span12">
			<ul class="clearfix">
				<li>
				<a href="#" data-filter="*" class="active">
				<h5>All</h5>
				</a>
				</li>
				<?php 
                $work_category = get_terms('work_taxonomy');
                ?>
                
                <?php foreach($work_category as $single_cat){ ?>
				<li>
				<a href="#" data-filter=".<?php echo $single_cat->slug;?>">
				<h5><?php echo $single_cat->name;?></h5>
				</a>
				</li>
				
				<?php }?>
			</ul>
		</div>
		<!-- END PORTFOLIO FILTERING -->
	</div>
	<div class="row">
		<div class="span12">
			<div id="portfolio-wrap">
			
			<?php while($maxim_post_query->have_posts()){ $maxim_post_query->the_post();
                $work_img_scr = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');
                ?>
				<!-- portfolio item -->
				<?php 
                    $work_item_slug= get_the_terms($post->ID, 'work_taxonomy');
                     foreach($work_item_slug as $single_item_slug){
                         
                       $item_foreach_slug[]   =$single_item_slug->slug;
                 }
                  $work_array_class= join(' ', $item_foreach_slug);                                        
                ?>
				<div class="portfolio-item grid <?php echo $work_array_class; ?>">
					<div class="portfolio">
						<a href="<?php echo $work_img_scr[0]; ?>" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						
						<?php the_post_thumbnail(); ?>
						<div class="portfolio-overlay">
						
							<div class="thumb-info">
								<h5><?php the_title(); ?></h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- end portfolio item -->
				
				<?php }?>
				
			</div>
		</div>
	</div>
</div>
</section>
<!-- spacer section -->
<section class="spacer bg3">
<div class="container">
	<div class="row">
		<div class="span12 aligncenter flyLeft">
			<blockquote class="large">
				 We are an established and trusted web agency with a reputation for commitment and high integrity
			</blockquote>
		</div>
		<div class="span12 aligncenter flyRight">
			<i class="icon-rocket icon-10x"></i>
		</div>
	</div>
</div>
</section>
<!-- end spacer section -->
<!-- section: blog -->
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
		<a href="http://localhost/wp/wp_maxim/blog/" class="btn btn-large btn-theme">More blog post</a>
	</div>
</div>
</section>

<!-- end spacer section -->
<!-- section: contact -->
<section id="contact" class="section green">
<div class="container">
	<h4>Get in Touch</h4>
	<p>
		 Reque facer nostro et ius, cu persius mnesarchum disputando eam, clita prompta et mel vidisse phaedrum pri et. Facilisis posidonium ex his. Mutat iudico vis in, mea aeque tamquam scripserit an, mea eu ignota viderer probatus. Lorem legere consetetur ei eum. Sumo aeque assentior te eam, pri nominati posidonium consttuam
	</p>
	<div class="blankdivider30">
	</div>
	<div class="row">
		<div class="span12">
			<div class="cform" id="contact-form">
				<div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
				<form action="" method="post" role="form" class="contactForm">
					<div class="row">
						<div class="span6">
							<div class="field your-name form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
							</div>
							<div class="field your-email form-group">
								<input type="text" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
							</div>
							<div class="field subject form-group">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
							</div>
						</div>
						<div class="span6">
							<div class="field message form-group">
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
							</div>
							<input type="submit" value="Send message" class="btn btn-theme pull-left">
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- ./span12 -->
	</div>
</div>
</section>
<?php get_footer();?>