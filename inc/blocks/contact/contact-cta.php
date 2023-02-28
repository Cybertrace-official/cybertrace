

<section class="py-85px px-15px xl:px-0">
    <div class="max-w-1140px mx-auto">

        <h1 class="text-2xl md:text-3xl lg:text-[56px] font-roboto font-bold text-center uppercase"><?php the_field( 'contact_main_title' ); ?></h1>

            <div class="forms-wrapper mt-20 md:grid md:grid-cols-2 md:gap-5">

                <?php if( have_rows( 'contact_cta' ) ) : ?>
                    <?php while( have_rows( 'contact_cta' ) ) : the_row(); ?>
                    
                        <div class="col-1 bg-black px-25px py-14 lg:p-14 rounded-lg text-center mb-5 md:mb-0">
                            <h3 class="text-white text-xl lg:text-2xl leading-6 font-roboto font-semibold"><?php the_sub_field( 'heading' ); ?></h3>
                            <p class="text-golden text-base leading-6 font-nunito mt-8 mb-6 lg:mb-10 lg:mt-12"><?php the_sub_field( 'description' ); ?></p>
                            
                            <div class="">
                                <?php $ccta_image = get_sub_field( 'ccta_image' ); ?>

                                <?php if( $ccta_image ) : ?>

                                <img class="w-full" src="<?php echo esc_url( $ccta_image['url'] ); ?>" alt="<?php echo esc_attr( $ccta_image['alt'] ); ?>">

                                <?php endif; ?>
                            </div>

                            <div class="text-center">

                            <?php $contact_button = get_sub_field( 'contact_button' ); ?>

                                <?php if( $contact_button ) : ?>

                                    <a href="<?php echo esc_url( $contact_button['url'] ) ?>" target="<?php echo esc_attr( $contact_button['target'] ); ?>" class="text-base font-nunito font-medium uppercase bg-golden text-black px-8 py-3 inline-flex items-center justify-center transition-all mt-10 border border-golden rounded-full hover:bg-transparent hover:border hover:border-golden hover:text-golden">
                                        <?php echo esc_html( $contact_button['title'] ); ?>
                                    </a>

                                <?php endif; ?>

                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>  
    </div>
</section>