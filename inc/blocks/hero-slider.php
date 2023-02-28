<?php

$id = 'hero-slider' . $block['id'];

$classes = $block['className'];

$classes .= '';

?>
<link rel="preload" as="image" href="https://www.cybertrace.com.au/wp-content/uploads/2022/12/AdobeStock_101806596reduce-scaled.webp">


<section class="hero-slider hero-slider-overlay bg-black px-15px -mt-95px py-85px md:pt-30 md:pb-28 md:px-5">
    <div class="hero-bg-img"></div>
    <div class="max-w-1140px mx-auto relative">

        <div class="owl-one owl-carousel owl-loaded owl-drag">

            <?php if (have_rows('hero_slider')) : ?>
                <?php while (have_rows('hero_slider')) : the_row(); ?>

                    <div class="item text-center">
                        <h1 class="text-3xl  md:text-4xl md:leading-50px font-bold font-roboto text-golden lg:text-52px font"><?php the_sub_field('hs_main_heading'); ?></h1>
                        <p class="text-base md:text-xl text-white font-normal font-nunito my-10 lg:text-23px lg:leading-10 lg:tracking-wide"><?php the_sub_field('hs_sub_heading'); ?></p>


                        <?php $hs_button_link = get_sub_field('hs_button_link') ?>

                        <?php if ($hs_button_link) : ?>
                            <a href="<?php echo esc_url($hs_button_link['url']) ?>" aria-label="Read more" target="_self" class="transition-all text-base font-nunito font-medium uppercase bg-gold text-black px-6 py-3 inline-flex items-center justify-center border border-golden rounded-full hover:bg-transparent hover:text-golden hover:border hover:border-golden">
                                <?php echo esc_html($hs_button_link['title']); ?>
                            </a>
                        <?php endif ?>

                    </div>

                <?php endwhile; ?>
            <?php endif ?>

        </div>

    </div>

</section>