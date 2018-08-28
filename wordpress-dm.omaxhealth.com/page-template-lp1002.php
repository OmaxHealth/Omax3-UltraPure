<?php $_SESSION['LP_version'] = "lp1002" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-KKHWZFS');</script>
	<!-- End Google Tag Manager -->
	
	<title><?php wp_title(''); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
	
	<!--Main Style-->
	<?php wp_enqueue_style('fonts','https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i',array()); ?>	
	<?php wp_enqueue_style('cssreset',get_bloginfo('template_directory').'/css/cssreset.min.css',array()); ?>
	<?php wp_enqueue_style('styles',get_bloginfo('template_directory').'/style.css',array('cssreset'),time()); ?>
	
	<?php wp_head(); ?>

	<!-- TrustBox script -->
	<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
	
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKHWZFS" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php the_post(); ?>
<header>
	<div class="upper">
		<div class="container">
			<div class="offer">Buy One Get One Free<small>*</small> <span>+ 3 FREE Gifts </span>+ FREE SHIPPING</div>
			<div class="trustpilot">
				<!-- TrustBox widget - Micro TrustScore -->
				<div class="trustpilot-widget" data-locale="en-US" data-template-id="5419b637fa0340045cd0c936" data-businessunit-id="58f6c7470000ff0005a0c05a" data-style-height="20px" data-style-width="100%" data-theme="dark">
					<a href="https://www.trustpilot.com/review/omaxhealth.com" target="_blank">Trustpilot</a>
				</div>
			</div>
		</div>
	</div>
	<div class="lower">
		<div class="container">
			<a class="logo" href="<?php bloginfo('url'); ?>/lp2002/"><img src="<?php bloginfo('template_directory'); ?>/images/logo-omax3.png" alt="Omax3 Logo"></a>
			<a class="phone" href="tel:800-377-7440">Click to Call</a>
			<a class="button" href="https://dm.omaxhealth.com/cart/buybutton.php?id=WtALGd953Uu0Qkv0R2g7ag"><span>Order Now</span></a>
		</div>
	</div>
</header>

