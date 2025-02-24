<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package church-fse
 * @since 1.0.0
 *
 * slug: page-title-1
 * title: Page Title
 * categories: ChurchFSE
 * keywords: page title
 */

use ChurchFSE\Assets_Manager;

return array(
	'title'      => __( 'Page Title', 'church-fse' ),
	'categories' => array( 'church-fse', 'posts' ),
	'keywords'   => array( 'page title' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"8px"},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background has-link-color" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide has-text-align-center">Title goes here</h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->
        ',
);
