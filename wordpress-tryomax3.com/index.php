<?php get_header(); ?>
<?php the_post(); ?>

<main>
	<section id="wp-content">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>