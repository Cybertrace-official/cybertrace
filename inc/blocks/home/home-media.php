<div class="h-media bg-[#F5F6F7] py-10 md:py-28">
    <div class="hm-container max-w-[1920px] px-5 xl:px-[120px] mx-auto">
    <div class="flex justify-center items-center">
        <hr class="w-10 h-1 mr-[4px] bg-gold md:mr-7">
        <h2 class="font-roboto text-[40px] leading-[48px] lg:text-5xl text-center font-bold xl:leading-7"><?php the_field( 'home_media_heading' ); ?></h2>
        <hr class="w-10 h-1 ml-[4px] bg-gold md:ml-7">
    </div>
    <p class= "text-cadetGray font-roboto text-xl leading-9 md:text-[22px] font-normal text-center max-w-[980px] mx-auto mt-[55px]">Our expertise in cyber crime investigation has been recognized by top industry publications, highlighting our commitment to solving digital crime.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 grid-rows-1 gap-7 mt-10">

    <?php if ( have_rows( 'home_media_box' ) ) : ?>
                <?php while( have_rows( 'home_media_box' ) ) : the_row(); 
                    $home_media_box_image = get_sub_field( 'home_media_image' );
                    $home_media_box_image_caption = get_sub_field( 'home_media_box_image_caption' );
                    $home_media_box_link = get_sub_field( 'home_media_image_box_link' );
                    $home_media_box_title = get_sub_field( 'home_media_image_box_title' );
				?>    
        <div class="hm-content rounded-[20px] bg-white overflow-hidden mx-auto">
            <a href="<?php echo $home_media_box_link;?>" target="_blank">

            <img class="w-full" src="<?php echo $home_media_box_image;?>" alt="">

            <div class="fig-wrap px-[18px] pt-8 pb-16">
            <figcaption class="font-roboto xl:text-xl md:leading-[28px] font-bold text-black text-center"><?php echo $home_media_box_image_caption;?></figcaption>
                <h4 class="font-roboto font-normal xl:text-xl md:leading-[28px] text-black mt-6 text-center"><?php echo $home_media_box_title;?></h4>
            </div>
            </a>           
        </div>
        <?php endwhile; ?>    
            <?php endif ?>
            <div class="seeAllMedia rounded-[20px] bg-white overflow-hidden mx-auto w-full inline-flex items-center justify-center">
            <div class="flex justify-center items-center">
            <?php $see_all_media_home = get_field( 'see_all_media_home' ); ?>

            <?php if( $see_all_media_home ): ?>
                <a href="<?php echo esc_url( $see_all_media_home ['url']) ?>" area-lable="see all blgs" target="<?php echo $see_all_media_home['target']; ?>" class="px-[30px] py-[15px] font-Space-Grotesk font-medium text-white uppercase text-base md:text-xl :text-2xl leading-[32px] bg-gold rounded-full hover:bg-transparent hover:text-golden hover:border hover:border-golden">
                    <?php echo esc_html( $see_all_media_home['title'] ); ?>
                </a>
            <?php endif; ?>
            </div>  
        </div>
    </div>
    </div>


</div>