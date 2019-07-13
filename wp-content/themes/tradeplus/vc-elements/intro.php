<?php

/*
Element Description: VC Info Box
*/
 
// Element Class 
class Intro extends WPBakeryShortCode {
     
	// Element Init
	function __construct() {
			add_action( 'init', array( $this, 'intro_mapping' ) );
			add_shortcode( 'intro', array( $this, 'intro_html' ) );
	}
	 
	// Element Mapping
	public function intro_mapping() {
			 
			// Stop all if VC is not enabled
			if ( !defined( 'WPB_VC_VERSION' ) ) {
					return;
			}
			 
			// Map the block with vc_map()
			vc_map( 
					array(
							'name' => __('Первый экран', 'home-branch'),
							'base' => 'intro',
							// 'description' => __('Another simple VC box', 'text-domain'), 
							'category' => __('Плагины для темы', 'text-domain'),   
							'icon' => get_template_directory_uri().'/assets/img/vc-icon.png',            
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
										'type' => 'textarea',
										'holder' => 'p',
										'class' => 'text-class',
										'heading' => __( 'Текст', 'text-domain' ),
										'param_name' => 'text',
										'value' => __( '', 'text-domain' ),
										// 'description' => __( 'Box Text', 'text-domain' ),
										'admin_label' => false,
										'weight' => 0,
										'group' => 'Настройки',
									),   
                  array(
										'type' => 'textfield',
										'holder' => 'btn',
										'class' => 'title-class',
										'heading' => __( 'Текст кнопки', 'text-domain' ),
										'param_name' => 'btn_text',
										'value' => __( '', 'text-domain' ),
										// 'description' => __( 'Box Title', 'text-domain' ),
										'admin_label' => false,
										'weight' => 0,
										'group' => 'Настройки',
									),  
									array(
										'type' => 'vc_link',
										'holder' => 'vc_link',
										'class' => 'text-class',
										'heading' => __( 'Ссылка кнопки', 'text-domain' ),
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
	public function intro_html( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'image' => '',
			'title' => '',
      'text' => '',
      'btn_text' => '',
			'href' => ''
			), $atts ) );
			
			$image =  wp_get_attachment_image_url($image, 'full');
			$href = vc_build_link( $href );
			$href = get_permalink(print_r($href));
			$html = "
            <div style='background-image: url($image)' class='intro__block'><img src='$image' alt='' class='hidden-md'>
              <div class='main'>
                <div class='container'>
                  <div class='row middle-xs'>
                    <div class='col-md-5 col-xs-12'>
                      <h1 class='wow fadeInDown'>$title</h1>
                      <p data-wow-delay='.5s' class='wow fadeIn'>$text</p>
                      <div class='flex'><a href='$href' data-wow-delay='.7s' class='wow fadeIn btn btn-white'>$btn_text</a></div>
                    </div>
                  </div>
                </div>
              </div>
						</div>
						";      
			 
			return $html;
	}
	 
} // End Element Class


// Element Class Init
new Intro();    
