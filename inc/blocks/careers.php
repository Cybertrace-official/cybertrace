<?php 

    $id = 'careers-content-' . $block['id']; 
    $classes = $block['className'];
    $classes .= ' about-sec ';

?>


<section id="<?php echo esc_attr( $id ); ?>"  class="py-85px px-15px xl:px-0">
    <div class="max-w-1140px mx-auto">
        <div class="careers-inner text-center">
            <p class="text-lg text-black font-roboto font-medium"><?php the_field( 'c_sub_heading' ); ?></p>
            <h2 class="text-3xl text-black font-roboto font-bold my-8 md:text-4xl md:mt-12 md:mb-10"><?php the_field( 'c_heading' ); ?></h2>
            <p class="text-lg text-black font-roboto font-medium"><?php the_field( 'description' ); ?></p>
        </div>
    </div>
</section>