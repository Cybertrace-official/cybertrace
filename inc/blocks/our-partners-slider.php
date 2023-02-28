<div class="partnerSlider bg-white py-85px px-5 xl:px-0">

<div class="flex justify-between md:justify-center items-center mb-5">
        <hr class="w-10 md:w-20 h-1 bg-gold md:mr-7">
        <h2 class="font-Unbounded font-bold text-[38px] lg:text-[48px] leading-[30px] md:leading-[51px] lg:leading-[60px] text-center text-heading-black">Our Partners</h2>
        <hr class="w-10 md:w-20 h-1 bg-gold md:ml-7">
    </div>

    <div class="max-w-1140px mx-auto">

        <div class="owl-two owl-carousel">

            <?php
            $lazy_load = "lazy";
            if (!isset($_GET['dv_test_3'])) {
                $lazy_load = "auto";
            }
            ?>
            <?php if (have_rows('partners_logos')) : ?>
                <?php while (have_rows('partners_logos')) : the_row(); ?>

                    <div class="item">

                        <?php $logo_image = get_sub_field('logo_image'); ?>

                        <?php if ($logo_image) : ?>
                            <img class="w-[300px]" src="<?php echo esc_url($logo_image['url']); ?>" alt="<?php echo esc_attr($logo_image['alt']); ?>" loading="<?php echo $lazy_load; ?>">
                        <?php endif; ?>

                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>

    </div>

</div>