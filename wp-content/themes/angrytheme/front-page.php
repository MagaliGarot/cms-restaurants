<?php get_header(); ?>

<body style="background-color:#F5F5F5;">

<div class="headerpicture">
<img src="<?php echo get_field('banner_image')['url']; ?>" class="black" alt="header">
</div>

<div class="block px-5 py-3">
<p class="block__maintitle"><?php echo get_field('banner_subtitle'); ?>
<span><?php echo get_field('banner_main_title'); ?></span></p>
<div class="block__mainlink">
<p><a class="liner text-white ml-5" href="<?php echo get_field('banner_link')['url']; ?>"><?php echo get_field('banner_link')['title']; ?></a></p>
</div>   
</div>

<div class="grey-hatching"></div>

<!-- FIN HEADER SANDRINE -->

<section class="qualities wrapper d-flex flex-column align-items-center flex-lg-row justify-content-lg-between">

    <div class="qualities__quality text-center d-md-flex flex-row align-items-center justify-content-between flex-lg-column">

        <div class="qualities__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/quality-food.svg" />
        </div>

        <div class="qualities__text">
            <p><?php echo get_field('qualities_title_one') ?></p>
            <p class="qualities__subtext"><?php echo get_field('qualities_text_one') ?></p>
        </div>

    </div>

    <div class="qualities__quality text-center d-md-flex flex-row align-items-center justify-content-between flex-lg-column">

        <div class="qualities__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/fastest-delivery.svg" />
            
        </div>
        
        <div class="qualities__text">
            <p>FASTEST DELIVERY</p>
            <p class="qualities__subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae neque rem dolor ex a?</p>
        </div>

    </div>

    <div class="qualities__quality text-center d-md-flex flex-row align-items-center justify-content-between flex-lg-column">

        <div class="qualities__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/original-recipes.svg" />
        </div>
        
        <div class="qualities__text">
            <p>ORIGINAL RECIPES</p>
            <p class="qualities__subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae neque rem dolor ex a?</p>
        </div>

    </div>

</section>

<section class="story wrapper">

    <div class="story__image">
        <img src="<?php echo get_field('intro_chef_image')['url'] ?>">
    </div>

    <div class="story__text">
        <h3><?php echo get_field('intro_title') ?><h3>
        <h2><?php echo get_field('intro_main_title') ?></h2>
        <h4><?php echo get_field('intro_subtitle') ?></h4>

        <?php echo get_field('intro_text') ?>
        
        <h4><?php echo get_field('intro_signature_title') ?></h4>
        <div class="signature"><?php echo get_field('intro_signature') ?></div>

    </div>

</section>

<section class="restaurants">
    <div class="wrapper">

        <div class="restaurants__head">
            <h3 class="text-center">Discover our franchise</h3>
            <h2 class="text-center">OUR RESTAURANTS</h2>
        </div>

        <?php 
        
        // Check rows exists.
        if( have_rows('restaurants_restaurant') ):

            $count = 1;
            // Loop through rows.
            while( have_rows('restaurants_restaurant') ) : the_row();

                $countRemain = $count % 2;
                // Load sub field value.
                $image_url = get_sub_field('image')['url'];
                $subtitle = get_sub_field('subtitle');
                $title = get_sub_field('title');
                $text = get_sub_field('text');
                $link_url = get_sub_field('link')['url'];
                $link_text = get_sub_field('link')['title'];
                
        ?>

            <div class="restaurant <?php 
                if($countRemain == 0){echo 'restaurant-left';} else{echo 'restaurant-right';}
                $count++;
             ?> d-flex flex-column">

            <div class="restaurant__image">
                <img src="<?php echo $image_url ?>">
            </div>
            <div class="restaurant__text text-center d-flex flex-column align-items-center">
                <h4><?php echo $subtitle ?></h4>
                <h3><?php echo $title ?></h3>
                <p><?php echo $text ?></p>
                <a href="<?php echo $link_url ?>"><?php echo $link_text ?></a>
            </div>

            </div>
        
        <?php

            // End loop.
            endwhile;
        endif;
        
        
        ?>

    </div>
</section>

<?php get_template_part('parts/food') ?>

<section class="quote text-center d-lg-flex align-items-lg-center">
    <div class="quote__wrap d-flex flex-column align-items-center">

        <!-- Slider main container -->
        <div class="swiper-container ">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php

                    // Check rows exists.
                    if( have_rows('testimony_testimonies') ):

                        // Loop through rows.
                        while( have_rows('testimony_testimonies') ) : the_row();

                            // Load sub field value.
                            $text = get_sub_field('text');
                            $author = get_sub_field('author');
                            
                ?>

                <div class="swiper-slide">
                    <div class="quote__text">
                        <p><i class="fas fa-quote-right"></i></p>
                        <p><?php echo $text; ?></p>
                    </div>

                    <div class="quote__author">
                        - <?php echo $author; ?>
                    </div>
                </div>

                <?php
                        // End loop.
                        endwhile;
                    endif;
                ?>    
                
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

        </div>
        
    </div>
    <div class="quote__image">
        <img src="<?php echo get_field('testimony_image')['url']; ?>">
    </div> 

</section>


<?php get_template_part('parts/latest') ?>


<?php get_footer(); ?>