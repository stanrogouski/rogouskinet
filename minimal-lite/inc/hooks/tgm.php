<?php
/**
 * Recommended plugins
 *
 * @package minimal-lite
 */
if ( ! function_exists( 'minimal_lite_recommended_plugins' ) ) :
	/**
	 * Recommend plugins.
	 *
	 * @since 1.0.0
	 */
	function minimal_lite_recommended_plugins() {
		$plugins = array(
			array(
                'name'     => __( 'Rankchecker.io Integration', 'minimal-lite' ),
                'slug'     => 'rankchecker-io-integration',
                'required' => false,
			),
		);
		tgmpa( $plugins );
	}
endif;
add_action( 'tgmpa_register', 'minimal_lite_recommended_plugins' );
