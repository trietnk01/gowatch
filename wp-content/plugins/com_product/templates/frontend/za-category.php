<?php
get_header();
$productModel=$zController->getModel("/frontend","ProductModel");
/* start set the_query */
$the_query_product=null;

$args = $wp_query->query;
$args['orderby']='id';
$args['order']='DESC';
$wp_query->query($args);
$the_query_product=$wp_query;

/* end set the_query */
/* start setup pagination */
$totalItemsPerPage=8;
$pageRange=3;
$currentPage=1;
if(!empty(@$_POST["filter_page"]))          {
    $currentPage=@$_POST["filter_page"];
}
$productModel->setWpQuery($the_query_product);
$productModel->setPerpage($totalItemsPerPage);
$productModel->prepare_items();
$totalItems= $productModel->getTotalItems();
$arrPagination=array(
    "totalItems"=>$totalItems,
    "totalItemsPerPage"=>$totalItemsPerPage,
    "pageRange"=>$pageRange,
    "currentPage"=>$currentPage
);
$pagination=$zController->getPagination("Pagination",$arrPagination);
/* end setup pagination */
?>
<h1 style="display: none;"><?php echo get_bloginfo( 'name', 'raw' ); ?></h1>
<div class="box-category-product">
    <h2 class="khuyen-mai-theo-ngay">Đồng hồ nam</h2>
</div>
<?php
get_footer();
?>