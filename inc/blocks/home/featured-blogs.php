<section class="py-28">

    <div class="max-w-[1920px] mx-auto px-5 xl:px-[120px]">
        <h2 class="font-roboto font-bold text-[38px] lg:text-[48px] leading-[30px] md:leading-[51px] lg:leading-[60px] text-center text-heading-black">
            <?php the_field( 'home_blog_description' ); ?>
        </h2>
        <p class="font-roboto leading-[22px] text-base text-p-text text-center max-w-[635px] mx-auto mt-4">
            <?php the_field( 'home_blog_description' ); ?>
        </p>

        <div class="fp-wrapper grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 grid-rows-1 gap-7 mt-10">


            <?php
                $args = array(
                    'post_type'         =>  'post',    
                    'cat'            => 218,
                    'post_status'       =>  'publish'
                );

                $the_query = new WP_Query( $args );

                if ( $the_query->have_posts() ):
                    while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>


                <div class="posts-card rounded-[20px] border border-[#F5F6F7]">
                    <a href="#">
                        <img src="<?php echo get_the_post_thumbnail_url();?>"/>
                    </a>

                    <div class="post-content p-6">
                        <a href="#">
                            <h3 class="font-roboto font-normal text-lg md:text-2xl text-heading-black">
                                fsdfsfdfdfd
                            </h3>
                        </a>

                        <div class="font-roboto font-normal text-xs md:text-base md:leading-[20px] text-p-text mt-[6px] mb-14">Published: fdfdfd></div>

                        <div class="flex items-center">
                            <a href="#" class="font-roboto font-medium text-[18px] leading-[22px] text-heading-black flex justify-center items-center">
                                see more
                            </a>
                            
                            <span class="ml-4">                        
                                <svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 9H25V7H0V9Z" fill="#324162"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

            <?php

                endwhile;

                wp_reset_postdata();

                endif;

            ?>


            <div class="posts-card rounded-[20px] border border-[#F5F6F7] inline-flex items-center justify-center">
                <a href="#" class="px-[30px] py-[15px] font-roboto font-medium text-white uppercase text-base md:text-xl :text-2xl leading-[32px] bg-gold rounded-full hover:bg-transparent hover:text-golden hover:border hover:border-golden">See All Blogs</a>
            </div>


        </div>
    </div>
    
</section>