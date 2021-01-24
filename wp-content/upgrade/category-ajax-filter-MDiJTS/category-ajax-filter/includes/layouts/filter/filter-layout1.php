<div id="caf-filter-layout1" class='caf-filter-layout data-target-div<?php echo esc_attr($b); ?>'>
<ul class="caf-filter-container caf-filter-layout1">
<?php
if($terms_sel) {
$terms_sel=apply_filters('tc_caf_filter_order_by',$terms_sel);	
echo '<li class="caf-mb-4"><a href="#" data-id="'.esc_attr($trm).'" id="flt" class="active" data-target-div="data-target-div'.esc_attr($b).'">All</a></li>';
foreach ($terms_sel as $term) {
$term_data=get_term($term);
if($term_data) {
echo "<li class='caf-mb-4'><a href='#' data-id='".esc_attr($term_data->term_id)."' id='flt' data-target-div='data-target-div".esc_attr($b)."'>".esc_html($term_data->name)."</a></li>";	
}	
}
}	
?>
</ul>
</div>
<?php
echo "<style>
 .data-target-div".$b." #caf-filter-layout1 li a {background-color: ".$caf_filter_sec_color.";color: ".$caf_filter_primary_color.";text-transform:".$caf_filter_transform.";font-family:".$caf_filter_font.";font-size:".$caf_filter_font_size."px;}
.data-target-div".$b." #caf-filter-layout1 li a.active {background-color: ".$caf_filter_sec_color2.";color: ".$caf_filter_sec_color.";}
echo </style>";
?>