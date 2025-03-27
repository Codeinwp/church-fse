<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package church-fse
 * @since 1.0.0
 *
 * slug: 404
 * title: 404
 * categories: ChurchFSE
 * keywords: content
 */

use ChurchFSE\Assets_Manager;

$church_fse_img04 = Assets_Manager::get_image_url( 'church-fse-4.webp' );

return array(
	'title'      => __( '404', 'church-fse' ),
	'categories' => array( 'church-fse' ),
	'keywords'   => array( 'content' ),
	'inserter'   => false,
	'content'    => '<!-- wp:cover {"url":"' . esc_url( $church_fse_img04 ) . '","id":299,"dimRatio":90,"overlayColor":"ti-bg-inv","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","tagName":"main","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<main class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-ti-bg-inv-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-299" alt="" src="' . esc_url( $church_fse_img04 ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"40px"}},"textColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-color has-text-color" style="padding-top:64px;padding-bottom:64px"><!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
<h2 class="wp-block-heading has-text-align-center has-huge-font-size">Page Not Found - But Hope is Never Lost!</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><em>"The Lord directs the steps of the godly. He delights in every detail of their lives"</em></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/">Back to Homepage</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></main>
<!-- /wp:cover -->',
);
