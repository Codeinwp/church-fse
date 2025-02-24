<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package church-fse
 * @since 1.0.0
 *
 * slug: verse
 * title: Verse
 * categories: ChurchFSE
 * keywords: verse, cta, quote
 */

use ChurchFSE\Assets_Manager;

return array(
	'title'      => __( 'Verse', 'church-fse' ),
	'categories' => array( 'church-fse' ),
	'keywords'   => array( 'verse', 'cta', 'quote' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"40px"}},"backgroundColor":"ti-accent","textColor":"ti-fg-alt","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-accent-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><strong>Sanctus Ipsum</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><em>Gloria in excelsis Deo, et pax hominibus bonae voluntatis. Benediximus te, adoramus te, glorificamus nomen tuum in saecula saeculorum. Amen.</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><em>CITE</em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
        ',
);
