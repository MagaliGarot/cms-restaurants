<div class="tab-pane tab-pad" id="import" role="tabpanel" aria-labelledby="import-tab">
	<div class="manage-top-dash import-tab"><span class="dashicons dashicons-controls-repeat"></span><?php echo esc_html('Shortcode','tc_caf');?> <a href='<?php echo esc_url('http://trustyplugins.com','tc_caf');?>' target="_blank"><i class="fa fa-info-circle" aria-hidden="true"></i> <?php echo esc_html('Documentation','tc_caf');?></a></div>
	<div id="tabs-panel">
	<!---- START QUERY OPTIONS TOGGLE ---->	
	<div class="tab-panel import">
		<div class="tab-header active" data-content="import"><i class="fa fa-check-square-o left" aria-hidden="true"></i> <?php echo esc_html('Import Layout','tc_caf');?> <i class="fa fa-angle-down" aria-hidden="true"></i></div>
		<div class="tab-content import active">
	<!---- START FULL ROW CUSTOM POST TYPE ----> 
	<div class='col-sm-12'>
	<!-- FORM GROUP -->
	<div class="form-group row">
    <label for="import-layout" class="col-sm-12 col-form-label"><?php echo esc_html('Import Layout From Demo Site','tc_caf');?><span class="info"><?php echo esc_html('Directly paste the exported JSON code from Demo Site','tc_caf');?></span></label>
    <div class="col-sm-12">
   <textarea name="import-caf-layout" id="import-caf-layout" class="form-control" style="height:250px"></textarea>
		<input type="button" name="import-layout" id="import-layout-button" value="Import" class="form-control">
	</div>
		
	</div>
    <!-- FORM GROUP -->
    </div>

		
	<!---- END FULL ROW CUSTOM POST TYPE ----> 
	</div>
	</div>
	<!---- END QUERY OPTIONS TOGGLE ---->

	</div>

	</div>