
const defaultConfig = require('@wordpress/scripts/config/webpack.config');
module.exports = {
	...defaultConfig,
	entry: {
		'comment-engagement-block': './includes/block-editor/blocks/comment-engagement-block',
		'shadow-comment-block': './includes/block-editor/blocks/shadow-comment-block',
	},
};
