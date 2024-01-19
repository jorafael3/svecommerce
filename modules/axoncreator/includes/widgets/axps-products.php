<?php
/**
 * AxonCreator - Website Builder
 *
 * NOTICE OF LICENSE
 *
 * @author    axonvip.com <support@axonvip.com>
 * @copyright 2021 axonvip.com
 * @license   You can not resell or redistribute this software.
 *
 * https://www.gnu.org/licenses/gpl-3.0.html
 */

namespace AxonCreator;

use AxonCreator\Wp_Helper; 

if ( ! defined( '_PS_VERSION_' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor image carousel widget.
 *
 * Elementor widget that displays a set of images in a rotating carousel or
 * slider.
 *
 * @since 1.0.0
 */
class Widget_Axps_Products extends Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve image carousel widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'axps-products';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve image carousel widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return Wp_Helper::__( 'Products ( Carousel / Grid )', 'elementor' );
	}
	
	public function get_categories() {
		return [ 'axon-elements' ];
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve image carousel widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-slider-push';
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the widget belongs to.
	 *
	 * @since 2.1.0
	 * @access public
	 *
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'product', 'axps' ];
	}

	/**
	 * Register image carousel widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
		$this->_register_content_controls();
		
		$this->_register_styling_controls();
	}
		
	protected function _register_content_controls() {
		
		$source = [
			's' => Wp_Helper::__('Select products', 'elementor'),
			'n' => Wp_Helper::__('New products', 'elementor'),
			'p' => Wp_Helper::__('Price drops', 'elementor'),
			'b' => Wp_Helper::__('Best sellers', 'elementor'),
			'c' => Wp_Helper::__('Products in Category', 'elementor'),
			'm' => Wp_Helper::__('Products in Brands', 'elementor'),
			'p_s' => Wp_Helper::__('Products Same Category(Only visible in the product details page)', 'elementor'),
			'p_a' => Wp_Helper::__('Related products( Only visible in the product details page )', 'elementor')
		];
		
		$module = \Module::getInstanceByName('axoncreator');
		
		$categoriesSource = $module->getCategories();
		
		$manufacturers = \Manufacturer::getManufacturers(false, Wp_Helper::$id_lang, true, false, false, false, true);
		
		$manufacturersSource = [];
		
		foreach ( $manufacturers as $key => $manufacturer ) {			
			$manufacturersSource[$manufacturer['id_manufacturer']] =  $manufacturer['name'];
		}
										
		$this->start_controls_section(
			'section_options',
			[
				'label' => Wp_Helper::__( 'Product Options', 'elementor' ),
			]
		);

		$this->add_control(
			'source',
			[
				'label' => Wp_Helper::__('Source of products', 'elementor'),
				'type' => Controls_Manager::SELECT,
				'default' => 'n',
				'options' => $source,
			]
		);

		$this->add_control(
			'category',
			[
				'label' => Wp_Helper::__('Select category', 'elementor'),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => $categoriesSource,
				'condition' => [
					'source' => 'c',
				]
			]
		);
		
		$this->add_control(
			'manufacturer',
			[
				'label' => Wp_Helper::__('Select brand', 'elementor'),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => $manufacturersSource,
				'condition' => [
					'source' => 'm',
				]
			]
		);

		$this->add_control(
			'product_ids',
			[
				'label'       => Wp_Helper::__( 'Select products', 'elementor' ),
				'type'        => Controls_Manager::AUTOCOMPLETE,
				'search'      => 'axps_get_products_by_query',
				'render'      => 'axps_get_products_title_by_id',
				'multiple'    => true,
				'label_block' => true,
				'condition' => [
					'source' => 's',
				]
			]
		);
		
		$this->add_control(
			'limit',
			[
				'label' => Wp_Helper::__('Product Limit', 'elementor'),
				'type' => Controls_Manager::NUMBER,
				'min' => 1,
				'default' => 10,
				'condition' => [
					'source!' => ['s', 'p_a'],
				]
			]
		);

		$this->add_control(
			'randomize',
			[
				'label' => Wp_Helper::__('Randomize', 'elementor'),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => Wp_Helper::__('Yes', 'elementor'),
				'label_off' => Wp_Helper::__('No', 'elementor'),
				'condition' => [
					'source' => 'c',
				],
			]
		);

		$this->add_control(
			'order_by',
			[
				'label' => Wp_Helper::__('Order By', 'elementor'),
				'type' => Controls_Manager::SELECT,
				'default' => 'position',
				'options' => [
					'position' => Wp_Helper::__('Position', 'elementor'),
					'name' => Wp_Helper::__('Name', 'elementor'),
					'date_add' => Wp_Helper::__('Date add', 'elementor'),
					'price' => Wp_Helper::__('Price', 'elementor'),
					'quantity' => Wp_Helper::__('Quantity', 'elementor'),
				],
				'condition' => [
					'source!' => ['s', 'p_a'],
					'randomize!' => 'yes',
				]
			]
		);

		$this->add_control(
			'order_way',
			[
				'label' => Wp_Helper::__('Order Direction', 'elementor'),
				'type' => Controls_Manager::SELECT,
				'default' => 'ASC',
				'options' => [
					'ASC' => Wp_Helper::__('Ascending', 'elementor'),
					'DESC' => Wp_Helper::__('Descending', 'elementor'),
				],
				'condition' => [
					'source!' => ['s', 'p_a'],
					'randomize!' => 'yes',
				]
			]
		);

		$this->end_controls_section();
		
		$this->_register_view_settings_controls();

	}
	
	protected function _register_styling_controls() {
		
		$this->start_controls_section(
			'section_button_load_more',
			[
				'label' => Wp_Helper::__( 'Button Load More', 'elementor' ),
				'type' => Controls_Manager::SECTION,
				'tab' => Controls_Manager::TAB_STYLE,
				'condition'   => [
					'view_type' => 'grid',
					'source!' => ['s', 'p_a'],
				],
			]
		);
		
			$this->add_responsive_control(
				'load_more_width',

				[
					'label' => Wp_Helper::__( 'Width', 'elementor' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 200,
							'max' => 500,
						],
						'%' => [
							'min' => 1,
							'max' => 100,
						]
					],
					'selectors' => [
						'{{WRAPPER}} .ajax-load-button .btn' => 'width: {{SIZE}}{{UNIT}}'
					],
					'separator' => 'before',
				]
			);
		
			$this->add_responsive_control(
				'load_more_margin',
				[
					'label' => Wp_Helper::__( 'Margin top', 'elementor' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px' ],
					'range' => [
						'px' => [
							'min' => 1,
							'max' => 200,
						]
					],
					'selectors' => [
						'{{WRAPPER}} .ajax-load-button' => 'margin-top: {{SIZE}}{{UNIT}}'
					],
					'separator' => 'before',
				]
			);
			
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'load_more_typography',
					'selector' => '{{WRAPPER}} .ajax-load-button .btn',
				]
			);

			$this->start_controls_tabs( 'title_tabs_style' );

				$this->start_controls_tab(
					'load_more_tab_normal',
					[
						'label' => Wp_Helper::__( 'Normal', 'elementor' ),
					]
				);

					$this->add_control(
						'load_more_text_color',
						[
							'label' => Wp_Helper::__( 'Text Color', 'elementor' ),
							'type' => Controls_Manager::COLOR,
							'default' => '',
							'selectors' => [
								'{{WRAPPER}} .ajax-load-button .btn' => 'fill: {{VALUE}}; color: {{VALUE}};',
							],
						]
					);

					$this->add_control(
						'load_more_background_color',
						[
							'label' => Wp_Helper::__( 'Background Color', 'elementor' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .ajax-load-button .btn' => 'background-color: {{VALUE}};',
							],
						]
					);

				$this->end_controls_tab();

				$this->start_controls_tab(
					'load_more_tab_hover',
					[
						'label' => Wp_Helper::__( 'Hover & Active', 'elementor' ),
					]
				);

					$this->add_control(
						'load_more_hover_color',
						[
							'label' => Wp_Helper::__( 'Text Color', 'elementor' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .ajax-load-button .btn:hover' => 'fill: {{VALUE}}; color: {{VALUE}};',
								'{{WRAPPER}} .ajax-load-button .btn.ajax-loader:hover::before' => 'border-color: {{VALUE}};',
							],
						]
					);

					$this->add_control(
						'load_more_background_hover_color',
						[
							'label' => Wp_Helper::__( 'Background Color', 'elementor' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .ajax-load-button .btn:hover' => 'background-color: {{VALUE}};',
							],
						]
					);

					$this->add_control(
						'load_more_hover_border_color',
						[
							'label' => Wp_Helper::__( 'Border Color', 'elementor' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .ajax-load-button .btn:hover' => 'border-color: {{VALUE}};',
							],
						]
					);

				$this->end_controls_tab();

			$this->end_controls_tabs();

			$this->add_group_control(
				Group_Control_Border::get_type(),
				[
					'name' => 'load_more_border',
					'selector' => '{{WRAPPER}} .ajax-load-button .btn',
					'separator' => 'before',
				]
			);

			$this->add_responsive_control(
				'load_more_border_radius',
				[
					'label' => Wp_Helper::__( 'Border Radius', 'elementor' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .ajax-load-button .btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					]
				]
			);

			$this->add_group_control(
				Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'load_more_box_shadow',
					'selector' => '{{WRAPPER}} .ajax-load-button .btn',
				]
			);

			$this->add_responsive_control(

				'load_more_text_padding',
				[
					'label' => Wp_Helper::__( 'Padding', 'elementor' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .ajax-load-button .btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'separator' => 'before',
				]
			);

		$this->end_controls_section();
		
		$this->_register_view_styling_controls();
		
		$this->start_controls_section(
			'section_product_box',
			[
				'label' => Wp_Helper::__( 'Product Box', 'elementor' ),
				'type' => Controls_Manager::SECTION,
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			$this->start_controls_tabs( 'title_tabs_product_box' );

				$this->start_controls_tab(
					'product_box_tab_normal',
					[
						'label' => Wp_Helper::__( 'Normal', 'elementor' ),
					]
				);

					$this->add_control(
						'product_box_background_color',
						[
							'label' => Wp_Helper::__( 'Background Color', 'elementor' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .item .item-inner' => 'background-color: {{VALUE}};',
							],
						]
					);
		
					$this->add_group_control(
						Group_Control_Box_Shadow::get_type(),
						[
							'name' => 'product_box_box_shadow',
							'selector' => '{{WRAPPER}} .item .item-inner',
						]
					);
		
				$this->end_controls_tab();

				$this->start_controls_tab(
					'product_box_tab_hover',
					[
						'label' => Wp_Helper::__( 'Hover', 'elementor' ),
					]
				);

					$this->add_control(
						'product_box_background_hover_color',
						[
							'label' => Wp_Helper::__( 'Background Color', 'elementor' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .item .item-inner:hover' => 'background-color: {{VALUE}};',
							],
						]
					);
		
					$this->add_group_control(
						Group_Control_Box_Shadow::get_type(),
						[
							'name' => 'product_box_hover_box_shadow',
							'selector' => '{{WRAPPER}} .item .item-inner:hover',
						]
					);

					$this->add_control(
						'product_box_hover_border_color',
						[
							'label' => Wp_Helper::__( 'Border Color', 'elementor' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .item .item-inner:hover' => 'border-color: {{VALUE}};',
							],
						]
					);

				$this->end_controls_tab();

			$this->end_controls_tabs();

			$this->add_group_control(
				Group_Control_Border::get_type(),
				[
					'name' => 'product_box_border',
					'selector' => '{{WRAPPER}} .item .item-inner',
					'separator' => 'before',
				]
			);

			$this->add_responsive_control(
				'product_box_border_radius',
				[
					'label' => Wp_Helper::__( 'Border Radius', 'elementor' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .item .item-inner' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};overflow: hidden;',
					]
				]
			);

			$this->add_responsive_control(
				'product_box_padding',
				[
					'label' => Wp_Helper::__( 'Padding', 'elementor' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .item .item-inner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'separator' => 'before',
				]
			);

		$this->end_controls_section();
		
		$this->start_controls_section(
			'section_product_element_top',
			[
				'label' => Wp_Helper::__( 'Product Element Top', 'elementor' ),
				'type' => Controls_Manager::SECTION,
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'product_element_top_background_color',
				[
					'label' => Wp_Helper::__( 'Background Color', 'elementor' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .item .item-inner .element-top' => 'background-color: {{VALUE}};',
					],
				]
			);
		
			$this->add_group_control(
				Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'product_element_top_box_shadow',
					'selector' => '{{WRAPPER}} .item .item-inner .element-top',
				]
			);
		
			$this->add_group_control(
				Group_Control_Border::get_type(),
				[
					'name' => 'product_element_top_border',
					'selector' => '{{WRAPPER}} .item .item-inner .element-top',
					'separator' => 'before',
				]
			);

			$this->add_responsive_control(
				'product_element_top_border_radius',
				[
					'label' => Wp_Helper::__( 'Border Radius', 'elementor' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .item .item-inner .element-top' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					]
				]
			);

			$this->add_responsive_control(
				'product_element_top_padding',
				[
					'label' => Wp_Helper::__( 'Padding', 'elementor' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .item .item-inner .element-top' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'separator' => 'before',
				]
			);

		$this->end_controls_section();
		
		$this->start_controls_section(
			'section_product_element_bottom',
			[
				'label' => Wp_Helper::__( 'Product Element Bottom', 'elementor' ),
				'type' => Controls_Manager::SECTION,
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

			$this->add_control(
				'product_element_bottom_background_color',
				[
					'label' => Wp_Helper::__( 'Background Color', 'elementor' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .item .item-inner .element-bottom' => 'background-color: {{VALUE}};',
					],
				]
			);
		
			$this->add_group_control(
				Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'product_element_bottom_box_shadow',
					'selector' => '{{WRAPPER}} .item .item-inner .element-bottom',
				]
			);
		
			$this->add_group_control(
				Group_Control_Border::get_type(),
				[
					'name' => 'product_element_bottom_border',
					'selector' => '{{WRAPPER}} .item .item-inner .element-bottom',
					'separator' => 'before',
				]
			);

			$this->add_responsive_control(
				'product_element_bottom_border_radius',
				[
					'label' => Wp_Helper::__( 'Border Radius', 'elementor' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .item .item-inner .element-bottom' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					]
				]
			);

			$this->add_responsive_control(
				'product_element_bottom_padding',
				[
					'label' => Wp_Helper::__( 'Padding', 'elementor' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', 'em', '%' ],
					'selectors' => [
						'{{WRAPPER}} .item .item-inner .element-bottom' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
					'separator' => 'before',
				]
			);
		
			$this->add_control(
				'heading_title',
				[
					'label' => Wp_Helper::__( 'Title', 'elementor' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
		
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'title_typography',
					'selector' => '{{WRAPPER}} .item .item-inner .product_name',
				]
			);
		
			$this->add_responsive_control(
				'title_margin_bottom',

				[
					'label' => Wp_Helper::__( 'Space', 'elementor' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 50,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .item .item-inner .product_name' => 'margin-bottom: {{SIZE}}{{UNIT}}'
					],
				]
			);
		
			$this->add_control(
				'product_element_bottom_title_color',
				[
					'label' => Wp_Helper::__( 'Title Color', 'elementor' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .item .item-inner .product_name a' => 'color: {{VALUE}};',
					],
				]
			);
		
			$this->add_control(
				'product_element_bottom_title_hover_color',
				[
					'label' => Wp_Helper::__( 'Title Hover Color', 'elementor' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .item .item-inner .product_name a:hover' => 'color: {{VALUE}};',
					],
				]
			);
		
			$this->add_control(
				'heading_category',
				[
					'label' => Wp_Helper::__( 'Category', 'elementor' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
		
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'category_typography',
					'selector' => '{{WRAPPER}} .item .item-inner .ax-product-cats',
				]
			);
		
			$this->add_responsive_control(
				'category_margin_bottom',

				[
					'label' => Wp_Helper::__( 'Space', 'elementor' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 50,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .item .item-inner .ax-product-cats' => 'margin-bottom: {{SIZE}}{{UNIT}}'
					],
				]
			);
		
			$this->add_control(
				'product_element_bottom_category_color',
				[
					'label' => Wp_Helper::__( 'Category Color', 'elementor' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .item .item-inner .ax-product-cats a' => 'color: {{VALUE}};',
					],
				]
			);
		
			$this->add_control(
				'product_element_bottom_category_hover_color',
				[
					'label' => Wp_Helper::__( 'Category Hover Color', 'elementor' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .item .item-inner .ax-product-cats a:hover' => 'color: {{VALUE}};',
					],
				]
			);
		
			$this->add_control(
				'heading_price',
				[
					'label' => Wp_Helper::__( 'Price', 'elementor' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
		
			$this->add_group_control(
				Group_Control_Typography::get_type(),
				[
					'name' => 'price_typography',
					'selector' => '{{WRAPPER}} .item .item-inner .product-price-and-shipping',
				]
			);
		
			$this->add_responsive_control(
				'price_margin_bottom',

				[
					'label' => Wp_Helper::__( 'Space', 'elementor' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 50,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .item .item-inner .product-price-and-shipping' => 'margin-bottom: {{SIZE}}{{UNIT}}'
					],
				]
			);
		
			$this->add_control(
				'product_element_bottom_price_color',
				[
					'label' => Wp_Helper::__( 'Price Color', 'elementor' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .item .item-inner .product-price-and-shipping .price' => 'color: {{VALUE}};',
					],
				]
			);
		
			$this->add_control(
				'product_element_bottom_regular_price_color',
				[
					'label' => Wp_Helper::__( 'Regular Price Color', 'elementor' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .item .item-inner .product-price-and-shipping .regular-price' => 'color: {{VALUE}};',
					],
				]
			);

		$this->end_controls_section();
	}

	/**
	 * Render image carousel widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		
		if ( Wp_Helper::is_admin() ) {
			return;
		}
		
        $settings = $this->get_settings_for_display();
		
		$attrs = $this->_render_view_setting_attributes( $settings, [ 'products product-type-' . $settings['items_type'] ], [] );

        $module = \Module::getInstanceByName('axoncreator');

        $context = \Context::getContext();
		
		?>
        <div<?php echo $attrs['attr_class_section']; ?>>
            <div<?php echo $attrs['attr_class_wrapper']; ?><?php echo $attrs['attr_slider_options']; ?><?php echo $attrs['attr_widget_options']; ?>>
				<div class="swiper-wrapper">
					<?php if( $settings['ajax'] ){ ?>
						<div class="placeholder-load">Load more</div>
					<?php }else{

						if( $settings['source'] != 's' ){
							$data = $module->_prepProducts( $attrs );		
						}else{
							$data = $module->_prepProductsSelected( $attrs );	
						}

						$content = array_merge( $attrs, $data );
						
						echo $this->fetch( 'module:axoncreator/views/templates/widgets/products.tpl', ['content' => $content] );
					} ?>
				</div>
            </div>
			<?php if( $settings['view_type'] == 'carousel' ){ ?>
				<div class="swiper-arrows">
					<button class="axps-swiper-arrow axps-swiper-arrow-prev">
						<?php
							if ( ! empty( $settings['arrow_prev_icon']['value'] ) ) { 
								Icons_Manager::render_icon( $settings['arrow_prev_icon'], [ 'aria-hidden' => 'true' ] );
							}
						?>
					</button>
					<button class="axps-swiper-arrow axps-swiper-arrow-next">
						<?php
							if ( ! empty( $settings['arrow_next_icon']['value'] ) ) { 
								Icons_Manager::render_icon( $settings['arrow_next_icon'], [ 'aria-hidden' => 'true' ] );
							}
						?>
					</button>
				</div>
				<div class="swiper-dots">
					<div class="axps-swiper-pagination"></div>
				</div>
			<?php }elseif( $settings['load_more'] && $settings['source'] != 's' ) { ?>
				<div class="ajax-load-wrapper">
					<div class="ajax-load-button">
						<div class="btn widget-ajax-trigger">
							<?php echo $context->getTranslator()->trans('More Products', [], 'Shop.Theme.Axon'); ?>
						</div>
						<div class="btn ajax-loader" style="display:none;">
							<i class="fa fa-circle-notch"></i><?php echo $context->getTranslator()->trans('Loading...', [], 'Shop.Theme.Axon'); ?>
						</div>
					</div>
				</div>
			<?php } ?>
        </div>
		<?php
	}
	
	protected function fetch( $templatePath, $params ) {
		$context = \Context::getContext();
		
		$smarty = $context->smarty;
		
        if ( is_object( $context->smarty ) ) {
            $smarty = $context->smarty->createData( $context->smarty );
        }
		
		$smarty->assign( $params );
		
        $template = $context->smarty->createTemplate( $templatePath, null, null, $smarty );

        return $template->fetch();
	}
	
	protected function _render_view_setting_attributes( $settings, $attr_class_section = [], $attr_class_wrapper = [] ) {
		
		$options = [];
		
		$options['view_type'] = $settings['view_type'];
		$options['source'] = $settings['source'];
		$options['category'] = $settings['category'];
		$options['manufacturer'] = $settings['manufacturer'];
		$options['product_ids'] = $settings['product_ids'];
		$options['limit'] = $settings['limit'];
		$options['randomize'] = $settings['randomize'];
		$options['order_by'] = $settings['order_by'];
		$options['order_way'] = $settings['order_way'];
		$options['items_type'] = $settings['items_type'];
		$options['image_size'] = $settings['image_size'];
		$options['per_col'] = $settings['per_col'];
		
		$options['paged'] = 1;
				
		$attr_class_wrapper[] = 'wrapper-items';
		
		if( $settings['view_type'] == 'carousel' ){
			
			$attr_class_section[] = 'axps-swiper-slider';	
		
			$attr_class_wrapper[] = 'wrapper-swiper-slider swiper-container';

			$slidesToShow = abs( (int)$settings['per_line'] );
			$slidesToShowTablet = abs( (int)$settings['per_line_tablet'] );
			$slidesToShowMobile	= abs( (int)$settings['per_line_mobile'] );

			$slidesToScroll = abs( (int)$settings['scroll'] );
			$slidesToScrollTablet = abs( (int)$settings['scroll_tablet'] );
			$slidesToScrollMobile = abs( (int)$settings['scroll_mobile'] );

			$attr_class_wrapper[] = 'items-xs-' . $slidesToShowMobile;
			$attr_class_wrapper[] = 'items-md-' . $slidesToShowTablet;
			$attr_class_wrapper[] = 'items-lg-' . $slidesToShow;

			if( in_array( $settings['navigation'], ['arrows', 'both'] ) ){
				$attr_class_section[] = 'swiper-arrows-on';
				$attr_class_section[] = 'swiper-arrows-' . $settings['arrows_position'];
				$attr_class_section[] = 'swiper-arrows-show-' . $settings['arrows_show'];
			}

			if( in_array( $settings['navigation_tablet'], ['arrows', 'both'] ) ){
				$attr_class_section[] = 'swiper-arrows-md-on';
				$attr_class_section[] = 'swiper-arrows-md-' . $settings['arrows_position_tablet'];
				$attr_class_section[] = 'swiper-arrows-show-md-' . $settings['arrows_show_tablet'];
			}

			if( in_array( $settings['navigation_mobile'], ['arrows', 'both'] ) ){
				$attr_class_section[] = 'swiper-arrows-xs-on';
				$attr_class_section[] = 'swiper-arrows-xs-' . $settings['arrows_position_mobile'];
				$attr_class_section[] = 'swiper-arrows-show-xs-' . $settings['arrows_show_mobile'];
			}

			if( in_array( $settings['navigation'], ['dots', 'both'] ) ){
				$attr_class_section[] = 'swiper-dots-on';
				$attr_class_section[] = 'swiper-dots-' . $settings['dots_position'];
			}

			if( in_array( $settings['navigation_tablet'], ['dots', 'both'] ) ){
				$attr_class_section[] = 'swiper-dots-md-on';
				$attr_class_section[] = 'swiper-dots-md-' . $settings['dots_position_tablet'];
			}

			if( in_array( $settings['navigation_mobile'], ['dots', 'both'] ) ){
				$attr_class_section[] = 'swiper-dots-xs-on';
				$attr_class_section[] = 'swiper-dots-xs-' . $settings['dots_position_mobile'];
			}

			$slider_options = array(
				'slidesToShow' => $slidesToShow,
				'slidesToShowTablet' => $slidesToShowTablet,
				'slidesToShowMobile' => $slidesToShowMobile,
				'slidesToScroll' => $slidesToScroll,
				'slidesToScrollTablet' => $slidesToScrollTablet,
				'slidesToScrollMobile' => $slidesToScrollMobile,
				'autoplaySpeed' => abs( (int)$settings['auto_speed'] ),
				'autoplay' => $settings['auto'] ? true : false,
				'infinite' => $settings['infinite'] ? true : false,
				'pauseOnHover' => $settings['pause'] ? true : false,
				'speed' => abs( (int)$settings['speed'] ),
				'arrowPrevIcon' => $settings['arrow_prev_icon'],
				'arrowNextIcon' => $settings['arrow_next_icon'],
			);
			
			$attr_slider_options = sprintf( ' %1$s="%2$s"', 'data-slider-options', Wp_Helper::esc_attr( json_encode( $slider_options ) ) );

		}else{
			$attr_class_section[] = 'axps-grid-items';
		}
		
		if( $settings['ajax'] ) {
			$attr_class_wrapper[] = 'is-load-widget';
			$attr_class_wrapper[] = 'widget-loading';
		}elseif( $settings['view_type'] == 'carousel' ){
			$attr_class_wrapper[] = 'is-carousel';
		}else{
			$attr_class_wrapper[] = 'is-grid';
		}
		
		if( $settings['ajax'] || ( $settings['view_type'] == 'grid' && $settings['load_more'] ) ) {
			$widget_options = [ 'type' => 'product', 'options' => $options ];
			$attr_widget_options = sprintf( ' %1$s="%2$s"', 'data-widget-options', Wp_Helper::esc_attr( json_encode( $widget_options ) ) );
		}
		
		$content = $options;
		
		$content['attr_class_section'] = sprintf( ' %1$s="%2$s"', 'class', implode( ' ', $attr_class_section ) );
		$content['attr_class_wrapper'] = sprintf( ' %1$s="%2$s"', 'class', implode( ' ', $attr_class_wrapper ) );
		$content['attr_slider_options'] = isset( $attr_slider_options ) ? $attr_slider_options : '';
		$content['attr_widget_options'] = isset( $attr_widget_options ) ? $attr_widget_options : '';
				
		return $content;		
	}
	
	protected function _register_view_settings_controls() {
		
		$items_type = [];
		
		for( $i = 1; $i <= 30; $i++ ){
			$items_type[$i] = Wp_Helper::__( 'Products type - ' . $i, 'elementor' );
		}
		
		$items_type = Wp_Helper::apply_filters( 'axoncreator_products_type', $items_type );
		
		$image_sizes = [];
		$product_images = \ImageType::getImagesTypes('products');	

		foreach( $product_images as $key => $product_image ) {
			$image_sizes[ $product_image['name'] ] = $product_image['name'];
		}
		
		$this->start_controls_section(
			'section_view_settings',
			[
				'label' => Wp_Helper::__( 'View Settings', 'elementor' ),
			]
		);
		
		$this->add_control(
			'ajax',
			[
				'label'        => Wp_Helper::__( 'Ajax', 'elementor' ),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => Wp_Helper::__( 'Yes', 'elementor' ),
				'label_off'    => Wp_Helper::__( 'No', 'elementor' ),
			]
		);
				
		$this->add_control(
			'items_type',
			[
				'label'       => Wp_Helper::__( 'Items type', 'elementor' ),
				'type'        => Controls_Manager::SELECT,
				'default'     => 1,
				'options'     => $items_type,
			]
		);
		
		$this->add_control(
			'image_size',
			[
				'label'   => Wp_Helper::__( 'Image size', 'elementor' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'home_default',
				'options' => $image_sizes,
			]
		);
		
		$this->add_control(
			'view_type',
			[
				'label'   => Wp_Helper::__( 'View type', 'elementor' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'carousel',
				'options' => [
					'carousel' => Wp_Helper::__( 'Carousel', 'elementor' ),
					'grid'     => Wp_Helper::__( 'Grid', 'elementor' ),
				],
			]
		);
		
		$this->add_responsive_control(
			'per_line',
			[
				'label'       => Wp_Helper::__( 'Number of items per line', 'elementor' ),
				'type'        => Controls_Manager::SELECT,
				'default'     => 4,
				'tablet_default' => 2,
				'mobile_default' => 1,
				'options'     => [ 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10 ],
				'selectors' => [
					'{{WRAPPER}} .wrapper-items:not(.swiper-container-initialized) .item' => '-ms-flex: 0 0 calc(100%/{{VALUE}}); flex: 0 0 calc(100%/{{VALUE}}); max-width: calc(100%/{{VALUE}});'
				],
				'render_type' => 'template',
			]
		);
		
		$this->add_control(
			'per_col',
			[
				'label'       => Wp_Helper::__( 'Number of items per column', 'elementor' ),
				'type'        => Controls_Manager::SELECT,
				'default'     => 1,
				'options'     => [ 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10 ],
				'condition'   => [
					'view_type' => 'carousel',
				],
			]
		);
		
		$this->add_responsive_control(
			'spacing',
			[
				'label'       => Wp_Helper::__( 'Items Spacing', 'elementor' ),
				'type'        => Controls_Manager::SELECT,
				'default'     => 30,
				'tablet_default' => 20,
				'mobile_default' => 10,
				'options'     => [ 0 => 0, 5 => 5, 10 => 10, 15 => 15, 20 => 20, 25 => 25, 30 => 30, 35 => 35, 40 => 40, 45 => 45, 50 => 50 ],
				'selectors' => [
					'{{WRAPPER}} .wrapper-items .swiper-slide' => 'padding-left: calc({{VALUE}}px/2);padding-right: calc({{VALUE}}px/2);',
					'{{WRAPPER}} .wrapper-items .swiper-slide .item-inner' => 'margin-bottom: {{VALUE}}px;',
					'{{WRAPPER}} .wrapper-items' => 'margin-left: calc(-{{VALUE}}px/2);margin-right: calc(-{{VALUE}}px/2);'
				],
			]
		);
		
		$this->add_control(
			'load_more',
			[
				'label'        => Wp_Helper::__( 'Display Load More', 'axiosy' ),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => Wp_Helper::__( 'Yes', 'axiosy' ),
				'label_off'    => Wp_Helper::__( 'No', 'axiosy' ),
				'condition'   => [
					'view_type' => 'grid',
					'source!' => ['s', 'p_a'],
				],
			]
		);
				
		$this->add_responsive_control(
			'scroll',
			[
				'label'       => Wp_Helper::__( 'Slides to Scroll', 'elementor' ),
				'type'        => Controls_Manager::SELECT,
				'default'     => 4,
				'tablet_default' => 2,
				'mobile_default' => 1,
				'options'     => [ 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10 ],
				'condition'   => [
					'view_type' => 'carousel',
				],
			]
		);
		
		$this->add_responsive_control(
			'navigation',
			[
				'label'       => Wp_Helper::__( 'Navigation', 'elementor' ),
				'type'        => Controls_Manager::SELECT,
				'default'     => 'both',
				'tablet_default' => 'dots',
				'mobile_default' => 'dots',
				'options'     => [
					'both' => Wp_Helper::__('Arrows and Dots', 'elementor'),
					'arrows' => Wp_Helper::__('Arrows', 'elementor'),
					'dots' => Wp_Helper::__('Dots', 'elementor'),
					'none' => Wp_Helper::__('None', 'elementor'),
				],
				'condition'   => [
					'view_type' => 'carousel',
				],
			]
		);
				
		$this->add_control(
			'arrow_prev_icon',
			[
				'label' => Wp_Helper::__( 'Arrow Left Icon', 'elementor' ),
				'type' => Controls_Manager::ICONS,
				'fa4compatibility' => 'icon',
				'default' => [
					'value' => 'la la-angle-left',
					'library' => 'line-awesome',
				],
				'condition'   => [
					'navigation' => ['both', 'arrows' ],
					'view_type' => 'carousel',
				],
			]
		);
		
		$this->add_control(
			'arrow_next_icon',
			[
				'label' => Wp_Helper::__( 'Arrow Right Icon', 'elementor' ),
				'type' => Controls_Manager::ICONS,
				'fa4compatibility' => 'icon',
				'default' => [
					'value' => 'la la-angle-right',
					'library' => 'line-awesome',
				],
				'condition'   => [
					'navigation' => ['both', 'arrows' ],
					'view_type' => 'carousel',
				],
			]
		);
								
		$this->add_control(
			'auto',
			[
				'label'        => Wp_Helper::__( 'Autoplay', 'elementor' ),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => Wp_Helper::__( 'Yes', 'elementor' ),
				'label_off'    => Wp_Helper::__( 'No', 'elementor' ),
				'condition'   => [
					'view_type' => 'carousel',
				],
			]
		);
		
		$this->add_control(
			'auto_speed',
			[
				'label'       => Wp_Helper::__( 'Autoplay Speed', 'elementor' ),
				'type'        => Controls_Manager::NUMBER,
				'default'	  => '5000',	
				'condition'   => [
					'auto' 	  => 'yes',
					'view_type' => 'carousel',
				],
			]
		);
		
		$this->add_control(
			'pause',
			[
				'label'        => Wp_Helper::__( 'Pause on Hover', 'elementor' ),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => 'yes',
				'label_on'     => Wp_Helper::__( 'Yes', 'elementor' ),
				'label_off'    => Wp_Helper::__( 'No', 'elementor' ),
				'condition'   => [
					'auto' => 'yes',
					'view_type' => 'carousel',
				],
			]
		);
		
		$this->add_control(
			'speed',
			[
				'label'       => Wp_Helper::__( 'Animation Speed', 'elementor' ),
				'type'        => Controls_Manager::NUMBER,
				'default'	  => '300',	
				'condition'   => [
					'view_type' => 'carousel',
				],
			]
		);
		
		$this->add_control(
			'infinite',
			[
				'label'        => Wp_Helper::__( 'Loop', 'elementor' ),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => Wp_Helper::__( 'Yes', 'elementor' ),
				'label_off'    => Wp_Helper::__( 'No', 'elementor' ),
				'condition'   => [
					'view_type' => 'carousel',
				],
			]
		);
		
		$this->end_controls_section();
	}
	
	protected function _register_view_styling_controls() {
		$this->start_controls_section(
			'section_arrows_style',
			[
				'label' => Wp_Helper::__( 'Carousel Arrows', 'elementor' ),
				'type' => Controls_Manager::SECTION,
				'tab' => Controls_Manager::TAB_STYLE,
				'condition'   => [
					'view_type' => 'carousel',
				],
			]
		);
		
			$this->add_responsive_control(
				'arrows_show',
				[
					'label'       => Wp_Helper::__( 'Arrows Show', 'elementor' ),
					'type'        => Controls_Manager::SELECT,
					'default'     => 'always',
					'tablet_default' => 'always',
					'mobile_default' => 'always',
					'options'     => [
						'always' => Wp_Helper::__('Always', 'elementor'),
						'hover' => Wp_Helper::__('Section hover on show', 'elementor'),
					],
				]
			);
		
			$this->add_responsive_control(
				'arrows_position',
				[
					'label'       => Wp_Helper::__( 'Arrows Position', 'elementor' ),
					'type'        => Controls_Manager::SELECT,
					'default'     => 'middle',
					'tablet_default' => 'middle',
					'mobile_default' => 'middle',
					'options'     => [
						'middle' => Wp_Helper::__('In Middle', 'elementor'),
						'top-right' => Wp_Helper::__('Top Right', 'elementor'),
						'top-left' => Wp_Helper::__('Top Left', 'elementor'),
						'top-center' => Wp_Helper::__('Top Center', 'elementor'),
						'bottom-right' => Wp_Helper::__('Bottom Right', 'elementor'),
						'bottom-left' => Wp_Helper::__('Bottom Left', 'elementor'),
						'bottom-center' => Wp_Helper::__('Bottom Center', 'elementor')
					],
				]
			);
		
			$this->add_responsive_control(
				'arrows_width',
				[
					'label' => Wp_Helper::__( 'Arrows width', 'elementor' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 200,
						]
					],
					'selectors' => [
						'{{WRAPPER}} .axps-swiper-slider .axps-swiper-arrow' => 'width: {{SIZE}}{{UNIT}}'
					],
				]
			);	
		
			$this->add_responsive_control(
				'arrows_height',
				[
					'label' => Wp_Helper::__( 'Arrows height', 'elementor' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 200,
						]
					],
					'selectors' => [
						'{{WRAPPER}} .axps-swiper-slider .axps-swiper-arrow' => 'height: {{SIZE}}{{UNIT}}'
					],
				]
			);	
		
			$this->add_responsive_control(
				'arrows_spacing',
				[
					'label' => Wp_Helper::__( 'Arrows Spacing', 'elementor' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px' ],
					'range' => [
						'px' => [
							'min' => -600,
							'max' => 600,
						]
					],
					'selectors' => [
						'{{WRAPPER}} .axps-swiper-slider:not(.swiper-arrows-middle) .axps-swiper-arrow-prev' => 'margin-right: {{SIZE}}{{UNIT}}',
						'{{WRAPPER}} .axps-swiper-slider.swiper-arrows-middle .swiper-arrows' => 'margin-left: {{SIZE}}{{UNIT}}; margin-right: {{SIZE}}{{UNIT}}'
					],
				]
			);	
		
			$this->add_responsive_control(
				'arrows_margin_top',
				[
					'label' => Wp_Helper::__( 'Arrows magin top', 'elementor' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -300,
							'max' => 300,
						],
						'%' => [
							'min' => -100,
							'max' => 100,
						]
					],
					'selectors' => [
						'{{WRAPPER}} .axps-swiper-slider .swiper-arrows' => 'margin-top: {{SIZE}}{{UNIT}}'
					],
				]
			);

			$this->add_responsive_control(
				'arrows_margin_full',
				[
					'label' => Wp_Helper::__( 'Arrows magin', 'axiosy' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px' ],
                    'allowed_dimensions' => 'horizontal',
                    'placeholder' => [
                        'top' => 'auto',
                        'right' => '',
                        'bottom' => 'auto',
                        'left' => '',
                    ],
					'selectors' => [
						'{{WRAPPER}} .axps-swiper-slider .swiper-arrows' => 'margin-left: {{LEFT}}{{UNIT}};margin-right: {{RIGHT}}{{UNIT}};',
					],
				]
			);
		
			$this->add_responsive_control(
				'icon_size',
				[
					'label' => Wp_Helper::__( 'Icon Size', 'elementor' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px' ],
					'range' => [
						'px' => [
							'min' => 1,
							'max' => 200,
						]
					],
					'selectors' => [
						'{{WRAPPER}} .axps-swiper-slider .axps-swiper-arrow i' => 'font-size: {{SIZE}}{{UNIT}}',
						'{{WRAPPER}} .axps-swiper-slider .axps-swiper-arrow svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
					],
					'separator' => 'before',
				]
			);
		
			$this->start_controls_tabs( 'arrows_tabs_style' );

				$this->start_controls_tab(
					'arrows_tab_normal',
					[
						'label' => Wp_Helper::__( 'Normal', 'elementor' ),
					]
				);

					$this->add_control(
						'arrows_color',

						[
							'label' => Wp_Helper::__( 'Text Color', 'elementor' ),
							'type' => Controls_Manager::COLOR,
							'default' => '',
							'selectors' => [
								'{{WRAPPER}} .axps-swiper-slider .axps-swiper-arrow' => 'fill: {{VALUE}}; color: {{VALUE}};',
							],
						]
					);

					$this->add_control(
						'arrows_background_color',
						[
							'label' => Wp_Helper::__( 'Background Color', 'elementor' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .axps-swiper-slider .axps-swiper-arrow' => 'background-color: {{VALUE}};',
							],
						]
					);

				$this->end_controls_tab();

				$this->start_controls_tab(
					'arrows_tab_hover',
					[
						'label' => Wp_Helper::__( 'Hover', 'elementor' ),
					]
				);

					$this->add_control(
						'arrows_hover_color',
						[
							'label' => Wp_Helper::__( 'Text Color', 'elementor' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .axps-swiper-slider .axps-swiper-arrow:hover' => 'fill: {{VALUE}}; color: {{VALUE}};'
							],
						]
					);

					$this->add_control(
						'arrows_background_hover_color',
						[
							'label' => Wp_Helper::__( 'Background Color', 'elementor' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .axps-swiper-slider .axps-swiper-arrow:hover' => 'background-color: {{VALUE}};',
							],
						]
					);

					$this->add_control(
						'arrows_hover_border_color',
						[
							'label' => Wp_Helper::__( 'Border Color', 'elementor' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .axps-swiper-slider .axps-swiper-arrow:hover' => 'border-color: {{VALUE}};',
							],
						]
					);

				$this->end_controls_tab();

			$this->end_controls_tabs();

			$this->add_group_control(
				Group_Control_Border::get_type(),
				[
					'name' => 'arrows_border',
					'selector' => '{{WRAPPER}} .axps-swiper-slider .axps-swiper-arrow',
					'separator' => 'before',
				]
			);

			$this->add_responsive_control(
				'arrows_border_radius',
				[
					'label' => Wp_Helper::__( 'Border Radius', 'elementor' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .axps-swiper-slider .axps-swiper-arrow' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					]
				]
			);

			$this->add_group_control(
				Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'arrows_box_shadow',
					'selector' => '{{WRAPPER}} .axps-swiper-slider .axps-swiper-arrow',
				]
			);
		
		$this->end_controls_section();
		
		////////////////////////////DOTS/////////////////////////////////
		
		$this->start_controls_section(
			'section_dots_style',
			[
				'label' => Wp_Helper::__( 'Carousel Dots', 'elementor' ),
				'type' => Controls_Manager::SECTION,
				'tab' => Controls_Manager::TAB_STYLE,
				'condition'   => [
					'view_type' => 'carousel',
				],
			]
		);
				
			$this->add_responsive_control(
				'dots_position',
				[
					'label'       => Wp_Helper::__( 'Dots Position', 'elementor' ),
					'type'        => Controls_Manager::SELECT,
					'default'     => 'bottom-center',
					'tablet_default' => 'bottom-center',
					'mobile_default' => 'bottom-center',
					'options'     => [
						'middle' => Wp_Helper::__('In Middle', 'elementor'),
						'top-right' => Wp_Helper::__('Top Right', 'elementor'),
						'top-left' => Wp_Helper::__('Top Left', 'elementor'),
						'top-center' => Wp_Helper::__('Top Center', 'elementor'),
						'bottom-right' => Wp_Helper::__('Bottom Right', 'elementor'),
						'bottom-left' => Wp_Helper::__('Bottom Left', 'elementor'),
						'bottom-center' => Wp_Helper::__('Bottom Center', 'elementor')
					],
				]
			);
		
			$this->add_responsive_control(
				'dots_width',
				[
					'label' => Wp_Helper::__( 'Dots width', 'elementor' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 200,
						]
					],
					'selectors' => [
						'{{WRAPPER}} .axps-swiper-slider .swiper-dots .swiper-pagination-bullet' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);	
		
			$this->add_responsive_control(
				'dots_height',
				[
					'label' => Wp_Helper::__( 'Dots height', 'elementor' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 200,
						]
					],
					'selectors' => [
						'{{WRAPPER}} .axps-swiper-slider .swiper-dots .swiper-pagination-bullet' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);	
		
			$this->add_responsive_control(
				'dots_circle',
				[
					'label' => Wp_Helper::__( 'Circle', 'elementor' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 5,
						]
					],
					'selectors' => [
						'{{WRAPPER}} .axps-swiper-slider .swiper-dots .swiper-pagination-bullet::before' => 'left: {{SIZE}}{{UNIT}}; bottom: {{SIZE}}{{UNIT}}; top: {{SIZE}}{{UNIT}}; right: {{SIZE}}{{UNIT}};'
					],
				]
			);	
		
			$this->add_responsive_control(
				'dots_spacing',
				[
					'label' => Wp_Helper::__( 'Dots Spacing', 'elementor' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px' ],
					'range' => [
						'px' => [
							'min' => -300,
							'max' => 300,
						]
					],
					'selectors' => [
						'{{WRAPPER}} .axps-swiper-slider .swiper-dots .swiper-pagination-bullet' => 'margin: {{SIZE}}{{UNIT}}'
					],
				]
			);	
		
			$this->add_responsive_control(
				'dots_margin_top',
				[
					'label' => Wp_Helper::__( 'Dots magin top', 'elementor' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -300,
							'max' => 300,
						],
						'%' => [
							'min' => -100,
							'max' => 100,
						]
					],
					'selectors' => [
						'{{WRAPPER}} .axps-swiper-slider .swiper-dots' => 'margin-top: {{SIZE}}{{UNIT}}'
					],
				]
			);
				
			$this->start_controls_tabs( 'dots_tabs_style' );

				$this->start_controls_tab(
					'dots_tab_normal',
					[
						'label' => Wp_Helper::__( 'Normal', 'elementor' ),
					]
				);

					$this->add_control(
						'dots_background_color',
						[
							'label' => Wp_Helper::__( 'Background Color', 'elementor' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .axps-swiper-slider .swiper-dots .swiper-pagination-bullet' => 'background-color: {{VALUE}};',
							],
						]
					);
		
					$this->add_control(
						'dots_circle_background_color',
						[
							'label' => Wp_Helper::__( 'Circle Background Color', 'elementor' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .axps-swiper-slider .swiper-dots .swiper-pagination-bullet::before' => 'background-color: {{VALUE}};',
							],
						]
					);

				$this->end_controls_tab();

				$this->start_controls_tab(
					'dots_tab_hover',
					[
						'label' => Wp_Helper::__( 'Hover & Active', 'elementor' ),
					]
				);

					$this->add_control(
						'dots_background_hover_color',
						[
							'label' => Wp_Helper::__( 'Background Color', 'elementor' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .axps-swiper-slider .swiper-dots .swiper-pagination-bullet:hover, {{WRAPPER}} .axps-swiper-slider .swiper-dots .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'background-color: {{VALUE}};',
							],
						]
					);
		
					$this->add_control(
						'dots_circle_background_hover_color',
						[
							'label' => Wp_Helper::__( 'Circle Background Color', 'elementor' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .axps-swiper-slider .swiper-dots .swiper-pagination-bullet:hover::before, {{WRAPPER}} .axps-swiper-slider .swiper-dots .swiper-pagination-bullet.swiper-pagination-bullet-active::before' => 'background-color: {{VALUE}};',
							],
						]
					);

					$this->add_control(
						'dots_hover_border_color',
						[
							'label' => Wp_Helper::__( 'Border Color', 'elementor' ),
							'type' => Controls_Manager::COLOR,
							'selectors' => [
								'{{WRAPPER}} .axps-swiper-slider .swiper-dots .swiper-pagination-bullet:hover, {{WRAPPER}} .axps-swiper-slider .swiper-dots .swiper-pagination-bullet.swiper-pagination-bullet-active' => 'border-color: {{VALUE}};',
							],
						]
					);

				$this->end_controls_tab();


			$this->end_controls_tabs();

			$this->add_group_control(
				Group_Control_Border::get_type(),
				[
					'name' => 'dots_border',
					'selector' => '{{WRAPPER}} .axps-swiper-slider .swiper-dots .swiper-pagination-bullet',
					'separator' => 'before',
				]
			);
				
			$this->add_responsive_control(
				'dots_border_radius',
				[
					'label' => Wp_Helper::__( 'Border Radius', 'elementor' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%' ],
					'selectors' => [
						'{{WRAPPER}} .axps-swiper-slider .swiper-dots .swiper-pagination-bullet, {{WRAPPER}} .axps-swiper-slider .swiper-dots .swiper-pagination-bullet::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					]
				]
			);

			$this->add_group_control(
				Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'dots_box_shadow',
					'selector' => '{{WRAPPER}} .axps-swiper-slider .swiper-dots .swiper-pagination-bullet',
				]
			);
						
		$this->end_controls_section();
	}
}