<main>
	<section id="hero">
		<div class="container">
			<div class="cta">
				<h1>Fight Inflammation<br/>and Joint Pain <span>with Omax3 Ultra-Pure</span></h1>
				<a class="button" href="https://dm.omaxhealth.com/cart/buybutton.php?id=WtALGd953Uu0Qkv0R2g7ag"><span>Order Now</span></a>
			</div>
			<div class="flexcolumn">
				<div class="bogo">
					<div class="ln1">Buy One, <span>Get One Free</span><small>*</small></div>
					<div class="ln2">+ 3 FREE Gifts</div>
					<div class="ln3">Vitamin D, Socks, eBook</div>
				</div>
				<div class="product"><img src="<?php bloginfo('template_directory'); ?>/images/lp1002/hero-product.png" srcset="<?php bloginfo('template_directory'); ?>/images/lp1002/hero-product@2x.png 2x" alt="As Seen on TV"/></div>
			</div>
		</div>		
	</section>
	
	<section id="callouts">
		<div class="container">
			<div class="flexbox">
				<div class="box left">
					<div class="ln1">1500 MG</div>
					<div class="ln2">Clinical strength</div>
				</div>
				<div class="box middle">
					<div class="ln1">93.9% Pure</div>
					<div class="ln2">Omega-3</div>
				</div>
				<div class="box right">
					<div class="ln1">3x more Omega-3</div>
					<div class="ln2">Than other leading brands</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="list">
		<div class="container">
			<div class="flexcolumn">
				<div class="column left">
					<div class="text">
						<div class="ln1">Clinical Strength<br/>Formula Fights</div>
						<div class="ln2">Inflammation & Joint Pain</div>
					</div>
				</div>
				<div class="column right">
					<ul class="checkmark">
						<li>Patented ProResolv formula with 4X EPA to target inflammation</li>
						<li>High potency, 93.9% pure omega-3 supports heart, joints, muscles & mind</li>
						<li>1,500 mg of clinical strength omega-3</li>
						<li>3x more omega-3 than top selling brands</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<section id="chart">
		<div class="container">
			<h2>Up to 3X Stronger<br/>than the Top<br/>Selling Brands</h2>
			<img src="<?php bloginfo('template_directory'); ?>/images/lp1002/chart.png" alt="chart of brands"/>
		</div>
	</section>
	
	<section id="quotes">
		<div class="container">
			<div class="flexbox">
				<div class="box">
					<div class="quote">I am 52 and have found I am able to lift and exercise harder than I have in years. I owe many thanks to Omax3 and its ability to help me repair and reduce inflammation in my muscles!</div>
					<img src="<?php bloginfo('template_directory'); ?>/images/lp1002/quote-karen.png" alt="Karen"/>
					<div class="person">
						<div class="ln1">Karen G.</div>
						<div class="ln2">Mother and <br/>Grandmother, Runner</div>
					</div>
				</div>
				<div class="box">
					<div class="quote">Omax3 has earned my trust and is my only resource for high quality EPA and DHA fish oils. Omax3 is my first and only choice for fish oils. When it comes to fish oils, Omax3 is the only brand I trust.</div>
					<img src="<?php bloginfo('template_directory'); ?>/images/lp1002/quote-anders.png" alt="Anders"/>
					<div class="person">
						<div class="ln1">Anders Varner</div>
						<div class="ln2">Host of Barbell <br/>Shrugged Podcast</div>
					</div>
				</div>
				<div class="box">
					<div class="quote">Inflammation resolution is critical to maintaining optimal health, supporting healthy joints and muscle recovery. Omax3 is the single best tool for restoring your body to the optimal state.</div>
					<img src="<?php bloginfo('template_directory'); ?>/images/lp1002/quote-evan.png" alt="Evan"/>
					<div class="person">
						<div class="ln1">Evan DeMarco</div>
						<div class="ln2">Health and <br/>Nutrition Expert</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="trustPilot">
		<h2>What Our Customers Are Saying</h2>
		<!-- TrustBox widget - Carousel -->
		<div class="trustpilot-widget" data-locale="en-US" data-template-id="53aa8912dec7e10d38f59f36" data-businessunit-id="58f6c7470000ff0005a0c05a" data-style-height="130px" data-style-width="100%" data-theme="light" data-tags="SelectedReview" data-schema-type="Organization">
			<a href="https://www.trustpilot.com/review/omaxhealth.com" target="_blank">Trustpilot</a>
		</div>
		<!-- End TrustBox widget -->		
	</section>
	
	<section id="doctor">
		<div class="container">
			<div class="flexbox">
				<div class="box">
					<h2>Doctors Recommend Omax3</h2>
				</div>
				<div class="box">
					<img src="<?php bloginfo('template_directory'); ?>/images/lp1002/doctor-maroon.png" srcset="<?php bloginfo('template_directory'); ?>/images/lp1002/doctor-maroon@2x.png 2x" alt="Dr. Maroon"/>
				</div>
				<div class="box">
					<div class="text">
						<div class="ln1">&ldquo;I recommend Omax3 to all of my patients suffering from joint pain and inflammation. Of all of the omega-3 supplements on the market I only recommend Omax3 because of its purity, concentration and effectiveness.&rdquo;</div>
						<div class="ln2">-Dr. Joseph Maroon</div>
						<div class="ln3">Neuro-Surgeon, Nutritional Expert, Tri-athelete</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="lowerCTA">
		<div class="bogo">
			<div class="container">
				<div class="ln1">Buy One, <span>Get One Free</span><small>*</small></div>
				<div class="ln2">+</div>
				<div class="ln3">3 FREE Gifts</div>
				<div class="ln4">Vitamin D, Socks, eBook</div>
			</div>			
		</div>
		<div class="cta">
			<div class="container">
				<img src="<?php bloginfo('template_directory'); ?>/images/lp1002/lower-cta-product.png" srcset="<?php bloginfo('template_directory'); ?>/images/lp1002/lower-cta-product@2x.png 2x" alt="Free Shipping"/>
				<a class="button" href="https://dm.omaxhealth.com/cart/buybutton.php?id=WtALGd953Uu0Qkv0R2g7ag"><span>Order Now</span></a>
			</div>
		</div>		
	</section>

</main>

<?php get_template_part('content','footer'); ?>
