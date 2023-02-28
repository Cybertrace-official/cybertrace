

<section class="px-15px py-85px xl:px-0">
    <div class="max-w-1140px mx-auto">

        <div class="download_wrapper text-center">

            <h2 class="text-4xl text-black font-roboto font-semibold uppercase text-center mb-12"><?php the_field( 'download_heading' ); ?></h2>
            <p><?php the_field( 'Download_sub_heading' ); ?></p>

            <div class="vpn_logo mt-12 md:flex md:items-center md:justify-center md:gap-12">

            <?php if( have_rows( 'recommended_vpn' ) ) : ?>
                <?php while( have_rows( 'recommended_vpn' ) ) : the_row(); ?>


                    <?php $vpn_logo = get_sub_field( 'vpn_logo' ); ?>

                    <?php if( $vpn_logo ) : ?>

                        <div class="logo mb-8 md:mb-0">
                            <img class="mx-auto md:mr-auto" src="<?php echo esc_url( $vpn_logo['url'] ) ?>" alt="<?php echo esc_attr( $vpn_logo['alt'] ) ?>">
                        </div>

                    <?php endif; ?>


                <?php endwhile; ?>
            <?php endif; ?>

            </div>
        </div>

    </div>
</section>