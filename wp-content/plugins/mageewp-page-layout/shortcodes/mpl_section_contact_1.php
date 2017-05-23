<?php
$section_subtitle = '';
$section_title    = '';
$desc             = '';
$button_text      = '';

extract($atts);
$el_classes = apply_filters( 'mpl-el-class', $atts );
$video_background = apply_filters('mpl-video-background', $atts);

/**/
$data = array(
	'section_class'    => implode(' ', $el_classes),
	'section_id'       =>  esc_attr( $atts['section_id'] ),
	'section_title'    => $section_title,
	'section_subtitle' => $section_subtitle,
	'contact_name'     => $contact_info_title,
	'contact_address'  => $contact_address,
	'contact_email'    => $contact_email,
	'contact_phone'    => $contact_phone,
	'contact_receiver' => $contact_receiver,
	'video_background' => $video_background, 
);
$data = (object)$data;

mpl_tpl_contact_style_1($data);
/*End Call Template*/

