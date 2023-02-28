

<?php $download_btn = get_field( 'download_btn' ); ?>

<?php if( $download_btn ) : ?>

    <a href="<?php echo esc_url( $download_btn['url'] ) ?>" target="_self" class="transition-all text-base font-nunito font-medium uppercase bg-gold text-white px-6 py-3 inline-flex items-center justify-center border border-golden rounded-full hover:bg-transparent hover:border hover:border-golden hover:text-golden">
        <?php echo esc_html( $download_btn['title'] ); ?>
    </a>

<?php endif; ?>





<!-- for image -->



<?php $brochure_image = get_field( 'brochure_image' ); ?>

<?php if( $brochure_image ) : ?>

    <img src="<?php echo esc_url( $brochure_image['url'] ); ?>" alt="<?php echo esc_attr( $brochure_image['alt'] ); ?>">

<?php endif; ?>
