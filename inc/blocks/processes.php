

<section class="bg-white py-85px px-15px xl:px-0">
    <div class="max-w-1140px mx-auto">

        <div class="text-center">
            <h2 class="text-4xl text-black font-roboto font-semibold uppercase">
                <?php the_field( 'main_heading' ); ?>
            </h2>
        </div>

        <div class="pb-wrapper grid md:grid-flow-row md:grid-cols-2 md:grid-row-2 gap-5 mt-12">

            <?php if ( have_rows( 'our_process' ) ) : ?>
                <?php while( have_rows( 'our_process' ) ) : the_row(); ?>

                <div class="pro-box bg-golden px-25px py-10 text-center rounded-md">

                    <div class="text-black text-5xl">

                        <?php $process_icon = get_sub_field( 'process_icon' ); ?>

                        <?php if( $process_icon ) : ?>

                            <img  class="mx-auto" src="<?php echo esc_url( $process_icon['url'] ); ?>" alt="<?php echo esc_attr( $process_icon['alt'] ); ?>" width="48" height="48">

                        <?php endif; ?>

                       
                    </div>

                    <h3 class="text-black text-2xl font-roboto leading-10 font-semibold my-5"><?php the_sub_field( 'process_heading' ); ?></h3>

                    <p class="text-black text-base font-nunito font-normal"><?php the_sub_field( 'process_description' ); ?></p>
                </div>

                <?php endwhile; ?>    
            <?php endif ?> 

        </div>
    </div>
</section>