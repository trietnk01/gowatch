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
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<div class="breadcrumbs-lazer">','</div>' );
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
                                    <a href="javascript:void(0);">
                                        <div style="background-image: url('<?php echo @$value; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (500/500));" class="mitom"></div>
                                    </a>
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
                                        <div style="background-image: url('<?php echo @$value; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (500/500));" class="thumbnail-nio"></div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <h1 class="product-detail-title"><?php echo @$title; ?></h1>
                    <div class="ma-sp-thuong-hieu">
                        <span class="msp-label">Mã sản phẩm:</span>
                        <span class="msp-text">98C102</span>
                        <span class="thuong-hieu-label">Thương hiệu:</span>
                        <span class="thuong-hieu-text">Bulova</span>
                    </div>
                    <div class="video-va-review-sp" >
                        <div class="video-icon">
                            <a href="javascript:void(0);">
                                <div style="background-image: url('<?php echo get_template_directory_uri()."/assets/images/icon-video.svg"; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (100/100));"></div>
                            </a>
                        </div>
                        <div class="video-label">
                            Video
                        </div>
                        <div class="video-icon2">
                            <a href="javascript:void();">
                                <div style="background-image: url('<?php echo get_template_directory_uri()."/assets/images/icon-review.svg"; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (100/100));"></div>
                            </a>
                        </div>
                        <div class="video-label">
                            Xem review sản phẩm
                        </div>
                        <div class="clr"></div>
                    </div>
                    <div class="product-detail-price">
                        <span class="product-sale-price">7.500.000 ₫</span>
                        <span class="product-origin-price">10.800.000 ₫</span>
                    </div>
                    <form class="product-detail-quantity-input-form" name="frm_mua_ngay">
                        <div class="product-detail-quantity">
                            <div class="product-detail-quanity-label">
                                Số lượng
                            </div>
                            <div class="product-detail-quantity-input" >
                                <div class="btn-nhap-1"><a href="javascript:void(0);" onclick="minus(this);" class="quantity-left-minus"><i class="fas fa-minus"></i></a></div>
                                <div class="input-nhap"><input name="quantity" value="1"  onkeypress="return isNumberKey(event);" class="quantity_cart" /></div>
                                <div class="btn-nhap-2"><a href="javascript:void(0);" onclick="plus(this);" class="quantity-right-plus"><i class="fas fa-plus"></i></a></div>
                                <div class="clr"></div>
                            </div>
                            <div class="clr"></div>
                        </div>
                        <div class="product-detail-mua-ngay">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#modal-alert-add-cart" onclick="javascript:addToCart(<?php echo $post_id; ?>,document.getElementsByName('quantity')[0].value);">
                                Mua ngay
                            </a>
                            <a href="javascript:void(0);">Mua hàng trả góp</a>
                        </div>
                    </form>
                    <div class="mua-hang-qua-dien-thoai-text">Mua hàng qua điện thoại</div>
                    <div class="product-detail-mua-hang-qua-dt">
                        <div class="icon-mua-hang-qua-dt">
                            <div style="background-image: url('<?php echo get_template_directory_uri()."/assets/images/24h-icon.svg" ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (100/100));"></div>
                        </div>
                        <span>0935793939</span>
                        <span>|</span>
                        <span>0926262926</span>
                    </div>
                    <div class="product-detail-tai-sao-box">
                        <h2 class="tsnm">Tại sao nên mua đồng hồ tại <?php echo get_bloginfo( 'name','raw' ); ?></h2>
                        <div class="product-detail-box-slogan">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="box-item-slogan">
                                        <div class="box-item-sl-img">
                                            <div style="background-image: url('<?php echo get_template_directory_uri()."/assets/images/icon-1.svg"; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (100/100));"></div>
                                        </div>
                                        <div class="box-item-sl-info">
                                            <h3 class="box-item-sl-title">Uy tín hàng đầu</h3>
                                        </div>
                                        <div class="clr"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box-item-slogan">
                                        <div class="box-item-sl-img">
                                            <div style="background-image: url('<?php echo get_template_directory_uri()."/assets/images/icon-2.svg"; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (95/95));"></div>
                                        </div>
                                        <div class="box-item-sl-info">
                                            <h3 class="box-item-sl-title">ĐỔI HÀNG DỄ DÀNG - MIỄN PHÍ</h3>
                                        </div>
                                        <div class="clr"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box-item-slogan">
                                        <div class="box-item-sl-img">
                                            <div style="background-image: url('<?php echo get_template_directory_uri()."/assets/images/icon-3.svg"; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (95/95));"></div>
                                        </div>
                                        <div class="box-item-sl-info">
                                            <h3 class="box-item-sl-title">THANH TOÁN DỄ DÀNG (COD)</h3>
                                        </div>
                                        <div class="clr"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="box-item-slogan">
                                        <div class="box-item-sl-img">
                                            <div style="background-image: url('<?php echo get_template_directory_uri()."/assets/images/icon-4.svg"; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (95/95));"></div>
                                        </div>
                                        <div class="box-item-sl-info">
                                            <h3 class="box-item-sl-title">HẬU MÃI HÀNG ĐẦU</h3>

                                        </div>
                                        <div class="clr"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box-item-slogan">
                                        <div class="box-item-sl-img">
                                            <div style="background-image: url('<?php echo get_template_directory_uri()."/assets/images/icon-5.svg"; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (95/95));"></div>
                                        </div>
                                        <div class="box-item-sl-info">
                                            <h3 class="box-item-sl-title">THAY PIN MIỄN PHÍ</h3>

                                        </div>
                                        <div class="clr"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box-item-slogan">
                                        <div class="box-item-sl-img">
                                            <div style="background-image: url('<?php echo get_template_directory_uri()."/assets/images/icon-6.svg"; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (95/95));"></div>
                                        </div>
                                        <div class="box-item-sl-info">
                                            <h3 class="box-item-sl-title">1 ĐỔI 1</h3>

                                        </div>
                                        <div class="clr"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
get_footer();
?>