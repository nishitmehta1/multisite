<?php 

$section_subtitle = '';
$section_title    = '';
$columns = '';
$style = '';
$carousel = '';

extract($atts);

$element_attributes = array();

$owl = apply_filters( 'mpl-owl-carousel', $atts );
$el_classes = apply_filters( 'mpl-el-class', $atts );

$video_background = apply_filters('mpl-video-background', $atts);

$columns = $columns == ''? 4 : $columns;
$client = $atts['client'];		
$client_data = array();
if (isset($client)) {
	$i = 1;
	foreach ($client as $client_item) {
		$image = $client_item->image;
		$link   = $client_item->link;
		$target = $client_item->target;
		
		if (preg_match('/http|https:\/\/[\w.]+[\w\/]*[\w.]*\??[\w=&\+\%]*/is',$image)) {
		    $image           = $image;
		} else {
			$image_attributes = wp_get_attachment_image_src( $image,'full' );
			$image            = $image_attributes[0];
		}

		$client_data[] = (object)array(
			'image'  => $image,
			'link'   => esc_url($link),
			'target' => $target
		); 
	}
}

/*function data*/
$data = (object)array(
	'section_class'    => implode(' ', $el_classes),
	'section_id'       =>  esc_attr( $atts['section_id'] ),
	'section_title'    => $section_title,
	'section_subtitle' => $section_subtitle,
	'columns' 		   => $columns,
	'client' 	   	   => $client_data,
	'carousel'         => $owl['carousel'],
	'owl_options' 	   => $owl['options'],
	'owl_nav_style'    => $owl['nav_style'],
	'video_background' => $video_background,
);

mpl_tpl_section_clients($data);