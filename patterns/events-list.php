<?php
/**
 * Title: Events list
 * Slug: base/events-list
 * Categories: events, featured
 * Block Types: core/query-loop
 * Viewport width: 700
 *
 * @package Base
 */

?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":0,"query":{"perPage":20,"pages":0,"offset":0,"postType":"event","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"fontSize":"small"} /-->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"event_date"}}}},"className":"flex-shrink-0","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|theme-5"}}}},"textColor":"theme-5","fontSize":"small"} -->
<p class="flex-shrink-0 has-theme-5-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"10px"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group has-small-font-size" style="font-style:normal;font-weight:400"><!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"event_host"}}}},"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-5"},":hover":{"color":{"text":"var:preset|color|theme-6"}}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"theme-5","fontSize":"small"} -->
<p class="has-theme-5-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-4"}}}},"textColor":"theme-4"} -->
<p class="has-theme-4-color has-text-color has-link-color">•</p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"event_category","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-5"},":hover":{"color":{"text":"var:preset|color|theme-6"}}}}},"textColor":"theme-5","fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":" "} /-->

<!-- wp:query-pagination-numbers {"fontSize":"small"} /-->

<!-- wp:query-pagination-next {"label":" "} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p>No results could be found.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->