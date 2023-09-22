<?php
/**
 * Footer with text, title, and logo
 */
return array(
	'title'      => __( 'Footer with text, title, and logo', 'seges_one_fse' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)","bottom":"6rem"}}},"backgroundColor":"secondary","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull has-secondary-background-color has-background" style="padding-top:var(--wp--custom--spacing--large, 8rem);padding-bottom:6rem"><!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33%"} -->
					<div class="wp-block-column" style="flex-basis:33%"><!-- wp:paragraph -->
					<p>' . esc_html__( 'About us', 'seges_one_fse' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"fontSize":"small"} -->
					<p class="has-small-font-size">' . esc_html__( 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.', 'seges_one_fse' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":180} -->
					<div style="height:180px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:site-title {"level":0} /--></div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"bottom"} -->
					<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:site-logo {"align":"right","width":60} /--></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:group -->',
);
