<?php 
	$background_color	=	get_field('background_color');
	if($background_color):
		$background_color	=	$background_color;
	else:
		$background_color	=	'black';
	endif;
?>

<section class="px-15px py-85px xl:px-0 bg-<?php echo $background_color;?>">

    <div class="max-w-1140px mx-auto">

    <?php $aus_main_title = get_field( 'aus_main_title' ); ?>
        
        <?php if( $aus_main_title ) : ?>
            <h2 class="text-4xl text-black font-roboto font-semibold uppercase text-center mb-12"><?php echo $aus_main_title; ?></h2>
        <?php endif; ?>

        <div class="ct-provider md:grid md:grid-flow-row md:grid-cols-2 md:gap-6">
            <div class="ct-heading bg-golden px-3 md:px-25px py-10 text-center">
                <h6 class="text-4xl text-white font-nunito">

					<?php the_field('left_content_aus');?>
					
				</h6>
            </div>

            <div class="ct-content bg-golden px-3 md:px-25px py-10 mt-5 md:mt-0 text-center">

                <p class="text-base text-black font-nunito">
                   <?php the_field('right_content_aus');?>
				</p>

            </div>
        </div>

        <div class="icon-wrapper flex gap-4 mt-14 justify-center">
            <a href="<?php the_field('facebook_link' , 'option');?>" class="bg-gold rounded-full px-2 w-9 h-9 inline-flex items-center justify-center" target="_blank" rel="noopener noreferrer">
                <!-- <i class="fab fa-facebook"></i> -->
                <img src="/wp-content/uploads/2022/12/facebook.webp" alt="facebook Logo" width="16" height="16">
            </a>
            <a href="<?php the_field('twitter_link' , 'option');?>" class="bg-gold rounded-full px-2 w-9 h-9 inline-flex items-center justify-center" target="_blank" rel="noopener noreferrer">
                <!-- <i class="fab fa-twitter"></i> -->
                <img src="/wp-content/uploads/2022/12/twitter.webp" alt="facebook Logo" width="16" height="16">
            </a>
            <a href="<?php the_field('instagram_link' , 'option');?>" class="bg-gold rounded-full px-2 w-9 h-9 inline-flex items-center justify-center" target="_blank" rel="noopener noreferrer">
                <!-- <i class="fab fa-instagram"></i> -->
                <img src="/wp-content/uploads/2022/12/instagram.webp" alt="facebook Logo" width="16" height="16">
            </a>
            <a href="<?php the_field('linkedin_link' , 'option');?>" class="bg-gold rounded-full px-2 w-9 h-9 inline-flex items-center justify-center" target="_blank" rel="noopener noreferrer">
                <!-- <i class="fab fa-linkedin"></i> -->
                <img src="/wp-content/uploads/2022/12/linkedin.webp" alt="facebook Logo" width="16" height="16">
            </a>
        </div>

    </div>

</section>