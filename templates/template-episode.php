<?php /*
* Template Name: Episode Template
*/
get_header(); ?>

<main id="content" class="episode">
	<div class="wrapper">
		<div class="wrapper-inner">
	<div class="container">
		<div class="row">
			<div class="content">
				<img class="mediallion" src="<?php echo get_template_directory_uri(); ?>/img/ss_sun.png">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); 
					$e_link=get_field('episode_audio_link');
					$e_title = get_field('episode_title');
					$eng_translation=get_field('eng_translation');
					$sp_translation=get_field('sp_translation');
					$callout = get_field('podcast_callout');
					$podcast_gi = get_field('podcast_guest_image');
					$guest_image = $podcast_gi['sizes']['large'];
					$guest_image_alt = $podcast_gi['alt'];
					$guest_bio = get_field('podcast_guest_bio');
					$guest_title = get_field('podcast_guest_title');
				?>
					<p class="h6 guest-title"><?php echo $guest_title; ?></p>
					<h1 class="page-title"><?php the_title(); ?></h1>
					
					<div class="flourish star">
  						<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/" alt="" /> -->
  						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 792 792" style="enable-background:new 0 0 792 792;" xml:space="preserve">
						<style type="text/css">
							.st0{fill:#709779;}
						</style>
						<path class="st0" d="M579.16,437.47c39.93-34.21,79.41-68.96,119.09-103.47c22.22-13.93,39.85-32.84,62.93-54.43
							c-58.66,4.93-112.57,6.15-165.72,11.81c-5.36-0.83-11.35-0.29-18.07,1.86c-13.64,0.32-27.3,0.2-40.9,1.03
							c-46.64,2.85-46.64,2.98-62.42-37.97c-27.32-81.82-54.64-163.63-81.96-245.45c-2.34,0.18-4.67,0.36-7.01,0.54
							c-18.41,57.36-35.08,115.23-47.45,174.35c-14.14,36.04-21.27,73.91-29.1,111.6c-2.06,2.31-4.49,2.8-6.99,2.78
							c2.34-0.75,4.68-1.64,6.99-2.78c-65.83,4.53-131.38-3.81-197.1-4.41c-2.18-0.75-4.38-1.06-6.6-1.24
							c-24.77-4.29-49.8-1.17-74.57-5.33c-0.48,1.82-0.96,3.65-1.44,5.47c21.2,14.68,42.4,29.37,63.6,44.05l0,0c0,0,0,0,0,0c0,0,0,0,0,0
							c-0.01-0.01-0.01-0.02-0.02-0.03c16.73,15.41,33.71,30.49,54.03,41.19c11.86,13.65,26.3,24.08,41.55,33.52l0,0
							c20.49,21.55,44.71,38.78,67.79,57.23c10.61,8.48,12.77,16.04,8.15,28.14c-27.25,71.36-47.42,145.3-78.54,215.28
							c-10.41,23.4-19.89,47.22-29.79,70.84c1.19,0.93,2.38,1.85,3.57,2.78c46.6-36.63,93.2-73.26,139.79-109.88
							c33.04-29.24,70.49-52.62,105.28-79.53c12.67-9.8,24.73-11.33,36.6,1c8.19,6.01,16.38,12.01,24.57,18.01
							c38.69,28.62,77.38,57.23,116.06,85.84c23.55,17.67,47.03,35.44,70.74,52.89c4.21,3.1,9.4,8.62,14.61,5.04
							c7.79-5.36-1.15-10.79-2.45-15.89c-2.3-9.05-7.05-17.47-10.78-26.15c-1.24-3.89-2.2-7.89-3.75-11.66
							c-28.48-69.23-60.09-137.16-86.05-207.44C550.67,461.51,550.56,461.97,579.16,437.47z M270.49,477.88c-0.3,0.42-0.46,0.86-0.67,1.3
							c-0.39-0.56-0.61-1.1-1.01-1.66C269.38,477.65,269.92,477.76,270.49,477.88z"/>
						</svg>
					</div>
					<?php if ($e_link != ''){ ?>
					<script>
					jQuery(document).ready(function(){
					  //Need several mp3 files for testing
					  // Need to be able to update player with new file when play button in content ".container" is clicked
					      jQuery("#jquery_jplayer_1").jPlayer({
					        ready: function () {
					          jQuery(this).jPlayer("setMedia", {
					            title: "<?php echo $e_title; ?>",
					            m4a: "<?php echo $e_link; ?>",
					            oga: "<?php echo $e_link; ?>"
					          });
					        },
					        cssSelectorAncestor: "#jp_container_1",
					        swfPath: "/js",
					        supplied: "m4a, oga",
					        useStateClassSkin: true,
					        autoBlur: false,
					        smoothPlayBar: true,
					        keyEnabled: true,
					        remainingDuration: true,
					        toggleDuration: true
					        
					      });
					    });
		// 			    play: function() { // To avoid multiple jPlayers playing together.
		// 	$(this).jPlayer("pauseOthers");
		// },
					</script>

			
					<?php echo get_template_part('partials/jplayer'); ?>
					<?php //echo get_template_part('partials/jplayer-2'); ?>
					<?php } ?>
					<?php if ($callout){ ?>
					<div class="quote">
						<p>"<?php echo $callout?>"</p>
					</div>
					<?php } ?>

					<div class="the-content">
						<?php the_content(); ?>
					</div>

					<div class="toolbar">
						<span id="english" class="transcript-trigger stackable">Read Transcript</span> <span class="mobile-hide">|</span> <span id="spanish" class="transcript-trigger stackable">Read Spanish Translation</span> <span class="mobile-hide">|</span><span class="stackable"> Share: 
                		<div class="addthis_inline_share_toolbox"></div></span>
					</div>

					<div class="transcript-wrapper english" style="display:none;">
						<div class="transcript-container">
							<div class="transcript-content">
							<div class="close"><span class="sr-only">Click to close></span><img src="<?php echo get_template_directory_uri(); ?>/img/close.png" /></div>
							<?php echo $eng_translation; ?>
							</div>
						</div>
					</div>

					<div class="transcript-wrapper spanish" style="display:none;">
						<div class="transcript-container">
							<div class="transcript-content">
							<div class="close"><span class="sr-only">Click to close></span><img src="<?php echo get_template_directory_uri(); ?>/img/close.png" /></div>
								<?php echo $sp_translation; ?>
							</div>
						</div>
					</div>

					<div class="flourish bio">
  						<img src="<?php echo $guest_image; ?>" alt="<?php echo $guest_image_alt; ?>">
					</div>

					<div class="bio">
						<?php echo $guest_bio; ?>
					</div>

				<?php endwhile; ?>
			</div>

			

		</div>
	</div>
	</div>
	</div>
</main><!-- End of Content -->

<?php get_footer(); ?>
