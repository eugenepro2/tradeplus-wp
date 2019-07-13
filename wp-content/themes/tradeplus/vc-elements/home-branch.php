<?php

/*
Element Description: VC Info Box
*/
 
// Element Class 
class vcInfoBox extends WPBakeryShortCode {
     
	// Element Init
	function __construct() {
			add_action( 'init', array( $this, 'vc_infobox_mapping' ) );
			add_shortcode( 'vc_infobox', array( $this, 'vc_infobox_html' ) );
	}
	 
	// Element Mapping
	public function vc_infobox_mapping() {
			 
			// Stop all if VC is not enabled
			if ( !defined( 'WPB_VC_VERSION' ) ) {
					return;
			}
			 
			// Map the block with vc_map()
			vc_map( 
					array(
							'name' => __('Направление на главной', 'home-branch'),
							'base' => 'vc_infobox',
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
										'type' => 'checkbox',
										'holder' => 'checkbox',
										'class' => 'text-class',
										'heading' => __( 'Большой блок?', 'text-domain' ),
										'param_name' => 'checkbox',
										'value' => __( '', 'text-domain' ),
										'description' => __( 'Поставь галочку если этот блок должен быть большим', 'text-domain' ),
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
	public function vc_infobox_html( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'image' => '',
			'title' => '',
			'text' => '',
			'checkbox' => '',
			'href' => ''
			), $atts ) );
			
			$image =  wp_get_attachment_image_url($image, 'full');
			$className = ($checkbox) ? 'branchs__big' : 'branchs__small';
			$icon = ($checkbox) ? "<div><i class='icon icon-arrow'></i></div>" : '';
			$href = vc_build_link( $href );
			$href = $href['url'];
			$html = "
				<div data-wow-delay='.3s' class='wow fadeIn'>
					<a href='$href' class='$className'>
						<article>
							<header><img src='$image' alt='' /></header>
							<main>
								<h1>$title</h1>
								<p>$text</p>
								$icon
							</main>
						</article>
					</a>
				</div>";      
			 
			return $html;
	}
	 
} // End Element Class


// Element Class Init
new vcInfoBox();    
