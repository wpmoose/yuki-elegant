<?php
/**
 * Theme customizer options
 *
 * @package Yuki Elegant
 */

if ( ! function_exists( 'yuki_elegant_return_yes' ) ) {
	function yuki_elegant_return_yes() {
		return 'yes';
	}
}

if ( ! function_exists( 'yuki_elegant_return_no' ) ) {
	function yuki_elegant_return_no() {
		return 'no';
	}
}

if ( ! function_exists( 'yuki_elegant_base_100_background' ) ) {
	function yuki_elegant_base_100_background() {
		return [
			'type'  => 'color',
			'color' => 'var(--yuki-base-100)',
		];
	}
}

if ( ! function_exists( 'yuki_elegant_base_color_background' ) ) {
	function yuki_elegant_base_color_background() {
		return [
			'type'  => 'color',
			'color' => 'var(--yuki-base-color)',
		];
	}
}

if ( ! function_exists( 'yuki_elegant_border_none' ) ) {
	function yuki_elegant_border_none() {
		return [
			'style'   => 'none',
			'width'   => 1,
			'color'   => 'var(--yuki-base-300)',
			'hover'   => '',
			'inherit' => false,
		];
	}
}
//
// Header & footer background
//
add_filter( 'yuki_header_top_bar_row_background_default_value', 'yuki_elegant_base_100_background' );
add_filter( 'yuki_header_primary_navbar_row_background_default_value', 'yuki_elegant_base_100_background' );
add_filter( 'yuki_header_bottom_row_row_background_default_value', 'yuki_elegant_base_100_background' );

add_filter( 'yuki_footer_top_row_background_default_value', 'yuki_elegant_base_color_background' );
add_filter( 'yuki_footer_middle_row_background_default_value', 'yuki_elegant_base_color_background' );
add_filter( 'yuki_footer_bottom_row_background_default_value', 'yuki_elegant_base_color_background' );

//
// Header top row
//
if ( ! function_exists( 'yuki_elegant_header_top_row_elements' ) ) {
	function yuki_elegant_header_top_row_elements() {
		return [
			'desktop' => [
				[
					'elements' => [],
					'settings' => [ 'width' => '33.33%' ]
				],
				[
					'elements' => [],
					'settings' => [ 'width' => '33.33%' ]
				],
				[
					'elements' => [],
					'settings' => [ 'width' => '33.33%' ]
				],
			],
			'mobile'  => [
				[
					'elements' => [],
					'settings' => [ 'width' => '100%', 'justify-content' => 'center' ]
				],
			],
		];
	}
}
add_filter( 'yuki_header_top_row_default_value', 'yuki_elegant_header_top_row_elements' );

if ( ! function_exists( 'yuki_elegant_header_top_row_height' ) ) {
	function yuki_elegant_header_top_row_height() {
		return '40px';
	}
}
add_filter( 'yuki_header_top_bar_row_min_height_default_value', 'yuki_elegant_header_top_row_height' );

//
// Header middle row
//
if ( ! function_exists( 'yuki_elegant_header_primary_row_elements' ) ) {
	function yuki_elegant_header_primary_row_elements() {
		return [
			'desktop' => [
				[
					'elements' => [ 'logo' ],
					'settings' => [ 'width' => '20%', 'justify-content' => 'flex-start' ]
				],
				[
					'elements' => [ 'menu-1' ],
					'settings' => [ 'width' => '60%', 'justify-content' => 'center' ]
				],
				[
					'elements' => [ 'socials', 'theme-switch', 'search' ],
					'settings' => [ 'width' => '20%', 'justify-content' => 'flex-end' ]
				],
			],
			'mobile'  => [
				[
					'elements' => [ 'logo' ],
					'settings' => [ 'width' => '30%' ]
				],
				[
					'elements' => [ 'socials' ],
					'settings' => [ 'width' => '40%', 'justify-content' => 'center' ]
				],
				[
					'elements' => [ 'theme-switch', 'search', 'trigger' ],
					'settings' => [ 'width' => '30%', 'justify-content' => 'flex-end' ]
				],
			],
		];
	}
}
add_filter( 'yuki_header_primary_row_default_value', 'yuki_elegant_header_primary_row_elements' );

if ( ! function_exists( 'yuki_elegant_primary_navbar_row_height' ) ) {
	function yuki_elegant_primary_navbar_row_height() {
		return '120px';
	}
}
add_filter( 'yuki_header_primary_navbar_row_min_height_default_value', 'yuki_elegant_primary_navbar_row_height' );

if ( ! function_exists( 'yuki_elegant_primary_navbar_row_border_bottom' ) ) {
	function yuki_elegant_primary_navbar_row_border_bottom() {
		return [
			'style'   => 'none',
			'width'   => 1,
			'color'   => 'var(--yuki-base-200)',
			'hover'   => '',
			'inherit' => false,
		];
	}
}
add_filter( 'yuki_header_primary_navbar_row_border_bottom_default_value', 'yuki_elegant_primary_navbar_row_border_bottom' );

