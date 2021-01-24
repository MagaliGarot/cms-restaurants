jQuery(function($){
function get_params($page,div){
	var div="."+div;
	var params    = {
		'page' :$page,
		'tax'  : $(div).attr('data-tax'),
	    'post-type':$(div).attr('data-post-type'),
		'term' : $(div).attr('data-terms'),
		'per-page'  : $(div).attr('data-per-page'),
	    'filter-id'  : $(div).attr('data-filter-id'),
	    'caf-post-layout' : $(div).attr('data-post-layout'),
		'data-target-div':div
	};
	return params;
}
$(".caf-post-layout-container").each(function(i){
if(i==0) {
var div=$(this).attr('data-target-div');
var params=get_params(1,div);	
get_posts(params);
}
});
$("ul.dropdown li a").click(function(){
var cat= $(this).text();
$("ul.dropdown span.result").html(cat);	
});	

$('.caf-post-layout-container').on('click', '.caf-filter-container li a, .caf-pagination a', function(e) {
var div=e.currentTarget.getAttribute("data-target-div");
var current_id=e.currentTarget.id;
if(current_id=="flt") {
$("."+div+" .caf-filter-layout ul li a").each(function(){
$(this).removeClass('active');	
})
var id=$(this).attr('data-id');
$(this).addClass('active');
$("."+div).attr("data-terms",id);
$page='1';	
}
else 
{
var div=e.delegateTarget.getAttribute("data-target-div");
$page = parseInt($(this).attr('href').replace(/\D/g,''));
}
var params=get_params($page,div);
get_posts(params);
e.preventDefault();	
});
});

function get_posts(params) {
var $ = jQuery.noConflict();
	var container = params['data-target-div'];
	var content   = $(container).find('#manage-ajax-response');
	var status    = $(container).find('.status');
	var img=tc_caf_ajax.plugin_path+"assets/img/loading2.gif";
	$(status).html('<i class="fa fa-spinner fa-spin"></i>').addClass('active');
	$(content).addClass('loading');
	$.ajax({
		url: tc_caf_ajax.ajax_url,
		data: {
			action: 'get_filter_posts',
			nonce: tc_caf_ajax.nonce,
			params: params
		},
		type: 'post',
		dataType: 'json',
		success: function(data, textStatus, XMLHttpRequest) {
			$(content).removeClass('loading');
			if (data.status === 200) {
				$(content).html(data.content);
			}
			else if (data.status === 201) {
				$(content).html(data.content);	
			}
			else if (data.status === 404) {
				$(content).html(data.content);	
			}
			else {
				$(status).html(data.message);
			}
		},
		error: function(MLHttpRequest, textStatus, errorThrown) {
			$(status).html(textStatus);
		},
		complete: function(data, textStatus) {
			msg = textStatus;
			if (textStatus === 'success') {
				msg = data.responseJSON.found;
			}
			$(status).text('Posts found: ' + msg);
		}
	}); 
}
/* filter 2 dropdown code */
jQuery( document ).ready(function($){
	$("ul.dropdown").on("click", ".init", function() {
		    $("ul.dropdown li ul").toggle();
			$('ul.dropdown li').toggleClass('activss');
     });
	});