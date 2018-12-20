<footer>
  <div class="container">
    <p class="top">These statements have not been evaluated by the Food & Drug Administration. This product is not intended to diagnose, treat, cure or prevent any disease.</p>
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
    <a href="https://www.facebook.com/omaxhealth" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-facebook.png" width="58" height="58" alt="facebook"></a>
    <a href="https://www.youtube.com/omaxhealth" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-youtube.png" width="58" height="58" alt="youtube"></a>
    <a href="https://twitter.com/omaxhealth" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-twitter.png" width="58" height="58" alt="twitter"></a>
    </div>
  </div>
</footer>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.js"></script>
<?php wp_enqueue_script('plugins',get_bloginfo('template_directory').'/js/plugins.min.js',array('jquery')); ?>
<?php wp_enqueue_script('functions',get_bloginfo('template_directory').'/js/main.min.js',array('jquery','plugins')); ?>
<?php wp_footer(); ?>	
</body>
</html>