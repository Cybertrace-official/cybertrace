

<section class="cyber_types px-15px xl:px-0">
    <div class="max-w-1140px mx-auto">

    <?php $cyber_types_title = get_field( 'cyber_types_title' ); ?>

    <?php if( $cyber_types_title ) : ?>
        <h2 class="text-2xl md:text-4xl text-black font-roboto font-semibold uppercase text-center mb-12">
            <?php the_field( 'cyber_types_title' ); ?>
        </h2>
    <?php endif; ?>



    <?php if( have_rows( 'cyber_types' ) ) : ?>
        <?php while( have_rows( 'cyber_types' ) ) : the_row(); ?>

            <div class="ct-innner items-center bg-black mb-6 md:p-4 lg:flex">
                <div class="text-center">

                    <?php $cyber_types_image = get_sub_field( 'cyber_types_image' ); ?>

                    <?php if( $cyber_types_image ) : ?>
                        <img class="ct-img max-w-full w-full lg:max-w-[360px]" src="<?php echo esc_url( $cyber_types_image['url'] ); ?>" alt="<?php echo esc_attr( $cyber_types_image['alt'] ); ?>">
                    <?php endif; ?>

                </div>

                <div class="max-w-[480px] mx-auto text-center px-2 pt-4 lg:pt-0 md:px-4 xl:px-0">
                    <h3 class="text-[22px] text-golden font-roboto font-medium mb-4"><?php the_sub_field( 'cyber_types_heading' ); ?></h3>

                    <p class="text-15px font-nunito leading-[21px] text-white mb-2"><?php the_sub_field( 'cyber_types_description' ); ?></p>
                </div>

                <div class="text-center pb-4 md:pr-4 xl:pr-8 xl:pb-0 xl:text-left">

                    <?php $cyber_types_button = get_sub_field( 'cyber_types_button' ) ?>

                    <?php if( $cyber_types_button ) : ?>
                        <a href="<?php echo esc_url( $cyber_types_button['url'] ) ?>" aria-label="Contact us" target="_self" class="text-base font-nunito font-medium uppercase bg-golden text-black px-8 py-3 inline-flex items-center justify-center transition-all mt-10 border border-golden rounded-full hover:bg-transparent hover:border hover:border-golden hover:text-golden">
                            <?php echo esc_html( $cyber_types_button ['title'] ); ?>
                        </a>
                    <?php endif; ?>

                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
        
    </div>
</section>