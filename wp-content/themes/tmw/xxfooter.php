	<footer class="bg-secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="footer-widget">
						<?php
			            	$logo = get_field('site_logo', 'option'); 
			                $phone = get_field('phone_number', 'option');
			                $email = get_field('contact_email', 'option');
			                $address = get_field('address', 'option');		
			            ?>
			            <?php if ($logo) { ?>
							<img class="logo" src="<?php echo $logo['sizes']['medium'];?>" />
						<?php } ?>
						
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
					</div>
				</div>
				
				<div class="col-sm-3">
					<?php
						if(is_active_sidebar('footer-column-1')){
							dynamic_sidebar('footer-column-1');
						}
					?>
				</div>
				
				<div class="col-sm-3">
					<?php
						if(is_active_sidebar('footer-column-2')){
							dynamic_sidebar('footer-column-2');
						}
					?>
				</div>
				
				<div class="col-sm-3">
					<?php
					if(is_active_sidebar('footer-column-3')){
						dynamic_sidebar('footer-column-3');
					}
					?>
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
