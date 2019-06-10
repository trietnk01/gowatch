<?php
get_header();
$post_id=0;
$title="";
$excerpt="";
$permalink="";
$featured_img="";
$source_term_id=array();
$source_thumbnail=array();
$source_tinh_trang_con_hang=array();
$product_price=0;
$product_price_desc_percent=0;
$product_sale_price=0;
$product_price_tiet_kiem=0;
$content=null;
?>
<div class="box-category-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <?php include get_template_directory()."/block/block-category-menu-product.php"; ?>
            </div>
        </div>
        <div class="col-lg-9">
            <?php
            if(have_posts()){
                while (have_posts()) {
                    the_post();
                    $post_id=get_the_ID();
                    $title=get_the_title(@$post_id);
                    $excerpt=get_the_excerpt( @$post_id );
                    $content=apply_filters( "the_content", get_the_content( null, false ) );
                    $permalink=get_the_permalink( $post_id );
                    $featured_img=get_the_post_thumbnail_url(@$post_id, 'full');
                    $source_term = wp_get_object_terms( @$post_id,  'za_category' );
                    if(count($source_term) > 0){
                        foreach ($source_term as $key => $value) {
                            $source_term_id[]=$value->term_id;
                        }
                    }
                    $product_price=get_field("zaproduct_price",@$post_id);
                    $product_price_desc_percent=get_field("zaproduct_price_desc_percent",@$post_id);
                    $product_sale_price=get_field("zaproduct_sale_price",@$post_id);
                    $product_price_tiet_kiem=(float)@$product_price - (float)@$product_sale_price;

                    $source_tinh_trang_con_hang=get_field("zaproduct_tinh_trang",@$post_id);
                    $data_thumbnail=get_field("zaproduct_thumbnail_rpt",@$post_id);
                    $source_thumbnail[]=$featured_img;
                    foreach ($data_thumbnail as $key => $value) {
                        $source_thumbnail[]=$value["zaproduct_thumbnail_img"];
                    }
                }
                wp_reset_postdata();
            }
            ?>
            <div class="row box-rox">
                <div class="col-md-5">
                    <div class="box-product-detail-image">
                        <div class="owl-carousel-product-detail-img owl-carousel owl-theme owl-loaded">
                            <?php
                            foreach ($source_thumbnail as $key => $value) {
                                ?>
                                <div class="item">
                                    <div style="background-image: url('<?php echo @$value; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (340/490));"></div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="box-product-thumbnail">
                        <div class="owl-carousel-product-thumbnail owl-carousel owl-theme owl-loaded">
                            <?php
                            foreach ($source_thumbnail as $key => $value) {
                                ?>
                                <div class="item">
                                    <div class="thumbnail-item">
                                        <div style="background-image: url('<?php echo @$value; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (340/490));"></div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-7"></div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
get_footer();
?>