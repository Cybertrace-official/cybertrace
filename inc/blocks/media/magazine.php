<section class="px-15px py-85px xl:px-0">
	<div class="max-w-1140px mx-auto">
		<h2 class="text-4xl text-gold font-roboto font-semibold uppercase text-center mb-16"><?php the_field('magazine_heading'); ?></h2>

		<div class="magazine-wrapper gap-5 md:grid md:grid-flow-row-1 md:grid-cols-4">
			<?php if (have_rows('magazines_box')) : ?>
				<?php while (have_rows('magazines_box')) : the_row();
					$magazines_box_image = get_sub_field('magazines_box_image');
					$magazines_box_image_caption = get_sub_field('magazines_box_image_caption');
					$magazines_box_link = get_sub_field('magazines_box_link');
					$magazines_box_title = get_sub_field('magazines_box_title');
					$lazy_load = "lazy";
					// if (!isset($_GET['dv_test_3'])) {
					// 	$lazy_load = "auto";
					// }
				?>


					<div class="magazine-box text-center pb-4 px-2 pt-2">
						<a href="<?php echo $magazines_box_link; ?>" target="_blank">
							<img class="w-full rounded-lg" src="<?php echo $magazines_box_image; ?>" alt="" loading="<?php echo $lazy_load; ?>">
							<figcaption class="widget-image-caption wp-caption-text">
								<?php echo $magazines_box_image_caption; ?>
							</figcaption>
							<h4 class="text-xl font-semibold text-black font-roboto mt-2"><?php echo $magazines_box_title; ?></h4>
						</a>
					</div>
				<?php endwhile; ?>
			<?php endif ?>


		</div>
	</div>
</section>