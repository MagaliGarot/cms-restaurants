<?php
    /*
    Template Name: Menu
    Template Post Type: page
    */
?>
<?php get_header(); ?>

<body style="background-color:#FFF;">

<div class="headerpicture">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-lg.jpg" class="black" alt="header">
</div>

<div class="block px-5 py-3">
<p class="block__maintitle">Let's find out
<span>The menu</span></p>
<div class="block__mainlink">
<p><a class="liner text-white ml-5" href="#">Order online </a></p>
</div>   
</div>

<div class="white-hatching"></div>

<section class="menu">
       <div class="pagetitle">
       <p>Welcome <span>The Menu</span></p>
       </div>

       <div class="foodType">
        <p class="menuCategory mb-3"><?php echo get_field('category_one'); ?></p>  


            <?php if( have_rows('starters') ): ?>                 
                <?php while( have_rows('starters') ): the_row();?>  

        <div class="foodType__list">
        <ul class=dishes>
        <li><span><?= get_sub_field( 'starter_name' ); ?></span><span><?= get_sub_field( 'price' ); ?>€</span></li>
        <p><?= get_sub_field( 'starter_description' ); ?></p>
    
        </ul>
       </div>
       </div>

       <?php endwhile; ?>                   
            <?php endif; ?>

       <div class="foodType">
        <p class="menuCategory mb-3"><?php echo get_field('category_two'); ?></p>  


            <?php if( have_rows('main_dishes') ): ?>                 
                <?php while( have_rows('main_dishes') ): the_row();?>  

        <div class="foodType__list">
        <ul class=dishes>
        <li><span><?= get_sub_field( 'main_dish_name' ); ?></span><span><?= get_sub_field( 'main_dish_price' ); ?>€</span></li>
        <p><?= get_sub_field( 'main_dish_description' ); ?></p>
    
        </ul>
       </div>
       </div>


       <?php endwhile; ?>                   
            <?php endif; ?>

            <div class="foodType">
        <p class="menuCategory mb-3"><?php echo get_field('category_three'); ?></p>  


            <?php if( have_rows('desserts') ): ?>                 
                <?php while( have_rows('desserts') ): the_row();?>  

        <div class="foodType__list">
        <ul class=dishes>
        <li><span><?= get_sub_field( 'dessert_name' ); ?></span><span><?= get_sub_field( 'dessert_price' ); ?>€</span></li>
        <p><?= get_sub_field( 'dessert_description' ); ?></p>
    
        </ul>
       </div>
       </div>


       <?php endwhile; ?>                   
            <?php endif; ?>

    

</section>

<?php get_template_part('parts/latest') ?>



<?php get_footer(); ?>