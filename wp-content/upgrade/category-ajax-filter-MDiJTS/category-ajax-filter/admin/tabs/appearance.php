<div class="tab-pane" id="appearance" role="tabpanel" aria-labelledby="appearance-tab">
	<div class="manage-top-dash general-tab"><span class="dashicons dashicons-visibility"></span> <?php echo esc_html('Appearance','tc_caf'); ?> <a href='<?php echo esc_url('http://trustyplugins.com','tc_caf');?>' target="_blank"><i class="fa fa-info-circle" aria-hidden="true"></i> <?php echo esc_html('Documentation','tc_caf');?></a></div>
	<div id="tabs-panel">
    <!---- START SECTION BACKGROUND TOGGLE ---->		
	<div class="tab-panel custom-meta">
	<div class="tab-header" data-content="section-background"><i class="fa fa-sign-in left" aria-hidden="true"></i> <?php echo esc_html('Section Background','tc_caf');?> <i class="fa fa-angle-down" aria-hidden="true"></i></div>
	<div class="tab-content section-background">
	<!---- START ENABLE/DISABLE FILTER FORM GROUP ROW ---->
	<div class='col-sm-12 section-background row-bottom'>
	<!---- FORM GROUP META FIELD ---->
	<div class="form-group row">
   <label for="caf-sec-bg-color" class='col-sm-12 bold-span-title'><?php echo esc_html('Background Color','tc_caf');?><span class='info'><?php echo esc_html('Select background color for main section.','tc_caf');?></span></label>
    <div class="col-sm-12 ">
    <input id="caf-sec-bg-color" type="text" value="<?php echo $caf_sec_bg_color; ?>" class="my-color-field caf_import" data-import='caf_section_bg_color' name='caf-sec-bg-color' data-default-color="#ffffff00" />
	</div>
	</div>
    <!---- FORM GROUP ---->
    </div>
	<!---- END ENABLE/DISABLE FILTER FORM GROUP ROW ---->
	</div>
	</div>
	<!---- END SECTION BACKGROUND TOGGLE ---->
		
	<!---- START FILTER LAYOUT TOGGLE ---->	

	<div class="tab-panel filter-layout">

	<div class="tab-header" data-content="filter-layout"><i class="fa fa-filter left" aria-hidden="true"></i> <?php echo esc_html('Filter Layout','tc_caf');?> <i class="fa fa-angle-down" aria-hidden="true"></i></div>

	<div class="tab-content filter-layout">

    <!---- START LAYOUT TAB DATA ---->

	<div class='app-tab-content active' id="app-layout">

		<!---- START ENABLE/DISABLE FILTER FORM GROUP ROW ---->

	<div class="col-sm-12 row-bottom">

	<div class="form-group row">

    <label for="caf-filter-layout" class='col-sm-12 bold-span-title'><?php echo esc_html('Enable/Disable Filter','tc_caf');?><span class='info'><?php echo esc_html('Enable/Disable filter according to your needs.','tc_caf');?></span></label>
    <div class="col-sm-12 filter-en">

    <input type="checkbox" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" id="enable-disable-filter" name="filter_status"  class="checkstate tc_caf_object_field tc_caf_checkbox" data-field-type='checkbox' data-name="caf-filter-status" <?php if($caf_filter_status=="on") {echo "checked";} else {echo "";} ?>>
    <input class="tc_caf_object_field tc_caf_text caf_import" data-import='caf_filter_status' data-field-type='text' type="hidden" name='caf-filter-status' id='caf-filter-status' value='<?php echo $caf_filter_status; ?>'>
	</div>
	</div>
	</div>
	<!---- END ENABLE/DISABLE FILTER FORM GROUP ROW ---->

	<?php

	if($caf_filter_status=='on') {  $caf_hide =''; }else {$caf_hide='caf-hide';}	?>

	<div class='manage-filters <?php echo $caf_hide; ?>'>	

	<!---- START CATEGORY FILTER FORM GROUP ROW ---->
	<div class="col-sm-12 row-bottom">
	<div class="form-group row">
    <label for="caf-filter-layout" class='col-sm-12 bold-span-title'><?php echo esc_html('Select Your Category Filter Design','tc_caf');?><span class='info'><?php echo esc_html('Select design layout of filter.','tc_caf');?></span></label>
	<?php 
    $flayouts=apply_filters('tc_caf_filter_layouts',array($caf_admin_fliters,'tc_caf_filter_layouts'));
	?>
	
    <div class="col-sm-12">
    <select class="form-control tc_caf_object_field tc_caf_select caf_import" data-import="caf_filter_layout" data-field-type='select' id="caf-filter-layout" name="caf-filter-layout">
		<?php
		foreach ($flayouts as $key=>$layout) {
			if($caf_filter_layout==$key) { $selected='selected';} else {$selected='';}
			echo '<option value="'.$key.'" '.$selected.'>'.$layout.'</option>';
		}
		?>
	
	
    </select>
	</div>
	</div>
	</div>
	<!---- END CATEGORY FILTER FORM GROUP ROW ---->
	
	</div>

		

		

	<!---- START FILTER COLOR COMBINATION ---->	

	<div class="col-sm-12 row-bottom filter-color-combo">
	<div class="form-group row">
    <label for="caf-filter-layout" class='col-sm-12 bold-span-title'><?php echo esc_html('Filter Color Combination','tc_caf');?><span class='info'><?php echo esc_html('Select Primary/Secondary color for filter layout.','tc_caf');?><a href='#' class='filter-reset'><?php echo esc_html('Reset','tc_caf');?></a></span></label>
		
    <div class="col-sm-4 filter-primary-color">
    <span class='label-title'><?php echo esc_html('Primary Color','tc_caf');?></span><br/>
	<input type="text" value="<?php echo $caf_filter_primary_color; ?>" class="caf_import my-color-field" name='caf-filter-primary-color' data-default-color="#f79918" data-import='caf_filter_primary_color'/>
	</div>
		
	<div class="col-sm-4 filter-sec-color">
    <span class='label-title'><?php echo esc_html('Secondary Color','tc_caf');?></span><br/>
	<input type="text" value="<?php echo $caf_filter_sec_color; ?>" class="caf_import my-color-field" name='caf-filter-sec-color' data-default-color="#ffffff" data-import='caf_filter_sec_color'/>
	</div>
	
	<div class="col-sm-4 filter-sec-color2">
    <span class='label-title'><?php echo esc_html('Secondary Color 2','tc_caf');?></span><br/>
	<input type="text" value="<?php echo $caf_filter_sec_color2; ?>" class="caf_import my-color-field" name='caf-filter-sec-color2' data-default-color="#ffffff" data-import='caf_filter_sec_color2'/>
	</div>
		
	</div>
	</div>

	<!---- END FILTER COLOR COMBINATION ---->

		

		 </div>

	</div>

	</div>
	<!---- END FILTER LAYOUT TOGGLE ---->

	<!---- START POST LAYOUT TOGGLE ---->

	<div class="tab-panel post-layout">

	<div class="tab-header" data-content="post-layout"><i class="fa fa-th-large left" aria-hidden="true"></i> <?php echo esc_html('Post Layout','tc_caf');?><i class="fa fa-angle-down" aria-hidden="true"></i></div>

	<div class="tab-content post-layout">	

	<div class="col-sm-12 row-bottom">		

	<div class="form-group row">

    <label for="caf-post-layout" class='col-sm-12 bold-span-title'><?php echo esc_html('Select Your Post Layout Design','tc_caf');?><span class='info'><?php echo esc_html('Select Design Layout for Post/Blog.','tc_caf');?></span></label>
    <?php 
    $playouts=apply_filters('tc_caf_post_layouts',array($caf_admin_fliters,'tc_caf_post_layouts'));
	?>
    <div class="col-sm-12">

    <select class="form-control tc_caf_object_field tc_caf_select caf_import" data-import="caf_post_layout" data-field-type='select' id="caf-post-layout" name="caf-post-layout">

	<?php
		foreach ($playouts as $key=>$layout) {
			if($caf_post_layout==$key) { $selected='selected';} else {$selected='';}
			echo '<option value="'.$key.'" '.$selected.'>'.$layout.'</option>';
		}
