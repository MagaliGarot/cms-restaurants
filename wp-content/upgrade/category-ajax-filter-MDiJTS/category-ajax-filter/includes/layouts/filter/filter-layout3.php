<div id="caf-filter-layout3" class='caf-filter-layout data-target-div<?php echo esc_attr($b); ?>'>

<?php
	echo apply_filters('tc_caf_custom_title_before_sidebar_filter',array($caf_filter,'tc_caf_custom_title_before_sidebar_filter'));
	?>
	
<ul class="caf-filter-container caf-filter-layout3">
<?php
if($terms_sel) {
//var_dump($terms_sel);
    $terms_sel=apply_filters('tc_caf_filter_order_by',$terms_sel);
$args = array(
  //'cat' => $term_id,
  'post_type' => $caf_cpt_value,
  'tax_query' => array(
        array(
            'taxonomy' => $tax,
            'field'    => 'id',
            'terms'    => $terms_sel,
        ),),);
$the_query = new WP_Query( $args );
$post_count_all=$the_query->found_posts;		
echo '<li><a href="#" data-id="'.esc_attr($trm).'" id="flt" class="active" data-target-div="data-target-div'.esc_attr($b).'"><span class="post_count">'.esc_html($post_count_all).'</span>All <i class="fa fa-angle-double-right"></i></a></li>';
foreach ($terms_sel as $term) {
$term_data=get_term($term);
if($term_data) {
$term_id=$term_data->term_id;
//echo $caf_cpt_value;
$args = array(
  //'cat' => $term_id,
  'post_type' => $caf_cpt_value,
  'tax_query' => array(
        array(
            'taxonomy' => $tax,
            'field'    => 'id',
            'terms'    => $term_id,
        ),),);
$the_query = new WP_Query( $args );
$post_count=$the_query->found_posts;	
echo "<li><a href='#' data-id='".esc_attr($term_data->term_id)."' id='flt' data-target-div='data-target-div".esc_attr($b)."'><span class='post_count'>".esc_attr($post_count)."</span>".esc_html($term_data->name)." <i class='fa fa-angle-double-right'></i></a></li>";	
}	
}
}	
?>
</ul>
</div>
<?php
echo "<style>
.data-target-div".$b." span.post_count,.data-target-div".$b." h2.caf-cat-title:after{background-color: ".$caf_filter_primary_color.";color: ".$caf_filter_sec_color2.";}
.data-target-div".$b." #caf-filter-layout3 li a.active span.post_count{background-color: ".$caf_filter_sec_color2.";color: ".$caf_filter_primary_color.";}
.data-target-div".$b." #caf-filter-layout3 li a span.post_count{color: ".$caf_filter_sec_color.";background-color: ".$caf_filter_primary_color.";}
.data-target-div".$b." #caf-filter-layout3 li a {font-family:".$caf_filter_font."}
.data-target-div".$b." #caf-filter-layout3 li a.active{background-color: ".$caf_filter_primary_color."; color: ".$caf_filter_sec_color2."; border-color: ".$caf_filter_primary_color.";}
echo </style>";
?>