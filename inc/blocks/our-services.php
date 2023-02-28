


<section class="services-wrapper relative bg-black py-85px px-15px xl:px-0">

  <h2 class="text-4xl text-white font-roboto font-semibold uppercase text-center mb-12"><?php the_field( 'services_main_heading' ); ?></h2>

  <div class="max-w-1140px mx-auto">

      <div class="services-inner relative gap-5 grid md:grid-flow-row md:grid-cols-2 md:grid-row-6 lg:grid-cols-3 lg:grid-row-4">

      <?php if ( have_rows( 'our_services' ) ) : ?>
        <?php while( have_rows( 'our_services' ) ) : the_row(); ?>

          <div class="bg-black px-25px py-10 shadow-lg border rounded-lg w-full mb-5 md:mb-0">

            <h3 class="text-white text-xl font-semibold font-roboto"><?php the_sub_field( 'services_heading' ); ?></h3>

            <h4 class="text-golden text-base md:text-sm font-semibold font-roboto py-5"><?php the_sub_field( 'services_sub_heading' ); ?></h4>

            <p class="text-white text-base font-normal font-nunito mb-11"><?php the_sub_field( 'services_description' ); ?></p>

            <div>

              <?php $services_rm_btn = get_sub_field( 'services_rm_btn' ) ?>

                <?php if( $services_rm_btn ) : ?>

                  <a href="<?php echo esc_url( $services_rm_btn['url'] ) ?>" aria-label="Read more" target="_self" class="text-base font-roboto font-medium uppercase text-white">

                    <?php echo esc_html( $services_rm_btn['title'] ); ?>

                  </a>

                <?php endif; ?>

            </div>

          </div>

        <?php endwhile; ?>    
      <?php endif ?> 

      </div>
  </div>
</section>