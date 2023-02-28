
<section class="px-15px py-85px xl:px-0">

    <div class="max-w-1140px mx-auto bg-black">

    <div class="px-5 py-8 text-center md:text-left md:p-10 md:flex md:items-center">

        <div class="md:mr-20 md:w-3/5">   
            <h2 class="text-[28px] md:text-4xl text-golden font-roboto font-bold uppercase text-center mb-12">
				<?php the_field('icb_title');?>
			</h2>
            <div class="text-white">
				<?php the_field('icb_content');?>
			</div>
        </div>

		<?php $icb_image	=	get_field('icb_image');?>
        
        <div class="max-w-sm mx-auto md:m-auto md:w-2/5">
            <img class="check-img-width w-full max-w-[360px]" src="<?php echo $icb_image['url'];?>" alt="">
        </div>

    </div>

</section>
