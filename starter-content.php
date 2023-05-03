<?php
/**
 * Theme starter content
 *
 * @package Yuki Elegant
 */

//
// Starter content
//
if ( ! function_exists( 'yuki_elegant_starter_content' ) ) {
	/**
	 * Change starter content
	 *
	 * @param $content
	 *
	 * @return mixed
	 */
	function yuki_elegant_starter_content( $content ) {
		return array(
			'widgets'   => $content['widgets'],
			'posts'     => array(
				'home' => array(
					'post_type'    => 'page',
					'post_title'   => __( 'Home', 'yuki-elegant' ),
					'post_content' => '',
				),
				'about',
				'contact',
				'blog',
			),
			'nav_menus' => array(
				'yuki_header_el_menu_1' => array(
					'name'  => __( 'Top Bar Menu', 'yuki-elegant' ),
					'items' => array(
						'link_home',
						'page_about',
						'page_contact',
						'page_blog',
						'post_news',
					),
				),
				'yuki_header_el_menu_2' => array(
					'name'  => __( 'Primary Menu', 'yuki-elegant' ),
					'items' => array(
						'link_home',
						'page_about',
						'page_contact',
						'page_blog',
					),
				),
				'yuki_footer_el_menu'   => array(
					'name'  => __( 'Footer Menu', 'yuki-elegant' ),
					'items' => array(
						'link_home',
						'page_about',
						'page_contact',
						'page_blog',
					),
				),
			),
			'options'   => array(
				'show_on_front'  => 'page',
				'page_on_front'  => '{{home}}',
				'page_for_posts' => '{{blog}}',
			),
		);
	}
}
add_filter( 'yuki_starter_content', 'yuki_elegant_starter_content' );

//
// Homepage design
//

if ( ! function_exists( 'yuki_elegant_homepage_builder_id' ) ) {
	/**
	 * Change default homepage builder id
	 *
	 * @return string
	 */
	function yuki_elegant_homepage_builder_id() {
		return 'yuki_elegant_homepage_builder';
	}
}
add_filter( 'yuki_homepage_builder_id', 'yuki_elegant_homepage_builder_id' );

if ( ! function_exists( 'yuki_elegant_homepage_content_spacing' ) ) {
	/**
	 * Change default content spacing for homepage
	 *
	 * @return string
	 */
	function yuki_elegant_homepage_content_spacing() {
		return '24px';
	}
}
add_filter( 'yuki_homepage_content_spacing_default_value', 'yuki_elegant_homepage_content_spacing' );

if ( ! function_exists( 'yuki_elegant_homepage_heading' ) ) {
	/**
	 * Generate heading element
	 *
	 * @param $title
	 * @param $sub_title
	 * @param $settings
	 *
	 * @return array
	 */
	function yuki_elegant_homepage_heading( $title, $sub_title = '', $settings = [] ) {
		return [
			'id'       => 'heading',
			'settings' => wp_parse_args( $settings, [
				'title'            => $title,
				'sub-title'        => $sub_title,
				'alignment'        => 'left',
				'title-typography' => [
					'family'        => 'inherit',
					'fontSize'      => [
						'desktop' => '1.5rem',
						'tablet'  => '1.25rem',
						'mobile'  => '1rem'
					],
					'variant'       => '600',
					'lineHeight'    => '1.5',
					'textTransform' => 'capitalize',
				],
				'spacing'          => [
					'top'    => '0px',
					'bottom' => '0px',
					'left'   => '0px',
					'right'  => '0px',
					'linked' => false,
				]
			] )
		];
	}
}

