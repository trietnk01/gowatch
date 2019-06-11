<div class="box-product-tera-slim">
    <div class="box-product-trade">
        <h3 class="box-product-trade-h3">Thương hiệu</h3>
        <?php
        $terms = get_terms( array(
            'taxonomy' => 'za_category_trade',
            'hide_empty' => false,
        ) );
        if(count(@$terms) > 0){
            ?>
            <ul class="box-product-trade-lst">
                <?php
                foreach (@$terms as $key=>$value) {
                    $term_permalink=get_term_link( @$value, 'za_category_trade' );
                    $cat=get_category(@$value,OBJECT,  'raw' );
                    ?>
                    <li><a href="<?php echo @$term_permalink; ?>"><span class="box-product-trade-label"><?php echo @$value->name; ?></span><span class="box-product-trade-count"><?php echo floatval(@$cat->count); ?></span></a></li>
                    <?php
                }
                ?>
            </ul>
            <?php
        }
        ?>
    </div>
    <div class="box-product-trade">
        <h3 class="box-product-trade-h3">Giới tính</h3>
        <?php
        $terms = get_terms( array(
            'taxonomy' => 'za_category',
            'hide_empty' => false,
            'parent' => 61
        ) );
        ?>
        <ul class="box-product-trade-lst">
            <?php
            foreach (@$terms as $key=>$value) {
                $term_permalink=get_term_link( @$value, 'za_category_trade' );
                $cat=get_category(@$value,OBJECT,  'raw' );
                ?>
                <li><a href="<?php echo @$term_permalink; ?>"><span class="box-product-trade-label"><?php echo @$value->name; ?></span><span class="box-product-trade-count"><?php echo floatval(@$cat->count); ?></span></a></li>
                <?php
            }
            ?>
        </ul>
    </div>
    <div class="box-product-trade">
        <h3 class="box-product-trade-h3">Giá</h3>
        <form method="POST" action="<?php echo @$permalink_search_product; ?>"  class="frm-price" name="price_form">
            <input type="hidden" name="price_min" value="2000000" />
            <input type="hidden" name="price_max" value="5000000" />
            <div id="filter-price">
            </div>
            <div class="sidebar-content-inner">
              <label for="amount">Từ:</label>
              <input type="text"  readonly id="amount">
            </div>
            <div class="btn-submit">
            <a href="javascript:void(0);" onclick="document.forms['price_form'].submit();">Tìm kiếm</a>
            </div>
            <div class="clr"></div>
        </form>
    </div>
</div>