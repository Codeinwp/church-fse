<?php
/**
 * Patterns Handler.
 *
 * @author Themeisle
 * @package church-fse
 * @since 1.0.0
 */

namespace ChurchFSE;

use WP_Block_Pattern_Categories_Registry;

/**
 * Class Block_Patterns
 *
 * @package church-fse
 */
class Block_Patterns {

	/**
	 * Patterns categories.
	 *
	 * @var array
	 */
	private $categories = array();
	/**
	 * The patterns array.
	 *
	 * These use the file names without termination inside the `inc/patterns` directory.
	 *
	 * @var array
	 */
	private $patterns = array();

	/**
	 * Block_Patterns constructor.
	 */
	public function __construct() {
		$this->setup_properties();

		add_action( 'init', array( $this, 'run' ) );
	}

	/**
	 * Run the class functionality.
	 *
	 * @return void
	 */
	public function run() {
		$this->register_categories();
		$this->register_patterns();
	}

	/**
	 * Setup class properties.
	 *
	 * @return void
	 */
	private function setup_properties() {
		$categories = array(
			'church-fse'         => array(
				'label'       => __( 'Church FSE Patterns', 'church-fse' ),
				'description' => __( 'Patterns for several sections and components', 'church-fse' ),
			),
			'church-fse-layouts' => array(
				'label'       => __( 'Church FSE Layouts', 'church-fse' ),
				'description' => __( 'Full-page layouts that can be used as templates', 'church-fse' ),
			),
		);

		$patterns = array(
			// layout templates patterns.
			'templates/single-post-cover-boxed',
			'templates/single-post-cover',
			'templates/archive-cover',
			'templates/archive-list',

			// layout patterns.
			'layout/content-1',
			'layout/content-2',
			'layout/cta-1',
			'layout/cta-2',
			'layout/cta-3',
			'layout/events',
			'layout/faq',
			'layout/features-1',
			'layout/features-2',
			'layout/features-3',
			'layout/features-4',
			'layout/hero-1',
			'layout/ministries-1',
			'layout/ministries-2',
			'layout/sermons-1',
			'layout/sermons-2',
			'layout/testimonial',
			'layout/verse',

			// Post patterns.
			'loops/posts-1',
			'loops/posts-2',
			'loops/posts-3',
			'loops/posts-4',

			// Page title patterns.
			'page_titles/page-title-1',
			'page_titles/page-title-2',
		);

		$this->categories = apply_filters( 'church_fse_block_patterns_categories', $categories );
		$this->patterns   = apply_filters( 'church_fse_block_patterns', $patterns );
	}

	/**
	 * Register block patterns categories.
	 *
	 * @return void
	 */
	private function register_categories() {
		foreach ( $this->categories as $slug => $args ) {
			if ( WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $slug ) ) {
				continue;
			}

			register_block_pattern_category( $slug, $args );
		}
	}

	/**
	 * Register Patterns.
	 *
	 * @return void
	 */
	private function register_patterns() {
		foreach ( $this->patterns as $pattern ) {
			$file = CHURCH_FSE_DIR . 'inc/patterns/' . $pattern . '.php';

			if ( ! is_file( $file ) ) {
				continue;
			}

			register_block_pattern( 'church-fse/' . $pattern, require $file );
		}
	}
}