?>
    </select>

	</div>

	</div>

	

	</div>	

	<!---- END POST LAYOUT FORM GROUP ROW ---->



 	<!---- START COLUMN LAYOUT GROUP ROW ---->

	<div class="col-sm-12 clm-layout row-bottom">			

	<div class="form-group row">

    <label for="caf-post-layout" class='col-sm-12 bold-span-title'><?php echo esc_html('SELECT COLUMN LAYOUT','tc_caf');?> <span class='info'><?php echo esc_html('Select column layout of posts for different screens.','tc_caf');?></span></label>

    <div class="row without-margin">

		<div class="input-group col-sm">

  <div class="input-group-prepend">

    <span class="input-group-text" id="basic-addon1"><i class="fa fa-desktop"></i></span>

  </div>

  <input type="number" class="form-control tc_caf_object_field tc_caf_text caf_import" data-import="caf_desktop_large_col" data-field-type='text' placeholder="1" aria-label="Username" aria-describedby="basic-addon1" min='1' max="4" name="caf_desktop_large_col" value=<?php echo $caf_col_opt['caf_col_desktop_large']; ?>>

</div>

		

  <div class="input-group col-sm">

  <div class="input-group-prepend">

    <span class="input-group-text" id="basic-addon1"><i class="fa fa-desktop"></i></span>

  </div>

  <input type="number" class="form-control tc_caf_object_field tc_caf_text caf_import" data-import="caf_desktop_col" data-field-type='text' placeholder="1" aria-label="Username" aria-describedby="basic-addon1" min='1' max="4" name="caf_desktop_col" value=<?php echo $caf_col_opt['caf_col_desktop']; ?>>

