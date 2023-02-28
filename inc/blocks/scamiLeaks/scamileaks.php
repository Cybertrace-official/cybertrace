

<section class="px-15px py-85px xl:px-0">
    <div class="max-w-1140px mx-auto">

        <div class="sl_content_main">

            <div class="text-center">
                
                <?php $scamileaks_logo = get_field( 'scamileaks_logo' ); ?>

                <?php if( $scamileaks_logo ) : ?>

                    <img class="mx-auto mb-20" src="<?php echo esc_url( $scamileaks_logo['url'] ); ?>" alt="<?php echo esc_attr( $scamileaks_logo['alt'] ); ?>">

                <?php endif; ?>


                <div class="leak_to_us">
                    <h2 class="text-4xl uppercase font-roboto"><?php the_field( 'sl_heading' ); ?></h2>
                    <div class="bg-darkPink w-[112px] mx-auto h-[5px] mt-5 mb-20"></div> <!-- Divider -->
                    <p class="text-3xl font-nunito"><?php the_field( 'sl_sub_heading' ); ?></p>
                </div>

            </div>

            <div class="sl_content_wrapper mt-24">

                <?php if( have_rows( 'scamileaks_content' ) ) : ?>
                    <?php while( have_rows( 'scamileaks_content' ) ) : the_row();  ?>

                    <div class="mb-8 md:flex">
                        <div class="md:mr-20 md:w-3/5">
                            <div class="bg-darkPink w-[112px] h-[5px] mb-10"></div> <!-- Divider -->
                            <h3 class="text-xl md:text-4xl font-roboto mb-5"><?php the_sub_field( 'heading' ); ?></h3>
                            <p class="font-nunito text-base text-[#7a7a7a]"><?php the_sub_field( 'description' ); ?></p>
                            <?php $read_more_button = get_sub_field( 'read_more_button' ); ?>
                            <?php if( $read_more_button ) : ?>
                                <a href="<?php echo esc_url( $read_more_button['url'] ); ?>" class="uppercase font-semibold text-[#CC2E72] font-nunito text-base"><?php echo esc_html( $read_more_button['title'] ); ?></a>
                            <?php endif; ?>
                        </div>

                        <div class="md:w-2/5">
                            <?php $c_image = get_sub_field( 'c_image' ); ?>
                            <?php if($c_image ) : ?>
                                <img src="<?php echo esc_url( $c_image['url'] ); ?>" alt="<?php echo esc_attr( $c_image['alt'] ); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>