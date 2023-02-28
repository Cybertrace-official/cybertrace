<article id="post-<?php the_ID(); ?>" <?php post_class('mb-12'); ?>>

	<?php
	$post_title = get_the_title(); // get the post title
	global $hide_title; // default = false, but true when page-template is page-hide-title

	if (!empty($post_title) && $hide_title === false) {
	?>
		<header class="entry-header mb-4">
			<?php the_title(sprintf('<h2 class="entry-title text-2xl md:text-3xl font-extrabold leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
			<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>
		</header>
	<?php
	} else {
	?>
		<style>
			.page-template .wp-block-cover.alignfull {
				margin-top: 0 !important;
				margin-bottom: 0 !important;
			}
		</style>
	<?php
	}
	?>
	<?php if (is_search() || is_archive()) : ?>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>

	<?php else : ?>

		<div class="entry-content">
			<?php
			/* translators: %s: Name of current post */
			the_content(
				sprintf(
					__('Continue reading %s', 'tailpress'),
					the_title('<span class="screen-reader-text">"', '"</span>', false)
				)
			);

			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'tailpress') . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __('Page', 'tailpress') . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
			?>
		</div>

	<?php endif; ?>

</article>