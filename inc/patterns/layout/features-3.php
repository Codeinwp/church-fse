<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package church-fse
 * @since 1.0.0
 *
 * slug: features-3
 * title: Features 3
 * categories: ChurchFSE
 * keywords: features, columns
 */

use ChurchFSE\Assets_Manager;

return array(
	'title'      => __( 'Features 3', 'church-fse' ),
	'categories' => array( 'church-fse' ),
	'keywords'   => array( 'features', 'columns' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"var:preset|spacing|70"},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}}},"backgroundColor":"ti-accent","textColor":"ti-fg-alt","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-accent-background-color has-text-color has-background has-link-color" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.34%"} -->
<div class="wp-block-column" style="flex-basis:33.34%"><!-- wp:group {"style":{"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:8px"><!-- wp:heading {"textAlign":"center","fontSize":"medium"} -->
<h2 class="wp-block-heading has-text-align-center has-medium-font-size">Title goes here</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Gloria in excelsis Deo, et pax hominibus bonae voluntatis.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.34%","style":{"spacing":{"blockGap":"16px"}}} -->
<div class="wp-block-column" style="flex-basis:33.34%"><!-- wp:group {"style":{"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:8px"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-center has-medium-font-size">Title goes here</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Gloria in excelsis Deo, et pax hominibus bonae voluntatis.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","style":{"spacing":{"blockGap":"16px"}}} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:8px"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-center has-medium-font-size">Title goes here</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Gloria in excelsis Deo, et pax hominibus bonae voluntatis.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
        ',
);
