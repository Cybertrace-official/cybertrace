

<section class="brochure py-85px px-5 xl:px-0">
    <div class="max-w-1140px mx-auto">
        <div class="brochure-inner items-center justify-between md:flex">

            <div class="content-wrapper text-center max-w-[700px]">
                <h2 class="text-3xl font-roboto font-semibold capitalize lg:text-6xl"><?php the_field( 'brochure_heading' ); ?></h2>
                <p class="text-xl font-nunito font-semibold capitalize my-7 lg:text-3xl"><?php the_field( 'brochure_description' ); ?></p>
                
                <div>

                    <?php $download_btn = get_field( 'download_btn' ); ?>

                    <?php if( $download_btn ) : ?>

                        <a href="<?php echo esc_url( $download_btn['url'] ) ?>" aria-label="Download brochure" target="_self" class="transition-all text-base font-nunito font-medium uppercase bg-gold text-black px-6 py-3 inline-flex items-center justify-center border border-golden rounded-full hover:bg-transparent hover:border hover:border-golden hover:text-golden">
                            <?php echo esc_html( $download_btn['title'] ); ?>
                        </a>

                    <?php endif; ?>

                </div>


            </div>

            <div class="image-wrapper mt-8 text-center md:text-left xl:mt-0">

                <?php $brochure_image = get_field( 'brochure_image' ); ?>

                <?php if( $brochure_image ) : ?>

                    <img class="mx-auto" src="<?php echo esc_url( $brochure_image['url'] ); ?>" alt="<?php echo esc_attr( $brochure_image['alt'] ); ?>" width="234" height="300">

                <?php endif; ?>

            </div>

        </div>
    </div>
</section>