<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package church-fse
 * @since 1.0.0
 *
 * slug: CTA-2
 * title: Call to action 2
 * categories: ChurchFSE
 * keywords: donation, cta, cover
 */

use ChurchFSE\Assets_Manager;

$church_fse_img03 = Assets_Manager::get_image_url( 'church-fse-3.webp' );

return array(
	'title'      => __( 'Call to Action 2', 'church-fse' ),
	'categories' => array( 'church-fse' ),
	'keywords'   => array( 'donation', 'cta', 'cover' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"' . esc_url( $church_fse_img03 ) . '","id":298,"dimRatio":90,"overlayColor":"ti-bg-inv","isUserOverlayColor":true,"minHeight":500,"minHeightUnit":"px","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-ti-bg-inv-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-298" alt="" src="' . esc_url( $church_fse_img03 ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-fg-alt-color has-text-color"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><strong>Sanctus Ipsum</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
<h1 class="wp-block-heading has-text-align-center has-huge-font-size">A Community of Faith, Worship, and Unwavering Hope</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Gloria in excelsis Deo, et pax hominibus bonae voluntatis. Benediximus te, adoramus te, glorificamus nomen tuum in saecula saeculorum. Amen.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Make a Donation</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
        ',
);
