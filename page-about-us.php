<?php
get_header();
$about_us=get_field('about_us');
$about_us_bottom=get_field('about_us_bottom1');
?>
<div id="main">

	<!-- Section -->
		<section class="wrapper">
			<div class="inner">
				<header class="align-center">
					<?php
					if(have_posts()):the_post();
						?><h1><?php the_title()?></h1><?php
						?><p><?php the_content()?></p><?php
						
					endif;
					?>
				</header>
				<div class="flex flex-2">
					<div class="col col2">
						<h3><?php echo $about_us['heading']?></h3>
						<p><?php echo $about_us['desc1']?></p>
					</div>
					<div class="col col1 first">
						<div class="image round fit">
							<img src="<?php echo $about_us['image']['url']?>" alt="" />
						</div>
					</div>
				</div>
				<p><?php echo $about_us['desc2']?></p>
			</div>
		</section>

	<!-- Section -->
		
		<section class="wrapper style1">
			<div class="inner">
				<header class="align-center">
				<h2><?php echo $about_us_bottom['heading'];?></h2>
					<p><?php echo $about_us_bottom['subheading'];?></p>
				</header>
				<div class="flex flex-3">
					
					<?php
					$arr=array('category'=>3,'post_type'=>'post');
					$posts=get_posts($arr);
			
					
					foreach($posts as $post):setup_postdata($post);
						?>
						<div class="col align-center">
							<div class="image round fit">
								<?php the_post_thumbnail()?>
							</div>
							<p><?php the_content()?></p>
						</div>
						<?php
					endforeach;
					?>
					
				</div>
			</div>
		</section>

</div>
<?php
get_footer();
?>