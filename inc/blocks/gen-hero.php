<?php
global $hide_title;

$gen_hero_width = "max-w-1140px";

if ($hide_title === true) {
    $gen_hero_width = "w-full";

?>
    <style>
        .entry-content .genHero {
            max-width: 100% !important;
        }
    </style>

<?php
}
?>

<section class="genHero bg-gold pt-16 pb-16 px-5 xl:px-0">
    <div class="<?php echo $gen_hero_width; ?> mx-auto text-center py-4">
        <h1 class="text-4xl md:text-5xl lg:text-6xl text-black font-roboto font-black"><?php the_field('gen_hero_title'); ?></h1>

        <?php $gen_hero_description = get_field('gen_hero_description'); ?>

        <?php if ($gen_hero_description) : ?>
            <p class="text-xl mt-4 text-black max-w-[800px] mx-auto font-nunito"><?php the_field('gen_hero_description'); ?></p>
        <?php endif; ?>

    </div>
</section>