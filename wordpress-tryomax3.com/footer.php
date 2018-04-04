<footer>
	<div class="container">
		<nav class="links">
			<a href="<?php bloginfo('url'); ?>/terms-and-conditions/">Terms & Conditions</a>
			<a href="<?php bloginfo('url'); ?>/privacy-policy/">Privacy Policy</a>
			<a href="mailto:care@omaxhealth.com?subject=I%20have%20a%20question%20about%20TryOmax3">Contact Us</a>
		</nav>
		<p class="disclaimer">These statements have not been evaluated by the US Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease. Please consult a physician before starting any supplement regimen.</p>
		<p><span style="font-size: 12px;vertical-align:text-top;">&#8224;</span>with enrollment into VIP auto-shipment program. </p>
		<p><span style="font-size: 12px;vertical-align:text-top;">&#8224;</span>60-day money back guarantee on first order only. Customer is responsible for obtaining a return authorization and paying return shipping costs.</p>
		<p>**Dr. Joseph Maroon, Mike Golic and Kristy Kowal are paid endorsers of Omax3&reg;</p>
		<p>There is an additional cost of $9.95 to ship to Canada, Hawaii, Alaska and Puerto Rico.</p>
		<p class="copyright">Copyright &copy; <script>document.write(new Date().getFullYear())</script> Omax Health, Inc.</p>
	</div>
</footer>

<?php wp_enqueue_script('plugins',get_bloginfo('template_directory').'/js/plugins.min.js',array('jquery')); ?>
<?php wp_enqueue_script('functions',get_bloginfo('template_directory').'/js/main.min.js',array('jquery','plugins')); ?>
<?php wp_footer(); ?>

</body>
</html>