if ( ! function_exists( 'yuki_elegant_homepage_design' ) ) {
	/**
	 * Override default homepage design
	 *
	 * @return array
	 */
	function yuki_elegant_homepage_design() {
		return [
			// Heading
			[
				'settings' => [
					'margin'     => [
						'linked' => false,
						'left'   => '0px',
						'right'  => '0px',
						'top'    => '60px',
						'bottom' => '60px',
					],
					'background' => [
						'type'  => 'image',
						'color' => 'var(--yuki-transparent)',
						'image' => [
							'size'   => 'auto',
							'repeat' => 'no-repeat',
							'source' => [
								'x'   => 0.5,
								'y'   => 0.5,
								'url' => yuki_elegant_image_url( 'heading-background.png' ),
							]
						]
					],
				],
				'columns'  => [
					[
						'elements' => [
							[
								'id'       => 'heading',
								'settings' => [
									'title'            => __( 'The art of writing is the art of discovering what you believe.', 'yuki-elegant' ),
									'sub-title'        => '',
									'title-tag'        => 'h1',
									'alignment'        => 'center',
									'title-typography' => [
										'family'        => 'inherit',
										'fontSize'      => [
											'desktop' => '2.75rem',
											'tablet'  => '1.75rem',
											'mobile'  => '1.25rem'
										],
										'variant'       => '600',
										'lineHeight'    => '1.5',
										'textTransform' => 'inherit',
									],
									'spacing'          => [
										'top'    => '0%',
										'bottom' => '0%',
										'left'   => '15%',
										'right'  => '15%',
										'linked' => false,
									]
								]
							],
						],
						'settings' => [],
					],
				],
			],
			// Sub heading
			[
				'settings' => [
					'margin'     => [
						'linked' => false,
						'left'   => '0px',
						'right'  => '0px',
						'top'    => '48px',
						'bottom' => '48px',
					],
					'background' => [
						'type'  => 'image',
						'color' => 'var(--yuki-transparent)',
						'image' => [
							'size'   => 'auto',
							'repeat' => 'no-repeat',
							'source' => [
								'x'   => 0.5,
								'y'   => 0.5,
								'url' => yuki_elegant_image_url( 'sub-heading-background.png' ),
							]
						]
					],
				],
				'columns'  => [
					[
						'elements' => [
							[
								'id'       => 'heading',
								'settings' => [
									'title'            => __( 'Latest Posts', 'yuki-elegant' ),
									'sub-title'        => '',
									'title-tag'        => 'h3',
									'alignment'        => 'center',
									'title-typography' => [
										'family'        => 'inherit',
										'fontSize'      => [
											'desktop' => '1.75rem',
											'tablet'  => '1.25rem',
											'mobile'  => '1rem'
										],
										'variant'       => '600',
										'lineHeight'    => '1.75',
										'textTransform' => 'capitalize',
									],
									'spacing'          => [
										'top'    => '0px',
										'bottom' => '0px',
										'left'   => '0px',
										'right'  => '0px',
										'linked' => false,
									]
								]
							],
						],
						'settings' => [],
					],
				],
			],
			// Posts Grid
			[
				'settings' => [
					'margin' => [
						'linked' => false,
						'left'   => '0px',
						'right'  => '0px',
						'top'    => '0px',
						'bottom' => '24px',
					],
				],
				'columns'  => [
					[
						'elements' => [
							[
								'id'       => 'posts-grid',
								'settings' => [
									'posts-count'                     => 6,
									'grid-columns'                    => [
										'desktop' => 3,
										'tablet'  => 2,
										'mobile'  => 1,
									],
									'items-gap'                       => '48px',
									'card_background'                 => yuki_elegant_base_100_background(),
									'card_border'                     => yuki_elegant_card_border(),
									'card_shadow'                     => yuki_elegant_card_shadow(),
									'yuki_el_tax_style_cats'          => 'badge',
									'yuki_el_tax_badge_bg_color_cats' => [
										'initial' => 'var(--yuki-primary-color)',
										'hover'   => 'var(--yuki-primary-active)',
									],
									'yuki_el_thumbnail_height'        => '180px',
									'structure'                       => [
										[ 'id' => 'thumbnail', 'visible' => true ],
										[ 'id' => 'categories', 'visible' => true ],
										[ 'id' => 'title', 'visible' => true ],
										[ 'id' => 'excerpt', 'visible' => true ],
										[ 'id' => 'metas', 'visible' => true ],
									],
								]
							],
						],
						'settings' => [],
					],
				],
			],

			// Sub heading
			[
				'settings' => [
					'margin'     => [
						'linked' => false,
						'left'   => '0px',
						'right'  => '0px',
						'top'    => '48px',
						'bottom' => '48px',
					],
					'background' => [
						'type'  => 'image',
						'color' => 'var(--yuki-transparent)',
						'image' => [
							'size'   => 'auto',
							'repeat' => 'no-repeat',
							'source' => [
								'x'   => 0.5,
								'y'   => 0.5,
								'url' => yuki_elegant_image_url( 'sub-heading-background.png' ),
							]
						]
					],
				],
				'columns'  => [
					[
						'elements' => [
							[
								'id'       => 'heading',
								'settings' => [
									'title'            => __( 'Top pick for you', 'yuki-elegant' ),
									'sub-title'        => '',
									'title-tag'        => 'h3',
									'alignment'        => 'center',
									'title-typography' => [
										'family'        => 'inherit',
										'fontSize'      => [
											'desktop' => '1.75rem',
											'tablet'  => '1.25rem',
											'mobile'  => '1rem'
										],
										'variant'       => '600',
										'lineHeight'    => '1.75',
										'textTransform' => 'capitalize',
									],
									'spacing'          => [
										'top'    => '0px',
										'bottom' => '0px',
										'left'   => '0px',
										'right'  => '0px',
										'linked' => false,
									]
								]
							],
						],
						'settings' => [],
					],
				],
			],
			// Magazine Grid #2
			[
				'settings' => [
					'margin' => [
						'linked' => false,
						'left'   => '0px',
						'right'  => '0px',
						'top'    => '0px',
						'bottom' => '48px',
					],
				],
				'columns'  => [
					[
						'elements' => [
							[
								'id'       => 'magazine-grid',
								'settings' => [
									'grid-layout'      => 'style3',
									'container-height' => '360px',
								]
							],
						],
						'settings' => [],
					],
				],
			],

			// Sub heading
			[
				'settings' => [
					'margin'     => [
						'linked' => false,
						'left'   => '0px',
						'right'  => '0px',
						'top'    => '48px',
						'bottom' => '48px',
					],
					'background' => [
						'type'  => 'image',
						'color' => 'var(--yuki-transparent)',
						'image' => [
							'size'   => 'auto',
							'repeat' => 'no-repeat',
							'source' => [
								'x'   => 0.5,
								'y'   => 0.5,
								'url' => yuki_elegant_image_url( 'sub-heading-background.png' ),
							]
						]
					],
				],
				'columns'  => [
					[
						'elements' => [
							[
								'id'       => 'heading',
								'settings' => [
									'title'            => __( 'You may also like', 'yuki-elegant' ),
									'sub-title'        => '',
									'title-tag'        => 'h3',
									'alignment'        => 'center',
									'title-typography' => [
										'family'        => 'inherit',
										'fontSize'      => [
											'desktop' => '1.75rem',
											'tablet'  => '1.25rem',
											'mobile'  => '1rem'
										],
										'variant'       => '600',
										'lineHeight'    => '1.75',
										'textTransform' => 'capitalize',
									],
									'spacing'          => [
										'top'    => '0px',
										'bottom' => '0px',
										'left'   => '0px',
										'right'  => '0px',
										'linked' => false,
									]
								]
							],
						],
						'settings' => [],
					],
				],
			],
			// Posts Grid + Sidebar
			[
				'settings' => [
					'columns-gap' => '12px'
				],
				'columns'  => [
					[
						'elements' => [
							[
								'id'       => 'posts-grid',
								'settings' => [
									'posts-count'                     => 6,
									'grid-columns'                    => [
										'desktop' => 2,
										'tablet'  => 2,
										'mobile'  => 1,
									],
									'yuki_el_thumbnail_height'        => '180px',
									'yuki_el_tax_style_cats'          => 'badge',
									'yuki_el_tax_badge_bg_color_cats' => [
										'initial' => 'var(--yuki-primary-color)',
										'hover'   => 'var(--yuki-primary-active)',
									],
									'structure'                       => [
										[ 'id' => 'thumbnail', 'visible' => true ],
										[ 'id' => 'categories', 'visible' => true ],
										[ 'id' => 'title', 'visible' => true ],
										[ 'id' => 'excerpt', 'visible' => true ],
										[ 'id' => 'metas', 'visible' => true ],
									],
								]
							],
						],
						'settings' => [
							'width' => [ 'desktop' => '70%', 'tablet' => '100%', 'mobile' => '100%' ],
						],
					],
					[
						'elements' => [
							[
								'id'       => 'posts-slider',
								'settings' => [
									'container-height'         => '360px',
									'autoplay'                 => 'yes',
									'navigation'               => 'no',
									'yuki_el_title_typography' => [
										'family'     => 'inherit',
										'fontSize'   => [
											'desktop' => '1.25rem',
											'tablet'  => '1.15rem',
											'mobile'  => '1rem'
										],
										'variant'    => '700',
										'lineHeight' => '1.5em'
									],
								],
							],
							[
								'id'       => 'frontpage-widgets-1',
								'settings' => [],
							]
						],
						'settings' => [
							'width' => [ 'desktop' => '30%', 'tablet' => '100%', 'mobile' => '100%' ],
						],
					]
				]
			],
			// Stretch Sliders
			[
				'settings' => [ 'stretch' => 'yes' ],
				'columns'  => [
					[
						'elements' => [
							[
								'id'       => 'posts-slider',
								'settings' => [
									'container-height'         => '360px',
									'autoplay'                 => 'yes',
									'navigation'               => 'yes',
									'slides-to-show'           => [
										'desktop' => 3,
										'tablet'  => 3,
										'mobile'  => 1,
									],
									'yuki_el_title_typography' => [
										'family'     => 'inherit',
										'fontSize'   => [
											'desktop' => '1.25rem',
											'tablet'  => '1.15rem',
											'mobile'  => '1rem'
										],
										'variant'    => '700',
										'lineHeight' => '1.5em'
									],
								],
							]
						],
						'settings' => [],
					]
				],
			],
		];
	}
}
add_filter( 'yuki_elegant_homepage_builder_default_value', 'yuki_elegant_homepage_design' );
