
<section class="pt-85px px-15px xl:px-0">
    <div class="max-w-1140px mx-auto">
        <p class="text-15px font-nunito font-normal text-black max-w-750px text-center mx-auto">
			<?php the_field('white_box_content');?>
		</p>

        <div class="text-center">
            	<?php 
					$white_box_button	=	get_field('white_box_button');
					if($white_box_button):
				?>
                <a href="<?php echo esc_url( $white_box_button['url']);?>" aria-label="Contact us" target="_self" class="inline-block text-black text-15px font-medium bg-darkGold rounded-full py-3 px-10 uppercase mt-20"><?php echo $white_box_button['title'];?></a>
           		<?php endif;?>
        </div>
    </div>
</section>