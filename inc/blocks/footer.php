<section class="relative bg-golden mr-4 ml-4 max-w-1140px px-5 pt-8 pb-12 text-center md:text-left xl:mx-auto md:p-12 rounded-2xl -mb-[165px] z-50">

		<div class="cta-inner md:flex md:justify-between md:items-center">
			<div class="relative z-10 md:max-w-sm lg:w-full">
				<h2 class="text-4xl text-black font-roboto font-semibold">Contact Us</h2>
				<p class="text-base text-black font-nunito mt-7 mb-10">Contact our friendly staff at Cybertrace Australia for a confidential assessment of your case.
					Speak with the experts.</p>

				<div>
					<a href="mailto:contact@cybertrace.com.au">
						<span class="mr-2 text-black"><i class="fa-solid fa-envelope"></i></span>
						<span class="text-base font-normal font-nunito text-black">Email: contact@cybertrace.com.au</span>
					</a>
				</div>

				<div>
					<a href="tel:1300669711">
						<span class="mr-2 text-black"><i class="fa-solid fa-phone"></i></span>
						<span class="text-base font-normal font-nunito text-black">Australia: 1300 669 711</span>
					</a>
				</div>
				<div>
					<a href="tel:61291887896">
						<span class="mr-2 text-black"><i class="fa-solid fa-phone"></i></span>
						<span class="text-base font-normal font-nunito text-black">International +61 2 9188 7896</span>
					</a>
				</div>
			</div>

			<div class="relative z-10 mt-16 md:mt-0">
				<div>
					<a href="https://www.cybertrace.com.au/contact-cyber-private-investigator/" aria-label="Contact Us" class="text-white text-15px leading-0 cursor-pointer font-nunito font-medium bg-black rounded-full py-3 px-6 capitalize hover:bg-white hover:text-black">Contact Form</a>
				</div>
			</div>
		</div>
</section>


<footer class="footer-wrapper pt-[250px] relative bg-black pb-8 px-5">

	<div class="max-w-1140px mx-auto">

		<div class="footer-inner text-white md:flex md:gap-6 lg:gap-45px">
			<div class="text-center md:text-left md:w-2/6">
				<a href="<?php echo site_url();?>">
					<img class="w-full md:max-w-[190px] lg:max-w-xs" src="<?php the_field('footer_logo' ,'option');?>" alt="cyber Trace logo">
				</a>

				<p class="font-nunito text-golden mb-11 mt-7">
					<?php the_field('footer_text' ,'option');?>
				</p>
				<a href="#">
					<img class="mx-auto md:mx-0 max-w-[150px]" src="<?php the_field('dmca_logo' ,'option');?>" alt="dcma">
				</a>
			</div>

			<div class="text-center md:text-left mt-10 md:mt-0 md:w-2/6">
				<h4 class="divider relative text-xl leading-5 uppercase font-semibold font-roboto mb-38px">contact info</h4>
				<span class="text-base font-semibold font-roboto text-golden">Global Head Office:</span>
				<p class="divider-left text-base relative font-nunito text-golden pl-4 mb-2">
					<?php the_field('global_head_office' ,'option');?>
				</p>
				<span class="text-base font-semibold font-roboto text-golden">Postal Address:</span>
				<p class="divider-left text-base relative font-nunito text-golden pl-4 mb-2 ">
					<?php the_field('postal_address' ,'option');?>
				</p>
				<span class="text-base font-semibold font-roboto text-golden">Europe Address:</span>
				<p class="divider-left text-base relative font-nunito text-golden pl-4 mb-2 ">
					<?php the_field('europe_address' ,'option');?>
				</p>
			</div>

			<div class="relative text-center mt-10 md:text-left md:mt-0 md:w-2/6">
				<h4 class="divider relative text-xl leading-5 uppercase font-semibold font-roboto mb-38px">mission</h4>
				<p class="text-base text-golden font-nunito">
					<?php the_field('mission_text' ,'option');?>
				</p>
				<h4 class="divider relative text-xl leading-5 uppercase font-semibold font-roboto mb-38px mt-11">Social Link</h4>

				<div class="icon-wrapper flex gap-4 mt-14 justify-center md:justify-start">

					<a href="<?php the_field('facebook_link' , 'option');?>" aria-label="facebook" target="blank" class="bg-gold transition duration-150 ease-out rounded-full px-2 w-9 h-9 inline-flex items-center  justify-center hover:bg-white hover:text-black">
						<i class="text-black fab fa-facebook"></i>
					</a>
					<a href="<?php the_field('twitter_link' , 'option');?>" aria-label="twitter" target="blank" class=" bg-gold transition duration-150 ease-out rounded-full px-2 w-9 h-9 inline-flex items-center justify-center hover:bg-white hover:text-black">
						<i class="text-black fab fa-twitter"></i>
					</a>
					<a href="<?php the_field('instagram_link' , 'option');?>" aria-label="instagram" target="blank" class=" bg-gold transition duration-150 ease-out rounded-full px-2 w-9 h-9 inline-flex items-center justify-center hover:bg-white hover:text-black">
						<i class="text-black fab fa-instagram"></i>
					</a>
					<a href="<?php the_field('linkedin_link' , 'option');?>" aria-label="linkedIn" target="blank" class=" bg-gold transition duration-150 ease-out rounded-full px-2 w-9 h-9 inline-flex items-center justify-center hover:bg-white hover:text-black">
						<i class="text-black fab fa-linkedin"></i>
					</a>
				</div>
			</div>

		</div>


		<div class="bg-black pb-2 pt-8 text-center -mt-[1px]">
            <div class="max-w-1140px mx-auto">
                <p class="text-base font-medium font-nunito text-white border-t border-golden tracking-wide pt-4">Copyright Cybertrace 2022. All rights reserved.</p>
            </div>
        </div>

	</div>

