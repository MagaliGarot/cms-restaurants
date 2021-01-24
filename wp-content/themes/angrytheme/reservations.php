<?php
    /*
    Template Name: Reservations
    Template Post Type: page
    */
?>

<?php get_header(); ?>
<!-- START HEADER -->
 <body> 

    <div class="headerpicture">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resto1.jpg" alt="header" class="black">
    </div>

    <div class="block px-5 py-3">
            <p class="block__maintitle">
            Our original restaurant
            <span>The Chef's selection</span></p>
        <div class="block__mainlink">
            <p><a class="liner text-white ml-5" href="#"> check our menu </a></p>
        </div>   
    </div>

    <div class="grey-hatching"></div>
    <!-- END HEADER -->
<div class="backgroundGray">

    <div class="containerReserv">
        <h4 class="welcome"><?php the_field('titreone'); ?></h4>
        <h3 class="presentation"><?php the_field('titretwo'); ?></h3>


        <!--  PART ONE CARD : ORIGINAL RESTAURANT   -->
        <div class="originalRest">
            
                <?php 
                        $values = get_field('articlesres');
                        // var_dump($values);
                        if($values){
                        
                            foreach($values as $value){
                                // var_dump($value);
                                // var_dump($value)["picture"];
                                echo '<div class="originalRest__One">';
                                //PICTURE
                                echo '<div class="originalRest__box">';
                                echo '<img class="originalRest__pictureOne" src="'. $value["picturearticle"]["url"] . '">';
                                echo '</div>';

                                // TITLE
                                echo '<div class="originalRest__boxOne">';
                                echo '<h4 class="originalRest__title4">' . $value['titlearticle'] . '</h4>';
                                echo '<h3 class="originalRest__title3">' . $value['subtitle'] . '</h3>';
                                echo '<p class="originalRest__para">' . $value['textearticle'] . '</p>';
                                echo '</div>';

                                echo '</div>';
                            }
                        
                        }
                        ?>
        </div>       
    </div>  
</div>  

    <div class="containerBottom">
        <!--  LOCATION MAP   -->
          <!-- EFFECT -->
          <img class="effect" src="<?php echo get_template_directory_uri(); ?>/assets/images/hachures-blanches-180.png">

        <div class="locationMap">
            <h4 class="locationMap__title4">Find Us</h4>
            <h3 class="locationMap__title3">Location</h3>
            <div class="locationMap__openstreetmap">
                <?php the_field('map'); ?>
            </div>
            <!-- " -->
        </div>

        <div class="flexBottom">
            <!--  RESERVE TABLE   -->
            <div class="reserveTable">
                <h4 class="text-center reserveTable__Submit">Submit Information to Place Order</h4>
                <h3 class="text-center reserveTable__Reserve">RESERVE A TABLE</h3>
                <!-- PICTURE FISH FOOD-->
                <div class="reserveTable__pictureDesk" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/seafood-pixabay.jpg)" alt="restaurant">
                </div>
                <img class="reserveTable__picturePhone" src="<?php echo get_template_directory_uri(); ?>/assets/images/seafood-pixabay.jpg" alt="fish" />
            </div>

            <div class="formSmartPhone">
            <?php echo do_shortcode('[formidable id="4"]');?>
            </div>

            <div class="formTabletteDesk">
            <?php echo do_shortcode('[formidable id="5"]');?>
            </div>
        </div>

<!--  DISCOVER OUR MENU  -->
        <?php get_template_part('parts/food') ?>


<!--  Latest updated RECIPES BLOG  -->
    <?php get_template_part('parts/latest') ?>



<?php get_footer(); ?>

