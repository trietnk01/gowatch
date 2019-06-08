<?php
get_header();
$productModel=$zController->getModel("/frontend","ProductModel");
/* start set the_query */
$the_query_category=null;

$args = $wp_query->query;
$args['orderby']='id';
$args['order']='DESC';
$s="";
if(isset($_POST["s"])){
    $s=trim($_POST["s"]);
}
if(!empty(@$s)){
    $args["s"] =@$s;
}
$wp_query->query($args);
$the_query_category=$wp_query;
/* end set the_query */
/* start setup pagination */
$totalItemsPerPage=9;
$pageRange=3;
$currentPage=1;
if(!empty(@$_POST["filter_page"]))          {
    $currentPage=@$_POST["filter_page"];
}
$productModel->setWpQuery($the_query_category);
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
<?php include get_template_directory()."/block/block-slide-trang-con.php"; ?>
<div class="box-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php include get_template_directory()."/block/block-breadcrumb.php"; ?>
            </div>
        </div>
    </div>
</div>
<div class="container box-category">
    <div class="row">
        <div class="col">
            <h2 class="khuyen-mai-theo-ngay"><?php single_cat_title( '', true ); ?></h2>
            <div class="box-news-list">
                <?php
                for ($i=0; $i < 10; $i++) {
                    if($i%2==0){
                        ?>
                        <div class="box-news-item">
                            <div class="box-news-item-1">
                                <div class="box-item-news-img">
                                    <a href="<?php echo site_url( 'chi-tiet-bai-viet', null ); ?>">
                                        <div style="background-image: url('<?php echo wp_upload_dir( null, true, false )["url"]."/news-1.jpg"; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (800/558));"></div>
                                        <div class="panel-top-to-bottom"></div>
                                        <div class="panel-bottom-to-top"></div>
                                        <div class="panel-link">
                                            <div class="panel-circle">
                                                <i class="fas fa-link"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="box-news-item-2">
                                <div class="box-news-information">
                                    <h3 class="box-news-information-title"><a href="javascript:void(0);"><?php echo wp_trim_words( "Những mẫu đồng hồ Michael Kors chính hãng được “tín đồ” sùng bái nhất",55,"[...]" ); ?></a></h3>
                                    <div class="box-news-information-excerpt"><?php echo wp_trim_words( "Michael Kors là một trong những thương hiệu đồng hồ được yêu thích nhất hiện nay và được giới trẻ săn đón rất nhiều. Mẫu đồng hồ Michael Kors chính hãng luôn nhận được sự chào đón nồng hậu từ", 55, null ); ?></div>
                                    <div class="box-news-information-date-post">18/08/2018</div>
                                    <div class="news-readmore2 margin-top-10">
                                        <a href="javascript:void(0);">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="clr"></div>
                        </div>
                        <?php
                    }else{
                        ?>
                        <div class="box-news-item">
                            <div class="box-news-item-2">
                                <div class="box-news-information">
                                    <h3 class="box-news-information-title"><a href="javascript:void(0);"><?php echo wp_trim_words( "Những mẫu đồng hồ Michael Kors chính hãng được “tín đồ” sùng bái nhất",55,"[...]" ); ?></a></h3>
                                    <div class="box-news-information-excerpt"><?php echo wp_trim_words( "Michael Kors là một trong những thương hiệu đồng hồ được yêu thích nhất hiện nay và được giới trẻ săn đón rất nhiều. Mẫu đồng hồ Michael Kors chính hãng luôn nhận được sự chào đón nồng hậu từ", 55, null ); ?></div>
                                    <div class="box-news-information-date-post">18/08/2018</div>
                                    <div class="news-readmore2 margin-top-10">
                                        <a href="javascript:void(0);">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-news-item-1">
                                <div class="box-item-news-img">
                                    <a href="<?php echo site_url( 'chi-tiet-bai-viet', null ); ?>">
                                        <div style="background-image: url('<?php echo wp_upload_dir( null, true, false )["url"]."/news-1.jpg"; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (800/558));"></div>
                                        <div class="panel-top-to-bottom"></div>
                                        <div class="panel-bottom-to-top"></div>
                                        <div class="panel-link">
                                            <div class="panel-circle">
                                                <i class="fas fa-link"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="clr"></div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>