//
// Header menu element
//
if ( ! function_exists( 'yuki_elegant_header_menu_typography' ) ) {
	function yuki_elegant_header_menu_typography() {
		return [
			'family'        => 'inherit',
			'fontSize'      => '1rem',
			'variant'       => '600',
			'lineHeight'    => '1',
			'textTransform' => 'capitalize',
		];
	}
}
add_filter( 'yuki_header_el_menu_1_top_level_typography_default_value', 'yuki_elegant_header_menu_typography' );

if ( ! function_exists( 'yuki_elegant_header_menu_depth' ) ) {
	function yuki_elegant_header_menu_depth() {
		return 0;
	}
}
add_filter( 'yuki_header_el_menu_1_depth_default_value', 'yuki_elegant_header_menu_depth' );

if ( ! function_exists( 'yuki_elegant_header_menu_dropdown_typography' ) ) {
	function yuki_elegant_header_menu_dropdown_typography() {
		return [
			'family'        => 'inherit',
			'fontSize'      => '1rem',
			'variant'       => '500',
			'lineHeight'    => '1',
		];
	}
}
add_filter( 'yuki_header_el_menu_1_dropdown_typography_default_value', 'yuki_elegant_header_menu_dropdown_typography' );

//
// Header socials element
//
if ( ! function_exists( 'yuki_elegant_socials_icons_color_type' ) ) {
	function yuki_elegant_socials_icons_color_type() {
		return 'custom';
	}
}
add_filter( 'yuki_header_el_socials_icons_color_type_default_value', 'yuki_elegant_socials_icons_color_type' );

//
// Header logo element
//
if ( ! function_exists( 'yuki_elegant_header_el_logo_site_title_typography' ) ) {
	function yuki_elegant_header_el_logo_site_title_typography() {
		return [
			'family'        => 'inherit',
			'fontSize'      => '32px',
			'variant'       => '600',
			'lineHeight'    => '1.7',
			'textTransform' => 'uppercase',
		];
	}
}
add_filter( 'yuki_header_el_logo_site_title_typography_default_value', 'yuki_elegant_header_el_logo_site_title_typography' );

//
// Archive Layout
//
if ( ! function_exists( 'yuki_elegant_archive_layout' ) ) {
	function yuki_elegant_archive_layout() {
		return 'archive-grid';
	}
}
add_filter( 'yuki_archive_layout_default_value', 'yuki_elegant_archive_layout' );

if ( ! function_exists( 'yuki_elegant_archive_card_gap' ) ) {
	function yuki_elegant_archive_card_gap() {
		return '48px';
	}
}
add_filter( 'yuki_card_gap_default_value', 'yuki_elegant_archive_card_gap' );

if ( ! function_exists( 'yuki_elegant_archive_entry_tax_style' ) ) {
	function yuki_elegant_archive_entry_tax_style() {
		return 'badge';
	}
}
add_filter( 'yuki_entry_tax_style_cats_default_value', 'yuki_elegant_archive_entry_tax_style' );

if ( ! function_exists( 'yuki_elegant_archive_entry_tax_badge_bg_color' ) ) {
	function yuki_elegant_archive_entry_tax_badge_bg_color() {
		return [
			'initial' => 'var(--yuki-primary-color)',
			'hover'   => 'var(--yuki-primary-active)',
		];
	}
}
add_filter( 'yuki_entry_tax_badge_bg_color_cats_default_value', 'yuki_elegant_archive_entry_tax_badge_bg_color' );

if ( ! function_exists( 'yuki_elegant_archive_header_alignment' ) ) {
	function yuki_elegant_archive_header_alignment() {
		return 'center';
	}
}
add_filter( 'yuki_archive_header_alignment_default_value', 'yuki_elegant_archive_header_alignment' );

// Disable sidebar
add_filter( 'yuki_archive_sidebar_section_default_value', 'yuki_elegant_return_no' );
if ( ! function_exists( 'yuki_elegant_pagination_alignment' ) ) {
	function yuki_elegant_pagination_alignment() {
		return 'center';
	}
}
add_filter( 'yuki_pagination_alignment_default_value', 'yuki_elegant_pagination_alignment' );

if ( ! function_exists( 'yuki_elegant_excerpt_length' ) ) {
	function yuki_elegant_excerpt_length() {
		return 6;
	}
}
add_filter( 'yuki_entry_excerpt_length_default_value', 'yuki_elegant_excerpt_length' );

