<section class="py-85px px-15px lg:px-5 xl:px-0">
    <div class="max-w-1140px mx-auto">

        <div class="media-wrapper md:grid md:grid-flow-row md:grid-cols-2 md:gap-6">
            <?php if ( have_rows( 'members' ) ) : ?>
                <?php while( have_rows( 'members' ) ) : the_row(); 
						$member_image = get_sub_field( 'member_image' );
						$description = get_sub_field( 'description' );
			?>

            <div class="relative p-3 md:p-45px border rounded-md shadow text-center mb-5">
                <img class="mx-auto" src="<?php echo $member_image;?>" alt="dan" />      
                <h3 class="text-xl md:text-2xl font-semibold text-black font-roboto mt-4">
					<?php echo $description;?>
				</h3>
            </div>
			
                <?php endwhile; ?>    
            <?php endif ?>    
        </div>
    </div>
</section>