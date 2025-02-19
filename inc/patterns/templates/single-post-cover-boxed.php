<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package church-fse
 * @since 1.0.0
 *
 * slug: single-post-cover-boxed
 * title: Single Post 2 (Cover Boxed)
 * categories: ChurchFSE
 * keywords: single, post, cover, boxed
 */

use ChurchFSE\Assets_Manager;

return array(
	'title'      => __( 'Single Post 2 (Cover Boxed)', 'church-fse' ),
	'categories' => array( 'church-fse-layouts' ),
	'keywords'   => array( 'single', 'post', 'cover', 'boxed' ),
	'content'    => '
<!-- wp:group {"tagName":"main","metadata":{"categories":["neve-fse-layouts"],"patternName":"neve-fse/templates/single-post-cover-boxed","name":"Single Post 2 (Cover Boxed)"},"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}}} -->
<main class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":10,"overlayColor":"ti-bg-inv","isUserOverlayColor":true,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"64px","right":"24px","bottom":"64px","left":"24px"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:64px;padding-right:24px;padding-bottom:64px;padding-left:24px"><span aria-hidden="true" class="wp-block-cover__background has-ti-bg-inv-background-color has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"constrained","wideSize":"800px"}} -->
<div class="wp-block-group alignwide"><!-- wp:cover {"dimRatio":0,"minHeightUnit":"vh","isDark":false,"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-cover alignwide is-light" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt","layout":{"type":"constrained","wideSize":"800px"}} -->
<div class="wp-block-group has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:post-title {"textAlign":"center","level":1} /-->

<!-- wp:post-date {"textAlign":"center"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-content /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|40","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"8px"}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ti-bg-alt-background-color has-background" style="border-radius:8px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-comments-form /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
	',
);
