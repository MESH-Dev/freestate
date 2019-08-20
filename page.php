<?php get_header(); ?>

<main id="content" class="interior">

	<div class="container">
		<div class="row">
			<div class="columns-10 the-content">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<h1 class="page-title"><?php the_title(); ?></h1>

					<?php the_content(); ?>

				<?php endwhile; ?>
			</div>

			

		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
