<?php
/**
 * Plugin Name:       Comment Engagement Block
 * Description:       Engage readers to comment on your content by short-circuiting the way to your comment-form.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            carstenbach
 * License:           GPL-3.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       comment-engagement-block
 *
 * @package           Comment_Engagement_Block
 */

function cbstdsys_comment_engagement_block_block_init() {

	$blocks = [
		'comment-engagement-block/',
		'shadow-comment-block/',
	];

	foreach ( $blocks as $block ) {
		register_block_type( 
			plugin_dir_path( __FILE__ ) . 'includes/block-editor/blocks/' . $block
		);
	}
}
add_action( 'init', 'cbstdsys_comment_engagement_block_block_init' );
