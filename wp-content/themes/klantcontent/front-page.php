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
					<?php if ($index % 2 != 0) {?>
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
				<?php 
					$image_call_to_action = get_field('image_call_to_action');

					if ($image_call_to_action != '') :
				?>
					<img src="<?php echo $image_call_to_action; ?>" alt="Julius" width="250" style="display:block; margin: 0 auto; margin-bottom: 20px;">
				<?php endif; ?>

				<?php 
					$text_call_to_action = get_field('text_call_to_action');

					if ($text_call_to_action != '') :
				?>
					<p><?php echo $text_call_to_action; ?></p>
				<?php endif; ?>
				
				<div class="button" style="display: flex; justify-content: center;">
					<?php 
						$first_button_call_to_action_link = get_field('first_button_call_to_action_link');
						$first_button_call_to_action = get_field('first_button_call_to_action');

						if ($first_button_call_to_action_link != '' && $first_button_call_to_action != '') :
					?>
						<a href="<?php echo esc_html( get_field('first_button_call_to_action_link') ); ?>" target="_blank" class="button-default mr-4"><?php echo esc_html( get_field('first_button_call_to_action') ); ?></a>
					<?php 
						endif;
						$second_button_call_to_action_link = get_field('second_button_call_to_action_link');
						$second_button_call_to_action = get_field('second_button_call_to_action');

						if  ($second_button_call_to_action_link != '' && $second_button_call_to_action != '') :
					?>
						<a href="<?php echo esc_html( get_field('second_button_call_to_action_link') ); ?>" target="_blank" class="button-default mr-4"><?php echo esc_html( get_field('second_button_call_to_action') ); ?></a>
					<?php 
						endif;
						$third_button_call_to_action_link = get_field('third_button_call_to_action_link');
						$third_button_call_to_action = get_field('third_button_call_to_action');

						if  ($third_button_call_to_action_link != '' && $third_button_call_to_action != '') :
					?>
						<a href="<?php echo esc_html( get_field('third_button_call_to_action_link') ); ?>" target="_blank" class="button-default"><?php echo esc_html( get_field('third_button_call_to_action') ); ?></a>
					<?php endif; ?>
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