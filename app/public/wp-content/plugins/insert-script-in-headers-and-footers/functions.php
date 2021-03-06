<?php  
if( !defined( 'ABSPATH' ) ) exit;
function ishf_get_option_header_script()
{
	return $header_script=   wp_unslash(get_option('insert_header_script_gk'));
}
function ishf_get_option_footer_script()
{
	return $footer_script=  wp_unslash(get_option('insert_footer_script_gk'));
}

function  ishf_failure_option_msg_header_footer_script($msg)
{
	
	echo  '<div class="notice notice-error ishf-error-msg is-dismissible"><p>' . $msg . '</p></div>';	
	
}
function  ishf_success_option_msg_header_footer_script($msg)
{
	
	
	echo ' <div class="notice notice-success ishf-success-msg is-dismissible"><p>'. $msg . '</p></div>';			
	
}
function ishf_output($setting){
	
	if ( apply_filters( 'disable_insert', false ) ) {
			return;
		}

	if('insert_header_script_bk'==$setting && apply_filters( 'disable_insert_header', false )){
		return;
	}
	if('insert_footer_script_bk'==$setting && apply_filters( 'disable_insert_footer', false )){
		return;
	}
	$meta = get_option( $setting );
	if ( empty( $meta ) ) {
		return;
	}
	if ( trim( $meta ) == '' ) {
		return;
	}

	// Output
	echo html_entity_decode(wp_unslash( $meta ));
	
}

?>