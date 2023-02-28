<section class="py-85px px-15px xl:px-0">

    <div class="license_images max-w-1140px mx-auto text-center">

        <div class="license-content bg-black rounded-lg px-25px py-10 max-w-[1000px] mx-auto">
            <?php the_field( 'licence_text' ); ?>
        </div>
        
        <div class="license-img mt-12 border-4 border-black max-w-[772px] mx-auto xl:h-[1091px]">

            <?php $license_main_image = get_field( 'license_main_image' ); ?>
            <img src="<?php echo esc_url( $license_main_image['url'] ); ?>" alt="<?php echo esc_url( $license_main_image['url'] ); ?>">

        </div>

        <div class="md:flex">

            <div class="license-img mt-12 border-4 border-black max-w-[435px] mx-auto md:mr-4 xl:mr-0 xl:h-[600px]">

                <?php $license_left_image = get_field( 'license_left_image' ); ?>

                <?php if( $license_left_image ) : ?>
                    <img src="<?php echo esc_url( $license_left_image['url'] ); ?>" alt="<?php echo esc_attr( $license_left_image['alt'] ); ?>">
                <?php endif; ?>

            </div>

            <div class="license-img mt-12 border-4 border-black max-w-[435px] mx-auto xl:h-[600px]">

                <?php $license_right_image = get_field( 'license_right_image' ); ?>

                <?php if( $license_right_image ) : ?>
                    <img src="<?php echo esc_url( $license_right_image['url'] ); ?>" alt="<?php echo esc_attr( $license_right_image['alt'] ); ?>">
                <?php endif; ?>

            </div>

        </div>
    </div>

</section>