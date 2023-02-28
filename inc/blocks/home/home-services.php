<section class="px-[15px] py-[100px] xl:px-0">
    <div class="max-w-[1920px] px-5 xl:px-[120px] mx-auto">
        <div class="os-head">
            <div class="flex justify-center items-center">
                <hr class="w-10 h-1 mr-[4px] bg-gold md:mr-7">
                <h2 class="font-roboto text-[40px] leading-[48px] lg:text-5xl text-center font-bold xl:leading-7"><?php the_field( 'hs_heading' ); ?></h2>
                <hr class="w-10 h-1 ml-[4px] bg-gold md:ml-7">
            </div>
            <p class= "text-cadetGray font-roboto text-xl leading-9 md:text-[22px] font-normal text-center max-w-[980px] mx-auto mt-[55px]">
                <?php the_field( 'hs_description' ); ?>
            </p>
        </div>

        <div class="services-inner relative gap-5 grid md:grid-flow-row md:grid-cols-2 md:grid-row-6 lg:grid-cols-3 lg:grid-row-4">

            <?php if ( have_rows( 'services_box' ) ) : ?>
                <?php while( have_rows( 'services_box' ) ) : the_row(); ?>

                <div class="bg-black px-25px py-10 shadow-lg border rounded-lg w-full mb-5 md:mb-0">

                        <h3 class="text-white text-xl font-semibold font-roboto">
                            <?php the_sub_field( 'heading' ); ?>
                        </h3>

                        <h4 class="text-golden text-base md:text-sm font-semibold font-roboto py-5">
                            <?php the_sub_field( 'sub_heading' ); ?>
                        </h4>

                        <p class="text-white text-base font-normal font-nunito mb-11">
                            <?php the_sub_field( 'description' ); ?>
                        </p>

                        <div>

                            <?php $reading_more_button = get_sub_field( 'reading_more_button' ) ?>

                            <?php if( $reading_more_button ) : ?>

                                <a href="<?php echo esc_url( $reading_more_button['url'] ) ?>" aria-label="Read more" target="_self" class="text-base font-roboto font-medium uppercase text-white">

                                <?php echo esc_html( $reading_more_button['title'] ); ?>

                                </a>

                            <?php endif; ?>

                        </div>

                </div>

                <?php endwhile; ?>    
            <?php endif ?> 

        </div>
        
    </div>
</section>