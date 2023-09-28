<?php 
	get_header();
?>
	
	<?php if( have_rows('reviews') ): ?>
		<div class="first-layer">
			<div class="container">
				<?php while( have_rows('reviews') ) : the_row();
					$imagem = get_sub_field('image');
					$texto = get_sub_field('text');
					$autor = get_sub_field('author');

					$index = get_row_index();?>
					<?php if ($index % 2 == 0) {?>
						<div class="type-1">
							<div class="row">
								<div class="col-6 image">
									<div class="box-image" style="background-image: url('<?php echo $imagem ?>');"></div>
								</div>
								<div class="col-6 text">
									<div class="box-text">
										<p class="review"><?php echo $texto ?></p>
										<p class="customer"><?php echo $autor ?></p>
									</div>
								</div>
							</div>
						</div>
					<?php } else { ?>
						<div class="type-2">
							<div class="row">
								<div class="col-6 text">
									<div class="box-text">
										<p class="review"><?php echo $texto ?></p>
										<p class="customer"><?php echo $autor ?></p>
									</div>
								</div>
								<div class="col-6 image">
									<div class="box-image" style="background-image: url('<?php echo $imagem ?>');"></div>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php endwhile; ?>
			</div>
		</div>
	<?php endif; ?>

	<div class="call-action">
		<div class="container">	
			<div class="box-action">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/customer-1.png" alt="Julius" width="250" style="display:block; margin: 0 auto; margin-bottom: 20px;">

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Mauris nec pulvinar lacus. Nullam sed finibus sapien. </p>
				
				<div class="button" style="display: flex; justify-content: center;">
					<a href="#" target="_blank" class="button-default mr-4">LOREM IPSUM</a>
					<a href="#" target="_blank" class="button-default mr-4">LOREM IPSUM</a>
					<a href="#" target="_blank" class="button-default">LOREM IPSUM</a>
				</div>
			</div>
		</div>
	</div>

	<div class="google">
		<div class="container">
			<?php echo do_shortcode('[trustindex no-registration=google]' ); ?>
		</div>
	</div>
<?php
	get_footer();
?>