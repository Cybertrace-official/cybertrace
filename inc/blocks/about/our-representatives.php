<section class="py-85px px-15px lg:px-5 xl:px-0">
    <div class="max-w-1140px mx-auto">

        <h2 class="text-2xl md:text-6xl text-center font-roboto font-bold"><?php the_field('or_heading');?></h2>

        <div class="main-wrapper md:flex md:justify-center md:gap-7 mt-12">


			<?php
				if( have_rows('our_representatives') ):
					while( have_rows('our_representatives') ) : the_row();
					$or_name				=	 get_sub_field('or_name');
					$or_image				=	 get_sub_field('or_image');
					$or_designation			=	 get_sub_field('or_designation');
					$or_about_information	=	 get_sub_field('or_about_information');

			?>
            <div class="our-rep w-full relative bg-black rounded-2xl px-5 py-10 lg:p-45px mb-5 text-center md:text-left md:mb-0 md:w-3/6 md:flex md:items-center">

                <div class="image-wrap relativ">
                    <img class="rounded-full mx-auto w-32 h-32 object-cover" src="<?php echo $or_image;?>" alt="dan" />
                </div>
           
                <div class="md:ml-8">
                    <h3 class="text-xl lg:text-3xl font-semibold text-gold font-roboto mb-2 mt-8 md:mt-0"><?php echo $or_name;?></h3>
                    <h4 class="text-base lg:text-xl font-medium text-white font-nunito"><?php echo $or_designation;?></h4>
                </div>

                <div class="dan-description shadow absolute left-0 -top-[498px] bg-gold p-4 md:p-45px rounded-2xl z-30">
					<div class="text-white text-base font-nunito">
						<?php echo $or_about_information;?>
					</div>
					
                </div>

            </div>
			
			
			<?php
				endwhile;
				else :
				endif;
			?>
		

        </div>
    </div>
</section>