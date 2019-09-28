<?php get_template_part('block','header'); ?>
<?php the_post(); ?>

<main id="select-plan">
	<section id="mainCTA">
		<div class="headline">
			<div class="container">
				<h1>Select Your Plan</h1>
			</div>
		</div>
		<div class="offers">
			<div class="container">
				<div class="flexbox">
					<div class="box">
						<h2>One-Time</h2>
						<div class="priceGroup">
							<span class="price">$47.95</span>
							<span class="shipping">FREE SHIPPING</span>
						</div>
						<div class="giftGroup">
							<span class="gift">PLUS FREE Gift:</span>
							<span class="check"><span>&#x2713;</span> Why You Need Fish Oil eBook</span>							
						</div>
						<div class="imageGroup">
							<picture>
								<source srcset="<?php bloginfo('template_directory'); ?>/images/select-your-plan/choose-offer1.jpg, <?php bloginfo('template_directory'); ?>/images/select-your-plan/choose-offer1@2x.jpg 2x" media="(min-width: 768px)">
								<source srcset="<?php bloginfo('template_directory'); ?>/images/select-your-plan/choose-offer1.jpg" media="(max-width: 767px)">
								<img srcset="<?php bloginfo('template_directory'); ?>/images/select-your-plan/choose-offer1.jpg" alt="Omax3 Ultra Pure">
							</picture>
						</div>
						<div class="noteGroup"></div>
						<a class="button" href="<?php getOfferURL(1); ?>"><span>Order Now</span></a>
					</div>
					<div class="box">
						<h2>Subscribe & Save</h2>
						<div class="priceGroup">
							<span class="price"><span>First Box</span> $19.95<small>*</small></span>
							<span class="supply">Then $40/month</span>
							<span class="shipping">FREE SHIPPING</span>
						</div>
						<div class="giftGroup">
							<span class="gift">PLUS FREE Gift:</span>
							<span class="check"><span>&#x2713;</span> Why You Need Fish Oil eBook</span>							
						</div>
						<div class="imageGroup">
							<picture>
								<source srcset="<?php bloginfo('template_directory'); ?>/images/select-your-plan/choose-offer2.jpg, <?php bloginfo('template_directory'); ?>/images/select-your-plan/choose-offer2@2x.jpg 2x" media="(min-width: 768px)">
								<source srcset="<?php bloginfo('template_directory'); ?>/images/select-your-plan/choose-offer2.jpg" media="(max-width: 767px)">
								<img srcset="<?php bloginfo('template_directory'); ?>/images/select-your-plan/choose-offer2.jpg" alt="Omax3 Ultra Pure">
							</picture>
							<span class="value">60% Savings!</span>
						</div>
						<div class="noteGroup"></div>
						<a class="button" href="<?php getOfferURL(2); ?>"><span>Order Now</span></a>
					</div>					
				</div>
			</div>
		</div>
	</section>
	
	<section id="lowerTagline">
		<div class="container">
			<h2>Free Shipping + 60 Day Money Back Guarantee</h2>
		</div>
	</section>	
		
</main>

<?php get_template_part('block','footer'); ?>