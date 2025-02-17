<?php
/**
 * Base functions and definitions.
 *
 * @package Base
 * @author  Nick Diego
 * @license GNU General Public License v2 or later
 * @link    https://github.com/ndiego/base
 */

if ( ! function_exists( 'base_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function base_setup() {

		// Remove core block patterns from WordPress.org.
		remove_theme_support( 'core-block-patterns' );
	}

endif;

add_action( 'after_setup_theme', 'base_setup' );

if ( ! function_exists( 'base_styles' ) ) :
	/**
	 * Enqueue main stylesheet.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function base_styles() {

		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Register theme stylesheet.
		wp_register_style(
			'base-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' ),
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'base-style' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'base_styles' );

if ( ! function_exists( 'base_editor_styles' ) ) :
	/**
	 * Enqueue style.css into the editor.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function base_editor_styles() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}

endif;

add_action( 'admin_init', 'base_editor_styles' );

if ( ! function_exists( 'base_editor_scripts' ) ) :
	/**
	 * Add/remove block styles and variations.
	 * 
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function base_editor_scripts() {

		// WordPress core block styles can only be unregistered using JavaScript.
		wp_enqueue_script( 
			'base-block-styles-variations', 
			get_template_directory_uri() . '/assets/js/block-styles-variations.js', 
			array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
			wp_get_theme()->get( 'Version' ),
			true
		);

		// WordPress core block styles can only be unregistered using JavaScript.
		wp_enqueue_script( 
			'base-modify-block-supports', 
			get_template_directory_uri() . '/assets/js/modify-block-supports.js', 
			array(),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}

endif;

add_action( 'enqueue_block_editor_assets', 'base_editor_scripts' );

if ( ! function_exists( 'base_enqueue_block_stylesheets' ) ) :
	/**
	 * Enqueue individual block stylesheets.
	 * Reference: https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/
	 *
	 * @since 0.1.0
	 */
	function base_enqueue_block_stylesheets() {
		// Get all CSS files from the blocks directory
		$block_styles = glob( dirname( __FILE__ ) . '/assets/css/blocks/*.css' );
		
		foreach ( $block_styles as $style_path ) {
			$filename = basename( $style_path, '.css' );
			
			// Split filename into block type and name
			// e.g., 'core-buttons' becomes ['core', 'buttons']
			$parts = explode( '-', $filename, 2 );
			
			if ( count( $parts ) !== 2 ) {
				continue; // Skip if filename doesn't match expected format
			}
			
			$block_type = $parts[0];    // 'core'
			$block_name = $parts[1];    // 'buttons'
			
			// Enqueue individual block stylesheets
			wp_enqueue_block_style(
				$block_type . '/' . $block_name,
				array(
					'handle' => 'base-theme-' . $filename . '-styles',
					'src'    => get_theme_file_uri( 'assets/css/blocks/' . $filename . '.css' ),
					'path'   => get_theme_file_path( 'assets/css/blocks/' . $filename . '.css' ),
				)
			);
		}
	}

endif;

add_action( 'after_setup_theme', 'base_enqueue_block_stylesheets' );

if ( ! function_exists( 'base_edit_comment_form_defaults' ) ) :
	/**
	 * Customize the comments form. 
	 *
	 * @since 0.1.0
	 */
	function base_edit_comment_form_defaults( $defaults ) {
		$defaults[ 'title_reply' ] = __( 'Share your thoughts', 'base' );
		return $defaults;
	}

endif;

add_action( 'comment_form_defaults', 'base_edit_comment_form_defaults' );

if ( ! function_exists( 'base_register_block_styles' ) ) :
	/**
	 * Register block styles.
	 *
	 * @since 0.1.0
	 */
	function base_register_block_styles() {

		$block_styles = array(
			'core/archives' => array(
				'horizontal' => __( 'Horizontal', 'base' ),
			),
			'core/categories' => array(
				'horizontal' => __( 'Horizontal', 'base' ),
				'outline'    => __( 'Outline', 'base' ),
			),
			'core/image'      => array(
				'caption-left'  => __( 'Caption Left', 'base' ),
				'caption-right' => __( 'Caption Right', 'base' ),
			),
			'core/gallery'    => array(
				'caption-left'  => __( 'Caption Left', 'base' ),
				'caption-right' => __( 'Caption Right', 'base' ),
			),
			'core/post-terms' => array(
				'outline' => __( 'Outline', 'base' ),
			),
			'core/quote' => array(
				'fancy' => __( 'Fancy', 'base' ),
			),
			'core/separator'  => array(
				'waves' => __( 'Waves', 'base' ),
			),
			'core/tag-cloud'  => array(
				'outline' => __( 'Outline', 'base' ),
			),
			'core/post-terms'  => array(
				'outline' => __( 'Outline', 'base' ),
			),
		);

		foreach( $block_styles as $block => $styles ) {
			foreach ( $styles as $style_name => $style_label ) {
				register_block_style(
					$block,
					array(
						'name'  => $style_name,
						'label' => $style_label,
					)
				);
			}
		}
	}
endif;

add_action( 'init', 'base_register_block_styles' );

if ( ! function_exists( 'base_wrap_image_block' ) ) :
	/**
	 * Filter the output of an image block to wrap the <img> element in a <span>.
	 * This is needed to apply image custom image borders on images with captions.
	 *
	 * @since 0.1.0
	 */
	function base_wrap_image_block( $block_content, $block ) {

		// Check if the block content contains a <figcaption> element
		if ( strpos( $block_content, 'figcaption' ) !== false ) {
			
			// Append the caption class to the block.
			$p = new WP_HTML_Tag_Processor( $block_content );
			if ( $p->next_tag() ) {
				$p->add_class( 'has-caption' );
			}
			$block_content = $p->get_updated_html();
			$block_content = preg_replace( '/(<img[^>]+>)/', '<span class="wp-block-image-container">$1</span>', $block_content );
		}

		return $block_content;
	}

endif;

add_filter( 'render_block_core/image', 'base_wrap_image_block', 10, 2 );

if ( ! function_exists( 'base_add_sticky_class' ) ) :
	/**
	 * Add is-sticky class to sticky posts
	 *
	 * @since 0.1.0
	 *
	 * @param array $classes Array of post classes.
	 * @return array Modified array of post classes.
	 */
	function base_add_sticky_class( $classes ) {
		if ( is_sticky() ) {
			$classes[] = 'is-sticky';
		}
		return $classes;
	}
endif;

add_filter( 'post_class', 'base_add_sticky_class' );

if ( ! function_exists( 'base_exclude_current_post_from_latest_posts' ) ) :
	/**
	 * Exclude the current post from the latest posts query.
	 * Only applies to single blog post templates.
	 *
	 * @since 0.1.0
	 */
	function base_exclude_current_post_from_latest_posts( $query ) {
		if ( ! is_admin() && is_singular( 'post' ) ) {
			$query->set( 'post__not_in', array( get_the_ID() ) );
		}
	}
endif;

add_action('pre_get_posts', 'base_exclude_current_post_from_latest_posts');

if ( ! function_exists( 'base_search_posts_only' ) ) :
	/**
	 * Modify search results to only show posts.
	 *
	 * @since 0.1.0
	 *
	 * @param WP_Query $query The WP_Query instance (passed by reference).
	 */
	function base_search_posts_only( $query ) {
		if ( $query->is_search() && $query->is_main_query() && ! is_admin() ) {
			$query->set( 'post_type', 'post' );
		}
	}
endif;

add_action( 'pre_get_posts', 'base_search_posts_only' );