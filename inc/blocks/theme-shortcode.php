
<div class=" bg-white py-85px px-5 xl:px-0">

    <?php $theme_code_title = get_field( 'theme_code_title' ); ?>

    <?php if( $theme_code_title ) : ?>
        <h2 class="text-4xl text-black font-roboto font-semibold uppercase text-center mb-12">
            <?php the_field( 'theme_code_title' ); ?>
        </h2>
    <?php endif; ?>

    <div class="max-w-1140px mx-auto">

        <?php
            $theme_shortcode    =   get_field('shortcode');

            echo do_shortcode(''.$theme_shortcode.'');
        ?>

    </div>

</div>

