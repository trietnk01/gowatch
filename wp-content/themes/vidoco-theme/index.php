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
    get_footer();
    ?>