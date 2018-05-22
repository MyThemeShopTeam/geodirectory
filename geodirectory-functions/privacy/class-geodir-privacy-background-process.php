<?php
/**
 * GeoDirectory data cleanup background process.
 *
 * @package GeoDirectory
 * @since   1.2.26
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'GeoDir_Background_Process', false ) ) {
	include_once( 'class-geodir-background-process.php' );
}

/**
 * GeoDir_Privacy_Background_Process class.
 */
class GeoDir_Privacy_Background_Process extends GeoDir_Background_Process {

	/**
	 * Initiate new background process.
	 */
	public function __construct() {
		// Uses unique prefix per blog so each blog has separate queue.
		$this->prefix = 'wp_' . get_current_blog_id();
		$this->action = 'geodir_privacy_cleanup';
		parent::__construct();
	}

	/**
	 * Code to execute for each item in the queue
	 *
	 * @param string $item Queue item to iterate over.
	 * @return bool
	 */
	protected function task( $item ) {
		if ( ! $item || empty( $item['task'] ) ) {
			return false;
		}

		return false;
	}
}
