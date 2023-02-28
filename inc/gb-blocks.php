<?php

add_action("acf/init", "cybertrace_acf_block");

function cybertrace_acf_block()
{
    if (function_exists("cybertrace_acf_block")) {
        // Hero Slider

        acf_register_block_type([
            "name" => __("Hero Slider"),

            "title" => __("Hero Slider"),

            "description" => __("Hero slider on home page"),

            "render_template" => "inc/blocks/hero-slider.php",

            "category" => "Cybertrace",

            "icon" => "block-default",

            "keywords" => ["Cybertrace", "slider"],
        ]);

        // Download Brochure

        acf_register_block_type([
            "name" => __("Download Brochure"),

            "title" => __("Download Brochure"),

            "description" => __(""),

            "render_template" => "inc/blocks/brochure.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "brochure"],
        ]);

        // Services

        acf_register_block_type([
            "name" => __("Our Services"),

            "title" => __("Our Services"),

            "description" => __(""),

            "render_template" => "inc/blocks/our-services.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "services"],
        ]);

        // Our Process

        acf_register_block_type([
            "name" => __("Our Process"),

            "title" => __("Our Process"),

            "description" => __(""),

            "render_template" => "inc/blocks/processes.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "process"],
        ]);

        // Wh oWe Are

        acf_register_block_type([
            "name" => __("Who We Are"),

            "title" => __("Who We Are"),

            "description" => __(""),

            "render_template" => "inc/blocks/whoWeAre.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", ""],
        ]);

        // Cyber Types

        acf_register_block_type([
            "name" => __("Cyber Types"),

            "title" => __("Cyber Types"),

            "description" => __(""),

            "render_template" => "inc/blocks/cyber-types.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", ""],
        ]);

        // Cyber Types

        acf_register_block_type([
            "name" => __("Why Choose Us"),

            "title" => __("Why Choose Us"),

            "description" => __(""),

            "render_template" => "inc/blocks/why-choose.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", ""],
        ]);

        // Our Partners

        acf_register_block_type([
            "name" => __("Our Partners"),

            "title" => __("Our Partners"),

            "description" => __(""),

            "render_template" => "inc/blocks/our-partners-slider.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", ""],
        ]);

        // General Hero section

        acf_register_block_type([
            "name" => __("Gen Hero"),

            "title" => __("Gen Hero"),

            "description" => __(""),

            "render_template" => "inc/blocks/gen-hero.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", ""],
        ]);

        // Contact Page Blocks

        // Contact CTA

        acf_register_block_type([
            "name" => __("Contact CTA"),

            "title" => __("Contact CTA"),

            "description" => __(""),

            "render_template" => "inc/blocks/contact/contact-cta.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", ""],
        ]);



        // Theme Shortcode

        acf_register_block_type([
            "name" => __("Theme Shortcode"),

            "title" => __("Theme Shortcode"),

            "description" => __(""),

            "render_template" => "inc/blocks/theme-shortcode.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", ""],
        ]);


        acf_register_block_type([
            "name" => __("Black Box"),

            "title" => __("Black Box"),

            "description" => __(""),

            "render_template" => "inc/blocks/black-box.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", ""],
        ]);

        acf_register_block_type([
            "name" => __("Provider Section"),

            "title" => __("Provider Section"),

            "description" => __(""),

            "render_template" => "inc/blocks/provider-section.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", ""],
        ]);



        acf_register_block_type([
            "name" => __("Iframe and Text"),

            "title" => __("Iframe and Text"),

            "description" => __(""),

            "render_template" => "inc/blocks/iframe_text.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", ""],
        ]);


		acf_register_block_type([
            "name" => __("Black Grid Boxes"),

            "title" => __("Black Grid Boxes"),

            "description" => __(""),

            "render_template" => "inc/blocks/black-grid-boxes.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", ""],
        ]);

        acf_register_block_type([

            "name" => __("Image Content Box"),

            "title" => __("Image Content Box"),

            "description" => __(""),

            "render_template" => "inc/blocks/img-content-box.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", ""],
        ]);

        // YouTube Video

        acf_register_block_type([

            "name" => __("Video Box"),

            "title" => __("Video Box"),

            "description" => __(""),

            "render_template" => "inc/blocks/video-box.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "video box"],
        ]);

        // white box

        acf_register_block_type([

            "name" => __("White Box"),

            "title" => __("White Box"),

            "description" => __(""),

            "render_template" => "inc/blocks/about/white-box.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "White Box"],
        ]);


        // our representatives

        acf_register_block_type([

            "name" => __("Our Representatives"),

            "title" => __("Our Representatives"),

            "description" => __(""),

            "render_template" => "inc/blocks/about/our-representatives.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "Our Representatives"],
        ]);


        // our representatives

        acf_register_block_type([

            "name" => __("Australian Cryptocurrency"),

            "title" => __("Australian Cryptocurrency"),

            "description" => __(""),

            "render_template" => "inc/blocks/aus-crypto-provider.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "Australian Cryptocurrency"],
        ]);


        // our representatives

        acf_register_block_type([

            "name" => __("License images"),

            "title" => __("License images"),

            "description" => __(""),

            "render_template" => "inc/blocks/license-images.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "License"],
        ]);


        // Media Members

        acf_register_block_type([

            "name" => __("Media Members"),

            "title" => __("Media Members"),

            "description" => __(""),

            "render_template" => "inc/blocks/media/media-members.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "Media"],
        ]);

        // Magazines

        acf_register_block_type([

            "name" => __("Magazine"),

            "title" => __("Magazine"),

            "description" => __(""),

            "render_template" => "inc/blocks/media/magazine.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "Magazine"],
        ]);


        // Content block

        acf_register_block_type([

            "name" => __("content-block"),

            "title" => __("content-block"),

            "description" => __(""),

            "render_template" => "inc/blocks/about/content-block.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "Magazine"],
        ]);


        // Takedown Services

        acf_register_block_type([

            "name" => __("Takedown services"),

            "title" => __("Takedown services"),

            "description" => __(""),

            "render_template" => "inc/blocks/takedown-services.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "Magazine"],
        ]);


        // Victom sec

        acf_register_block_type([

            "name" => __("Victims sec"),

            "title" => __("Victims sec"),

            "description" => __(""),

            "render_template" => "inc/blocks/victims-sec.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "Victims"],
        ]);

        // Careers

        acf_register_block_type([

            "name" => __("Careers"),

            "title" => __("Careers"),

            "description" => __(""),

            "render_template" => "inc/blocks/careers.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "careers"],
        ]);


        // Leak to us

        acf_register_block_type([

            "name" => __("ScamiLeaks"),

            "title" => __("ScamiLeaks"),

            "description" => __(""),

            "render_template" => "inc/blocks/scamiLeaks/scamileaks.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "ScamiLeaks"],
        ]);


        // Why Leak to us

        acf_register_block_type([

            "name" => __("Why Leak to us"),

            "title" => __("Why Leak to us"),

            "description" => __(""),

            "render_template" => "inc/blocks/scamiLeaks/wltu.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", ""],
        ]);
        
		
        // Download

        acf_register_block_type([

            "name" => __("scamiLeaks Downloads"),

            "title" => __("scamiLeaks Downloads"),

            "description" => __(""),

            "render_template" => "inc/blocks/scamiLeaks/sl-downloads.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "Download"],
        ]);

        // Submit your info

        acf_register_block_type([

            "name" => __("Submit Your Info"),

            "title" => __("Submit Your Info"),

            "description" => __(""),

            "render_template" => "inc/blocks/scamiLeaks/syi.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "Submit Your Info"],
        ]);

        // Google Form

        acf_register_block_type([

            "name" => __("Google Form"),

            "title" => __("Google Form"),

            "description" => __(""),

            "render_template" => "inc/blocks/contactFormPage/google-form.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "Google Form"],
        ]);


        // Site information

        acf_register_block_type([

            "name" => __("Site Information"),

            "title" => __("Site Information"),

            "description" => __(""),

            "render_template" => "inc/blocks/contactFormPage/site-information.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "Site Information"],
        ]);

        // Banner

        acf_register_block_type([

            "name" => __("Site Banner"),

            "title" => __("Site Banner"),

            "description" => __(""),

            "render_template" => "inc/blocks/site-banner.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "Site Banner"],
        ]);
		
		  // Home TOP Media

         acf_register_block_type([

            "name" => __("Home Top Media"),

            "title" => __("Home Top Media"),

            "description" => __(""),

            "render_template" => "inc/blocks/home/home-media.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "Home Top Media"],
        ]);

         // Home TOP BLOGS

         acf_register_block_type([

            "name" => __("Home Top Blogs"),

            "title" => __("Home Top Blogs"),

            "description" => __(""),

            "render_template" => "inc/blocks/home/home-blog.php",

            "category" => "cybertrace",

            "icon" => "block-default",

            "keywords" => ["cybertrace", "Home Top Blogs"],
        ]); 


        // Featured Blog

        acf_register_block_type([

        "name" => __("Featured Blogs"),

        "title" => __("Featured Blogs"),

        "description" => __(""),

        "render_template" => "inc/blocks/home/featured-blogs.php",

        "category" => "cybertrace",

        "icon" => "block-default",

        "keywords" => ["cybertrace", "Featured Blogs"],
    ]); 

    // Contact Us CTA
    acf_register_block_type([

        "name" => __("Contact Us CTA"),

        "title" => __("Contact Us CTA"),

        "description" => __(""),

        "render_template" => "inc/blocks/home/cs-cta.php",

        "category" => "cybertrace",

        "icon" => "block-default",

        "keywords" => ["cybertrace", "Contact Us CTA"],
    ]); 

    // Gen Hero Image

    acf_register_block_type([

        "name" => __("Gen Hero Image"),

        "title" => __("Gen Hero Image"),

        "description" => __(""),

        "render_template" => "inc/blocks/gen-hero-section.php",

        "category" => "cybertrace",

        "icon" => "block-default",

        "keywords" => ["cybertrace", "Gen Hero Image"],
    ]); 

    // Scam Detector

    acf_register_block_type([

        "name" => __("Scam Detector"),

        "title" => __("Scam Detector"),

        "description" => __(""),

        "render_template" => "inc/blocks/home/scam-detector.php",

        "category" => "cybertrace",

        "icon" => "block-default",

        "keywords" => ["cybertrace", "Scam Detector"],
    ]); 
    
    // Home Services

    acf_register_block_type([

        "name" => __("Home Services"),

        "title" => __("Home Services"),

        "description" => __(""),

        "render_template" => "inc/blocks/home/home-services.php",

        "category" => "cybertrace",

        "icon" => "block-default",

        "keywords" => ["cybertrace", "Home Services"],
    ]); 



    }
}

?>
