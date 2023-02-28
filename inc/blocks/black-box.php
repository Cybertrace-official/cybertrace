<?php
$black_box_heading		=	get_field('black_box_heading');
$black_box_sub_heading	=	get_field('black_box_sub_heading');
$black_box_text			=	get_field('black_box_text');
$black_box_button		=	get_field('black_box_button');




?>

<section class="black-box px-15px py-85px xl:px-0">
	<div class="max-w-1140px mx-auto bg-black">

		<div class="cf-tracing px-3 lg:px-0 max-w-3xl mx-auto py-12 text-center">
			<?php if ($black_box_heading) : ?>
				<h2 class="text-[28px] md:text-4xl text-golden font-roboto font-bold uppercase text-center mb-<?php if ($black_box_sub_heading) : ?>4<?php else : ?>12<?php endif; ?>">
					<?php echo $black_box_heading; ?>
				</h2>
			<?php endif; ?>

			<?php if ($black_box_sub_heading) : ?>
				<h3 class="text-[28px] md:text-2xl text-white font-roboto font-bold uppercase text-center mb-12">
					<?php echo $black_box_sub_heading; ?>
				</h3>
			<?php endif; ?>


			<?php echo $black_box_text; ?>

			<?php
			if ($black_box_button) :
			?>
				<a href="<?php echo $black_box_button['url']; ?>  " aria-label="Contact us" target="_self" class="text-base font-nunito font-medium uppercase bg-golden text-black px-8 py-3 inline-flex items-center justify-center transition-all mt-10 border border-golden rounded-full hover:bg-transparent hover:border hover:border-golden hover:text-golden"><?php echo  $black_box_button['title']; ?></a>

			<?php endif; ?>

		</div>
	</div>
</section>