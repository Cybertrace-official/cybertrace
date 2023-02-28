<section class="takedown_ser px-15px py-85px xl:px-0">
    <div class="max-w-1140px mx-auto">
        <div class="vc max-w-3xl mx-auto bg-black px-25px py-10 text-center">
            <h2 class="text-4xl text-golden font-roboto font-semibold mb-8">Are You a Victim of Website Cloning or a Scam?</h2>

            <p class="text-white text-base font-nunito">Website cloning is the process of creating a replica of your existing website design,
                content or both by an unauthorized third-party. Website cloning is usually for malicious
                purposes including phishing or by a competitor to steal your clients using your brands good reputation.
                This is a genuine concern for many brands and can result in loss of revenue, reputation and trust.
            </p>

            <div class="text-center">

                <?php $victims_button = get_field( 'victims_button' ); ?>

                <?php if( $victims_button ) : ?>
                    <a  href="<?php echo esc_url( $victims_button['url'] ) ?>" aria-label="Contact us" target="_self" class="text-base font-nunito font-medium tracking-wider capitalize bg-golden text-black px-8 py-3 inline-flex items-center justify-center mt-10 border border-golden rounded-full hover:bg-transparent hover:border hover:border-golden hover:text-golden">
                        <?php echo esc_html( $victims_button['title'] ); ?>
                    </a>
                <?php endif; ?>

            </div>

        </div>
    </div>
</section>