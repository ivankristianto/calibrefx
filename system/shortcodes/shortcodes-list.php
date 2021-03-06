<?php

function calibrefx_init_shortcodes(){
	global $cfx_shortcodes;

	#-----------------------------------------------------------------
	# Elements
	#-----------------------------------------------------------------

	$cfx_shortcodes['header_6'] = array(
		'type' => 'heading',
		'title' => __( 'Element', 'calibrefx' )
	);

	//Image with Animation
	$cfx_shortcodes['image_with_animation'] = array(
		'type' => 'custom',
		'title' => __( 'Image With Animation', 'calibrefx' ),
		'attr' => array(
			'image' => array( 'type' => 'custom', 'title'  => __( 'Image', 'calibrefx' ) ),
			'animation' => array(
				'type' => 'select',
				'title'  => __( 'Image Animation', 'calibrefx' ),
				'values' => array(
				     'fade-in' => 'Fade In',
			  		 'fade-in-from-left' => 'Fade In From Left',
			  		 'fade-in-right' => 'Fade In From Right',
			  		 'fade-in-from-bottom' => 'Fade In From Bottom',
			  		 'grow-in' => 'Grow In'
				)
			),
			'delay' => array(
				'type' => 'text',
				'title' => __( 'Delay', 'calibrefx' ),
				'desc' => __( 'Enter delay (in milliseconds) if needed e.g. 150. This parameter comes in handy when creating the animate in "one by one" effect in horizontal columns. ', 'calibrefx' ),
			),
			'lightbox' => array( 'type' => 'checkbox', 'title' => __( 'Enable Lightbox', 'calibrefx' ) ),
		)
	);

	//Divider
	$cfx_shortcodes['divider'] = array(
		'type'  => 'regular',
		'title' => __( 'Divider', 'calibrefx' ),
		'attr'  => array(
			'line_type' => array(
				'type' => 'select',
				'title' => __( 'Display Line', 'calibrefx' ),
				'values' => array(
				     'no-line' => 'No Line',
			  		 'full-width' => 'Full Width Line',
			  		 'small' => 'Small Line'
				)
			),
			'custom_height' => array(
				'type'  => 'text',
				'desc'  => 'If you would like to control the specifc number of pixels your divider is, enter it here. <b>Don\'t enter "px", just the numnber e.g. "30".</b>',
				'title' => __( 'Custom Dividing Height', 'calibrefx' )
			)
		)
	);

	//Icon
	$cfx_shortcodes['icon'] = array(
		'type'  => 'regular',
		'title' => __( 'Icon', 'calibrefx' ),
		'attr'  => array(
			'size' => array(
				'type'  => 'radio',
				'title' => __( 'Icon Style', 'calibrefx' ),
				'desc'  => __( 'Tiny is recommended to be used inline with regular text. <br/> Small is recommended to be used inline right before heading text. <br> Regular can be used in a variety of places. <br> Large and Alternative are recommended to be used at the top of columns.', 'calibrefx' ),
				'opt' => array(
					'tiny' => 'Tiny',
					'small' => 'Small',
					'regular' => 'Regular',
					'large' => 'Large',
					'large-alt' => 'Alternative'
				)
			),
			'color' => array( 'type' => 'custom', 'title'  => __( 'Background Color', 'calibrefx' ) ),
			'text_color' => array( 'type' => 'custom', 'title'  => __( 'Text Color', 'calibrefx' ) ),
			'icons' => array(
				'type' => 'icons',
				'title' => 'Icon',
				'values' => array(
			      	'fa-adjust' => 'fa fa-adjust',
					'fa-adn' => 'fa fa-adn',
					'fa-align-center' => 'fa fa-align-center',
					'fa-align-justify' => 'fa fa-align-justify',
					'fa-align-left' => 'fa fa-align-left',
					'fa-align-right' => 'fa fa-align-right',
					'fa-ambulance' => 'fa fa-ambulance',
					'fa-anchor' => 'fa fa-anchor',
					'fa-android' => 'fa fa-android',
					'fa-angellist' => 'fa fa-angellist',
					'fa-angle-double-down' => 'fa fa-angle-double-down',
					'fa-angle-double-left' => 'fa fa-angle-double-left',
					'fa-angle-double-right' => 'fa fa-angle-double-right',
					'fa-angle-double-up' => 'fa fa-angle-double-up',
					'fa-angle-down' => 'fa fa-angle-down',
					'fa-angle-left' => 'fa fa-angle-left',
					'fa-angle-right' => 'fa fa-angle-right',
					'fa-angle-up' => 'fa fa-angle-up',
					'fa-apple' => 'fa fa-apple',
					'fa-archive' => 'fa fa-archive',
					'fa-area-chart' => 'fa fa-area-chart',
					'fa-arrow-circle-down' => 'fa fa-arrow-circle-down',
					'fa-arrow-circle-left' => 'fa fa-arrow-circle-left',
					'fa-arrow-circle-o-down' => 'fa fa-arrow-circle-o-down',
					'fa-arrow-circle-o-left' => 'fa fa-arrow-circle-o-left',
					'fa-arrow-circle-o-right' => 'fa fa-arrow-circle-o-right',
					'fa-arrow-circle-o-up' => 'fa fa-arrow-circle-o-up',
					'fa-arrow-circle-right' => 'fa fa-arrow-circle-right',
					'fa-arrow-circle-up' => 'fa fa-arrow-circle-up',
					'fa-arrow-down' => 'fa fa-arrow-down',
					'fa-arrow-left' => 'fa fa-arrow-left',
					'fa-arrow-right' => 'fa fa-arrow-right',
					'fa-arrow-up' => 'fa fa-arrow-up',
					'fa-arrows' => 'fa fa-arrows',
					'fa-arrows-alt' => 'fa fa-arrows-alt',
					'fa-arrows-h' => 'fa fa-arrows-h',
					'fa-arrows-v' => 'fa fa-arrows-v',
					'fa-asterisk' => 'fa fa-asterisk',
					'fa-at' => 'fa fa-at',
					'fa-automobile' => 'fa fa-automobile',
					'fa-backward' => 'fa fa-backward',
					'fa-ban' => 'fa fa-ban',
					'fa-bank' => 'fa fa-bank',
					'fa-bar-chart' => 'fa fa-bar-chart',
					'fa-bar-chart-o' => 'fa fa-bar-chart-o',
					'fa-barcode' => 'fa fa-barcode',
					'fa-bars' => 'fa fa-bars',
					'fa-beer' => 'fa fa-beer',
					'fa-behance' => 'fa fa-behance',
					'fa-behance-square' => 'fa fa-behance-square',
					'fa-bell' => 'fa fa-bell',
					'fa-bell-o' => 'fa fa-bell-o',
					'fa-bell-slash' => 'fa fa-bell-slash',
					'fa-bell-slash-o' => 'fa fa-bell-slash-o',
					'fa-bicycle' => 'fa fa-bicycle',
					'fa-binoculars' => 'fa fa-binoculars',
					'fa-birthday-cake' => 'fa fa-birthday-cake',
					'fa-bitbucket' => 'fa fa-bitbucket',
					'fa-bitbucket-square' => 'fa fa-bitbucket-square',
					'fa-bitcoin' => 'fa fa-bitcoin',
					'fa-bold' => 'fa fa-bold',
					'fa-bolt' => 'fa fa-bolt',
					'fa-bomb' => 'fa fa-bomb',
					'fa-book' => 'fa fa-book',
					'fa-bookmark' => 'fa fa-bookmark',
					'fa-bookmark-o' => 'fa fa-bookmark-o',
					'fa-briefcase' => 'fa fa-briefcase',
					'fa-btc' => 'fa fa-btc',
					'fa-bug' => 'fa fa-bug',
					'fa-building' => 'fa fa-building',
					'fa-building-o' => 'fa fa-building-o',
					'fa-bullhorn' => 'fa fa-bullhorn',
					'fa-bullseye' => 'fa fa-bullseye',
					'fa-bus' => 'fa fa-bus',
					'fa-cab' => 'fa fa-cab',
					'fa-calculator' => 'fa fa-calculator',
					'fa-calendar' => 'fa fa-calendar',
					'fa-calendar-o' => 'fa fa-calendar-o',
					'fa-camera' => 'fa fa-camera',
					'fa-camera-retro' => 'fa fa-camera-retro',
					'fa-car' => 'fa fa-car',
					'fa-caret-down' => 'fa fa-caret-down',
					'fa-caret-left' => 'fa fa-caret-left',
					'fa-caret-right' => 'fa fa-caret-right',
					'fa-caret-square-o-down' => 'fa fa-caret-square-o-down',
					'fa-caret-square-o-left' => 'fa fa-caret-square-o-left',
					'fa-caret-square-o-right' => 'fa fa-caret-square-o-right',
					'fa-caret-square-o-up' => 'fa fa-caret-square-o-up',
					'fa-caret-up' => 'fa fa-caret-up',
					'fa-cc' => 'fa fa-cc',
					'fa-cc-amex' => 'fa fa-cc-amex',
					'fa-cc-discover' => 'fa fa-cc-discover',
					'fa-cc-mastercard' => 'fa fa-cc-mastercard',
					'fa-cc-paypal' => 'fa fa-cc-paypal',
					'fa-cc-stripe' => 'fa fa-cc-stripe',
					'fa-cc-visa' => 'fa fa-cc-visa',
					'fa-certificate' => 'fa fa-certificate',
					'fa-chain' => 'fa fa-chain',
					'fa-chain-broken' => 'fa fa-chain-broken',
					'fa-check' => 'fa fa-check',
					'fa-check-circle' => 'fa fa-check-circle',
					'fa-check-circle-o' => 'fa fa-check-circle-o',
					'fa-check-square' => 'fa fa-check-square',
					'fa-check-square-o' => 'fa fa-check-square-o',
					'fa-chevron-circle-down' => 'fa fa-chevron-circle-down',
					'fa-chevron-circle-left' => 'fa fa-chevron-circle-left',
					'fa-chevron-circle-right' => 'fa fa-chevron-circle-right',
					'fa-chevron-circle-up' => 'fa fa-chevron-circle-up',
					'fa-chevron-down' => 'fa fa-chevron-down',
					'fa-chevron-left' => 'fa fa-chevron-left',
					'fa-chevron-right' => 'fa fa-chevron-right',
					'fa-chevron-up' => 'fa fa-chevron-up',
					'fa-child' => 'fa fa-child',
					'fa-circle' => 'fa fa-circle',
					'fa-circle-o' => 'fa fa-circle-o',
					'fa-circle-o-notch' => 'fa fa-circle-o-notch',
					'fa-circle-thin' => 'fa fa-circle-thin',
					'fa-clipboard' => 'fa fa-clipboard',
					'fa-clock-o' => 'fa fa-clock-o',
					'fa-close' => 'fa fa-close',
					'fa-cloud' => 'fa fa-cloud',
					'fa-cloud-download' => 'fa fa-cloud-download',
					'fa-cloud-upload' => 'fa fa-cloud-upload',
					'fa-cny' => 'fa fa-cny',
					'fa-code' => 'fa fa-code',
					'fa-code-fork' => 'fa fa-code-fork',
					'fa-codepen' => 'fa fa-codepen',
					'fa-coffee' => 'fa fa-coffee',
					'fa-cog' => 'fa fa-cog',
					'fa-cogs' => 'fa fa-cogs',
					'fa-columns' => 'fa fa-columns',
					'fa-comment' => 'fa fa-comment',
					'fa-comment-o' => 'fa fa-comment-o',
					'fa-comments' => 'fa fa-comments',
					'fa-comments-o' => 'fa fa-comments-o',
					'fa-compass' => 'fa fa-compass',
					'fa-compress' => 'fa fa-compress',
					'fa-copy' => 'fa fa-copy',
					'fa-copyright' => 'fa fa-copyright',
					'fa-credit-card' => 'fa fa-credit-card',
					'fa-crop' => 'fa fa-crop',
					'fa-crosshairs' => 'fa fa-crosshairs',
					'fa-css3' => 'fa fa-css3',
					'fa-cube' => 'fa fa-cube',
					'fa-cubes' => 'fa fa-cubes',
					'fa-cut' => 'fa fa-cut',
					'fa-cutlery' => 'fa fa-cutlery',
					'fa-dashboard' => 'fa fa-dashboard',
					'fa-database' => 'fa fa-database',
					'fa-dedent' => 'fa fa-dedent',
					'fa-delicious' => 'fa fa-delicious',
					'fa-desktop' => 'fa fa-desktop',
					'fa-deviantart' => 'fa fa-deviantart',
					'fa-digg' => 'fa fa-digg',
					'fa-dollar' => 'fa fa-dollar',
					'fa-dot-circle-o' => 'fa fa-dot-circle-o',
					'fa-download' => 'fa fa-download',
					'fa-dribbble' => 'fa fa-dribbble',
					'fa-dropbox' => 'fa fa-dropbox',
					'fa-drupal' => 'fa fa-drupal',
					'fa-edit' => 'fa fa-edit',
					'fa-eject' => 'fa fa-eject',
					'fa-ellipsis-h' => 'fa fa-ellipsis-h',
					'fa-ellipsis-v' => 'fa fa-ellipsis-v',
					'fa-empire' => 'fa fa-empire',
					'fa-envelope' => 'fa fa-envelope',
					'fa-envelope-o' => 'fa fa-envelope-o',
					'fa-envelope-square' => 'fa fa-envelope-square',
					'fa-eraser' => 'fa fa-eraser',
					'fa-eur' => 'fa fa-eur',
					'fa-euro' => 'fa fa-euro',
					'fa-exchange' => 'fa fa-exchange',
					'fa-exclamation' => 'fa fa-exclamation',
					'fa-exclamation-circle' => 'fa fa-exclamation-circle',
					'fa-exclamation-triangle' => 'fa fa-exclamation-triangle',
					'fa-expand' => 'fa fa-expand',
					'fa-external-link' => 'fa fa-external-link',
					'fa-external-link-square' => 'fa fa-external-link-square',
					'fa-eye' => 'fa fa-eye',
					'fa-eye-slash' => 'fa fa-eye-slash',
					'fa-eyedropper' => 'fa fa-eyedropper',
					'fa-facebook' => 'fa fa-facebook',
					'fa-facebook-square' => 'fa fa-facebook-square',
					'fa-fast-backward' => 'fa fa-fast-backward',
					'fa-fast-forward' => 'fa fa-fast-forward',
					'fa-fax' => 'fa fa-fax',
					'fa-female' => 'fa fa-female',
					'fa-fighter-jet' => 'fa fa-fighter-jet',
					'fa-file' => 'fa fa-file',
					'fa-file-archive-o' => 'fa fa-file-archive-o',
					'fa-file-audio-o' => 'fa fa-file-audio-o',
					'fa-file-code-o' => 'fa fa-file-code-o',
					'fa-file-excel-o' => 'fa fa-file-excel-o',
					'fa-file-image-o' => 'fa fa-file-image-o',
					'fa-file-movie-o' => 'fa fa-file-movie-o',
					'fa-file-o' => 'fa fa-file-o',
					'fa-file-pdf-o' => 'fa fa-file-pdf-o',
					'fa-file-photo-o' => 'fa fa-file-photo-o',
					'fa-file-picture-o' => 'fa fa-file-picture-o',
					'fa-file-powerpoint-o' => 'fa fa-file-powerpoint-o',
					'fa-file-sound-o' => 'fa fa-file-sound-o',
					'fa-file-text' => 'fa fa-file-text',
					'fa-file-text-o' => 'fa fa-file-text-o',
					'fa-file-video-o' => 'fa fa-file-video-o',
					'fa-file-word-o' => 'fa fa-file-word-o',
					'fa-file-zip-o' => 'fa fa-file-zip-o',
					'fa-files-o' => 'fa fa-files-o',
					'fa-film' => 'fa fa-film',
					'fa-filter' => 'fa fa-filter',
					'fa-fire' => 'fa fa-fire',
					'fa-fire-extinguisher' => 'fa fa-fire-extinguisher',
					'fa-flag' => 'fa fa-flag',
					'fa-flag-checkered' => 'fa fa-flag-checkered',
					'fa-flag-o' => 'fa fa-flag-o',
					'fa-flash' => 'fa fa-flash',
					'fa-flask' => 'fa fa-flask',
					'fa-flickr' => 'fa fa-flickr',
					'fa-floppy-o' => 'fa fa-floppy-o',
					'fa-folder' => 'fa fa-folder',
					'fa-folder-o' => 'fa fa-folder-o',
					'fa-folder-open' => 'fa fa-folder-open',
					'fa-folder-open-o' => 'fa fa-folder-open-o',
					'fa-font' => 'fa fa-font',
					'fa-forward' => 'fa fa-forward',
					'fa-foursquare' => 'fa fa-foursquare',
					'fa-frown-o' => 'fa fa-frown-o',
					'fa-futbol-o' => 'fa fa-futbol-o',
					'fa-gamepad' => 'fa fa-gamepad',
					'fa-gavel' => 'fa fa-gavel',
					'fa-gbp' => 'fa fa-gbp',
					'fa-ge' => 'fa fa-ge',
					'fa-gear' => 'fa fa-gear',
					'fa-gears' => 'fa fa-gears',
					'fa-gift' => 'fa fa-gift',
					'fa-git' => 'fa fa-git',
					'fa-git-square' => 'fa fa-git-square',
					'fa-github' => 'fa fa-github',
					'fa-github-alt' => 'fa fa-github-alt',
					'fa-github-square' => 'fa fa-github-square',
					'fa-gittip' => 'fa fa-gittip',
					'fa-glass' => 'fa fa-glass',
					'fa-globe' => 'fa fa-globe',
					'fa-google' => 'fa fa-google',
					'fa-google-plus' => 'fa fa-google-plus',
					'fa-google-plus-square' => 'fa fa-google-plus-square',
					'fa-google-wallet' => 'fa fa-google-wallet',
					'fa-graduation-cap' => 'fa fa-graduation-cap',
					'fa-group' => 'fa fa-group',
					'fa-h-square' => 'fa fa-h-square',
					'fa-hacker-news' => 'fa fa-hacker-news',
					'fa-hand-o-down' => 'fa fa-hand-o-down',
					'fa-hand-o-left' => 'fa fa-hand-o-left',
					'fa-hand-o-right' => 'fa fa-hand-o-right',
					'fa-hand-o-up' => 'fa fa-hand-o-up',
					'fa-hdd-o' => 'fa fa-hdd-o',
					'fa-header' => 'fa fa-header',
					'fa-headphones' => 'fa fa-headphones',
					'fa-heart' => 'fa fa-heart',
					'fa-heart-o' => 'fa fa-heart-o',
					'fa-history' => 'fa fa-history',
					'fa-home' => 'fa fa-home',
					'fa-hospital-o' => 'fa fa-hospital-o',
					'fa-html5' => 'fa fa-html5',
					'fa-ils' => 'fa fa-ils',
					'fa-image' => 'fa fa-image',
					'fa-inbox' => 'fa fa-inbox',
					'fa-indent' => 'fa fa-indent',
					'fa-info' => 'fa fa-info',
					'fa-info-circle' => 'fa fa-info-circle',
					'fa-inr' => 'fa fa-inr',
					'fa-instagram' => 'fa fa-instagram',
					'fa-institution' => 'fa fa-institution',
					'fa-ioxhost' => 'fa fa-ioxhost',
					'fa-italic' => 'fa fa-italic',
					'fa-joomla' => 'fa fa-joomla',
					'fa-jpy' => 'fa fa-jpy',
					'fa-jsfiddle' => 'fa fa-jsfiddle',
					'fa-key' => 'fa fa-key',
					'fa-keyboard-o' => 'fa fa-keyboard-o',
					'fa-krw' => 'fa fa-krw',
					'fa-language' => 'fa fa-language',
					'fa-laptop' => 'fa fa-laptop',
					'fa-lastfm' => 'fa fa-lastfm',
					'fa-lastfm-square' => 'fa fa-lastfm-square',
					'fa-leaf' => 'fa fa-leaf',
					'fa-legal' => 'fa fa-legal',
					'fa-lemon-o' => 'fa fa-lemon-o',
					'fa-level-down' => 'fa fa-level-down',
					'fa-level-up' => 'fa fa-level-up',
					'fa-life-bouy' => 'fa fa-life-bouy',
					'fa-life-buoy' => 'fa fa-life-buoy',
					'fa-life-ring' => 'fa fa-life-ring',
					'fa-life-saver' => 'fa fa-life-saver',
					'fa-lightbulb-o' => 'fa fa-lightbulb-o',
					'fa-line-chart' => 'fa fa-line-chart',
					'fa-link' => 'fa fa-link',
					'fa-linkedin' => 'fa fa-linkedin',
					'fa-linkedin-square' => 'fa fa-linkedin-square',
					'fa-linux' => 'fa fa-linux',
					'fa-list' => 'fa fa-list',
					'fa-list-alt' => 'fa fa-list-alt',
					'fa-list-ol' => 'fa fa-list-ol',
					'fa-list-ul' => 'fa fa-list-ul',
					'fa-location-arrow' => 'fa fa-location-arrow',
					'fa-lock' => 'fa fa-lock',
					'fa-long-arrow-down' => 'fa fa-long-arrow-down',
					'fa-long-arrow-left' => 'fa fa-long-arrow-left',
					'fa-long-arrow-right' => 'fa fa-long-arrow-right',
					'fa-long-arrow-up' => 'fa fa-long-arrow-up',
					'fa-magic' => 'fa fa-magic',
					'fa-magnet' => 'fa fa-magnet',
					'fa-mail-forward' => 'fa fa-mail-forward',
					'fa-mail-reply' => 'fa fa-mail-reply',
					'fa-mail-reply-all' => 'fa fa-mail-reply-all',
					'fa-male' => 'fa fa-male',
					'fa-map-marker' => 'fa fa-map-marker',
					'fa-maxcdn' => 'fa fa-maxcdn',
					'fa-meanpath' => 'fa fa-meanpath',
					'fa-medkit' => 'fa fa-medkit',
					'fa-meh-o' => 'fa fa-meh-o',
					'fa-microphone' => 'fa fa-microphone',
					'fa-microphone-slash' => 'fa fa-microphone-slash',
					'fa-minus' => 'fa fa-minus',
					'fa-minus-circle' => 'fa fa-minus-circle',
					'fa-minus-square' => 'fa fa-minus-square',
					'fa-minus-square-o' => 'fa fa-minus-square-o',
					'fa-mobile' => 'fa fa-mobile',
					'fa-mobile-phone' => 'fa fa-mobile-phone',
					'fa-money' => 'fa fa-money',
					'fa-moon-o' => 'fa fa-moon-o',
					'fa-mortar-board' => 'fa fa-mortar-board',
					'fa-music' => 'fa fa-music',
					'fa-navicon' => 'fa fa-navicon',
					'fa-newspaper-o' => 'fa fa-newspaper-o',
					'fa-openid' => 'fa fa-openid',
					'fa-outdent' => 'fa fa-outdent',
					'fa-pagelines' => 'fa fa-pagelines',
					'fa-paint-brush' => 'fa fa-paint-brush',
					'fa-paper-plane' => 'fa fa-paper-plane',
					'fa-paper-plane-o' => 'fa fa-paper-plane-o',
					'fa-paperclip' => 'fa fa-paperclip',
					'fa-paragraph' => 'fa fa-paragraph',
					'fa-paste' => 'fa fa-paste',
					'fa-pause' => 'fa fa-pause',
					'fa-paw' => 'fa fa-paw',
					'fa-paypal' => 'fa fa-paypal',
					'fa-pencil' => 'fa fa-pencil',
					'fa-pencil-square' => 'fa fa-pencil-square',
					'fa-pencil-square-o' => 'fa fa-pencil-square-o',
					'fa-phone' => 'fa fa-phone',
					'fa-phone-square' => 'fa fa-phone-square',
					'fa-photo' => 'fa fa-photo',
					'fa-picture-o' => 'fa fa-picture-o',
					'fa-pie-chart' => 'fa fa-pie-chart',
					'fa-pied-piper' => 'fa fa-pied-piper',
					'fa-pied-piper-alt' => 'fa fa-pied-piper-alt',
					'fa-pinterest' => 'fa fa-pinterest',
					'fa-pinterest-square' => 'fa fa-pinterest-square',
					'fa-plane' => 'fa fa-plane',
					'fa-play' => 'fa fa-play',
					'fa-play-circle' => 'fa fa-play-circle',
					'fa-play-circle-o' => 'fa fa-play-circle-o',
					'fa-plug' => 'fa fa-plug',
					'fa-plus' => 'fa fa-plus',
					'fa-plus-circle' => 'fa fa-plus-circle',
					'fa-plus-square' => 'fa fa-plus-square',
					'fa-plus-square-o' => 'fa fa-plus-square-o',
					'fa-power-off' => 'fa fa-power-off',
					'fa-print' => 'fa fa-print',
					'fa-puzzle-piece' => 'fa fa-puzzle-piece',
					'fa-qq' => 'fa fa-qq',
					'fa-qrcode' => 'fa fa-qrcode',
					'fa-question' => 'fa fa-question',
					'fa-question-circle' => 'fa fa-question-circle',
					'fa-quote-left' => 'fa fa-quote-left',
					'fa-quote-right' => 'fa fa-quote-right',
					'fa-ra' => 'fa fa-ra',
					'fa-random' => 'fa fa-random',
					'fa-rebel' => 'fa fa-rebel',
					'fa-recycle' => 'fa fa-recycle',
					'fa-reddit' => 'fa fa-reddit',
					'fa-reddit-square' => 'fa fa-reddit-square',
					'fa-refresh' => 'fa fa-refresh',
					'fa-remove' => 'fa fa-remove',
					'fa-renren' => 'fa fa-renren',
					'fa-reorder' => 'fa fa-reorder',
					'fa-repeat' => 'fa fa-repeat',
					'fa-reply' => 'fa fa-reply',
					'fa-reply-all' => 'fa fa-reply-all',
					'fa-retweet' => 'fa fa-retweet',
					'fa-rmb' => 'fa fa-rmb',
					'fa-road' => 'fa fa-road',
					'fa-rocket' => 'fa fa-rocket',
					'fa-rotate-left' => 'fa fa-rotate-left',
					'fa-rotate-right' => 'fa fa-rotate-right',
					'fa-rouble' => 'fa fa-rouble',
					'fa-rss' => 'fa fa-rss',
					'fa-rss-square' => 'fa fa-rss-square',
					'fa-rub' => 'fa fa-rub',
					'fa-ruble' => 'fa fa-ruble',
					'fa-rupee' => 'fa fa-rupee',
					'fa-save' => 'fa fa-save',
					'fa-scissors' => 'fa fa-scissors',
					'fa-search' => 'fa fa-search',
					'fa-search-minus' => 'fa fa-search-minus',
					'fa-search-plus' => 'fa fa-search-plus',
					'fa-send' => 'fa fa-send',
					'fa-send-o' => 'fa fa-send-o',
					'fa-share' => 'fa fa-share',
					'fa-share-alt' => 'fa fa-share-alt',
					'fa-share-alt-square' => 'fa fa-share-alt-square',
					'fa-share-square' => 'fa fa-share-square',
					'fa-share-square-o' => 'fa fa-share-square-o',
					'fa-shekel' => 'fa fa-shekel',
					'fa-sheqel' => 'fa fa-sheqel',
					'fa-shield' => 'fa fa-shield',
					'fa-shopping-cart' => 'fa fa-shopping-cart',
					'fa-sign-in' => 'fa fa-sign-in',
					'fa-sign-out' => 'fa fa-sign-out',
					'fa-signal' => 'fa fa-signal',
					'fa-sitemap' => 'fa fa-sitemap',
					'fa-skype' => 'fa fa-skype',
					'fa-slack' => 'fa fa-slack',
					'fa-sliders' => 'fa fa-sliders',
					'fa-slideshare' => 'fa fa-slideshare',
					'fa-smile-o' => 'fa fa-smile-o',
					'fa-soccer-ball-o' => 'fa fa-soccer-ball-o',
					'fa-sort' => 'fa fa-sort',
					'fa-sort-alpha-asc' => 'fa fa-sort-alpha-asc',
					'fa-sort-alpha-desc' => 'fa fa-sort-alpha-desc',
					'fa-sort-amount-asc' => 'fa fa-sort-amount-asc',
					'fa-sort-amount-desc' => 'fa fa-sort-amount-desc',
					'fa-sort-asc' => 'fa fa-sort-asc',
					'fa-sort-desc' => 'fa fa-sort-desc',
					'fa-sort-down' => 'fa fa-sort-down',
					'fa-sort-numeric-asc' => 'fa fa-sort-numeric-asc',
					'fa-sort-numeric-desc' => 'fa fa-sort-numeric-desc',
					'fa-sort-up' => 'fa fa-sort-up',
					'fa-soundcloud' => 'fa fa-soundcloud',
					'fa-space-shuttle' => 'fa fa-space-shuttle',
					'fa-spinner' => 'fa fa-spinner',
					'fa-spoon' => 'fa fa-spoon',
					'fa-spotify' => 'fa fa-spotify',
					'fa-square' => 'fa fa-square',
					'fa-square-o' => 'fa fa-square-o',
					'fa-stack-exchange' => 'fa fa-stack-exchange',
					'fa-stack-overflow' => 'fa fa-stack-overflow',
					'fa-star' => 'fa fa-star',
					'fa-star-half' => 'fa fa-star-half',
					'fa-star-half-empty' => 'fa fa-star-half-empty',
					'fa-star-half-full' => 'fa fa-star-half-full',
					'fa-star-half-o' => 'fa fa-star-half-o',
					'fa-star-o' => 'fa fa-star-o',
					'fa-steam' => 'fa fa-steam',
					'fa-steam-square' => 'fa fa-steam-square',
					'fa-step-backward' => 'fa fa-step-backward',
					'fa-step-forward' => 'fa fa-step-forward',
					'fa-stethoscope' => 'fa fa-stethoscope',
					'fa-stop' => 'fa fa-stop',
					'fa-strikethrough' => 'fa fa-strikethrough',
					'fa-stumbleupon' => 'fa fa-stumbleupon',
					'fa-stumbleupon-circle' => 'fa fa-stumbleupon-circle',
					'fa-subscript' => 'fa fa-subscript',
					'fa-suitcase' => 'fa fa-suitcase',
					'fa-sun-o' => 'fa fa-sun-o',
					'fa-superscript' => 'fa fa-superscript',
					'fa-support' => 'fa fa-support',
					'fa-table' => 'fa fa-table',
					'fa-tablet' => 'fa fa-tablet',
					'fa-tachometer' => 'fa fa-tachometer',
					'fa-tag' => 'fa fa-tag',
					'fa-tags' => 'fa fa-tags',
					'fa-tasks' => 'fa fa-tasks',
					'fa-taxi' => 'fa fa-taxi',
					'fa-tencent-weibo' => 'fa fa-tencent-weibo',
					'fa-terminal' => 'fa fa-terminal',
					'fa-text-height' => 'fa fa-text-height',
					'fa-text-width' => 'fa fa-text-width',
					'fa-th' => 'fa fa-th',
					'fa-th-large' => 'fa fa-th-large',
					'fa-th-list' => 'fa fa-th-list',
					'fa-thumb-tack' => 'fa fa-thumb-tack',
					'fa-thumbs-down' => 'fa fa-thumbs-down',
					'fa-thumbs-o-down' => 'fa fa-thumbs-o-down',
					'fa-thumbs-o-up' => 'fa fa-thumbs-o-up',
					'fa-thumbs-up' => 'fa fa-thumbs-up',
					'fa-ticket' => 'fa fa-ticket',
					'fa-times' => 'fa fa-times',
					'fa-times-circle' => 'fa fa-times-circle',
					'fa-times-circle-o' => 'fa fa-times-circle-o',
					'fa-tint' => 'fa fa-tint',
					'fa-toggle-down' => 'fa fa-toggle-down',
					'fa-toggle-left' => 'fa fa-toggle-left',
					'fa-toggle-off' => 'fa fa-toggle-off',
					'fa-toggle-on' => 'fa fa-toggle-on',
					'fa-toggle-right' => 'fa fa-toggle-right',
					'fa-toggle-up' => 'fa fa-toggle-up',
					'fa-trash' => 'fa fa-trash',
					'fa-trash-o' => 'fa fa-trash-o',
					'fa-tree' => 'fa fa-tree',
					'fa-trello' => 'fa fa-trello',
					'fa-trophy' => 'fa fa-trophy',
					'fa-truck' => 'fa fa-truck',
					'fa-try' => 'fa fa-try',
					'fa-tty' => 'fa fa-tty',
					'fa-tumblr' => 'fa fa-tumblr',
					'fa-tumblr-square' => 'fa fa-tumblr-square',
					'fa-turkish-lira' => 'fa fa-turkish-lira',
					'fa-twitch' => 'fa fa-twitch',
					'fa-twitter' => 'fa fa-twitter',
					'fa-twitter-square' => 'fa fa-twitter-square',
					'fa-umbrella' => 'fa fa-umbrella',
					'fa-underline' => 'fa fa-underline',
					'fa-undo' => 'fa fa-undo',
					'fa-university' => 'fa fa-university',
					'fa-unlink' => 'fa fa-unlink',
					'fa-unlock' => 'fa fa-unlock',
					'fa-unlock-alt' => 'fa fa-unlock-alt',
					'fa-unsorted' => 'fa fa-unsorted',
					'fa-upload' => 'fa fa-upload',
					'fa-usd' => 'fa fa-usd',
					'fa-user' => 'fa fa-user',
					'fa-user-md' => 'fa fa-user-md',
					'fa-users' => 'fa fa-users',
					'fa-video-camera' => 'fa fa-video-camera',
					'fa-vimeo-square' => 'fa fa-vimeo-square',
					'fa-vine' => 'fa fa-vine',
					'fa-vk' => 'fa fa-vk',
					'fa-volume-down' => 'fa fa-volume-down',
					'fa-volume-off' => 'fa fa-volume-off',
					'fa-volume-up' => 'fa fa-volume-up',
					'fa-warning' => 'fa fa-warning',
					'fa-wechat' => 'fa fa-wechat',
					'fa-weibo' => 'fa fa-weibo',
					'fa-weixin' => 'fa fa-weixin',
					'fa-wheelchair' => 'fa fa-wheelchair',
					'fa-wifi' => 'fa fa-wifi',
					'fa-windows' => 'fa fa-windows',
					'fa-won' => 'fa fa-won',
					'fa-wordpress' => 'fa fa-wordpress',
					'fa-wrench' => 'fa fa-wrench',
					'fa-xing' => 'fa fa-xing',
					'fa-xing-square' => 'fa fa-xing-square',
					'fa-yahoo' => 'fa fa-yahoo',
					'fa-yelp' => 'fa fa-yelp',
					'fa-yen' => 'fa fa-yen',
					'fa-youtube' => 'fa fa-youtube',
					'fa-youtube-play' => 'fa fa-youtube-play',
				)
			),
			'calibrefx-icons' => array(
				'type' => 'icons',
				'title' => 'Calibrefx Icons',
				'values' => array(
					'cfxicon-calibreworks' => 'cfxicon-calibreworks',
					'cfxicon-calibrefx' => 'cfxicon-calibrefx',
					'cfxicon-home' => 'cfxicon-home',
					'cfxicon-image' => 'cfxicon-image',
					'cfxicon-camera' => 'cfxicon-camera',
					'cfxicon-play' => 'cfxicon-play',
					'cfxicon-enlarge' => 'cfxicon-enlarge',
					'cfxicon-shrink' => 'cfxicon-shrink',
					'cfxicon-lock' => 'cfxicon-lock',
					'cfxicon-unlocked' => 'cfxicon-unlocked',
					'cfxicon-share2' => 'cfxicon-share2',
					'cfxicon-bookmark' => 'cfxicon-bookmark',
					'cfxicon-star-empty' => 'cfxicon-star-empty',
					'cfxicon-star-full' => 'cfxicon-star-full',
					'cfxicon-heart' => 'cfxicon-heart',
					'cfxicon-heart-broken' => 'cfxicon-heart-broken',
					'cfxicon-cross' => 'cfxicon-cross',
					'cfxicon-checkmark' => 'cfxicon-checkmark',
					'cfxicon-facebook2' => 'cfxicon-facebook2',
					'cfxicon-twitter2' => 'cfxicon-twitter2',
					'cfxicon-feed3' => 'cfxicon-feed3',
					'cfxicon-youtube' => 'cfxicon-youtube',
					'cfxicon-youtube3' => 'cfxicon-youtube3',
					'cfxicon-vimeo2' => 'cfxicon-vimeo2',
					'cfxicon-flickr3' => 'cfxicon-flickr3',
					'cfxicon-picassa2' => 'cfxicon-picassa2',
					'cfxicon-dropbox' => 'cfxicon-dropbox',
					'cfxicon-github' => 'cfxicon-github',
					'cfxicon-github4' => 'cfxicon-github4',
					'cfxicon-wordpress2' => 'cfxicon-wordpress2',
					'cfxicon-tumblr2' => 'cfxicon-tumblr2',
					'cfxicon-android' => 'cfxicon-android',
					'cfxicon-linkedin' => 'cfxicon-linkedin',
					'cfxicon-pinterest2' => 'cfxicon-pinterest2',
					'cfxicon-paypal2' => 'cfxicon-paypal2',
				)
			),
			'genericons' => array(
				'type' => 'icons',
				'title' => 'Genericons',
				'values' => array(
					'genericon genericon-404' => 'genericon genericon-404',
					'genericon genericon-activity' => 'genericon genericon-activity',
					'genericon genericon-anchor' => 'genericon genericon-anchor',
					'genericon genericon-aside' => 'genericon genericon-aside',
					'genericon genericon-attachment' => 'genericon genericon-attachment',
					'genericon genericon-audio' => 'genericon genericon-audio',
					'genericon genericon-bold' => 'genericon genericon-bold',
					'genericon genericon-book' => 'genericon genericon-book',
					'genericon genericon-bug' => 'genericon genericon-bug',
					'genericon genericon-cart' => 'genericon genericon-cart',
					'genericon genericon-category' => 'genericon genericon-category',
					'genericon genericon-chat' => 'genericon genericon-chat',
					'genericon genericon-checkmark' => 'genericon genericon-checkmark',
					'genericon genericon-close' => 'genericon genericon-close',
					'genericon genericon-close-alt' => 'genericon genericon-close-alt',
					'genericon genericon-cloud' => 'genericon genericon-cloud',
					'genericon genericon-cloud-download' => 'genericon genericon-cloud-download',
					'genericon genericon-code' => 'genericon genericon-code',
					'genericon genericon-codepen' => 'genericon genericon-codepen',
					'genericon genericon-cog' => 'genericon genericon-cog',
					'genericon genericon-collapse' => 'genericon genericon-collapse',
					'genericon genericon-comment' => 'genericon genericon-comment',
					'genericon genericon-day' => 'genericon genericon-day',
					'genericon genericon-digg' => 'genericon genericon-digg',
					'genericon genericon-document' => 'genericon genericon-document',
					'genericon genericon-dot' => 'genericon genericon-dot',
					'genericon genericon-downarrow' => 'genericon genericon-downarrow',
					'genericon genericon-download' => 'genericon genericon-download',
					'genericon genericon-draggable' => 'genericon genericon-draggable',
					'genericon genericon-dribbble' => 'genericon genericon-dribbble',
					'genericon genericon-dropbox' => 'genericon genericon-dropbox',
					'genericon genericon-dropdown' => 'genericon genericon-dropdown',
					'genericon genericon-dropdown-left' => 'genericon genericon-dropdown-left',
					'genericon genericon-edit' => 'genericon genericon-edit',
					'genericon genericon-ellipsis' => 'genericon genericon-ellipsis',
					'genericon genericon-expand' => 'genericon genericon-expand',
					'genericon genericon-external' => 'genericon genericon-external',
					'genericon genericon-facebook' => 'genericon genericon-facebook',
					'genericon genericon-facebook-alt' => 'genericon genericon-facebook-alt',
					'genericon genericon-fastforward' => 'genericon genericon-fastforward',
					'genericon genericon-feed' => 'genericon genericon-feed',
					'genericon genericon-flag' => 'genericon genericon-flag',
					'genericon genericon-flickr' => 'genericon genericon-flickr',
					'genericon genericon-foursquare' => 'genericon genericon-foursquare',
					'genericon genericon-fullscreen' => 'genericon genericon-fullscreen',
					'genericon genericon-gallery' => 'genericon genericon-gallery',
					'genericon genericon-github' => 'genericon genericon-github',
					'genericon genericon-googleplus' => 'genericon genericon-googleplus',
					'genericon genericon-googleplus-alt' => 'genericon genericon-googleplus-alt',
					'genericon genericon-handset' => 'genericon genericon-handset',
					'genericon genericon-heart' => 'genericon genericon-heart',
					'genericon genericon-help' => 'genericon genericon-help',
					'genericon genericon-hide' => 'genericon genericon-hide',
					'genericon genericon-hierarchy' => 'genericon genericon-hierarchy',
					'genericon genericon-home' => 'genericon genericon-home',
					'genericon genericon-image' => 'genericon genericon-image',
					'genericon genericon-info' => 'genericon genericon-info',
					'genericon genericon-instagram' => 'genericon genericon-instagram',
					'genericon genericon-italic' => 'genericon genericon-italic',
					'genericon genericon-key' => 'genericon genericon-key',
					'genericon genericon-leftarrow' => 'genericon genericon-leftarrow',
					'genericon genericon-link' => 'genericon genericon-link',
					'genericon genericon-linkedin' => 'genericon genericon-linkedin',
					'genericon genericon-linkedin-alt' => 'genericon genericon-linkedin-alt',
					'genericon genericon-location' => 'genericon genericon-location',
					'genericon genericon-lock' => 'genericon genericon-lock',
					'genericon genericon-mail' => 'genericon genericon-mail',
					'genericon genericon-maximize' => 'genericon genericon-maximize',
					'genericon genericon-menu' => 'genericon genericon-menu',
					'genericon genericon-microphone' => 'genericon genericon-microphone',
					'genericon genericon-minimize' => 'genericon genericon-minimize',
					'genericon genericon-minus' => 'genericon genericon-minus',
					'genericon genericon-month' => 'genericon genericon-month',
					'genericon genericon-move' => 'genericon genericon-move',
					'genericon genericon-next' => 'genericon genericon-next',
					'genericon genericon-notice' => 'genericon genericon-notice',
					'genericon genericon-paintbrush' => 'genericon genericon-paintbrush',
					'genericon genericon-path' => 'genericon genericon-path',
					'genericon genericon-pause' => 'genericon genericon-pause',
					'genericon genericon-phone' => 'genericon genericon-phone',
					'genericon genericon-picture' => 'genericon genericon-picture',
					'genericon genericon-pinned' => 'genericon genericon-pinned',
					'genericon genericon-pinterest' => 'genericon genericon-pinterest',
					'genericon genericon-pinterest-alt' => 'genericon genericon-pinterest-alt',
					'genericon genericon-play' => 'genericon genericon-play',
					'genericon genericon-plugin' => 'genericon genericon-plugin',
					'genericon genericon-plus' => 'genericon genericon-plus',
					'genericon genericon-pocket' => 'genericon genericon-pocket',
					'genericon genericon-polldaddy' => 'genericon genericon-polldaddy',
					'genericon genericon-portfolio' => 'genericon genericon-portfolio',
					'genericon genericon-previous' => 'genericon genericon-previous',
					'genericon genericon-print' => 'genericon genericon-print',
					'genericon genericon-quote' => 'genericon genericon-quote',
					'genericon genericon-rating-empty' => 'genericon genericon-rating-empty',
					'genericon genericon-rating-full' => 'genericon genericon-rating-full',
					'genericon genericon-rating-half' => 'genericon genericon-rating-half',
					'genericon genericon-reddit' => 'genericon genericon-reddit',
					'genericon genericon-refresh' => 'genericon genericon-refresh',
					'genericon genericon-reply' => 'genericon genericon-reply',
					'genericon genericon-reply-alt' => 'genericon genericon-reply-alt',
					'genericon genericon-reply-single' => 'genericon genericon-reply-single',
					'genericon genericon-rewind' => 'genericon genericon-rewind',
					'genericon genericon-rightarrow' => 'genericon genericon-rightarrow',
					'genericon genericon-search' => 'genericon genericon-search',
					'genericon genericon-send-to-phone' => 'genericon genericon-send-to-phone',
					'genericon genericon-send-to-tablet' => 'genericon genericon-send-to-tablet',
					'genericon genericon-share' => 'genericon genericon-share',
					'genericon genericon-show' => 'genericon genericon-show',
					'genericon genericon-shuffle' => 'genericon genericon-shuffle',
					'genericon genericon-sitemap' => 'genericon genericon-sitemap',
					'genericon genericon-skip-ahead' => 'genericon genericon-skip-ahead',
					'genericon genericon-skip-back' => 'genericon genericon-skip-back',
					'genericon genericon-skype' => 'genericon genericon-skype',
					'genericon genericon-spam' => 'genericon genericon-spam',
					'genericon genericon-spotify' => 'genericon genericon-spotify',
					'genericon genericon-standard' => 'genericon genericon-standard',
					'genericon genericon-star' => 'genericon genericon-star',
					'genericon genericon-status' => 'genericon genericon-status',
					'genericon genericon-stop' => 'genericon genericon-stop',
					'genericon genericon-stumbleupon' => 'genericon genericon-stumbleupon',
					'genericon genericon-subscribe' => 'genericon genericon-subscribe',
					'genericon genericon-subscribed' => 'genericon genericon-subscribed',
					'genericon genericon-summary' => 'genericon genericon-summary',
					'genericon genericon-tablet' => 'genericon genericon-tablet',
					'genericon genericon-tag' => 'genericon genericon-tag',
					'genericon genericon-time' => 'genericon genericon-time',
					'genericon genericon-top' => 'genericon genericon-top',
					'genericon genericon-trash' => 'genericon genericon-trash',
					'genericon genericon-tumblr' => 'genericon genericon-tumblr',
					'genericon genericon-twitch' => 'genericon genericon-twitch',
					'genericon genericon-twitter' => 'genericon genericon-twitter',
					'genericon genericon-unapprove' => 'genericon genericon-unapprove',
					'genericon genericon-unsubscribe' => 'genericon genericon-unsubscribe',
					'genericon genericon-unzoom' => 'genericon genericon-unzoom',
					'genericon genericon-uparrow' => 'genericon genericon-uparrow',
					'genericon genericon-user' => 'genericon genericon-user',
					'genericon genericon-video' => 'genericon genericon-video',
					'genericon genericon-videocamera' => 'genericon genericon-videocamera',
					'genericon genericon-vimeo' => 'genericon genericon-vimeo',
					'genericon genericon-warning' => 'genericon genericon-warning',
					'genericon genericon-website' => 'genericon genericon-website',
					'genericon genericon-week' => 'genericon genericon-week',
					'genericon genericon-wordpress' => 'genericon genericon-wordpress',
					'genericon genericon-xpost' => 'genericon genericon-xpost',
					'genericon genericon-youtube' => 'genericon genericon-youtube',
					'genericon genericon-zoom' => 'genericon genericon-zoom',

				)
			),
		)
	);

	//Google Map
	$cfx_shortcodes['google_map'] = array(
		'type'  => 'regular',
		'title' => __( 'Google Map', 'calibrefx' ),
		'attr'  => array(
			'image' => array( 'type' => 'custom', 'title'  => __( 'Icon Marker', 'calibrefx' ) ),
			'latitude' => array(
				'type'  => 'text',
				'desc'  => 'Latitude of your coordinate. Only number e.g. <b>"-6.286902".</b>',
				'title' => __( 'Latitude', 'calibrefx' )
			),
			'longitude' => array(
				'type'  => 'text',
				'desc'  => 'Longitude of your coordinate. Only number e.g. <b>"106.823506".</b>',
				'title' => __( 'Longitude', 'calibrefx' )
			),
			'zoom' => array(
				'type'  => 'text',
				'desc'  => 'Map zoom. Only number 1 - 16',
				'title' => __( 'Zoom', 'calibrefx' )
			),
			'height' => array(
				'type'  => 'text',
				'desc'  => 'If you would like to control the specifc height of your map in pixels, enter it here. <b>Don\'t enter "px", just the numnber e.g. "320".</b>. Default "320"',
				'title' => __( 'Height', 'calibrefx' )
			),
			'title' => array(
				'type'  => 'text',
				'title' => __( 'Title', 'calibrefx' )
			),
			'address' => array(
				'type'  => 'textarea',
				'title' => __( 'Address Line', 'calibrefx' )
			),
		)
	);

	//Google Map
	$cfx_shortcodes['button'] = array(
		'type'  => 'regular',
		'title' => __( 'Button', 'calibrefx' ),
		'attr'  => array(
			'text' => array(
				'type'  => 'text',
				'title' => __( 'Text', 'calibrefx' )
			),
			'url' => array(
				'type'  => 'text',
				'title' => __( 'URL', 'calibrefx' )
			),
			'target' => array(
				'type'  => 'select',
				'title' => __( 'Link Target', 'calibrefx' ),
				'values' => array(
				     '_blank' => '_blank',
			  		 '_self' => '_self',
			  		 '_parent' => '_parent',
			  		 '_top' => '_top',
				)
			),
			'class' => array(
				'type'  => 'text',
				'title' => __( 'CSS Class', 'calibrefx' )
			),
			'text_color' => array(
				'type' => 'custom',
				'title'  => __( 'Text Color', 'calibrefx' )
			),
			'color' => array(
				'type' => 'custom',
				'title'  => __( 'Background Color', 'calibrefx' )
			),
			'shadow_color' => array(
				'type' => 'custom',
				'title'  => __( 'Shadow Color', 'calibrefx' )
			),
		)
	);

	do_action( 'calibrefx_shortcodes' );
}

add_action( 'admin_init', 'calibrefx_init_shortcodes' );
