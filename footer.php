			<!-- End of Container -->
		</div>
			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="wrapper">
					<div class="about">
					<p>ABOUT</p>
					</div>
					<div class="desc">
					<p><?php echo get_field('about_description');?></p>
					</div>
						<div class="nominate">
							<p><a href="http://bit.ly/naijamademe">Nominate</a></p>
						</div>
						<div class="social">
							<ul>
								<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icons/fb.png"></a></li>
								<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tw.png"></a></li>
								<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.png"></a></li>
							</ul>
						</div>

				</div>
			</footer>
			<!-- /footer -->


		<?php wp_footer(); ?>


	</body>
</html>
