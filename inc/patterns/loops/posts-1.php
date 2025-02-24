<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package church-fse
 * @since 1.0.0
 *
 * slug: posts-1
 * title: Posts 1
 * categories: ChurchFSE
 * keywords: posts, loop, blog
 */

return array(
	'title'      => __( 'Posts', 'church-fse' ),
	'categories' => array( 'church-fse', 'posts' ),
	'keywords'   => array( 'posts', 'loop', 'blog' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|80","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}},"textColor":"ti-accent","fontSize":"small"} -->
<p class="has-text-align-center has-ti-accent-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><strong>Sanctus Ipsum</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Gloria in excelsis Deo, et pax hominibus bonae voluntatis.</h2>
<!-- /wp:heading -->

<!-- wp:separator {"align":"center","backgroundColor":"ti-accent"} -->
<hr class="wp-block-separator aligncenter has-text-color has-ti-accent-color has-alpha-channel-opacity has-ti-accent-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":4,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"constrained","contentSize":null}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"height":"300px","style":{"color":[],"border":{"radius":"8px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-date {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"small"} /-->

<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

<!-- wp:post-excerpt {"moreText":"Read more →","style":{"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}}} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"32px"} -->
<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template -->

<!-- wp:query-no-results {"align":"wide"} -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when the query returns no results.","backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt"} -->
<p class="has-text-align-center has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background">Unfortunately no posts were found</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
        ',
);
