<?php $pageId = 7 ?>

<section class="food container-fluid">
    <div class="wrapper d-flex flex-column align-items-center">
        <div class="food__title">
            <h3 class="text-center"><?php echo get_field('food_title', $pageId) ?></h3>
            <h2 class="text-center"><?php echo get_field('food_main_title', $pageId) ?></h2>
        </div>

        <div class="food__pictures d-flex flex-column align-items-center flex-md-row flex-md-wrap justify-content-md-center">
            <div class="food__picture d-flex justify-content-center"><img src="<?php echo get_field('food_image_one', $pageId)['url'] ?>"></div>
            <div class="food__picture d-flex justify-content-center"><img src="<?php echo get_field('food_image_two', $pageId)['url'] ?>"></div>
            <div class="food__picture d-flex justify-content-center"><img src="<?php echo get_field('food_image_three', $pageId)['url'] ?>"></div>
            <div class="food__picture d-flex justify-content-center"><img src="<?php echo get_field('food_image_four', $pageId)['url'] ?>"></div>
        </div>

        <div class="food__text text-center d-flex flex-column align-items-center">
            <p><?php echo get_field('food_text', $pageId) ?></p>
            <a href="<?php echo get_field('food_link', $pageId)['url'] ?>"><?php echo get_field('food_link', $pageId)['title'] ?></a>
        </div>
    </div>
</section>

<section class="food-lg container-fluid">
    <div class="wrapper d-flex  justify-content-center">
        

        <div class="food__pictures d-flex flex-column align-items-center flex-md-row flex-md-wrap justify-content-md-start">
            <div class="food__picture d-flex justify-content-center"><img src="<?php echo get_field('food_image_one', $pageId)['url'] ?>"></div>
            <div class="food__picture d-flex justify-content-center"><img src="<?php echo get_field('food_image_two', $pageId)['url'] ?>"></div>
            <div class="food__picture d-flex justify-content-center"><img src="<?php echo get_field('food_image_three', $pageId)['url'] ?>"></div>
            <div class="food__picture d-flex justify-content-center"><img src="<?php echo get_field('food_image_four', $pageId)['url'] ?>"></div>
        </div>

        <div class="food__title">
            <h3 class="text-center"><?php echo get_field('food_title', $pageId) ?></h3>
            <h2 class="text-center"><?php echo get_field('food_main_title', $pageId) ?></h2>
            <div class="food__text text-center d-flex flex-column align-items-center">
                <p><?php echo get_field('food_text', $pageId) ?></p>
                <a href="<?php echo get_field('food_link', $pageId)['url'] ?>"><?php echo get_field('food_link', $pageId)['title'] ?></a>
            </div>
        </div>

        
    </div>
</section>