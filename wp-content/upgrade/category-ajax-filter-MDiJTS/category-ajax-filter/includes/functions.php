<?php
class CAF_shortcode_render {
	public function __construct() {
		add_shortcode("caf_filter",array($this,"caf_filter_call"));
	}
	public function caf_filter_call($atts) {
		ob_start();
		$caf_filter=new CAF_front_filter();	
		static $b = 1;
		$atts= shortcode_atts( array(
		 'id' => '',
		 ), $atts );
		 $id=$atts['id'];
		if(get_post_meta($id,'caf_cpt_value')) {
		$caf_cpt_value=get_post_meta($id,'caf_cpt_value',true);
		}	
		$pt=get_post_type($id);
		include TC_CAF_PATH.'includes/front-variables.php';
		wp_enqueue_script( 'tc-caf-frontend-scripts');
		//wp_enqueue_script( "tc-caf-smooth-scroll");
		$post_style=("tc-caf-".$caf_post_layout);
		$filter_style=("tc-caf-".$caf_filter_layout);	
		wp_enqueue_style('tc-caf-common-style');
		wp_enqueue_style($filter_style);
		wp_enqueue_style($post_style);
		wp_enqueue_style('tc-caf-font-awesome-style');	
		if(($id && !empty($id) && get_post_type($id)=='caf_posts'))  {
		if($caf_filter_layout=='filter-layout3') {$cl='sidebar';} else {$cl='';}
		echo '<div id="caf-post-layout-container" class="caf-post-layout-container '.$cl.' '.$caf_filter_layout.' '.$caf_post_layout.' data-target-div'.$b.'" data-post-type="'.$caf_cpt_value.'" data-tax="'.$tax.'" data-terms="'.$trm.'" data-per-page="'.$caf_per_page.'" data-selected-terms="'.$trm.'" data-filter-id="'.$id.'" data-post-layout="'.$caf_post_layout.'" data-target-div="data-target-div'.$b.'">';	
		if($caf_filter_status=='on')
		{
		if($caf_filter_layout && strlen($caf_filter_layout)>13 ) {
		$filepath=TC_CAF_PATH."includes/layouts/filter/".$caf_filter_layout.".php";
		if(file_exists($filepath)) {
		include_once $filepath;
		}
		else {
		echo "<div class='error-of-filter-layout error-caf'>".esc_html('Filter Layout is not Available.','tc_caf')."</div>";	
		}
		}
		}
		echo "<div id='manage-ajax-response' class='caf-row'>";	
		if($caf_post_layout && strlen($caf_post_layout)>11) {
		echo '<div class="status"><i class="fa fa-spinner" aria-hidden="true"></i></div>';
		echo '<div class="content"></div>';
		}	
		echo "</div>";	
		echo "</div>";	
		}
		else
		{
		if(empty($id)) {
		echo "<div class='error-of-missing-id error-caf'>".esc_html('Nothing Found. Missing id as argument. <a href="http://trustyplugins.com" target="_blank">See Documentation</a>','tc_caf')."</div>";	
		}
		else {
		echo "<div class='error-of-missing-id error-caf'>".esc_html('Nothing Found. ID Mismatched. <a href="http://trustyplugins.com" target="_blank">See Documentation</a>','tc_caf')."</div>";		
		}	
		}
		 $output = ob_get_contents();
		 ob_end_clean(); 
			$b++;
		 return  $output;

		}
}
class CAF_get_filter_posts {
	public function __construct() {
	add_action('wp_ajax_get_filter_posts', array($this,'get_filter_posts'));
    add_action('wp_ajax_nopriv_get_filter_posts', array($this,'get_filter_posts'));	
	}
	public function get_filter_posts() {
	//echo $_POST['nonce'];
if( !isset( $_POST['nonce'] ) || !wp_verify_nonce( $_POST['nonce'], 'tc_caf_ajax_nonce' ) )
        die('Permission denied');
/*** Default response ***/
    $response = [
        'status'  => 500,
        'message' => 'Something is wrong, please try again later ...',
        'content' => false,
        'found'   => 0
    ];
	$tax  = sanitize_text_field($_POST['params']['tax']);
	$post_type  = sanitize_text_field($_POST['params']['post-type']);
	$filter_id  = sanitize_text_field($_POST['params']['filter-id']);
    $term = sanitize_text_field($_POST['params']['term']);
    $page = intval($_POST['params']['page']);
    $per_page  = intval($_POST['params']['per-page']);
	$caf_post_layout  = sanitize_text_field($_POST['params']['caf-post-layout']);
	$target_div  = sanitize_text_field($_POST['params']['data-target-div']);
	if($per_page=='-1') {$per_page='5';}
	/*** Check if term exists ***/
	$terms=explode(',',$term);
	if (!is_array($terms)) :
    $response = [
        'status'  => 501,
        'message' => 'Term doesn\'t exist',
        'content' => 0
    ];
    die(json_encode($response));
	else :
    if ($terms == 'all') : 
        $tax_qry[] = [
            'taxonomy' => $tax,
            'field'    => 'term_id',
            'terms'    => $terms,
            'operator' => 'IN'
        ];
    else :
        $tax_qry[] = [
            'taxonomy' => $tax,
            'field'    => 'term_id',
            'terms'    => $terms,
        ];
    endif;
	endif;
    $default_order='title';
$default_order=apply_filters('tc_caf_filter_posts_order_by',$default_order);
        
	/*** Setup query ***/
    $args = [
        'paged'          => $page,
        'post_type'      => $post_type,
        'post_status'    => 'publish',
        'posts_per_page' => $per_page,
        'tax_query'      => $tax_qry,
		'orderby'=>$default_order,
		'order'=>'asc',
    ];
$qry = new WP_Query($args);
ob_start();
echo '<div class="status"></div>';
if($caf_post_layout && strlen($caf_post_layout)>11 ) {
$filepath=TC_CAF_PATH."includes/layouts/post/".$caf_post_layout.".php";
if(file_exists($filepath)) {
include_once $filepath;
}
else {
echo "<div class='error-of-post-layout error-caf'>".esc_html('Post Layout is not Available.','tc_caf')."</div>";
	$response = [
                'status'  => 404,
                'message' => 'No posts found',
	            //'content' =>'ok',
            ];	
}	
}
//include_once TC_CAF_PATH.'includes/layouts/post/post-layout1.php';	
	$response['content'] = ob_get_clean();
	die(json_encode($response));
	//die();
}
}
class CAF_content_length {
public $caf_post_id,$words;	
public function get_caf_content($caf_post_id) {
	$content=get_the_content();
 $content = preg_replace('#\[[^\]]+\]#', '',$content);
	$content=wp_trim_words($content,'40');
	return $content;
}
public function get_caf_content2($caf_post_id,$words) {
	$content=get_the_content();
  $content = preg_replace('#\[[^\]]+\]#', '',$content);
	$content=wp_trim_words($content,$words);
	return $content;
}
}
class CAF_front_filter {
 public function __construct() {
     
add_filter('tc_caf_add_custom_list_before_filter',array($this,'tc_caf_add_custom_list_before_filter'),5);
     
add_filter('tc_caf_add_custom_span_before_filter',array($this,'tc_caf_add_custom_span_before_filter'),5);
     
add_filter('tc_caf_custom_title_before_sidebar_filter',array($this,'tc_caf_custom_title_before_sidebar_filter'),5);	
     
add_filter('tc_caf_filter_order_by',array($this,'tc_caf_filter_order_by'),5,1); 
     
add_filter('tc_caf_filter_posts_order_by',array($this,'tc_caf_filter_posts_order_by'),5,1);      
  }
public function tc_caf_add_custom_span_before_filter() {
return 'I want to check out ';
}
public function tc_caf_add_custom_list_before_filter() {
return 'Everything';
}
public function tc_caf_custom_title_before_sidebar_filter() {
return '<h2>Categories</h2>';
}
 public function tc_caf_filter_order_by($terms_sel) {
return $terms_sel;
} 
 public function tc_caf_filter_posts_order_by($default) {
return 'title';
}     
}
class CAF_ajax_pagination {
	public function caf_ajax_pager($query = null,$paged = 1,$caf_post_layout) {
//var_dump($query);
    if (!$query)
        return;
    $paginate = paginate_links([
        'base'      => '%_%',
        'type'      => 'array',
        'total'     => $query->max_num_pages,
        'format'    => '#page=%#%',
        'current'   => max( 1, $paged ),
        'prev_text' => 'Prev',
        'next_text' => 'Next'
    ]);
    if ($query->max_num_pages > 1) : ?>
        <ul id="caf-layout-pagination" class="caf-pagination <?php echo $caf_post_layout;?>">
            <?php foreach ( $paginate as $page ) :?>
                <li><?php echo $page; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif;
}
}
new CAF_get_filter_posts();


