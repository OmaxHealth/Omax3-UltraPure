<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<?php /*
	<!-- Google Tag Manager -->
	<script>var dataLayer = [];</script>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-K5S38ZM');</script>
	<!-- End Google Tag Manager -->
	*/ ?>
	
	<title><?php wp_title(''); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" />
	<?php wp_enqueue_style('styles',get_bloginfo('template_directory').'/style.css',array()); ?>
	<?php wp_head(); ?>

	<?php /*	
	<!-- TrustPilot script -->
	<script type="text/javascript" src="https://widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
	<!-- End TrustPilot script -->
	*/ ?>
	
</head>
<body <?php body_class(get_query_var('custom_body_class')); ?>>
<?php /*	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5S38ZM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
*/ ?>

<header>
	<div class="upper">
		<div class="container">
			<a class="logo" href="<?php bloginfo('url'); ?>">Omax3 Ultra Pure</a>
			<nav class="global">
				<a class="phone" href="tel:1-800-000-0000">Click to Call</a>
				<a class="button" href="https://omax3.com/cart/buybutton.php?id=mu8ec2ZvjU-JuQiyUWhdfA"><span>Order Now</span></a>
			</nav>			
		</div>
	</div>
	<div class="lower">
		<div class="container">
			<div class="offer">Buy One Get One Free <span>+ 2 Free Gifts </span>+ Free Shipping</div>
			<?php /*
			<div class="trustpilot">
				<div class="trustpilot-widget" data-locale="en-US" data-template-id="5419b637fa0340045cd0c936" data-businessunit-id="58f6c7470000ff0005a0c05a" data-style-height="20px" data-style-width="100%" data-theme="dark">
					<a href="https://www.trustpilot.com/review/omaxhealth.com" target="_blank">Trustpilot</a>
				</div>
			</div>
			*/ ?>
		</div>
	</div>
</header>