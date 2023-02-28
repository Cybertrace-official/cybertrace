<section class="cs_cta bg-black py-[48px]">
    <div class="max-w-[1920px] px-5 xl:px-[120px] mx-auto">
        <div class="cs__cta__wrapper flex flex-col md:flex-row items-center justify-between">

            <div class="md:mr-8 lg:mr-10">
                <p class="text-xl leading-9 md:text-[22px] text-center mb-[30px] md:text-left text-white font-roboto md:mb-0">
                    <?php the_field( 'cta_content' ); ?>
                </p>
            </div>

            <div>
                <?php $cs_cta_button = get_field( 'cs_cta_button' ); ?>
                <?php if( $cs_cta_button ) : ?>

                <a 
                    href="<?php echo esc_url( $cs_cta_button['url'] ) ?>" 
                    target="<?php echo esc_attr( $cs_cta_button['target'] ) ?>" 
                    area-lable="Contact us"
                    class="text-black text-xl leading-9 font-roboto md:text-[22px] font-normal rounded-full inline-flex items-center justify-center bg-white h-[60px] w-[217px] capitalize hover:bg-transparent hover:border hover:border-white hover:text-white"
                >
                    <?php echo esc_html( $cs_cta_button['title'] ) ?>
                </a>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>