if ( ! function_exists( 'yuki_elegant_archive_image_width' ) ) {
	function yuki_elegant_archive_image_width() {
		return [
			'desktop' => '35%',
			'tablet'  => '35%',
			'mobile'  => '100%',
		];
	}
}
add_filter( 'yuki_archive_image_width_default_value', 'yuki_elegant_archive_image_width' );

//
// Colors
//

if ( ! function_exists( 'yuki_elegant_light_color_scheme' ) ) {
	/**
	 * Add light theme color scheme
	 *
	 * @param $palettes
	 *
	 * @return mixed
	 */
	function yuki_elegant_light_color_scheme( $palettes ) {
		array_unshift( $palettes, [
			'yuki-light-primary-color'  => '#f08e80',
			'yuki-light-primary-active' => '#EC7F76',
			'yuki-light-accent-color'   => '#212a33',
			'yuki-light-accent-active'  => '#17212a',
			'yuki-light-base-300'       => '#FAE3D3',
			'yuki-light-base-200'       => '#FDECE0',
			'yuki-light-base-100'       => '#FFF6EF',
			'yuki-light-base-color'     => '#FFFCFA',
		] );

		return $palettes;
	}
}
add_filter( 'yuki_light_color_palettes', 'yuki_elegant_light_color_scheme' );

if ( ! function_exists( 'yuki_elegant_dark_color_scheme' ) ) {
	/**
	 * Add dark theme color scheme
	 *
	 * @param $palettes
	 *
	 * @return mixed
	 */
	function yuki_elegant_dark_color_scheme( $palettes ) {
		array_unshift( $palettes, [
			'yuki-dark-primary-color'  => '#f08e80',
			'yuki-dark-primary-active' => '#EC7F76',
			'yuki-dark-accent-color'   => '#FFF6EF',
			'yuki-dark-accent-active'  => '#FFFCFA',
			'yuki-dark-base-300'       => '#3f463f',
			'yuki-dark-base-200'       => '#2f2f2f',
			'yuki-dark-base-100'       => '#212a33',
			'yuki-dark-base-color'     => '#17212a',
		] );

		return $palettes;
	}
}
add_filter( 'yuki_dark_color_palettes', 'yuki_elegant_dark_color_scheme' );

//
// Card style
//
add_filter( 'yuki_card_background_default_value', 'yuki_elegant_base_100_background' );
add_filter( 'yuki_global_sidebar_widgets-background_default_value', 'yuki_elegant_base_100_background' );

if ( ! function_exists( 'yuki_elegant_card_border' ) ) {
	function yuki_elegant_card_border() {
		return [
			'style'   => 'solid',
			'width'   => 2,
			'color'   => 'var(--yuki-base-300)',
			'hover'   => '',
			'inherit' => false,
		];
	}
}
add_filter( 'yuki_card_border_default_value', 'yuki_elegant_card_border' );
add_filter( 'yuki_global_sidebar_widgets-border_default_value', 'yuki_elegant_card_border' );

if ( ! function_exists( 'yuki_elegant_card_shadow' ) ) {
	function yuki_elegant_card_shadow() {
		return [
			'enable'     => 'yes',
			'horizontal' => '10px',
			'vertical'   => '10px',
			'blur'       => '0px',
			'spread'     => '0px',
			'color'      => 'var(--yuki-base-200)',
		];
	}
}
add_filter( 'yuki_card_shadow_default_value', 'yuki_elegant_card_shadow' );
add_filter( 'yuki_global_sidebar_widgets-shadow_default_value', 'yuki_elegant_card_shadow' );

//
// Form style
//
if ( ! function_exists( 'yuki_elegant_form_style' ) ) {
	function yuki_elegant_form_style() {
		return 'modern';
	}
}
add_filter( 'yuki_content_form_style_default_value', 'yuki_elegant_form_style' );

//
// Preloader
//
if ( ! function_exists( 'yuki_elegant_preloader_colors' ) ) {
	function yuki_elegant_preloader_colors() {
		return [
			'background' => '#17212a',
			'accent'     => '#f3f4f6',
			'primary'    => 'var(--yuki-primary-color)',
		];
	}
}
add_filter( 'yuki_preloader_colors_default_value', 'yuki_elegant_preloader_colors' );

//
// Preloader preset
//
if ( ! function_exists( 'yuki_elegant_preloader_preset' ) ) {
	function yuki_elegant_preloader_preset() {
		return 'preset-4';
	}
}
add_filter( 'yuki_preloader_preset_default_value', 'yuki_elegant_preloader_preset' );

//
// Featured image
//
if ( ! function_exists( 'yuki_elegant_featured_image_position' ) ) {
	function yuki_elegant_featured_image_position() {
		return 'below';
	}
}
add_filter( 'yuki_post_featured_image_position_default_value', 'yuki_elegant_featured_image_position' );
add_filter( 'yuki_page_featured_image_position_default_value', 'yuki_elegant_featured_image_position' );
