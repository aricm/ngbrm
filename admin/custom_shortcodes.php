<?php

/**
 * SHORTCODES
 *
 */

//Remove empty paragraphs
function noParagraphs($content){
    if ( '</p>' == substr( $content, 0, 4 ) && '<p>' == substr( $content, strlen( $content ) - 3 ) ){
        $content = substr( $content, 4, strlen( $content ) - 7 );
    }
    return $content;
}

/*
* FontAwesome
*/

function nga_fontawesome($atts) {
    extract( shortcode_atts( array(
    	'class' => '',
    	'style' => ''
    ), $atts ) );

    $return .= '<i class="fa '. $class .'" style=". $style ."></i>';

    return $return;
}
add_shortcode('icon','nga_fontawesome');



/*
* Checklist with optional image (sort of list list_group, but custom to site)
*/
function nga_checklist($atts,$content){
    extract( shortcode_atts( array(
        'class' => ''
    ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = noParagraphs($content);

    $return = '';
    $return .= '<ul class="checklist ' .  $class . '">';
    $return .= force_balance_tags($content);
    $return .= '</ul>';
    return $return;
}
add_shortcode('checklist','nga_checklist');

/*
* Checklist item with and image (sort of list list_group, but custom to site)
* THE ITEM
*/
function nga_checklist_item($atts,$content){
    extract( shortcode_atts( array(
		'class' => '',
		'image' => 'http://209.126.119.193/~brm/wp-content/uploads/2017/08/check-gray.png' // full path to image in media library
    ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = noParagraphs($content);

    $return = '';

    $return .= '<li class="checklist-item ' .  $class . '">';

	    if( ! empty($image) ) {
	    	$return .= '<img src="'. $image .'" alt="" />';
	    }

    	$return .= force_balance_tags($content); // Generally text -- this will be display: flex

    $return .= '</li>';

    return $return;
}
add_shortcode('checklist_item','nga_checklist_item');

// Generic HTML Elements
function nga_element($atts,$content){
    extract( shortcode_atts( array(
        'selector' => 'div',
        'class'    => '',
        'id'       => '',
        'style'    => ''
    ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = noParagraphs($content);

    $return = '';
    $return .= '<'. $selector .' id="' . $id . '" class="' .  $class . '" style="'. $style .'">';
        $return .= force_balance_tags($content);
    $return .= '</'. $selector .'>';
    return $return;
}
add_shortcode('element','nga_element');
add_shortcode('element2','nga_element');
add_shortcode('element3','nga_element');


/*
* ACCORDION (for FAQ)
* Author: Bread M
 */
function nga_accordion($atts,$content) {
    extract( shortcode_atts( array(
        'title' => '',
        'toggleicons' => '' //2 Font awesome classes, comma delimited, omitting the fa- (e.g: plus,minus) closedclass,openclass
    ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = noParagraphs( $content );

    $ao = '';
    $ao .= '<div class="accordion-item">';

    $icons = '';

    if( isset($toggleicons) && $toggleicons != '' ) {
        $toggleicons = explode(',',$toggleicons);
        $icons = '<i class="fa fa-'.$toggleicons[0].'" data-open="'.$toggleicons[1].'" data-closed="'.$toggleicons[0].'"></i> ';
    }
        $ao .= '<h3 class="accordion-title">'.$icons.$title.'</h3>';
        $ao .= '<div class="accordion-content">';
            $ao .= $content;
        $ao .= '</div>';
    $ao .= '</div>';

    return $ao;
}
add_shortcode('accordion_item','nga_accordion');
