<div id="caf-filter-layout2" class='caf-filter-layout data-target-div<?php echo esc_attr($b); ?>'>
<div class="selectcont caf-filter-container">
<?php
	if($terms_sel) {
	echo '<div class="selectcont">
	<ul class="dropdown">
    <li class="init" value="1000"><span>';
		
	echo apply_filters('tc_caf_add_custom_span_before_filter',array($caf_filter,'tc_caf_add_custom_span_before_filter'));
	echo'</span><span class=
    "result">';
	echo apply_filters('tc_caf_add_custom_list_before_filter',array($caf_filter,'tc_caf_add_custom_list_before_filter'));	
	echo'</span><span class="arrow-down"><i class="fa fa-angle-down" aria-hidden="true"></i></span><span class="arrow-up" style="display: none;"><i class="fa fa-angle-up" aria-hidden="true"></i></span><ul>';
	echo '<li><a href="#" data-id="'.esc_attr($trm).'" id="flt" class="caf-mb-3 active" data-target-div="data-target-div'.esc_attr($b).'">';
	echo apply_filters('tc_caf_add_custom_list_before_filter','tc_caf_add_custom_list_before_filter');	
	echo'</a></li>';
    $terms_sel=apply_filters('tc_caf_filter_order_by',$terms_sel);	   
foreach ($terms_sel as $term) {
$term_data=get_term($term);
if($term_data) {
echo "<li class='caf-mb-3'><a href='#' data-id='".esc_attr($term_data->term_id)."' id='flt' data-target-div='data-target-div".esc_attr($b)."'>".esc_html($term_data->name)."</a></li>";	
}	
}
echo '</ul></li></ul></div>'; 	
}
?>
</ul>
</div>
<?php
echo "<style>
.data-target-div".$b." #caf-filter-layout2 .selectcont,.data-target-div".$b." #caf-filter-layout2 li,.data-target-div".$b." #caf-filter-layout2,.data-target-div".$b." #caf-filter-layout2 li ul li a  {font-family:".$caf_filter_font."}
.data-target-div".$b." #caf-filter-layout2 ul.dropdown li a {color: ".$caf_filter_sec_color.";}
.data-target-div".$b." #caf-filter-layout2 ul.dropdown li span {color: ".$caf_filter_primary_color.";}
.data-target-div".$b." #caf-filter-layout2 ul.dropdown li a.active {background-color: ".$caf_filter_sec_color2.";color: ".$caf_filter_primary_color.";}
echo </style>";
?>