
<?php 
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 


?>
<div class="relative">
  
  <div class="relative pt-5 md:pt-0 px-[15px] xl:px-0 sm:h-[300px] w-full flex items-end justify-center  bg-cover bg-center" style="background-image:url(<?php echo $featured_img_url;?>);">
  <div class="absolute top-0 right-0 bottom-0 left-0 " style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000000 100%);"></div>
  
  <main class="z-10 w-full sm:max-w-1140px sm:mx-auto mb-10">
	
		<div class="grid grid-cols-1 gap-2 sm:grid-cols-3 items-end	">
			<div class="col-span-2 ">
				<?php the_title( sprintf( '<h1 class="entry-title pt-6 md:pt-0 font-inter text-4xl leading-[44px] font-bold text-white"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>


				<div class="flex items-center space-x-2 mt-10 md:mt-4">
					<!--Author's profile photo-->
					<img class="w-10 h-10 object-cover object-center rounded-full author-image" src="https://wordpress-800227-3053895.cloudwaysapps.com/wp-content/uploads/2023/01/cropped-Cybertrace_FavIcon-e1674034334860.png" alt="random user" />
					<div>
					<!--Author name-->
					<p class="text-white mb-[2px] text-left font-medium font-inter text-base"><?php echo get_the_author_meta('display_name', $author_id);?></p>
					<p class="text-white font-normal font-inter text-sm mb-0 text-left"> <?php echo get_the_date(); ?> &middot; <?php echo reading_time();?> min read </p>
					</div>
				</div>
	



			</div>
			<div class="float-right w-full	md:w-[156px] ml-auto mt-[38px]">
				<p class="text-sitegray_m font-inter text-base font-normal mb-2">Share On</p>
				<div class="flex justify-left md:justify-center space-x-1 ">
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" role="button">
						<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="36" height="36" rx="5" fill="#BA8C49"/>
							<g clip-path="url(#clip0_1017_90)">
							<path d="M19.6666 19.25H21.7499L22.5833 15.9167H19.6666V14.25C19.6666 13.3917 19.6666 12.5833 21.3333 12.5833H22.5833V9.78334C22.3116 9.74751 21.2858 9.66667 20.2024 9.66667C17.9399 9.66667 16.3333 11.0475 16.3333 13.5833V15.9167H13.8333V19.25H16.3333V26.3333H19.6666V19.25Z" fill="white"/>
							</g>
							<defs>
							<clipPath id="clip0_1017_90">
							<rect width="20" height="20" fill="white" transform="translate(8 8)"/>
							</clipPath>
							</defs>
						</svg>
					</a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" role="button">

						<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="36" height="36" rx="5" fill="#BA8C49"/>
							<path d="M18.0001 9.66667C20.2642 9.66667 20.5468 9.67501 21.4351 9.71667C22.3226 9.75834 22.9268 9.89751 23.4584 10.1042C24.0084 10.3158 24.4718 10.6025 24.9351 11.065C25.3588 11.4816 25.6867 11.9855 25.8959 12.5417C26.1018 13.0725 26.2418 13.6775 26.2834 14.565C26.3226 15.4533 26.3334 15.7358 26.3334 18C26.3334 20.2642 26.3251 20.5467 26.2834 21.435C26.2418 22.3225 26.1018 22.9267 25.8959 23.4583C25.6873 24.0148 25.3594 24.5189 24.9351 24.935C24.5184 25.3586 24.0145 25.6865 23.4584 25.8958C22.9276 26.1017 22.3226 26.2417 21.4351 26.2833C20.5468 26.3225 20.2642 26.3333 18.0001 26.3333C15.7359 26.3333 15.4534 26.325 14.5651 26.2833C13.6776 26.2417 13.0734 26.1017 12.5417 25.8958C11.9854 25.6871 11.4814 25.3591 11.0651 24.935C10.6413 24.5185 10.3134 24.0146 10.1042 23.4583C9.89758 22.9275 9.75841 22.3225 9.71675 21.435C9.67758 20.5467 9.66675 20.2642 9.66675 18C9.66675 15.7358 9.67508 15.4533 9.71675 14.565C9.75841 13.6767 9.89758 13.0733 10.1042 12.5417C10.3128 11.9852 10.6408 11.4811 11.0651 11.065C11.4815 10.641 11.9854 10.3131 12.5417 10.1042C13.0734 9.89751 13.6767 9.75834 14.5651 9.71667C15.4534 9.67751 15.7359 9.66667 18.0001 9.66667ZM18.0001 13.8333C16.895 13.8333 15.8352 14.2723 15.0538 15.0537C14.2724 15.8351 13.8334 16.8949 13.8334 18C13.8334 19.1051 14.2724 20.1649 15.0538 20.9463C15.8352 21.7277 16.895 22.1667 18.0001 22.1667C19.1052 22.1667 20.165 21.7277 20.9464 20.9463C21.7278 20.1649 22.1668 19.1051 22.1667 18C22.1668 16.8949 21.7278 15.8351 20.9464 15.0537C20.165 14.2723 19.1052 13.8333 18.0001 13.8333ZM23.4168 13.625C23.4168 13.3487 23.307 13.0838 23.1117 12.8884C22.9163 12.6931 22.6514 12.5833 22.3751 12.5833C22.0988 12.5833 21.8339 12.6931 21.6385 12.8884C21.4432 13.0838 21.3334 13.3487 21.3334 13.625C21.3334 13.9013 21.4432 14.1662 21.6385 14.3616C21.8339 14.5569 22.0988 14.6667 22.3751 14.6667C22.6514 14.6667 22.9163 14.5569 23.1117 14.3616C23.307 14.1662 23.4168 13.9013 23.4168 13.625ZM18.0001 15.5C18.6631 15.5 19.299 15.7634 19.7679 16.2322C20.2367 16.7011 20.5001 17.337 20.5001 18C20.5001 18.663 20.2367 19.2989 19.7679 19.7678C19.299 20.2366 18.6631 20.5 18.0001 20.5C17.337 20.5 16.7012 20.2366 16.2323 19.7678C15.7635 19.2989 15.5001 18.663 15.5001 18C15.5001 17.337 15.7635 16.7011 16.2323 16.2322C16.7012 15.7634 17.337 15.5 18.0001 15.5Z" fill="white"/>
						</svg>
					</a>
					<a href="http://www.twitter.com/intent/tweet?url=<?php the_permalink();?>&via=TWITTER_HANDLE_HERE&text=<?php the_title();?>" role="button">

						<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="36" height="36" rx="5" fill="#BA8C49"/>
							<g clip-path="url(#clip0_1017_118)">
							<path d="M26.4683 12.7133C25.8321 12.9947 25.1574 13.1796 24.4666 13.2617C25.1947 12.8262 25.7397 12.1408 25.9999 11.3333C25.3166 11.74 24.5674 12.025 23.7866 12.1792C23.2621 11.618 22.5669 11.2458 21.8091 11.1205C21.0512 10.9952 20.2732 11.1237 19.596 11.4862C18.9187 11.8487 18.3802 12.4247 18.0642 13.1248C17.7481 13.8249 17.6722 14.6098 17.8483 15.3575C16.4625 15.288 15.1069 14.9279 13.8693 14.3006C12.6318 13.6732 11.54 12.7925 10.6649 11.7158C10.3552 12.2479 10.1924 12.8527 10.1933 13.4683C10.1933 14.6767 10.8083 15.7442 11.7433 16.3692C11.1899 16.3517 10.6488 16.2023 10.1649 15.9333V15.9767C10.1651 16.7814 10.4436 17.5613 10.9531 18.1842C11.4627 18.8071 12.172 19.2346 12.9608 19.3942C12.4471 19.5334 11.9085 19.5539 11.3858 19.4542C11.6081 20.1469 12.0416 20.7527 12.6254 21.1868C13.2092 21.6209 13.9142 21.8615 14.6416 21.875C13.9187 22.4428 13.0909 22.8625 12.2057 23.1101C11.3204 23.3578 10.395 23.4285 9.48242 23.3183C11.0755 24.3429 12.93 24.8868 14.8241 24.885C21.2349 24.885 24.7408 19.5742 24.7408 14.9683C24.7408 14.8183 24.7366 14.6667 24.7299 14.5183C25.4123 14.0251 26.0013 13.4142 26.4691 12.7142L26.4683 12.7133Z" fill="white"/>
							</g>
							<defs>
							<clipPath id="clip0_1017_118">
							<rect width="20" height="20" fill="white" transform="translate(8 8)"/>
							</clipPath>
							</defs>
						</svg>
					</a>
					<a href="#!" role="button">

					<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect width="36" height="36" rx="5" fill="#BA8C49"/>
						<g clip-path="url(#clip0_1017_132)">
						<path d="M22.7141 20.3567L21.5357 19.1783L22.7141 18C23.0236 17.6905 23.2691 17.323 23.4367 16.9186C23.6042 16.5141 23.6904 16.0807 23.6904 15.6429C23.6904 15.2052 23.6042 14.7717 23.4367 14.3673C23.2691 13.9628 23.0236 13.5954 22.7141 13.2858C22.4045 12.9763 22.037 12.7308 21.6326 12.5632C21.2282 12.3957 20.7947 12.3095 20.357 12.3095C19.9192 12.3095 19.4858 12.3957 19.0813 12.5632C18.6769 12.7308 18.3094 12.9763 17.9999 13.2858L16.8216 14.4642L15.6432 13.2858L16.8216 12.1075C17.7618 11.1824 19.0295 10.6664 20.3485 10.6717C21.6676 10.6771 22.931 11.2035 23.8637 12.1362C24.7964 13.0689 25.3228 14.3323 25.3281 15.6513C25.3335 16.9704 24.8175 18.2381 23.8924 19.1783L22.7141 20.3567ZM20.3566 22.7142L19.1782 23.8925C18.7153 24.363 18.1638 24.7372 17.5556 24.9935C16.9474 25.2498 16.2944 25.3831 15.6344 25.3858C14.9743 25.3885 14.3203 25.2605 13.71 25.0092C13.0997 24.7578 12.5452 24.3881 12.0785 23.9214C11.6118 23.4547 11.2421 22.9002 10.9907 22.2899C10.7394 21.6796 10.6114 21.0255 10.6141 20.3655C10.6167 19.7055 10.7501 19.0525 11.0064 18.4443C11.2627 17.836 11.6369 17.2846 12.1074 16.8217L13.2857 15.6433L14.4641 16.8217L13.2857 18C12.9762 18.3095 12.7306 18.677 12.5631 19.0814C12.3956 19.4859 12.3094 19.9193 12.3094 20.3571C12.3094 20.7948 12.3956 21.2283 12.5631 21.6327C12.7306 22.0372 12.9762 22.4046 13.2857 22.7142C13.5953 23.0237 13.9627 23.2692 14.3672 23.4368C14.7716 23.6043 15.2051 23.6905 15.6428 23.6905C16.0806 23.6905 16.514 23.6043 16.9185 23.4368C17.3229 23.2692 17.6904 23.0237 17.9999 22.7142L19.1782 21.5358L20.3566 22.7142ZM20.3566 14.4642L21.5357 15.6433L15.6432 21.535L14.4641 20.3567L20.3566 14.4642Z" fill="white"/>
						</g>
						<defs>
						<clipPath id="clip0_1017_132">
						<rect width="20" height="20" fill="white" transform="translate(8 8)"/>
						</clipPath>
						</defs>
					</svg>
					</a>













				</div>				
			</div>
		</div>

	
	
	
	</main>
  
</div>



<article class=" block md:flex justify-between max-w-1140px mx-auto mt-12 mb-[100px]" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="md:w-4/6 px-[15px] xl:px-0">
	<div class="post-container entry-content w-full  pr-[15px] rounded-2xl">
		<?php //the_post_thumbnail('full', ['class' => 'h-auto max-w-full featured rounded-lg']);?>
		<?php the_content(); ?>

		<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
		?>


	</div>
    <?php if ( comments_open() || get_comments_number() ) :?>
		<div class="bg-white rounded-2xl p-6  md:p-[50px] mt-[50px]">
		<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>
		</div>
        <?php endif;?>
	</div>

	<div class="w-full px-[15px]  md:w-2/6 md:pl-[25px] mt-5 md:mt-0 lg:pr-0" >
			<h2 class="font-inter font-bold text-sitegray_900 text-2xl border-b border-[#BA8C49] pb-4">Latest Post</h2>

			<div class="mt-8">
				<?php
				$query = new WP_Query( array(
					'post_type'	=>	'post',
					'posts_per_page' => 3,
					'orderby' => 'date',
					'order'   => 'DESC',
					'suppress_filters' => true,
					'post__not_in' => array (get_the_ID()),
					'category__in' => wp_get_post_categories(get_the_ID()),
				) );
				if ( $query->have_posts() ) :  
				?>

<?php
			
			while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class=" bg-white p-5 mb-5 rounded-2xl	 ">
                <a href="<?php the_permalink();?>">

                    <?php the_post_thumbnail('blog-img', ['class' => 'w-full rounded-xl']); ?>

                </a>
                <div class="relative mt-6 post_cont">
					<div class=" px-3">
						<a href="<?php the_permalink();?>" target="_self" area-label="Feature Image">
							<h5 class="text-[#18181B] text-2xl font-inter font-bold mb-4">
								<!-- <?php the_title();?> -->
                                <?php echo wp_trim_words( get_the_title(), 8 ); ?>
							</h5>
						</a>
						<p class="mb-5 font-inter text-base font-normal text-[#52525B] mb-5">
							<?php	echo wp_trim_words( get_the_content(), 8, '....' );?>
						</p>

						<a class="font-inter text-base font-semibold text-[#BA8C49] inline-block border-b border-[#BA8C49] pb-[2px] mb-3" href="<?php the_permalink();?>">Read More</a>

							
						

					</div>
                    
                </div>
            </div>

            <?php endwhile;?>
			<?php endif; ?>
			</div>
			
	</div>





</article>


