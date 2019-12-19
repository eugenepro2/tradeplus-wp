<?php

/*
Element Description: VC Info Box
*/
 
// Element Class 
class banner extends WPBakeryShortCode {
     
	// Element Init
	function __construct() {
			add_action( 'init', array( $this, 'banner_mapping' ) );
			add_shortcode( 'banner', array( $this, 'banner_html' ) );
	}
	 
	// Element Mapping
	public function banner_mapping() {
			 
			// Stop all if VC is not enabled
			if ( !defined( 'WPB_VC_VERSION' ) ) {
					return;
			}
			 
			// Map the block with vc_map()
			vc_map( 
					array(
							'name' => __('Баннер', 'home-branch'),
							'base' => 'banner',
							// 'description' => __('Another simple VC box', 'text-domain'), 
							'category' => __('Плагины для темы', 'text-domain'),   
							'icon' => get_template_directory_uri().'/assets/img/vc-icon.png',  
							'admin_enqueue_css' => array(get_template_directory_uri().'/css/vc_custom.css'),          
							'params' => array(   
											 
									array(
										'type' => 'textfield',
										'holder' => 'h1',
										'class' => 'title-class',
										'heading' => __( 'Заголовок', 'text-domain' ),
										'param_name' => 'title',
										'value' => __( '', 'text-domain' ),
										// 'description' => __( 'Box Title', 'text-domain' ),
										'admin_label' => false,
										'weight' => 0,
										'group' => 'Настройки',
									),  
									array(
										'type' => 'checkbox',
										'holder' => 'checkbox',
										'class' => 'text-class',
										'heading' => __( 'Правый?', 'text-domain' ),
										'param_name' => 'checkbox',
										'value' => __( '', 'text-domain' ),
										'description' => __( 'Поставь галочку если этот блок должен выравниваться по правой стороне(по умолчанию блок выравнивается по левой стороне)', 'text-domain' ),
										'admin_label' => false,
										'weight' => 0,
										'group' => 'Настройки',
                  ),  
									array(
										'type' => 'vc_link',
										'holder' => 'vc_link',
										'class' => 'text-class',
										'heading' => __( 'Ссылка', 'text-domain' ),
										'param_name' => 'href',
										'value' => __( '', 'text-domain' ),
										'description' => __( '', 'text-domain' ),
										'admin_label' => false,
										'weight' => 0,
										'group' => 'Настройки',
									),                      
											
							),
					)
			);                                
			
	}
	 
	 
	// Element HTML
	public function banner_html( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'title' => '',
			'checkbox' => '',
			'href' => ''
			), $atts ) );

			$right = ($checkbox) ? "right" : '';
			$href = vc_build_link( $href );
			$href = $href['url'];
			$html = "
				<div data-wow-delay='.3s' class='wow fadeIn'>
          <a href='$href' class='banner $right'>
            <div><i class='icon icon-arrow'></i></div>
            <p>$title</p>
					</a>
				</div>";      
			 
			return $html;
	}
	 
} // End Element Class


// Element Class Init
new banner();    