</div>


		<div class="input-group col-sm">

  <div class="input-group-prepend">

    <span class="input-group-text" id="basic-addon1"><i class="fa fa-tablet"></i></span>

  </div>

  <input type="number" class="form-control tc_caf_object_field tc_caf_select caf_import" data-import="caf_tablet_col" data-field-type='text'  placeholder="1" aria-label="Username" aria-describedby="basic-addon1" min='1' max="4" name="caf_tablet_col" value=<?php echo $caf_col_opt['caf_col_tablet']; ?>>

</div>


		<div class="input-group col-sm">

  <div class="input-group-prepend">

    <span class="input-group-text" id="basic-addon1"><i class="fa fa-mobile"></i></span>

  </div>

  <input type="number" class="form-control tc_caf_object_field tc_caf_select caf_import" data-import="caf_mobile_col" data-field-type='text'  placeholder="1" aria-label="Username" aria-describedby="basic-addon1" min='1' max="4" name="caf_mobile_col" value=<?php echo $caf_col_opt['caf_col_mobile']; ?>>

</div>

		

	</div>

	</div>

	</div>	

	<!---- END COLUMN LAYOUT GROUP ROW ---->

	<!---- START POST COLOR COMBINATION ---->	

	<div class="col-sm-12 row-bottom post-color-combo">
	<div class="form-group row">
    <label for="caf-post-layout" class='col-sm-12 bold-span-title'><?php echo esc_html('Post Color Combination','tc_caf');?><span class='info'><?php echo esc_html('Select Primary/Secondary color for Post layout.','tc_caf');?><a href='#' class='post-reset'><?php echo esc_html('Reset','tc_caf');?></a></span></label>
    
	<div class="col-sm-4 post-primary-color">
    <span class='label-title'><?php echo esc_html('Primary Color','tc_caf');?></span><br/>
	<input type="text" value="<?php echo $caf_post_primary_color; ?>" class="my-color-field caf_import" data-import="caf_post_primary_color" name='caf-post-primary-color' data-default-color="#f79918" />
	</div>
		
	<div class="col-sm-4 post-sec-color">
    <span class='label-title'><?php echo esc_html('Secondary Color','tc_caf');?></span><br/>
	<input type="text" value="<?php echo $caf_post_sec_color; ?>" class="my-color-field caf_import" data-import="caf_post_sec_color" name='caf-post-sec-color' data-default-color="#ffffff" />
	</div>	

	<div class="col-sm-4 post-sec-color2">
    <span class='label-title'><?php echo esc_html('Secondary Color 2','tc_caf');?></span><br/>
	<input type="text" value="<?php echo $caf_post_sec_color2; ?>" class="my-color-field caf_import" data-import="caf_post_sec_color2" name='caf-post-sec-color2' data-default-color="#ffffff" />
	</div>

	</div>
	</div>
	<!---- END POST COLOR COMBINATION ---->		
	</div>
	</div>

	<!---- END POST LAYOUT TOGGLE ---->	

	<!---- START POST ELEMENTS TOGGLE ---->	

	<div class="tab-panel post-elements">

	<div class="tab-header" data-content="post-elements"><i class="fa fa-building left" aria-hidden="true"></i> <?php echo esc_html('Post Elements','tc_caf');?><i class="fa fa-angle-down" aria-hidden="true"></i></div>

	<div class="tab-content post-elements">

	<!---- START IMAGE SELECT GROUP ROW ---->

	<div class="col-sm-12 row-bottom">		

	<div class="form-group row">

    <label for="caf-post-image" class='col-sm-12 bold-span-title'><?php echo esc_html('Select Post Image','tc_caf');?><span class='info'><?php echo esc_html('Set featured image or first image of the post.','tc_caf');?></span></label>

    <div class="col-sm-12">

    <select class="form-control" id="caf-post-image" name="caf-post-image">

	<option value="featured"><?php echo esc_html('Featured Image','tc_caf');?></option>

    </select>

	</div>

	</div>

	</div>	

	<!---- END IMAGE SELECT GROUP ROW ---->	  	

	<!---- START IMAGE SIZE GROUP ROW ---->

	<div class="col-sm-12 row-bottom">		

		

	<div class="form-group row">

    <label for="caf-post-image-size" class='col-sm-12 bold-span-title'><?php echo esc_html('Image Size','tc_caf');?> <span class='info'><?php echo esc_html('Set image thumbnail size.','tc_caf');?></span></label>

    <div class="col-sm-12">

		<?php 

		$thumb=get_image_sizes('thumbnail');

		$thumb="Thumbnail (".$thumb['width']."X".$thumb['height'].")";

		$med=get_image_sizes('medium');

		$med="Medium (".$med['width']."X".$med['height'].")";

		$large=get_image_sizes('large');

		$large="Large (".$large['width']."X".$large['height'].")";

		?>

    <select class="form-control caf_import" data-import="caf_post_img_size" id="caf-post-image-size" name="caf-post-image-size">

	<option value='thumbnail' <?php if($caf_image_size=="thumbnail") { echo "selected"; }?>> <?php echo $thumb; ?> </option>";

	<option value='medium' <?php if($caf_image_size=="medium") { echo "selected"; }?>> <?php echo  $med; ?> </option>";	

	<option value='large' <?php if($caf_image_size=="large") { echo "selected"; }?>> <?php echo $large; ?> </option>";

    </select>
    </div>

	</div>

	

	</div>	

	<!---- END IMAGE SIZE GROUP ROW ---->

	

	<!-- START EMPTY RESULT GROUP ---->	

	<div class="col-sm-12 row-bottom">

	<div class="form-group row">

    <label for="caf-empty-result" class='col-sm-12 bold-span-title'><?php echo esc_html('Empty Results Text','tc_caf');?><span class='info'><?php echo esc_html('Enter specific text to show while empty result in selected category from filter.','tc_caf');?></span></label>

    <div class="col-sm-12">
	<input type='text' class="form-control caf_import" data-import="caf_empty_result" id="caf-empty-result" name="caf-empty-result" value='<?php echo $caf_empty_res; ?>'>	

	</div>

	</div>

	</div>

    <!---- END EMPTY RESULT GROUP ---->	

		

	</div>

    </div>

	<!---- END POST ELEMENTS TOGGLE ---->		

		

	<!---- START POST LINK TOGGLE ---->

    <div class="tab-panel post-link">

	<div class="tab-header" data-content="post-link"><i class="fa fa-anchor left" aria-hidden="true"></i> <?php echo esc_html('Post Link','tc_caf');?> <i class="fa fa-angle-down" aria-hidden="true"></i></div>

	<div class="tab-content post-link">

    <div class='app-tab-content' id="miscellaneous">

    <!-- START PAGINATION TYPE PAGE GROUP ---->

	<div class="col-sm-12 row-bottom">

	<div class="form-group row">

    <label for="caf-link-target" class='col-sm-12 bold-span-title'><?php echo esc_html('Post Link Target','tc_caf');?><span class='info'><?php echo esc_html('Select link target when any user click on post.','tc_caf');?>'</span></label>

    <div class="col-sm-12">

    <select class="form-control caf_import" data-import="caf_link_target" id="caf-link-target" name="caf-link-target">
	<option value="same_window" <?php if($caf_link_target=='same_window'){echo "selected";} ?>><?php echo esc_html('Same Tab','tc_caf');?></option>
	<option value="new_window" <?php if($caf_link_target=='new_window'){echo "selected";} ?>><?php echo esc_html('New Tab','tc_caf');?></option>
    </select>

	</div>

	</div>

	</div>

    <!---- END PAGINATION TYPE GROUP ---->

    </div>

    </div>

	</div>

    <!---- END POST LINK TOGGLE ---->	

		

	<!---- START PAGINATION TOGGLE ---->

    <div class="tab-panel post-pagination">

	<div class="tab-header" data-content="post-pagination"><i class="fa fa-sort-numeric-asc left" aria-hidden="true"></i><?php echo esc_html('Pagination','tc_caf');?><i class="fa fa-angle-down" aria-hidden="true"></i></div>

	<div class="tab-content post-pagination">

	<div class='app-tab-content' id="app-extra">

	<!-- START POSTS PER PAGE GROUP ---->

	<div class="col-sm-12 pad-top-15 row-bottom">

	<div class="form-group row">

    <label for="caf-per-page" class='col-sm-12 bold-span-title'><?php echo esc_html('Posts Per Page','tc_caf');?><span class='info'><?php echo esc_html('Select Posts Per Page according your needs.use -1 for all posts.','tc_caf');?></span></label>

    <div class="col-sm-8">

    <input type='text' class="form-control caf_import" data-import="caf_per_page" id="caf-per-page" name="caf-per-page" value='<?php echo $caf_per_page; ?>'>

	</div>

	</div>

	</div>

    <!---- END POSTS PER PAGE GROUP ---->

	

    <!-- START PAGINATION TYPE PAGE GROUP ---->

	<div class="col-sm-12 p-type row-bottom">

	<div class="form-group row">

    <label for="caf-pagination-type" class='col-sm-12 bold-span-title'><?php echo esc_html('Pagination Type','tc_caf');?><span class='info'><?php echo esc_html('Select what type of pagination you want on frontend.','tc_caf');?></span></label>

    <div class="col-sm-12">

    <select class="form-control" id="caf-pagination-type" name="caf-pagination-type">

	<option value="number" selected><?php echo esc_html('Number','tc_caf');?></option>

    </select>

	</div>

	</div>

	</div>

    <!---- END PAGINATION TYPE GROUP ---->

	<div class="bar-new"><?php echo esc_html('Sorting','tc_caf');?></div>

	<!-- START ORDER BY GROUP ---->

	<div class="col-sm-12 pad-top-15 row-bottom">

	<div class="form-group row">

    <label for="caf-order-by" class='col-sm-12 bold-span-title'><?php echo esc_html('Order By','tc_caf');?><span class='info'><?php echo esc_html('Change sort order of posts.','tc_caf');?></span></label>

    <div class="col-sm-12">

    <select class="form-control" id="caf-order-by" name="caf-order-by">

	<option value="name" selected><?php echo esc_html('Name','tc_caf');?></option>

    </select>

	</div>

	</div>

	</div>

    <!---- END ORDER BY GROUP ---->


    </div>	

    </div>

	</div>

    <!---- END PAGINATION TOGGLE ---->

		

    <!---- START POST ANIMATION TOGGLE ---->

	<div class="tab-panel post-animation">

	<div class="tab-header" data-content="post-animation"><i class="fa fa-life-ring left" aria-hidden="true"></i> <?php echo esc_html('Post Animation','tc_caf');?><i class="fa fa-angle-down" aria-hidden="true"></i></div>

	<div class="tab-content post-animation">

	<div class="col-sm-12 row-bottom">			

	<div class="form-group row">

    <label for="caf-post-animation" class='col-sm-12 bold-span-title'><?php echo esc_html('Select Post Animation','tc_caf');?><span class='info'><?php echo esc_html('Set Animation for posts.','tc_caf');?></span></label>

    <div class="col-sm-12">
    <select class="form-control caf_import" data-import="caf_post_animation" id="caf-post-animation" name="caf-post-animation">
	<option value="animate-off" <?php if($caf_post_animation=='animate-off') {echo "selected";} ?>>Off</option>
	<option value="caf-animate-skew1" <?php if($caf_post_animation=='caf-animate-skew1') {echo "selected";} ?>><?php echo esc_html('Skew Right','tc_caf');?></option>
    </select>
	</div>
	</div>
	</div>
	</div>
	</div>
	<!---- END POST ANIMATION TOGGLE ---->
</div>		 
</div>