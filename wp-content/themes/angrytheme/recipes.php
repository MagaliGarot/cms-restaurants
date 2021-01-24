<?php
    /*
    Template Name: Recipes
    Template Post Type: page
    */
?>
<?php get_header(); ?>
<body style="background-color:#F5F5F5;"> 

<div class="headerpicture">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/resto1.jpg" alt="header" class="black">
</div>

<div class="block px-5 py-3">
<p class="block__maintitle">The Chef's selection
<span>Recipes blog</span></p>
<div class="block__mainlink">
<p><a class="liner text-white ml-5" href="#"> check our menu </a></p>
</div>   
</div>

<div class="grey-hatching"></div>



<section class="articles">
    <div class="articles__wrapper">

    <div class="groups mb-5"> 
        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/cutelry.svg" class="cutelry"> original dev's restaurant</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/cutelry.svg" class="cutelry"> local food</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/cutelry.svg" class="cutelry"> spicy</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/cutelry.svg" class="cutelry"> latino</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/cutelry.svg" class="cutelry"> italian</p>
    </div>
    
    
    <?php 
    $args = array(
        'post_type'         => 'post',
        'posts_per_page'    => 6
    );
    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) {

        
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<div class="entries">';

                echo '<div class="recipe-container">';
                echo '<div class="recipe-content m-5">';

                echo '<p class="entries__time">';
                //ICON TIME
                echo '<i class="far fa-clock pe-2">' . '</i>';
                //DATE
                echo the_time( get_option( 'date_format' ) );
                echo '</p>';

                echo '<p class="entries__tag">';
                //USTENSILE
                echo '<img class="cutelry" src="' . get_template_directory_uri() . '/assets/svg/cutelry.svg">'; 
                //CATEGORY
                echo the_category( 'text' ); 
                echo '</p>';
                echo  '<h4>' . get_the_title() . '</h4>';
                echo '<p class="entries__desc">' . get_field('subtitle') . '</p>';
                //READ MORE
                echo '<div class="readmore">';
                echo '<a href="' . get_permalink() . '">' . 'Read More' . '</a>';
                echo '</div>';
                echo '</div>';
                echo '<div class="recipe-img>';
                //PICTURE
                echo '<img class="entries__img" src=" ' . $value["image_article"]["url"] . '">'; 
                echo '<div>' . the_post_thumbnail('large', ['class' => 'card-img-top', 'alt' => '', 'style'=> 'height:300px;object-fit:cover;']) . '</div>';
                echo '</div>';
                echo '</div>';

                echo '</div>';
            }
        
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>




    <!-- END WRAPPER -->
    </div>
</section>



<?php get_template_part('parts/food') ?>






<?php get_footer(); ?>