<footer>
	<div class="container">
		<nav class="links">
			<a href="<?php bloginfo('url'); ?>/terms-and-conditions/">T&eacute;rminos y condiciones</a>
			<a href="<?php bloginfo('url'); ?>/privacy-policy/">Pol&iacute;tica de privacidad</a>
			<a href="mailto:contact@omaxhealth.com?subject=TryOmax3%20Question">Contacto</a>
		</nav>
		<p class="disclaimer">Estas declaraciones no han sido evaluadas por la Administraci&oacute;n de Alimentos y F&aacute;rmacos de Estados Unidos. Este producto no est&aacute; destinado a diagnosticar, tratar, curar o prevenir ninguna enfermedad. Por favor, consulte a un m&eacute;dico antes de comenzar cualquier r&eacute;gimen de suplementos.</p>
		<p>*Con la inscripci&oacute;n en el programa VIP de auto-env&iacute;o. garant&iacute;a de devoluci&oacute;n de dinero de 60 d&iacute;as s&oacute;lo en su primer orden.</p>
		<p>El cliente es responsable de obtener una autorizaci&oacute;n de devoluci&oacute;n y pagar los gastos de env&iacute;o de devoluci&oacute;n.</p>
		<p>El Dr. Jos&eacute; Maroon, Mike Golic y Kristy Kowal son endosadores pagados por Omax3&reg;</p>
		<p>Hay un coste adicional de $9.95 para enviar a Canad&aacute;, Haw&aacute;i, Alaska y Puerto Rico.</p>
		<p class="copyright">Copyright &copy; <script>document.write(new Date().getFullYear())</script> Omax Health, Inc.</p>
	</div>
</footer>

<?php wp_enqueue_script('plugins',get_bloginfo('template_directory').'/js/plugins.min.js',array('jquery')); ?>
<?php wp_enqueue_script('functions',get_bloginfo('template_directory').'/js/main.min.js',array('jquery','plugins')); ?>
<?php wp_footer(); ?>

</body>
</html>