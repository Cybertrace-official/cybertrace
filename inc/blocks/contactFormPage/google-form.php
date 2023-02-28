



<section class="contactUs bg-[#646464] px-15px py-85px xl:px-0">
    <div class="max-w-1140px mx-auto">

        <div class="cf-header text-center mb-12">
            <div class="cf-icon bg-golden border-2 border-white rounded-full inline-flex items-center justify-center w-[72px] h-[72px]">
                <span class="text-white text-3xl"><i class="<?php the_field( 'gf_phone_icon' ); ?>"></i></span>
            </div>
            <h1 class="text-xl md:text-4xl text-white font-roboto font-semibold uppercase text-center my-3"><?php the_field( 'google_form_heading' ); ?></h1>
            <p class="text-white text-lg"><?php the_field( 'google_form_description' ); ?></p>
        </div>

        <div class="cf-body bg-white p-10 max-w-1140px mx-auto">
            <?php the_field( 'google_form_iframe' ); ?>
        </div>

        <div class="contact-info mt-9 text-center text-white">
            <?php the_field( 'gf_contact_information' ); ?>
        </div>

    </div>
</section>