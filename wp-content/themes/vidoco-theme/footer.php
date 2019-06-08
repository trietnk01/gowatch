<?php
/*

Footer template

*/
?>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-xl-2">
        <div class="box-logo">
          <a href="<?php echo site_url( '', null ); ?>">
            <div style="background-image: url('<?php echo get_template_directory_uri()."/assets/images/logo-gowatch-2.svg" ?>');background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (205/60));"></div>
          </a>
        </div>
        <div class="dang-ky-thong-tin-moi-tu-go-watch">Đăng ký thông tin mới từ <?php echo get_bloginfo( 'name','raw' ); ?></div>
        <form class="dang-ky-ngay-box" name="frm_subcribe" method="POST">
          <div class="dang-ky-ngay-txt"><input type="text" name="email" placeholder="Nhập email của bạn..." autocomplete="off"></div>
          <div class="dang-ky-ngay-btn">
            <a href="javascript:void(0);" onclick="registerSubcriber(this);">Gửi</a>
          </div>
          <div class="ajax-box">
            <div class="ajax_loader_1"></div>
          </div>
        </form>
      </div>
      <div class="col-xl-8">
        <div class="footer-menu-group">
          <div class="footer-menu-box">
            <h3 class="footer-menu-h"><?php echo wp_get_nav_menu_name("footer_1"); ?></h3>
            <?php
            $args = array(
              'menu'              => '',
              'container'         => '',
              'container_class'   => '',
              'container_id'      => '',
              'menu_class'        => 'footer-menu-ul',
              'echo'              => true,
              'fallback_cb'       => 'wp_page_menu',
              'before'            => '',
              'after'             => '',
              'link_before'       => '',
              'link_after'        => '',
              'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'             => 3,
              'walker'            => '',
              'theme_location'    => 'footer_1' ,
              'menu_li_actived'       => 'current-menu-item',
              'menu_item_has_children'=> 'menu-item-has-children',
            );
            wp_nav_menu($args);
            ?>
          </div>
          <div class="footer-menu-box">
            <h3 class="footer-menu-h"><?php echo wp_get_nav_menu_name("footer_2"); ?></h3>
            <?php
            $args = array(
              'menu'              => '',
              'container'         => '',
              'container_class'   => '',
              'container_id'      => '',
              'menu_class'        => 'footer-menu-ul',
              'echo'              => true,
              'fallback_cb'       => 'wp_page_menu',
              'before'            => '',
              'after'             => '',
              'link_before'       => '',
              'link_after'        => '',
              'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'             => 3,
              'walker'            => '',
              'theme_location'    => 'footer_2' ,
              'menu_li_actived'       => 'current-menu-item',
              'menu_item_has_children'=> 'menu-item-has-children',
            );
            wp_nav_menu($args);
            ?>
          </div>
          <div class="footer-menu-box">
            <h3 class="footer-menu-h"><?php echo wp_get_nav_menu_name("footer_3"); ?></h3>
            <?php
            $args = array(
              'menu'              => '',
              'container'         => '',
              'container_class'   => '',
              'container_id'      => '',
              'menu_class'        => 'footer-menu-ul',
              'echo'              => true,
              'fallback_cb'       => 'wp_page_menu',
              'before'            => '',
              'after'             => '',
              'link_before'       => '',
              'link_after'        => '',
              'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'             => 3,
              'walker'            => '',
              'theme_location'    => 'footer_3' ,
              'menu_li_actived'       => 'current-menu-item',
              'menu_item_has_children'=> 'menu-item-has-children',
            );
            wp_nav_menu($args);
            ?>
          </div>
          <div class="footer-menu-box">
            <h3 class="footer-menu-h">Tư vấn</h3>
            <ul class="footer-menu-ul">
              <li><a href="javascript:void(0);">Tư vấn mua hàng (11:00 - 21:00)</a></li>
              <li><a href="javascript:void(0);">+84 935 793 939</a></li>
              <li><a href="javascript:void(0);">Góp ý, khiếu nại, bảo hành (11:00 - 21:00)</a></li>
              <li><a href="javascript:void(0);">+84 926 262 926</a></li>
              <li><a href="javascript:void(0);">Hợp tác kinh doanh (11:00 - 21:00)</a></li>
              <li><a href="javascript:void(0);">+84 908 764 264</a></li>
            </ul>
          </div>
          <div class="clr"></div>
        </div>
      </div>
      <div class="col-xl-2">
        <div class="footer-menu-group">
          <div class="footer-menu-box">
            <h3 class="footer-menu-h">Connect with us</h3>
            <ul class="iconsocialbg" itemscope itemtype="http://schema.org/Organization">
              <li><a itemprop="sameAs" href="<?php echo get_field("setting_thong_tin_chung_facebook","option"); ?>"><i class="fab fa-facebook-f"></i></a></li>
              <li><a itemprop="sameAs" href="<?php echo get_field("setting_thong_tin_chung_youtube","option"); ?>"><i class="fab fa-youtube"></i></a></li>
              <li><a itemprop="sameAs" href="<?php echo get_field("setting_thong_tin_chung_instagram","option"); ?>"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <div class="box-bo-cong-thuong">
              <img src="<?php echo get_template_directory_uri()."/assets/images/bo-cong-thuong.png"; ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row box-copyright">
      <div class="col">
        <div class="box-blog-info">&copy;2018 <?php echo get_bloginfo( 'name', 'raw' ); ?> - Hàng Hiệu Nhập Khẩu Go . GPDKKD: 41O8036924 do sở KH & ĐT TP.HCM cấp ngày 21/08/2018.</div>
        <div class="box-copy-right-address">
          <span class="box-cpr-address-bold">Địa chỉ:</span> <span class="box-cpr-address-txt">Tầng Trệt Lô E.02, Chung cư Mỹ Đức, 220 Xô Viết Nghệ Tĩnh, Phường 21, Quận Bình Thạnh , TP.Hồ Chí Minh.</span> <span class="box-cpr-address-bold">Điện thoại:</span> <span class="box-cpr-link"><a href="tel:0935793939">0935 79 39 39</a></span> . <span class="box-cpr-address-bold">Email:</span> <span class="box-cpr-link"><a href="mailto:contact@gowatch.vn">contact@gowatch.vn</a></span>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="modal fade modal-add-cart" id="modal-alert-add-cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="com-product-modal-title">Thông báo</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">

      </div>
    </div>
  </div>
</div>
<div class="scrollTop">
  <a href="javascript:void(0);"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</div>
<?php
wp_footer();
?>
</body>
</html>
