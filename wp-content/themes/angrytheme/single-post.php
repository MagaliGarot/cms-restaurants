<?php get_header(); ?>
<!-- HEADER HTML -->
<body>
<div class="white-hatching"></div>
<!-- END HEADER HTML -->

<!-- ARTICLES DE CUISINES -->
<div class="containerArticle">
    <?php if( have_posts() ): while( have_posts()) : the_post(); ?>

    <!-- RETOUR DATE -->
    <div class="bandeau">
        <p class="bandeau__retour">
        <a class="bandeau__retour__link" href="http://localhost/cms-restaurants/index.php/recipes/">
            ← &nbsp; &nbsp;Retour 
        </a>
        </p>
        <p class="bandeau__date">
        <?php the_time( get_option( 'date_format' ) ); ?>
        </p>
    
        <a class="utensilscontainer">
        <img class="utensilsPicture" src="<?php echo get_template_directory_uri(); ?>/assets/svg/cutelry-white.svg">
        <?php the_category() ?>
        </a>
      
    </div>
  
    <!-- TITLE ARTICLE -->
        <h1 class="article__Title"><?php the_title() ?></h1>
    
        <?php endwhile; endif; ?>  
 
    <!-- ACF CHAMPS -->
    <?php if( have_posts() ): while( have_posts()) : the_post(); ?>


        <div class="review">
            <!-- SUBTILE ARTICLE -->
            <h3 class="article__subtile"><?php the_field('subtitle'); ?></h3>
        </div>    

             <!-- PICTURE ARTICLE -->
            <img class="article__Picture" src="<?php echo get_field('image_article')['url']; ?>">

  

    <div class="flexDesktop">     
            <!-- LINK ARTICLE -->
            <div class="link">
                <a class="facebook" href="<?php the_field('facebook'); ?>">
                    <i class="fab fa-facebook-square iconarticle fb">
                    </i>
                </a>

                <a class="twitter" href="<?php the_field('twitter'); ?>">
                    <i class="fab fa-twitter-square iconarticle twit">
                    </i>
                </a>

                <a class="instagram" href="<?php the_field('instagram'); ?>">
                    <i class="fab fa-instagram-square iconarticle insta">
                    </i>
                </a>

                <a class="email" href="<?php the_field('email'); ?>">
                    <i class="fas fa-envelope-square iconarticle email">
                    </i>
                </a>
            </div>
            <!-- INGREDIENT ARTICLE -->
            <div class="ingredient">
                <h4 class="ingredient__title"><?php the_field('title_ingredient'); ?></h4>
                <p class="ingredient__text"><?php echo "<br/>". get_field("ingredients") . "<br/>"; ?></p>
            </div>
    </div>   

              <!-- INSTRUCTIONS ARTICLE -->
              <div class="instructions">
                <h4 class="instructions__title"><?php the_field('title_instructions'); ?></h4>
                <?php 
                $values = get_field('instructions');
                // var_dump($values);
                if($values){
                    echo '<ol class="instructions__number">';

                    foreach($values as $value){
                        // var_dump($value);
                        echo '<li class="instructions__liste">' . $value['instruction'] . '</li>';
                        // var_dump($value)["picture"];
                        echo '<img class="instructions__picture" src="'. $value["picture"]["url"] . '">';
                        // rajouter des corchets avec ce qu'il faut mettre entre crochet
                    }
                    
                    echo '</ol>';
                }
                ?>
            </div>
           
        </div>

        <!-- ICON SMARPHONE TABLETTE -->
        <div class="linkSmart">
                <a class="facebook" href="<?php the_field('facebook'); ?>">
                    <i class="fab fa-facebook-square iconarticle fb">
                    </i>
                </a>

                <a class="twitter" href="<?php the_field('twitter'); ?>">
                    <i class="fab fa-twitter-square iconarticle twit">
                    </i>
                </a>

                <a class="instagram" href="<?php the_field('instagram'); ?>">
                    <i class="fab fa-instagram-square iconarticle insta">
                    </i>
                </a>

                <a class="email" href="<?php the_field('email'); ?>">
                    <i class="fas fa-envelope-square iconarticle email">
                    </i>
                </a>
            </div>
            <?php endwhile; endif; ?>  
</div>

<!-- Permet d'afficher toutes les catégories
<!-- <?php wp_list_categories( ['hide_empty=0' , 'title_li' => ''] ); ?> -->

          

<?php get_footer(); ?>

          




