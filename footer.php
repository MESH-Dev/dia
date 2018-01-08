

<footer class="site-footer">
	<div class="text-panel bg-image-blue">
		<div class="container">
			<div class="row">
				<div class="columns-6">
					<h3><?php the_field('form_label', 'option'); ?></h3>
				</div>
				<div class="columns-6">
					<?php the_field('global_contact_form', 'option'); ?>
				</div>
			</div>
		</div>
		<?php
		$footer_image = get_field('footer_form_image', 'options');
		$footer_url = $footer_image['sizes']["short-banner"];
		?>
		<div class="bg-image" style="background-image:url('<?php echo $footer_url; ?>')"></div>
	</div>
	<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="footer-left columns-6">
					<p>Email: <a href="mailto:info@techconnectwv.com">info@techconnectwv.com</a></p>
					<p>Phone: 304-444-2918</p>
					<p class="copyright">&#169; Defense Industry Alliance <?php echo date("Y"); ?></p>
				</div>
				<div class="footer-right columns-6">
					
						<p>Website by <a href="http://meshfresh.com" target="_blank">MESH</a></p>
				</div><!-- End of Footer -->
			</div>
		</div>
	</div>
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-105144088-1', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_footer(); ?>

</body>
</html>
