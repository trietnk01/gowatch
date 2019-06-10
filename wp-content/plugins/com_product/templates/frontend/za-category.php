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
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="khuyen-mai-theo-ngay">Đồng hồ nam</h2>
                <div class="category-product-excerpt">
                    <p>Từ lâu, đồng hồ nam là phụ kiện không thể thiếu trong bộ sưu tập thời trang của các quý ông. Một chiếc đồng hồ chính hãng nam kết hợp với các phong cách thời trang hiện đại mang đến sự lịch lãm, sang trọng và đôi khi còn khẳng định địa vị xã hội dành cho phái mạnh. Đặc biệt với những người thành đạt, một chiếc đồng hồ thời trang nam là phụ kiện không thể nào thiếu trong tủ đồ.</p>

<p>Chúng tôi, Gowatch, hân hạnh được phục vụ quý khách hàng những mẫu đồng hồ thời trang nam được xách tay chính hãng từ những thương hiệu hàng đầu trên thế giới. Bằng những dịch vụ hậu mãi tốt nhất, quý khách hàng sẽ yên tâm và hài lòng khi mua đồng hồ nam chính hãng tại Gowatch.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="box-product-trade">
                    <h3 class="box-product-trade-h3">Thương hiệu</h3>
                    <ul class="box-product-trade-lst">
                        <?php
                        for ($i=0; $i < 10; $i++) {
                            ?>
                            <li><a href="javascript:void(0);"><span class="box-product-trade-label">Michael Kors</span><span class="box-product-trade-count">234</span></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9"></div>
        </div>
    </div>
</div>
<?php
get_footer();
?>