</footer>

<?php wp_footer(); ?>

<script>

	// menu jQuery

	jQuery(".toggle").on("click",function() {
		if(jQuery(".site-menu").hasClass("active")){
			jQuery(".site-menu").removeClass("active");
		} else{
			jQuery(".site-menu").removeClass("active");
			jQuery(".site-menu").addClass("active");
		}
	});

	jQuery(".toggle").on("click",function() {
		if(jQuery(this).hasClass("active")){
			jQuery(this).removeClass("active");
		} else{
			jQuery("icon").removeClass("active");
			jQuery(this).addClass("active");
		}
	});


	// Mobile on click

	function subMenuSlide() {
		if( jQuery(window).width() < 1023 ) {
			if( jQuery('#menu-main-menu li').hasClass('menu-item-has-children') ) {
				jQuery('.menu-item-has-children').append( "<svg fill='#ffffff' viewBox='0 0 140 140' width='24' height='24' xmlns='http://www.w3.org/2000/svg'><g><path d='m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z' fill='black'/></g></svg>" );
			}

			jQuery('li.menu-item-has-children > svg').click(function() {

				$parent = jQuery(this).parent().closest('li.menu-item-has-children');

				if( !$parent.hasClass('child-menu-open') ) {
					$parent.addClass('child-menu-open');
				} else {
					$parent.removeClass('child-menu-open');
				}

			});
		} else {
			jQuery('.menu-item-has-children svg').remove();
		}
	}
	window.addEventListener('load', function() {
				subMenuSlide();
	});
	window.addEventListener('resize', function() {
				subMenuSlide();
	});


	// Level 3 Dropdown

	function subMenuSlide3() {
		if( jQuery(window).width() < 1023 ) {
			// if( jQuery('#menu-main-menu > li > .sub-menu > li > .sub-menu').hasClass('menu-item-has-children') ) {
			// 	jQuery('.menu-item-has-children').append( "<svg fill='#ffffff' viewBox='0 0 140 140' width='24' height='24' xmlns='http://www.w3.org/2000/svg'><g><path d='m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z' fill='black'/></g></svg>" );
			// }

			jQuery('#menu-main-menu > li > .sub-menu > li > .sub-menu > li.menu-item-has-children > svg').click(function() {

				$parent = jQuery(this).parent().closest('#menu-main-menu > li > .sub-menu > li > .sub-menu > li.menu-item-has-children');

				if( !$parent.hasClass('child-menu-open') ) {
					$parent.addClass('child-menu-open');
				} else {
					$parent.removeClass('child-menu-open');
				}

			});
		} else {
			jQuery('#menu-main-menu > li > .sub-menu > li > .sub-menu > li.menu-item-has-children svg').remove();
		}
	}
	window.addEventListener('load', function() {
				subMenuSlide3();
	});
	window.addEventListener('resize', function() {
				subMenuSlide3();
	});

	// Owl One

	jQuery('.owl-one').owlCarousel({
		loop:true,
		margin:10,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:1,
				nav:false
			},
			1000:{
				items:1,
				nav:true,
				loop:false
			}
		}
	});


	// Owl Two

	jQuery('.owl-two').owlCarousel({
		loop:true,
		margin:20,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:6
			}
		}
	});

</script>



</body>
</html>
