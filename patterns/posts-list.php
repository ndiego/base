<?php
/**
 * Title: List of posts
 * Slug: base/posts-list
 * Categories: posts, featured
 * Block Types: core/query-loop
 * Viewport width: 700
 *
 * @package Base
 */

?>

<!-- wp:group {"metadata":{"name":"Main Query"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--10)"><!-- wp:query {"queryId":7,"query":{"perPage":10,"pages":"0","offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default","columnCount":1}} -->
<!-- wp:group {"metadata":{"name":"Hover Card (Query)"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"},"dimensions":{"minHeight":"100%"},"border":{"width":"1px","color":"color-mix(in srgb, var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtheme-1) 80%, var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtheme-6) 20%)","radius":"8px"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top","justifyContent":"stretch"},"linkDestination":"post"} -->
<div class="wp-block-group has-border-color" style="border-color:color-mix(in srgb, var(--wp--preset--color--theme-1) 80%, var(--wp--preset--color--theme-6) 20%);border-width:1px;border-radius:8px;min-height:100%;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"metadata":{"name":"Post Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-5"},":hover":{"color":{"text":"var:preset|color|theme-6"}}}}},"fontSize":"small"} /-->

<!-- wp:post-date {"format":"M j, Y","className":"no-flex-shrink","textColor":"primary-light","fontSize":"x-small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.4"}},"fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"","excerptLength":50,"fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":" "} /-->

<!-- wp:query-pagination-numbers {"fontSize":"small"} /-->

<!-- wp:query-pagination-next {"label":" "} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">No posts could be found.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Categories</h2>
<!-- /wp:heading -->

<!-- wp:categories {"className":"is-style-outline","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} /-->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
