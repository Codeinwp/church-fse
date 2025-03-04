<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package church-fse
 * @since 1.0.0
 *
 * slug: content-1
 * title: Content
 * categories: ChurchFSE
 * keywords: content, columns
 */

use ChurchFSE\Assets_Manager;

$church_fse_img06 = Assets_Manager::get_image_url( 'church-fse-6.webp' );

return array(
	'title'      => __( 'Content', 'church-fse' ),
	'categories' => array( 'church-fse' ),
	'keywords'   => array( 'content', 'columns' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:64px;padding-bottom:64px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}},"textColor":"ti-accent","fontSize":"small"} -->
<p class="has-text-align-left has-ti-accent-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><strong>Sanctus Ipsum</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Pastor Mark Reynolds</h2>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"ti-accent"} -->
<hr class="wp-block-separator has-text-color has-ti-accent-color has-alpha-channel-opacity has-ti-accent-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Verbum Dei lucet in tenebris, et tenebrae eam non comprehenderunt. Dominus pastor meus est, nihil mihi deerit; in pascuis virentibus me collocavit, ad aquas quietis me duxit.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":301,"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( $church_fse_img06 ) . '" alt="" class="wp-image-301" style="border-radius:8px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
        ',
);
