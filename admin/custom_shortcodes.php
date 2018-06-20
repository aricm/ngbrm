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
		'image' => 'https://brm-inc.com/wp-content/uploads/2017/08/check-gray.png' // full path to image in media library
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

function nga_paypal_form() {
    $ppf = '';

    $ppf .= '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="payment-form">';
        //Payment Type
        $ppf .= '<input type="hidden" name="cmd" value="_xclick" />';
        //Payment Recipient
        $ppf .= '<input type="hidden" name="business" value="bbrown@brm-inc.com">';
        //Item Name
        $ppf .= '<input type="hidden" name="item_name" value="Business Records Management, Inc. - Invoice">';

        $ppf .= '<p>';
            $ppf .= '<label>Account Number</label><br/>';
            $ppf .= '<span>';
                $ppf .= '<input type="text" name="acctnumber" value="" placeholder="Account Number*">';
            $ppf .= '</span>';
        $ppf .= '</p>';
        $ppf .= '<p>';
            $ppf .= '<label>Invoice Number</label><br/>';
            $ppf .= '<span>';
                $ppf .= '<input type="text" name="invoicenumber" value="" placeholder="Invoice Number*">';
            $ppf .= '</span>';
        $ppf .= '</p>';
        $ppf .= '<p>';
            $ppf .= '<label>Payment Amount</label><br/>';
            $ppf .= '<span>';
                $ppf .= '<input type="text" name="amount" value="" placeholder="Payment Amount*">';
            $ppf .= '</span>';
        $ppf .= '</p>';
        $ppf .= '<p class="submit-container">';
            $ppf .= '<input type="submit" value="Make Payment" class="wpcf7-form-control wpcf7-submit btn btn-secondary">';
        $ppf .= '</p>';
    $ppf .= '</form>';

    $ppf .= '<script>';
        $ppf .= '
            jQuery("input[name=\"acctnumber\"],input[name=\"invoicenumber\"]").on("keyup", function(){
                jQuery("input[name=\"item_name\"]").val("Acct: "+jQuery("input[name=\"acctnumber\"]").val()+" / Invoice: "+jQuery("input[name=\"invoicenumber\"]").val());
            });
        ';
    $ppf .= '</script>';

    return $ppf;
}
add_shortcode('nga_paypal_form','nga_paypal_form');