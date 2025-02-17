<?php
/**
 * Title: Hover Card (Query)
 * Slug: base/hover-card-query
 * Categories: query
 * Viewport Width: 700
 *
 * @package Base
 */

?>
<!-- wp:group {"metadata":{"name":"Hover Card (Query)"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"},"dimensions":{"minHeight":"100%"},"border":{"width":"1px","color":"var:preset|color|theme-4","radius":"8px"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top","justifyContent":"stretch"},"linkDestination":"post"} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--theme-4);border-width:1px;border-radius:8px;min-height:100%;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"metadata":{"name":"Post Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-5"},":hover":{"color":{"text":"var:preset|color|theme-6"}}}}},"fontSize":"small"} /-->

<!-- wp:post-date {"format":"M j, Y","className":"no-flex-shrink","textColor":"primary-light","fontSize":"x-small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.4"}},"fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"","excerptLength":50,"fontSize":"small"} /--></div>
<!-- /wp:group -->