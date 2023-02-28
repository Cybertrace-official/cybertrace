<section class="bg-whiteSmoke py-[100px]">
    <div class="hm-container max-w-[1920px] px-5 xl:px-[120px] mx-auto">
        <div class="os-head mb-[80px]">
            <div class="flex justify-center items-center">
                <hr class="w-10 h-1 mr-[4px] bg-gold md:mr-7">
                <h2 class="font-roboto text-[40px] leading-[48px] lg:text-5xl text-center font-bold xl:leading-7"><?php the_field( 'hs_heading' ); ?></h2>
                <hr class="w-10 h-1 ml-[4px] bg-gold md:ml-7">
            </div>
            <p class= "text-cadetGray font-roboto text-xl leading-9 md:text-[22px] font-normal text-center max-w-[980px] mx-auto mt-[55px]">
                <?php the_field( 'hs_description' ); ?>
            </p>
        </div>

        <div class="home__services relative gap-[20px] grid md:grid-flow-row md:grid-cols-2 md:grid-row-6 lg:grid-cols-3 lg:grid-row-4 xl:gap-[30px]">

            <?php if ( have_rows( 'services_box' ) ) : ?>
                <?php while( have_rows( 'services_box' ) ) : the_row(); ?>

                <div class="bg-white px-[25px] py-7 xl:px-10 xl:py-[60px] shadow-lg border rounded-lg w-full mb-5 md:mb-0">

                        <h3 class="text-[#324162] text-xl md:text-[22px] md:leading-8 font-bold font-roboto">
                            <?php the_sub_field( 'heading' ); ?>
                        </h3>

                        <h4 class="text-cadetGray text-lg font-bold font-roboto mt-3 mb-4">
                            <?php the_sub_field( 'sub_heading' ); ?>
                        </h4>

                        <div class="hs__content text-[#324162] lg:min-h-[240px] mb-11">
                            <?php the_sub_field( 'description' ); ?>
                        </div>

                        <div>

                            <?php $reading_more_button = get_sub_field( 'reading_more_button' ) ?>

                            <?php if( $reading_more_button ) : ?>

                                <a href="<?php echo esc_url( $reading_more_button['url'] ) ?>" aria-label="Read more" target="_self" class="text-lg font-roboto leading-[26px] font-medium capitalize text-gold">

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