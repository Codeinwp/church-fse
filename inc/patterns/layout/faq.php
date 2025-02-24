<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package church-fse
 * @since 1.0.0
 *
 * slug: faq
 * title: FAQ
 * categories: ChurchFSE
 * keywords: FAQs, frequently asked questions, toggle
 */

use ChurchFSE\Assets_Manager;

return array(
	'title'      => __( 'FAQ', 'church-fse' ),
	'categories' => array( 'church-fse' ),
	'keywords'   => array( 'FAQs', 'frequently asked questions', 'toggle' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}},"textColor":"ti-accent","fontSize":"small"} -->
<p class="has-text-align-left has-ti-accent-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><strong>Sanctus Ipsum</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Title goes here</h2>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"ti-accent"} -->
<hr class="wp-block-separator has-text-color has-ti-accent-color has-alpha-channel-opacity has-ti-accent-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Gloria in excelsis Deo, et pax hominibus bonae voluntatis. Benediximus te, adoramus te, glorificamus nomen tuum in saecula saeculorum. Amen.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:66%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"16px"}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-alt-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:details -->
<details class="wp-block-details"><summary>Title goes here</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>Gloria in excelsis Deo, et pax hominibus bonae voluntatis. Benediximus te, adoramus te, glorificamus nomen tuum in saecula saeculorum. Amen.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"16px"}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-alt-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:details -->
<details class="wp-block-details"><summary>Title goes here</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>Gloria in excelsis Deo, et pax hominibus bonae voluntatis. Benediximus te, adoramus te, glorificamus nomen tuum in saecula saeculorum. Amen.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"16px"}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-alt-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:details -->
<details class="wp-block-details"><summary>Title goes here</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>Gloria in excelsis Deo, et pax hominibus bonae voluntatis. Benediximus te, adoramus te, glorificamus nomen tuum in saecula saeculorum. Amen.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"16px"}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-alt-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:details -->
<details class="wp-block-details"><summary>Title goes here</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>Gloria in excelsis Deo, et pax hominibus bonae voluntatis. Benediximus te, adoramus te, glorificamus nomen tuum in saecula saeculorum. Amen.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
        ',
);
