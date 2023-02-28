<?php 
	$iframe_cyber_crypto	=	get_field('iframe_cyber_crypto');
	$text_with_iframe	=	get_field('text_with_iframe');

?>
<section class="px-15px py-85px xl:px-0">
    <div class="max-w-1140px mx-auto">
        <div class="ctce-content-wrapper md:flex md:justify-between">

            <div class="ctce-box mr-4">
               <?php echo $iframe_cyber_crypto;?>
            </div>

            <div class="text-center md:text-left mt-6 md:mt-0">
				<?php echo $text_with_iframe;?>
			</div>
        </div>
    </div>
</section>