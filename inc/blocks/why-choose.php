



<section class="bg-black py-85px px-15px xl:px-0 clear-both">
            
    <div class="text-center">
        <h2 class="text-4xl text-black font-roboto font-semibold uppercase"><span class="text-golden"><?php the_field( 'wcs_heading' ); ?></h2>
        <p class="text-22px text-white font-roboto font-medium mt-2 mb-8 md:mt-5 md:mb-16"><?php the_field( 'why_choose_us_sub_heading' ); ?></p>
    </div>

    <div class="forMaxWidth mx-auto">
        
        <div class="wcu-inner gap-5 justify-center md:grid md:grid-flow-row md:grid-cols-2">

            <?php if( have_rows( 'experience_points' ) ) : ?>
                <?php while( have_rows( 'experience_points' ) ) : the_row(); ?>

                    <div class="bg-black text-white border rounded-lg mt-5 md:mt-0 md:max-w-430px px-4 py-8 md:py-10 md:px-25px">

                        <ul class="cu-list">

                            <?php if( have_rows( 'points' ) ) : ?>
                                <?php while( have_rows( 'points' ) ) : the_row(); ?>

                                    <li class="mb-2 font-roboto font-normal flex">
                                        <div class="pr-4 text-golden">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="16px" height="16px">
                                            <path fill="#b8894b" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                        </svg>
                                        </div>
                                        <div><?php the_sub_field( 'point' ) ?></div>
                                    </li>
                                    
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </ul>

                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>

        <div class="text-center">

            <?php $why_choose_button = get_field('why_choose_button'); ?>

            <?php if( $why_choose_button ) : ?>

                <a href="<?php echo esc_url( $why_choose_button['url'] ) ?>" aria-label="Learn More" target="_self" class="text-base font-roboto font-medium uppercase bg-golden text-black px-8 py-3 inline-flex items-center justify-center mt-10 border border-golden rounded-full hover:bg-transparent hover:border hover:border-golden hover:text-golden">
                    <?php echo esc_html( $why_choose_button['title'] ); ?>
                </a>

            <?php endif; ?>

        </div>

    </div>

</section>