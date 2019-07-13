<?php

/*
Element Description: VC Info Box
*/
 
// Element Class 
class Brand extends WPBakeryShortCode {
     
	// Element Init
	function __construct() {
			add_action( 'init', array( $this, 'brand_mapping' ) );
			add_shortcode( 'brand', array( $this, 'brand_html' ) );
	}
	 
	// Element Mapping
	public function brand_mapping() {
			 
			// Stop all if VC is not enabled
			if ( !defined( 'WPB_VC_VERSION' ) ) {
					return;
			}
			 
			// Map the block with vc_map()
			vc_map( 
					array(
							'name' => __('Бренд', 'home-branch'),
							'base' => 'brand',
							// 'description' => __('Another simple VC box', 'text-domain'), 
							'category' => __('Плагины для темы', 'text-domain'),   
							'icon' => get_template_directory_uri().'/assets/img/vc-icon.png',  
							'admin_enqueue_css' => array(get_template_directory_uri().'/css/vc_custom.css'),          
							'params' => array(   
											 
									array(
										'type' => 'attach_image',
										'holder' => 'image',
										'class' => 'title-class',
										'heading' => __( 'Изображение', 'text-domain' ),
										'param_name' => 'image',
										'value' => __( '', 'text-domain' ),
										// 'description' => __( 'Box Title', 'text-domain' ),
										'admin_label' => false,
										'weight' => 0,
										'group' => 'Настройки',
                  ),  
                  array(
										'type' => 'textfield',
										'holder' => 'text',
										'class' => 'title-class',
										'heading' => __( 'Задержка анимации в секундах', 'text-domain' ),
										'param_name' => 'second',
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
	public function brand_html( $atts, $content = null ) {

		extract( shortcode_atts( array(
      'image' => '',
      'second' => ''
			), $atts ) );
			
			$image =  wp_get_attachment_image_url($image, 'full');
			$html = "
      <div data-wow-delay='$second' class='wow fadeIn'>
        <div class='brands__block'><img src='$image' alt=''></div>
      </div>";      
			 
			return $html;
	}
	 
} // End Element Class


// Element Class Init
new Brand();    
