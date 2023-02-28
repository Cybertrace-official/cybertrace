<section class="black-grid-boxes px-15px py-85px xl:px-0">

    <div class="max-w-1140px mx-auto">

        <?php $black_grid_boxes_heading = get_field('black_grid_boxes_heading');
        if ($black_grid_boxes_heading) :
        ?>
            <h2 class="text-[28px] md:text-4xl font-roboto font-bold uppercase text-center mb-12"><?php echo $black_grid_boxes_heading; ?></h2>
        <?php endif; ?>

        <?php $grid_boxes_number    =   get_field('grid_boxes_number');
        if (empty($grid_boxes_number)) {
            $grid_boxes_number  =   3;
        }

        ?>

        <div class="box-wrapper grid md:grid-flow-row-1 md:grid-cols-<?php echo $grid_boxes_number; ?> md:gap-3 lg:gap-5">

            <?php if (have_rows('grid_boxes')) : ?>
                <?php while (have_rows('grid_boxes')) : the_row();

                    $grid_icon            =    get_sub_field('grid_icon');
                    $grib_box_title        =    get_sub_field('grib_box_title');
                    $grid_title_link    =    get_sub_field('grid_title_link');
                    $grid_box_text        =    get_sub_field('grid_box_text');

                ?>
                    <div class="single-box bg-black px-25px py-10 text-center mb-5 md:mb-0">
                        <div class="icon w-12 mx-auto">

                            <?php echo $grid_icon; ?>

                        </div>

                        <h3 class="md:text-xl lg:text-3xl my-5 font-roboto font-bold text-golden">
                            <?php if ($grid_title_link) : ?>
                                <a href="<?php echo $grid_title_link; ?>"><?php echo $grib_box_title; ?></a>
                            <?php else :
                                echo $grib_box_title;
                            endif; ?>
                        </h3>

                        <p class="text-base text-white font-nunito">
                            <?php echo $grid_box_text; ?>
                        </p>

                        <?php $button_text_link =   get_sub_field('button_text_link');

                        if ($button_text_link) :
                        ?>
                            <div class="btn-wrapper">
                                <a href="<?php echo $button_text_link['url']; ?>" aria-label="Investigation" target="_self" class="text-base font-nunito font-medium uppercase bg-golden text-black px-8 py-3 inline-flex items-center justify-center transition-all mt-4 border border-golden rounded-full hover:bg-transparent hover:border hover:border-golden hover:text-golden">
                                    <?php echo $button_text_link['title']; ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>


                <?php endwhile; ?>
            <?php endif ?>



        </div>

    </div>

</section>