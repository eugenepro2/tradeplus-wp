<?php

/*
Element Description: VC Info Box
*/
 
// Element Class 
class BranchItem extends WPBakeryShortCode {
     
	// Element Init
	function __construct() {
			add_action( 'init', array( $this, 'branch_item_mapping' ) );
			add_shortcode( 'branch_item', array( $this, 'branch_item_html' ) );
	}
	 
	// Element Mapping
	public function branch_item_mapping() {
			 
			// Stop all if VC is not enabled
			if ( !defined( 'WPB_VC_VERSION' ) ) {
					return;
			}
			 
			// Map the block with vc_map()
			vc_map( 
					array(
							'name' => __('Блок направлениие', 'home-branch'),
							'base' => 'branch_item',
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
							),
					)
			);                                
			
	}
	 
	 
	// Element HTML
	public function branch_item_html( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'title' => '',
      'text' => '',
      'checkbox' => ''
			), $atts ) );
			
      $className = ($checkbox) ? "item--big" : '';

      $html = "
        <div class='item item--blue $className'>
          <div class='block'>
            <h2>$title</h2>
            <p>$text</p>
          </div>
        </div>
			";      
			 
			return $html;
	}
	 
} // End Element Class


// Element Class Init
new BranchItem();    
