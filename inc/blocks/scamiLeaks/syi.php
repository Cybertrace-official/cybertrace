

<section class="px-15px py-85px xl:px-0">
    <div class="max-w-1140px mx-auto">
        <div class="sy_info_wrapper text-center">
            
            <h2 class="text-xl md:text-4xl text-black font-roboto font-semibold uppercase text-center mb-20"><?php the_field( 'syi_heading' ); ?></h2>

            <?php $submit_button = get_field( 'submit_button' ); ?>

            <?php if( $submit_button ) : ?>

                <a href="<?php echo esc_url( $submit_button['url'] ) ?>" target="<?php echo esc_attr( $submit_button['target'] ); ?>" class="transition-all text-base font-nunito font-medium uppercase bg-gold text-white px-6 py-3 inline-flex items-center justify-center border border-golden rounded-full hover:bg-transparent hover:border hover:border-golden hover:text-golden">
                    <?php echo esc_html( $submit_button['title'] ); ?>
                </a>

            <?php endif; ?>
    
        </div>
    </div>
</section>