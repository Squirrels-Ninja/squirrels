<?php
/**
 * Title: Product Grid
 * Slug: squirrels/product-grid
 * Categories: squirrels-woocommerce
 * Keywords: products, shop, woocommerce, grid, featured
 * Description: A featured product grid showing the latest products with a link to the full shop.
 * Requires Plugins: woocommerce
 */
?>

<!-- wp:group {"align":"full","className":"squirrels-pattern squirrels-product-grid","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-pattern squirrels-product-grid">

	<!-- wp:group {"className":"squirrels-product-grid__header","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group squirrels-product-grid__header">
		<!-- wp:heading {"level":2} -->
		<h2>Featured products</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p><a href="/shop/">View all products →</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{},"forcePageReload":false,"filterable":false,"className":"squirrels-product-grid__collection"} -->
	<div class="wp-block-woocommerce-product-collection squirrels-product-grid__collection">

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
