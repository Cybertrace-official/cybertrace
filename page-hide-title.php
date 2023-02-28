<?php
// Template Name: Hide Title

?>

<?php get_header(); ?>

<div class="mx-auto">



	<?php if (have_posts()) : ?>
		<?php
		while (have_posts()) :
			the_post();
			$hide_title = true;
		?>

			<?php get_template_part('template-parts/content', get_post_format()); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php
get_footer();
