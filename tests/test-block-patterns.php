<?php
/**
 * Tests for block pattern registration.
 *
 * @package church-fse
 */

use ChurchFSE\Block_Patterns;

/**
 * Test block pattern category registration.
 */
class Test_Block_Patterns extends WP_UnitTestCase {
	/**
	 * Pattern categories registered by the theme.
	 *
	 * @var list<'church-fse'|'church-fse-layouts'>
	 */
	const CATEGORIES = array( 'church-fse', 'church-fse-layouts' );

	/**
	 * Categories as registered before each test.
	 *
	 * @var array<string, array{name: string, label: string, description?: string}>
	 */
	private $registered_categories = array();

	/**
	 * Instances created by the test, whose init callbacks must be removed.
	 *
	 * @var list<Block_Patterns>
	 */
	private $instances = array();

	/**
	 * Number of theme strings translated so far.
	 *
	 * @var int
	 */
	private $translations = 0;

	/**
	 * Snapshot the theme categories and track theme translations.
	 *
	 * @return void
	 */
	public function set_up(): void {
		parent::set_up();

		$registry = WP_Block_Pattern_Categories_Registry::get_instance();
		foreach ( self::CATEGORIES as $slug ) {
			if ( $registry->is_registered( $slug ) ) {
				$this->registered_categories[ $slug ] = $registry->get_registered( $slug );
			}
		}

		add_filter( 'gettext_church-fse', array( $this, 'mark_translation' ) );
		add_filter( 'church_fse_block_patterns', '__return_empty_array' );
	}

	/**
	 * Restore the theme categories and remove the test hooks.
	 *
	 * @return void
	 */
	public function tear_down(): void {
		remove_filter( 'gettext_church-fse', array( $this, 'mark_translation' ) );
		remove_filter( 'church_fse_block_patterns', '__return_empty_array' );

		foreach ( $this->instances as $instance ) {
			remove_action( 'init', array( $instance, 'run' ) );
		}

		$registry = WP_Block_Pattern_Categories_Registry::get_instance();
		foreach ( self::CATEGORIES as $slug ) {
			if ( $registry->is_registered( $slug ) ) {
				$registry->unregister( $slug );
			}
		}
		foreach ( $this->registered_categories as $slug => $category ) {
			unset( $category['name'] );
			$registry->register( $slug, $category );
		}

		parent::tear_down();
	}

	/**
	 * Count a theme translation and tag the translated text.
	 *
	 * @param string $translation Translated text.
	 *
	 * @return string
	 */
	public function mark_translation( string $translation ): string {
		$this->translations++;

		return 'translated:' . $translation;
	}

	/**
	 * Build the handler the way the theme does while it loads.
	 *
	 * @return Block_Patterns
	 */
	private function create_instance(): Block_Patterns {
		$instance          = new Block_Patterns();
		$this->instances[] = $instance;

		return $instance;
	}

	/**
	 * Loading the theme must not translate anything before init.
	 *
	 * @return void
	 */
	public function test_constructor_does_not_translate_category_labels(): void {
		$this->create_instance();

		$this->assertSame( 0, $this->translations );
	}

	/**
	 * Categories are registered with their translated labels when init runs.
	 *
	 * @return void
	 */
	public function test_run_registers_translated_category_labels(): void {
		$registry = WP_Block_Pattern_Categories_Registry::get_instance();
		foreach ( self::CATEGORIES as $slug ) {
			if ( $registry->is_registered( $slug ) ) {
				$registry->unregister( $slug );
			}
		}

		$this->create_instance()->run();

		$patterns = $registry->get_registered( 'church-fse' );
		$layouts  = $registry->get_registered( 'church-fse-layouts' );

		$this->assertSame( 'translated:Church FSE Patterns', $patterns['label'] );
		$this->assertSame( 'translated:Patterns for several sections and components', $patterns['description'] );
		$this->assertSame( 'translated:Church FSE Layouts', $layouts['label'] );
		$this->assertSame( 'translated:Full-page layouts that can be used as templates', $layouts['description'] );
	}
}
