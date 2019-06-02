<?php
/**
 * Helper methods for dashicons.
 *
 * @package   kirki-framework/control-dashicons
 * @category  Core
 * @author    Ari Stathopoulos (@aristath)
 * @copyright Copyright (c) 2019, Ari Stathopoulos (@aristath)
 * @license   https://opensource.org/licenses/MIT
 * @since     1.0
 */

namespace Kirki\Core;

/**
 * A simple object containing static methods.
 */
class Dashicons {

	/**
	 * Get an array of all available dashicons.
	 *
	 * @static
	 * @access public
	 * @since 1.0
	 * @return array
	 */
	public static function get_icons() {
		return [
			'admin-menu'     => [ 'menu', 'admin-site', 'dashboard', 'admin-post', 'admin-media', 'admin-links', 'admin-page', 'admin-comments', 'admin-appearance', 'admin-plugins', 'admin-users', 'admin-tools', 'admin-settings', 'admin-network', 'admin-home', 'admin-generic', 'admin-collapse', 'filter', 'admin-customizer', 'admin-multisite' ],
			'welcome-screen' => [ 'welcome-write-blog', 'welcome-add-page', 'welcome-view-site', 'welcome-widgets-menus', 'welcome-comments', 'welcome-learn-more' ],
			'post-formats'   => [ 'format-aside', 'format-image', 'format-gallery', 'format-video', 'format-status', 'format-quote', 'format-chat', 'format-audio', 'camera', 'images-alt', 'images-alt2', 'video-alt', 'video-alt2', 'video-alt3' ],
			'media'          => [ 'media-archive', 'media-audio', 'media-code', 'media-default', 'media-document', 'media-interactive', 'media-spreadsheet', 'media-text', 'media-video', 'playlist-audio', 'playlist-video', 'controls-play', 'controls-pause', 'controls-forward', 'controls-skipforward', 'controls-back', 'controls-skipback', 'controls-repeat', 'controls-volumeon', 'controls-volumeoff' ],
			'image-editing'  => [ 'image-crop', 'image-rotate', 'image-rotate-left', 'image-rotate-right', 'image-flip-vertical', 'image-flip-horizontal', 'image-filter', 'undo', 'redo' ],
			'tinymce'        => [ 'editor-bold', 'editor-italic', 'editor-ul', 'editor-ol', 'editor-quote', 'editor-alignleft', 'editor-aligncenter', 'editor-alignright', 'editor-insertmore', 'editor-spellcheck', 'editor-expand', 'editor-contract', 'editor-kitchensink', 'editor-underline', 'editor-justify', 'editor-textcolor', 'editor-paste-word', 'editor-paste-text', 'editor-removeformatting', 'editor-video', 'editor-customchar', 'editor-outdent', 'editor-indent', 'editor-help', 'editor-strikethrough', 'editor-unlink', 'editor-rtl', 'editor-break', 'editor-code', 'editor-paragraph', 'editor-table' ],
			'posts'          => [ 'align-left', 'align-right', 'align-center', 'align-none', 'lock', 'unlock', 'calendar', 'calendar-alt', 'visibility', 'hidden', 'post-status', 'edit', 'trash', 'sticky' ],
			'sorting'        => [ 'external', 'arrow-up', 'arrow-down', 'arrow-right', 'arrow-left', 'arrow-up-alt', 'arrow-down-alt', 'arrow-right-alt', 'arrow-left-alt', 'arrow-up-alt2', 'arrow-down-alt2', 'arrow-right-alt2', 'arrow-left-alt2', 'sort', 'leftright', 'randomize', 'list-view', 'exerpt-view', 'grid-view' ],
			'social'         => [ 'share', 'share-alt', 'share-alt2', 'twitter', 'rss', 'email', 'email-alt', 'facebook', 'facebook-alt', 'googleplus', 'networking' ],
			'wordpress_org'  => [ 'hammer', 'art', 'migrate', 'performance', 'universal-access', 'universal-access-alt', 'tickets', 'nametag', 'clipboard', 'heart', 'megaphone', 'schedule' ],
			'products'       => [ 'wordpress', 'wordpress-alt', 'pressthis', 'update', 'screenoptions', 'info', 'cart', 'feedback', 'cloud', 'translation' ],
			'taxonomies'     => [ 'tag', 'category' ],
			'widgets'        => [ 'archive', 'tagcloud', 'text' ],
			'notifications'  => [ 'yes', 'no', 'no-alt', 'plus', 'plus-alt', 'minus', 'dismiss', 'marker', 'star-filled', 'star-half', 'star-empty', 'flag', 'warning' ],
			'misc'           => [ 'location', 'location-alt', 'vault', 'shield', 'shield-alt', 'sos', 'search', 'slides', 'analytics', 'chart-pie', 'chart-bar', 'chart-line', 'chart-area', 'groups', 'businessman', 'id', 'id-alt', 'products', 'awards', 'forms', 'testimonial', 'portfolio', 'book', 'book-alt', 'download', 'upload', 'backup', 'clock', 'lightbulb', 'microphone', 'desktop', 'tablet', 'smartphone', 'phone', 'index-card', 'carrot', 'building', 'store', 'album', 'palmtree', 'tickets-alt', 'money', 'smiley', 'thumbs-up', 'thumbs-down', 'layout' ],
		];
	}
}
