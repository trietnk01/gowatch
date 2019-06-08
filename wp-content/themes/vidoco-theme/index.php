<?php
/*
	Home template default
*/
	get_header();
	?>
	<h1 style="display: none;"><?php echo bloginfo( "name" ); ?></h1>
    <div class="banner-box">
        <?php
        $data_banner=get_field("hp_banner_rpt","option");{
            if (count(@$data_banner) > 0) {
                ?>
                <div class="owl-carousel-banner owl-carousel owl-theme owl-loaded">
                    <?php
                    foreach ($data_banner as $key => $value) {
                        ?>
                        <div class="item">
                            <div style="background-image:url('<?php echo @$value["hp_banner_item"]; ?>');background-repeat: no-repeat;background-size: cover;padding-top:calc(100% / (1519/427));"></div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <?php
    $args = array(
        'post_type' => 'zapartner',
        'orderby' => 'id',
        'order'   => 'DESC',
        'posts_per_page' => -1,
    );
    $the_query_doi_tac=new WP_Query($args);
    if($the_query_doi_tac->have_posts()){
        ?>
        <div class="box-doi-tac">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="owl-carousel-brand owl-carousel owl-theme owl-loaded">
                            <?php
                            while($the_query_doi_tac->have_posts()) {
                                $the_query_doi_tac->the_post();
                                $post_id=$the_query_doi_tac->post->ID;
                                $featured_img=get_the_post_thumbnail_url(@$post_id, 'full');
                                ?>
                                <div class="item">
                                    <div class="brand-item">
                                        <a href="javascript:void(0);">
                                            <figure>
                                                <div style="background-image: url('<?php echo $featured_img; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (200/130));"></div>
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <div class="khuyen-mai-box">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="khuyen-mai-theo-ngay">
                        Khuyến mãi theo ngày
                    </h2>
                    <div class="owl-carousel-sale-off-on-day owl-carousel owl-theme owl-loaded">
                        <?php
                        for($i=1;$i<=4;$i++){
                            ?>
                            <div class="item">
                                <div class="sale-off-on-day-box-item">
                                    <div class="sale-off-box-hinh-tron">
                                        <a href="<?php echo site_url( '',null ); ?>">
                                            <div style="background-image: url('<?php echo wp_upload_dir( null,true,false )["url"]."/dong-ho-khuyen-mai-".$i.".jpg"; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (300/300));"></div>
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
            <div class="row">
                <div class="col">
                    <div class="box-ads-banner">
                        <?php
                        for ($i=1; $i <= 4; $i++) {
                            ?>
                            <div class="box-ads-item">
                                <a href="<?php echo site_url( '', null ); ?>">
                                    <div style="background-image: url('<?php echo wp_upload_dir( null, true, false )["url"]."/bulova-".$i.".jpg"; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (630/290));"></div>
                                    <div class="panel-top-to-bottom"></div>
                                    <div class="panel-bottom-to-top"></div>
                                    <div class="panel-link">
                                        <div class="panel-circle">
                                            <i class="fas fa-link"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="tai-sao-nen-mua">
                        <div class="tai-sao-nen-mua-text">Tại sao nên mua đồng hồ</div>
                        <h2 class="khuyen-mai-theo-ngay margin-top-20">Tại <?php echo get_bloginfo( 'name', 'raw' ); ?> ?</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include get_template_directory()."/block/block-hon-mot-trieu-nguoi-tin-dung.php";
    ?>
    <div class="box-san-pham-ban-chay">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="khuyen-mai-theo-ngay">Sản phẩm bán chạy</h2>
                    <div class="owl-carousel-spbc owl-carousel owl-theme owl-loaded">
                        <?php
                        $j=0;
                        $k=0;
                        for($i=0;$i<16;$i++) {
                            if($j % 8 == 0){
                                echo '<div class="item">';
                            }
                            if($k % 4==0){
                                echo '<div class="row">';
                            }
                            ?>
                            <div class="col-md-3">
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
                            $k++;
                            $j++;
                            if($k % 4==0 || $k == 8){
                                echo '</div>';
                            }
                            if($j % 8 == 0 || $j == 16){
                                echo '</div>';
                            }
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
            <div class="row margin-top-30">
                <div class="col">
                    <h2 class="khuyen-mai-theo-ngay">Tin tức</h2>
                    <div class="box-featured-news">
                        <div class="row">
                            <?php
                            for ($i=1; $i <= 3; $i++) {
                                ?>
                                <div class="col-md-4">
                                    <div class="box-item-news">
                                        <div class="box-item-news-img">
                                            <a href="<?php echo site_url( '', null ); ?>">
                                                <div style="background-image: url('<?php echo wp_upload_dir( null, true, false )["url"]."/news-".$i.".jpg"; ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (800/558));"></div>
                                                <div class="panel-top-to-bottom"></div>
                                                <div class="panel-bottom-to-top"></div>
                                                <div class="panel-link">
                                                    <div class="panel-circle">
                                                        <i class="fas fa-link"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <h3 class="box-item-news-title"><a href="<?php echo site_url( '', null ); ?>"><?php echo wp_trim_words( "Những mẫu đồng hồ Michael Kors chính hãng được “tín đồ” sùng bái nhất", 25,"[...]" ); ?></a></h3>
                                        <div class="box-item-news-excerpt">
                                            <?php echo wp_trim_words( "Michael Kors là một trong những thương hiệu đồng hồ được yêu thích nhất hiện nay và được giới trẻ săn đón rất nhiều. Mẫu đồng hồ Michael Kors chính hãng luôn nhận được sự chào đón nồng hậu từ…",55,"[...]" ); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="row news-readmore">
                            <div class="col">
                                <a href="<?php echo site_url( '',null ); ?>">Xem thêm</a>
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