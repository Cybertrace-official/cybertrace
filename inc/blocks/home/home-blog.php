<section class="bg-[#F5F6F7] py-28">
    <div class="hm-container max-w-[1920px] px-5 xl:px-[120px]  mx-auto">

    <div class="flex justify-between md:justify-center items-center mb-5">
        <hr class="w-10 h-1 bg-gold md:mr-7">
        <h2 class="font-roboto text-[40px] leading-[48px] lg:text-5xl text-center font-bold xl:leading-7">
            <?php the_field( 'home_top_blogs' ); ?>
        </h2>
        <hr class="w-10 h-1 bg-gold md:ml-7">
    </div>

    <p class="text-cadetGray font-roboto text-xl leading-9 md:text-[22px] font-normal text-center max-w-[980px] mx-auto mt-[55px]">
        <?php the_field( 'home_blog_description' ); ?>
    </p>


    <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $query = new WP_Query( array(
            'post_type'	=>	'post',
            'posts_per_page' => 3,
            'cat'            => 218,
            'orderby' => 'date',
            'order'   => 'DESC',
            'suppress_filters' => true,
            'paged' => $paged
        ) );
        if ( $query->have_posts() ) :  
    ?>



    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 grid-rows-1 gap-7 mt-10">

		
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="rounded-[20px] bg-white overflow-hidden relative mx-auto">

                <a href="#">
                    <?php $img = get_the_post_thumbnail_url(get_the_ID(), 'blog-img'); ?>
                    <img src="<?php echo $img?>"/>
                </a>



                <div class="p-6">
                    <a href="<?php the_permalink(); ?>">
                        <h4 class="font-roboto xl:text-xl md:leading-[28px] font-bold text-black">
                            <?php echo wp_trim_words( get_the_title(), 7 ); ?>
                        </h4>
                    </a>
                    
                    <h5 class="font-roboto font-normal text-xs md:text-base md:leading-[20px] text-p-text mt-[6px] mb-14">Published: <?php echo get_the_date('F j, Y'); ?></h5>
                    

                </div>
                <hr class=" w-[85%] h-[1px] bg-p-text absolute mx-auto left-0 right-0 bottom-16">
                <div class="flex justify-start items-center absolute bottom-6 left-6">
                    <a href="<?php the_permalink(); ?>"class="font-roboto font-medium text-[18px] leading-[22px] text-heading-black flex justify-center items-center" >See More
                        <span class="ml-4">                        
                            <svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 9H25V7H0V9Z" fill="#324162"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        <?php endwhile; ?>


        <?php 
            wp_reset_postdata(); 
        ?>

        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        
        <div class="seeAllMedia rounded-[20px] bg-white overflow-hidden mx-auto w-full inline-flex items-center justify-center">
            <div class="flex rounded-full justify-center items-center h-full">
                <?php $home_all_blog_link = get_field( 'home_all_blog_link' ); ?>

                <?php if( $home_all_blog_link ): ?>
                    <a href="<?php echo esc_url( $home_all_blog_link ['url']) ?>" area-lable="see all blgs" target="<?php echo $home_all_blog_link['target']; ?>" class="px-[30px] py-[15px] font-roboto font-medium text-white uppercase text-base md:text-xl :text-2xl leading-[32px] bg-gold rounded-full hover:bg-transparent hover:text-golden hover:border hover:border-golden">
                        <?php echo esc_html( $home_all_blog_link['title'] ); ?>
                    </a>
                <?php endif; ?>
                </div>  
            </div>

        </div>
        </div>


    </div>
</section>