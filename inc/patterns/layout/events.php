<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package church-fse
 * @since 1.0.0
 *
 * slug: events
 * title: Events
 * categories: ChurchFSE
 * keywords: events, features
 */

use ChurchFSE\Assets_Manager;

$church_fse_img02 = Assets_Manager::get_image_url( 'church-fse-2.webp' );
$church_fse_img04 = Assets_Manager::get_image_url( 'church-fse-4.webp' );
$church_fse_img06 = Assets_Manager::get_image_url( 'church-fse-6.webp' );

return array(
	'title'      => __( 'Events', 'church-fse' ),
	'categories' => array( 'church-fse' ),
	'keywords'   => array( 'events', 'features' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"0px"}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"}},"border":{"radius":"740px"}}} -->
<div class="wp-block-columns" style="border-radius:740px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":299,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( $church_fse_img04 ) . '" alt="" class="wp-image-299" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Title goes here</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase">event Date</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase">event Location</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Gloria in excelsis Deo, et pax hominibus bonae voluntatis. Benediximus te, adoramus te, glorificamus nomen tuum in saecula saeculorum. Amen.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">Button text</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"ti-accent","className":"is-style-outline","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-ti-accent-color has-text-color has-link-color wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">Button text</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"0px"}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"}},"border":{"radius":"740px"}}} -->
<div class="wp-block-columns" style="border-radius:740px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":297,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( $church_fse_img02 ) . '" alt="" class="wp-image-297" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Title goes here</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase">event Date</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase">event Location</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Gloria in excelsis Deo, et pax hominibus bonae voluntatis. Benediximus te, adoramus te, glorificamus nomen tuum in saecula saeculorum. Amen.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">Button text</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"ti-accent","className":"is-style-outline","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-ti-accent-color has-text-color has-link-color wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">Button text</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"0px"}},"backgroundColor":"ti-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-background-color has-background" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"}},"border":{"radius":"740px"}}} -->
<div class="wp-block-columns" style="border-radius:740px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":301,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( $church_fse_img06 ) . '" alt="" class="wp-image-301" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Title goes here</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase">event Date</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase">event Location</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Gloria in excelsis Deo, et pax hominibus bonae voluntatis. Benediximus te, adoramus te, glorificamus nomen tuum in saecula saeculorum. Amen.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">Button text</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"ti-accent","className":"is-style-outline","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-ti-accent-color has-text-color has-link-color wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">Button text</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
        ',
);
