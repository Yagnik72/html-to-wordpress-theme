<?php
get_header();

$hero=get_field('hero_banner');
$about_us=get_field('about');
$services=get_field('services');
$policy=get_field('policy');

?>
<section id="banner" style="background-image: url('<?php echo $hero['background_image']['url']?>')">
				<div class="inner">
					<header>
						<h1><?php echo $hero['heading']?></h1>
						<p><?php echo $hero['subheading']?></p>
					</header>
					<a href="<?php echo $hero['btn_link']?>" class="button big scrolly"><?php echo $hero['btn']?></a>
				</div>
			</section>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit">
											<a href="javascript:void(0)" class="link"><img src="<?php echo $about_us['section_image']['url']?>" alt="" /></a>
										</div>
									</div>
									<div class="col col2">
										<h3><?php echo $about_us['section_name']?></h3>
										<p><?php echo $about_us['section_desc']?></p>
									</div>
								</div>
						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style2">
						<div class="inner">
							<div class="flex flex-2">
								<div class="col col2">
										<h3><?php echo $services['section_name']?></h3>
										<p><?php echo $services['section_desc']?></p>
								</div>
								<div class="col col1 first">
									<div class="image round fit">
										<a href="javascript:void(0)" class="link"><img src="<?php echo $services['section_image']['url']?>" alt="" /></a>
									</div>
								</div>
							</div>
						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit">
											<a href="javascript:void(0)" class="link"><img src="<?php echo $policy['section_image']['url']?>" alt="" /></a>
										</div>
									</div>
									<div class="col col2">
										<h3><?php echo $policy['section_name']?></h3>
										<p><?php echo $policy['section_desc']?></p>
									</div>
								</div>
						</div>
					</section>

			</div>
<?php
get_footer();
?>