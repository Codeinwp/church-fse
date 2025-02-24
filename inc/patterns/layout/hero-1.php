<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package church-fse
 * @since 1.0.0
 *
 * slug: hero-1
 * title: Hero Section
 * categories: ChurchFSE
 * keywords: hero, cover
 */

use ChurchFSE\Assets_Manager;

$church_fse_img03 = Assets_Manager::get_image_url( 'church-fse-3.webp' );

return array(
	'title'      => __( 'Hero Section', 'church-fse' ),
	'categories' => array( 'church-fse' ),
	'keywords'   => array( 'hero', 'cover' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"' . esc_url( $church_fse_img03 ) . '","id":298,"hasParallax":true,"dimRatio":90,"overlayColor":"ti-bg-inv","isUserOverlayColor":true,"minHeight":75,"minHeightUnit":"vh","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull has-parallax" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:75vh"><span aria-hidden="true" class="wp-block-cover__background has-ti-bg-inv-background-color has-background-dim-90 has-background-dim"></span><div class="wp-block-cover__image-background wp-image-298 has-parallax" style="background-position:50% 50%;background-image:url(' . esc_url( $church_fse_img03 ) . ')"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-fg-alt-color has-text-color"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><strong>Sanctus Ipsum</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
<h1 class="wp-block-heading has-text-align-center has-huge-font-size">Gloria in excelsis Deo, et pax hominibus bonae voluntatis.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Gloria in excelsis Deo, et pax hominibus bonae voluntatis. Benediximus te, adoramus te, glorificamus nomen tuum in saecula saeculorum. Amen.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"ti-accent"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-ti-accent-background-color has-background wp-element-button">Button text</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
        ',
);
