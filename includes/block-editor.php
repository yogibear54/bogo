<?php

add_action( 'enqueue_block_editor_assets', 'bogo_enqueue_block_editor_assets' );

function bogo_enqueue_block_editor_assets() {
	wp_enqueue_script(
		'bogo-block-editor',
		plugins_url( 'includes/js/block-editor.js', BOGO_PLUGIN_BASENAME ),
		array( 'wp-plugins', 'wp-edit-post', 'wp-components', 'wp-element' ),
		sprintf( '%s-%s', BOGO_VERSION, time() )
	);
}
