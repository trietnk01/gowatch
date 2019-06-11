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
$product_sku="";
$product_price=0;
$product_price_desc_percent=0;
$product_sale_price=0;
$product_price_tiet_kiem=0;
$content=null;
$source_term_trade=array();
$product_video_id="";
$data_product_tskt=array();
?>
<div class="box-category-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <?php include get_template_directory()."/block/block-category-menu-product.php"; ?>
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
                        $product_sku=get_field("zaproduct_sku",@$post_id,true);
                        $featured_img=get_the_post_thumbnail_url(@$post_id, 'full');
                        $source_term = wp_get_object_terms( @$post_id,  'za_category' );
                        if(count($source_term) > 0){
                            foreach ($source_term as $key => $value) {
                                $source_term_id[]=$value->term_id;
                            }
                        }
                        $product_price=get_field("zaproduct_price",@$post_id,true);
                        $product_price_desc_percent=get_field("zaproduct_price_desc_percent",@$post_id,true);
                        $product_sale_price=get_field("zaproduct_sale_price",@$post_id,true);
                        $product_price_tiet_kiem=(float)@$product_price - (float)@$product_sale_price;

                        $source_tinh_trang_con_hang=get_field("zaproduct_tinh_trang",@$post_id,true);
                        $data_thumbnail=get_field("zaproduct_thumbnail_rpt",@$post_id,true);
                        $source_thumbnail[]=$featured_img;
                        foreach ($data_thumbnail as $key => $value) {
                            $source_thumbnail[]=$value["zaproduct_thumbnail_img"];
                        }
                        $source_term_trade=wp_get_object_terms( @$post_id,"za_category_trade", array() );
                        $product_video_id=get_field("zaproduct_video_id",@$post_id,true);
                        $data_product_tskt=get_field("zaproduct_thong_so_ky_thuat_rpt",@$post_id);
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
                        <div class="box-product-detail-schema">
                            <h1 class="product-detail-title"><?php echo @$title; ?></h1>
                            <div class="ma-sp-thuong-hieu">
                                <span class="msp-label">Mã sản phẩm:</span>
                                <span class="msp-text"><?php echo @$product_sku; ?></span>
                                <span class="thuong-hieu-label">Thương hiệu:</span>
                                <?php
                                if(count(@$source_term_trade) > 0){
                                    $permalink_term_trade=get_term_link( @$source_term_trade[0], 'za_category_trade' );
                                    ?>
                                    <span class="thuong-hieu-text"><a href="<?php echo @$permalink_term_trade; ?>" ><?php echo @$source_term_trade[0]->name; ?></a></span>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="video-va-review-sp" >
                                <div class="video-icon">
                                    <?php
                                    if(!empty(@$product_video_id)){
                                      ?>
                                      <a href="javascript:void(0);" class="js-modal-btn" data-video-id="qP1U2DYk-PI">
                                        <div style="background-image: url('<?php echo get_template_directory_uri()."/assets/images/icon-video.svg"; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (100/100));"></div>
                                    </a>
                                    <?php
                                }else{
                                    ?>
                                    <a href="javascript:void(0);">
                                        <div style="background-image: url('<?php echo get_template_directory_uri()."/assets/images/icon-video.svg"; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (100/100));"></div>
                                    </a>
                                    <?php
                                }
                                ?>
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
                            <span class="product-sale-price"><?php echo fnPrice(@$product_sale_price); ?> ₫</span>
                            <?php
                            if(floatval(@$product_price) > floatval(@$product_sale_price)){
                                ?>
                                <span class="product-origin-price"><?php echo fnPrice(@$product_price); ?> ₫</span>
                                <?php
                            }
                            ?>
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
                            <span class="product-detail-hotline"><a href="tel:<?php echo get_field("setting_thong_tin_chung_call_now","option"); ?>"><?php echo get_field("setting_thong_tin_chung_hotline","option"); ?></a></span>
                                <!--<span>|</span>
                                    <span class="product-detail-hotline">0926262926</span>-->
                                </div>
                                <div class="product-detail-tai-sao-box">
                                    <h2 class="tsnm">Tại sao nên mua đồng hồ tại <?php echo get_bloginfo( 'name','raw' ); ?></h2>
                                    <div class="product-detail-box-slogan">
                                        <div class="row">
                                            <div class="col-sm-4">
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
                                            <div class="col-sm-4">
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
                                            <div class="col-sm-4">
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
                                            <div class="col-sm-4">
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
                                            <div class="col-sm-4">
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
                                            <div class="col-sm-4">
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
                    <div class="product-info">
                        <div class="tab">
                            <button class="tablinks h-title" onclick="openCity(event, 'thong-so-ky-thuat')">Thông số kỹ thuật</button>
                            <button class="tablinks h-title" onclick="openCity(event, 'danh-gia')">Đánh giá</button>
                            <button class="tablinks h-title" onclick="openCity(event, 'huong-dan-su-dung')">Hướng dẫn sử dụng</button>
                            <button class="tablinks h-title" onclick="openCity(event, 'chinh-sach-bao-hanh')">Chính sách bảo hành</button>
                            <button class="tablinks h-title" onclick="openCity(event, 'chinh-sach-giao-hang')">Chính sách giao hàng</button>
                            <button class="tablinks h-title" onclick="openCity(event, 'phuong-thuc-thanh-toan')">Phương thức thanh toán</button>
                            <div class="clr"></div>
                        </div>
                        <div id="thong-so-ky-thuat" class="tabcontent">
                            <?php
                            if(count(@$data_product_tskt) > 0){
                                ?>
                                <table class="tskt_tb" style="width: 100%;">
                                    <tbody>
                                        <?php
                                        $k=0;
                                        foreach ($data_product_tskt as $key => $value) {
                                            if(floatval($k)%2==0){
                                                ?>
                                                <tr>
                                                    <td class="dong_chan" style="width: 16.1455%; height: 48px; text-align: center;"><?php echo @$value["zaproduct_tskt_label"]; ?></td>
                                                    <td class="dong_chan" style="width: 45.8448%; text-align: center; height: 48px;"><?php echo @$value["zaproduct_tskt_chi_so"]; ?></td>
                                                </tr>
                                                <?php
                                            }else{
                                                ?>
                                                <tr>
                                                    <td class="dong_le" style="width: 16.1455%; height: 48px; text-align: center;"><?php echo @$value["zaproduct_tskt_label"]; ?></td>
                                                    <td class="dong_le" style="width: 45.8448%; text-align: center; height: 48px;"><?php echo @$value["zaproduct_tskt_chi_so"]; ?></td>
                                                </tr>
                                                <?php
                                            }
                                            $k++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <?php
                            }
                            ?>
                        </div>
                        <div id="danh-gia" class="tabcontent">Đánh giá</div>
                        <div id="huong-dan-su-dung" class="tabcontent">Hướng dẫn sử dụng</div>
                        <div id="chinh-sach-bao-hanh" class="tabcontent">Chính sách bảo hành</div>
                        <div id="chinh-sach-giao-hang" class="tabcontent">Chính sách giao hàng</div>
                        <div id="phuong-thuc-thanh-toan" class="tabcontent">Phương thức thanh toán</div>
                    </div>
                    <div class="product-detail-thong-so-ky-thuat">

                    </div>
                    <div class="box-product-detail-related">
                        <h3 class="khuyen-mai-theo-ngay">Sản phẩm tương tự</h3>
                        <div class="owl-carousel-product-related owl-carousel owl-theme owl-loaded">
                            <?php
                            for($i=1;$i<=27;$i++){
                                ?>
                                <div class="item">
                                    <div class="sale-off-on-day-box-item">
                                        <div class="sale-off-box-hinh-tron">
                                            <a href="<?php echo site_url( '',null ); ?>">
                                                <div style="background-image: url('<?php echo wp_upload_dir( null,true,false )["url"]."/dong-ho-khuyen-mai-1.jpg"; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (300/300));"></div>
                                            </a>
                                            <div class="sale-off-box">
                                                <div class="sale-off-txt">Sale off</div>
                                                <div class="sale-off-number">28%</div>
                                            </div>
                                        </div>
                                        <h3 class="sale-off-on-day-title"><a href="<?php echo site_url( '', null ); ?>"><?php echo wp_trim_words( "Đồng Hồ Michael Kors Chính Hãng Nữ MK3821 Camille Pavé Bracelet Rose Gold Watch",55, "[...]" ) ?></a></h3>
                                        <div class="sale-off-on-day-price">
                                            <span class="sale-off-on-day-sale-price">4.900.000 ₫</span>
                                            <span class="sale-off-on-day-sale-original-price">6.800.000 ₫</span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    get_footer();
    ?>