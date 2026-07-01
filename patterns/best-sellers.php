<?php
/**
 * Title: Best Sellers
 * Slug: squirrels/best-sellers
 * Categories: squirrels-woocommerce
 * Keywords: best sellers, popular, products, woocommerce, top
 * Description: Three best-selling products ordered by popularity with a link to the full shop.
 * Requires Plugins: woocommerce
 */
?>

<!-- wp:group {"align":"full","className":"squirrels-pattern squirrels-best-sellers","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-pattern squirrels-best-sellers">

	<!-- wp:group {"className":"squirrels-product-grid__header","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group squirrels-product-grid__header">
		<!-- wp:heading {"level":2} -->
		<h2>Best Sellers</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p><a href="/shop/?orderby=popularity">See all →</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"popularity","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"filterable":false,"className":"squirrels-product-grid__collection"} -->
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
