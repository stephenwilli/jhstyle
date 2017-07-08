	<footer class="bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="footer-widget">
						<?php 
			                $phone = get_field('phone_number', 'option');
			                $email = get_field('contact_email', 'option');
			                $address = get_field('address', 'option');		
			            ?>
			            
							<img class="logo" src="<?php get_bloginfo('template_url') ?>/wp-content/uploads/2017/02/tmw-logo-01.svg" />
						
						
						<p>
							<?php if ($phone) { ?>
								<a href="tel:1-<?php echo $phone; ?>"><?php echo $phone; ?></a><br> 
							<?php } ?>

							<?php if ($email) { ?>
								<?php echo $email; ?></a><br> 
							<?php } ?>

							<?php if ($address) { ?>
								<?php echo $address; ?>
							<?php } ?>
						</p>

						<ul class="social-icons">
            
				            <?php
				              $facebookLink = get_field('facebook_link', 'option');
				              $twitterLink = get_field('twitter_link', 'option');
				              $instagramLink = get_field('instagram_link', 'option');
				            ?>

				            <?php if ($facebookLink) { ?>
				              <li><a href="<?php echo $facebookLink; ?>"><i class="fa-fw fa fa-facebook"></i></a></li>
				            <?php } ?>

				            <?php if ($instagramLink) { ?>
				              <li><a href="<?php echo $instagramLink; ?>"><i class="fa-fw fa fa-instagram"></i></a></li>
				            <?php } ?>

				            <?php if ($twitterLink) { ?>
				              <li><a href="<?php echo $twitterLink; ?>"><i class="fa-fw fa fa-twitter"></i></a></li>
				            <?php } ?>

          				</ul>

					</div>
				</div>
				<div class="col-sm-3">
					<div class="footer-widget">
						<?php dynamic_sidebar( 'footer-column-1' ); ?>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="footer-widget">
						<?php dynamic_sidebar( 'footer-column-2' ); ?>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="footer-widget">
						<?php dynamic_sidebar( 'footer-column-3' ); ?>
					</div>
				</div>
				
			</div>

			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
				<p>Copyright &copy; <?php echo date("Y"); ?> - <?php $sitename = get_bloginfo('name'); echo $sitename; ?></p>
				</div>
			</div>
		</div>

	</footer>
    <?php wp_footer() ?>
  </body>
</html>
