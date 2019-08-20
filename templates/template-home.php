<?php /*
* Template Name: Homepage Template
*/
get_header(); ?>

<main id="content" class="home">
	<div class="roots">
		<img src="<?php echo get_template_directory_uri(); ?>/img/SS_Homecomers_Roots_V2.png" />
	</div>
	<div class="container">
		<div class="row">
			<div class="">
				<div class="map">
					<img src="<?php echo get_template_directory_uri(); ?>/img/map.png" alt="Homecomers Episode Map" />
					<div class="map-title">
						<h2>They’re fighting<br> for the place<br> they love. 
						<!-- <h2>Introduction text<br> for the project<br> here and here.</h2> -->
					</div>
					<ul class="pins">
						<li class="pin charleston">
							<a href="/episodes/elaine-mcmillion-sheldon/">
								<div class="marker">
									<?php echo get_template_part('partials/star'); ?>
								</div>
							</a>
							<span class="label">Charleston, WV</span>
							<div class="popup">
								<div class="content">
									<!-- <p class="title">MEET</p> -->
									<p class="guest">Elaine McMillon</p>
									<p class="location">Charleston, WV</p>
									<p class="description">
										Documentary-maker Elaine McMillion<br>
										Sheldon on getting the story right about <br>
										a region and crisis often portrayed <br>
										without dignity.
									</p>
								</div>
								<div class="pointer">
									<img src="<?php echo get_template_directory_uri(); ?>/img/popup-bottom-texture.png" />
								<div>
							</div>
						</li>
						<li class="pin seattle">
							<a href="http://localhost:8888/homecomers/episodes/brett-ramey/">
								<div class="marker">
								<?php echo get_template_part('partials/star'); ?>
								</div>
							</a>
							<span class="label">Seattle, WA</span>
							<div class="popup">
								<div class="content">
									<!-- <p class="title">MEET</p> -->
									<p class="guest">Brett Ramey</p>
									<p class="location">Seattle, WA</p>
									<p class="description">
										Conservation leader Brett Ramey <br>
										on environmental justice, generational <br>
										legacies, and how connecting to the earth<br> 
										can connect us to ourselves.
									</p>
								</div>
								<div class="pointer">
									<img src="<?php echo get_template_directory_uri(); ?>/img/popup-bottom-texture.png" />
								<div>
							</div>
						</li>
						<li class="pin bakersfield">
							<a href="/episodes/leydy-rangel/">
								<div class="marker">
									<?php echo get_template_part('partials/star'); ?>
								</div>
							</a>
							<span class="label">Bakersfield, CA</span>
							<div class="popup">
								<div class="content">
									<!-- <p class="title">MEET</p> -->
									<p class="guest">Leydy Rangel</p>
									<p class="location">Bakersfield, CA</p>
									<p class="description">
										Labor activist Leydy Rangel <br>
										on her childhood among immigrant field<br> 
										workers and her advocacy work today.
									</p>
								</div>
								<div class="pointer">
									<img src="<?php echo get_template_directory_uri(); ?>/img/popup-bottom-texture.png" />
								<div>
							</div>
						</li>
						<li class="pin lawrence">
							<a href="/episodes/kathleen-sebelius/">
								<div class="marker">
									<?php echo get_template_part('partials/star'); ?>
								</div>
							</a>
							<span class="label">Lawrence, KS</span>
							<div class="popup">
								<div class="content">
									<!-- <p class="title">MEET</p> -->
									<p class="guest">Kathleen Sebelius</p>
									<p class="location">Lawrence, KS</p>
									<p class="description">
										Former Secretary of Health and Human <br>
										Services Kathleen Sebelius on access to <br>
										health care in rural areas. 
									</p>
								</div>
								<div class="pointer">
									<img src="<?php echo get_template_directory_uri(); ?>/img/popup-bottom-texture.png" />
								<div>
							</div>
						</li>
						<li class="pin tucson">
							<a href="/episodes/debbie-weingarten/">
								<div class="marker">
									<?php echo get_template_part('partials/star'); ?>
								</div>
							</a>
							<span class="label">Tucson, AZ</span>
							<div class="popup">
								<div class="content">
									<!-- <p class="title">MEET</p> -->
									<p class="guest">Debbie Weingarten</p>
									<p class="location">Tucson, AZ</p>
									<p class="description">
										Journalist Debbie Weingarten <br>
										on the mental health crisis among <br>
										agricultural workers.
									</p>
								</div>
								<div class="pointer">
									<img src="<?php echo get_template_directory_uri(); ?>/img/popup-bottom-texture.png" />
								<div>
							</div>
						</li>
						<li class="pin milledgeville">
							<a href="/episodes/veronica-womack/">
								<div class="marker">
									<?php echo get_template_part('partials/star'); ?>
								</div>
							</a>
							<span class="label">Milledgevile, GA</span>
							<div class="popup">
								<div class="content">
									<!-- <p class="title">MEET</p> -->
									<p class="guest">Veronica Womack</p>
									<p class="location">Milledgeville, GA</p>
									<p class="description">Political scientist Veronica Womack <br>on the richness of rural America and <br>a new generation of farmers.
										
									</p>
								</div>
								<div class="pointer">
									<img src="<?php echo get_template_directory_uri(); ?>/img/popup-bottom-texture.png" />
								<div>
							</div>
						</li>
					</ul>
				</div>
			</div>

			

		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
