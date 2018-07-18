<footer>
  <div class="container">
    <div class="top">  
      *These statements have not been evaluated by the Food & Drug Administration. This product is not intended to diagnose, treat, cure or prevent any disease.
    </div>
    <p>*with enrollment into VIP auto-shipment program. 60-day money back guarantee on first order only.</p>
    <p>Customer is responsible for obtaining a return authorization and paying return shipping costs.</p>
    <p>Dr. Joseph Maroon and Anders Varner are paid endorsers of Omax3&reg;</p>
    <p>There is an additional cost of $9.95 to ship to Canada, Hawaii, Alaska and Puerto Rico.</p>
    <p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> Omax Health, Inc.</p>
    <div class="links">
      <dl>
        <dd><a href="<?php bloginfo('url'); ?>/terms-and-conditions/">Terms & Conditions</a></dd>
        <dd><a href="<?php bloginfo('url'); ?>/privacy-policy/">Privacy Policy</a></dd>
        <dd><a href="<?php bloginfo('url'); ?>/contact-us/">Contact Us</a></dd>
      </dl>
    </div>
    <div class="connect">
    <a href="https://www.facebook.com/omaxhealth" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/FB-f-Logo__blue_58.png" width="58" height="58" alt="fb"></a>
    <a href="https://www.youtube.com/omaxhealth" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/youtube_social_square_red.png" width="58" height="58" alt="ig"></a>
    <a href="https://twitter.com/omaxhealth" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/Twitter_Social_Icon_Rounded_Square_Color.png" width="58" height="58" alt="twtr"></a>
    </div>
  </div>
</footer>

<?php wp_enqueue_script('plugins',get_bloginfo('template_directory').'/js/plugins.min.js',array('jquery')); ?>
<?php wp_enqueue_script('functions',get_bloginfo('template_directory').'/js/main.min.js',array('jquery','plugins')); ?>
<?php wp_footer(); ?>	
</body>
</html>