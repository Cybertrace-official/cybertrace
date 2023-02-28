


<section class="px-15px py-85px xl:px-0">
    <div class="max-w-1140px mx-auto">

        <div class="company-info">

            <div class="s-icon-wrapper flex gap-4 justify-center md:justify-center mb-8">

                <a href="" target="blank" class="bg-gold rounded-sm px-2 w-[55px] h-[55px] inline-flex items-center justify-center">
                    <i class="text-white text-2xl fab fa-facebook"></i>
                </a>
                <a href="" target="blank" class="bg-gold rounded-sm px-2 w-[55px] h-[55px] inline-flex items-center justify-center">
                    <i class="text-white text-2xl fab fa-twitter"></i>
                </a>
                <a href="" target="blank" class="bg-gold rounded-sm px-2 w-[55px] h-[55px] inline-flex items-center justify-center">
                    <i class="text-white text-2xl fab fa-instagram"></i>
                </a>
                <a href="" target="blank" class="bg-gold rounded-sm px-2 w-[55px] h-[55px] inline-flex items-center justify-center">
                    <i class="text-white text-2xl fab fa-linkedin"></i>
                </a>
                
            </div>

            <div class="info-wrapper md:grid md:grid-flow-row md:grid-cols-2 md:gap-5">

                <div class="si-about border rounded-md py-10 px-25px text-center bg-black">

                    <h3 class="text-3xl font-roboto font-semibold text-golden uppercase mb-5"><?php the_field( 'si_about_title' ); ?></h3>

                    <div class="si_about_content text-golden">
                        <?php the_field( 'si_about_content' ); ?>
                    </div>

                </div>
                <!-- About End -->


                <!-- Contact -->
                <div class="si-contact border rounded-md py-10 px-25px text-center bg-black">

                    <h3 class="text-3xl font-roboto font-semibold text-golden uppercase mb-5"><?php the_field( 'si_contact_us_title' ); ?></h3>

                    <h4 class="text-2xl font-roboto font-semibold text-golden uppercase mb-4"><?php the_field( 'cu_address_title' ); ?></h4>

                    <div class="si-content-info text-center text-golden">

                        <?php the_field( 'si_address_content' ); ?>

                    </div>

                    <h4 class="text-2xl font-roboto font-semibold text-golden uppercase"><?php the_field( 'si_phone_heading' ); ?></h4>

                    <span class="text-golden"><?php the_field( 'si_phone_number' ); ?></span>

                </div>

            </div>

        </div>

    </div>
</section>