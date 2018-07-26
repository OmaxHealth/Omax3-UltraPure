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
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" type="text/css" media="all" />
	
	<!--Main Style-->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/cssreset.min.css" type="text/css" media="all" />
	<?php wp_enqueue_style('styles',get_bloginfo('template_directory').'/style.css',array(),time()); ?>
	
	<?php wp_head(); ?>

	<!-- TrustBox script -->
	<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
	<!-- End Trustbox script -->
</head>
<body id="general" <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKHWZFS" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php //determines the logo link
	if (isset($_SESSION['LP_version']) && ($_SESSION['LP_version'] == "lp1001" || $_SESSION['LP_version'] == "lp1002")){
		$link = get_bloginfo('url')."/".$_SESSION['LP_version'];
	} else {
		$link = get_bloginfo('url');
	}
?>

<header>
	<div class="upper">
		<div class="container">
			<!-- Empty -->
		</div>
	</div>
	<div class="lower">
		<div class="container">
			<a class="logo" href="<?php echo $link; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/omax_logo_trans-ret-1024x294.png" alt="Omax3 Logo"></a>
		</div>
	</div>
</header>