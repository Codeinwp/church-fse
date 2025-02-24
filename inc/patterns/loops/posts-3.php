<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package church-fse
 * @since 1.0.0
 *
 * slug: posts-3
 * title: Posts 3
 * categories: ChurchFSE
 * keywords: posts, loop, blog
 */

return array(
	'title'      => __( 'Posts 3', 'church-fse' ),
	'categories' => array( 'church-fse', 'posts' ),
	'keywords'   => array( 'posts', 'loop', 'blog' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}}} -->
<!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}},"border":{"bottom":{"width":"1px"}}}} -->
<div class="wp-block-columns" style="border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:post-date {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-large"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p>Unfortunately no related posts were found</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
        ',
);
