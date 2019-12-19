<?php

/*
Element Description: VC Info Box
*/
 
// Element Class 
class headingPage extends WPBakeryShortCode {
     
	// Element Init
	function __construct() {
			add_action( 'init', array( $this, 'heading_page_mapping' ) );
			add_shortcode( 'heading_page', array( $this, 'heading_page_html' ) );
	}
	 
	// Element Mapping
	public function heading_page_mapping() {
			 
			// Stop all if VC is not enabled
			if ( !defined( 'WPB_VC_VERSION' ) ) {
					return;
			}
			 
			// Map the block with vc_map()
			vc_map( 
					array(
							'name' => __('Заголовок(отдельная страница)', 'heading_page'),
							'base' => 'heading_page',
							// 'description' => __('Another simple VC box', 'text-domain'), 
							'category' => __('Плагины для темы', 'text-domain'),   
							'icon' => get_template_directory_uri().'/assets/img/vc-icon.png',            
							'params' => array(   
											 
									array(
										'type' => 'textfield',
										'holder' => 'h2',
										'class' => 'title-class',
										'heading_page' => __( 'Заголовок', 'text-domain' ),
										'param_name' => 'title',
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
	public function heading_page_html( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'title' => '',
			), $atts ) );

			$html = "
				<div class='heading'>
          <h2 class='wow fadeInDown'>$title</h2>
          <div class='line'>
            <div class='line__thin'></div>
          </div>
        </div>";      
			 
			return $html;
	}
	 
} // End Element Class


// Element Class Init
new headingPage();    
