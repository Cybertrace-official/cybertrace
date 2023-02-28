<section class="whoWeAre bg-black py-85px px-15px xl:px-0">
    <div class="max-w-1140px mx-auto">
        <div class="gap-5 justify-between lg:flex">

            <div class="mx-auto bg-black border px-25px py-10 text-center rounded-lg mb-5 lg:mb-0 lg:w-2/5">

                <h2 class="text-4xl text-white font-roboto font-semibold uppercase"><?php the_field('scam_detector_heading'); ?></h2>
                <p class="text-22px text-white font-roboto font-medium mt-5 mb-10"><?php the_field('scam_detector_sub_heading'); ?></p>

                <div>
                    <?php $scam_detector_image = get_field('scam_detector_image'); ?>

                    <?php if ($scam_detector_image) : ?>
                        <img class="scam-pic w-full md:w-[396px]" width="396" src="<?php echo esc_url($scam_detector_image['url']); ?>" alt="<?php echo esc_attr($scam_detector_image['alt']) ?>" width="396" height="240" loading="lazy">
                    <?php endif; ?>

                </div>

                <p class="text-22px text-white font-nunito font-medium mt-5"><?php the_field('scam_detector_sub_heading_2'); ?></p>

                <div class="text-center wwa-btn">

                    <?php $scam_detector_btn = get_field('scam_detector_btn'); ?>

                    <?php if ($scam_detector_btn) : ?>
                        <a href="<?php echo esc_url($scam_detector_btn['url']) ?>" aria-label="Check website" target="_self" class="transition-all text-base font-nunito font-medium capitalize tracking-wider bg-golden text-black px-8 py-3 inline-flex items-center justify-center rounded-full mt-10 border border-golden hover:bg-transparent hover:border hover:border-golden hover:text-golden">
                            <?php echo esc_html($scam_detector_btn['title']); ?>
                        </a>
                    <?php endif; ?>

                </div>

            </div>

            <div class="mx-auto bg-black border px-4 md:px-25px py-10 rounded-lg lg:w-3/5">
                <h2 class="text-2xl md:text-4xl text-white font-roboto text-center font-semibold uppercase"><?php the_field('who_we_are_heading'); ?></h2>
                <h3 class="text-22px text-white font-roboto font-medium text-center mt-5 mb-10"><?php the_field('who_we_are_sub_heading'); ?></h3>

                <div class="text-15px font-nunito leading-[21px] text-white mb-5">
                    <?php the_field('who_we_are_description'); ?>
                </div>

                <div class="text-center">

                    <?php $wwa_learn_more_button = get_field('wwa_learn_more_button'); ?>

                    <?php if ($wwa_learn_more_button) : ?>
                        <a href="<?php echo esc_url($wwa_learn_more_button['url']) ?>" aria-label="Learn More" target="<?php echo esc_attr($wwa_learn_more_button['target']); ?>" class="text-base font-nunito font-medium tracking-wider capitalize bg-golden text-black px-8 py-3 inline-flex items-center justify-center mt-10 border border-golden rounded-full hover:bg-transparent hover:border hover:border-golden hover:text-golden">
                            <?php echo esc_html($wwa_learn_more_button['title']); ?>
                        </a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>