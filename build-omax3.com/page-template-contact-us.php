<?php get_template_part('block','header'); ?>
<?php the_post(); ?>

<main id="contact-us">
	<section>
		<div class="container">
			<h1>Contact Us</h1>
			<div class="flexcolumn">
				<div class="column"><?php echo do_shortcode('[contact-form-7 id="6" title="Contact Us"]'); ?></div>
				<div class="column">
					<h2>We're here to help</h2>
					<div class="links">
						<a class="email" href="mailto:care@omaxhealth.com">care@omaxhealth.com</a>
						<a class="phone" href="tel:1-800-765-6691">1-800-765-6691</a>
						<div class="hours">Hours: M-F 8am - 7pm EST</div>		
					</div>
				</div>
			</div>
		
		</div>
	</section>
	
</main>

<?php get_template_part('block','footer'); ?>