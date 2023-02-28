<?php

    // Template Name: Blog

?>


<?php get_header(); ?>



<section class="genHero bg-gold pt-16 pb-16 px-5 xl:px-0">
    <div class="max-w-1140px mx-auto text-center py-4">

        <h1 class="text-4xl md:text-5xl lg:text-6xl text-black font-roboto font-black">Blog</h1>


        <div class="search-form mt-10">
            <form method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <div class="relative md:max-w-3xl md:mx-auto border-8 border-slate-200/[.2] rounded-full">
                    <input type="search" id="search-bar" name="s" class="block px-25px py-[18px] w-full text-xs md:text-sm text-gray-900 font-nunito bg-gray-50 rounded-full outline-0"
                    placeholder="Search here" />
                    <button type="submit" class="text-black absolute right-0 bottom-0 bg-golden font-nunito px-[30px] py-[18px] text-xs md:text-sm uppercase rounded-tr-full rounded-br-full transition-all hover:bg-black hover:text-white">Search</button>
                </div>
            </form>
        </div>


    </div>
</section>



<section class="px-[15px]  py-[90px] xl:px-0">
    <div class="max-w-1140px mx-auto">
		
		<?php
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$query = new WP_Query( array(
				'post_type'	=>	'post',
				'posts_per_page' => 12,
                'orderby' => 'date',
                'order'   => 'DESC',
                'suppress_filters' => true,
				'paged' => $paged
			) );
			if ( $query->have_posts() ) :  
		?>
		
        <div class="blog-wrapper md:grid md:grid-flow-row md:grid-cols-2 md:gap-5 lg:grid-cols-3">

		
  		<?php
			
			while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class=" bg-white mb-5 md:mb-0 rounded-lg border border-gray-200 shadow-md">
                <a href="<?php the_permalink();?>">

                    <?php the_post_thumbnail('blog-img', ['class' => 'w-full rounded-t-lg']); ?>

                </a>
                <div class="relative p-5 post_cont">
					<div class="post_inner_content">
						<a href="<?php the_permalink();?>" target="_self" area-label="Feature Image">
							<h5 class="text-black font-roboto mb-2 text-2xl font-bold">
								<!-- <?php the_title();?> -->
                                <?php echo wp_trim_words( get_the_title(), 8 ); ?>
							</h5>
						</a>

						<div class="blog-des">
							<p class="mb-3 font-normal text-gray-700 dark:text-gray-400 break-words">
								<?php echo wp_trim_words( get_the_content(), 15 ); ?>
							</p>
						</div>
					</div>
                    
                    <a href="<?php the_permalink();?>" area-label="Read More" target="_self" class="rm-btn font-nunito inline-flex items-center py-2 px-3 text-sm font-medium text-center text-black bg-golden rounded-lg hover:bg-black hover:text-white focus:outline-none">
                        Read More
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>

            <?php endwhile;?>
			</div>
            
			<?php 
				wp_pagenavi( array( 'query' => $query ) );
				wp_reset_postdata(); 
			?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
        

    </div>
</section>








<?php get_footer(); ?>
