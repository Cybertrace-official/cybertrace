<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133418684-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-133418684-2');
	</script>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<meta name="cf-2fa-verify" content="9320ee3f188e563">

	<?php
	if (is_front_page() || is_home()) {
	?>
		<link rel="preload" as="image" href="/wp-content/uploads/2022/12/AdobeStock_101806596reduce-scaled.webp">
	<?php
	}
	?>
	<?php wp_head(); ?>
</head>

<body <?php body_class('antialiased'); ?>>

	<?php do_shortcode('[sg_popup id=15021]'); ?>

	<section class="bg-golden relative px-15px py-2 xl:px-0">
		<div class="text-center flex items-center justify-center">

			<span class=" mr-2 text-white text-xs md:text-sm">
				<img class="icon-phone" src="/wp-content/uploads/2023/01/Icon-1.webp" alt="phone icon" width="170px" height="64px">
			</span>

			<span class="text-xs md:text-sm font-normal font-nunito text-white"><a href="tel:+61291887896">1300 669 711 - Australia</a></span>

			<!-- <span class="w-[2px] ml-2 mr-2 md:ml-6 md:mr-6 inline-block h-5 bg-white"></span>

			<span class="text-xs md:text-sm font-normal font-nunito text-white"><a href="tel:+31707013333">070 701 3333 - Netherlands</a></span> -->
		</div>
	</section>

	<header class="bg-black px-[15px] xl:px-0 h-[98px]">

		<div class="max-w-1140px mx-auto">

			<div class="lg:flex lg:flex-end lg:items-center pt-3.5 pb-5 h-[98px]">

				<div class="flex justify-between items-center">

					<div class="max-w-[200px] md:w-full">
						<?php if (has_custom_logo()) { ?>
							<?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
								<?php echo get_bloginfo('name'); ?>
							</a>

						<?php } ?>
					</div>

					<div class="toggle lg:hidden">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</div>

				</div>

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'site-menu bg-darkBlue w-full mt-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
						'menu_class'      => 'lg:flex',
						'theme_location'  => 'primary',
						'li_class'        => 'text-black lg:text-sitegray text-sm font-normal xl:text-base font-inter mr-8',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>
	</header>