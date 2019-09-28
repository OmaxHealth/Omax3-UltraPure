<?php //WordPress Offer Variables
	set_query_var('offer','lp1002');
	set_query_var('custom_body_class','page-lp1002'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-KKHWZFS');</script>
	<!-- End Google Tag Manager -->
	<!-- h -->
	<title><?php wp_title(''); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" type="text/css" media="all" />
		
	<!--Previous Framework CSS-->
	<link rel='stylesheet' id='bridge-theme-css' href='<?php bloginfo('template_directory'); ?>/css/bridge.min.css' type='text/css' media='all' />

	<!--Main Style-->
	<?php wp_enqueue_style('styles',get_bloginfo('template_directory').'/style.css',array(),time()); ?>

	<?php wp_head(); ?>

	<!-- TrustBox script -->
	<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
	<!-- End Trustbox script -->
</head>
<body id="bridge-theme" <?php body_class(get_query_var('custom_body_class')); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKHWZFS" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php the_post(); ?>
<header>
	<div class="overlay-banner">
      <div class="container">
			<?php /*
			<!-- TrustBox widget - Micro TrustScore -->
			<div class="trustpilot-widget" data-locale="en-US" data-template-id="5419b637fa0340045cd0c936" data-businessunit-id="58f6c7470000ff0005a0c05a" data-style-height="20px" data-style-width="100%" data-theme="dark">
			<a href="https://www.trustpilot.com/review/omaxhealth.com" target="_blank">Trustpilot</a>
			</div>
			<!-- End TrustBox widget -->	
			*/ ?>					
			<div class="overlay-content">Buy One Get One Free<small>*</small> <span>+ 3 FREE Gifts </span>+ FREE SHIPPING</div>
      </div>
	</div>
	<div class="nav-wrapper">
		<div class="wrapper">
			<div class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo-omax3.png" alt="Omax3 Logo"></div>
			<div class="get-started">
				<a href="https://dm.omaxhealth.com/cart/buybutton.php?id=WtALGd953Uu0Qkv0R2g7ag">Order Now</a>
			</div>
		</div>
	</div>
</header>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <section id="masthead">
      <div class="wrapper">
        <div id="limited-bubble">
          <h3>Free Gifts<br/> Over $100</h3>
        </div>
        <div class="masthead-overlay-info">
          <h3>Get Your FREE Box with First Purchase<span class="asterisk">*</span></h3>
          <p class="tablet-desktop">Discover Omax3, the 93.9% pure omega-3 supplement developed by Yale-affiliated scientists. Patented formula with 4X EPA to target inflammation, joint pain, & muscle recovery. No fishy burps!</p>
        <p class="mobile-only">Discover Omax3, the 93.9% pure omega-3 supplement developed by Yale-affiliated scientists.</p>
          <a href="https://dm.omaxhealth.com/cart/buybutton.php?id=WtALGd953Uu0Qkv0R2g7ag" class="orange-btn" rel="nofollow">Get Started</a>
        </div>
        <div class="mobile-bg"></div>
      </div>
    </section>
    <section class="free-shipping-banner">
      <div class="wrapper">
        <h3>Free Shipping + 60 Day Money Back Guarantee</h3>
      </div>
    </section>
    <section class="clinical-info">
      <div class="wrapper">
        <div class="left-col"></div>
        <div class="right-col">
          <h3>Clinical Strength Formula Fights Inflammation</h3>
          <dl>
            <dt><div><p>1</p></div>Memory + Cognition</dt>
            <dd>Omega-3s can help optimize mental performance, improve mood and concentration, and support overall cognition.</dd>
            <dt><div><p>2</p></div>Heart + Health</dt>
            <dd>Omega-3s boost heart health, reduce your risk of coronary heart disease, and can help your body maintain normal blood triglyceride levels.</dd>
            <dt><div><p>3</p></div>Muscle + Joints</dt>
            <dd>Omega-3s can help reduce inflammation and age-related muscle and joint soreness, help improve mobility, speed-up muscle recovery and promote optimal health and wellness.</dd>
          </dl>
        </div>
      </div>
    </section>
    <section class="how-it-works">
      <h3>How It Works</h3>
      <div class="container">
        <div class="vip-member">
          <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/how-it-works-1.jpg" alt="Omax3 VIP Member">
          <p>Become an Omax3 VIP member and get your free box of Omax3, plus 3 free gifts and free shipping.</p>
        </div>
        <div class="optimal-use">
          <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/how-it-works-2.jpg" alt="Optimal Usage">
          <p>Take 2 softgels a day for optimal wellness and results you can feel.</p>
        </div>
        <div class="monthly-supplies">
          <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/how-it-works3.jpg" alt="Omax3 Product">
          <p>Get a fresh supply of Omax3 every 60 days at 20% off and free shipping (cancel anytime).</p>
        </div>
      </div>
      <a href="https://dm.omaxhealth.com/cart/buybutton.php?id=WtALGd953Uu0Qkv0R2g7ag" class="orange-btn" rel="nofollow">Get Started</a>
    </section>
	 <section class="starter-kit">
		<div class="wrapper">
			<h3>What's in Your <br>Starter Kit</h3>  
			<p>You get 2 boxes of Omax3 Ultra-Pure, plus high-potency Vitamin D3, a pair of CircuWear Sport Socks and Dr. Maroon's, "Why You Need Fish Oil” eBook - all shipped free.</p>
			<a href="https://dm.omaxhealth.com/cart/buybutton.php?id=WtALGd953Uu0Qkv0R2g7ag" class="orange-btn" rel="nofollow">Get Started</a>
		</div>
		<img src="<?php bloginfo('template_directory'); ?>/images/lp1002/starter-kit-bg.jpg" alt="Starter Kit">
	 </section>
    <section class="green-info">
      <div class="wrapper">
        <div class="strength">
          <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/droplet.png" alt="">
          <p>Pharmaceutical Strength</p>
        </div>
        <div class="purity">
          <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/dropper.png" alt="">
          <p>Tested for Purity</p>
        </div>
        <div class="omega">
          <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/pill.png" alt="">
          <p>93.9% Pure Omega-3</p>
        </div>
      </div> 
    </section>
    <section class="stronger">
      <div class="wrapper">
        <div class="left">
          <h3>Up to 3X Stronger than the Leading Omega-3 Supplement</h3>
          <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/chart-image.png" alt="Up to 3X Stronger than the Leading Omega-3 Supplement">
        </div>
        <div class="right">
          <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/salmon-bg.png" alt="Up to 3X Stronger than the Leading Omega-3 Supplement + Salmon">
        </div>
      </div>
      <div class="wrapper">
        <a href="https://dm.omaxhealth.com/cart/buybutton.php?id=WtALGd953Uu0Qkv0R2g7ag" class="orange-btn" rel="nofollow">Order Now</a>
      </div>
    </section>
    <section class="safely-tested">
      <div class="wrapper">
        <h3>Safe + Tested</h3>
        <p>Developed by scientists affiliated with Yale University, Omax3 offers a premium quality Omega-3 with the patented Pro-Resolv formula, independently tested for purity and safety.</p>
      </div>
    </section>
    <section class="accolades">
      <h3>The Best Omega-3 for Top Athletes</h3>
      <div id="show-mobile">
        <div class="one">
          <div class="left">
            <div class="image">
              <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/Karen.png" alt="Karen G.">
            </div>
            <div class="title">
              <h6>Karen G.</h6>
              <p>Mother and Grandmother, Runner</p>  
            </div> 
          </div>
          <div class="right">
            <div class="blurb">
              <div class="quote-one">
                <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/quote-one.png" alt="Quote One">
              </div>
              <div class="quote-two">
                <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/quote-two.png" alt="Quote Two">
              </div>
              <p>
                I am 52 and have found I am able to lift and exercise harder than I have in years. I owe many thanks to Omax3 and its ability to help me repair and reduce inflammation in my muscles so I feel strong enough to work out hard many days in a row!
              </p>
            </div>
          </div>
        </div>
        <div class="two">
          <div class="left">
            <div class="image">
              <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/Anders.png" alt="Anders Varner">
            </div>
            <div class="title">
              <h6>Anders Varner</h6>
              <p>Host of Barbell Shrugged Podcast</p>  
            </div> 
          </div>
          <div class="right">
            <div class="blurb">
              <div class="quote-one">
                <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/quote-one.png" alt="Quote One">
              </div>
              <div class="quote-two">
                <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/quote-two.png" alt="Quote Two">
              </div>
              <p>
                Omax3 has earned my trust and is my only resource for high quality EPA and DHA fish oils. Omax3 is my first and only choice for fish oils for healthy joints, reducing inflammation, and brain cognition. When it comes to fish oils, Omax3 is the only brand I trust.
              </p>
            </div>
          </div>
        </div>
        <div class="three">
          <div class="left">
            <div class="image">
              <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/dr-maroon.png" alt="Dr. Maroon">
            </div>
            <div class="title">
              <h6>Dr. Joseph Maroon</h6>
              <p>Neurosurgeon, Expert, Athlete</p>  
            </div> 
          </div>
          <div class="right">
            <div class="blurb">
              <div class="quote-one">
                <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/quote-one.png" alt="Quote One">
              </div>
              <div class="quote-two">
                <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/quote-two.png" alt="Quote Two">
              </div>
              <p>
                At age 74, my joints ached. I found Omax3 essential in keeping my body limber and pain free. It also supports my brain, keeping me sharp and focused. It is my secret weapon to defying my age as I just completed my 5th Iron Man in Hawaii and have never felt better!
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="show-desktop">
        <div class="one">
          <div class="left">
            <div class="image">
              <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/Karen.png" alt="Karen G.">
            </div>
          </div>
          <div class="right">
            <div class="blurb">
              <div class="quote-one">
                <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/quote-one.png" alt="Quote One">
              </div>
              <div class="quote-two">
                <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/quote-two.png" alt="Quote Two">
              </div>
              <p>
                I am 52 and have found I am able to lift and exercise harder than I have in years. I owe many thanks to Omax3 and its ability to help me repair and reduce inflammation in my muscles so I feel strong enough to work out hard many days in a row!
              </p>
            </div>
            <div class="title">
              <h6>Karen G.</h6>
              <p>Mother and Grandmother, Runner</p>
            </div> 
          </div>
        </div>
        <div class="two">
          <div class="left">
            <div class="image">
              <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/Anders.png" alt="Anders Varner">
            </div>
          </div>
          <div class="right">
            <div class="blurb">
              <div class="quote-one">
                <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/quote-one.png" alt="Quote One">
              </div>
              <div class="quote-two">
                <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/quote-two.png" alt="Quote Two">
              </div>
              <p>
                Omax3 has earned my trust and is my only resource for high quality EPA and DHA fish oils. Omax3 is my first and only choice for fish oils for healthy joints, reducing inflammation, and brain cognition. When it comes to fish oils, Omax3 is the only brand I trust.
              </p>
            </div>
            <div class="title">
              <h6>Anders Varner</h6>
              <p>Host of Barbell Shrugged Podcast</p>
            </div> 
          </div>
        </div>
        <div class="three">
          <div class="left">
            <div class="image">
              <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/dr-maroon.png" alt="Dr. Maroon">
            </div>
          </div>
          <div class="right">
            <div class="blurb">
              <div class="quote-one">
                <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/quote-one.png" alt="Quote One">
              </div>
              <div class="quote-two">
                <img src="<?php bloginfo('template_directory'); ?>/images/lp1002/quote-two.png" alt="Quote Two">
              </div>
              <p>
                At age 74, my joints ached. I found Omax3 essential in keeping my body limber and pain free. It also supports my brain, keeping me sharp and focused. It is my secret weapon to defying my age as I just completed my 5th Iron Man in Hawaii and have never felt better!
              </p>
            </div>
            <div class="title">
              <h6>Dr. Joseph Maroon</h6>
              <p>Neurosurgeon, Expert, Athlete</p>  
            </div> 
          </div>
        </div>
      </div>
    </section>

    <section class="trustpilot">
    <h3>What Our Customers Are Saying</h3>
    <!-- TrustBox widget - Carousel -->
    <div class="trustpilot-widget" data-locale="en-US" data-template-id="53aa8912dec7e10d38f59f36" data-businessunit-id="58f6c7470000ff0005a0c05a" data-style-height="130px" data-style-width="100%" data-theme="light" data-tags="SelectedReview" data-schema-type="Organization">
    <a href="https://www.trustpilot.com/review/omaxhealth.com" target="_blank">Trustpilot</a>
    </div>
    <!-- End TrustBox widget -->
    </section>

    <section class="get-started-last">
      <div class="wrapper">
        <h3>Power Your Body with Omax-3 Ultra-Pure.</h3>
        <p>FREE Box With First Purchase + 3 Free Gifts*</p>
        <a href="https://dm.omaxhealth.com/cart/buybutton.php?id=WtALGd953Uu0Qkv0R2g7ag" class="orange-btn" rel="nofollow">Get Started</a>
      </div>
    </section>
      </main>
</div>

<?php get_template_part('block','footer'); ?>
