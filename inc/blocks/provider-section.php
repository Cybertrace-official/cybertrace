<?php
	$provider_first_box			=	get_field('provider_first_box');
	$provider_second_box_text	=	get_field('provider_second_box_text');
	$provider_box_with_heading	=	get_field('provider_box_with_heading');

?>

<section class="px-15px py-85px xl:px-0 bg-black">
    <div class="max-w-1140px mx-auto">

        <div class="ct-provider md:grid md:grid-flow-row md:grid-cols-2 md:gap-6">
            <div class="ct-heading bg-golden px-3 md:px-25px py-10 text-center">
                <h6 class="text-4xl text-black font-nunito">
					<?php echo $provider_first_box;?>
				</h6>
            </div>

            <div class="ct-content bg-golden px-3 md:px-25px py-10 mt-5 md:mt-0 text-center">
                <p class="text-base text-black font-nunito">
					<?php echo $provider_second_box_text;?>
				</p>
            </div>
        </div>


        <!-- Cyber Criminal -->

        <div class="cyber_crimimal bg-golden py-8 px-3 md:px-6 text-center mt-16 ">
			<?php echo $provider_box_with_heading;?>
        </div>

    </div>
</section>