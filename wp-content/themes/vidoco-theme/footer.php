<?php
/*

Footer template

*/
?>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
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
      <div class="col-lg-6"></div>
      <div class="col-lg-3"></div>
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
