<?php
/**
 * Title: New Arrivals
 * Slug: squirrels/new-arrivals
 * Categories: squirrels-woocommerce
 * Keywords: new arrivals, new, latest, recent, products, woocommerce
 * Description: Four newest products ordered by date with a link to the full shop.
 * Requires Plugins: woocommerce
 */
?>

<!-- wp:group {"align":"full","className":"squirrels-pattern squirrels-new-arrivals","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-pattern squirrels-new-arrivals">

	<!-- wp:group {"className":"squirrels-product-grid__header","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group squirrels-product-grid__header">
		<!-- wp:heading {"level":2} -->
		<h2>New Arrivals</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p><a href="/shop/?orderby=date">See all →</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:woocommerce/product-collection {"queryId":2,"query":{"perPage":4,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"filterable":false,"className":"squirrels-product-grid__collection squirrels-new-arrivals__collection"} -->
	<div class="wp-block-woocommerce-product-collection squirrels-product-grid__collection squirrels-new-arrivals__collection">

		<!-- wp:woocommerce/product-template -->

			<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->

			<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

			<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center"} /-->

			<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true} /-->

		<!-- /wp:woocommerce/product-template -->

	</div>
	<!-- /wp:woocommerce/product-collection -->

</div>
<!-- /wp:group -->
