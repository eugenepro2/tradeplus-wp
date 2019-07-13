<?php

/*
Element Description: VC Info Box
*/
 
// Element Class 
class TextBlock extends WPBakeryShortCode {
     
	// Element Init
	function __construct() {
			add_action( 'init', array( $this, 'text_block_mapping' ) );
			add_shortcode( 'text_block', array( $this, 'text_block_html' ) );
	}
	 
	// Element Mapping
	public function text_block_mapping() {
			 
			// Stop all if VC is not enabled
			if ( !defined( 'WPB_VC_VERSION' ) ) {
					return;
			}
			 
			// Map the block with vc_map()
			vc_map( 
					array(
							'name' => __('Текстовый блок', 'text_block'),
							'base' => 'text_block',
							// 'description' => __('Another simple VC box', 'text-domain'), 
							'category' => __('Плагины для темы', 'text-domain'),   
							'icon' => get_template_directory_uri().'/assets/img/vc-icon.png',            
							'params' => array(   
											 
									array(
										'type' => 'textarea_html',
										'holder' => 'hmtl',
										'class' => 'title-class',
										'text_block' => __( 'Текст', 'text-domain' ),
										'param_name' => 'content',
										'value' => __( '', 'text-domain' ),
										// 'description' => __( 'Box Title', 'text-domain' ),
										'admin_label' => false,
										'weight' => 0,
										'group' => 'Настройки',
									),  
          											
							),
					)
			);                                
			
	}
	 
	 
	// Element HTML
	public function text_block_html( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'title' => '',
			), $atts ) );

      $content = wpb_js_remove_wpautop($content, true);
			return $content;
	}
	 
} // End Element Class


// Element Class Init
new TextBlock();    
