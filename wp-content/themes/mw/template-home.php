<?php
/*
Template Name: Home
*/
?>      
<?php get_header(); ?>

<div id="page">
	<div class="scrollto" id="development"></div>
	<?php $recentPosts = new WP_Query();
	$recentPosts->query('posts_per_page=-1&cat=2&order=asc'); ?>
	<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
	<?php $url = get_field('project_url'); ?>
	<section class="panel">
		<div class="content">
			<div class="portfolio-img">
							<?php $layout = get_field('image_layout');
							if($layout == 'wide-narrow'){
								$layout1 = 'wide';
								$layout2 = 'narrow';
							} else if($layout == 'narrow-wide'){
								$layout1 = 'narrow';
								$layout2 = 'wide';
							} else {
								$layout1 = '';
								$layout2 = '';
							} ?>

				<div class="img-holder <?php echo $layout1; ?>">
					<?php if($url){ ?>
					<a target="_blank" href="<?php the_field('project_url'); ?>">
						<div class="image"><img src="<?php the_field('first_image'); ?>" alt="<?php the_title(); ?> image" /></div>
					</a>
					<?php } else {?>
						<div class="image"><img src="<?php the_field('first_image'); ?>" alt="<?php the_title(); ?> image" /></div>
					<?php } ?>
					
				</div><div class="img-holder <?php echo $layout2; ?>">
					<?php if($url){ ?>
					<a target="_blank" href="<?php the_field('project_url'); ?>">
						<div class="image"><img src="<?php the_field('second_image'); ?>" alt="<?php the_title(); ?> image" /></div>
					</a>
					<?php } else {?>
						<div class="image"><img src="<?php the_field('second_image'); ?>" alt="<?php the_title(); ?> image" /></div>
					<?php } ?>

				</div>
			</div>
			<div class="portfolio-text">
				<?php the_content(); ?>
				<?php if($url){ ?>
					<h3 class="view-project">{ <a target="_blank" href="<?php the_field('project_url'); ?>">view project</a> }</h3>
				<?php } ?>
			</div>
			<div class="clear"></div>
		</div>
	</section>	
	
	<?php endwhile; ?>

	<div class="scrollto" id="design"></div>
	<?php $recentPosts = new WP_Query();
	$recentPosts->query('posts_per_page=-1&cat=3&order=asc'); ?>
	<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
	<?php $url = get_field('project_url'); ?>
	<section class="panel">
		<div class="content">
			<div class="portfolio-img">
							<?php $layout = get_field('image_layout');
							if($layout == 'wide-narrow'){
								$layout1 = 'wide';
								$layout2 = 'narrow';
							} else if($layout == 'narrow-wide'){
								$layout1 = 'narrow';
								$layout2 = 'wide';
							} else {
								$layout1 = '';
								$layout2 = '';
							} ?>

				<div class="img-holder <?php echo $layout1; ?>">
					<?php if($url){ ?>
					<a target="_blank" href="<?php the_field('project_url'); ?>">
						<div class="image"><img src="<?php the_field('first_image'); ?>" alt="<?php the_title(); ?> image" /></div>
					</a>
					<?php } else {?>
						<div class="image"><img src="<?php the_field('first_image'); ?>" alt="<?php the_title(); ?> image" /></div>
					<?php } ?>
					
				</div><div class="img-holder <?php echo $layout2; ?>">
					<?php if($url){ ?>
					<a target="_blank" href="<?php the_field('project_url'); ?>">
						<div class="image"><img src="<?php the_field('second_image'); ?>" alt="<?php the_title(); ?> image" /></div>
					</a>
					<?php } else {?>
						<div class="image"><img src="<?php the_field('second_image'); ?>" alt="<?php the_title(); ?> image" /></div>
					<?php } ?>

				</div>
			</div>
			<div class="portfolio-text">
				<?php the_content(); ?>
				<?php if($url){ ?>
					<h3 class="view-project">{ <a target="_blank" href="<?php the_field('project_url'); ?>">view project</a> }</h3>
				<?php } ?>
			</div>
			<div class="clear"></div>
		</div>
	</section>	
	
	<?php endwhile; ?>
	<div class="scrollto" id="contact"></div>
	<section class="panel" id="contact-panel">
		<div class="content">
			<div id="contact-form">
				<?php echo do_shortcode( '[contact-form-7 id="78" title="Get in Touch"]' ); ?>
			</div>
			
		</div>
	</section>

</div>

<?php get_footer(); ?>
