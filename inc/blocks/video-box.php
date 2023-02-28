
<section class="px-15px xl:px-0">
    <div class="max-w-1140px mx-auto">

    <h2 class="text-4xl text-black text-center font-roboto font-semibold uppercase mb-12">
		<?php the_field('video_box_title');?>
	</h2>

        <div class="video-wrapper flex justify-center">

            <iframe width="885" height="496" 
                src="https://www.youtube.com/embed/<?php the_field('video_id');?>" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
			</iframe>
      
        </div>


    </div>
</section>