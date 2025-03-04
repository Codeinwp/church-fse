<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package church-fse
 * @since 1.0.0
 *
 * slug: content-2
 * title: Content 2
 * categories: ChurchFSE
 * keywords: content, columns, cover
 */

use ChurchFSE\Assets_Manager;

$church_fse_img03 = Assets_Manager::get_image_url( 'church-fse-3.webp' );
$church_fse_img04 = Assets_Manager::get_image_url( 'church-fse-4.webp' );
$church_fse_img05 = Assets_Manager::get_image_url( 'church-fse-5.webp' );

return array(
	'title'      => __( 'Content 2', 'church-fse' ),
	'categories' => array( 'church-fse' ),
	'keywords'   => array( 'content', 'columns', 'cover' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"64px","margin":{"top":"0px","bottom":"0px"}},"background":{"backgroundImage":{"url":"' . esc_url( $church_fse_img05 ) . '","id":300,"source":"file","title":"church-fse-5"},"backgroundSize":"cover","backgroundPosition":"51% 90%"}},"backgroundColor":"ti-bg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-bg-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|ti-accent"}}}},"textColor":"ti-accent","fontSize":"small"} -->
<p class="has-ti-accent-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase"><strong><strong>Sanctus Ipsum</strong></strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">The Power of Faith and Worship</h2>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"ti-accent"} -->
<hr class="wp-block-separator has-text-color has-ti-accent-color has-alpha-channel-opacity has-ti-accent-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>Verbum Dei lucet in tenebris, et tenebrae eam non comprehenderunt. Dominus pastor meus est, nihil mihi deerit; in pascuis virentibus me collocavit, ad aquas quietis me duxit.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":298,"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"size-full","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( $church_fse_img03 ) . '" alt="" class="wp-image-298" style="border-radius:8px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":299,"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"size-full","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="' . esc_url( $church_fse_img04 ) . '" alt="" class="wp-image-299" style="border-radius:8px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
        ',
);
