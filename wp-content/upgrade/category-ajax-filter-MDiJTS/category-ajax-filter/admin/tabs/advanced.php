<div class="tab-pane tab-pad" id="advanced" role="tabpanel" aria-labelledby="advanced-tab">

	<div class="manage-top-dash general-tab"><span class="dashicons dashicons-tag"></span> <?php echo esc_html('Advanced','tc_caf');?> <a href='<?php echo esc_url('http://trustyplugins.com'); ?>' target="_blank"><i class="fa fa-info-circle" aria-hidden="true"></i> <?php echo esc_html('Documentation','tc_caf'); ?></a></div>

<div id="tabs-panel">

    <div class="tab-panel ad-post-class">

	<div class="tab-header" data-content="ad-post-class"><i class="fa fa-plus-circle left" aria-hidden="true"></i> <?php echo esc_html('Add Extra Classes','tc_caf');?> <i class="fa fa-angle-down" aria-hidden="true"></i></div>

	<div class="tab-content ad-post-class">

	<!---- START FULL ROW SPECIAL CLASS ----> 

	<div class='col-sm-12 row-bottom'>

	<!-- FORM GROUP -->

	<div class="form-group row">

    <label for="caf-special-post-class" class="col-sm-4 col-form-label"><?php echo esc_html('Add Css Class','tc_caf'); ?> <span><?php echo esc_html('This class will add to every post of the results.','tc_caf');?></span></label>

    <div class="col-sm-8">

    <input type='text' class="form-control" id="caf-special-post-class" name="caf-special-post-class" value='<?php echo esc_html($caf_special_post_class,'tc_caf'); ?>'>

	</div>

	</div>

    <!-- FORM GROUP -->

    </div>

	<!---- END FULL ROW SPECIAL CLASS ----> 

</div>

</div>

	

</div>

</div>