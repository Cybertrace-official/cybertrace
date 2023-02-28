

<section class="scam_detector bg-black px-[15px] pt-[80px] pb-[77px] xl:px-0" style="background-image: url( 'https://www.cybertrace.com.au/wp-content/uploads/2023/02/freeScamDetector.png' ); background-size:cover; background-repeat:no-repeat;">
    <div class="max-w-[1920px] px-5 xl:px-[120px] mx-auto">
        <div class="form__wrapper text-center">
            <h2 class="text-[35px] md:text-[42px] lg:text-[48px] text-white font-roboto2 leading-[60px] font-bold">
                <?php the_field( 'fsd_heading' ); ?>
            </h2>

            <h3 class="text-xl md:text-2xl lg:text-[28px] text-white font-roboto2 leading-8 font-normal mt-4 mb-[38px]">
                <?php the_field( 'fsd_sub_heading' ); ?>
            </h3>

            <div class="fsd__form max-w-[870px] mx-auto">
               
                <form>  
                    <div class="relative">
                        <input type="url" id="default-search" class="block w-full p-[18px] text-base rounded outline-0" placeholder="" required>

                        <!-- <button type="submit" class="text-white font-roboto text-xl leading-[26px] bg-gold rounded font-medium w-[182px] h-[48px] absolute right-[6px] bottom-[6px] uppercase">Check Website</button> -->

                        <a href="https://www.cybertrace.com.au/scamsleuth/" class="text-white font-roboto text-xl leading-[26px] bg-gold mt-4 md:mt-0 rounded font-medium inline-flex items-center justify-center w-[182px] h-[48px] md:absolute md:right-[6px] md:bottom-[6px] uppercase">Check Website</a>
                    </div>
                </form>

            </div>

            <p class="text-xl leading-6 text-white font-normal font-roboto2 mt-5">
                <?php the_field( 'fsd_description' ); ?>
            </p>
        </div>
    </div>
</section>